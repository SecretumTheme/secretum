/**
 * Bump Version Number Update
 *
 * @command gulp bump
 * @command gulp prompt
 * @command gulp version
 */
var gulp            = require('gulp');
var inquirer        = require('inquirer');
var notify          = require('gulp-notify');
var replace         = require('gulp-replace');
var current_version = require('../../package.json').version;
var next_version;


/**
 * Bump Version Prompt & Version Update
 */
gulp.task('bump', gulp.series('prompt', 'version'));


/**
 * Inject Version Prompt
 */
gulp.task('prompt', function(cb) {
    inquirer.prompt([{
        type: 'input',
        name: 'version',
        message: 'What version are we moving to? (Current version is ' + current_version + ')'
    }])
        .then(function(res) {
        next_version = res.version;
        cb();
    });
});


/**
 * Update Version Number For Sourced Files
 */
gulp.task('version', function() {
    return gulp.src(['./functions.php', './package.json', './README.md', './readme.txt', './style.css', './updates.json'], {base: process.cwd()})
    .pipe(replace(current_version, next_version))
    .pipe(notify({message: 'Version Updated To: ' + next_version, onLast: true}))
    .pipe(gulp.dest('.'));
});