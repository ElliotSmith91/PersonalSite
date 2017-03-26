<nav class="nav" role="navigation">
  <ul class="nav--menu">
    <li class="nav--menu-item<?= r(page('home')->isOpen(), ' is-active') ?>">
      <a class="nav--menu-item-link" href="<?= url() ?>" rel="home"?>Home</a>
    </li>
    <!-- using idea from this forum disccusion https://forum.getkirby.com/t/one-pager-how-to-make-subpage-urls-scroll-to-section-content/1453/2 to be able to have sections of home page in nav or pages for sections -->
    <?php foreach($pages->visible() as $item): ?>
      <?php if($item && (string)$item->template() == (string)$item->intendedtemplate() ) : ?> <!-- if item has a template then create link with item url -->
        <li class="nav--menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <a class="nav--menu-item-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        </li>
      <?php elseif($page->isHomePage() === true) : ?> <!-- if the item has no template and current page is the homepage then add a hash to page link -->
        <li class="nav--menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <a class="nav--menu-item-link" href="<?= '#' . $item->uid() ?>"><?= $item->title()->html() ?></a>
        </li>
      <?php elseif($page->isHomePage() === false) : ?> <!-- if the item has no template and the current page is not the homepage then link back to the homepage with the relevant section # -->
        <li class="nav--menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <a class="nav--menu-item-link" href="<?= $site->url() . '#' . $item->uid() ?>"><?= $item->title()->html() ?></a>
        </li>
      <?php endif ?>
    <?php endforeach ?>
  </ul>
</nav>
