<?php snippet('header') ?>

  <main class="main" role="main">
    <?php snippet('homeSections/intro') ?>
    <hr />
    <?php foreach($pages->visible() as $section) :?>
      <?php snippet('homeSections/' . $section->uid(), array('data' => $section)); ?>
    <?php endforeach ?>
  </main>

<?php snippet('footer') ?>
