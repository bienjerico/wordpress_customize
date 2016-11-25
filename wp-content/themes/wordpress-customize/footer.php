<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress-customize
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer text-center" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wordpress-customize' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wordpress-customize' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wordpress-customize' ), 'wordpress-customize', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page --><!-- container-fluid -->

<?php wp_footer(); ?>

</body>
</html>
