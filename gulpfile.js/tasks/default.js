/**
 * Default Task Commands
 *
 * @command gulp default
 * @command gulp watch
 * @command gulp sync
 * @command gulp clean
 * @command gulp all
 */
var project_url = 'secretum.localhost';
var gulp        = require('gulp');
var del        	= require('del');
var sequence    = require('run-sequence');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;


/**
 * Default Task
 */
gulp.task('default', function (done) {
    sequence('assets', 'theme', done);
});


/**
 * Watch For File Changes & Run Tasks
 */
gulp.task('watch', ['assets', 'theme', 'themes', 'scripts', 'images', 'sync'], function () {
    gulp.watch(['!/node_modules', './**/*.php', './*.php'], reload)
    gulp.watch(['./inc/assets/*.scss', './inc/assets/scss/*.scss', './inc/assets/scss/themes/**/*.scss'], ['assets', 'theme', reload])
    gulp.watch(['./inc/assets/secretum.js'], ['assets', 'scripts ', reload])
});


/**
 * Sync Browsers & Devices
 */
gulp.task('sync', function() {
    browserSync.init({proxy: project_url, injectChanges: true, open: true})
});


/**
 * Delete Theme Assets After Compile
 */
gulp.task('clean', function() {
    return del(['assets'])
});


/**
 * Run All Builder Tasks
 */
gulp.task('all', function (done) {
    sequence('editor', 'images', 'scripts', 'theme', 'themes', 'woocommerce', 'translate', done);
});
