<?php snippet('header') ?>

  <main class="main section--center" role="main">
    <header class="article--header">
      <h1 class="l--title"><?= $page->title()->html() ?></h1>
      <?php snippet('articlesInfo')  ?>
      <hr class="article--header-hr ">
    </header>
    <article class="article section--left-col-shift l--no-top-margin">

      <?php snippet('coverimage', $page) ?>

      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>

    </article>

    <div class="section--right-col-shift l--no-top-margin author--wrap">
      <?php snippet('authorsAside') ?>

    </div>

    <?php snippet('prevnext', ['flip' => true]) ?>

  </main>

<?php snippet('footer') ?>
