<h3>Tags</h3>
<?php if($tags!= null) : ?>
<ul class="tags">
  <?php foreach($tags as $tag): ?>
  <li>
    <a class="tag" href="<?php echo url($page->url() . '/' . url::paramsToString(['tag' => $tag])) ?>">
      <?php echo html($tag) ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>
<?php else: ?>
  <p>No tags in articles</p>
<?php endif ?>
