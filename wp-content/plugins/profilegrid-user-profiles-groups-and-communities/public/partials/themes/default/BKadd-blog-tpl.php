<div class="pmagic">
  <!-----Form Starts----->
  <form class="pmagic-form pm-dbfl" method="post" action="" id="pm_add_blog_post" name="pm_add_blog_post" onsubmit="return profile_magic_blogpost_validation()" enctype="multipart/form-data">



    <?php
    // タイトル
    ?>
    <div class="pmrow">
      <div class="pm-col">
        <div class="pm-form-field-icon"></div>
        <div class="pm-field-lable">
          <label for="blog_title"><?php _e('Title', 'profilegrid-user-profiles-groups-and-communities'); ?><sup class="pm_estric">*</sup></label>
        </div>
        <div class="pm-field-input pm_required">
          <input title="Enter your title" type="text" class="" maxlength="" value="" id="blog_title" name="blog_title" placeholder="">
          <div class="errortext" style="display:none;"></div>
        </div>
      </div>

    </div>

    <?php
    // 説明
    ?>
    <div class="pmrow">
      <div class="pm-col">
        <div class="pm-form-field-icon"></div>
        <div class="pm-field-lable">
          <label for="blog_description"><?php _e('Description', 'profilegrid-user-profiles-groups-and-communities'); ?></label>
        </div>
        <div class="pm-field-input">
          <?php wp_editor('', 'blog_description', $settings); ?>
          <div class="errortext" style="display:none;"></div>
        </div>
      </div>
    </div>

  <?php
    // タグ
    //TODO:都道府県でタグを設定するテスト
    if ($dbhandler->get_global_option_value('pm_blog_tags', '0') == 1) :
    ?>
      <div class="pmrow">
        <div class="pm-col">
          <div class="pm-form-field-icon"></div>
          <div class="pm-field-lable">
            <label for="blog_tags">都道府県*</label>
          </div>
          <div class="pm-field-input">
            <select name="blog_tags[]" id="blog_tags">
              <?php
              // 都道府県を取得
              $arr_maching_prefectures = get_arr_maching_prefectures();
              $prefecture_option_tag = '';
              foreach ($arr_maching_prefectures as $prefecture) {
                $prefecture_option_tag = $prefecture_option_tag . '<option value="' . $prefecture . '">' . $prefecture . '</option>';
              }
              echo $prefecture_option_tag;
              ?>
            </select>
            <div class="errortext" style="display:none;"></div>
          </div>
        </div>

      </div>
      <?php
      // タグを追加
      ?>

    <?php
    endif;
    ?>
      <?php
      // タグを追加場合はここ
      ?>
<div class="pmrow">
<div class="pm-col">
<div class="pm-form-field-icon"></div>
<div class="pm-field-lable">
<label for="blog_tags">性別*</label>
</div>
<div class="pm-field-input">
<select name="blog_tags[]" id="blog_tags">
<option value="男性">男性</option>
<option value="女性">女性</option>
</select>
<div class="errortext" style="display:none;"></div>
</div>
</div>
</div>
    <?php
    // add by Cravel start
    /**
     * カスタムフィールド追加フォームテンプレート
     * 
     * @since  1.0.0
     * @author Cravel <cravel@cravelweb.com>
     */
    // TODO:カスタムフィールドを使った投稿フォームのサンプル


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

    //var_dump($scf_posts);

    foreach ($scf_posts as $scf_post) {
      $scf_id = $scf_post->ID;

      $scf_settings = get_post_meta($scf_id, 'smart-cf-setting', true);
      //$scf_setting[] = maybe_unserialize($scf_settings[0]);

      //var_dump($scf_settings);

      $html = '<style>.chkitem {display:flex;}.chkitem *{width:initial!important;}</style>';

      foreach ($scf_settings as $item) {
        //var_dump($item);

        // 入力必須項目の確認
        $requred_flag = (1 == preg_match('/-required/', $item['fields'][0]['name']));
        if ($requred_flag) {
          $reruired_class = ' pm_required';
          $reruired_tag = '<sup class="pm_estric">*</sup>';
        } else {
          $reruired_class = '';
          $reruired_tag = '';
        }

        // 価格（数値）入力項目の確認
        $price_flag = (1 == preg_match('/-price/', $item['fields'][0]['name']));
        if ($price_flag) {
          $reruired_class = $reruired_class . ' pm_number';
        }

        $form_item_tag = '';
        switch ($item['fields'][0]['type']) {

          case "text": // テキストボックス
            $form_item_tag = $form_item_tag . '<div class="pm-field-input ' . $reruired_class . '">';
            $form_item_tag = $form_item_tag . '<input type="text" class="" maxlength="200" value="' . $item['fields'][0]['default'] . '" id="' . $item['fields'][0]['name'] . '" name="' . $item['fields'][0]['name'] . '" placeholder="' . $item['fields'][0]['instruction'] . '">';
            $form_item_tag = $form_item_tag . '<div class="errortext" style="display:none;"></div>';
            $form_item_tag = $form_item_tag . '</div>';
            break;

          case "textarea": // テキストエリア
            if ($requred_flag) {
              $reruired_class = $reruired_class . ' pm_textarearequired';
            }
            $form_item_tag = $form_item_tag . '<div class="pm-field-input ' . $reruired_class . '">';
            $form_item_tag = $form_item_tag . '<textarea name="' . $item['fields'][0]['name'] . '" rows="' . $item['fields'][0]['rows'] . '" placeholder="' . $item['fields'][0]['instruction'] . '">' . $item['fields'][0]['default'] . '</textarea>';
            $form_item_tag = $form_item_tag . '</div>';
            break;

          case "check": // チェックボックス name="smart-custom-fields[chkbox][0][]"
            if ($requred_flag) {
              $reruired_class = $reruired_class . ' pm_checkboxrequired';
            }
            $form_item_tag = $form_item_tag . '<div class="pm-field-input ' . $reruired_class . '"><div class="pmcheckbox">';
            $form_item_tag = $form_item_tag . '<input type="hidden" name="' . $item['fields'][0]['name'] . '[]" value="">';
            // 選択肢をスペースで分割し配列に格納
            $choices = preg_split("/\s+/", $item['fields'][0]['choices']);
            foreach ($choices as $choice) {
              $values = preg_split("/(=>)/", $choice);
              switch (count($values)) {
                case 1:
                  $form_item_tag = $form_item_tag . '<div class="chkitem">';
                  $form_item_tag = $form_item_tag . '<input type="checkbox" id="' . $values[0] . '" name="' . $item['fields'][0]['name'] . '[]" value="' . $values[0] . '">';
                  $form_item_tag = $form_item_tag . '<label for="' . $values[0] . '">' . $values[0] . '</label>';
                  $form_item_tag = $form_item_tag . '</div>';
                  break;
                case 2:
                  $form_item_tag = $form_item_tag . '<div class="chkitem">';
                  $form_item_tag = $form_item_tag . '<input type="checkbox" id="' . $values[0] . '" name="' . $item['fields'][0]['name'] . '[]" value="' . $values[0] . '">';
                  $form_item_tag = $form_item_tag . '<label for="' . $values[0] . '">' . $values[1] . '</label>';
                  $form_item_tag = $form_item_tag . '</div>';
                  break;
              }
            }
            $form_item_tag = $form_item_tag . '</div></div>';
            break;

          case "radio": // ラジオボタン
            if ($requred_flag) {
              $reruired_class = $reruired_class . ' pm_radiorequired';
            }
            $form_item_tag = $form_item_tag . '<div class="pm-field-input ' . $reruired_class . '"><div class="pmradio">';
            // 選択肢をスペースで分割し配列に格納
            $choices = preg_split("/\s+/", $item['fields'][0]['choices']);
            foreach ($choices as $choice) {
              $values = preg_split("/(=>)/", $choice);
              switch (count($values)) {
                case 1:
                  $form_item_tag = $form_item_tag . '<div class="pm-radio-option">';
                  $form_item_tag = $form_item_tag . '<input type="radio" id="' . $values[0] . '" name="' . $item['fields'][0]['name'] . '" value="' . $values[0] . '">';
                  $form_item_tag = $form_item_tag . '<label for="' . $values[0] . '">' . $values[0] . '</label>';
                  $form_item_tag = $form_item_tag . '</div>';
                  break;
                case 2:
                  $form_item_tag = $form_item_tag . '<div class="pm-radio-option">';
                  $form_item_tag = $form_item_tag . '<input type="radio" id="' . $values[0] . '" name="' . $item['fields'][0]['name'] . '" value="' . $values[0] . '">';
                  $form_item_tag = $form_item_tag . '<label for="' . $values[0] . '">' . $values[1] . '</label>';
                  $form_item_tag = $form_item_tag . '</div>';
                  break;
              }
            }
            $form_item_tag = $form_item_tag . '</div></div>';
            break;

          case "select": // ドロップダウン（セレクトボックス）
            if ($requred_flag) {
              $reruired_class = $reruired_class . ' pm_select_required';
            }
            $form_item_tag = $form_item_tag . '<div class="pm-field-input ' . $reruired_class . '">';
            $form_item_tag = $form_item_tag . '<select name="' . $item['fields'][0]['name'] . '" id="' . $item['fields'][0]['name'] . '">';
            $form_item_tag = $form_item_tag . '<option value="">選択してください</option>';
            // 選択肢をスペースで分割し配列に格納
            $choices = preg_split("/\s+/", $item['fields'][0]['choices']);
            foreach ($choices as $choice) {
              $values = preg_split("/(=>)/", $choice);
              switch (count($values)) {
                case 1:
                  $form_item_tag = $form_item_tag . '<option value="' . $values[0] . '">' . $values[0] . '</option>';
                  break;
                case 2:
                  $form_item_tag = $form_item_tag . '<option value="' . $values[0] . '">' . $values[1] . '</option>';
                  break;
              }
            }
            $form_item_tag = $form_item_tag . '</select>';
            $form_item_tag = $form_item_tag . '</div>';
            break;

          case "datepicker": // 日付ピッカー（カレンダー）
            $form_item_tag = $form_item_tag . '<div class="pm-field-input pm_datepicker">';
            $form_item_tag = $form_item_tag . '<link rel="stylesheet" href="https://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all" />';
            $form_item_tag = $form_item_tag . '<script src="https://code.jquery.com/ui/1.8.18/jquery-ui.min.js" type="text/javascript"></script>';
            $form_item_tag = $form_item_tag . '<script>$(function() {$( "#' . $item['fields'][0]['name'] . '" ).datepicker({dateFormat: \'yy/mm/dd\'});});</script>';
            $form_item_tag = $form_item_tag . '<input type="text" class="" maxlength="200" value="' . $item['fields'][0]['default'] . '" id="' . $item['fields'][0]['name'] . '" name="' . $item['fields'][0]['name'] . '" placeholder="' . $item['fields'][0]['instruction'] . '">';
            $form_item_tag = $form_item_tag . '</div>';
            break;
        }

        // ラベル部分の生成
        $form_label_tag = '<label for="' . $item['fields'][0]['name'] . '">' . $item['fields'][0]['label'] . $reruired_tag . '</label>';


        // ラベルとアイテムを結合、htmlブロックの生成
        $html = $html . '<div class="pmrow">';
        $html = $html . '<div class="pm-col">';
        $html = $html . '  <div class="pm-form-field-icon"></div>';
        $html = $html . '  <div class="pm-field-lable">';
        $html = $html . $form_label_tag;
        //$html = $html . '    <label for="blog_title">タイトル<sup class="pm_estric">*</sup></label>';
        $html = $html . '  </div>';
        $html = $html . $form_item_tag;
        $html = $html . '</div>';
        $html = $html . '</div>';

        //$html = $html . '<tr><th>' . $form_label_tag . '</th><td>' . $form_item_tag . '</td></tr>';
      }

      echo $html;
    }

    // add by Cravel end
    ?>



    <?php
    // タグ
    /*
      if ($dbhandler->get_global_option_value('pm_blog_tags', '0') == 1) :
    ?>
    <div class="pmrow">
      <div class="pm-col">
        <div class="pm-form-field-icon"></div>
        <div class="pm-field-lable">
          <label for="blog_tags"><?php _e('Tags', 'profilegrid-user-profiles-groups-and-communities'); ?></label>
        </div>
        <div class="pm-field-input">
          <input type="text" value="" tabindex="5" size="16" name="blog_tags" id="blog_tags" />
          <div class="errortext" style="display:none;"></div>
        </div>
      </div>

    </div>
    <?php
      endif;
      */
    ?>


  

    <?php
    // 画像アップロード
    /*
      if ($dbhandler->get_global_option_value('pm_blog_feature_image', '0') == 1) :
    ?>
    <div class="pmrow">
      <div class="pm-col">
        <div class="pm-form-field-icon"></div>
        <div class="pm-field-lable">
          <label for="blog_image"><?php _e('Image', 'profilegrid-user-profiles-groups-and-communities'); ?></label>
        </div>
        <div class="pm-field-input pm_fileinput">
          <div class="pm_repeat">
            <input title="" type="file" class="" id="" name="blog_image" data-filter-placeholder="" />
            <div class="errortext" style="display:none;"></div>
          </div>
        </div>
      </div>
    </div>
    <?php
      endif;
      */
    ?>

    <?php
    // プライバシーレベル（ログイン表示コントロールのためすべてパブリックに設定）
    echo '<input type="hidden" name="pm_content_access" id="pm_content_access" value="1" checked />';
    /*
      if ($dbhandler->get_global_option_value('pm_blog_privacy_level', '0') == 1) :
    ?>
    <div class="pmrow">
      <div class="pm-col">
        <div class="pm-form-field-icon"></div>
        <div class="pm-field-lable">
          <label
            for="blog_image"><?php _e('Content Privacy', 'profilegrid-user-profiles-groups-and-communities'); ?></label>
        </div>
        <div class="pm-field-input">
          <div class="pmradio">
            <div class="pm-radio-option">
              <input type="radio" name="pm_content_access" id="pm_content_access" value="1" checked />
              <?php _e('Content accessible to Everyone', 'profilegrid-user-profiles-groups-and-communities'); ?>
            </div>
            <div class="pm-radio-option">
              <input type="radio" name="pm_content_access" id="pm_content_access" value="2" />
              <?php _e('Content accessible to Logged In Users', 'profilegrid-user-profiles-groups-and-communities'); ?>
            </div>
            <div class="pm-radio-option">
              <input type="radio" name="pm_content_access" id="pm_content_access" value="3" />
              <?php _e('Content accessible to My Friends', 'profilegrid-user-profiles-groups-and-communities'); ?>
            </div>
            <div class="pm-radio-option">
              <input type="radio" name="pm_content_access" id="pm_content_access" value="5" />
              <?php _e('Content accessible to my fellow Group Members', 'profilegrid-user-profiles-groups-and-communities'); ?>
            </div>
            <div class="pm-radio-option">
              <input type="radio" name="pm_content_access" id="pm_content_access" value="4" />
              <?php _e('Content accessible only to me', 'profilegrid-user-profiles-groups-and-communities'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      endif;
      */
    ?>

    <div class="all_errors" style="display:none;"></div>
    <div class="buttonarea pm-full-width-container">
      <input type="submit" value="<?php _e('Submit', 'profilegrid-user-profiles-groups-and-communities'); ?>" name="pg_blog_submit">
      <?php wp_nonce_field('pg_blog_post'); ?>
    </div>
  </form>
</div>