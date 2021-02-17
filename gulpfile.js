const gulp = require('gulp');
const php = require('gulp-connect-php');
const sass = require('gulp-sass');
const del = require('del');

const browserSync = require('browser-sync').create();

gulp.task('php', function(){
    php.server({base:'./', port:8010, keepalive:true});
});

gulp.task('styles', () => {
    return gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
});

gulp.task('clean', () => {
    return del([
        'css/main.css',
    ]);
});

gulp.task('browserSync',['php'], function(){
    browserSync.init({
        proxy:"localhost:8010",
        baseDir: "./",
        open: true,
        notify:fale

    });
});

gulp.task('dev', [ 'browserSync'], function() {
    gulp.watch('./*.php', browserSync.reload);
});

gulp.task('default', gulp.series(['dev', 'clean', 'styles']));
