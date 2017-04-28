<?php snippet('header') ?>

  <main class="main section--center" role="main">

    <header class="">
      <h1 class="section--title"><?= $page->title()->html() ?></h1>
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
