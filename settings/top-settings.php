<?php
  //会社情報追加
  add_action( 'admin_menu', 'add_top_settings_menu' );
  function add_top_settings_menu() {
    add_menu_page( 'トップページ設定', 'トップページ設定', 'manage_options', 'top_settings', 'top_settings_page', '' );
    add_action( 'admin_init', 'register_top_setting' );
  }
  function top_settings_page() {
?>
<div class="wrap">
  <h2>会社情報</h2>
  <?php
  if (isset($_GET['settings-updated'])) :
    if (true == $_GET['settings-updated']) :
      echo '<div id="settings_updated" class="updated notice is-dismissible"><p><strong>設定を保存しました。</strong></p></div>';
    endif;
  endif;
  ?>
  <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
    <?php
      settings_fields('top_settings_group');
      do_settings_sections('top_settings_group');
      submit_button();
    ?>
    <table class="form-table setting-table">
      <tr>
        <th><label for="top_name">会社名</label></th>
        <td colspan="2"><input name="top_name" type="text" id="top_name" value="<?php form_option( 'top_name' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="top_logo">ロゴ</label></th>
        <td><?php generate_upload_image_tag('top_logo', get_option('top_logo'));?></td>
      </tr>
      <tr>
        <th scope="row"><label for="top_line_qr">ラインQR</label></th>
        <td><?php generate_upload_image_tag('top_line_qr', get_option('top_line_qr'));?></td>
      </tr>
      <tr>
        <th><label for="top_line_url">ラインURL</label></th>
        <td colspan="2"><input name="top_line_url" type="text" id="top_line_url" value="<?php form_option( 'top_CEO_title' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="top_map">Google Map(埋め込みコードを入力)</label></th>
        <td><textarea name="top_map" type="text" id="top_map" class="regular-text"><?php form_option( 'top_map' ); ?></textarea></td>
      </tr>
      <tr>
        <th><label for="top_CEO_title">代表ラベル</label></th>
        <td colspan="2"><input name="top_CEO_title" type="text" id="top_CEO_title" value="<?php form_option( 'top_CEO_title' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="top_CEO">代表</label></th>
        <td><input name="top_CEO" type="text" id="top_CEO" value="<?php form_option( 'top_CEO' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="top_tel_title">電話番号ラベル</label></th>
        <td colspan="2"><input name="top_tel_title" type="text" id="top_tel_title" value="<?php form_option( 'top_tel_title' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="top_tel">電話番号</label></th>
        <td><input name="top_tel" type="text" id="top_tel" value="<?php form_option( 'top_tel' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="top_tel_title">営業時間ラベル</label></th>
        <td colspan="2"><input name="top_hours_title" type="text" id="top_hours_title" value="<?php form_option( 'top_hours_title' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="top_hours">営業時間</label></th>
        <td><textarea name="top_hours" id="top_hours" class="regular-text"><?php form_option( 'top_hours' ); ?></textarea></td>
      </tr>
      <tr>
        <th><label for="top_tel_title">住所ラベル</label></th>
        <td colspan="2"><input name="top_address_title" type="text" id="top_address_title" value="<?php form_option('top_address_title'); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="top_address">住所</label></th>
        <td><textarea name="top_address" id="top_address" class="regular-text"><?php form_option('top_address'); ?></textarea></td>
      </tr>
      <tr>
        <th><label for="top_tel_title">定休日ラベル</label></th>
        <td colspan="2"><input name="top_dayoff_title" type="text" id="top_dayoff_title" value="<?php form_option( 'top_dayoff_title' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="top_dayoff">定休日</label></th>
        <td><input name="top_dayoff" type="text" id="top_dayoff" value="<?php form_option( 'top_dayoff' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="top_info_sub">備考</label></th>
        <td colspan="2">
        <?php            
          $content = get_option('top_info_sub');
          $editor_id = 'top_info_sub';
          $settings = array(
            'textarea_rows'	=> 5,
            'wpautop' => false
          );
          wp_editor($content, $editor_id, $settings);
        ?> 
        </td>
      </tr>
    </table>
    <?php submit_button(); ?>
  </form>
</div>
<?php
  }
  function register_top_setting() {
    register_setting('top_settings_group', 'top_name');
    
  }
?>