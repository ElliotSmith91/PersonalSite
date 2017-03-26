<?php $author = $pages->find('authors/' . $page->author()) ?>
<aside class="">
  <h3 class="author--wrap-title">About the authors</h2>
  <h5 class="author--name"><?php echo $author->name() ?></h3>
  <hr class="author--name-hr" />
  <?php if($image = $author->image()) : ?>
    <div class="author--info-wrap">
      <div class="author--img-wrap" style="background-image: url(<?= $author->images()->first()->url() ?>)">
      </div>
      <div class="author--text">
        <?= $author->bio()->kirbytext() ?>
      </div>
    </div>

  <?php else : ?>
    <div class="author--text-full">
      <?= $author->bio()->kirbytext() ?>
    </div>
  <?php endif ?>
<hr class="author--hr">
</aside>
