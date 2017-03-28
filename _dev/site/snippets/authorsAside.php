<aside class="author--wrap l--no-top-margin l--no-bottom-margin">
  <?php
  //get each author from structured field in content of this article
  $authors = $page->authors()->toStructure();
  if($authors->count() > 1) :?>
    <h3 class="author--wrap-title l--no-top-margin l--no-bottom-margin">About the authors</h3>
  <?php else :?>
    <h3 class="author--wrap-title l--no-top-margin l--no-bottom-margin">About the author</h3>
  <?php endif ?>
  <?php
    //for each author find page in authors content folder
    // foreach($pauthors->author() as $author):
    foreach($authors as $author): ?>
    <?php $author = $pages->find('authors/' . $author) ?>
      <h5 class="author--name l--no-top-margin l--no-bottom-margin"><?php echo $author->name() ?></h5>
      <hr class="author--name-hr"/>
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
    <?php endforeach ?>
  <hr class="author--hr">
</aside>
