<nav class="nav" role="navigation">
  <ul class="nav--menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="nav--menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a class="nav--menu-item-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>


</nav>
