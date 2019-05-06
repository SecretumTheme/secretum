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
var browserSync = require('browser-sync');

function browserReload(done) {
  browserSync.reload();
  done();
}


/**
 * Default Task
 */
gulp.task('default', gulp.series('theme'));


/**
 * Run All Builder Tasks
 */
gulp.task('all', gulp.series(
	'assets',
	['customizer',
	'editor',
	'images',
	'plugins',
	'scripts',
	'theme',
	'themes',
	'translate',
	'vendors']
));


/**
 * Watch For File Changes & Run Tasks
 */
gulp.task('watch', gulp.series('theme', 'themes', 'scripts', function() {
    gulp.watch(['!/node_modules', './**/*.php', './*.php'], gulp.series(browserReload))
    gulp.watch(['./inc/assets/*.scss', './inc/assets/secretum/*.scss', './inc/assets/secretum/**/*.scss'], gulp.series('theme', browserReload))
    gulp.watch(['./inc/assets/secretum/themes/**/*.scss'], gulp.series('themes', browserReload))
    gulp.watch(['./inc/assets/secretum/secretum.js', './inc/assets/customizer/*.js'], gulp.series('scripts', browserReload))
    browserSync.init({proxy: project_url, injectChanges: true, open: true})
}));


/**
 * Delete Theme Assets After Compile
 */
gulp.task('clean', function() {
    return del(['assets'])
});
