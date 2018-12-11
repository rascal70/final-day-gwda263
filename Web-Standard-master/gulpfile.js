// Call or give it a varible
let gulp = require("gulp"),
    sass = require('gulp-sass'),
    purge = require('gulp-css-purge'),
    cleanCSS = require('gulp-clean-css');
const htmlPartial = require('gulp-html-partial');


gulp.task('html', function () {
    gulp.src(['src/html/*.html'])
        .pipe(htmlPartial({
            basePath: 'src/html/partials/'
        }))
        .pipe(gulp.dest('build'));
});

gulp.task('css', function () {
    gulp.src(['src/sass/*.scss'])
        .pipe(sass())
        .pipe(purge())
        .pipe(cleanCSS())
        .pipe(gulp.dest('build/css'));
});

gulp.task('default',['html','css']); 

