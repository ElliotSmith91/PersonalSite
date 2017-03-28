<?php if(!$page->relatedArticles()->empty()): ?>
<div class="related-articles--wrap l--no-top-margin" style="overflow: auto;">
  <h2>Related</h2>
  <ul>
    <?php foreach($page->relatedArticles()->pages()->limit(3) as $item): ?>
    <li>
      <div class="card--blog">
        <a class="card--blog-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        <header class="article-header">
          <h2 class="article-title">
            <?= $item->title()->html() ?>
          </h2>
          <hr class="card--blog-info-hr">
          <?php snippet('articlesInfo') ?>
        </header>

        <?php snippet('coverimage', $item) ?>
        <hr class="card--blog-hr">
      </div>
    </li>
    <?php endforeach ?>
  </ul>
</div>
<hr>
<?php endif ?>
