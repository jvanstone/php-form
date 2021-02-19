/**
 * Load Plugins.
 *
 * Load gulp plugins and passing them semantic names.
 */

const gulp = require('gulp');

const sass = require('gulp-sass');
const concat = require('gulp-concat');
//const notify = require('gulp-notify'); // Sends message notification to you.

const browserSync = require('browser-sync').create();

    const browsersync = done => {
        browserSync.init({
            proxy:'http://localhost/sandbox-wp/wp-content/themes/php-form/',
            host: '0.0.0.0.0',
            port: 8080,
            injectChanges: true,
            ghostMode: false,
            notify: false,
            watchEvents: ['change', 'add', 'unlink', 'addDir', 'unlinkDir']
        });
        done();
    }

// Helper function to allow browser reload with Gulp 4.
const reload = done => {
	browserSync.reload();
	done();
};

    gulp.task('styles', () => {
        return gulp
        .src('./sass/**/*.scss')
        .pipe(concat('style.scss'))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
        
    });




/**
 * Watch Tasks.
 *
 * Watches for file changes and runs specific tasks.
 */  

gulp.task(
    'start', 
    gulp.parallel('styles', browsersync, () => {
    gulp.watch('./**/*.php',reload); // Reload on PHP file changes.
    gulp.watch('./sass/**/*.scss', gulp.parallel('styles')); // Reload on SCSS file changes.
    })
);