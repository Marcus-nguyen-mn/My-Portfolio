<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
     <meta charset="<?php bloginfo('charset'); ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta property="og:image" content="<?php echo esc_url($featured_img_url); ?>" />
     <meta name="author" content="Wolfactive - HuyNguyen - PhuongNam">
     <link rel="shortcut icon" type="image/png" href="<?php echo esc_url($featured_img_url); ?>"/>
  	 <link rel="profile" href="https://wolfactive.net/">
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
This is header
<?php
  //   wp_nav_menu(array(
  // 'theme_location' => 'headerMenuLocation' ));
  ?>
