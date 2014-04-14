<?php

function drupal_theme_preprocess_html(&$variables){
  $path = path_to_theme() . '/js/html5shiv.min.js';
  $html5shiv = array(
    '#tag' => 'script',
    '#attributes' => array(
      'src' => $path,
    ),
    '#value' => '',
    '#prefix' => '<!--[if lt IE 9]>',
    '#suffix' => '<![endif]-->',
  );
  drupal_add_html_head($html5shiv, 'html5shiv');

  $metaIE = array(
     '#tag' => 'meta',
     '#attributes' => array(
       'http-equiv' => "X-UA-Compatible",
       'content' => "IE=edge,chrome=1",
       )
     );
   drupal_add_html_head($metaIE,'metaIE')
}
