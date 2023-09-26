<?php //子テーマ用関数
if (!defined('ABSPATH')) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く


// add by Cravel start
/**
 * カスタム投稿タイプを検索対象に含める
 * 
 * @since  1.0.0
 * @author Cravel <cravel@cravelweb.com>
 */

function custom_post_type_search($query)
{
  if ($query->is_search) {
    $query->set('post_type', array('post', 'profilegrid_blogs'));
  }
  return $query;
}
add_filter('pre_get_posts', 'custom_post_type_search');


/**
 * カスタムタクソノミーを検索対象に含める
 * 
 * @since  1.0.0
 * @author Cravel <cravel@cravelweb.com>
 */
/**
 * joinに投稿とpostmetaテーブルを含める
 */
function cf_search_join($join)
{
  global $wpdb;
  if (is_search()) {

    // Add Post meta
    $join .= ' LEFT JOIN ' . $wpdb->postmeta . ' ON ' . $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';

    // Add Tag Term
    //$join .= 'LEFT JOIN ' . $wpdb->term_relationships . ' tr ON ' . $wpdb->posts . '.ID = tr.object_id INNER JOIN ' . $wpdb->term_taxonomy . ' tt ON tt.term_taxonomy_id=tr.term_taxonomy_id INNER JOIN ' . $wpdb->terms . ' t ON t.term_id = tt.term_id';
  }
  return $join;
}
add_filter('posts_join', 'cf_search_join');

/**
 * 検索クエリを修正
 */
function cf_search_where($where)
{
  global $pagenow, $wpdb;
  if (is_search()) {
    // Add Tag Term
    //$where .= "OR (t.name COLLATE utf8_unicode_ci LIKE '%".get_search_query()."%' AND {$wpdb->posts}.post_status = 'publish')";

    // Add Post meta
    $where = preg_replace(
      "/\(\s*" . $wpdb->posts . ".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
      "(" . $wpdb->posts . ".post_title LIKE $1) OR (" . $wpdb->postmeta . ".meta_value LIKE $1)",
      $where
    );
  }
  return $where;
}
add_filter('posts_where', 'cf_search_where');

/**
 * 重複を除外する
 */
function cf_search_distinct($where)
{
  global $wpdb;
  if (is_search()) {
    return "DISTINCT";
  }
  return $where;
}
add_filter('posts_distinct', 'cf_search_distinct');

/**
 * グループ化する
 */
/*
function custom_search_groupby($groupby)
{
  global $wpdb;
  // we need to group on post ID
  $groupby_id = "{$wpdb->posts}.ID";
  if (!is_search() || strpos($groupby, $groupby_id) !== false) return $groupby;
  // groupby was empty, use ours
  if (!strlen(trim($groupby))) return $groupby_id;
  // wasn't empty, append ours
  return $groupby . ", " . $groupby_id;
}
add_filter('posts_groupby', 'custom_search_groupby');
*/


/**
 * デバッグ用：SQLを表示
 */
//function dump_request( $input ) {
//    var_dump($input);
//    return $input;
//}
//add_filter( 'posts_request', 'dump_request' );


/**
 * 投稿記事内にカスタムフィールドの情報を追加する
 * 
 * @since  1.0.0
 * @author Cravel <cravel@cravelweb.com>
 */
// TODO:表示する投稿タイプを指定
function filter_the_content_in_the_main_loop($content)
{
  if (is_singular('profilegrid_blogs')) {
    $html = '';

    // 投稿者IDを取得
    $post_id = get_the_ID();
    $author_id = get_post_field('post_author', $post_id); // 投稿者ID
    $author_name = get_the_author_meta('display_name', $author_id); // 投稿者名
    //$html = $html.'<div>Debug:'.$author_id.'</div>';

    // TODO:post_titleがハードコードされている
    $scf_posts = get_posts(array('post_type' => 'smart-custom-fields', 'post_title' => 'Matching'));
    foreach ($scf_posts as $scf_post) {
      $scf_id = $scf_post->ID;
    }
    $scf_settings = get_post_meta($scf_id, 'smart-cf-setting', true);
    //$scf_setting[] = maybe_unserialize($scf_settings[0]);

    //var_dump($scf_settings);

    $html = $html . '<table>';
    foreach ($scf_settings as $item) {

      // カスタムフィールドの値を取得
      if ($item['fields'][0]['type'] == 'check') {
        // 複数選択可能な要素（チェックボックス）の場合
        $values = get_post_meta(get_the_ID(), $item['fields'][0]['name'], false); // 配列を取得
        $value = '';
      } else {
        $values = '';
        $value = get_post_meta(get_the_ID(), $item['fields'][0]['name'], true);
      }

      //エスケープ
      $value = esc_html($value);

      $value_html = '';
      $value_text = '';

      // ログインによる表示切り替え

      if (is_user_logged_in() || preg_match('/-public/', $item['fields'][0]['name'])) {
        switch ($item['fields'][0]['type']) {
          case "text": // テキストボックス
            // 価格かどうかの確認
            $price_flag = (1 == preg_match('/-price/', $item['fields'][0]['name']));
            if (!empty($value) && $price_flag && is_numeric($value)) {
              $value_text = number_format($value) . '円';
            } else {
              $value_text = $value;
            }

            // URLかどうかの確認
            $url_flag = (1 == preg_match('/-url/', $item['fields'][0]['name']));
            if ($url_flag) {
              $value_html = '<a href="' . esc_url($value_text) . '">' . $value_text . '</a>';
            } else {
              $value_html = $value_text;
            }
            break;

          case "textarea": // テキストエリア
            $value_html = $value;
            break;

          case "check": // チェックボックス name="smart-custom-fields[chkbox][0][]"
            // 選択肢をスペースで分割し配列に格納
            $choices = preg_split("/\s+/", $item['fields'][0]['choices']);
            if (empty($value) && !empty($values)) { // 値が配列の場合
              foreach ($values as $value) {
                foreach ($choices as $choice) {
                  $values = preg_split("/(=>)/", $choice);
                  switch (count($values)) {
                    case 1:
                      if ($value == $values[0]) {
                        $value_html = $value_html . '<div>' . $values[0] . '</div>';
                      }
                      break;
                    case 2:
                      if ($value == $values[0]) {
                        $value_html = $value_html . '<div>' . $values[1] . '</div>';
                      }
                      break;
                  }
                }
              }
            }
            break;

          case "radio": // ラジオボタン
            // 選択肢をスペースで分割し配列に格納
            $choices = preg_split("/\s+/", $item['fields'][0]['choices']);
            foreach ($choices as $choice) {
              $values = preg_split("/(=>)/", $choice);
              switch (count($values)) {
                case 1:
                  if ($value == $values[0]) {
                    $value_html = $value_html . '<div>' . $values[0] . '</div>';
                  }
                  break;
                case 2:
                  if ($value == $values[0]) {
                    $value_html = $value_html . '<div>' . $values[1] . '</div>';
                  }
                  break;
              }
            }
            break;

          case "select": // ドロップダウン（セレクトボックス）
            // 選択肢をスペースで分割し配列に格納
            $choices = preg_split("/\s+/", $item['fields'][0]['choices']);
            foreach ($choices as $choice) {
              $values = preg_split("/(=>)/", $choice);
              switch (count($values)) {
                case 1:
                  if ($value == $values[0]) {
                    $value_html = $value_html . '<div>' . $values[0] . '</div>';
                  }
                  break;
                case 2:
                  if ($value == $values[0]) {
                    $value_html = $value_html . '<div>' . $values[1] . '</div>';
                  }
                  break;
              }
            }
            break;

          case "datepicker": // 日付ピッカー（カレンダー）
            $value_html = $value;
            break;
        }

        $html = $html . '<tr>';
        $html = $html . '<th>' . $item['fields'][0]['label'] . '</th>';
        $html = $html . '<td>' . $value_html . '</td>';
        $html = $html . '</tr>';
      }
    }
    $html = $html . '</table>';


    $cta_html = '';
    if (is_user_logged_in()) {
      // ログインしている
      if (!($author_id == get_current_user_id())) {
        $cta_html = $cta_html . '<div class="pg-blog-head pm-dbfl"><div class="pg-new-blog-button pm-border"><a href="/my-profile?rid=' . get_current_user_id() . '&messageto=' . $author_id . '#pg-messages">この出品者に連絡する</a></div></div>';
      }
    } else {
      // ログインしていない
      $cta_html = '<p>詳細情報は会員のみが閲覧できます。</p>';
      $cta_html = $cta_html . '<div class="pg-blog-head pm-dbfl"><div class="pg-new-blog-button pm-border"><a href="/my-profile">ログインして詳細を見る</a></div></div>';
    }
    $html = '<div class="pmagic">' . $html . $cta_html . '</div>';

    return $content . $html;
  }
  return $content;
}
add_filter('the_content', 'filter_the_content_in_the_main_loop', 1);



/**
 * ログイン状態に応じてメニューを切り替えるメインフック
 * 
 * @since  2.0.0
 * @author Cravel <cravel@cravelweb.com>
 */
function my_wp_nav_menu_args($args = '')
{
  $theme_locations = get_nav_menu_locations();

  //var_dump($args);

  $menu_name = get_menu_name_with_suffix($args['theme_location']);

  if (!empty($menu_name)) {
    $args['menu'] = $menu_name;
  }

  //var_dump($args);
  return $args;
}
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args');


/**
 * ログイン状態に応じてメニューを切り替える共通関数
 * 
 * @since  2.0.0
 * @author Cravel <cravel@cravelweb.com>
 */
function get_menu_name_with_suffix($menu_location = '') {
  if(empty($menu_location)) return;

  $theme_locations = get_nav_menu_locations();
  $menu_name ='';

  // メニュー用のサフィックスを設定
  if(is_user_logged_in()) {
    $suffix ='-logged-in';
  } else { 
    $suffix ='';
    //$suffix ='-logged-out';
  } 

  // メニュー名を取得
  switch($menu_location) {
    case NAV_MENU_HEADER:
      $menu_obj = get_term( $theme_locations[NAV_MENU_HEADER], 'nav_menu' );
      break;
    case NAV_MENU_HEADER_MOBILE:
      $menu_obj = get_term( $theme_locations[NAV_MENU_HEADER_MOBILE], 'nav_menu' );
      break;
    case NAV_MENU_HEADER_MOBILE_BUTTONS:
      $menu_obj = get_term( $theme_locations[NAV_MENU_HEADER_MOBILE_BUTTONS], 'nav_menu' );
      break;
    case NAV_MENU_FOOTER:
      $menu_obj = get_term( $theme_locations[NAV_MENU_FOOTER], 'nav_menu' );
      break;
    case NAV_MENU_FOOTER_MOBILE_BUTTONS:
      $menu_obj = get_term( $theme_locations[NAV_MENU_FOOTER_MOBILE_BUTTONS], 'nav_menu' );
      break;
    case NAV_MENU_MOBILE_SLIDE_IN:
      $menu_obj = get_term( $theme_locations[NAV_MENU_MOBILE_SLIDE_IN], 'nav_menu' );
      break;
    default:
      $menu_obj = null;
  }

  if (!empty($menu_obj)) {
    $menu_name = $menu_obj->name;
    if (!empty($menu_name)) {
      $menu_name = $menu_name.$suffix;
    }
  }

  //echo '■'.$menu_name;
  return $menu_name;
}


/**
 * WordPress管理画面の表示調整（Smart Custom Fields用）
 * 
 * @since  1.0.0
 * @author Cravel <cravel@cravelweb.com>
 */
function my_admin_style()
{
  echo '<style>
  .smart-cf-group-repeat > label {
    display: none;
  }
  </style>' . PHP_EOL;
}
add_action('admin_print_styles', 'my_admin_style');
function my_admin_footer_script()
{
  echo '<script>
    jQuery(".smart-cf-field-select option[value=\'boolean\']").remove();
    jQuery(".smart-cf-field-select option[value=\'message\']").remove();
    jQuery(".smart-cf-field-select option[value=\'colorpicker\']").remove();
    jQuery(".smart-cf-field-select option[value=\'datetime_picker\']").remove();
    jQuery(".smart-cf-field-select option[value=\'relation\']").remove();
    jQuery(".smart-cf-field-select option[value=\'taxonomy\']").remove();
    jQuery(".smart-cf-field-select optgroup[label=\'コンテンツフィールド\']").remove();
  </script>' . PHP_EOL;
}
add_action('admin_print_footer_scripts', 'my_admin_footer_script');



/**
 * Matchingプラグインのアップデート通知を非表示、アップデートを無効
 * 
 * @since  1.0.0
 * @author Cravel <cravel@cravelweb.com>
 */
/*
function disable_plugin_updates($value)
{
  unset($value->response['profilegrid-user-profiles-groups-and-communities\profile-magic.php']);
  return $value;
}
add_filter('site_transient_update_plugins', 'disable_plugin_updates'); //アップデートを無効にする
add_filter('pre_site_transient_update_plugins', '__return_null'); // アップデート通知を消す
add_filter('auto_update_plugin', '__return_false'); //自動アップデートを無効にする
*/

/**
 * クエリストリングを追加（ProfileGridチャットメッセージ用）
 * 
 * @since  1.0.0
 * @author Cravel <cravel@cravelweb.com>
 */
function rj_add_query_vars_filter($vars)
{
  $vars[] = "messageto"; // メッセージ送信先ユーザー
  return $vars;
}
add_filter('query_vars', 'rj_add_query_vars_filter');


/**
 * タグとカテゴリをカスタム投稿タイプで使用できるようにする
 * 
 */
register_taxonomy_for_object_type('category', 'profilegrid_blogs');
register_taxonomy_for_object_type('post_tag', 'profilegrid_blogs');
function add_post_category_archive($wp_query)
{
  if ($wp_query->is_main_query() && $wp_query->is_category()) {
    $wp_query->set('post_type', array('post', 'profilegrid_blogs'));
  }
}
add_action('pre_get_posts', 'add_post_category_archive', 10, 1);
function add_post_tag_archive($wp_query)
{
  if ($wp_query->is_main_query() && $wp_query->is_tag()) {
    $wp_query->set('post_type', array('post', 'profilegrid_blogs'));
  }
}
add_action('pre_get_posts', 'add_post_tag_archive', 10, 1);
// add by Cravel end
//// プラグインの更新非表示
add_filter('site_transient_update_plugins', 'custom_site_transient_update_plugins');
function custom_site_transient_update_plugins($value) {
    $ignore_plugins = array(
	'google-analytics-dashboard-for-wp/gadwp.php'
    );
    foreach ($ignore_plugins as $ignore_plugin) {
        if (isset($value->response[$ignore_plugin])) {
            unset($value->response[$ignore_plugin]);
        }
    }
    return $value;
}

class Maps extends WP_Widget {
 function Maps() {
      parent::WP_Widget(
      false,
      $name = '地図',
      array( 'description' => 'a', )
    );
  }
    /*　管理画面の設定とか表示用コードを書く　*/
    function form( $instance ) {

    }
    /*　管理画面で設定を変更した時の処理を書く　*/
    function update($new_instance, $old_instance) {
     
    }
     
    /*　ウィジェットを配置した時の表示用コードを書く　*/
    function widget($args, $instance) {
     
    }
     
}
    /*　自作ウィジェットを使えるようにする処理　*/
    register_widget('Maps');