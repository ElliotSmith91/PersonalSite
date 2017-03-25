<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="section--center">
      <h1 class="section--title"><?= $page->title()->html() ?></h1>

      <?php
      // This page uses a separate controller to set variables, which can be used
      // within this template file. This results in less logic in your templates,
      // making them more readable. Learn more about controllers at:
      // https://getkirby.com/docs/developer-guide/advanced/controllers
      if($pagination->page() == 1):
      ?>
        <div class="intro text">
          <?= $page->text()->kirbytext() ?>
        </div>
      <?php endif ?>

    </header>

    <section class="wrap section--center l--no-top-margin">
      <div class="blog--articles-wrap">
        <?php if($articles->count()): ?>
          <?php foreach($articles as $article): ?>
            <article class="card--blog">
              <a class="card--blog-link" href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              <header class="article-header">
                <h2 class="article-title">
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
          <p>This blog does not contain any articles yet.</p>
        <?php endif ?>
      </div>
    </section>
    <aside class="blog--aside">

    </aside>
    <?php snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>
