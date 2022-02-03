const {src, dest, watch, series } = require('gulp');
const gulp = require('gulp');
const sassCompiler = require('gulp-sass')(require('sass'));
const minifyCss = require('gulp-clean-css')
const sourcesMaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

sassCompiler.compiler = require('node-sass');

gulp.task('bundleSass', () => {
    return gulp.src('./resources/assets/styles/**/*.scss')
        .pipe(sourcesMaps.init())
        .pipe(sassCompiler().on('error', sassCompiler.logError))
        .pipe(minifyCss())
        .pipe(sourcesMaps.write())
        .pipe(concat('bundle.min.css'))
        .pipe(dest('./resources/assets/build/css/'))
});

gulp.task('bundleJs', () => {
    return gulp.src('./resources/assets/scripts/*.js')
        .pipe(uglify())
        .pipe(concat('app.min.js'))
        .pipe(gulp.dest('./resources/assets/build/js/'))
});

gulp.task('devWatch', function() {
    watch('./resources/assets/styles/**/*.scss', gulp.series('bundleSass'));
    watch('./resources/assets/scripts/*.js', gulp.series('bundleJs'));
});

exports.bundleSass = 'bundleSass';
exports.default = series('devWatch');
