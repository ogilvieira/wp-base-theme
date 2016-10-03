<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mplsagc
 */

?>
<hr>
<div class="container">
	<div class="col-lg-12">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mplsagc' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'mplsagc' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'mplsagc' ), 'mplsagc', '<a href="http://maples.com.br/" rel="designer">Maples</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

		<?php wp_footer(); ?>
	</div>
</div>

</body>
</html>
