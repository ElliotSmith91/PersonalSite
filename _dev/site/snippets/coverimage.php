<?php if($item->coverimage()->isNotEmpty()): ?>
    <img class="blog--index-cover" src="<?= $item->coverimage()->toFile()->url() ?>" alt="" />
<?php endif ?>
