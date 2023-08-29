<?php

//　titleタグを出力する
add_theme_support('title-tag');

add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator() {
  return '|';
}

// titleタグを変更する（TOPページ飲み）
add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title) 
{
  if(is_home()) {
    $title['title'] .= 'は、' . $title['tagline'] . 'です。';
    unset($title['tagline']);
  }

  return $title;
}