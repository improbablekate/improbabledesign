<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package id-custom
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
        	<?php dynamic_sidebar( 'footer-widgets' ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'id_custom' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'id_custom' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'id_custom' ), 'id-custom', '<a href="http://katie@improbabledesign.com" rel="designer">Katie Olson</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
