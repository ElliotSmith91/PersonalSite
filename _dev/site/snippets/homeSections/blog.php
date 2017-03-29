<section class="section--center blog" id="">
  <h1 class="section--title">Blog</h1>
  <div class="section--left-col">
    <?php snippet('blog-thumbs') ?>
  </div>
  <div class="section--right-col l--text-center">
    <div class="text-wrap l--text-left">
      <?= $page->blogText()->kirbytext() ?>
    </div>
    <a href="<?= $pages->find('blog')->url() ?>" class="section--cta-button">Blog Index</a>
  </div>
</section>
<hr>
