<section class="section--center design" id="design">
  <h1 class="section--title">Design</h1>
  <div class="section--left-col">
    <div class="text-wrap l--text-left">
      <?= $page->designText()->kirbytext() ?>
    </div>
  </div>
  <div class="section--right-col l--text-center">
    <div class="design--site-wrap" id="design-img-wrap">
      <img class="l--full-w-img img-border design--site-wrap-img"src="<?= $designImage->resize(800, null, 70)->url ?>" alt="" sizes="65vw" srcset="
			<?php echo $designImage->resize(200, null, 70)->url ?> 200w,
			<?php echo $designImage->resize(400, null, 70)->url ?> 400w,
			<?php echo $designImage->resize(800, null, 70)->url ?> 800w,
			<?php echo $designImage->resize(1200, null, 70)->url ?> 1200w,
			<?php echo $designImage->resize(1600, null, 70)->url ?> 1600w,
			<?php echo $designImage->resize(1800, null, 70)->url ?> 1800w,
			<?php echo $designImage->resize(2000, null, 70)->url ?> 2000w">
      <div class="design--site-wrap-caption">
        <a href="https://www.signpaintingbydawn.com" ><h5>Sign Painting by Dawn</h5></a>
      </div>
    </div>
  </div>
</section>
<hr>
