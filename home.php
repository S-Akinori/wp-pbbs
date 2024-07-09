<?php
$args = array(
  'post_type' => 'menus', // カスタム投稿タイプの名前
  'posts_per_page' => -1, // すべての投稿を表示する場合
  'tax_query' => array(
    array(
      'taxonomy' => 'menus-cat', // カスタムタクソノミーの名前
      'field'    => 'slug',
      'terms'    => 'sushi-roulette', // タームのスラッグ
    ),
  ),
);

$menus = get_posts($args);
?>
<?php get_header(); ?>
<div class="p-top-fv">
  <div class="p-top-fv__inner">
    <img src="<?= get_template_directory_uri(); ?>/assets/images/bbf-text.png" alt="" />
  </div>
</div>
<div class="c-section container mx-auto">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bird.png" alt="" class="mx-auto">
</div>
<section id="about" class="c-section container mx-auto">
  <h2>ビールと楽しむ!音楽と笑いの祭典!</h2>
  <div class="text-center">
    <p>音楽や笑いを中心に繰り広げられるフリーダムなフェス。</p>
    <p>そんなフェスをビールを片手に楽しもう!</p>
    <p>楽しみ方はひとそれぞれ。</p>
    <p>思う存分に楽しいを追求できる新たなイベント。</p>
  </div>
  <div class="mt-12">
    <img src="<?= get_template_directory_uri(); ?>/assets/images/filler-bears.png" alt="" class="mx-auto">
  </div>
  <div class="mt-16 p-top-movie">
    <img src="<?= get_template_directory_uri(); ?>/assets/images/movie.png" alt="" class="mx-auto">
  </div>
</section>
<div class="c-section container mx-auto">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section id="lineup" class="c-section container mx-auto">
  <div class="c-box">
    <h2>LINE UP</h2>
    <div class="flex items-center justify-around">
      <button class="text-accent">8/10(SAT)</button>
      <button class="text-accent">8/11(SUN)</button>
      <button class="text-accent">8/12(MON)</button>
    </div>
    <div class="mt-4">
      <div class="p-lineup-list">
        <?php for ($i = 0; $i < 8; $i++) : ?>
          <div class="p-lineup-list__item">
            <div class="c-card">
              <div class="c-card__image">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/coming-soon.png" alt="" />
              </div>
              <div class="c-card__body">
                <p class="font-bold">TOTALFAT</p>
                <div class="flex justify-end">
                  <a href="" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig-light-blue.png" width="30" height="30" alt="" /></a>
                  <a href="" class="mx-2"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x-light-blue.png" width="30" height="30" alt="" /></a>
                </div>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>
<div class="c-section container mx-auto">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/filler-bear.png" alt="" class="mx-auto">
</div>
<section id="timeTable" class="c-section container mx-auto">
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
<div class="c-section">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section class="c-section container mx-auto">
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
<div class="c-section">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section id="shop" class="c-section container mx-auto">
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
                <img src="<?= get_template_directory_uri(); ?>/assets/images/coming-soon.png" alt="" />
              </div>
              <div class="c-card__body">
                <p class="text-center font-bold">TORUKO Style</p>
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
<div class="c-section">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section id="areaMap" class="c-section container mx-auto">
  <div class="c-box">
    <h2>AREA MAP</h2>
    <img src="<?= get_template_directory_uri(); ?>/assets/images/map.png" alt="" class="mx-auto">
  </div>
</section>
<div class="c-section">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section id="access" class="c-section container mx-auto">
  <div class="c-box">
    <h2>ACCESS</h2>
    <img src="<?= get_template_directory_uri(); ?>/assets/images/access-train.png" alt="" class="mx-auto">
    <img src="<?= get_template_directory_uri(); ?>/assets/images/access-car.png" alt="" class="mx-auto">
  </div>
</section>
<section id="news" class="c-section container mx-auto">
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
<section class="c-section container mx-auto">
  <div class="c-box">
    <h2>SPONSOR</h2>
    <div class="c-box bg-main-sub">
      <div class="flex justify-center">
        <a href="https://www.kirinholdings.com/jp/" target="_blank" class="mx-auto"><img src="<?= get_template_directory_uri(); ?>/assets/images/coming-soon.png" alt=""></a>
        <a href="https://www.asahibeer.co.jp/" target="_blank" class="mx-auto"><img src="<?= get_template_directory_uri(); ?>/assets/images/coming-soon.png" alt=""></a>
        <a href="https://www.sapporobeer.jp/" target="_blank" class="mx-auto"><img src="<?= get_template_directory_uri(); ?>/assets/images/coming-soon.png" alt=""></a>
      </div>
    </div>
  </div>
</section>
<section class="c-section container mx-auto">
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
<?php get_footer(); ?>