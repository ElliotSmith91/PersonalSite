<?php

return function($site, $pages, $page){
  $childPages = $page->children()->visible();
  $images = $page->children()->visible()->images()->shuffle()->limit(16);
  $categories = $page->categories()->split(',');
  return compact('images', 'categories', 'childPages');
};
