/**
 * WordPress Plugin Integration
 *
 * Compiles:
 *      ekko-lightbox.css
 *      ekko-lightbox.css.map
 *      ekko-lightbox.min.css
 *      ekko-lightbox.min.css.map
 *      contact-form-7.css
 *      contact-form-7.css.map
 *      contact-form-7.min.css
 *      contact-form-7.min.css.map
 *      woocommerce.css
 *      woocommerce.css.map
 *      woocommerce.min.css
 *      woocommerce-bookings.css
 *      woocommerce-bookings.css.map
 *      woocommerce-bookings.min.css
 *
 * @command gulp plugins
 * @command gulp ekko-lightbox.css
 * @command gulp ekko-lightbox.min.css
 * @command gulp contact-form-7.css
 * @command gulp contact-form-7.min.css
 * @command gulp woocommerce.css
 * @command gulp woocommerce.min.css
 * @command gulp woocommerce-bookings.css
 * @command gulp woocommerce-bookings.min.css
 */
var gulp            = require('gulp');
var sass            = require('gulp-sass');
var notify          = require('gulp-notify');
var rename          = require('gulp-rename');
//var sourcemaps      = require('gulp-sourcemaps');
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
 * Compile WooCommerce & WooCommerce Bookings Stylesheets
 */
gulp.task('plugins', gulp.series(
    'ekko-lightbox.css',
    'ekko-lightbox.min.css',
    'contact-form-7.css',
    'contact-form-7.min.css',
    'woocommerce.css',
    'woocommerce.min.css',
    'woocommerce-bookings.css',
    'woocommerce-bookings.min.css',
));


/**
 * Create ekko-lightbox.css
 */
gulp.task('ekko-lightbox.css', function () {
    return gulp.src('./inc/assets/vendors/ekko-lightbox/ekko-lightbox.scss')
    //.pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    //.pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "ekko-lightbox.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create ekko-lightbox.min.css
 */
gulp.task('ekko-lightbox.min.css', function () {
    return gulp.src('./inc/assets/vendors/ekko-lightbox/ekko-lightbox.scss')
    //.pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    //.pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "ekko-lightbox.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create contact-form-7.css
 */
gulp.task('contact-form-7.css', function () {
    return gulp.src('./inc/assets/secretum/plugins/contact-form-7.scss')
    //.pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    //.pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "contact-form-7.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create contact-form-7.min.css
 */
gulp.task('contact-form-7.min.css', function () {
    return gulp.src('./inc/assets/secretum/plugins/contact-form-7.scss')
    //.pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    //.pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "contact-form-7.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create woocommerce.css
 */
gulp.task('woocommerce.css', function () {
    return gulp.src('./inc/assets/secretum/plugins/woocommerce.scss')
    //.pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    //.pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "woocommerce.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create woocommerce.min.css
 */
gulp.task('woocommerce.min.css', function () {
    return gulp.src('./inc/assets/secretum/plugins/woocommerce.scss')
    //.pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    //.pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "woocommerce.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create woocommerce-bookings.css
 */
gulp.task('woocommerce-bookings.css', function () {
    return gulp.src('./inc/assets/secretum/plugins/woocommerce-bookings.scss')
    //.pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    //.pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "woocommerce-bookings.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create woocommerce-bookings.min.css
 */
gulp.task('woocommerce-bookings.min.css', function () {
    return gulp.src('./inc/assets/secretum/plugins/woocommerce-bookings.scss')
    //.pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    //.pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "woocommerce-bookings.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});
