/**
 * Secretum Gulp Task: Color & Styling Themes
 *
 * Compiles:
 *      /theme-color-name/theme.css
 *      /theme-color-name/theme.css.map
 *      /theme-color-name/theme.min.css
 *
 * @command gulp themes
 * @command gulp themes.css
 * @command gulp themes.min.css
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
var scssSRC   		= './assets/css/secretum/themes/**/*.scss';
var descSRC     	= './css/themes';

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

gulp.task('themes', function () {
    gulp.start('themes.css')
    gulp.start('themes.min.css')
});

gulp.task('themes.css', function () {
    return gulp.src(scssSRC)
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(descSRC))
    .pipe(notify({message: 'Created "themes.css"', onLast: true}))
    .on('error', console.error.bind(console))
});

gulp.task('themes.min.css', function () {
    return gulp.src(scssSRC)
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(descSRC))
    .pipe(notify({message: 'Created "themes.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});
