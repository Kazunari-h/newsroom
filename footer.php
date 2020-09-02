<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newsroom
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">

			<div class="footer-menu">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>

			<a href="https://jura.works">
				&copy; 2020 K.Hirosawa
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
