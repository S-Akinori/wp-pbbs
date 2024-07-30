<?php
$args = array(
  'post_type' => 'lineup', // カスタム投稿タイプの名前
  'posts_per_page' => -1, // すべての投稿を表示する場合
  'orderby'        => 'date', // 並べ替えの基準を日付に指定します。
  'order'          => 'ASC', // 昇順に並べ替えます。
);

$lineups = get_posts($args);

$dates = ['8/10', '8/11', '8/12'];
$stages = ['MC', 'PERFECT STAGE', 'CHEERZ STAGE'];

$args = array(
  'post_type' => 'sponsor', // カスタム投稿タイプの名前
  'posts_per_page' => -1, // すべての投稿を表示する場合
);

$sponsors = get_posts($args);

$args = array(
  'post_type' => 'shop', // カスタム投稿タイプの名前
  'posts_per_page' => -1, // すべての投稿を表示する場合
  'orderby'        => 'date', // 並べ替えの基準を日付に指定します。
  'order'          => 'ASC', // 昇順に並べ替えます。
  'tax_query' => array(
    array(
      'taxonomy' => 'shop-cat',
      'field'    => 'slug',
      'terms'    => 'shop',
    ),
  ),
);

$shops = get_posts($args);

$args = array(
  'post_type' => 'shop', // カスタム投稿タイプの名前
  'posts_per_page' => -1, // すべての投稿を表示する場合
  'tax_query' => array(
    array(
      'taxonomy' => 'shop-cat',
      'field'    => 'slug',
      'terms'    => 'food',
    ),
  ),
);

$foods = get_posts($args);

?>
<?php get_header(); ?>
<div class="p-top-fixed-button">
  <a href="<?= home_url('sponsor');?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/sponsor.PNG" alt=""></a>
</div>
<div class="mt-24">
  <img src="<?= get_option('top_image'); ?>" class="mx-auto" />
</div>
<div class="c-section container mx-auto">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bird.png" alt="" class="mx-auto">
</div>
<section id="about" class="c-section container mx-auto c-fade-in">
  <h2><?= get_option('top_title'); ?></h2>
  <div class="text-center"><?= get_option('top_text'); ?></div>
  <div class="mt-16 p-top-movie">
    <?= get_option('top_youtube'); ?>
  </div>
</section>
<div class="c-section container">
  <div class="mb-4">
    <img src="<?= get_option('top_ticket_image'); ?>" class="mx-auto" alt="">
  </div>
  <div class="md:flex">
    <?php for ($i = 0; $i < 3; $i++) : ?>
      <div class="md:w-1/3">
        <a href="<?= get_option('top_ticket_link_' . $i); ?>">
          <img src="<?= get_option('top_ticket_image_' . $i); ?>" class="mx-auto" alt="">
        </a>
      </div>
    <?php endfor; ?>
  </div>
</div>
<div class="c-section container mx-auto c-fade-in">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section id="lineup" class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2><?= get_option('top_lineup_title') ?></h2>
    <?php foreach ($stages as $stage): ?>
      <div class="mb-8 js-lineup-group">
        <h3 class="text-center"><?= $stage ?></h3>
        <?php if ($stage === 'MC'): ?>
          <div class="flex items-center justify-around mb-4">
            <div class="w-1/3 text-center text-accent text-bold text-lg">8/10(SAT)</div>
            <div class="w-1/3 text-center text-accent text-bold text-lg">8/11(SUN)</div>
            <div class="w-1/3 text-center text-accent text-bold text-lg">8/12(MON)</div>
          </div>
          <?php else: ?>
            <div class="flex items-center justify-around mb-4">
              <button id="lineup<?= str_replace(" ", "", $stage) ;?>0Button" class="w-1/3 !p-2 text-sm c-button c-button--accent js-lineup-toggler">8/10(SAT)</button>
              <button id="lineup<?= str_replace(" ", "", $stage) ;?>1Button" class="w-1/3 !p-2 text-sm c-button c-button--accent-outline js-lineup-toggler">8/11(SUN)</button>
              <?php if ($stage !== 'PERFECT STAGE') : ?>
              <button id="lineup<?= str_replace(" ", "", $stage) ;?>2Button" class="w-1/3 !p-2 text-sm c-button c-button--accent-outline js-lineup-toggler">8/12(MON)</button>
              <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="p-lineup-list">
          <?php $i=0; foreach ($dates as $date):
            $args = array(
              'post_type' => 'lineup',
              'posts_per_page' => -1,
              'tax_query' => array(
                  'relation' => 'AND',
                  array(
                      'taxonomy' => 'lineup-cat',
                      'field'    => 'name',
                      'terms'    => $stage,
                  ),
                  array(
                      'taxonomy' => 'lineup-cat',
                      'field'    => 'name',
                      'terms'    => $date,
                  ),
              ),
            );
            $lineups = get_posts($args);
          ?>
          <?php if ($stage === 'MC'): ?>
            <?php foreach($lineups as $post) : setup_postdata($post);?>
              <div class="mb-4 p-2 md:p-4 w-1/3">
                <div class="c-card">
                  <div class="c-card__image">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
                  </div>
                  <div class="c-card__body">
                    <p class="font-bold text-xs md:text-sm"><?php the_title(); ?></p>
                    <div class="flex justify-end">
                      <a href="<?php the_field('instagram_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                      <a href="<?php the_field('x_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; wp_reset_postdata(); ?>
            <?php else : ?>
              <div id="lineup<?= str_replace(" ", "", $stage) ;?><?=$i;?>" class="flex flex-wrap js-lineup-target <?= $i == 0 ? '' : 'hidden' ;?>">
                <?php foreach($lineups as $post) : setup_postdata($post);?>
                  <div class="mb-4 p-2 md:p-4 w-1/3">
                    <div class="c-card">
                      <div class="c-card__image">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
                      </div>
                      <div class="c-card__body">
                        <p class="font-bold text-xs md:text-sm"><?php the_title(); ?></p>
                        <div class="flex justify-end">
                          <a href="<?php the_field('instagram_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                          <a href="<?php the_field('x_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; wp_reset_postdata(); ?>
              </div>
            <?php endif; ?>
          <?php $i++; endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<div class="c-section container mx-auto c-fade-in">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/filler-bear.png" alt="" class="mx-auto">
</div>
<section id="timeTable" class="c-section container mx-auto c-fade-in">
  <div class="c-box js-toggler-group">
    <h2><?= get_option('top_timetable_title'); ?></h2>
    <div class="flex items-center justify-around mb-4 md:hidden">
      <button id="timetable0Button" class="w-1/3 !p-2 text-sm c-button c-button--accent js-fadein-toggler">8/10(SAT)</button>
      <button id="timetable1Button" class="w-1/3 !p-2 text-sm c-button c-button--accent-outline js-fadein-toggler">8/11(SUN)</button>
      <button id="timetable2Button" class="w-1/3 !p-2 text-sm c-button c-button--accent-outline js-fadein-toggler">8/12(MON)</button>
    </div>
    <div class="mt-4 flex justify-between">
      <?php for ($i = 0; $i < 3; $i++) : ?>
        <div id="timetable<?= $i;?>" class="md:w-1/3 js-fadein-target <?= $i !== 0 ? 'hidden md:block' : '' ?>">
          <img src="<?= get_option('top_timetable_image_' . $i) ?>" class="mx-auto" alt="">
        </div>
      <?php endfor; ?>
    </div>
  </div>
  </div>
</section>
<div class="c-section c-fade-in">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<div id="drink" class="c-section c-fade-in">
  <img src="<?= get_option('top_drink_image'); ?>" alt="" class="mx-auto" />
</div>
<div class="c-section c-fade-in">
  <img src="<?= get_option('top_image2'); ?>" alt="" class="mx-auto" />
</div>
<section class="c-section container mx-auto c-fade-in">
  <h2><?= get_option('top_shop_recruitment_title'); ?></h2>
  <div class="text-center mb-4"><?= get_option('top_shop_recruitment_text'); ?></div>
  <div>
    <a href="<?= get_option('top_shop_link'); ?>">
      <img src="<?= get_option('top_shop_image'); ?>" alt="">
    </a>
  </div>
</section>
<section id="shop" class="c-section container mx-auto c-fade-in">
  <div class="c-box js-toggler-group">
    <h2><?= get_option('top_shop_title'); ?></h2>
    <div class="flex items-center justify-center">
      <button id="foodsButton" class="mx-4 text-accent c-button c-button--accent-outline text-lg js-fadein-toggler">FOOD</button>
      <button id="shopsButton" class="mx-4 text-accent c-button c-button--accent text-lg js-fadein-toggler">SHOP</button>
    </div>
    <div class="mt-4">
      <div id="shops" class="p-2 md:p-4 bg-main-sub rounded-lg flex flex-wrap justify-center js-fadein-target">
        <?php foreach($shops as $post) : setup_postdata($post); ?>
          <div class="p-2 md:p-4 w-1/2 md:w-1/3">
            <div class="c-card">
              <div class="c-card__image">
                <a href="<?php the_permalink();?>">
                  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" />
                </a>
              </div>
              <div class="c-card__body">
                <p class="text-center font-bold text-xs md:text-sm"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
                <div class="flex justify-center">
                  <a href="<?php the_field('instagram_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                  <a href="<?php the_field('x_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
      <div id="foods" class="p-2 md:p-4 bg-main-sub rounded-lg flex flex-wrap justify-center js-fadein-target" style="display:hidden;">
        <?php foreach($foods as $post) : setup_postdata($post); ?>
          <div class="p-2 md:p-4 w-1/2 md:w-1/3">
            <div class="c-card">
              <div class="c-card__image">
                <a href="<?php the_permalink();?>">
                  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" />
                </a>
              </div>
              <div class="c-card__body">
                <p class="text-center font-bold text-xs md:text-sm"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
                <div class="flex justify-center">
                  <a href="<?php the_field('instagram_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                  <a href="<?php the_field('x_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
      <div class="text-center font-bold tesxt-xl mt-4">
        <a href="">and more...</a>
      </div>
    </div>
  </div>
</section>
<section id="areaMap" class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2><?= get_option('top_area_title'); ?></h2>
    <img src="<?= get_option('top_area_image'); ?>; ?>" alt="" class="mx-auto">
  </div>
</section>
<div class="c-section c-fade-in">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section id="access" class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2><?= get_option('top_access_title'); ?></h2>
    <div>
      <p class="text-lg"><?= get_option('top_address_title'); ?></p>
      <p><?= get_option('top_address_text'); ?></p>
      <?= get_option('top_googlemap'); ?>
    </div>
    <img src="<?= get_option('top_access_image'); ?>" alt="" class="mx-auto">
  </div>
</section>
<div class="c-section">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2><?= get_option('top_about_title'); ?></h2>
    <div><?= get_option('top_about_text'); ?></div>
  </div>
</section>
<section class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2><?= get_option('top_column_title'); ?></h2>
    <div><?= get_option('top_column_text'); ?></div>
  </div>
</section>
<section class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <div class="mb-4">
      <a href="<?= get_option('top_sponsor_link'); ?>">
        <img src="<?= get_option('top_sponsor_image'); ?>" alt="">
      </a>
    </div>
    <div class="mb-4">
      <a href="<?= get_option('top_volunteer_link'); ?>">
        <img src="<?= get_option('top_volunteer_image'); ?>" alt="">
      </a>
    </div>
    <div class="mb-4">
      <a href="<?= get_option('top_shop_link'); ?>">
        <img src="<?= get_option('top_shop_image'); ?>" alt="">
      </a>
    </div>
    <div class="mb-4">
      <a href="<?= get_option('top_artist_link'); ?>">
        <img src="<?= get_option('top_artist_image'); ?>" alt="">
      </a>
    </div>
  </div>
</section>
<section class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2>SPONSOR</h2>
    <div class="c-box bg-main-sub">
      <div class="flex justify-center items-center">
        <?php foreach ($sponsors as $post) : setup_postdata($post); ?>
          <div class="p-4 w-1/3">
            <a href="<?php the_field('external_link');?>" target="_blank"><img src="<?= get_the_post_thumbnail_url(); ?>" alt="" /></a>  
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>