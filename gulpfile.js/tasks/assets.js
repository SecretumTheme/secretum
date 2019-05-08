/**
 * Copy Theme Assets inc/assets to /assets
 *
 * @command gulp assets
 */
var gulp    = require('gulp');
var del     = require('del');
var notify  = require('gulp-notify');
var concat  = require('gulp-concat');
var replace = require('gulp-replace');


/**
 * Clear Old Copied Assets
 */
gulp.task('clean-assets', function(){
     return del(['./inc/assets/vendors/**', '!vendors'], {force:true});
});


/**
 * Copy Assets
 */
gulp.task('assets', function(done) {
    var stream

    // Theme JavaScript
    gulp.src('./inc/assets/secretum/secretum.js').pipe(gulp.dest('./js'))

    // Customizer Assets
    gulp.src('./inc/assets/secretum/customizer/*.css').pipe(gulp.dest('./css/customizer'))
    gulp.src('./inc/assets/secretum/customizer/*.js').pipe(gulp.dest('./js/customizer'))

    // Vendor: Ekko Lightbox
    gulp.src('./node_modules/ekko-lightbox/dist/ekko-lightbox.css').pipe(concat('ekko-lightbox.scss')).pipe(gulp.dest('./inc/assets/vendors/ekko-lightbox'))
    gulp.src([
        './node_modules/ekko-lightbox/dist/ekko-lightbox.js',
        //'./node_modules/ekko-lightbox/dist/ekko-lightbox.js.map',
        './node_modules/ekko-lightbox/dist/ekko-lightbox.min.js',
        //'./node_modules/ekko-lightbox/dist/ekko-lightbox.min.js.map',
    ]).pipe(gulp.dest('./js'))

    // Vendor: Bootstrap4
    gulp.src('./node_modules/bootstrap/scss/**/*.scss').pipe(gulp.dest('./inc/assets/vendors/bootstrap4'))
    gulp.src('./node_modules/bootstrap/dist/js/bootstrap.bundle.js').pipe(gulp.dest('./inc/assets/vendors/bootstrap4'))
    gulp.src([
        './node_modules/bootstrap/dist/js/bootstrap.bundle.js',
        //'./node_modules/bootstrap/dist/js/bootstrap.bundle.js.map',
        './node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
        //'./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js.map',
        './node_modules/bootstrap/dist/js/bootstrap.js',
        //'./node_modules/bootstrap/dist/js/bootstrap.js.map',
        './node_modules/bootstrap/dist/js/bootstrap.min.js',
        //'./node_modules/bootstrap/dist/js/bootstrap.min.js.map',
    ]).pipe(gulp.dest('./js'))

    // Vendor: Popper.js
    gulp.src([
        './node_modules/popper.js/dist/popper.js',
        //'./node_modules/popper.js/dist/popper.js.map',
        './node_modules/popper.js/dist/popper.min.js',
        //'./node_modules/popper.js/dist/popper.min.js.map',
    ]).pipe(gulp.dest('./js'))

    // Vendor: Foundation
    gulp.src('./node_modules/foundation-icons/foundation-icons.scss').pipe(replace("url('", "url('../fonts/")).pipe(gulp.dest('./inc/assets/vendors/foundation'))
    //gulp.src('./node_modules/foundation-icons/svgs/*.svg').pipe(gulp.dest('./images/svg'))
    gulp.src('./node_modules/foundation-icons/*.{eot,svg,ttf,woff}').pipe(gulp.dest('./fonts'))

    .pipe(notify({message: 'Assets Moved', onLast: true}))

    done();
    return stream
});