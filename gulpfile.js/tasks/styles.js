/**
 * Secretum Gulp Task: Default Theme Stylesheet
 *
 * Compiles:
 *      theme.css
 *      theme.css.map
 *      theme.min.css
 *
 * @command gulp theme
 * @command gulp styles.css
 * @command gulp styles.min.css
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
var scssSRC   		= './assets/css/theme.scss';
var cssDestPath     = './css';

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

gulp.task('styles.css', function () {
    return gulp.src(scssSRC)
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(cssDestPath))
    .pipe(notify({message: 'Created theme.css', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('styles.min.css', function () {
    return gulp.src(scssSRC)
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(cssDestPath))
    .pipe(notify({message: 'Created theme.min.css', onLast: true}))
    .on('error', console.error.bind(console))
});
