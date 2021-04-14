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
<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
			<div class="col-md-4 f1">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div><!--  .col-md-4 -->
				<div class="col-md-4 f2">
					<?php dynamic_sidebar('footer-1'); ?>
				</div><!--  .col-md-4 -->
				<div class="col-md-4 f3">
					<?php dynamic_sidebar('footer-2'); ?>
				</div><!--  .col-md-4 -->
				<div class="col-md-4 f4">
					<?php dynamic_sidebar('footer-3'); ?>
				</div><!--  .col-md-4 -->
                <div class="col-md-4 f5">
					<?php dynamic_sidebar('footer-4'); ?>
				</div><!--  .col-md-4 -->
                <div class="col-md-4 f6">
					<?php dynamic_sidebar('footer-5'); ?>
				</div><!--  .col-md-4 -->
			</div><!--  .row -->
			<div class="site-info">
				&copy; <?php bloginfo( 'name' );
						echo ' - ';
						echo date("Y"); ?>
			</div><!-- .site-info -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js" type="text/javascript" charset="utf-8"></script>


</body>
</html>