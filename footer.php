<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tiva
 */

?>

	<footer id="colophon" class="site-footer">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/jquery.slicknav.js" integrity="sha512-DPQx/CONfKUHRqCgc6mz0/Jc+dBmBpmbDdSUY/IF2TLmIZ8l12ImNkaaL1ApppB6ZgtiflZWw+rVw2y1XbIoRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tiva' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'tiva' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'tiva' ), 'tiva', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
		<script>
jQuery(document).ready(function($) {
// Code that uses jQuery's $ can follow here.
console.log('hola header')
$('#primary-menu').slicknav({
appendTo:'#site-navigation',
label:''
})
});
</script>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
