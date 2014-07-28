var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    dirs         = {};

dirs.assets = 'app/assets/';
dirs.sass   = dirs.assets + 'sass/';
dirs.dest   = 'public/dist/';
dirs.css    = dirs.dest;

gulp.task('css', function() {
    gulp.src(dirs.sass + 'main.scss')
        .pipe(sass())
        .pipe(autoprefixer('last 10 versions'))
        .pipe(gulp.dest(dirs.css));
});

gulp.task('watch', function() {
    gulp.watch(dirs.sass + '**/*.scss', ['css']);
});

gulp.task('default', ['watch']);