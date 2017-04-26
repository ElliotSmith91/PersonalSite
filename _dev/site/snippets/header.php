<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>" class="no-js">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <meta name="theme-color" content="#BE1E2D">

  <?= css('assets/css/app.css') ?>

  <link href="https://fonts.googleapis.com/css?family=Lato:300,700|Playfair+Display" rel="stylesheet">
  <link rel="manifest" href="assets/manifest.json">
  <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
<![endif]-->


</head>
<body data-scroll="<?= isset($scroll) ? $scroll : null; ?>" scroll-behavior="smooth">
  <!-- responsive nav checkbox hack http://css-tricks.com/responsive-menu-concepts -->
  <input type="checkbox" id="menu">
  <div class="header--wrap" id="header--wrap">
    <label class="red--button" for="menu">Menu</label>
    <header class="header section--center" role="banner">
      <a href="<?= url() ?>" rel="home" class="header--logo-link">
        <div class="header--logo" alt="logo">
        </div>
      </a>
      <?php snippet('menu') ?>
    </header>
  </div>
