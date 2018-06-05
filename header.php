<?php

global $wp_newsportal;
 


?>

<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php bloginfo('name')?></title>






<?php wp_head(); ?>
</head>
<body>
<div class="body_wrapper">
	<div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="<?php get_home_url()?>"><img src="
      	<?php if(!empty($wp_newsportal['site-logo']['url'])){

      	echo $wp_newsportal['site-logo']['url']; 
      } else{
      $custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id  );
echo $image[0];

  }?>" alt="SiteLogo" /></a></div>
      

      <?php require_once ('template-parts/top-menu.php');?>


      <div class="social_plus_search floatright">
         <?php require_once ('template-parts/top-social.php');?>

<?php require_once ('template-parts/top-search.php');?>
        
      </div>
    </div>

    
    <?php require_once ('template-parts/main-menu.php');?>