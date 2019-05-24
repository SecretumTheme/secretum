/**
 * Generate Translation POT File
 *
 * Compiles:
 *      lang/secretum.pot
 *
 * @command gulp translate
 */
var gulp 				= require('gulp');
var sort 				= require('gulp-sort');
var notify 				= require('gulp-notify');
var wpPot 				= require('gulp-wp-pot');
var text_domain         = 'secretum';
var bug_report          = 'https://github.com/SecretumTheme/secretum/issues';
var translator_contact 	= 'SecretumTheme <author@secretumtheme.com>';
var team_contact        = 'SecretumTheme <author@secretumtheme.com>';


/**
 * Create Translation File
 */
gulp.task('translate', function () {
    return gulp.src(['!/node_modules', '!/css', '!/fonts', '!/js', '!/lang', './**/*.php', './*.php'])
    .pipe(sort())
    .pipe(wpPot({domain: text_domain, package: text_domain, bugReport: bug_report, lastTranslator: translator_contact, team: team_contact}))
    .pipe(gulp.dest('./lang/secretum.pot'))
    .pipe(notify({message: 'Task "translate" created lang/secretum.pot', onLast: true}))
    .on('error', console.error.bind(console))
});
