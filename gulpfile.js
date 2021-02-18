    const bsync = require('browser-sync');
    const gulp = require('gulp');
    const sass = require('gulp-sass');
    var concat = require('gulp-concat');

    function sync() {
        return bsync.init({
            files: [
                '*.html',
                '*.php',
                'assets/css/**/*.css',
                'assets/js/**/*.js'
            ],
            host: '0.0.0.0.0',
            proxy:'http://localhost/sandbox-wp/sandbox-wp/wp-content/themes/php-form/',
            port: 8080,
            reloadDelay: 1000,
            ghostMode: false,
            notify: false
        });
    }

    function styles() {
        return gulp.src('./sass/**/*.scss')
        .pipe(concat('style.scss'))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
    }

    function watchSASS() {
        return gulp.watch('./sass/**/*.scss', styles).on('change', function () {
            bsync.reload();
        });
    }

    function watchPHP() { 
       return gulp.watch('**/*.php').on('change', function () {
            bsync.reload();
        });
     
    }

    gulp.task('start', gulp.series(sync, styles, watchSASS, watchPHP));