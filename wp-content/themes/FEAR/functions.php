<?php
// We want Featured Images on Pages and Posts
add_theme_support( 'post-thumbnails' );

// I'll style the gallery myself, thank you....
add_filter( 'use_default_gallery_style', '__return_false' );

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'....';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

add_action( 'wp_enqueue_scripts', 'enqueue_and_register_my_scripts' );
function enqueue_and_register_my_scripts(){
  wp_deregister_script(
    'responsive-lightbox-swipebox', plugins_url( 'assets/swipebox/js/jquery.swipebox.min.js', __FILE__ ), array( 'jquery' )
  );
  wp_register_script(
    'responsive-lightbox-swipebox', get_stylesheet_directory_uri() . '/inc/jquery.swipebox.min.js', array( 'jquery' )
  );
}

// Define menus
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Add widgets
function arphabet_widgets_init() {
  register_sidebar(array(
    'name'          => 'Home Page Video',
    'id'            => 'home_page_video',
  ));
  register_sidebar(array(
    'name'          => 'Home Page Calendar',
    'id'            => 'home_page_calendar',
  ));
  register_sidebar(array(
    'name'          => 'MailChimp Sign Up',
    'id'            => 'mailchimp_signup',
  ));
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// Advanced Text widget class
class Mytheme_Widget_Text extends WP_Widget {
  function __construct() {
    parent::__construct(
      'mytheme_widget_text',
      __('Arbitrary Text/HTML and shortcodes'),
      array( 'description' => __( 'Output an arbitrary text/HTML and/or shortcodes.', 'mytheme' ), ) 
    );
  }
 
  function widget( $args, $instance ) {
    extract($args);
    $title = apply_filters( 'mytheme_widget_text', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
    $text = apply_filters( 'mytheme_widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
    $class = apply_filters( 'mytheme_widget_text', empty( $instance['class'] ) ? '' : $instance['class'], $instance );
    echo !empty( $instance['filter'] ) ? wpautop( $text ) : $text;
  }
 
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['class'] = strip_tags($new_instance['class']);
 
    if ( current_user_can('unfiltered_html') )
      $instance['text'] =  $new_instance['text'];
    else
      $instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) ); // wp_filter_post_kses() expects slashed
    $instance['filter'] = isset($new_instance['filter']);
 
    return $instance;
  }
 
  function form( $instance ) {
    $instance = wp_parse_args( (array) $instance, array(
        'title' => '',
        'text' => '',
        'class' => ''
      )
    );
    $title = strip_tags($instance['title']);
    $text = esc_textarea($instance['text']);
    $class = esc_textarea($instance['class']);
  ?>
    <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
 
    <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>
 
    <p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label></p>
  <?php
  }
}

// Register and load the widget
function mytheme_load_widget() {
  register_widget( 'mytheme_widget_text' );
 
  // Allow to execute shortcodes on mytheme_widget_text
  add_filter('mytheme_widget_text', 'do_shortcode');
}
add_action( 'widgets_init', 'mytheme_load_widget' );
?>