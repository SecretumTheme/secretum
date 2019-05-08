/**
 * Default Theme themeheet
 *
 * Compiles:
 *      customizer.min.css
 *      customizer.min.css.map
 *      custom-sections.min.css
 *      custom-sections.min.css.map
 *
 * @command gulp customizer
 * @command gulp customizer.min.css
 * @command gulp custom-sections.min.css
 */
var gulp 			= require('gulp');
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
 * Compile Theme Stylesheets
 */
gulp.task('customizer', gulp.series(
    'customizer.min.css',
    'custom-sections.min.css',
));


/**
 * Create customizer.min.css
 */
gulp.task('customizer.min.css', function () {
    return gulp.src('./inc/assets/secretum/customizer/customizer.css')
    //.pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    //.pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css/customizer'))
    .pipe(notify({message: 'Created "customizer.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create custom-sections.min.css
 */
gulp.task('custom-sections.min.css', function () {
    return gulp.src('./inc/assets/secretum/customizer/custom-sections.css')
    //.pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    //.pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css/customizer'))
    .pipe(notify({message: 'Created "custom-sections.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});
