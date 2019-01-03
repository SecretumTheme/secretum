'use strict';
/**
 * Secretum Gulpfile
 * @see gulpfile.js/tasks
 *
 * @command npm install
 * @command gulp (assets|styles)
 * @command gulp watch
 * @command gulp sync
 * @command gulp clean
 *
 * @command gulp assets
 * @command gulp editor
 * @command gulp ekko
 * @command gulp images
 * @command gulp scripts
 * @command gulp styles
 * @command gulp themes
 * @command gulp translate
 * @command gulp woocommerce
 */
var gulp            = require('gulp');
var del             = require('del');
var browserSync     = require('browser-sync').create();
var requireDir      = require('require-dir');
var dir             = requireDir('./tasks', { extensions: ['.js'] });
var sequence        = require('run-sequence');
var reload          = browserSync.reload;
var projectURL      = 'secretum.localhost';
var stylesWatch     = './css/**/*.scss';
var scriptsWatch    = './js/*.js';
var filesWatch      = './**/*.php';


/**
 * Gulp Task: Default Task
 *
 * @command gulp
 */
gulp.task('default', function (done) {
    sequence('assets', 'styles', done);
});


/**
 * Gulp Task: Watch For File Changes & Run Tasks
 *
 * @command gulp watch
 */
gulp.task('watch', ['styles', 'scripts', 'images', 'browser-sync'], function () {
    gulp.watch(filesWatch, reload)
    gulp.watch(stylesWatch, ['styles'])
    gulp.watch(scriptsWatch, ['scripts ', reload])
});


/**
 * Gulp Task: Sync Browsers & Devices
 *
 * @command gulp sync
 */
gulp.task('sync', function() {
    browserSync.init({proxy: projectURL, injectChanges: true, open: true})
});


/**
 * Gulp Task: Delete Theme Assets After Compile
 *
 * @command gulp clean
 */
gulp.task('clean', function() {
    return del(['assets'])
});


/**
 * Gulp Task: Run All Tasks
 *
 * @command gulp all
 */
gulp.task('all', function (done) {
    sequence('editor', 'ekko', 'images', 'scripts', 'styles', 'themes', 'translate', 'woocommerce', done);
});


/**
 * Gulp Task: Compile Theme Stylesheets
 *
 * @command gulp styles
 */
gulp.task('styles', function (done) {
    sequence('styles.css', 'styles.min.css', done);
});


/**
 * Gulp Task: Compile Theme Scripts
 *
 * @command gulp scripts
 */
gulp.task('scripts', function (done) {
    sequence('theme.js', 'theme.min.js', done);
});


/**
 * Gulp Task: Compile WordPress Editor Stylesheets
 *
 * @command gulp editor
 */
gulp.task('editor', function (done) {
    sequence('editor.css', 'editor.min.css', done);
});


/**
 * Gulp Task: Compile Ekko Lightbox Stylesheets & Scripts
 *
 * @command gulp ekko
 */
gulp.task('ekko', function (done) {
    sequence('ekko-lightbox.css', 'ekko-lightbox.min.css', 'ekko-lightbox.js', 'ekko-lightbox.min.js', done);
});


/**
 * Gulp Task: Compile WooCommerce & WooCommerce Bookings Stylesheets
 *
 * @command gulp woocommerce
 */
gulp.task('woocommerce', function (done) {
    sequence('woocommerce.css', 'woocommerce.min.css', 'woocommerce-bookings.css', 'woocommerce-bookings.min.css', done);
});
