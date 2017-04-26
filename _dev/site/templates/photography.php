<?php snippet('header') ?>

  <main class="main section--center" role="main">

    <header class="wrap section--title">
      <h1><?= $page->title()->html() ?></h1>
    </header>

    <div class="wrap wide">
      <?php snippet('showcase') ?>
    </div>

  </main>

<?php snippet('footer') ?>
