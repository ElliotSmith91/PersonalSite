<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/app.css') ?>

  <link href="https://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet">

</head>
<body>
  <input type="checkbox" id="menu">
  <div class="header--wrap">
    <label class="resp--nav-button" for="menu">Menu</label>
    <header class="header" role="banner">
    <!-- responsive nav checkbox hack -->


      <a href="<?= url() ?>" rel="home" class="header--logo-link">
          <img class="header--logo" src="/assets/images/logo.svg" alt="logo">
          </img>
      </a>
      <?php snippet('menu') ?>




      <!-- <div class="resp--nav">
        <a href="#" class="resp--nav-button">Menu</a>
      </div> -->


    </header>
  </div>
