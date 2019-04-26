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

    // Custom User Assets
    gulp.src([
        './inc/assets/theme_variables.scss',
        './inc/assets/theme_styles.scss'
    ]).pipe(gulp.dest('./assets'))

    // Secretum Style Assets
    gulp.src([
        './inc/assets/scss/*.scss',
        './inc/assets/scss/*/*.scss',
        './inc/assets/scss/*/*/*.scss',
    ]).pipe(gulp.dest('./assets/css/secretum'))

    // Scretum JavaScript Assets
    gulp.src('./inc/assets/secretum.js').pipe(gulp.dest('./assets/js'))
    gulp.src('./inc/assets/customizer/*.js').pipe(gulp.dest('./assets/js/customizer'))
    gulp.src('./inc/assets/customizer/*.js').pipe(gulp.dest('./js/customizer'))

    // Theme Base Style Assets
    gulp.src([
        './inc/assets/theme.scss',
        './inc/assets/theme_editor.scss',
    ]).pipe(gulp.dest('./assets/css'))

    // Theme Image Assets
    gulp.src('./inc/assets/images/*.{png,jpg,gif,svg}').pipe(gulp.dest('./assets/images'))

    // Theme Customizer Style Assets
    gulp.src('./inc/assets/customizer/*.css').pipe(gulp.dest('./css/customizer'))
    gulp.src('./inc/assets/customizer/*.css').pipe(gulp.dest('./assets/css/customizer'))

    // Vendor Ekko Lightbox
    gulp.src('./node_modules/ekko-lightbox/dist/ekko-lightbox.css').pipe(concat('ekko-lightbox.min.css')).pipe(gulp.dest('./css'))

    // Vendor Bootstrap4
    gulp.src('./node_modules/bootstrap/scss/**/*.scss').pipe(gulp.dest('./assets/css/bootstrap4'))
    gulp.src('./node_modules/bootstrap/dist/js/bootstrap.bundle.js').pipe(gulp.dest('./assets/js'))

    // Move Pre-Built JavaScript Assets To Public Scripts Directory
    gulp.src([
        './inc/assets/secretum.js',
        './node_modules/bootstrap/dist/js/bootstrap.bundle.js',
        './node_modules/bootstrap/dist/js/bootstrap.bundle.js.map',
        './node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
        './node_modules/bootstrap/dist/js/bootstrap.bundle.min.js.map',
        './node_modules/ekko-lightbox/dist/ekko-lightbox.js',
        './node_modules/ekko-lightbox/dist/ekko-lightbox.js.map',
        './node_modules/ekko-lightbox/dist/ekko-lightbox.min.js',
        './node_modules/ekko-lightbox/dist/ekko-lightbox.min.js.map',
    ]).pipe(gulp.dest('./js'))

    // Vendor Foundation Open Iconic
    gulp.src('./node_modules/foundation-icons/foundation-icons.scss').pipe(replace("url('", "url('../fonts/")).pipe(concat('_foundation-icons.scss')).pipe(gulp.dest('./assets/css/secretum'))
    gulp.src('./node_modules/foundation-icons/foundation-icons.scss').pipe(replace("url('", "url('../../../fonts/")).pipe(concat('_foundation-icons.scss')).pipe(gulp.dest('./assets/css/themes'))
    //gulp.src('./node_modules/foundation-icons/svgs/*.svg').pipe(gulp.dest('./images/svg'))
    gulp.src('./node_modules/foundation-icons/*.{eot,svg,ttf,woff}').pipe(gulp.dest('./fonts'))

    .pipe(notify({message: 'Assets Moved', onLast: true}))

    done();
    return stream
});
