//////////////////////////////
// Required
/////////////////////////////

var gulp          =  require('gulp'),
    uglify        =  require('gulp-uglify'),
    browserSync   =  require('browser-sync'),
    reload        =  browserSync.reload,
    sass          =  require('gulp-sass'),
    rename        =  require('gulp-rename'),
    plumber       =  require('gulp-plumber'),
    sourcemaps    =  require('gulp-sourcemaps'),
    imagemin      =  require('gulp-imagemin'),
    del           =  require('del'),
    autoprefixer  =  require('gulp-autoprefixer'),
    php2html      =  require("gulp-php2html")
;


//////////////////////////////
// script task
/////////////////////////////
gulp.task('scripts', function(){
  gulp.src(['js/*.js','!js/*.min.js'])
  .pipe(plumber())
  .pipe(rename({suffix:'.min'}))
  .pipe(uglify())
  .pipe(gulp.dest('js'))
  .pipe(reload({stream:true}));
});


//////////////////////////////
// sass task
/////////////////////////////
gulp.task('sass', function () {
 return gulp.src('scss/**/*.scss')
  .pipe(plumber())
  .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
  .pipe(autoprefixer('last 2 versions'))
  .pipe(sourcemaps.init())
  .pipe(sourcemaps.write('maps'))
  .pipe(gulp.dest('css'))
  .pipe(reload({stream:true}));
});


//////////////////////////////
// Image min task
/////////////////////////////
gulp.task('imagemin', () =>
  gulp.src('img/**/*')
  .pipe(imagemin({
      progressive: true,
      optimizationLevel: 5
  }))
    .pipe(gulp.dest('images'))
);


//////////////////////////////
// CSS task
/////////////////////////////
gulp.task('css', function(){
  gulp.src('css/**/*.css')
  .pipe(rename({suffix:'.min'}))
  .pipe(reload({stream:true}));
});


//////////////////////////////
// HTML task
/////////////////////////////
gulp.task('html', function(){
  console.log("yay")
  gulp.src("*.php")
    .pipe(php2html())
    .pipe(gulp.dest("."))
    .pipe(reload({stream:true}));
});


//////////////////////////////
// BrowserSync task
/////////////////////////////
gulp.task('browser-sync', function(){
  browserSync({
    server:{
      baseDir:"./"
    }
  })
});


//////////////////////////////
// Watch task
/////////////////////////////
gulp.task('watch', function(){
  //gulp.watch('js/**/*.js', ['scripts']);
  gulp.watch('scss/**/*.scss', ['sass']);
  gulp.watch('*.php', ['html']);
});


//////////////////////////////
// Default task
/////////////////////////////
gulp.task('default', ['scripts','sass','imagemin','html','css','browser-sync','watch']);