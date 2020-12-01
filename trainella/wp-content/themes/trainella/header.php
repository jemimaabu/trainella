<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trainella
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'trainella'); ?></a>

		<nav id="site-navigation" class="main-navigation">
			<div class="container menu-container">
				<div class="nav-logo">
					<a href="<?php echo home_url(); ?>">
						<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							
							if ( has_custom_logo() ) {
											echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
							} else {
											echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
							} ?>
					</a>
				</div>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span class="burger-item"></span>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'		 => 'menu',
						'container_class' => 'menu-links'
					)
				);
				?>
			</div>
		</nav><!-- #site-navigation -->