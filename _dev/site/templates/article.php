<?php snippet('header') ?>

  <main class="main section--center" role="main">
    <header class="article--header">
      <h1 class="l--title"><?= $page->title()->html() ?></h1>
      <?php snippet('articlesInfo')  ?>
      <hr class="article--header-hr ">
    </header>
    <article class="article section--left-col-shift l--no-top-margin">

      <?php snippet('coverimage', $page) ?>

      <div class="">
        <?= $page->text()->kirbytext() ?>
      </div>
      <hr class="article--end-hr"/>
        <?php snippet('relatedArticles') ?>

    </article>

    <div class="section--right-col-shift l--no-top-margin">
      <?php snippet('authorsAside') ?>
      <?php snippet('blogSub') ?>
    </div>

  </main>

<?php snippet('footer') ?>
