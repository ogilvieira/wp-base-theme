<?php
/**
 * Enqueue scripts and styles.
 *
 * @package mplsagc
 */

add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );


function mplsagc_scripts() {
  /**
   * Get assets list.
   */
  require get_template_directory() . '/inc/sitescripts.php';

  //get styles
  if($sitescripts['stylesheet']):
    foreach ($sitescripts['stylesheet'] as $key => $stylesheet):
      wp_enqueue_style( $key, get_template_directory_uri() . '/assets/styles/build/'.$stylesheet, array(), '20151215');
    endforeach;
  endif;

  //get scripts
  if($sitescripts['javascript']):
    foreach ($sitescripts['javascript'] as $key => $javascript):
      wp_enqueue_script( $key, get_template_directory_uri() . '/assets/js/build/'.$javascript, array(), '20151215', true);
    endforeach;
  endif;

  //get comment script
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}

add_action('wp_enqueue_scripts','mplsagc_scripts');
