const gulp = require('gulp');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const image = require('gulp-image');
sass.compiler = require('node-sass');
var concat = require('gulp-concat');
 
gulp.task('js', function() {
  return gulp.src('./assets/js/*.js')
    .pipe(concat('main.js'))
    .pipe(gulp.dest('./assets/dist/'));
});

gulp.task('image', async () => {
  gulp.src('./assets/img/fixture/*')
    .pipe(image())
    .pipe(gulp.dest('./assets/img/'));
});

gulp.task('sass', async () => {
  gulp.src('./assets/scss/main.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./assets/dist/'))

    .pipe(rename('main.min.css'))
    .pipe(gulp.dest('./assets/dist/'));
});

gulp.task('sass:watch', () => {
  gulp.watch('./assets/scss/**/*.scss', gulp.series(['sass-css']));
});

gulp.task('watch', () => {
  gulp.watch('./assets/scss/**/*.scss', gulp.series(['sass']));
  gulp.watch('./assets/img/fixture/*', gulp.series(['image']));
  gulp.watch('./assets/js/*.js', gulp.series(['js']));
});

gulp.task('default', gulp.series(['watch']));