<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
    <?php if (is_home() && !is_front_page()) { wp_title(''); echo " - "; } ?>
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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo filemtime(get_template_directory() . "/style.css"); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

      // Mobile menu dropdowns
      jQuery("#menu-main-menu li:has(ul)").doubleTapToGo();
    });
  </script>

  <!-- BEGIN Google Analytics - THIS WILL STOP WORKING JULY 1, 2023 -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-72109900-1', 'auto');
    ga('send', 'pageview');
  </script>
  <!-- END Google Analytics -->

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-MFB9JX3NFB"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-MFB9JX3NFB');
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