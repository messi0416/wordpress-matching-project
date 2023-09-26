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
function create_custom_post_type() {

  register_post_type( 'training',
      array(
          'labels' => array(
              'name' => __( 'Training' ),
              'singular_name' => __( 'Training' )
          ),
          'public' => true,
          'has_archive' => true,
          'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
      )
  );

}
add_action( 'init', 'create_custom_post_type' );

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
    // mes-stop
    // TODO:post_titleがハードコードされている
    $my_posts =get_posts();
    $scf_posts = get_posts(array('post_type' => 'smart-custom-fields', 'post_title' => 'Matching'));
    foreach ($scf_posts as $scf_post) {
      $scf_id = $scf_post->ID;
    }
    $scf_settings = get_post_meta($scf_id, 'smart-cf-setting', true);
    //$scf_setting[] = maybe_unserialize($scf_settings[0]);
    
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
    $cta_html2 = '';
    if (is_user_logged_in()) {
      // ログインしている
      if (!($author_id == get_current_user_id())) {
        $cta_html = $cta_html . '<div class="pg-proflist"><div class="pg-blog-head pm-dbfl pg-proflist-item"><div class="pg-new-blog-button pm-border"><a href="/my-profile?rid=' . get_current_user_id() . '&messageto=' . $author_id . '#pg-messages">この投稿者に連絡する</a></div></div>';
        $cta_html2 = $cta_html2 . '<div class="pg-blog-head pm-dbfl"><div class="pg-new-blog-button pm-border"><a href="/my-profile?uid=' . $author_id . '">この投稿者のプロフィールを見る</a></div></div></div>';

      }
    } else {
      // ログインしていない
      $cta_html = '<p><center>詳細情報は会員のみが閲覧できます。</center></p>';
      $cta_html = $cta_html . '<div class="pg-blog-head pm-dbfl"><div class="pg-new-blog-button pm-border"><a href="/my-profile">ログインして詳細を見る</a></div></div>';
    }
    $html = '<div class="pmagic">' . $html . $cta_html . $cta_html2 . '</div>';
    return $content . $html;
    // mes-stop-back restart important
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
    // case NAV_MENU_HEADER_MOBILE:
    // 	$menu_obj = get_term( $theme_locations[NAV_MENU_HEADER_MOBILE], 'nav_menu' );
    // 	break;
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
      array( 'description' => '地図タグの一覧表示です。', )
    );
  }
    /*　管理画面の表示用コードを書く　*/
    function form( $instance ) {
      
    }
    /*　管理画面で設定を変更した時の処理を書く　*/
    function update($new_instance, $old_instance) {
     
    }
     
    /*　ウィジェットを配置した時の表示用コードを書く　*/
    function widget($args, $instance) {
     ?>
<div class="org-top-search-section top-page-none">
<div class="org-top-util-inner org-top-search-inner">
<p class="org-top-search-title"><img class="org-top-search-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-search.png" alt="" /><span class="org-top-search-title-lead">都道府県から求人情報を探す</span></p>
<div class="org-top-search-ken-block">
<p class="org-top-search-ken-title">北海道・東北エリア</p>

<ul class="org-top-search-ken-list">
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/北海道" rel="noopener"><img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />北海道</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/青森県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />青森県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/岩手県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />岩手県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/秋田県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />秋田県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/山形県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />山形県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/宮城県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />宮城県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/福島県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />福島県</a></li>
</ul>
</div>
<div class="org-top-search-ken-block">
<p class="org-top-search-ken-title">関東エリア</p>

<ul class="org-top-search-ken-list">
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/東京都" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />東京都</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/神奈川県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />神奈川県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/埼玉県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />埼玉県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/千葉県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />千葉県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/茨城県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />茨城県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/群馬県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />群馬県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/栃木県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />栃木県</a></li>
</ul>
</div>
<div class="org-top-search-ken-block">
<p class="org-top-search-ken-title">中部・北信越エリア</p>

<ul class="org-top-search-ken-list">
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/山梨県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />山梨県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/新潟県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />新潟県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/長野県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />長野県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/岐阜県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />岐阜県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/石川県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />石川県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/富山県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />富山県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/福井県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />福井県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/静岡県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />静岡県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/愛知県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />愛知県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/三重県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />三重県</a></li>
</ul>
</div>
<div class="org-top-search-ken-block">
<p class="org-top-search-ken-title">関西エリア</p>

<ul class="org-top-search-ken-list">
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/大阪府" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />大阪府</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/京都府" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />京都府</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/滋賀県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />滋賀県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/兵庫県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />兵庫県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/奈良県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />奈良県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/和歌山県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />和歌山県</a></li>
</ul>
</div>
<div class="org-top-search-ken-block">
<p class="org-top-search-ken-title">中国・四国エリア</p>

<ul class="org-top-search-ken-list">
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/岡山県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />岡山県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/広島県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />広島県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/鳥取県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />鳥取県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/島根県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />島根県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/山口県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />山口県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/香川県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />香川県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/徳島県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />徳島県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/高知県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />高知県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/愛媛県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />愛媛県</a></li>
</ul>
</div>
<div class="org-top-search-ken-block">
<p class="org-top-search-ken-title">九州・沖縄エリア</p>

<ul class="org-top-search-ken-list">
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/福岡県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />福岡県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/大分県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />大分県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/佐賀県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />佐賀県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/長崎県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />長崎県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/熊本県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />熊本県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/宮崎県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />宮崎県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/鹿児島県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />鹿児島県</a></li>
 	<li class="org-top-search-ken-item"><a class="org-top-search-ken-link" href="/tag/沖縄県" rel="noopener">
<img class="org-top-search-ken-img" src="https://xn--6qs34k848a54i.com/wp-content/uploads/2021/05/fa-tag.png" alt="" />沖縄県</a></li>
</ul>
</div>
</div>
</div>
<div class="org-ken-toggle-list toggle-wrap"><input id="toggle-checkbox-hokkaidou" class="toggle-checkbox" type="checkbox" /><label class="toggle-button" for="toggle-checkbox-hokkaidou">北海道・東北エリア</label><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/北海道" rel="noopener">北海道</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/青森県" rel="noopener">青森県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/岩手県" rel="noopener">岩手県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/秋田県" rel="noopener">秋田県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/山形県" rel="noopener">山形県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/宮城県" rel="noopener">宮城県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/福島県" rel="noopener">福島県</a></span></div>
<div class="org-ken-toggle-list toggle-wrap"><input id="toggle-checkbox-kantou" class="toggle-checkbox" type="checkbox" /><label class="toggle-button" for="toggle-checkbox-kantou">関東エリア</label><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/東京都" rel="noopener">東京都</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/神奈川県" rel="noopener">神奈川県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/埼玉県" rel="noopener">埼玉県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/千葉県" rel="noopener">千葉県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/茨城県" rel="noopener">茨城県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/群馬県" rel="noopener">群馬県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/栃木県" rel="noopener">栃木県</a></span></div>
<div class="org-ken-toggle-list toggle-wrap"><input id="toggle-checkbox-chubu" class="toggle-checkbox" type="checkbox" /><label class="toggle-button" for="toggle-checkbox-chubu">中部・北信越エリア</label><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/山梨県" rel="noopener">山梨県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/新潟県" rel="noopener">新潟県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/長野県" rel="noopener">長野県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/岐阜県" rel="noopener">岐阜県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/石川県" rel="noopener">石川県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/富山県" rel="noopener">富山県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/福井県" rel="noopener">福井県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/静岡県" rel="noopener">静岡県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/愛知県" rel="noopener">愛知県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/三重県" rel="noopener">三重県</a></span></div>
<div class="org-ken-toggle-list toggle-wrap"><input id="toggle-checkbox-kansai" class="toggle-checkbox" type="checkbox" /><label class="toggle-button" for="toggle-checkbox-kansai">関西エリア</label><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/大阪府" rel="noopener">大阪府</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/京都府" rel="noopener">京都府</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/滋賀県" rel="noopener">滋賀県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/兵庫県" rel="noopener">兵庫県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/奈良県" rel="noopener">奈良県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/和歌山県" rel="noopener">和歌山県</a></span></div>
<div class="org-ken-toggle-list toggle-wrap"><input id="toggle-checkbox-chugoku" class="toggle-checkbox" type="checkbox" /><label class="toggle-button" for="toggle-checkbox-chugoku">中国・四国エリア</label><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/岡山県" rel="noopener">岡山県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/広島県" rel="noopener">広島県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/鳥取県" rel="noopener">鳥取県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/島根県" rel="noopener">島根県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/山口県" rel="noopener">山口県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/香川県" rel="noopener">香川県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/徳島県" rel="noopener">徳島県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/高知県" rel="noopener">高知県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/愛媛県" rel="noopener">愛媛県</a></span></div>
<div class="org-ken-toggle-list toggle-wrap"><input id="toggle-checkbox-kyusyu" class="toggle-checkbox" type="checkbox" /><label class="toggle-button" for="toggle-checkbox-kyusyu">九州・沖縄エリア</label><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/福岡県" rel="noopener">福岡県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/大分県" rel="noopener">大分県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/佐賀県" rel="noopener">佐賀県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/長崎県" rel="noopener">長崎県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/熊本県" rel="noopener">熊本県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/宮崎県" rel="noopener">宮崎県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/鹿児島県" rel="noopener">鹿児島県</a></span><span class="org-ken-toggle-item toggle-content"><a class="org-ken-toggle-link" href="/tag/沖縄県" rel="noopener">沖縄県</a></span>
     <?php
    }
}
// mes-stop-making-function
function mes_search_verify(){
  $flagTrain = false;
  $flagDate = false;
  $post_id = get_the_ID();
  $author_id = get_post_field('post_author', $post_id);
  $author_name = get_the_author_meta('display_name', $author_id);
  
  $user_meta = get_user_meta($author_id);
  // prefecture compare
  if(isset($_REQUEST['gender']) && ($_REQUEST['gender'] != "")){
    $user_meta = get_user_meta($author_id);
    if($_REQUEST['gender'] == 'male'){
      if($user_meta["pm_field_23"][0] != '男性')
        return false;
    }else{
      if($user_meta['pm_field_23'][0] != '女性')
        return false;
    }
  }
  if(isset($_REQUEST['prefecture']) && ($_REQUEST['prefecture'] != "")){
    if($_REQUEST['prefecture'] != get_the_tags()[1]->name)
      return false;
  }
  $my_posts = get_posts();
  $scf_posts = get_posts(array('post_type' => 'smart-custom-fields', 'post_title' => 'Matching'));
  foreach ($scf_posts as $scf_post) {
    $scf_id = $scf_post->ID;
  }
  $scf_settings = get_post_meta($scf_id, 'smart-cf-setting', true);

  foreach ($scf_settings as $item) {
    // check train_types validation
    if ($item['fields'][0]['type'] == 'check') {
      if(isset($_REQUEST['train_types']) && ($_REQUEST['train_types'][0] != ""))
      if($item['fields'][0]['name'] == 'train_types'){
        $values = get_post_meta(get_the_ID(), $item['fields'][0]['name'], false); // 配列を取得
        foreach($_REQUEST['train_types'] as $tmpSearch){
          $flagTrain = false;
          foreach($values as $tmpData){
            if($tmpData == '')  continue;
            if($tmpData == $tmpSearch){
              $flagTrain = true;
              break;
            }
          }
          if($flagTrain == false){
            return false;
          }
        }
      }
    } else {
      $value = get_post_meta(get_the_ID(), $item['fields'][0]['name'], true);
      switch ( $item['fields'][0]['name'] ){
        case 'first_none':
          if(isset($_REQUEST['first_none']) && ($_REQUEST['first_none'] != ""))
          if($_REQUEST['first_none'] != $value)
            return false;
          break;
        case 'price':
          if(isset($_REQUEST['price']) && ($_REQUEST['price'] != ""))
          if($_REQUEST['price'] < $value)
            return false;
          break;
        case 'realdate':
          if(isset($_REQUEST['datetime']) && ($_REQUEST['datetime'] != "")){
            $arrayDates = explode(" ", $value);
            $searchItems = explode(" ", $_REQUEST['datetime']);
            foreach($searchItems as $searchItem){
              $searchChildItems = explode("~", $searchItem);
              foreach($arrayDates as $item){
                $flagDate = false;
                $childItems = explode("~", $item);
                if($childItems[0] > $searchChildItems[0]){
                  $flagDate = false;
                  continue;
                }
                $flagDate = true;
                if($childItems[1] < $searchChildItems[1]){
                  $flagDate = false;
                  continue;
                }
                break;
              }
            }
            if($flagDate == false)
              return false;
          }
          break;
      }
    }
  }
  return true;
}
    /*　自作ウィジェットを使えるようにする処理　*/
// register_widget('Maps');🔼🔽⬇⬆⇧