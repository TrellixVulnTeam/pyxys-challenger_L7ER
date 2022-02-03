const {src, dest, watch, series } = require('gulp');
const gulp = require('gulp');
const sassCompiler = require('gulp-sass')(require('sass'));
const minifyCss = require('gulp-clean-css')
const sourcesMaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

sassCompiler.compiler = require('node-sass');

gulp.task('bundleSass', () => {
    return gulp.src('./assets/sass/**/*.scss')
        .pipe(sourcesMaps.init())
        .pipe(sassCompiler().on('error', sassCompiler.logError))
        .pipe(minifyCss())
        .pipe(sourcesMaps.write())
        .pipe(concat('bundle.min.css'))
        .pipe(dest('./public/build/css/'))
});

gulp.task('bundleJs', () => {
    return gulp.src('./assets/js/*.js')
        .pipe(uglify())
        .pipe(concat('app.min.js'))
        .pipe(gulp.dest('./public/build/js/'))
});

// gulp.task('watch', function() {
//   gulp.watch('assets/js/*.js', gulp.series('pack-js'));
//   gulp.watch('assets/sass/**/*.scss', gulp.series('pack-css'));
// });

// gulp.task('watch', () => {
//     gulp.watch('assets/sass/**/*.scss', bundleSass);
// });

// const devWatch = () => {
//     watch('./assets/sass/**/*.scss', bundleSass);
// }

gulp.task('devWatch', function() {
    watch('./assets/sass/**/*.scss', gulp.series('bundleSass'));
    watch('./assets/js/*.js', gulp.series('bundleJs'));
});

exports.bundleSass = 'bundleSass';
exports.default = series('devWatch');
