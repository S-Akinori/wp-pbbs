<?php get_header(); ?>
<article>
  <div class="p-6 mt-20 mx-auto container">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="c-box">
        <?php if(has_post_thumbnail()) : ?>
        <div class="text-center py-2">
            <img src="<?= get_the_post_thumbnail_url('', 'full') ?>" alt="<?php the_title() ?>">
        </div>
        <?php endif ; ?>
      <h1 class="text-center"><?php the_title(); ?></h1>
      <div>
        <?php the_content(); ?>
      </div>
      <p><?php the_date(); ?></p>
      <div class="text-center mt-4">
        <a href="<?= home_url(); ?>#shop" class="c-button">SHOP一覧へ</a>
      </div>
    </div>
    <?php endwhile; endif ?>
  </div>
</article>
<?php get_footer(); ?>