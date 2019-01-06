/**
 * Default Theme Combined Scripts
 *
 * Compiles:
 *      js/theme.js
 *      js/theme.min.js
 *      js/secretum.js
 *      js/secretum.min.js
 *      js/bootstrap.bundle.js
 *      js/bootstrap.bundle.min.js
 *
 * @command gulp scripts
 * @command gulp theme.js
 * @command gulp theme.min.js
 * @command gulp secretum.js
 * @command gulp secretum.min.js
 * @command gulp bootstrap.bundle.js
 * @command gulp bootstrap.bundle.min.js
 */
var gulp        = require('gulp');
var notify      = require('gulp-notify');
var rename      = require('gulp-rename');
var concat      = require('gulp-concat');
var uglify      = require('gulp-uglify');
var sequence    = require('run-sequence');
var noComments  = require('gulp-strip-css-comments');
var lineec      = require('gulp-line-ending-corrector');


/**
 * Compile Theme Scripts
 */
gulp.task('scripts', gulp.series('theme.js', 'theme.min.js', 'secretum.js', 'secretum.min.js', 'bootstrap.bundle.js', 'bootstrap.bundle.min.js'));


/**
 * Create theme.js
 */
gulp.task('theme.js', function () {
    return gulp.src(['./assets/js/*.js', './assets/js/**/*.js'])
    .pipe(concat('theme.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(gulp.dest('./js'))
    .pipe(notify({message: 'Created "theme.js"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create theme.min.js
 */
gulp.task('theme.min.js', function () {
    return gulp.src(['./assets/js/*.js', './assets/js/**/*.js'])
    .pipe(concat('theme.min.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(gulp.dest('./js'))
    .pipe(notify({message: 'Created "theme.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create secretum.js
 */
gulp.task('secretum.js', function () {
    return gulp.src('./assets/js/secretum.js')
    .pipe(concat('secretum.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(gulp.dest('./js'))
    .pipe(notify({message: 'Created "secretum.js"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create secretum.min.js
 */
gulp.task('secretum.min.js', function () {
    return gulp.src('./assets/js/secretum.js')
    .pipe(concat('secretum.min.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(gulp.dest('./js'))
    .pipe(notify({message: 'Created "secretum.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create bootstrap.bundle.js
 */
gulp.task('bootstrap.bundle.js', function () {
    return gulp.src('./assets/js/bootstrap.bundle.js')
    .pipe(concat('bootstrap.bundle.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(gulp.dest('./js'))
    .pipe(notify({message: 'Created "bootstrap.bundle.js"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create bootstrap.bundle.min.js
 */
gulp.task('bootstrap.bundle.min.js', function () {
    return gulp.src('./assets/js/bootstrap.bundle.js')
    .pipe(concat('bootstrap.bundle.min.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(gulp.dest('./js'))
    .pipe(notify({message: 'Created "bootstrap.bundle.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});
