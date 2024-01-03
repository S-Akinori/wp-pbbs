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
  <div class="swiper p-top-fv__inner">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="<?= get_template_directory_uri(); ?>/assets/images/1.jpg" alt=""></div>
      <div class="swiper-slide"><img src="<?= get_template_directory_uri(); ?>/assets/images/2.png" alt=""></div>
      <div class="swiper-slide"><img src="<?= get_template_directory_uri(); ?>/assets/images/3.png" alt=""></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
<section class="c-section">
  <div class="c-cols">
    <div class="c-cols__col c-cols__col--2">
      <h2 class="c-title c-fade-in">
        求職者様と企業様の<br />「声」をつなぐ
        <span class="c-title__en">VOICE</span>
      </h2>
    </div>
    <div class="c-cols__col c-cols__col--2">
      <p>VOICEはご存じの通り、声という意味があります。</p>
      <p>弊社ヴォイスキャリアコンサルティングは求職者様の夢や理想をもとに、計画と実行をサポートし、成功へとお導き致します。</p>
      <p>求職者様と、企業様の声をしっかりと受け止め、新しいCAREERの実現をお手伝いをしています。</p>
    </div>
  </div>
  <div class="text-center">
    <a href="" class="c-button">コンセプトへ</a>
  </div>
</section>
<section class="c-section">
  <img src="<?= get_template_directory_uri(); ?>/assets/images/prize2018.png" alt="" class="mx-auto">
</section>
<section class="c-section">
  <h2 class="c-title c-fade-in">
    当社が選ばれる理由
    <span class="c-title__en">SERVICE</span>
  </h2>
  <div class="c-imageText">
  </div>
  <div class="c-imageText flex-row-reverse	">
    <div class="c-cols">
      <div class="c-cols__col c-cols__col--4">
        <div class="c-image--rounded">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service1.jpg" alt="" />
        </div>
        <div>
          <h3 class="p-top-service__list__title">豊富な求人</h3>
          <p>1000社、3000案件以上の求人をご用意。</p>
        </div>
      </div>
      <div class="c-cols__col c-cols__col--4">
        <div class="c-image--rounded">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service2.jpg" alt="" />
        </div>
        <div>
          <h3 class="p-top-service__list__title">細かいサポート</h3>
          <p>面談を通して、希望の企業に入った先に、何をしたいのか、どんな将来を手に入れていたいのか、をお伺いした上でご提案いたします。</p>
        </div>
      </div>
      <div class="c-cols__col c-cols__col--4">
        <div class="c-image--rounded">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service3.jpg" alt="" />
        </div>
        <div>
          <h3 class="p-top-service__list__title">情報収集</h3>
          <p>企業様の雰囲気、残業時間の実態、給与パターンなど、直接聞きづらい内容もお伝えします。</p>
        </div>
      </div>
      <div class="c-cols__col c-cols__col--4">
        <div class="c-image--rounded">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service4.jpg" alt="" />
        </div>
        <div>
          <h3 class="p-top-service__list__title">即日対応</h3>
          <p>オンラインで即日対応するので急ぎでも安心です。</p>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center">
    <a href="" class="c-button">サービスへ</a>
  </div>
</section>
<section class="c-section">
  <h2 class="c-title c-fade-in">
    多くの方に感謝の「声」をいただいております
    <span class="c-title__en">REVIEWS</span>
  </h2>
  <div class="c-talk">
    <div class="c-talk__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review1.png" alt="" />
      今村さん
    </div>
    <div class="c-talk__text">
      <h3 class="c-talk__text__title">『自分自身の市場価値を上げるための転職』</h3>
      <p>私は、大学を卒業してから、就職活動をしていましたが、なかなか希望の会社に就職することができませんでした。</p>
      <p>そんな時に、ヴォイスキャリアコンサルティングさんにお世話になり、今の会社に就職することができました。</p>
      <p>ヴォイスキャリアコンサルティングさんは、私の希望を聞いてくれ、私の希望に合った会社を紹介してくれました。</p>
      <p>ヴォイスキャリアコンサルティングさんには、本当に感謝しています。</p>
    </div>
  </div>
  <div class="c-talk c-talk--reverse">
    <div class="c-talk__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review2.jpg" alt="" />
      田端さん
    </div>
    <div class="c-talk__text">
      <h3 class="c-talk__text__title">『家族との時間を作るため転職を決意！』</h3>
      <p>オンラインでの面接練習&対策のサポートが印象的でした。アドバイスや面接通過した際のお声は本当に心の支えでした。</p>
      <p>こうして転職できて何もかも今は楽しく過ごせています。本当に感謝してます。ありがとうございました。</p>
    </div>
  </div>
  <div class="c-talk">
    <div class="c-talk__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/review3.jpg" alt="" />
      五十嵐さん
    </div>
    <div class="c-talk__text">
      <h3 class="c-talk__text__title">『脱・年功序列！やりがいを見つけるため転職を決意！』</h3>
      <p>素敵な職場を紹介していただき、本当にありがとうございます！</p>
      <p>新卒入社したものの半年で辞め、毎日不安や焦りを感じていましたが心から転職して良かったと思っています。ありがとうございます。</p>
    </div>
  </div>
  <div class="text-center">
    <a href="" class="c-button">お客様の声へ</a>
  </div>
</section>
<section class="c-section">
  <h2 class="c-title c-title--center">
    お知らせ
    <span class="c-title__en">NEWS</span>
  </h2>
  <div>
    <ul class="p-news-list mb-4">
      <li class="p-news-list__item">
        <p class="p-news-list__item__date">2023.1.1</p>
        <p class="p-news-list__item__title"><a href="">ホームページをリニューアルしました。</a></p>
      </li>
      <li class="p-news-list__item">
        <p class="p-news-list__item__date">2023.1.1</p>
        <p class="p-news-list__item__title"><a href="">ホームページをリニューアルしました。</a></p>
      </li>
      <li class="p-news-list__item">
        <p class="p-news-list__item__date">2023.1.1</p>
        <p class="p-news-list__item__title"><a href="">ホームページをリニューアルしました。</a></p>
      </li>
      <li class="p-news-list__item">
        <p class="p-news-list__item__date">2023.1.1</p>
        <p class="p-news-list__item__title"><a href="">ホームページをリニューアルしました。</a></p>
      </li>
    </ul>
    <div class="text-center">
      <a href="" class="c-button">ニュースへ</a>
    </div>
  </div>
</section>
<div class="c-banner">
  <section class="c-section">
    <div class="c-cols">
      <div class="c-cols__col--3">
        <div class="p-4">
          <div class="mb-4">
            <img src="<?= get_option('company_logo'); ?>" width="150" height="150" alt="<?= get_option('company_name'); ?>" />
          </div>
          <h3><?= get_option('company_name'); ?></h3>
          <div>
            <div>
              <div>
                <div class="flex mb-4 pb-2 text-sm">
                  <div class="w-32 pr-4"><?= get_option('company_address_title'); ?></div>
                  <div class="whitespace-pre-wrap"><a href="tel:<?= get_option('company_address'); ?>"><?= get_option('company_address'); ?></a></div>
                </div>
                <div class="flex mb-4 pb-2 text-sm">
                  <div class="w-32 pr-4"><?= get_option('company_tel_title'); ?></div>
                  <div class="whitespace-pre-wrap"><a href="tel:<?= get_option('company_tel'); ?>"><?= get_option('company_tel'); ?></a></div>
                </div>
                <div class="flex mb-4 pb-2 text-sm">
                  <div class="w-32 pr-4"><?= get_option('company_hours_title'); ?></div>
                  <div class="whitespace-pre-wrap"><?= get_option('company_hours'); ?></div>
                </div>
                <div class="flex mb-4 pb-2 text-sm">
                  <div class="w-32 pr-4"><?= get_option('company_mail_title'); ?></div>
                  <div class="whitespace-pre-wrap"><?= get_option('company_mail'); ?></div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex">
            <a href="" class="mx-4"><img src="<?= get_template_directory_uri();?>/assets/images/fb-white.png" width="20" height="20" alt=""></a>
            <a href="" class="mx-4"><img src="<?= get_template_directory_uri();?>/assets/images/ig-white.png" width="20" height="20" alt=""></a>
          </div>
        </div>
      </div>
      <div class="c-cols__col--3 border-t md:border-t-0 md:border-l border-main-cont">
        <div class="p-4">
          <h3>一緒にお仕事をしたい方へ</h3>
          <p>求職者様と企業様の架け橋になれる人を募集しております</p>
          <div class="mt-4">
            <a href="" class="c-button c-button--accent">採用情報</a>
          </div>
        </div>
      </div>
      <div class="c-cols__col--3 border-t md:border-t-0 md:border-l border-main-cont">
        <div class="p-4">
          <h3>エージェント様へ</h3>
          <p>現在、人材営業職を募集しており、エージェント様からもご支援を頂いております。取引条件は一律でご対応頂いております。</p>
          <div class="mt-4">
            <a href="" class="c-button c-button--accent">エージェント様募集</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>