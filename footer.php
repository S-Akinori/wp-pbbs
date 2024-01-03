</main>
<footer class="footer">
  <div class="c-container mx-auto">
    <div class="footer__top">
      <div>
        <div class="c-logo mx-auto md:ml-0 md:mr-auto mb-4"><img class="mx-auto md:ml-0" src="<?= get_option('company_logo'); ?>" alt="<?= get_option('company_name'); ?>" /></div>
        <div class="text-center md:text-left whitespace-pre-wrap"><?= get_option('company_address'); ?></div>
        <div class="flex justify-center md:justify-start">
          <a href="" class="mr-2"><img src="<?= get_template_directory_uri();?>/assets/images/fb-white.png" width="20" height="20" alt=""></a>
          <a href="" class="mr-2"><img src="<?= get_template_directory_uri();?>/assets/images/ig-white.png" width="20" height="20" alt=""></a>
        </div>
      </div>
      <nav class="footer__nav">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'footer',
          ));
        ?>
      </nav>
    </div>
    <div class="text-center text-sm">&copy;2023 <?= get_option('company_name'); ?></div>
  </div>
</footer>
<script src="<?= get_template_directory_uri(); ?>/assets/scripts/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>