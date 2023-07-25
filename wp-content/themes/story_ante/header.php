<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Story_Ante
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
    
 
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/header.css' ?>">
    

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'story_ante' ); ?></a>

	<header id="masthead" class="site-header">
        
        
		<nav id="site-navigation" class="main-navigation">
            <ul> 
                <li> 
                   <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
    <li>
      <a href="#">Services</a>
    </li>
    <li>
      <a href="#">Contact</a>
    </li>
  </ul>
    
		
  
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
