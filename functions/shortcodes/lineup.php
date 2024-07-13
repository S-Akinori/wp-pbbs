<?php

function lineup(){
    $args = array(
        'post_type' => 'lineup', // カスタム投稿タイプの名前
        'posts_per_page' => -1, // すべての投稿を表示する場合
        'orderby'        => 'date', // 並べ替えの基準を日付に指定します。
        'order'          => 'ASC', // 昇順に並べ替えます。
        'tax_query' => array(
          array(
            'taxonomy' => 'lineup-cat', // カスタムタクソノミーの名前
            'field'    => 'slug',
            'terms'    => '8-10', // タームのスラッグ
          ),
        ),
      );
      
      $lineups1 = get_posts($args);
      
      $args = array(
        'post_type' => 'lineup', // カスタム投稿タイプの名前
        'posts_per_page' => -1, // すべての投稿を表示する場合
        'orderby'        => 'date', // 並べ替えの基準を日付に指定します。
        'order'          => 'ASC', // 昇順に並べ替えます。
        'tax_query' => array(
          array(
            'taxonomy' => 'lineup-cat', // カスタムタクソノミーの名前
            'field'    => 'slug',
            'terms'    => '8-11', // タームのスラッグ
          ),
        ),
      );
      
      $lineups2 = get_posts($args);
      
      $args = array(
        'post_type' => 'lineup', // カスタム投稿タイプの名前
        'posts_per_page' => -1, // すべての投稿を表示する場合
        'orderby'        => 'date', // 並べ替えの基準を日付に指定します。
        'order'          => 'ASC', // 昇順に並べ替えます。
        'tax_query' => array(
          array(
            'taxonomy' => 'lineup-cat', // カスタムタクソノミーの名前
            'field'    => 'slug',
            'terms'    => '8-12', // タームのスラッグ
          ),
        ),
      );
      
      $lineups3 = get_posts($args);
  return "";
}
add_shortcode('lineup','lineup');