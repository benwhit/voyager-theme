const LOCAL_SERVER = "pristinepowerwash.test";

const {
  series,
  parallel,
  src,
  dest,
  watch
} = require('gulp');

const
  sourcemaps = require('gulp-sourcemaps'),
  sass = require('gulp-sass'),
  cleanCSS = require('gulp-clean-css'),
  gcmq = require('gulp-group-css-media-queries'),
  autoprefixer = require('gulp-autoprefixer'),
  babel = require('gulp-babel'),
  uglify = require('gulp-uglify'),
  browserSync = require('browser-sync').create(),
  concat = require('gulp-concat'),
  plumber = require('gulp-plumber'),
  notify = require("gulp-notify"),
  rename = require("gulp-rename");

const paths = {
  styles: {
    src: 'assets/scss/**/*.scss',
    dest: 'assets/css/'
  },
  scripts: {
    src: 'assets/js/src/*.js',
    dest: 'assets/js/'
  }
};


function reload(done) {
  browserSync.reload();
  done();
}


// Compile SASS files
function styles(done) {
  return src('assets/scss/voyager.scss', { sourcemaps: true })
  .pipe(plumber())
  .pipe(sass( {
      includePaths: ['scss'],
      errLogToConsole: true,
      outputStyle: 'compact',
      precision: 10
  }))
  .on('error', console.error.bind(console))
  .pipe(autoprefixer({
      browsers: [
      "> 1%",
      "ie >= 11",
      "last 2 versions"],
      cascade: true
  }))
  .pipe(gcmq())
  .pipe(browserSync.stream())
  .pipe(dest(paths.styles.dest))
  .pipe(rename( { suffix: '.min' } ) )
  .pipe(cleanCSS())
  .pipe(dest(paths.styles.dest))
  .pipe(notify( { message: 'TASK: "styles" Completed! 💯', onLast: true } ) );
}


// Javascript
function js(done) {
  return src(paths.scripts.src)
  .pipe(plumber())
  .pipe(concat('script.js'))
  .pipe(dest(paths.scripts.dest))
  .pipe(rename( { suffix: '.min' } ) )
  .pipe(uglify())
  .pipe(dest(paths.scripts.dest))
  .pipe(notify( { message: 'TASK: "js" Completed! 🚀', onLast: true } ) );
}


function watcher(done) {
  browserSync.init({
    proxy: LOCAL_SERVER,
    open: true,
    port: 8000,
    https: false
  });

  watch([paths.styles.src], styles);
  watch(['assets/js/src/*.js'], series(js, reload));
  watch(['**/*.php']).on('change', series(reload));
}

exports.default = series(styles, js, watcher);
