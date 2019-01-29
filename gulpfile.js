// Plugins
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    plumber = require('gulp-plumber'),
    deporder = require('gulp-deporder'),
    cleanCSS = require('gulp-clean-css'),
    browserSync = require('browser-sync'),
    imagemin = require('gulp-imagemin'),
    cssBase64 = require('gulp-css-base64'),
    gcmq = require('gulp-group-css-media-queries'),
    autoprefixer = require('gulp-autoprefixer'),
    notify = require("gulp-notify"),
    rename = require("gulp-rename"),
    sassLint = require('gulp-sass-lint'),
    jscs = require('gulp-jscs'),
    jscs = require('gulp-changed'),
    reload = browserSync.reload;

// BrowserSync
gulp.task('browser-sync', function() {
  browserSync.init({
    // Project URL.
    proxy: "voyager.test", // change to local server url
    // `true` Automatically open the browser with BrowserSync live server.
    open: true,
    // Inject CSS changes.
    injectChanges: true,
    // Use a specific port (instead of the one auto-detected by Browsersync).
    port: 3000
  });
});

// Compile SASS files
gulp.task('sass', function () {
  gulp.src('sass/voyager.scss')
  .pipe(changed('./css'))
  .pipe(plumber())
  .pipe( sass( {
      includePaths: ['scss'],
      errLogToConsole: true,
      outputStyle: 'compact',
      precision: 10
    } ) )
  .on('error', console.error.bind(console))
  .pipe(autoprefixer({
      browsers: [
      "last 1 version",
      "> 1%",
      "maintained node versions",
      "not dead"],
      cascade: true
  }))
  .pipe(gcmq())
  .pipe(cssBase64())
  .pipe(sassLint())
  .pipe(gulp.dest('css'))
  .pipe( rename( { suffix: '.min' } ) )
  .pipe(cleanCSS())
  .pipe(gulp.dest('css'))
  .pipe( notify( { message: 'TASK: "styles" Completed! 💯', onLast: true } ) )
  .pipe(browserSync.stream());
});

// Javascript
gulp.task('js', function(){
  gulp.src(['js/src/*.js', 'js/theme/*.js', '!js/theme/customizer.js'])
  .pipe(plumber())
  .pipe(jscs())
  .pipe(jscs.reporter())
  .pipe(deporder())
  .pipe(concat('script.js'))
  .pipe( rename( { suffix: '.min' } ) )
  .pipe(uglify())
  .pipe(gulp.dest('js/'))
  .pipe( notify( { message: 'TASK: "js" Completed! 🚀', onLast: true } ) )
});

// Imagemin
gulp.task('imagemin', () =>
    gulp.src('images/src/**')
    .pipe(imagemin())
    .pipe(gulp.dest('images/'))
);

gulp.task('watch', function() {
  gulp.watch( './**/*.php', reload );
  gulp.watch( './js/*.js', reload );
  gulp.watch(['js/src/*.js', 'js/theme/*.js'], ['js']);
  gulp.watch(["./**/*.scss", "./sass/**/*.scss"], ['sass']);
  gulp.watch('./img/**', ['imagemin']);
});


// Gulp Default Task
gulp.task('default', ['watch', 'sass', 'js', 'imagemin', 'browser-sync']);