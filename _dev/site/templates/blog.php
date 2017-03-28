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
      <div class="blog--articles-wrap section--left-col-shift l--no-top-margin">
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

    <div class="section--right-col-shift l--no-top-margin">
      <aside class="blog--aside">
        <h3>Tags</h3>
        <?php if($tags!= null) : ?>
        <ul class="tags">
          <?php foreach($tags as $tag): ?>
          <li>
            <a href="<?php echo url($page->url() . '/' . url::paramsToString(['tag' => $tag])) ?>">
              <?php echo html($tag) ?>
            </a>
          </li>
          <?php endforeach ?>
        </ul>
        <?php else: ?>
          <p>no tags in articles</p>
        <?php endif ?>
        <hr>
        <?php snippet('blogSub') ?>
      </aside>

    </div>
    <?php snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>
