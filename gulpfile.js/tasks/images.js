/**
 * Secretum Gulp Task: Minify Images (png, jpeg, gif, svg)
 *
 * Compiles:
 *      images/*.(png, jpeg, gif, svg)
 *
 * @command gulp images
 */
var gulp 			= require('gulp');
var notify          = require('gulp-notify');
var imagemin        = require('gulp-imagemin');
var imagesSRC       = './assets/images/*.{png,jpg,gif,svg}';
var imagesDestPath  = './images/';

gulp.task('images', function() {
    return gulp.src(imagesSRC)
    .pipe(imagemin({progressive: true, optimizationLevel: 3, interlaced: true, svgoPlugins: [{removeViewBox: false}]}))
    .pipe(gulp.dest(imagesDestPath))
    .pipe(notify({message: 'Task "images" completed!', onLast: true}))
    .on('error', console.error.bind(console))
});
