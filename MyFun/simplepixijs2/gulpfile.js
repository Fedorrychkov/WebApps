var gulp = require('gulp');
var spritesmith = require('gulp.spritesmith');

// Load in layout
var layout = require('layout');

// Generate a new layer to organize items on
var layer = layout('left-right');

// Export the info
var info = layer['export']();

gulp.task('sprite', function () {
  var spriteData = gulp.src('assets/img/cathero/cat-hero-walk/*.png').pipe(spritesmith({
    imgName: 'cat-hero-walk.png',
    cssName: 'sprite.css',
    algorithm: 'top-down'
  }));
  return spriteData.pipe(gulp.dest('dist/cat-hero/'));
});