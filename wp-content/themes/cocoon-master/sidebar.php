<?php
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;

if ( is_active_sidebar( 'sidebar' ) || is_active_sidebar( 'sidebar-scroll' ) ) : ?>
<div id="sidebar" class="sidebar nwa cf" role="complementary">

    <?php //サイドバー上の広告表示
  if (is_ad_pos_sidebar_top_visible() && is_all_adsenses_visible()){
      get_template_part_with_ad_format(get_ad_pos_sidebar_top_format(), 'ad-sidebar-top', is_ad_pos_sidebar_top_label_visible());
    }; ?>
<?php
function get_current_url() {
    $url  = isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
    $url .= '://' . $_SERVER['SERVER_NAME'];
    $url .= in_array( $_SERVER['SERVER_PORT'], array('80', '443') ) ? '' : ':' . $_SERVER['SERVER_PORT'];
    $url .= $_SERVER['REQUEST_URI'];
    return $url;
}
if(strpos(get_current_url(), "user-blogs")){
    ?>
    <style>
      .search-buttons input{
        width: 100%;
      }
      .mes-res{
        display: flex;
        justify-content: space-between;
        padding: 0 10%;
      }
        .search-buttons{
            display: flex;
            justify-content: space-around; 
        }
        .mes-start-time{
        width: 55% !important;
        padding: 0 !important;
        font-size: 20px;
      }
      .mes-until-time{
        width: 40% !important;
      }
      .mes-time-date{
        height: 100% !important;
        width: initial;
      }
      .mes-semicolon{
        width: 4% !important;
        text-align: center !important;
        font-size: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 !important;
      }
      label.mes-semicolon{
        margin: 0;
        padding: 0;
      }
      #prefecture{
        margin-bottom: 3px !important;
      }
      .search-fields{
        /* background-color: #d678bc; */
      }
      .mes-text-center{
        display: flex;
        justify-content: center;
        /* background-color: #33d6ff; */
      }
      .search-fields>h2{
        display: flex;
        justify-content: center;
        /* background-color: #e5ecdc; */
      }
      .search-field>label{
        text-align: center !important;
      }
      .search-field:last-child{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px;
      }
      .search-field:last-child>button{
        background-color: #7280dd;
        border-radius: 0.5rem;
        width: 100%;
        height: 3rem;
        color: #ffffff;
        font-size: 1.6rem;
        line-height: 1;
        font-weight: 700;
      }
      @media only screen and (max-width: 835px) {
        .mes-time-date{
          font-size: 14px !important;
        }
        .mes-time-time{
          font-size: 14px !important;
        }
        .mes-semicolon{
          font-size: 14px !important;
        }
      }
      @media only screen and (max-width: 640px) {
        .mes-time-date{
          font-size: 11px !important;
        }
        .mes-time-time{
          font-size: 11px !important;
        }
        .mes-semicolon{
          font-size: 11px !important;
        }
      }
      @media only screen and (max-width: 479px) {
        .mes-time-date{
          font-size: 8px !important;
        }
        .mes-time-time{
          font-size: 8px !important;
        }
        .mes-semicolon{
          font-size: 8px !important;
        }
      }
    </style>
 <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/user-blogs' ) ); ?>">
    <div class="search-fields">
        <h2><?php _e( '詳細検索', 'textdomain' ); ?></h2>
        <div class="search-field">
            <select name="prefecture" id="prefecture">
                <option value="北海道"><?php _e( '地域選択', 'textdomain' ); ?></option>
                <?php
            // Query to get list of prefectures
            $prefectures = array( '北海道','青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県', '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県', '新潟県', '富山県', '石川県', '福井県', '山梨県', '長野県', '岐阜県', '静岡県', '愛知県', '三重県', '滋賀県', '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県', '鳥取県', '島根県', '岡山県', '広島県', '山口県', '徳島県', '香川県', '愛媛県', '高知県', '福岡県', '佐賀県', '長崎県', '熊本県', '大分県', '宮崎県', '鹿児島県', '沖縄県' ); // replace with your own list of prefectures
            foreach ( $prefectures as $prefecture ) {
              if($prefecture == $_REQUEST['prefecture'])
                echo '<option selected value="' . esc_attr( $prefecture ) . '">' . esc_html( $prefecture ) . '</option>';
              else
                echo '<option value="' . esc_attr( $prefecture ) . '">' . esc_html( $prefecture ) . '</option>';
            }
            ?>
            </select>
        </div>
        <div class="search-field">
          <div class="mes-text-center">
            <label><?php _e( 'トレーナー性別', 'textdomain' ); ?></label><br>
          </div>
          <div class="mes-res">
            <div>
              <label for="male"><?php _e( '男', 'textdomain' ); ?></label>
              <input type="radio" name="gender" value="male" id="male"
                  <?php if( isset( $_GET['gender'] ) && $_GET['gender'] === 'male' )  echo "checked"; ?>>
            </div>
            <div>
              <label for="female"><?php _e( '女', 'textdomain' ); ?></label>
              <input type="radio" name="gender" value="female" id="female"
                  <?php if( isset( $_GET['gender'] ) && $_GET['gender'] === 'female' ) echo "checked"; ?>>
            </div>
          </div>
        </div>
        <div class="search-field">
          <div class="mes-text-center">
            <label><?php _e( 'トレーニング料金', 'textdomain' ); ?></label>
          </div>
          <div class="search-field-price mes-res">
              <label><?php _e( '初回無料', 'textdomain' ); ?></label>
              <div>
                <input type="radio" name="first_none" value="free" id="first_free"
                    <?php checked( isset( $_GET['first_none'] ) && $_GET['first_none'] == "free"); ?>>
                <label for="first_free">無料</label>
              </div>
              <div>
                <input type="radio" name="first_none" value="exist" id="first_exist"
                <?php checked( isset( $_GET['first_none'] ) && $_GET['first_none'] == "exist"); ?>>
                <label for="first_exist">有料</label>
              </div>
          </div>
          <div class="search-field-price mes-res">
              <label for="3000"><?php _e( '3,000 円以下', 'textdomain' ); ?></label>
              <input type="radio" name="price" value="3000" id="3000" <?php checked( isset( $_GET['price'] ) && $_GET['price'] == "3000"); ?>>
          </div>
          <div class="search-field-price mes-res">
              <label for="5000"><?php _e( '5,000 円以下', 'textdomain' ); ?></label>
              <input type="radio" name="price" value="5000" id="5000" <?php checked( isset( $_GET['price'] ) && $_GET['price'] == "5000" ); ?>>
          </div>
          <div class="search-field-price mes-res">
              <label for="7000"><?php _e( '7,000 円以下', 'textdomain' ); ?></label>
              <input type="radio" name="price" value="7000" id="7000" <?php checked( isset( $_GET['price'] ) && $_GET['price'] == "7000" ); ?>>
          </div>
        </div>
        <div class="search-field">
          <div class="mes-text-center">
            <label><?php _e( 'トレーニング内容', 'textdomain' ); ?></label><br>
          </div>
          <div class="mes-res">
              <label for="diet"><?php _e( 'ダイエット', 'textdomain' ); ?></label>  
              <input type="checkbox" name="train_types[]" value="diet" id="diet"
                  <?php checked( isset( $_GET['train_types'] ) && in_array("diet", $_GET['train_types']) ); ?>>
            </div>
            <div class="mes-res">
              <label for="muscle"><?php _e( '筋トレ', 'textdomain' ); ?></label>
              <input type="checkbox" name="train_types[]" value="muscle" id="muscle"
                  <?php checked( isset( $_GET['train_types'] ) && in_array("muscle", $_GET['train_types']) ); ?>>
            </div>
            <div class="mes-res">
              <label for="makeup"><?php _e( 'ボディメイク', 'textdomain' ); ?></label>
              <input type="checkbox" name="train_types[]" value="makeup" id="makeup"
                  <?php checked( isset( $_GET['train_types'] ) && in_array("makeup", $_GET['train_types']) ); ?>>
            </div>
            <div class="mes-res">
              <label for="stretching"><?php _e( 'ストレッチ', 'textdomain' ); ?></label>
              <input type="checkbox" name="train_types[]" value="stretching" id="stretching"
                  <?php checked( isset( $_GET['train_types'] ) && in_array("stretching", $_GET['train_types']) ); ?>>
            </div>
            <div class="mes-res">
              <label for="yoga"><?php _e( 'ヨガ・ピラティス', 'textdomain' ); ?></label>
              <input type="checkbox" name="train_types[]" value="yoga" id="yoga"
                  <?php checked( isset( $_GET['train_types'] ) && in_array("yoga", $_GET['train_types']) ); ?>>
            </div>
            <div class="mes-res">
              <label for="rehabilitation"><?php _e( 'リハビリ', 'textdomain' ); ?></label>
              <input type="checkbox" name="train_types[]" value="rehabilitation" id="rehabilitation"
                  <?php checked( isset( $_GET['train_types'] ) && in_array("rehabilitation", $_GET['train_types']) ); ?>>
            </div>
            <div class="mes-res">
              <label for="food"><?php _e( '食事・栄養管理', 'textdomain' ); ?></label>
              <input type="checkbox" name="train_types[]" value="food" id="food"
                  <?php checked( isset( $_GET['train_types'] ) && in_array("food", $_GET['train_types']) ); ?>>
            </div>
        </div>
        <div class="search-buttons">
            <div class="mes-start-time">
              <input type="datetime-local" value="<?php if(isset($_GET['datetime']) ) echo explode("~", $_GET['datetime'])[0]; ?>" class="mes-time-date" name="datefrom" onchange="otherChange()">
            </div>
              <label class="mes-semicolon">~</label>
            <div class="mes-until-time">
              <input type="time" value="<?php if(isset($_GET['datetime']) ) echo explode("~", $_GET['datetime'])[1]; ?>" class="mes-time-time" name="dateuntil" onchange="otherChange()">
            </div>
            <input type="hidden" name="datetime">
        </div>
        <div class="search-field">
            <button type="submit"><?php _e( '検索する', 'textdomain' ); ?></button>
        </div>
    </div>
</form>
<script>
  function mesGetAllUrlParams(url) {

// get query string from url (optional) or window
var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

// we'll store the parameters here
var obj = {};

// if query string exists
if (queryString) {

  // stuff after # is not part of query string, so get rid of it
  queryString = queryString.split('#')[0];

  // split our query string into its component parts
  var arr = queryString.split('&');

  for (var i = 0; i < arr.length; i++) {
    // separate the keys and the values
    var a = arr[i].split('=');

    // set parameter name and value (use 'true' if empty)
    var paramName = a[0];
    var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];

    // (optional) keep case consistent
    paramName = paramName.toLowerCase();
    if (typeof paramValue === 'string') paramValue = paramValue.toLowerCase();

    // if the paramName ends with square brackets, e.g. colors[] or colors[2]
    if (paramName.match(/\[(\d+)?\]$/)) {

      // create key if it doesn't exist
      var key = paramName.replace(/\[(\d+)?\]/, '');
      if (!obj[key]) obj[key] = [];

      // if it's an indexed array e.g. colors[2]
      if (paramName.match(/\[\d+\]$/)) {
        // get the index value and add the entry at the appropriate position
        var index = /\[(\d+)\]/.exec(paramName)[1];
        obj[key][index] = paramValue;
      } else {
        // otherwise add the value to the end of the array
        obj[key].push(paramValue);
      }
    } else {
      // we're dealing with a string
      if (!obj[paramName]) {
        // if it doesn't exist, create property
        obj[paramName] = paramValue;
      } else if (obj[paramName] && typeof obj[paramName] === 'string'){
        // if property does exist and it's a string, convert it to an array
        obj[paramName] = [obj[paramName]];
        obj[paramName].push(paramValue);
      } else {
        // otherwise add the property
        obj[paramName].push(paramValue);
      }
    }
  }
}

return obj;
}
  window.onload = function(){
    otherChange();
    const urlParams = mesGetAllUrlParams();
    var orderby_date = document.getElementById("orderby_date");
    var orderby_date_order = document.getElementById("orderby_date_order");
    var date_submit = document.getElementById("date_submit");
    var orderby_price = document.getElementById("orderby_price");
    var orderby_price_order = document.getElementById("orderby_price_order");
    var price_submit   = document.getElementById("price_submit");
    if( urlParams['orderby']  == "date" ){
      if(urlParams['order'] == "asc"){
        date_submit.value = "新着順🔽";
      }else{
        date_submit.value = "新着順🔼";
      }
    }
    if( urlParams['orderby']  == "price" ){
      if(urlParams['order'] == "asc"){
        price_submit.value = "料金順🔽";
      }else{
        price_submit.value = "料金順🔼";
      }
    }
    if( date_submit.value == "新着順🔼" ){
      orderby_date_order.value = "ASC";
    }else{
      orderby_date_order.value = "DESC";
    }
    if( price_submit.value == "料金順🔼" ){
      orderby_price_order.value = "ASC";
    }else{
      orderby_price_order.value = "DESC";
    }
  };
  function otherChange(){
    var tempData = "";
    var realDate = document.getElementsByName("datetime")[0];
    var fromdate = document.getElementsByName("datefrom")[0].value;
    var untiltime = document.getElementsByName("dateuntil")[0].value;
    tempData = fromdate+ "~" + untiltime;
    console.log(tempData);
    realDate.value = tempData;
  }
</script>
<?php }
else{
dynamic_sidebar( 'sidebar' ); ?>

  <?php //サイドバー下の広告表示
  if (is_ad_pos_sidebar_bottom_visible() && is_all_adsenses_visible()){
    get_template_part_with_ad_format(get_ad_pos_sidebar_bottom_format(), 'ad-sidebar-bottom', is_ad_pos_sidebar_bottom_label_visible());
  }; ?>

  <?php
  ////////////////////////////
  //サイドバー追従領域
  ////////////////////////////
  if ( is_active_sidebar( 'sidebar-scroll' ) ) : ?>
  <div id="sidebar-scroll" class="sidebar-scroll">
    <?php dynamic_sidebar( 'sidebar-scroll' ); ?>
  </div>
  <?php endif; 
}?>

</div>
<?php endif; ?>