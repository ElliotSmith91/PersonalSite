<?php if($page!='blog'): ?>

  <p class="article--info l--no-bottom-margin" ><i>By </i>
    <?php
      //get each author from structured field in content of this article
      $authors = $page->authors()->toStructure();
      //for each author find page in authors content folder
      // foreach($pauthors->author() as $author):
      $count = 0;
      $count = $authors->count();
      foreach($authors as $author):?>
        <?php $author = $pages->find('authors/' . $author) ?>
          <strong><?= $author->name()?></strong>
        <?php if($count > 1) :?>
          <strong> & </strong>
        <?php endif ?>
        <?php $count--; endforeach ?>
      <i> On </i>
    <?= $page->date('F jS, Y')?>
  </p>

<?php else: ?>
  <?php if($articles->count()): ?>
    <?php foreach($articles as $article): ?>
      <p class="article--info"><i>By </i>
      <?php
        //get each author from structured field in content of this article
        $authors = $article->authors()->toStructure();
        //for each author find page in authors content folder
        // foreach($pauthors->author() as $author):
        $count = 0;
        $count = $authors->count();
        foreach($authors as $author):?>
          <?php $author = $pages->find('authors/' . $author) ?>
            <strong><?= $author->name()?></strong>
          <?php if($count > 1) :?>
              <strong> & </strong>
          <?php endif ?>
        <?php $count--; endforeach ?>
        <i> on </i>
        <?= $article->date('F jS, Y')?>
        </p>
      <?php endforeach ?>
    <?php endif ?>
<?php endif ?>
