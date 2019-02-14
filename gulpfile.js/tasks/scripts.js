/**
 * Default Theme Combined Scripts
 *
 * Compiles:
 *      js/theme.js
 *      js/theme.min.js
 *      js/secretum.min.js
 *      js/customizer/customize-preview.min.js
 *      js/customizer/customize-controls.min.js
 *      js/customizer/customize-sections.min.js
 *
 * @command gulp scripts
 * @command gulp theme.js
 * @command gulp theme.min.js
 * @command gulp secretum.min.js
 * @command gulp customize-preview.min.js
 * @command gulp customize-controls.min.js
 * @command gulp customize-sections.min.js
 */
var gulp        = require('gulp');
var notify      = require('gulp-notify');
var rename      = require('gulp-rename');
var concat      = require('gulp-concat');
var uglify      = require('gulp-uglify');
var sourcemaps  = require('gulp-sourcemaps');
var noComments  = require('gulp-strip-comments');
var lineec      = require('gulp-line-ending-corrector');


/**
 * Compile Theme Scripts
 */
gulp.task('scripts', gulp.series(
    'theme.js',
    'theme.min.js',
    'secretum.min.js',
    'customize-preview.min.js',
    'customize-controls.min.js',
    'customize-sections.min.js',
));


/**
 * Create theme.js
 */
gulp.task('theme.js', function () {
    return gulp.src(['./assets/js/*.js'])
    .pipe(sourcemaps.init())
    .pipe(concat('theme.js'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./js'))
    .pipe(notify({message: 'Created "theme.js"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create theme.min.js
 */
gulp.task('theme.min.js', function () {
    return gulp.src(['./assets/js/*.js'])
    .pipe(concat('theme.min.js'))
    .pipe(sourcemaps.init())
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./js'))
    .pipe(notify({message: 'Created "theme.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create secretum.min.js
 */
gulp.task('secretum.min.js', function () {
    return gulp.src('./assets/js/secretum.js')
    .pipe(concat('secretum.min.js'))
    .pipe(sourcemaps.init())
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./js'))
    .pipe(notify({message: 'Created "secretum.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create js/customizer/customize-preview.js
 */
gulp.task('customize-preview.min.js', function () {
    return gulp.src('./assets/js/customizer/customize-preview.js')
    .pipe(concat('customize-preview.min.js'))
    .pipe(sourcemaps.init())
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./js/customizer'))
    .pipe(notify({message: 'Created "customize-preview.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create js/customizer/customize-controls.js
 */
gulp.task('customize-controls.min.js', function () {
    return gulp.src('./assets/js/customizer/customize-controls.js')
    .pipe(concat('customize-controls.min.js'))
    .pipe(sourcemaps.init())
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./js/customizer'))
    .pipe(notify({message: 'Created "customize-controls.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create js/customizer/customize-sections.js
 */
gulp.task('customize-sections.min.js', function () {
    return gulp.src('./assets/js/customizer/customize-sections.js')
    .pipe(concat('customize-sections.min.js'))
    .pipe(sourcemaps.init())
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./js/customizer'))
    .pipe(notify({message: 'Created "customize-sections.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});
