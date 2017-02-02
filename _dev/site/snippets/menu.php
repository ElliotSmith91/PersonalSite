<nav class="header--nav" role="navigation">
  <ul class="header--menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="header--menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
