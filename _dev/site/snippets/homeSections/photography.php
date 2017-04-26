<section class="section--center photography" id="">
  <h1 class="section--title">Photography</h1>
  <div class="section--left-col l--text-center">
    <div class="text-wrap l--text-left">
      <?= $page->photographyText()->kirbytext() ?>
    </div>
    <a href="#photographyLink" class="section--cta-button">The Gallery</a>
  </div>
  <div class="section--right-col">
    <div class="photography--img-container">
      <img class="photography--img l--full-w-img img-border" src="<?= $photographyImage->resize(800, null, 70)->url ?>" alt="" sizes="65vw" srcset="
			<?php echo $photographyImage->resize(200, null, 70)->url ?> 200w,
			<?php echo $photographyImage->resize(400, null, 70)->url ?> 400w,
			<?php echo $photographyImage->resize(800, null, 70)->url ?> 800w,
			<?php echo $photographyImage->resize(1200, null, 70)->url ?> 1200w,
			<?php echo $photographyImage->resize(1600, null, 70)->url ?> 1600w,
			<?php echo $photographyImage->resize(1800, null, 70)->url ?> 1800w,
			<?php echo $photographyImage->resize(2000, null, 70)->url ?> 2000w">
    </div>

  </div>
</section>
<hr>
