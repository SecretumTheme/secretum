/**
 * Secretum Gulp Task: WooCommerce & WooCommerce Bookings
 *
 * Compiles:
 * 		woocommerce.css
 * 		woocommerce.css.map
 * 		woocommerce.min.css
 * 		woocommerce-bookings.css
 * 		woocommerce-bookings.css.map
 * 		woocommerce-bookings.min.css
 *
 * @command gulp woocommerce
 * @command gulp woocommerce.css
 * @command gulp woocommerce.min.css
 * @command gulp woocommerce-bookings.css
 * @command gulp woocommerce-bookings.min.css
 */
var gulp 			= require('gulp');
var sass            = require('gulp-sass');
var notify          = require('gulp-notify');
var rename          = require('gulp-rename');
var sourcemaps      = require('gulp-sourcemaps');
var autoprefixer    = require('gulp-autoprefixer');
var noComments      = require('gulp-strip-css-comments');
var removeEmpty     = require('gulp-remove-empty-lines');
var lineec          = require('gulp-line-ending-corrector');
var woocommerceSRC  = './assets/css/secretum/woocommerce.scss';
var bookingsSRC   	= './assets/css/secretum/woocommerce-bookings.scss';
var descSRC     	= './css';

const AUTOPREFIXER_BROWSERS = [
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

gulp.task('woocommerce.css', function () {
    return gulp.src(woocommerceSRC)
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(descSRC))
    .pipe(notify({message: 'Created "woocommerce.css"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('woocommerce.min.css', function () {
    return gulp.src(woocommerceSRC)
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(descSRC))
    .pipe(notify({message: 'Created "woocommerce.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('woocommerce-bookings.css', function () {
    return gulp.src(bookingsSRC)
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(descSRC))
    .pipe(notify({message: 'Created "woocommerce-bookings.css"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('woocommerce-bookings.min.css', function () {
    return gulp.src(bookingsSRC)
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(descSRC))
    .pipe(notify({message: 'Created "woocommerce-bookings.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});
