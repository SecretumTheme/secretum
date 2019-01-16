'use strict';
/**
 * Secretum Gulpfile
 * @see gulpfile.js/tasks
 *
 * @command npm install
 * @command gulp --silent
 * @command gulp watch --silent
 * @command gulp clean --silent
 * @command gulp bump --silent
 *
 * @command gulp assets --silent
 * @command gulp editor --silent
 * @command gulp images --silent
 * @command gulp scripts --silent
 * @command gulp theme --silent
 * @command gulp themes --silent
 * @command gulp translate --silent
 * @command gulp woocommerce --silent
 */
var gulp        = require('gulp');
var requireDir  = require('require-dir');
var forwardRef 	= require('undertaker-forward-reference');

gulp.registry(forwardRef());
requireDir('./tasks', {extensions: ['.js']});
