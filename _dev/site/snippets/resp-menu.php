<nav class="resp--nav" role="navigation">
  <ul class="resp--menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="resp--menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a class="resp--menu-item-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>


</nav>
