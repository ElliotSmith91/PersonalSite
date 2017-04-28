<?php foreach($images as $image):?>
  <div class="photography--thumb-wrap">
    <img data-sizes"(max-width 400px) 100vw, (max-width 768px) 50vw, 15vw" src="<?= $image->resize(20, null, 10)->url ?>"
    data-srcset="<?= $image->resize(100, null, 80)->url?> 100w,
    <?= $image->resize(150, null, 80)->url?> 150w,
    <?= $image->resize(250, null, 80)->url?> 250w,
    <?= $image->resize(350, null, 80)->url?> 350w,
    <?= $image->resize(450, null, 80)->url?> 450w,
    <?= $image->resize(550, null, 80)->url?> 550w,
    <?= $image->resize(650, null, 80)->url?> 650w,
    <?= $image->resize(750, null, 80)->url?> 750w," class="lazyload blur-up photography--thumb" alt="" onclick="openModal();">
  </div>
<?php endforeach ?>
