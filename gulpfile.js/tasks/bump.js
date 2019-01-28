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
gulp.task('bump', gulp.series('prompt', 'functionsphp', 'packagejson', 'readmemd', 'readmetxt', 'stylecss', 'updatesjson'));


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
gulp.task('functionsphp', function() {
    return gulp.src('./functions.php', {base: process.cwd()})
    .pipe(replace("'" + current_version + "'", "'" + next_version + "'"))
    .pipe(notify({message: 'functions.php updated to: ' + next_version, onLast: true}))
    .pipe(gulp.dest('.'));
});


/**
 * Update Version Number For Sourced Files
 */
gulp.task('packagejson', function() {
    return gulp.src('./package.json', {base: process.cwd()})
    .pipe(replace("\"version\": \"" + current_version + "\"", "\"version\": \"" + next_version + "\""))
    .pipe(notify({message: 'package.json updated to: ' + next_version, onLast: true}))
    .pipe(gulp.dest('.'));
});


/**
 * Update Version Number For Sourced Files
 */
gulp.task('readmemd', function() {
    return gulp.src('./README.md', {base: process.cwd()})
    .pipe(replace("**Version:** " + current_version, "**Version:** " + next_version))
    .pipe(notify({message: 'README.md updated to: ' + next_version, onLast: true}))
    .pipe(gulp.dest('.'));
});


/**
 * Update Version Number For Sourced Files
 */
gulp.task('readmetxt', function() {
    return gulp.src('./readme.txt', {base: process.cwd()})
    .pipe(replace("Version: " + current_version, "Version: " + next_version))
    .pipe(notify({message: 'readme.txt updated to: ' + next_version, onLast: true}))
    .pipe(gulp.dest('.'));
});


/**
 * Update Version Number For Sourced Files
 */
gulp.task('stylecss', function() {
    return gulp.src('./style.css', {base: process.cwd()})
    .pipe(replace("Version:     " + current_version, "Version:     " + next_version))
    .pipe(notify({message: 'style.css updated to: ' + next_version, onLast: true}))
    .pipe(gulp.dest('.'));
});


/**
 * Update Version Number For Sourced Files
 */
gulp.task('updatesjson', function() {
    return gulp.src('./updates.json', {base: process.cwd()})
    .pipe(replace(current_version, next_version))
    .pipe(notify({message: 'updates.json updated to: ' + next_version, onLast: true}))
    .pipe(gulp.dest('.'));
});
