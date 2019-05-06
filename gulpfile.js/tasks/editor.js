/**
 * WordPress Editor Stylesheet
 *
 * Compiles:
 *      theme_editor.css
 *      theme_editor.css.map
 *      theme_editor.min.css
 *
 * @command gulp editor
 * @command gulp editor.css
 * @command gulp editor.min.css
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
 * Compile WordPress Editor Stylesheets
 */
gulp.task('editor', gulp.series('editor.css', 'editor.min.css'));


/**
 * Create editor.css
 */
gulp.task('editor.css', function () {
    return gulp.src('./inc/assets/secretum/theme_editor.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compact'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "editor.css"', onLast: true}))
    .on('error', console.error.bind(console))
});


/**
 * Create editor.min.css
 */
gulp.task('editor.min.css', function () {
    return gulp.src('./inc/assets/secretum/theme_editor.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle:'compressed'}))
    .pipe(noComments())
    .pipe(lineec())
    .pipe(removeEmpty({removeComments: true}))
    .pipe(autoprefixer(autoprefixers))
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(notify({message: 'Created "editor.min.css"', onLast: true}))
    .on('error', console.error.bind(console))
});
