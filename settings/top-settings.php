<?php
//会社情報追加
add_action('admin_menu', 'add_top_settings_menu');
function add_top_settings_menu()
{
  add_menu_page('トップページ設定', 'トップページ設定', 'manage_options', 'top_settings', 'top_settings_page', '');
  add_action('admin_init', 'register_top_setting');
}
function top_settings_page()
{
?>
  <div class="wrap">
    <h2>トップページ設定</h2>
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
          <th scope="row"><label for="top_logo">トップ画像</label></th>
          <td><?php generate_upload_image_tag('top_image', get_option('top_image')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_title">トップタイトル</label></th>
          <td colspan="2"><input name="top_title" type="text" id="top_title" value="<?php form_option('top_title'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th><label for="top_text">トップテキスト</label></th>
          <td colspan="2">
            <?php
            $content = get_option('top_text');
            $editor_id = 'top_text';
            $settings = array(
              'textarea_rows'  => 5,
              'wpautop' => false
            );
            wp_editor($content, $editor_id, $settings);
            ?>
          </td>
        </tr>
        <tr>
          <th scope="row"><label for="top_youtube">YouTube (埋め込みコードを入力)</label></th>
          <td><textarea name="top_youtube" type="text" id="top_youtube" class="regular-text"><?php form_option('top_youtube'); ?></textarea></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_campaign_image">キャンペーン画像</label></th>
          <td><?php generate_upload_image_tag('top_campaign_image', get_option('top_campaign_image')); ?></td>
        </tr>
        <tr>
          <th><label for="top_lineup_title">ラインナップ タイトル</label></th>
          <td colspan="2"><input name="top_lineup_title" type="text" id="top_lineup_title" value="<?php form_option('top_lineup_title'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_timetable_title">タイムテーブルタイトル</label></th>
          <td><textarea name="top_timetable_title" id="top_timetable_title" class="regular-text"><?php form_option('top_timetable_title'); ?></textarea></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_timetable_image_0">タイムテーブル画像8/10</label></th>
          <td><?php generate_upload_image_tag('top_timetable_image_0', get_option('top_timetable_image_0')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_timetable_image_1">タイムテーブル画像8/11</label></th>
          <td><?php generate_upload_image_tag('top_timetable_image_1', get_option('top_timetable_image_1')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_timetable_image_2">タイムテーブル画像8/12</label></th>
          <td><?php generate_upload_image_tag('top_timetable_image_2', get_option('top_timetable_image_2')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_drink_image">ドリンク画像</label></th>
          <td><?php generate_upload_image_tag('top_drink_image', get_option('top_drink_image')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_image2">画像2</label></th>
          <td><?php generate_upload_image_tag('top_image2', get_option('top_image2')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_shop_recruitment_title">ショップ募集タイトル</label></th>
          <td colspan="2"><input name="top_shop_recruitment_title" type="text" id="top_shop_recruitment_title" value="<?php form_option('top_shop_recruitment_title'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th><label for="top_shop_recruitment_text">ショップ募集テキスト</label></th>
          <td colspan="2">
            <?php
            $content = get_option('top_shop_recruitment_text');
            $editor_id = 'top_shop_recruitment_text';
            $settings = array(
              'textarea_rows'  => 5,
              'wpautop' => false
            );
            wp_editor($content, $editor_id, $settings);
            ?>
          </td>
        </tr>
        <tr>
          <th><label for="top_shop_title">ショップタイトル</label></th>
          <td colspan="2"><input name="top_shop_title" type="text" id="top_shop_title" value="<?php form_option('top_shop_title'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_area_title">エリアマップタイトル</label></th>
          <td><input name="top_area_title" type="text" id="top_area_title" value="<?php form_option('top_area_title'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_area_image">エリアマップ画像</label></th>
          <td><?php generate_upload_image_tag('top_area_image', get_option('top_area_image')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_access_title">アクセスタイトル</label></th>
          <td><input name="top_access_title" type="text" id="top_access_title" value="<?php form_option('top_access_title'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_access_image">アクセス画像</label></th>
          <td><?php generate_upload_image_tag('top_access_image', get_option('top_access_image')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_address_title">住所タイトル</label></th>
          <td><input name="top_address_title" type="text" id="top_address_title" value="<?php form_option('top_address_title'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_address_text">住所テキスト</label></th>
          <td><input name="top_address_text" type="text" id="top_address_text" value="<?php form_option('top_address_text'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_googlemap">GoogleMap (埋め込みコードを入力)</label></th>
          <td><textarea name="top_googlemap" type="text" id="top_googlemap" class="regular-text"><?php form_option('top_googlemap'); ?></textarea></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_new_title">ニュースタイトル</label></th>
          <td><input name="top_new_title" type="text" id="top_new_title" value="<?php form_option('top_new_title'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_about_title">Aboutタイトル</label></th>
          <td><input name="top_about_title" type="text" id="top_about_title" value="<?php form_option('top_about_title'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th><label for="top_about_text">Aboutテキスト</label></th>
          <td colspan="2">
            <?php
            $content = get_option('top_about_text');
            $editor_id = 'top_about_text';
            $settings = array(
              'textarea_rows'  => 5,
              'wpautop' => false
            );
            wp_editor($content, $editor_id, $settings);
            ?>
          </td>
        </tr>
        <tr>
          <th scope="row"><label for="top_column_title">コラムタイトル</label></th>
          <td><input name="top_column_title" type="text" id="top_column_title" value="<?php form_option('top_column_title'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th><label for="top_column_text">コラムテキスト</label></th>
          <td colspan="2">
            <?php
            $content = get_option('top_column_text');
            $editor_id = 'top_column_text';
            $settings = array(
              'textarea_rows'  => 5,
              'wpautop' => false
            );
            wp_editor($content, $editor_id, $settings);
            ?>
          </td>
        </tr>
        <tr>
          <th scope="row"><label for="top_ticket_image">チケット画像</label></th>
          <td><?php generate_upload_image_tag('top_ticket_image', get_option('top_ticket_image')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_ticket_image_0">チケット購入画像1</label></th>
          <td><?php generate_upload_image_tag('top_ticket_image_0', get_option('top_ticket_image_0')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_ticket_link_0">チケットリンク1</label></th>
          <td><input name="top_ticket_link_0" type="text" id="top_ticket_link_0" value="<?php form_option('top_ticket_link_0'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_ticket_image_1">チケット購入画像2</label></th>
          <td><?php generate_upload_image_tag('top_ticket_image_1', get_option('top_ticket_image_1')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_ticket_link_1">チケットリンク2</label></th>
          <td><input name="top_ticket_link_1" type="text" id="top_ticket_link_1" value="<?php form_option('top_ticket_link_1'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_ticket_image_2">チケット購入画像3</label></th>
          <td><?php generate_upload_image_tag('top_ticket_image_2', get_option('top_ticket_image_2')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_ticket_link_2">チケットリンク3</label></th>
          <td><input name="top_ticket_link_2" type="text" id="top_ticket_link_2" value="<?php form_option('top_ticket_link_2'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_sponsor_link">スポンサーリンク</label></th>
          <td><input name="top_sponsor_link" type="text" id="top_sponsor_link" value="<?php form_option('top_sponsor_link'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_sponsor_image">スポンサー画像</label></th>
          <td><?php generate_upload_image_tag('top_sponsor_image', get_option('top_sponsor_image')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_volunteer_link">ボランティアリンク</label></th>
          <td><input name="top_volunteer_link" type="text" id="top_volunteer_link" value="<?php form_option('top_volunteer_link'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_volunteer_image">ボランティア画像</label></th>
          <td><?php generate_upload_image_tag('top_volunteer_image', get_option('top_volunteer_image')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_shop_link">出展者リンク</label></th>
          <td><input name="top_shop_link" type="text" id="top_shop_link" value="<?php form_option('top_shop_link'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_shop_image">出展者画像</label></th>
          <td><?php generate_upload_image_tag('top_shop_image', get_option('top_shop_image')); ?></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_artist_link">アーティストリンク</label></th>
          <td><input name="top_artist_link" type="text" id="top_artist_link" value="<?php form_option('top_artist_link'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th scope="row"><label for="top_artist_image">アーティスト画像</label></th>
          <td><?php generate_upload_image_tag('top_artist_image', get_option('top_artist_image')); ?></td>
        </tr>
      </table>
      <?php submit_button(); ?>
    </form>
  </div>
<?php
}
function register_top_setting()
{
  register_setting('top_settings_group', 'top_image');
  register_setting('top_settings_group', 'top_title');
  register_setting('top_settings_group', 'top_text');
  register_setting('top_settings_group', 'top_youtube');
  register_setting('top_settings_group', 'top_campaign_image');
  register_setting('top_settings_group', 'top_lineup_title');
  register_setting('top_settings_group', 'top_timetable_title');
  register_setting('top_settings_group', 'top_timetable_image_0');
  register_setting('top_settings_group', 'top_timetable_image_1');
  register_setting('top_settings_group', 'top_timetable_image_2');
  register_setting('top_settings_group', 'top_drink_image');
  register_setting('top_settings_group', 'top_image2');
  register_setting('top_settings_group', 'top_shop_recruitment_title');
  register_setting('top_settings_group', 'top_shop_recruitment_text');
  register_setting('top_settings_group', 'top_shop_title');
  register_setting('top_settings_group', 'top_area_title');
  register_setting('top_settings_group', 'top_area_image');
  register_setting('top_settings_group', 'top_access_title');
  register_setting('top_settings_group', 'top_access_image');
  register_setting('top_settings_group', 'top_address_title');
  register_setting('top_settings_group', 'top_address_text');
  register_setting('top_settings_group', 'top_googlemap');
  register_setting('top_settings_group', 'top_new_title');
  register_setting('top_settings_group', 'top_about_title');
  register_setting('top_settings_group', 'top_about_text');
  register_setting('top_settings_group', 'top_column_title');
  register_setting('top_settings_group', 'top_column_text');
  register_setting('top_settings_group', 'top_ticket_link');
  register_setting('top_settings_group', 'top_ticket_image');
  register_setting('top_settings_group', 'top_ticket_image_0');
  register_setting('top_settings_group', 'top_ticket_link_0');
  register_setting('top_settings_group', 'top_ticket_image_1');
  register_setting('top_settings_group', 'top_ticket_link_1');
  register_setting('top_settings_group', 'top_ticket_image_2');
  register_setting('top_settings_group', 'top_ticket_link_2');
  register_setting('top_settings_group', 'top_sponsor_link');
  register_setting('top_settings_group', 'top_sponsor_image');
  register_setting('top_settings_group', 'top_volunteer_link');
  register_setting('top_settings_group', 'top_volunteer_image');
  register_setting('top_settings_group', 'top_shop_link');
  register_setting('top_settings_group', 'top_shop_image');
  register_setting('top_settings_group', 'top_artist_link');
  register_setting('top_settings_group', 'top_artist_image');
}
?>