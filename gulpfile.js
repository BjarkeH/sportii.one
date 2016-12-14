const gulp = require('gulp');
const jade = require('gulp-jade-php');

// Compiling jade to PHP
gulp.task('templates', function(){
  var MY_LOCALS = {};
  gulp.src('src/templates/*.jade')
    .pipe(jade({
      locals: MY_LOCALS,
      pretty: true
    }))
    .pipe(gulp.dest('app/'))
});
