/*
 * Gulp Plugins
 */

const gulp = require('gulp'),
  //Sourcemaps
  sourcemaps = require('gulp-sourcemaps'),
  // CSS/SCSS
  sass = require('gulp-sass'),
  cleanCSS = require('gulp-clean-css'),
  cssBase64 = require('gulp-css-base64'),
  gcmq = require('gulp-group-css-media-queries'),
  autoprefixer = require('gulp-autoprefixer'),
  sassLint = require('gulp-sass-lint'),
  // Javascript
  babel = require('gulp-babel'),
  uglify = require('gulp-uglify'),
  jscs = require('gulp-jscs'),
  // BrowserSync
  browserSync = require('browser-sync'),
  reload = browserSync.reload,
  // Concatenation
  concat = require('gulp-concat'),
  // Error Checking
  plumber = require('gulp-plumber'),
  // Order Dependencies
  deporder = require('gulp-deporder'),
  // Task Completion Notifications
  notify = require("gulp-notify"),
  // Files
  rename = require("gulp-rename");


/*
 * Gulp Tasks
 */

// BrowserSync
gulp.task('browser-sync', function() {
  browserSync.init({

    // Project URL.
    proxy: "local.wordpress.test", // change to local server url

    // `true` Automatically open the browser with BrowserSync live server.
    // `false` Stop the browser from automatically opening.
    open: true,

    // Inject CSS changes.
    // Commnet it to reload browser for every CSS change.
    injectChanges: true,

    // Use a specific port (instead of the one auto-detected by Browsersync).
    port: 3000
  });
});

// Compile SASS files
gulp.task('sass', function () {
  gulp.src('sass/voyager.scss')
  .pipe(plumber())
  .pipe(sourcemaps.init())
  .pipe( sass( {
      includePaths: ['scss'],
      errLogToConsole: true,
      outputStyle: 'compact',
      precision: 10
    } ) )
  .on('error', console.error.bind(console))
  .pipe(autoprefixer({
      browsers: [
      "> 1%",
      "ie >= 11",
      "last 1 Android versions",
      "last 1 ChromeAndroid versions",
      "last 2 Chrome versions",
      "last 2 Firefox versions",
      "last 2 Safari versions",
      "last 2 iOS versions",
      "last 2 Edge versions",
      "last 2 Opera versions"],
      cascade: true
  }))
  .pipe(gcmq())
  .pipe(cssBase64())
  .pipe(sassLint())
  //.pipe(gulp.dest('css'))
  .pipe( rename( { suffix: '.min' } ) )
  .pipe(sourcemaps.write())
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


// Gulp Default Task
gulp.task('default', ['sass', 'js', 'browser-sync'], function () {
  gulp.watch( 'js/*.js', reload );
  gulp.watch(['*.php', '**/*.php'], reload );
  gulp.watch(['js/src/*.js', 'js/theme/*.js'], ['js']);
  gulp.watch(["sass/*.scss", "sass/**/*.scss"], ['sass']);
});