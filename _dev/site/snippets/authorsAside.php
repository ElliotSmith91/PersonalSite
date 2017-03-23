<?php $author = $pages->find('authors/' . $page->author()) ?>
<aside class="author--wrap">

  <h3><?php echo $author->name() ?></h3>

  <figure>
    <img src="<?= $author->images()->first()->url() ?>" alt="" class="author--img">
  </figure>

  <?= $author->bio()->kirbytext() ?>

</aside>
