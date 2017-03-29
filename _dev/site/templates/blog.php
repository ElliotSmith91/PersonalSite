<?php snippet('header') ?>

  <main class="main section--center" role="main">

    <header class="">
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
        <?php snippet('articlesCards') ?>
      </div>

    <div class="section--right-col-shift l--no-top-margin">
      <aside class="blog--aside">
        <?php snippet('tagCloud') ?>
        <hr>
        <?php snippet('blogSub') ?>
      </aside>

    </div>
    <?php snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>
