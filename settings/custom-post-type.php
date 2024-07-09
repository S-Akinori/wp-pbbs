<?php

function create_posttype(){
  register_post_type(
    'lineup', // 1.投稿タイプ名 
    array(   // 2.オプション 
      'label' => 'ラインナップ', // 投稿タイプの名前
      'public'        => true, // 利用する場合はtrueにする 
      'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
      'menu_position' => 5, // この投稿タイプが表示されるラインナップの位置
      'menu_icon'     => 'dashicons-edit', // ラインナップで使用するアイコン
      'supports' => array( // サポートする機能
        'title',
        'editor',
        'thumbnail',
        'excerpt',
      ),
      'show_in_rest' => true,
      'taxonomies' => array('lineup-cat')
    )
  );
  register_taxonomy(
    'lineup-cat',
    array('lineup'),
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'ラインナップカテゴリー',
      'singular_label' => 'ラインナップカテゴリー',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
    )
  );
  register_post_type(
    'shop', // 1.投稿タイプ名 
    array(   // 2.オプション 
      'label' => 'ショップ', // 投稿タイプの名前
      'public'        => true, // 利用する場合はtrueにする 
      'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
      'menu_position' => 5, // この投稿タイプが表示されるショップの位置
      'menu_icon'     => 'dashicons-edit', // ショップで使用するアイコン
      'supports' => array( // サポートする機能
        'title',
        'editor',
        'thumbnail',
        'excerpt',
      ),
      'show_in_rest' => true,
      'taxonomies' => array('shop-cat')
    )
  );
  register_taxonomy(
    'shop-cat',
    array('shop'),
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'ショップカテゴリー',
      'singular_label' => 'ショップカテゴリー',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
    )
  );
}
add_action('init', 'create_posttype');