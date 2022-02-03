const {src, dest, watch } = require('gulp');
var gulp = require('gulp');
var compileSass = require('gulp-sass');
var concat = require('gulp-concat');
var minify = require('gulp-minify');
var cleanCss = require('gulp-clean-css');
var rev = require('gulp-rev');
var del = require('del');

compileSass.compiler = require('node-sass');

gulp.task('clean-js', function () {
  return del([
    'public/build/js/*.js'
  ]);
});

gulp.task('clean-css', function () {
  return del([
    'public/build/css/*.css'
  ]);
});

gulp.task('pack-js', gulp.series('clean-js'), function () {
  return gulp.src('assets/js/*.js')
    .pipe(concat('bundle.js'))
    .pipe(minify({
        ext:{
            min:'.js'
        },
        noSource: true
    }))
    .pipe(rev())
    .pipe(gulp.dest('public/build/js'))
    .pipe(rev.manifest('public/build/rev-manifest.json', {
      merge: true
    }))
    .pipe(gulp.dest(''));
});

gulp.task('pack-css', gulp.series('clean-css'), function () {
  return gulp.src('assets/sass/**/*.scss')
    .pipe(concat('bundle.css'))
    .pipe(compileSass().on('error', compileSass.logError))
    // .pipe(cleanCss())
    .pipe(rev())
    .pipe(gulp.dest('public/build/css'))
    .pipe(rev.manifest('public/build/rev-manifest.json', {
      merge: true
    }))
    .pipe(gulp.dest(''));
});

gulp.task('watch', function() {
  gulp.watch('assets/js/*.js', gulp.series('pack-js'));
  gulp.watch('assets/sass/**/*.scss', gulp.series('pack-css'));
});

// gulp.task('watch', function() {
//     gulp.watch('assets/js/*.js', gulp.series('pack-js'));
//     gulp.watch('assets/sass/**/*.scss', packCss);
// });

gulp.task('default', gulp.series('watch'));
