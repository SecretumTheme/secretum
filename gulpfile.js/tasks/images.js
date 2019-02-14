/**
 * Minify Images (png, jpeg, gif, svg)
 *
 * Compiles:
 *      images/*.(png, jpeg, gif, svg)
 *
 * @command gulp images
 */
var gulp 		= require('gulp');
var notify 		= require('gulp-notify');
var imagemin 	= require('gulp-imagemin');


/**
 * Minify Images
 */
gulp.task('images', function() {
    return gulp.src(['./assets/images/*.{jpg,gif,.ng,svg}', './assets/images/**/*.{jpg,gif,png,svg}'])
    .pipe(imagemin({progressive: true, optimizationLevel: 3, interlaced: true, svgoPlugins: [{removeViewBox: false}]}))
    .pipe(gulp.dest('./images'))
    .pipe(notify({message: 'Task "images" completed!', onLast: true}))
    .on('error', console.error.bind(console))
});
