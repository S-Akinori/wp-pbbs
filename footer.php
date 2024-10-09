</main>
<footer class="footer">
  <div class="c-container mx-auto">
    <div class="footer__top">
      <div class="md:flex">
        <div class="flex items-center">
          <div class="c-logo mx-auto">
            <img class="mx-auto md:ml-0" src="<?= get_option('company_logo'); ?>" alt="<?= get_option('company_name'); ?>" />
          </div>
        </div>
        <div class="mr-auto text-sm my-4 md:my-0 md:ml-4">
          日時：2024年8月10日(土)10:00-20:30 <br>
          　　　2024年8月11日(日)10:00-20:30<br>
          　　　2024年8月12日(月祝)10:00-19:00<br>
          会場：SUNSET BEACH PARK INAGE<br>
          入場：無料※ステージ前席 一部有料設定<br>
          主催：PERFECT BEER ROCK FES実行委員会<br>
          制作：株式会社Obsessed
        </div>
        <div class="flex items-center justify-center ml-auto">
          <a href="" class="mr-4"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-obsessed.png" width="40" alt=""></a>
          <a href="https://www.perfectbeer.info/" target="_blank" class="mr-4"><img src="<?= get_template_directory_uri(); ?>/assets/images/bbf-illustration.png" width="60" alt=""></a>
          <a href="" class="mr-4"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-Be-U.png" width="40" alt=""></a>
        </div>
      </div>
    </div>
    <div class="footer__middle">
      <div class="flex justify-center md:justify-start mb-4 md:mb-0">
        <a href="https://www.instagram.com/perfectbeer_rockfes/" target="_blank" class="mr-4"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ig.png" width="40" height="40" alt=""></a>
        <a href="https://x.com/i/flow/login?redirect_after_login=%2Fperfectbeerrock" target="_blank" class="mr-4"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-x.png" width="40" height="40" alt=""></a>
      </div>
      <nav class="footer__nav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer',
        ));
        ?>
      </nav>
    </div>
  </div>
</footer>
<script src="<?= get_template_directory_uri(); ?>/assets/scripts/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>