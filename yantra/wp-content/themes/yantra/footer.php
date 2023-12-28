<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer-widgets'); ?>

<footer id="colophon">
	<div class="container">
		<div class="row justify-content-between footer-upper">
			<div class="col-lg-5 col-md-12">
				<div class="footer-logo">
					<?php dynamic_sidebar('footer-logo'); ?>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6">
				<div class="Quick-Links">
					<?php dynamic_sidebar('Quick-Links'); ?>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="Connect-with-Us">
					<?php dynamic_sidebar('Connect-with-Us'); ?>
				</div>
			</div>
		</div>

		<div class="copy-right">
			<div class="row justify-content-between">
				<div class="col-lg-7 ">
					<div class="powered-by">
						<?php dynamic_sidebar('powered-by'); ?>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="privacy-policy">
						<?php dynamic_sidebar('privacy-policy'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->

</div><!-- #page -->

<script>
	jQuery(document).on('ready', function() {
		jQuery('html').addClass("overflow-hidden");
		setTimeout(function() {
			jQuery("#page-loader").fadeOut("slow");
			jQuery('html').removeClass("overflow-hidden");
		}, 1500);
	});
</script>
<?php wp_footer(); ?>
</body>

</html>