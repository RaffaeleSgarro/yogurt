<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" />
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php if (!is_admin()) { wp_enqueue_script('html5_shim'); } ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="upside_down">
			<img src="<?php bloginfo('template_directory') ?>/upside_down.png" />
		</div>
  		<header id="header">
  			<div><a href="<?php echo home_url(); ?>/">
          <img src="<?php bloginfo('template_directory') ?>/zybnet-console.png" /></a></div>
  			<?php wp_nav_menu( array( 'container_class' => 'menu-header',
            'theme_location' => 'navigation', 'menu_class' => 'ribbon') ); ?>
            
  		</header>
  		
	  <div id="wrapper">

