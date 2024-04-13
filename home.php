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
<section class="c-section">
  <h2>ビールと楽しむ!音楽と笑いの祭典!</h2>
  <div class="text-center">
    <p>音楽や笑いを中心に繰り広げられるフリーダムなフェス。</p>
    <p>そんなフェスをビールを片手に楽しもう!</p>
    <p>楽しみ方はひとそれぞれ。</p>
    <p>思う存分に楽しいを追求できる新たなイベント。</p>
  </div>
  <div class="mt-16 p-top-movie">
    <img src="<?= get_template_directory_uri(); ?>/assets/images/movie.png" alt="" class="mx-auto">
  </div>
</section>
<div class="c-section">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/bg-bubble.png" alt="" class="mx-auto">
</div>
<section class="c-section container">
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
<section class="c-section container">
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