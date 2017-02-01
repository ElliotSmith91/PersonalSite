const browserSync = require('browser-sync');

module.exports = function (gulp, plugins, conf) {
    gulp.src([
      conf.paths.assets.src,
      conf.paths.site.src,
      conf.paths.content.src,
      '!_dev/assets/styl/**',
      '!_dev/assets/styl/',
    ],{base : conf.paths.dev})
    .pipe(plugins.watch(conf.paths.dev, {base: conf.paths.dev}))
    .pipe(gulp.dest(conf.paths.dest));
    browserSync.reload();
  };
