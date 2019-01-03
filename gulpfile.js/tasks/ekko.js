/**
 * Secretum Gulp Task: Ekko Lightbox
 *
 * Compiles:
 * 		css/ekko-lightbox.css
 * 		css/ekko-lightbox.css.map
 * 		css/ekko-lightbox.min.css
 *      js/ekko-lightbox.js
 *      js/ekko-lightbox.min.js
 *
 * @command gulp ekko
 * @command gulp ekko-lightbox.css
 * @command gulp ekko-lightbox.min.css
 * @command gulp ekko-lightbox.js
 * @command gulp ekko-lightbox.min.js
 */
var gulp 			= require('gulp');
var sass            = require('gulp-sass');
var notify          = require('gulp-notify');
var rename          = require('gulp-rename');
var concat          = require('gulp-concat');
var uglify          = require('gulp-uglify');
var sourcemaps      = require('gulp-sourcemaps');
var autoprefixer    = require('gulp-autoprefixer');
var noComments      = require('gulp-strip-css-comments');
var removeEmpty     = require('gulp-remove-empty-lines');
var lineec          = require('gulp-line-ending-corrector');
var scssSRC         = './assets/css/secretum/ekko-lightbox.scss';
var descSRC         = './css';
var scriptSRC       = './assets/js/ekko-lightbox.js';
var scriptDestPath  = './js';

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

gulp.task('ekko-lightbox.css', function () {
    return gulp.src(scssSRC)
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(descSRC))
    .pipe(notify({message: 'Created "ekko-lightbox.css"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('ekko-lightbox.min.css', function () {
    return gulp.src(scssSRC)
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(descSRC))
    .pipe(notify({message: 'Created "ekko-lightbox.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('ekko-lightbox.js', function () {
    return gulp.src(scriptSRC)
    .pipe(concat('ekko-lightbox.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(gulp.dest(scriptDestPath))
    .pipe(notify({message: 'Created "ekko-lightbox.js"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('ekko-lightbox.min.js', function () {
    return gulp.src(scriptSRC)
    .pipe(concat('ekko-lightbox.min.js'))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(uglify())
    .pipe(gulp.dest(scriptDestPath))
    .pipe(notify({message: 'Created "ekko-lightbox.min.js"', onLast: true}))
    .on('error', console.error.bind(console))
});
