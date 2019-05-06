/**
 * Vendors
 *
 * Compiles:
 *      ekko-lightbox.css
 *      ekko-lightbox.css.map
 *      ekko-lightbox.min.css
 *      ekko-lightbox.min.css.map
 *      foundation-icons.css
 *      foundation-icons.css.map
 *      foundation-icons.min.css
 *      foundation-icons.min.css.map
 *      bootstrap.css
 *      bootstrap.css.map
 *      bootstrap.min.css
 *      bootstrap-bundle.css
 *      bootstrap-bundle.css.map
 *      bootstrap-bundle.min.css
 *
 * @command gulp vendors
 * @command gulp ekko-lightbox.css
 * @command gulp ekko-lightbox.min.css
 * @command gulp foundation-icons.css
 * @command gulp foundation-icons.min.css
 * @command gulp bootstrap
 * @command gulp bootstrap.css
 * @command gulp bootstrap.min.css
 * @command gulp bootstrap-bundle.css
 * @command gulp bootstrap-bundle.min.css
 */
var gulp            = require('gulp');
var sass            = require('gulp-sass');
var notify          = require('gulp-notify');
var rename          = require('gulp-rename');
var sourcemaps      = require('gulp-sourcemaps');
var autoprefixer    = require('gulp-autoprefixer');
var noComments      = require('gulp-strip-css-comments');
var removeEmpty     = require('gulp-remove-empty-lines');
var lineec          = require('gulp-line-ending-corrector');
const autoprefixers = [
    'last 2 version',
    '> 1%',
    'ie >= 9',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4',
    'bb >= 10'
];


/**
 * Bulk Task
 */
gulp.task('vendors', gulp.series(
    'ekko-lightbox.css',
    'ekko-lightbox.min.css',
    'foundation-icons.css',
    'foundation-icons.min.css',
));


/**
 * Compile Theme Stylesheets
 */
gulp.task('bootstrap', gulp.series(
    'bootstrap.css',
    'bootstrap.min.css',
    'bootstrap-bundle.css',
    'bootstrap-bundle.min.css',
));


/**
 * Create ekko-lightbox.css
 */
gulp.task('ekko-lightbox.css', function () {
    return gulp.src('./inc/assets/vendors/ekko-lightbox/ekko-lightbox.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "ekko-lightbox.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create ekko-lightbox.min.css
 */
gulp.task('ekko-lightbox.min.css', function () {
    return gulp.src('./inc/assets/vendors/ekko-lightbox/ekko-lightbox.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "ekko-lightbox.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create foundation-icons.css
 */
gulp.task('foundation-icons.css', function () {
    return gulp.src('./inc/assets/vendors/foundation/foundation-icons.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "foundation-icons.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create foundation-icons.min.css
 */
gulp.task('foundation-icons.min.css', function () {
    return gulp.src('./inc/assets/vendors/foundation/foundation-icons.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "foundation-icons.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});

/**
 * Create bootstrap.css
 */
gulp.task('bootstrap.css', function () {
    return gulp.src('./inc/assets/bootstrap/bootstrap.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "bootstrap.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create bootstrap.min.css
 */
gulp.task('bootstrap.min.css', function () {
    return gulp.src('./inc/assets/bootstrap/bootstrap.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "bootstrap.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create bootstrap-bundle.css
 */
gulp.task('bootstrap-bundle.css', function () {
    return gulp.src('./inc/assets/bootstrap/bootstrap-bundle.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "bootstrap-bundle.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create bootstrap-bundle.min.css
 */
gulp.task('bootstrap-bundle.min.css', function () {
    return gulp.src('./inc/assets/bootstrap/bootstrap-bundle.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "bootstrap-bundle.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});
