<?php

kirbytext::$tags['pullquote'] = array(
  'attr' => array(
    'position'
  ),
  'html' => function($tag) {


    $position = $tag->attr('position');
    // $text = $tag->attr('pullquote');


    $html = '<aside class="pullquote' . $position .'">';
    $html .= '<blockqoute>';
    $html .= '<p>'. $tag->attr('pullquote') . '</p>';
    $html .= '</blockqoute>';
    $html .= '</aside>';
    return $html;

  }
);
