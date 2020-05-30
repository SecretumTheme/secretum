/**
 * Default Task Commands
 *
 * @command gulp default
 * @command gulp all
 * @command gulp clean
 */
var project_url = 'secretum.localhost';
var gulp        = require('gulp');
var del        	= require('del');


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
 * Delete Theme Assets After Compile
 */
gulp.task('clean', function() {
    return del(['assets'])
});
