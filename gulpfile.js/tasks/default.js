/**
 * Default Task Commands
 *
 * @command gulp default
 * @command gulp all
 * @command gulp watch
 * @command gulp clean
 */
var project_url = 'secretum.localhost';
var gulp        = require('gulp');
var del        	= require('del');
var sequence    = require('run-sequence');
var browserSync = require('browser-sync');

function browserReload(done) {
  browserSync.reload();
  done();
}


/**
 * Default Task
 */
gulp.task('default', gulp.series('assets', 'theme'));


/**
 * Run All Builder Tasks
 */
gulp.task('all', gulp.series('assets', 'editor', 'images', 'scripts', 'theme', 'themes', 'woocommerce', 'translate'));


/**
 * Watch For File Changes & Run Tasks
 */
gulp.task('watch', gulp.series('assets', 'theme', 'scripts', function() {
    gulp.watch(['!/node_modules', './**/*.php', './*.php'], gulp.series(browserReload))
    gulp.watch(['./inc/assets/*.scss', './inc/assets/scss/*.scss', './inc/assets/scss/themes/**/*.scss'], gulp.series('assets', 'theme', browserReload))
    gulp.watch(['./inc/assets/secretum.js'], gulp.series('assets', 'scripts', browserReload))
    browserSync.init({proxy: project_url, injectChanges: true, open: true})
}));


/**
 * Delete Theme Assets After Compile
 */
gulp.task('clean', function() {
    return del(['assets'])
});
