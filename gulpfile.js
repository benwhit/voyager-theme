const { series, parallel, src, dest, watch } = require('gulp');
const
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
  browserSync = require('browser-sync').create(),
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



const paths = {
  styles: {
    src: 'assets/scss/**/*.scss',
    dest: 'dist/css/'
  },
  scripts: {
    src: 'assets/js/*.js',
    dest: 'dist/js/'
  }
};



/*
 * Gulp Tasks
 */
function reload() {
    browserSync.reload();
}


// Compile SASS files
function styles() {
  return src('assets/scss/voyager.scss', { sourcemaps: true })
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
  .pipe(browserSync.stream())
  .pipe(dest(paths.styles.dest))
  .pipe( rename( { suffix: '.min' } ) )
  .pipe(cleanCSS())
  .pipe(dest(paths.styles.dest))
  .pipe( notify( { message: 'TASK: "styles" Completed! 💯', onLast: true } ) )
}


// Javascript
function js() {
  return src([paths.scripts.src, '!assets/js/customizer.js'])
  .pipe(plumber())
  .pipe(jscs())
  .pipe(jscs.reporter())
  .pipe(deporder())
  .pipe(concat('script.js'))
  .pipe(dest(paths.scripts.dest))
  .pipe( rename( { suffix: '.min' } ) )
  .pipe(uglify())
  .pipe(dest(paths.scripts.dest))
  .pipe( notify( { message: 'TASK: "js" Completed! 🚀', onLast: true } ) )
}

function watcher() {

  browserSync.init({
    proxy: "local.wordpress.test", // change to local server url
    open: true,
    port: 3000
  });

  watch(paths.styles.src, styles);
  watch(paths.scripts.src, series(js, reload));
  watch('**/*.php').on('change', reload);
}

exports.default = series(styles, js, watcher);