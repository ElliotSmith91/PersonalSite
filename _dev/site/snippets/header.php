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

  <header class="header" role="banner">
    <div class="header--wrap">
        <a href="<?= url() ?>" rel="home"><span><img class="header--logo" src="/assets/images/logo.svg" alt="logo"></img></span></a>

      <?php snippet('menu') ?>
    </div>
  </header>
