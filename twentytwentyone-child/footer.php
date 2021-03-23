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

    <?php
    if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

<aside class="widget-area">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>

</aside><!-- .widget-area -->

<?php endif; ?>
<?php
if (   is_active_sidebar( 'first-footer-widget-area'  )
&& is_active_sidebar( 'second-footer-widget-area' )
&& is_active_sidebar( 'third-footer-widget-area'  )
&& is_active_sidebar( 'fourth-footer-widget-area' )
) : ?>

<aside class="fatfooter" role="complementary">
<div class="first quarter left widget-area">
    <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
</div><!-- .first .widget-area -->

<div class="second quarter widget-area">
    <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
</div><!-- .second .widget-area -->

<div class="third quarter widget-area">
    <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
</div><!-- .third .widget-area -->

<div class="fourth quarter right widget-area">
    <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
</div><!-- .fourth .widget-area -->
</aside><!-- #fatfooter -->
<?php endif; ?>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    jQuery(document).on('ready', function() {
     
      jQuery(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script>
</body>
</html>

