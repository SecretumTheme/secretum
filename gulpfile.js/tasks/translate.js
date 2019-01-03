/**
 * Secretum Gulp Task: Generate Translation POT File
 *
 * Compiles:
 *      languages/secretum.pot
 *
 * @command gulp translate
 */
var gulp 				= require('gulp');
var sort 				= require('gulp-sort');
var notify 				= require('gulp-notify');
var wpPot 				= require('gulp-wp-pot');
var textDomain          = 'secretum';
var langFile            = 'secretum.pot';
var langDestination     = './lang';
var packageName         = 'secretum';
var bugReport           = 'https://github.com/SecretumTheme/secretum/issues';
var lastTranslator      = 'Hostmaster <hostmaster@secretumtheme.com>';
var team                = 'Hostmaster <hostmaster@secretumtheme.com>';
var filesWatch          = './**/*.php';

gulp.task('translate', function () {
    return gulp.src(filesWatch)
    .pipe(sort())
    .pipe(wpPot({domain: textDomain, package: packageName, bugReport: bugReport, lastTranslator: lastTranslator, team: team}))
    .pipe(gulp.dest(langDestination + '/' + langFile))
    .pipe(notify({message: 'Task "translate" created ' + langFile, onLast: true}))
    .on('error', console.error.bind(console))
});
