var gulp = require('gulp'),
    gutil = require('gulp-util'),
    ftp = require('vinyl-ftp'),
    del = require('del');

gulp.task('deploy', function () {

    var conn = ftp.create({
        host: 'ftp.ukwebdev.altervista.org',
        user: 'ukwebdev',
        password: 'curgevirvo12',
        parallel: 4,
        log: gutil.log
    });

    var globs = [
        './dist/**'
    ];

    // using base = '.' will transfer everything to /public_html correctly
    // turn off buffering in gulp.src for best performance

    return gulp.src(globs, {base: './dist/php-design-patterns/', buffer: false})
        .pipe(conn.newer('php-design-patterns/'))   // only upload newer files
        .pipe(conn.dest('/php-design-patterns/'));

});

gulp.task('clean', function () {
    del.sync(['dist/**', '!dist']);
});

gulp.task('copy', function () {
    gulp.src('./src/php-design-patterns/**', {base: './src/'})
        .pipe(gulp.dest('./dist'));
});