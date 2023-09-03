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
  <div class="c-fv">
    <div class="c-fv__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv-top.jpg" alt="" /></div>
  </div>
  <section class="c-section text-center">
    <h2 class="c-title">お客様もホステスさんも一緒に盛り上がる</h2>
    <div>
      <p>お店でお食事しながらゲームで盛り上がりたい</p>
      <p>寿司バー琴ではそのような機会をお届けします。</p>
      <p>それが「寿司アンルーレット」です。</p>
    </div>
  </section>
  <section class="c-section">
    <h2 class="c-title text-center">寿司アンルーレットの特徴</h2>
    <div class="c-imageText">
      <div class="c-imageText__wrapper">
        <div class="c-imageText__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature1.jpg" alt="" />
        </div>
      </div>
      <div class="c-imageText__wrapper md:p-8">
        <h3 class="c-imageText__title">遊び方は無限大</h3>
        <div>
          <p>寿司アンルーレットは一部の巻物に大量のわさびを隠し入れています。</p>
          <p>順番に食べていくも良し、じゃんけんで負けた人が食べていくのも良し。</p>
          <p>様々な方法で盛り上がることができます。</p>
          <p>寿司バー琴では寿司アンルーレットと絡めた遊びの例も出前の際にお伝えしています。</p>
        </div>
      </div>
    </div>
    <div class="c-imageText flex-row-reverse	">
      <div class="c-imageText__wrapper">
        <div class="c-imageText__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature2.jpg" alt="" />
        </div>
      </div>
      <div class="c-imageText__wrapper md:p-8">
        <h3 class="c-imageText__title">人数に合わせた簡潔なコース設定</h3>
        <div>
          <p>人数に合わせて、コースをお選びいただけます。</p>
          <p>選びやすく料金もシンプルなのでその場ですぐ注文することができます。</p>
        </div>
      </div>
    </div>
    <div class="c-imageText">
      <div class="c-imageText__wrapper">
        <div class="c-imageText__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature3.jpg" alt="" />
        </div>
      </div>
      <div class="c-imageText__wrapper md:p-8">
        <h3 class="c-imageText__title">３０分で配達</h3>
        <div>
          <p>六本木に構えるお店に特化しているため、他のお寿司よりも早い配達が可能です。電話での注文も承っておりますので、お客様がいるその場で注文いただきすぐに配達をいたします。</p>
          <p>※ 注文内容や混雑具合で配達時間が変動します。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="c-section">
    <h2 class="c-title text-center">さっそく寿司アンルーレットを楽しみましょう</h2>
    <div class="md:flex">
    <?php foreach ($menus as $post) : setup_postdata($post); ?>
      <div class="mb-8 md:w-1/3 p-4 p-menu">
        <div class="p-menu__image">
          <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : get_template_directory_uri() . '/dist/img/no-image.jpg' ?>" width="1200" height="800" alt="<?php the_title(); ?>">
        </div>
        <div class="p-menu__text">
          <h3 class="p-menu__title"><?php the_title(); ?></h3>
          <p><?php echo esc_html(get_the_excerpt()); ?></p>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </section>
  <div class="c-section">
    <div class="c-banner">
      <div class="c-title text-center text-base-color">ご注文はお電話またはLINEでお受けします。</div>
      <div class="mb-8 text-center"><a href="tel:080-4755-5766" class="c-button">080-4755-5766</a></div>
      <div class="text-center">
        <a href="https://lin.ee/a2GU33m">
          <img class="inline mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/line.png" alt="" width="100" height="100">
        </a>
      </div>
    </div>
  </div>
  <section class="c-section">
    <h2 class="c-title text-center">店舗情報</h2>
    <div class="md:flex justify-center">
      <div class="flex md:block justify-center">
        <div class="p-4 mb-4 md:px-4">
          <img src="<?= get_option('company_logo'); ?>" width="150" height="150" alt="<?= get_option('company_name'); ?>" />
        </div>
        <div class="p-4 mb-4 md:mb-0 md:px-4">
          <a href="<?= get_option('company_line') ?>">
            <img src="<?= get_option('company_line_qr'); ?>" width="150" height="150" alt="<?= get_option('company_name'); ?>" />
          </a>
        </div>
      </div>
      <div class="md:px-4 pl-4">
        <h3 class="text-main"><?= get_option('company_name'); ?></h3>
        <div>
          <div class="md:flex mb-4 pb-4 border-b border-main2">
            <div class="w-32 pr-4"><?= get_option('company_tel_title'); ?></div>
            <div class="whitespace-pre-wrap"><a href="tel:<?= get_option('company_tel'); ?>"><?= get_option('company_tel'); ?></a></div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main2">
            <div class="w-32 pr-4"><?= get_option('company_hours_title'); ?></div>
            <div class="whitespace-pre-wrap"><?= get_option('company_hours'); ?></div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main2">
            <div class="w-32 pr-4"><?= get_option('company_dayoff_title'); ?></div>
            <div class="whitespace-pre-wrap"><?= get_option('company_dayoff'); ?></div>
          </div>
        </div>
        <div class="text-sm">
          <?= get_option('company_info_sub'); ?>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>