var gulp         = require('gulp');
var concat       = require('gulp-concat');
var concatCss    = require('gulp-concat-css');
var uglify       = require('gulp-uglify');
var cssnano      = require('gulp-cssnano');

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

gulp.task('default-model', function() {
    return gulp.src(['./dist/js/menu-float.js/',
        './dist/js/image-link.js',
        './dist/js/parent.js',
        './dist/js/parent2.js',
        './dist/js/parent3.js',
        './dist/js/parent4.js',
        './dist/js/video-magic.js'])
        .pipe(concat('modal.js'))
        .pipe(gulp.dest('./dist/js/'));
});

gulp.task('default-css', function () {
    return gulp.src(['components/foundation-sites/dist/foundation.min.css',
        'components/jquery-ui/themes/smoothness/jquery-ui.min.css',
        'dist/css/magnific-popup.css',
        'dist/css/app.css',
        'dist/css/styles.css'])
        .pipe(concatCss("bundle.css"))
        .pipe(gulp.dest('dist/css/'));
});

gulp.task('default-css2', function () {
    return gulp.src(['dist/bundle.css',
    'css/foundation-icons/foundation-icons.css'])
        .pipe(concatCss("app.css"))
        .pipe(gulp.dest('dist/'));
});

gulp.task('compress', function() {
    return gulp.src('dist/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist'));
});

gulp.task('compress-modal', function() {
    return gulp.src('dist/js/modal.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist'));
});

gulp.task('minify', function() {
    return gulp.src('./dist/css/bundle.css')
        .pipe(cssnano())
        .pipe(gulp.dest('./dist/'));
});

gulp.task('minify-foundation-icons', function() {
    return gulp.src('./css/foundation-icons/foundation-icons2.css')
        .pipe(cssnano())
        .pipe(gulp.dest('./css/'));
});