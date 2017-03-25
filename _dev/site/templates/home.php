<?php snippet('header') ?>

  <main class="main" role="main">

    <section id="intro">
      <div class="section--left-col l--no-left-pad"  >
        <img class="intro--img" src="/assets/images/MeLineOpt.svg" id="intro-img"alt="">
      </div>
      <div class="section--right-col l--no-top-margin">
        <h2 class="section--type">
          <?= $page->intro()->kirbytext() ?>
        </h2>
      </div>
    </section>

    <hr/>

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
          <img class="photography--img l--full-w-img img-border" src="/assets/images/desk.jpg" alt="">
          <div class="photography--flying-img-container">
            <img class="photography--flying-img" id="flying-img" src="/assets/images/flying_images/print4.jpg" alt="">
          </div>
          <div class="photography--flying-img-container">
            <img class="photography--flying-img" id="flying-img" src="/assets/images/flying_images/print9.jpg" alt="">
          </div>
          <div class="photography--flying-img-container">
            <img class="photography--flying-img" id="flying-img" src="/assets/images/flying_images/print36.jpg" alt="">
          </div>
          <div class="photography--flying-img-container">
            <img class="photography--flying-img" id="flying-img" src="/assets/images/flying_images/print149.jpg" alt="">
          </div>
          <div class="photography--flying-img-container">
            <img class="photography--flying-img" id="flying-img" src="/assets/images/flying_images/print157.jpg" alt="">
          </div>
          <div class="photography--flying-img-container">
            <img class="photography--flying-img" id="flying-img" src="/assets/images/flying_images/print158.jpg" alt="">
          </div>
          <div class="photography--flying-img-container">
            <img class="photography--flying-img" id="flying-img" src="/assets/images/flying_images/print175.jpg" alt="">
          </div>
          <div class="photography--flying-img-container">
            <img class="photography--flying-img" id="flying-img" src="/assets/images/flying_images/print177.jpg" alt="">
          </div>
          <div class="photography--flying-img-container">
            <img class="photography--flying-img" id="flying-img" src="/assets/images/flying_images/print191.jpg" alt="">
          </div>
          <div class="photography--flying-img-container">
            <img class="photography--flying-img" id="flying-img" src="/assets/images/flying_images/print194.jpg" alt="">
          </div>
          <div class="photography--flying-img-container">
            <img class="photography--flying-img" id="flying-img" src="/assets/images/flying_images/me.jpg" alt="">
          </div>
        </div>

      </div>
    </section>

    <hr/>

    <section class="section--center blog" id="">
      <h1 class="section--title">Blog</h1>
      <div class="section--left-col">
        <?php snippet('blog-thumbs') ?>
      </div>
      <div class="section--right-col l--text-center">
        <div class="text-wrap l--text-left">
          <?= $page->blogText()->kirbytext() ?>
        </div>
        <a href="#blogsection" class="section--cta-button">Blog Index</a>
      </div>
    </section>

    <hr/>

    <section class="section--center design" id="design">
      <h1 class="section--title">Design</h1>
      <div class="section--left-col">
        <div class="text-wrap l--text-left">
          <?= $page->designText()->kirbytext() ?>
        </div>
      </div>
      <div class="section--right-col l--text-center">
        <div class="design--site-wrap" id="design-img-wrap">
          <img class="l--full-w-img img-border design--site-wrap-img" src="/assets/images/designbydawnscreenshot.jpg" alt="">
          <div class="design--site-wrap-caption">
            <a href="https://www.signpaintingbydawn.com" ><h5>Sign Painting by Dawn</h5></a>
          </div>
        </div>
      </div>
    </section>

    <hr/>

    <section class="section--center">
      <h1 class="section--title">Contact</h1>
      <div class="section--left-col-shift l--text-center">
        <?php snippet('contact') ?>
      </div>
      <div class="section--right-col-shift">
        <div class="text-wrap l--text-left">
          <?= $page->contactText()->kirbytext() ?>
        </div>
      </div>
    </section>

  </main>

<?php snippet('footer') ?>
