
// Gulp.
var gulp = require('gulp');

// Sass/CSS stuff.
var gulpSass = require('gulp-sass');
var dartSass = require('sass');
var concat = require('gulp-concat');
const sass = gulpSass(dartSass);
var rename = require('gulp-rename');

gulp.task('styles', function() {
    var task = gulp.src('scss/main.scss')
    .pipe(sass({
        outputStyle: 'compressed',
    }));
    return task.pipe(rename('styles.css'))
    .pipe(gulp.dest('.'));
});

gulp.task('edweditor', function() {
    var task = gulp.src('scss/edw_editor.scss')
    .pipe(sass({
        outputStyle: 'compressed',
    }));
    return task.pipe(rename('edw_editor.css'))
    .pipe(gulp.dest('./styles'));
});
