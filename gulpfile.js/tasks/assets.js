/**
 * Secretum Gulp Task: Copy Theme Assets inc/assets to /assets
 *
 * @command gulp assets
 */
var gulp        = require('gulp');
var concat      = require('gulp-concat');
var fileSRC     = './inc/assets';
var vendorSRC   = './node_modules';
var descSRC     = './assets';

gulp.task('assets', function() {
    var stream

    // Custom Theme Variables
    gulp.src(fileSRC + '/theme_variables.scss').pipe(gulp.dest(descSRC))

    // Custom Theme Styles
    gulp.src(fileSRC + '/theme_styles.scss').pipe(gulp.dest(descSRC))

    // Images
    gulp.src(fileSRC + '/images/*.{png,jpg,gif,svg}').pipe(gulp.dest(descSRC + '/images'))

    // Editor CSS
    gulp.src(fileSRC + '/theme_editor.scss').pipe(gulp.dest(descSRC + '/css'))

    // Secretum Theme
    gulp.src(fileSRC + '/theme.scss').pipe(gulp.dest(descSRC + '/css'))
    gulp.src(fileSRC + '/scss/*.scss').pipe(gulp.dest(descSRC + '/css/secretum'))
    gulp.src(fileSRC + '/scss/*/*.scss').pipe(gulp.dest(descSRC + '/css/secretum'))
    gulp.src(fileSRC + '/scss/*/*/*.scss').pipe(gulp.dest(descSRC + '/css/secretum'))
    gulp.src(fileSRC + '/secretum.js').pipe(gulp.dest(descSRC + '/js'))

    // Bootstrap
    gulp.src(vendorSRC + '/bootstrap/scss/**/*.scss').pipe(gulp.dest(descSRC + '/css/bootstrap4'))
    gulp.src(vendorSRC + '/bootstrap/dist/js/bootstrap.bundle.js').pipe(gulp.dest(descSRC + '/js'))

    // Ekko Lightbox
    gulp.src(vendorSRC + '/ekko-lightbox/dist/ekko-lightbox.css').pipe(concat('ekko-lightbox.min.css')).pipe(gulp.dest('./css'))
    gulp.src(vendorSRC + '/ekko-lightbox/dist/ekko-lightbox.min.js').pipe(gulp.dest('./js'))
    gulp.src(vendorSRC + '/ekko-lightbox/dist/ekko-lightbox.min.js.map').pipe(gulp.dest('./js'))

    return stream
});
