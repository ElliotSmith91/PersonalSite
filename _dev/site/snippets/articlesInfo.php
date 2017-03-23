<?php if($page!='blog'): ?>

<?php $author = $pages->find('authors/' . $page->author()) ?>
  <p class="article--info"><i>By </i>
    <strong><?= $author->name()?></strong><i> On </i>
    <?= $page->date('F jS, Y')?>
  </p>

<?php else: ?>
  <?php $authors = $pages->find('authors')->children() ?>
  <?php if($articles->count()): ?>
    <?php foreach($articles as $article): ?>
      <?php $authors = $pages->find('authors/' . $article->author()) ?>
      <p class="article--info"><i>By </i>
        <strong><?= $authors->name()?></strong><i> On </i>
        <?= $article->date('F jS, Y')?>
      </p>
    <?php endforeach ?>
  <?php endif ?>
<?php endif ?>
