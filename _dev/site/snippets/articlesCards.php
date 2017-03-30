<?php if($articles->count()): ?>
  <?php foreach($articles as $article): ?>

    <article class="card--blog">
      <a class="card--blog-link" href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>

      <header class="article-header">
        <h2 class="article-title l--thin-text">
          <?= $article->title()->html() ?>
        </h2>
        <hr class="card--blog-info-hr">
        <?php snippet('articlesInfo') ?>
      </header>

      <?php snippet('coverimage', $article) ?>
      <hr class="card--blog-hr">

    </article>

  <?php endforeach ?>
<?php else: ?>
  <p>This blog doesn't contain any articles yet.</p>
<?php endif ?>
