<?php foreach (page('blog')->children()->visible()->flip()->limit(4) as $article): ?>
<a class="blog--post"  style="background-image: url(<?= $article->coverimage()->toFile()->url()?>)" href="<?= $article->url() ?>">
  <div class="blog--data">
    <div class="blog--post-name"><?= $article->title()->html()?></div>
    <div class="blog--post-date"><?= $article->date('F jS, Y')?>
    </div>
  </div>
</a>
<?php endforeach?>
