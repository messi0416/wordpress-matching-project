<?php
	require_once __DIR__ . '/wp-load.php';
function advanced_search_buttons_shortcode( $atts ) {
    $atts = shortcode_atts( array(
      'button1_text' => '初回無料！！から探す',
      'button2_text' => '3,000 円以下から探す',
      'button3_text' => '5,000 円以下から探す',
      'button4_text' => '7,000 円以下から探す'
    ), $atts, 'advanced_search_buttons' );
  
    $html = '<div class="advanced-search-buttons">';
    $html .= '<button class="button1">' . $atts['button1_text'] . '</button>';
    $html .= '<button class="button2">' . $atts['button2_text'] . '</button>';
    $html .= '<button class="button3">' . $atts['button3_text'] . '</button>';
    $html .= '<button class="button4">' . $atts['button4_text'] . '</button>';
    $html .= '</div>';
  
    return $html;
  }
  add_shortcode( 'advanced_search_buttons', 'advanced_search_buttons_shortcode' );


 function advanced_search_query( $query ) {
  if ( is_admin() || ! $query->is_main_query() ) {
    return;
  }

  if ( isset( $_GET['advanced_search'] ) ) {
    if ( $_GET['advanced_search'] == 'button1' ) {
      $query->set( 'meta_key', 'price' );
      $query->set( 'meta_value', '0' );
      $query->set( 'meta_compare', '=' );
    } elseif ( $_GET['advanced_search'] == 'button2' ) {
      $query->set( 'meta_key', 'price' );
      $query->set( 'meta_value', '3000' );
      $query->set( 'meta_compare', '<=' );
    } elseif ( $_GET['advanced_search'] == 'button3' ) {
      $query->set( 'meta_key', 'price' );
      $query->set( 'meta_value', '5000' );
      $query->set( 'meta_compare', '<=' );
    } elseif ( $_GET['advanced_search'] == 'button4' ) {
      $query->set( 'meta_key', 'price' );
      $query->set( 'meta_value', '7000' );
      $query->set( 'meta_compare', '<=' );
    }
  }
}
add_action( 'pre_get_posts', 'advanced_search_query' ); 
?>