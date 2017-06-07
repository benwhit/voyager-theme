var gulp = require('gulp');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var browserSync = require('browser-sync');

gulp.task('sass', function () {
    gulp.src('sass/styles.scss')
    	.pipe(plumber())
        .pipe(sass({includePaths: ['scss']}))
        .pipe(gulp.dest('css'));
});

gulp.task('browser-sync', function() {
    browserSync.init(["css/*.css", "js/*.js", "*.html", "*.php"], {
        proxy: "local.wordpress.dev"
    });
});

gulp.task('default', ['sass', 'browser-sync'], function () {
    gulp.watch("sass/*.scss", ['sass']);
});