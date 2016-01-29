var gulp         = require('gulp');
var concat       = require('gulp-concat');
var concatCss    = require('gulp-concat-css');
var uglify = require('gulp-uglify');

gulp.task('default', function() {
    return gulp.src(['./components/jquery/dist/jquery.min.js',
        './components/jquery-ui/jquery-ui.min.js',
        './components/foundation-sites/dist/foundation.min.js',
        './components/magnific-popup/dist/jquery.magnific-popup.js',
        './js/cssmenumaker.js',
        './js/cssmenu/scripts.js',
        './js/easy.js',
        './js/topo.js'])
        .pipe(concat('all.js'))
        .pipe(gulp.dest('./dist/js/'));
});
//gulp.task('default-css', function () {
//    return gulp.src(['components/foundation-sites/dist/foundation.min.css',
//        'components/jquery-ui/themes/smoothness/jquery-ui.min.css',
//        'components/magnific-popup/dist/magnific-popup.css',
//        'css/app.css',
//        'js/cssmenu/styles.css'])
//        .pipe(concatCss("bundle.css"))
//        .pipe(gulp.dest('dist/css/'));
//});
gulp.task('compress', function() {
    return gulp.src('dist/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist'));
});