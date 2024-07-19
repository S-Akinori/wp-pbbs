<?php
$args = array(
  'post_type' => 'lineup', // カスタム投稿タイプの名前
  'posts_per_page' => -1, // すべての投稿を表示する場合
  'orderby'        => 'date', // 並べ替えの基準を日付に指定します。
  'order'          => 'ASC', // 昇順に並べ替えます。
);

$lineups = get_posts($args);

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

?>
<?php get_header(); ?>
<div class="p-top-fixed-button">
  <a href="<?= home_url('sponsor');?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/sponsor.png" alt=""></a>
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
    <div class="flex items-center justify-around">
      <button id="lineup0810Button" class="text-accent js-lineup-toggler">8/10(SAT)</button>
      <button id="lineup0811Button" class="text-accent js-lineup-toggler">8/11(SUN)</button>
      <button id="lineup0812Button" class="text-accent js-lineup-toggler">8/12(MON)</button>
    </div>
    <div class="mt-4">
      <!-- <div class="md:hidden">
        <div class="p-lineup-list">
          <div id="lineup0810" class="js-lineup-target">
            <div class="flex flex-wrap">
              <?php foreach ($lineups1 as $post) : setup_postdata($post) ?>
                  <div class="p-lineup-list__item">
                    <div class="c-card">
                      <div class="c-card__image">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
                      </div>
                      <div class="c-card__body">
                        <p class="font-bold"><?php the_title(); ?></p>
                        <div class="flex justify-end">
                          <a href="<?php the_field('instagram_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                          <a href="<?php the_field('x_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach;
              wp_reset_postdata(); ?>
            </div>
          </div>
          <div id="lineup0811" class="js-lineup-target hidden">
            <div class="flex flex-wrap">
              <?php foreach ($lineups2 as $post) : setup_postdata($post) ?>
                  <div class="p-lineup-list__item">
                    <div class="c-card">
                      <div class="c-card__image">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
                      </div>
                      <div class="c-card__body">
                        <p class="font-bold"><?php the_title(); ?></p>
                        <div class="flex justify-end">
                          <a href="<?php the_field('instagram_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                          <a href="<?php the_field('x_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach;
              wp_reset_postdata(); ?>
            </div>
          </div>
          <div id="lineup0812" class="js-lineup-target hidden">
            <div class="flex flex-wrap">
              <?php foreach ($lineups3 as $post) : setup_postdata($post) ?>
                  <div class="p-lineup-list__item">
                    <div class="c-card">
                      <div class="c-card__image">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
                      </div>
                      <div class="c-card__body">
                        <p class="font-bold"><?php the_title(); ?></p>
                        <div class="flex justify-end">
                          <a href="<?php the_field('instagram_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                          <a href="<?php the_field('x_url'); ?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach;
              wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div> -->
      <div class="">
        <div class="p-lineup-list">
          <div class="p-lineup-list__col">
            <?php foreach ($lineups1 as $post) : setup_postdata($post) ?>
              <div class="mb-4">
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
            <?php endforeach;
            wp_reset_postdata(); ?>
          </div>
          <div class="p-lineup-list__col">
            <?php foreach ($lineups2 as $post) : setup_postdata($post) ?>
              <div class="mb-4">
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
            <?php endforeach;
            wp_reset_postdata(); ?>
          </div>
          <div class="p-lineup-list__col">
            <?php foreach ($lineups3 as $post) : setup_postdata($post) ?>
              <div class="mb-4">
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
            <?php endforeach;
            wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="c-section container mx-auto c-fade-in">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/filler-bear.png" alt="" class="mx-auto">
</div>
<section id="timeTable" class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2><?= get_option('top_timetable_title'); ?></h2>
    <div class="mt-4 md:flex justify-between">
      <?php for ($i = 0; $i < 3; $i++) : ?>
        <div class="md:w-1/3">
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
  <div class="c-box">
    <h2><?= get_option('top_shop_title'); ?></h2>
    <div class="flex items-center justify-around">
      <button class="text-accent">8/10(SAT)</button>
      <button class="text-accent">8/11(SUN)</button>
      <button class="text-accent">8/12(MON)</button>
    </div>
    <div class="mt-4">
      <div class="p-2 md:p-4 bg-main-sub rounded-lg flex flex-wrap justify-center">
        <?php for ($i = 0; $i < 5; $i++) : ?>
          <div class="p-2 md:p-4 w-1/2 md:w-1/3">
            <div class="c-card">
              <div class="c-card__image">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/coming-soon.jpg" alt="" />
              </div>
              <div class="c-card__body">
                <!-- <p class="text-center font-bold">TORUKO Style</p> -->
                <div class="flex justify-center">
                  <a href="" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                  <a href="" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                </div>
              </div>
            </div>
          </div>
        <?php endfor; ?>
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
    <img src="<?= get_option('top_access_image'); ?>" alt="" class="mx-auto">
    <div>
      <p class="text-lg"><?= get_option('top_address_title'); ?></p>
      <p><?= get_option('top_address_text'); ?></p>
      <?= get_option('top_googlemap'); ?>
    </div>
  </div>
</section>
<section id="news" class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2><?= get_option('top_new_title'); ?></h2>
    <ul class="list-disc list-inside">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <!-- ループ処理(例) -->
          <li><a href="<?php the_permalink() ?>"><?php the_date(); ?> <?php the_title(); ?></a></li>
      <?php endwhile;
      endif; ?>
    </ul>
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
      <div class="flex justify-center">
        <a href="https://www.kirinholdings.com/jp/" target="_blank" class="mx-auto"><img src="<?= get_template_directory_uri(); ?>/assets/images/coming-soon.jpg" alt=""></a>
        <a href="https://www.asahibeer.co.jp/" target="_blank" class="mx-auto"><img src="<?= get_template_directory_uri(); ?>/assets/images/coming-soon.jpg" alt=""></a>
        <a href="https://www.sapporobeer.jp/" target="_blank" class="mx-auto"><img src="<?= get_template_directory_uri(); ?>/assets/images/coming-soon.jpg" alt=""></a>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>