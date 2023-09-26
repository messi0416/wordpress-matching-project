<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-fields">
        <h2><?php _e( '詳細検索', 'textdomain' ); ?></h2>
        <div class="search-field">
            <label for="prefecture"><?php _e( 'Prefecture', 'textdomain' ); ?></label>
            <select name="prefecture" id="prefecture">
                <option value=""><?php _e( 'All', 'textdomain' ); ?></option>
                <?php
                // Query to get list of prefectures
                $prefectures = array( 'Tokyo', 'Osaka', 'Kyoto', 'Hokkaido', 'etc' ); // replace with your own list of prefectures
                foreach ( $prefectures as $prefecture ) {
                    echo '<option value="' . esc_attr( $prefecture ) . '">' . esc_html( $prefecture ) . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="search-field">
            <label for="trainer-sexuality"><?php _e( 'Trainer Sexuality', 'textdomain' ); ?></label>
            <input type="text" name="trainer-sexuality" id="trainer-sexuality"
                value="<?php echo isset( $_GET['trainer-sexuality'] ) ? esc_attr( $_GET['trainer-sexuality'] ) : ''; ?>">
        </div>
        <div class="search-field">
            <label><?php _e( 'Gender', 'textdomain' ); ?></label>
            <input type="radio" name="gender" value="male" id="male"
                <?php checked( isset( $_GET['gender'] ) && $_GET['gender'] === 'male' ); ?>>
            <label for="male"><?php _e( 'Male', 'textdomain' ); ?></label>
            <input type="radio" name="gender" value="female" id="female"
                <?php checked( isset( $_GET['gender'] ) && $_GET['gender'] === 'female' ); ?>>
            <label for="female"><?php _e( 'Female', 'textdomain' ); ?></label>
        </div>
        <div class="search-field">
            <label><?php _e( 'Training 料金', 'textdomain' ); ?></label>
            <input type="checkbox" name="training-fee" value="first-free" id="first-free"
                <?php checked( isset( $_GET['training-fee'] ) && in_array( 'first-free', $_GET['training-fee'], true ) ); ?>>
            <label for="first-free"><?php _e( '初回無料', 'textdomain' ); ?></label>
            <input type="checkbox" name="training-fee" value="3000" id="3000"
                <?php checked( isset( $_GET['training-fee'] ) && in_array( '3000', $_GET['training-fee'], true ) ); ?>>
            <label for="3000"><?php _e( '3,000 円以下', 'textdomain' ); ?></label>
            <input type="checkbox" name="training-fee" value="5000" id="5000"
                <?php checked( isset( $_GET['training-fee'] ) && in_array( '5000', $_GET['training-fee'], true ) ); ?>>
            <label for="5000"><?php _e( '5,000 円以下', 'textdomain' ); ?></label>
            <input type="checkbox" name="training-fee" value="7000" id="7000"
                <?php checked( isset( $_GET['training-fee'] ) && in_array( '7000', $_GET['training-fee'], true ) ); ?>>
            <label for="7000"><?php _e( '7,000 円以下', 'textdomain' ); ?></label>
        </div>
        <div class="search-field">
            <label><?php _e( 'Training内容', 'textdomain' ); ?></label>
            <input type="checkbox" name="training-content[]" value="diet" id="diet"
                <?php checked( isset( $_GET['training-content'] ) && in_array( 'diet', $_GET['training-content'], true ) ); ?>>
            <label for="diet"><?php _e( 'Diet', 'textdomain' ); ?></label>
            <input type="checkbox" name="training-content[]" value="care" id="care"
                <?php checked( isset( $_GET['training-content'] ) && in_array( 'care', $_GET['training-content'], true ) ); ?>>
            <label for="care"><?php _e( 'Care', 'textdomain' ); ?></label>
            <input type="checkbox" name="training-content[]" value="bodymake" id="bodymake"
                <?php checked( isset( $_GET['training-content'] ) && in_array( 'bodymake', $_GET['training-content'], true ) ); ?>>
            <label for="bodymake"><?php _e( 'Bodymake', 'textdomain' ); ?></label>
            <input type="checkbox" name="training-content[]" value="stretch" id="stretch"
                <?php checked( isset( $_GET['training-content'] ) && in_array( 'stretch', $_GET['training-content'], true ) ); ?>>
            <label for="stretch"><?php _e( 'Stretch', 'textdomain' ); ?></label>
            <input type="checkbox" name="training-content[]" value="yuga-piratis" id="yuga-piratis"
                <?php checked( isset( $_GET['training-content'] ) && in_array( 'yuga-piratis', $_GET['training-content'], true ) ); ?>>
            <label for="yuga-piratis"><?php _e( 'Yuga・Piratis', 'textdomain' ); ?></label>
            <input type="checkbox" name="training-content[]" value="lihabili" id="lihabili"
                <?php checked( isset( $_GET['training-content'] ) && in_array( 'lihabili', $_GET['training-content'], true ) ); ?>>
            <label for="lihabili"><?php _e( 'Lihabili', 'textdomain' ); ?></label>
            <input type="checkbox" name="training-content[]" value="diet" id="diet-2"
                <?php checked( isset( $_GET['training-content'] ) && in_array( 'diet-2', $_GET['training-content'], true ) ); ?>>
            <label for="diet-2"><?php _e( 'Diet', 'textdomain' ); ?></label>
            <input type="checkbox" name="training-content[]" value="food-recipe-management" id="food-recipe-management"
                <?php checked( isset( $_GET['training-content'] ) && in_array( 'food-recipe-management', $_GET['training-content'], true ) ); ?>>
            <label for="food-recipe-management"><?php _e( 'Food・Recipe Management', 'textdomain' ); ?></label>
        </div>
        <div class="search-field">
            <button type="submit"><?php _e( '検索する', 'textdomain' ); ?></button>
        </div>
    </div>
    <div class="search-buttons">
        <button type="button" class="calendar-display"><?php _e( 'Calendar Display', 'textdomain' ); ?></button>
    </div>
</form>



<?php //サイドバー上の広告表示
  if (is_ad_pos_sidebar_top_visible() && is_all_adsenses_visible()){
    get_template_part_with_ad_format(get_ad_pos_sidebar_top_format(), 'ad-sidebar-top', is_ad_pos_sidebar_top_label_visible());
  }; ?>

	<?php dynamic_sidebar( 'sidebar' ); ?>

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
  <?php endif; ?>