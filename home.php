<?php
$args = array(
  'post_type' => 'lineup', // カスタム投稿タイプの名前
  'posts_per_page' => -1, // すべての投稿を表示する場合
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
<div class="mt-16">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/top.jpg" alt="mx-auto" />
</div>
<div>
  <img src="<?= get_template_directory_uri(); ?>/assets/images/top-fv-2.png" alt="" class="mx-auto" />
</div>
<div class="c-section container mx-auto">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bird.png" alt="" class="mx-auto">
</div>
<section id="about" class="c-section container mx-auto c-fade-in">
  <h2>日本一を目指す！ビールと音楽の祭典</h2>
  <div class="text-center">
    <p>ビールと音楽を中心に繰り広げられるフリーダムなフェス。</p>
    <p>野外フェスでは味わったことのないキンキンで最高品質のビールを提供！</p>
    <p>そんなビールを片手にフェスを楽しもう！楽しみ方はひとそれぞれ。</p>
    <p>たくさんの乾杯を交わしみんなが主役でみんなで楽しいを追求できる新たなイベント</p>
  </div>
  <div class="mt-16 p-top-movie">
    <iframe src="https://www.youtube.com/embed/CVYSz_H4L9k?si=lW1XzoM2xQ-VcOKA" frameborder="0"></iframe>
  </div>
</section>
<div class="c-section container mx-auto c-fade-in">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section id="lineup" class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2>LINE UP</h2>
    <div class="flex items-center justify-around">
      <button id="lineup0810Button" class="text-accent js-lineup-toggler">8/10(SAT)</button>
      <button id="lineup0811Button" class="text-accent js-lineup-toggler">8/11(SUN)</button>
      <button id="lineup0812Button" class="text-accent js-lineup-toggler">8/12(MON)</button>
    </div>
    <div class="mt-4">
      <div class="md:hidden">
        <div class="p-lineup-list">
          <div id="lineup0810" class="js-lineup-target">
            <div class="flex flex-wrap">
              <?php foreach($lineups1 as $post) : setup_postdata($post) ?>
                  <div class="p-lineup-list__item">
                    <div class="c-card">
                      <div class="c-card__image">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
                      </div>
                      <div class="c-card__body">
                        <p class="font-bold"><?php the_title();?></p>
                        <div class="flex justify-end">
                          <a href="<?php the_field('instagram_url');?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                          <a href="<?php the_field('x_url');?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
          </div>
          <div id="lineup0811" class="js-lineup-target hidden">
            <div class="flex flex-wrap">
              <?php foreach($lineups2 as $post) : setup_postdata($post) ?>
                  <div class="p-lineup-list__item">
                    <div class="c-card">
                      <div class="c-card__image">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
                      </div>
                      <div class="c-card__body">
                        <p class="font-bold"><?php the_title();?></p>
                        <div class="flex justify-end">
                          <a href="<?php the_field('instagram_url');?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                          <a href="<?php the_field('x_url');?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
          </div>
          <div id="lineup0812" class="js-lineup-target hidden">
            <div class="flex flex-wrap">
              <?php foreach($lineups3 as $post) : setup_postdata($post) ?>
                  <div class="p-lineup-list__item">
                    <div class="c-card">
                      <div class="c-card__image">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
                      </div>
                      <div class="c-card__body">
                        <p class="font-bold"><?php the_title();?></p>
                        <div class="flex justify-end">
                          <a href="<?php the_field('instagram_url');?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                          <a href="<?php the_field('x_url');?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="p-lineup-list">
          <div class="p-lineup-list__col">
            <?php foreach($lineups1 as $post) : setup_postdata($post) ?>
              <div class="">
                <div class="c-card">
                  <div class="c-card__image">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
                  </div>
                  <div class="c-card__body">
                    <p class="font-bold"><?php the_title();?></p>
                    <div class="flex justify-end">
                      <a href="<?php the_field('instagram_url');?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                      <a href="<?php the_field('x_url');?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
          <div class="p-lineup-list__col">
            <?php foreach($lineups2 as $post) : setup_postdata($post) ?>
              <div class="mb-4">
                <div class="c-card">
                  <div class="c-card__image">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
                  </div>
                  <div class="c-card__body">
                    <p class="font-bold"><?php the_title();?></p>
                    <div class="flex justify-end">
                      <a href="<?php the_field('instagram_url');?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                      <a href="<?php the_field('x_url');?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
          <div class="p-lineup-list__col">
            <?php foreach($lineups3 as $post) : setup_postdata($post) ?>
              <div class="">
                <div class="c-card">
                  <div class="c-card__image">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
                  </div>
                  <div class="c-card__body">
                    <p class="font-bold"><?php the_title();?></p>
                    <div class="flex justify-end">
                      <a href="<?php the_field('instagram_url');?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                      <a href="<?php the_field('x_url');?>" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; wp_reset_postdata(); ?>
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
    <h2>TIME TABLE</h2>
    <div class="flex items-center justify-around">
      <button class="text-accent">8/10(SAT)</button>
      <button class="text-accent">8/11(SUN)</button>
      <button class="text-accent">8/12(MON)</button>
    </div>
    <div class="mt-4">
      <div class="p-time-table">
        <div class="p-time-table__list">
          <div class="bg-[#F4BE74] p-4 text-center rounded-tl-lg rounded-tr-lg">MAIN STAGE</div>
          <?php for ($i = 0; $i < 8; $i++) : ?>
            <div class="p-time-table__list__item">
              <p class="font-bold">1<?= $i + 1; ?>:00</p>
            </div>
          <?php endfor; ?>
        </div>
        <div class="p-time-table__list">
          <div class="bg-accent p-4 text-center rounded-tl-lg rounded-tr-lg">DJ booth</div>
          <?php for ($i = 0; $i < 8; $i++) : ?>
            <div class="p-time-table__list__item">
              <p class="font-bold">1<?= $i + 1; ?>:00</p>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="c-section c-fade-in">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<div class="c-section c-fade-in">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section id="shop" class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2>SHOP</h2>
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
<div class="c-section c-fade-in">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section id="areaMap" class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2>AREA MAP</h2>
    <img src="<?= get_template_directory_uri(); ?>/assets/images/coming-soon.jpg" width="200" alt="" class="mx-auto">
  </div>
</section>
<div class="c-section c-fade-in">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section id="access" class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2>ACCESS</h2>
    <img src="<?= get_template_directory_uri(); ?>/assets/images/access.jpg" alt="" class="mx-auto">
  </div>
</section>
<section id="news" class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2>NEWS</h2>
    <ul class="list-disc list-inside">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <!-- ループ処理(例) -->
          <li><a href="<?php the_permalink() ?>"><?php the_date(); ?> <?php the_title(); ?></a></li>
      <?php endwhile; endif; ?>
    </ul>
  </div>
</section>
<div class="c-section">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
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
<section class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2>What is PERFECT BEER?</h2>
    <h2>「最高のビール体験で、人生をもっと豊かに」</h2>
    <p>現場スタッフ、お客様、関わる全ての方の人生をもっと豊かにしたい。そんな想いで営業しているビールと唐揚げの専門店です。日本を代表するビールメーカーを作ることを目標に掲げ、まずは日本一のビール屋を作るため、全国フランチャイズの展開中です。</p>
    <div class="mt-12">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/beer.png" alt="" class="mx-auto">
    </div>
    <div class="mt-12">
      <h2>「PERFECT BEERの定義」</h2>
      <p>パーフェクトビアとは、銘柄のことではなく株式会社PERFECT BEER独自で定義した4つの項目をクリアした樽生ビールのこと。</p>
      <p>樽生ビールは同じ銘柄でのみ、サーバーの管理の仕方やグラスの洗浄など品質管理で大きな差が出ます。</p>
      <p>その管理を完璧に行い最高の状態で提供される樽生ビールのことをパーフェクトビアと定義をつけました。</p>
    </div>
    <div class="mt-12 text-center">
      <a href="/" class="flex justify-center items-center"><span>詳しくはこちら</span> <span class="material-symbols-outlined">arrow_outward</span></a>
    </div>
  </div>
</section>
<section class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <h2>COLUMN</h2>
    <h2 class="text-left">世の中に彩りと感情に揺さぶりを</h2>
    <p>をテーマに掲げイベント活動を行っています。</p>
    <p>人生の中の今日という日にイベントを通して、私達が創るこの瞬間が皆様の人生に彩りを添えて、感情が揺さぶられる体験と思い出を提供できたらと考えています。</p>
    <p>世の中には様々な人がいます。色々な生き方や在り方があるという多様性を認め合い、何歳になってもワクワクできるような場所や体験を作っていきたいと思っています。</p>
    <p>そんな想いを乗せて、作られたのが今回のイベントです。</p>
    <p>出演者や出店者はもちろん、お客様や地域の方々、運営や裏方もみんなが主役で、みんなが自由に楽しめるイベントにしたいと考えています。</p>
  </div>
</section>
<section class="c-section container mx-auto c-fade-in">
  <div class="c-box">
    <div class="mb-4">
      <a href="https://docs.google.com/forms/d/1WZnq9EIO9NPwONTLuK4ZJrndIq5Tu0aYxy33jchiaOs/edit">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/apply1.png" alt="">
      </a>
    </div>
    <div class="mb-4">
      <a  href="https://docs.google.com/forms/d/1sTGOO63AK5rjUOvR4IMp9cqHxjITmE-RPW-3KonduIs/edit">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/apply2.png" alt="">
      </a>
    </div>
    <div class="mb-4">
      <a href="https://docs.google.com/forms/d/e/1FAIpQLSceqtyBzgT74TOxOTvL9QCsUIAy-4zGBsZDTkiS6Kr5jP2NYQ/viewform">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/apply3.png" alt="">
      </a>
    </div>
    <div class="mb-4">
      <a href="https://docs.google.com/forms/d/15XPiChsItqQGwdbcAWBMPTbVb5GG423Kknc4N3f6ba4/edit">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/apply4.png" alt="">
      </a>
    </div>
  </div>
</section>
<?php get_footer(); ?>