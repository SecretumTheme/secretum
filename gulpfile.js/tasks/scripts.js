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
var secretumJsSRC   = './assets/js/secretum.js';
var bootstrapJsSRC  = './assets/js/bootstrap.bundle.js';
var scriptsSRC      = './assets/js/*.js';
var scriptsDestPath = './js';

gulp.task('theme.js', function () {
    return gulp.src(scriptsSRC)
    .pipe(concat('theme.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(gulp.dest(scriptsDestPath))
    .pipe(notify({message: 'Created "theme.js"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('theme.min.js', function () {
    return gulp.src(scriptsSRC)
    .pipe(concat('theme.min.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(gulp.dest(scriptsDestPath))
    .pipe(notify({message: 'Created "theme.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('secretum.js', function () {
    return gulp.src(secretumJsSRC)
    .pipe(concat('secretum.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(gulp.dest(scriptsDestPath))
    .pipe(notify({message: 'Created "secretum.js"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('secretum.min.js', function () {
    return gulp.src(secretumJsSRC)
    .pipe(concat('secretum.min.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(gulp.dest(scriptsDestPath))
    .pipe(notify({message: 'Created "secretum.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('bootstrap.bundle.js', function () {
    return gulp.src(secretumJsSRC)
    .pipe(concat('bootstrap.bundle.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(gulp.dest(scriptsDestPath))
    .pipe(notify({message: 'Created "bootstrap.bundle.js"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('bootstrap.bundle.min.js', function () {
    return gulp.src(secretumJsSRC)
    .pipe(concat('bootstrap.bundle.min.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(gulp.dest(scriptsDestPath))
    .pipe(notify({message: 'Created "bootstrap.bundle.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});
