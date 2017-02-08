const browserSync = require('browser-sync');

module.exports = function (gulp, plugins, conf) {
  browserSync.init({
    proxy: conf.browserSyncProxy,
    port: conf.broswerSyncPort,
    open: true,
    notify: true,
    snippetOptions: {
      ignorePaths: ['panel/**', 'site/accounts/**']
    },
  });
  gulp.watch(conf.paths.assets.styles.src, ['styles']);
  gulp.watch(conf.paths.assets.scripts.src, ['scripts']);
  gulp.watch([conf.paths.site.src]).on('change', function(){
    browserSync.reload();
  });
};
