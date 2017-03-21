<?php snippet('header') ?>

  <main class="main" role="main">

    <article class="article single wrap  section--center">

      <header class="article-header">
        <h1 class="l--title"><?= $page->title()->html() ?></h1>
        <div class="intro text l--text-center">
          <?= $page->date('F jS, Y') ?>
        </div>
      </header>

      <?php snippet('coverimage', $page) ?>

      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>

    </article>

    <?php snippet('prevnext', ['flip' => true]) ?>

  </main>

<?php snippet('footer') ?>
