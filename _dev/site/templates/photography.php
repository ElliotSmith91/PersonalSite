<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1 class=" section--title l--no-top-margin"><?= $page->title()->html() ?></h1>
    </header>
    <div class=" l--text-center top photography--right" >
      <aside class="">
        <p><?= $page->text()->html() ?></p>
        <?php snippet('photographycategories') ?>
      </aside>
    </div>
    <div class=" photography--gallery photography--left">
      <?php snippet('photographythumb') ?>
    </div>



  </main>

<?php snippet('footer') ?>
