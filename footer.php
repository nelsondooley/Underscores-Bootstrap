<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores_Bootstrap
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscores-bootstrap' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'underscores-bootstrap' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscores-bootstrap' ), 'underscores-bootstrap', '<a href="http://jakenelsondooley.com/" rel="designer">Jake Nelson-Dooley</a>' ); ?>
				</div><!-- .site-info -->
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
