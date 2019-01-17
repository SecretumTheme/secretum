/**
 * Copy Theme Assets inc/assets to /assets
 *
 * @command gulp assets
 */
var gulp    = require('gulp');
var notify  = require('gulp-notify');
var concat  = require('gulp-concat');
var replace = require('gulp-replace');


/**
 * Copy Assets
 */
gulp.task('assets', function(done) {
    var stream

    // Custom Theme Variables
    gulp.src('./inc/assets/theme_variables.scss').pipe(gulp.dest('./assets'))

    // Custom Theme Styles
    gulp.src('./inc/assets/theme_styles.scss').pipe(gulp.dest('./assets'))

    // Images
    gulp.src('./inc/assets/images/*.{png,jpg,gif,svg}').pipe(gulp.dest('./assets/images'))

    // Editor CSS
    gulp.src('./inc/assets/theme_editor.scss').pipe(gulp.dest('./assets/css'))

    // Secretum Theme
    gulp.src('./inc/assets/theme.scss').pipe(gulp.dest('./assets/css'))
    gulp.src('./inc/assets/scss/*.scss').pipe(gulp.dest('./assets/css/secretum'))
    gulp.src('./inc/assets/scss/*/*.scss').pipe(gulp.dest('./assets/css/secretum'))
    gulp.src('./inc/assets/scss/*/*/*.scss').pipe(gulp.dest('./assets/css/secretum'))
    gulp.src('./inc/assets/secretum.js').pipe(gulp.dest('./assets/js'))

    // Bootstrap
    gulp.src('./node_modules/bootstrap/scss/**/*.scss').pipe(gulp.dest('./assets/css/bootstrap4'))
    gulp.src('./node_modules/bootstrap/dist/js/bootstrap.bundle.js').pipe(gulp.dest('./assets/js'))

    // Ekko Lightbox
    gulp.src('./node_modules/ekko-lightbox/dist/ekko-lightbox.css').pipe(concat('ekko-lightbox.min.css')).pipe(gulp.dest('./css'))
    gulp.src('./node_modules/ekko-lightbox/dist/ekko-lightbox.js').pipe(gulp.dest('./assets/js/ekko-lightbox'))

    // Open Iconic
    gulp.src('./node_modules/foundation-icons/foundation-icons.scss').pipe(replace("url('", "url('../fonts/")).pipe(concat('_foundation-icons.scss')).pipe(gulp.dest('./assets/css/secretum'))
    gulp.src('./node_modules/foundation-icons/foundation-icons.scss').pipe(replace("url('", "url('../../../fonts/")).pipe(concat('_foundation-icons.scss')).pipe(gulp.dest('./assets/css/themes'))
    gulp.src('./node_modules/foundation-icons/svgs/*.svg').pipe(gulp.dest('./images/svg'))
    gulp.src('./node_modules/foundation-icons/*.{eot,svg,ttf,woff}').pipe(gulp.dest('./fonts'))

    .pipe(notify({message: 'Assets Moved', onLast: true}))

    done();
    return stream
});
