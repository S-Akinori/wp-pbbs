<?php

$args = array(
  'posts_per_page' => -1,
);

$posts = get_posts($args);

?>

<?php get_header(); ?>
<div class="mt-12">
    <section id="news" class="c-section container mx-auto">
      <div class="c-box">
        <h1 class="text-center">FAQ</h1>
        <ul class="list-disc list-inside">
          <?php foreach($posts as $post) : setup_postdata($post); ?>
              <!-- ループ処理(例) -->
              <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
          <?php endforeach; wp_reset_postdata(); ?>
        </ul>
      </div>
    </section>
</div>

<?php get_footer(); ?>