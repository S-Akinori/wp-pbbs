<?php get_header(); ?>
<article>
  <div class="p-6 mt-20 mx-auto container">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="c-box">
      <h1 class="text-center"><?php the_title(); ?></h1>
      <div>
        <?php the_content(); ?>
      </div>
      <p><?php the_date(); ?></p>
      <div class="text-center mt-4">
        <a href="<?= home_url(); ?>/faq" class="c-button">FAQ一覧へ</a>
      </div>
    </div>
    <?php endwhile; endif ?>
  </div>
</article>
<?php get_footer(); ?>