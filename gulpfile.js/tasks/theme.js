/**
 * Default Theme themeheet
 *
 * Compiles:
 *      theme.css
 *      theme.css.map
 *      theme.min.css
 *
 * @command gulp theme
 * @command gulp theme.css
 * @command gulp theme.min.css
 */
var gulp 			= require('gulp');
var sass            = require('gulp-sass');
var notify          = require('gulp-notify');
var rename          = require('gulp-rename');
var sequence        = require('run-sequence');
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
 * Compile Theme Stylesheets
 */
gulp.task('theme', gulp.series('theme.css', 'theme.min.css'));


/**
 * Create theme.css
 */
gulp.task('theme.css', function () {
    return gulp.src('./assets/css/theme.scss')
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "theme.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create theme.min.css
 */
gulp.task('theme.min.css', function () {
    return gulp.src('./assets/css/theme.scss')
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "theme.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});
