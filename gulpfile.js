var gulp = require('gulp'),
    gutil = require('gulp-util'),
    ftp = require('vinyl-ftp'),
    del = require('del'),
    fs = require('fs');


gulp.task('deploy', function () {
    var config = JSON.parse(fs.readFileSync('./config/properties.json'));

    var conn = ftp.create({
        host: config.host,
        user: config.user,
        password: config.password,
        parallel: 4,
        log: gutil.log
    });

    var globs = [
        './dist/**'
    ];

    // using base = '.' will transfer everything to /public_html correctly
    // turn off buffering in gulp.src for best performance

    return gulp.src(globs, {base: './dist/', buffer: false})
        .pipe(conn.newer('./'))   // only upload newer files
        .pipe(conn.dest('/'));

});

gulp.task('clean', function () {
    del.sync(['dist/**', '!dist']);
});

gulp.task('copy', function () {
    gulp.src('./src/**', {base: './src/'})
        .pipe(gulp.dest('./dist'));
});


gulp.task('cc', ['clean'], function () {
    gulp.src('./src/**', {base: './src/'})
        .pipe(gulp.dest('./dist'));
});
