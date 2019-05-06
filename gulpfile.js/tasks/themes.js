/**
 * Custom Color & Styling Themes
 *
 * Compiles:
 *      css/themes/theme-color-name/theme.css
 *      css/themes/theme-color-name/theme.css.map
 *      css/themes/theme-color-name/theme.min.css
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
 * Compile Custom Color & Styling Themes
 */
gulp.task('themes', gulp.series(
    'themes.css',
    'themes.min.css',
));


/**
 * Create theme-color-name/theme.css
 */
gulp.task('themes.css', function () {
    return gulp.src('./inc/assets/secretum/themes/**/theme.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css/themes'))
    .pipe(notify({message: 'Created Stylesheets For Themes', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create theme-color-name/theme.min.css
 */
gulp.task('themes.min.css', function () {
    return gulp.src('./inc/assets/secretum/themes/**/theme.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css/themes'))
    .pipe(notify({message: 'Created Minimized Stylesheets For Themes', onLast: true}))
    .on('error', console.error.bind(console))
});
