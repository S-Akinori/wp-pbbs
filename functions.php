<?php
include TEMPLATEPATH . '/functions/generate-upload-image-tag.php';
include TEMPLATEPATH . '/settings/custom-post-type.php';
include TEMPLATEPATH . '/settings/company-settings.php';

add_theme_support('post-thumbnails');
// function theme_slug_setup() {
//   add_theme_support( 'title-tag' );
// }
// add_action( 'after_setup_theme', 'theme_slug_setup' );

function mytheme_setup() {
    // ナビゲーションメニューをサポート
    register_nav_menus(array(
        'header' => 'ヘッダーメニュー',
        'footer' => 'フッターメニュー'
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);