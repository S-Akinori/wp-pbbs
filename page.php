<?php get_header(); ?>
<article>
  <div class="p-6 mt-20 mx-auto container">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="c-box">
      <h1 class="text-center"><?php the_title(); ?></h1>
      <p class="text-center"><?php the_date(); ?></p>
      <div>
        <?php the_content(); ?>
      </div>
      <div class="text-center mt-4">
        <a href="<?= home_url(); ?>" class="c-button">TOPへ移動</a>
      </div>
    </div>
    <?php endwhile; endif ?>
  </div>
</article>
<?php get_footer(); ?>