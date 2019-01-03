/**
 * Secretum Gulp Task: Default Theme Combined Scripts
 *
 * Compiles:
 *      js/theme.js
 *      js/theme.min.js
 *
 * @command gulp scripts
 * @command gulp theme.css
 * @command gulp theme.min.css
 * @command gulp theme.js
 * @command gulp theme.min.js
 */
var gulp 			= require('gulp');
var notify          = require('gulp-notify');
var rename          = require('gulp-rename');
var concat          = require('gulp-concat');
var uglify          = require('gulp-uglify');
var noComments      = require('gulp-strip-css-comments');
var lineec          = require('gulp-line-ending-corrector');
var scriptSRC       = './assets/js/*.js';
var scriptDestPath  = './js';

gulp.task('theme.js', function () {
    return gulp.src(scriptSRC)
    .pipe(concat('theme.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(gulp.dest(scriptDestPath))
    .pipe(notify({message: 'Created "theme.js"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('theme.min.js', function () {
    return gulp.src(scriptSRC)
    .pipe(concat('theme.min.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(gulp.dest(scriptDestPath))
    .pipe(notify({message: 'Created "theme.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});
