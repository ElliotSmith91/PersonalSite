<?php snippet('header') ?>

  <main class="main section--center" role="main">

    <article class="article single wrap section--left-col-shift">


      <header class="article--header">
        <h1 class="l--title"><?= $page->title()->html() ?></h1>
        <?php snippet('articlesInfo')  ?>
        <hr class="article--header-hr ">
      </header>

      <?php snippet('coverimage', $page) ?>

      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>

    </article>

    <?php snippet('prevnext', ['flip' => true]) ?>

  </main>

<?php snippet('footer') ?>
