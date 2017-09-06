// Plugins
var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var plumber = require('gulp-plumber');
var deporder = require('gulp-deporder');
var cleanCSS = require('gulp-clean-css');
var browserSync = require('browser-sync');


// Compile SASS files
gulp.task('sass', function () {
	gulp.src('sass/styles.scss')
	.pipe(plumber())
	.pipe(sass({includePaths: ['scss']}))
	.pipe(cleanCSS())
	.pipe(gulp.dest('css'))
});

// BrowserSync
gulp.task('browser-sync', function() {
	browserSync.init([
		"css/*.css",
		"js/*.js",
		"*.html",
		"*.php",
		"**/*.php"], {
		proxy: "cornerstone.dev", // change to local server url
		port: 3010 // change to unused port
	});
});

// Javascript
gulp.task('js', function(){
	gulp.src('js/src/*.js')
	.pipe(plumber())
	.pipe(deporder())
	.pipe(concat('script.js'))
	.pipe(uglify())
	.pipe(gulp.dest('js/'))
});


// Gulp Default Task
gulp.task('default', ['sass', 'js', 'browser-sync'], function () {
	gulp.watch("sass/*.scss", ['sass']);
	gulp.watch("sass/**/*.scss", ['sass']);
	gulp.watch("js/src/*.js", ['js']);
});