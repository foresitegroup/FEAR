<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
    <?php if(is_home() || is_front_page()) {
      echo get_bloginfo('name');
    } else {
      wp_title('');
      echo ' - '.get_bloginfo('name'); 
    }?>
  </title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
    });
  </script>
</head>

<body>

<div class="topbar">
	<div class="site-width cf">
		<a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Nicolet FEAR Team 4786" id="logo"></a>

    <div id="main-menu-wrap">
      <label for="show-menu" id="menu-toggle"><i class="fa fa-bars"></i></label>
      <input type="checkbox" id="show-menu" role="button">
  		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </div>
	</div>
</div>

<div class="topbar-space"></div>