var gulp     = require('gulp');
var concat = require('gulp-concat');

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