var gulp = require('gulp'),
    sass        = require('gulp-sass'),
    browserSync = require('browser-sync'),
    connect     = require('gulp-connect-php');



gulp.task('sass', function() {
    return gulp.src('./app/sass/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./app/css'))
    .pipe(browserSync.reload({stream: true}));
});

gulp.task('default', function() {
    connect.server({}, function (){
      browserSync({
        proxy: '127.0.0.1:8000/app/'
      });
    });
    gulp.watch('./app/sass/*.scss', ['sass', function () {
        browserSync.reload();
    }]);
    gulp.watch('./app/*.php').on('change', function () {
        browserSync.reload();
    });
    gulp.watch('./app/*.html').on('change', function () {
        browserSync.reload();
    });
});

gulp.task('build', function() {
    return gulp.src(['./app/css/*.css', './app/*.php', './app/*.html', './app/*.js'], {base: './app'})
      .pipe(gulp.dest('./dest/'));
});
