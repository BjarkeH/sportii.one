'use strict';
const gulp = require('gulp');
// const jade = require('gulp-jade'); // compiles to HTML
const jade = require('gulp-jade-php'); // compiles to PHP
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const livereload = require('gulp-livereload');
const concatCss = require('gulp-concat-css');

// Compiling jade to PHP
gulp.task('templates', function(){
  var MY_LOCALS = {};
  return gulp.src('src/templates/*.jade')
    .pipe(jade({
      locals: MY_LOCALS,
      pretty: true
    }))
    .pipe(gulp.dest('app/'))
    .pipe(livereload({ start: true }));
});

// Compiling sass to CSS
gulp.task('sass', function(){
  return gulp.src('src/sass/*.sass')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('app/css'))
    .pipe(livereload({ start: true }));
});

// Concatenating all vendor files CSS and JS
gulp.task('vendors', function(){
  gulp.src(['bower_components/**/*.min.js', '!bower_components/**/sizzle.min.js', '!bower_components/**/*slim.min.js'])
    .pipe(concat('vendor.js'))
    .pipe(gulp.dest('app/vendors/'));
  gulp.src(['bower_components/**/*.min.css', '!bower_components/**/*-theme.min.css'])
    .pipe(concatCss('vendor.css'))
    .pipe(gulp.dest('app/vendors/'));
});

gulp.task('watch', function(){
  livereload.listen();
  gulp.watch('src/templates/*.jade', ['templates']);
  gulp.watch('src/sass/*.sass', ['sass']);
});

gulp.task('default', ['watch', 'vendors', 'templates', 'sass']);
