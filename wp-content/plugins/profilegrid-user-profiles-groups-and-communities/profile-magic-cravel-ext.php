<?php
// add by Cravel start

define('SMC_TITLE', 'Matching'); // Smart Custom Fieldsの連携用テーブル
define('PG_BLOG_TYPE', 'profilegrid_blogs'); // ProfileGridのブログカスタム投稿タイプ


/**
 * 短いID（ハッシュ値）をテキストから取得する
 * 
 * @since  1.0.0
 * @author Cravel <cravel@cravelweb.com>
 */
function shortCRC32($data)
{
  return strtr(rtrim(base64_encode(pack('H*', crc32($data))), '='), '+/', '-_');
};


/**
 * ブログ投稿時にカスタムフィールドを登録する
 * 
 * @since  1.0.0
 * @author Cravel <cravel@cravelweb.com>
 */
function matching_post_custom_fields($post, $postid)
{
  // mes-stop-matching_post_custom_fields
  // カスタムフィールドの設定を取得
  if (isset($post['pm_content_access'])) {
    $scf_posts = get_posts(array(
      'post_type' => 'smart-custom-fields',
      //'post_title' => SMC_TITLE
      'orderby' => 'menu_order title',
      'order'   => 'DESC',
      'meta_query' => array(
        array(
          'key' => 'smart-cf-condition',
          'value' => 'profilegrid_blogs',
          'compare' => 'LIKE',
        ),
      )
    ));
  }
  foreach ($scf_posts as $scf_post) {
    $scf_id = $scf_post->ID;
    $scf_settings = get_post_meta($scf_id, 'smart-cf-setting', true);
    //$scf_setting[] = maybe_unserialize($scf_settings[0]);

    //var_dump($scf_settings);

    // カスタムフィールドの設定を走査し、カスタムフィールドの値がセットされていれば登録する
    foreach ($scf_settings as $item) {
      if (isset($post[$item['fields'][0]['name']])) {
        if ($item['fields'][0]['type'] == 'check') {
          // 複数選択可能な要素（チェックボックス）の場合
          $meta_values = $_POST[$item['fields'][0]['name']]; // 配列が格納される
          foreach ($meta_values as $meta_value) {
            // カスタムフィールド（メタデータ）の値を登録（チェックボックスは上書き）
            add_post_meta($postid,  $item['fields'][0]['name'],  esc_html($meta_value),  false);
          }
        } else {
          $meta_value = $post[$item['fields'][0]['name']];
          // カスタムフィールド（メタデータ）の値を登録
          if (!(add_post_meta($postid,  $item['fields'][0]['name'],  esc_html($meta_value),  true))) {
            update_post_meta($postid, $item['fields'][0]['name'], esc_html($meta_value));
          }
        }
      }
    }
  }
}



/**
 * 都道府県を配列で返す
 * 
 * @since  1.0.0
 * @author Cravel <cravel@cravelweb.com>
 */
//TODO:都道府県検索などの今後の実装を想定したもの。現状未使用。
function get_arr_maching_prefectures()
{
  $arr_maching_prefectures = array(
    '北海道',
    '青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県',
    '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県',
    '新潟県', '富山県', '石川県', '福井県',
    '山梨県', '長野県', '岐阜県', '静岡県', '愛知県',
    '三重県', '滋賀県', '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県',
    '鳥取県', '島根県', '岡山県', '広島県', '山口県',
    '徳島県', '香川県', '愛媛県', '高知県',
    '福岡県', '佐賀県', '長崎県', '熊本県', '大分県', '宮崎県', '鹿児島県',
    '沖縄県'
  );
  return $arr_maching_prefectures;

  // add by Cravel end
}
