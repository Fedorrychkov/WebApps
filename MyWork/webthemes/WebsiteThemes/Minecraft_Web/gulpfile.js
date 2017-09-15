var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    pug = require('gulp-pug'),
    concat = require('gulp-concat'), // Подключаем gulp-concat (для конкатенации файлов)
    uglify = require('gulp-uglifyjs'),
    cssnano = require('gulp-cssnano'),
    rename = require('gulp-rename'),
    autoprefixer = require('gulp-autoprefixer');


gulp.task('scripts', function() {
    return gulp.src('app/sources/javascript/**/*.js')
        .pipe(concat('projectScripts.min.js')) // Собираем их в кучу в новом файле
        .pipe(uglify())
        .pipe(gulp.dest('app/assets/js'))
});

gulp.task('pug', function() {
  return gulp.src('app/sources/pug/**/*.pug')
      .pipe(pug())
      .pipe(gulp.dest("app/view/"))
      .pipe(browserSync.reload({stream:true}))
});

gulp.task('sass', function(){
  return gulp.src('app/sources/scss/**/*.scss')
    .pipe(sass())
    .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
    .pipe(gulp.dest('app/assets/css'))
    .pipe(browserSync.reload({stream:true}))
});

gulp.task('css-nano', ['sass'], function() {
    return gulp.src('app/assets/css/application.css') // Выбираем файл для минификации
        .pipe(cssnano()) // Сжимаем
        .pipe(rename({suffix: '.min'})) // Добавляем суффикс .min
        .pipe(gulp.dest('app/assets/css'))
        .pipe(browserSync.reload({stream:true}))
});

gulp.task('browser-sync', function(){
  browserSync({
    server:{
      baseDir: 'app'
    },
    notify: false
  });
});

gulp.task('watch', ['browser-sync', 'pug', 'css-nano', 'scripts'], function(){
  gulp.watch('app/sources/scss/**/*.scss', ['sass']);
  gulp.watch('app/sources/pug/**/*.pug', ['pug']);  
  gulp.watch('app/*.html', browserSync.reload);  
  gulp.watch('app/sources/javascript/**/*.js', browserSync.reload); 
});
