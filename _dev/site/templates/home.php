<?php snippet('header') ?>

  <main class="main" role="main">
    <?php snippet('intro') ?>
    <hr />
    <?php foreach($pages->visible() as $section) {
      snippet($section->uid(), array('data' => $section));
      echo "<hr />";
  }  ?>

  </main>

<?php snippet('footer') ?>
