<ul class="tags">
  <?php foreach($childPages as $category) :?>
    <li><a href="<?= $category->url() ?>" class="tag"><?= $category->title()->html() ?></a></li>
  <?php endforeach ?>
</ul>
