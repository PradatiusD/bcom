/// ///////////////////////////
// Required
/// //////////////////////////

const gulp = require('gulp')
const uglify = require('gulp-uglify')
const browserSync = require('browser-sync')
const reload = browserSync.reload
const sass = require('gulp-sass')
const rename = require('gulp-rename')
const plumber = require('gulp-plumber')
const sourcemaps = require('gulp-sourcemaps')
const imagemin = require('gulp-imagemin')
// const autoprefixer = require('gulp-autoprefixer')
const php2html = require('gulp-php2html')

/// ///////////////////////////
// script task
/// //////////////////////////
gulp.task('scripts', function () {
  gulp.src(['js/*.js', '!js/*.min.js'])
    .pipe(plumber())
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest('js'))
    .pipe(reload({ stream: true }))
})

/// ///////////////////////////
// sass task
/// //////////////////////////
gulp.task('sass', function () {
  return gulp.src('scss/**/*.scss')
    .pipe(plumber())
    .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
    // .pipe(autoprefixer('last 2 versions'))
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write('maps'))
    .pipe(gulp.dest('css'))
    .pipe(reload({ stream: true }))
})

/// ///////////////////////////
// Image min task
/// //////////////////////////
gulp.task('imagemin', () =>
  gulp.src('img/**/*')
    .pipe(imagemin({
      progressive: true,
      optimizationLevel: 5
    }))
    .pipe(gulp.dest('images'))
)

/// ///////////////////////////
// CSS task
/// //////////////////////////
gulp.task('css', function () {
  gulp.src('css/**/*.css')
    .pipe(rename({ suffix: '.min' }))
    .pipe(reload({ stream: true }))
})

/// ///////////////////////////
// HTML task
/// //////////////////////////
gulp.task('html', function () {
  gulp.src('index.php')
    .pipe(php2html({
      verbose: true
    }))
    .pipe(gulp.dest('.'))
    .pipe(reload({ stream: true }))
})

/// ///////////////////////////
// BrowserSync task
/// //////////////////////////
gulp.task('browser-sync', function () {
  browserSync({
    server: {
      baseDir: './'
    }
  })
})

/// ///////////////////////////
// Watch task
/// //////////////////////////
gulp.task('watch', function () {
  // gulp.watch('js/**/*.js', ['scripts']);
  gulp.watch('scss/**/*.scss', ['sass'])
  gulp.watch('*.php', ['html'])
})

/// ///////////////////////////
// Default task
/// //////////////////////////
gulp.task('default', ['scripts', 'sass', 'imagemin', 'html', 'css', 'browser-sync', 'watch'])
