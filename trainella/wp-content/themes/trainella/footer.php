<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trainella
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'trainella' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'trainella' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'trainella' ), 'trainella', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<footer class="container">
		<div class="footer-copyright">
			© 2020 Trainella
		</div>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'footer-menu',
					'menu_class'		 => 'footer-links',
				)
			);
			?>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
