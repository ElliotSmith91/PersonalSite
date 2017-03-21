<?php if($item->coverimage()->isNotEmpty()): ?>
  <figure >
    <img class="blog--index-cover" src="<?= $item->coverimage()->toFile()->url() ?>" alt="" />
  </figure>
<?php endif ?>
