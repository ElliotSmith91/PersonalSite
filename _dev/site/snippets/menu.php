<nav class="nav" role="navigation">
  <ul class="nav--menu">
    <li class="nav--menu-item<?= r(page('home')->isOpen(), ' is-active') ?>">
      <a class="nav--menu-item-link" href="<?= url() ?>" rel="home"?>Home</a>
    </li>
    <?php foreach($pages->visible() as $item): ?>
      <?php if($item && (string)$item->template() == (string)$item->intendedtemplate() ) : ?>
        <li class="nav--menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <a class="nav--menu-item-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        </li>
      <?php elseif($page->isHomePage() === true) : ?>
        <li class="nav--menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <a class="nav--menu-item-link" href="<?= '#' . $item->uid() ?>"><?= $item->title()->html() ?></a>
        </li>
      <?php elseif($page->isHomePage() === false) : ?>
        <li class="nav--menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <a class="nav--menu-item-link" href="<?= $site->url() . '#' . $item->uid() ?>"><?= $item->title()->html() ?></a>
        </li>
      <?php endif ?>
    <?php endforeach ?>
  </ul>
</nav>
