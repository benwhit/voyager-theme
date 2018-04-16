// Plugins
var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var plumber = require('gulp-plumber');
var deporder = require('gulp-deporder');
var cleanCSS = require('gulp-clean-css');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var imagemin = require('gulp-imagemin');
var cssBase64 = require('gulp-css-base64');
var gcmq = require('gulp-group-css-media-queries');
var autoprefixer = require('gulp-autoprefixer');
var notify = require("gulp-notify");
var rename = require("gulp-rename");
var sassLint = require('gulp-sass-lint');
var jscs = require('gulp-jscs');

// BrowserSync
gulp.task('browser-sync', function() {
	browserSync.init({

    // Project URL.
		proxy: "local.wordpress.test", // change to local server url

    // `true` Automatically open the browser with BrowserSync live server.
    // `false` Stop the browser from automatically opening.
    open: false,

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
	.pipe( sass( {
			includePaths: ['scss'],
      errLogToConsole: true,
      outputStyle: 'compact',
      // outputStyle: 'compressed',
      // outputStyle: 'nested',
      // outputStyle: 'expanded',
      precision: 10
   	} ) )
  .on('error', console.error.bind(console))
	.pipe(gcmq())
  .pipe(autoprefixer({
      browsers: ['last 2 versions', 'ie 10'],
      cascade: false
  }))
  .pipe(cssBase64())
  .pipe(sassLint())
	.pipe(gulp.dest('css'))
  .pipe( rename( { suffix: '.min' } ) )
	.pipe(cleanCSS())
	.pipe(gulp.dest('css'))
	.pipe( notify( { message: 'TASK: "styles" Completed! 💯', onLast: true } ) )
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


// Gulp Default Task
gulp.task('default', ['sass', 'js', 'imagemin', 'browser-sync'], function () {
	gulp.watch( './**/*.php', reload );
	gulp.watch("./**/*.scss", ['sass']);
	gulp.watch(['js/src/*.js', 'js/theme/*.js'], ['js']);
	gulp.watch('./img/**', ['imagemin'])
});