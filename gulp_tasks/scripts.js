// const path = require('path');
//
// const gulp = require('gulp');
// const conf = require('../conf/gulp.conf');
const browserSync = require('browser-sync');

module.exports = function (gulp, plugins, conf) {
  return function () {
    gulp.src([
      conf.paths.assets.scripts.src
    ])
    .pipe(plugins.concat('app.js'))
    .pipe(gulp.dest(conf.paths.assets.scripts.dest));
    browserSync.reload();
  };
};
