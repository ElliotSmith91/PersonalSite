const browserSync = require('browser-sync');

module.exports = function (gulp, plugins, conf) {
    gulp.src([
      conf.paths.assets.src,
      '!_dev/assets/js/**',
      conf.paths.site.src,
      conf.paths.content.src,
      // '!_dev/content/**/*.jpg',
      '!_dev/assets/styl/**',
      '!_dev/assets/styl/',
    ],{base : conf.paths.dev})
    .pipe(plugins.watch(conf.paths.dev, {base: conf.paths.dev}))
    .pipe(gulp.dest(conf.paths.dest));
    browserSync.reload();
  };
