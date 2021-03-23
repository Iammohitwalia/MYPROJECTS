<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-logo"><?php the_custom_logo(); ?></div>
<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
		<div class="menu-button-container">
			<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
				<span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'twentytwentyone' ); ?>
					<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'menu' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
				<span class="dropdown-icon close"><?php esc_html_e( 'Close', 'twentytwentyone' ); ?>
					<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
			</button><!-- #primary-mobile-menu -->
		</div><!-- .menu-button-container -->
		<?php
		wp_nav_menu(
			array(
				'menu'  => 'header'
			)
		);
		?>
		</nav><!-- #site-navigation -->
<?php endif; ?>
 <div class="image-logo">
 <img class="header1-images"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-catolica-2020.png" alt="dsfdf">
 <img class="header1-images"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-mit-2020.png" alt="dsfdf">
 <img class="header1-images"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-nova-2020.png" alt="dsfdf">
</div>

<?php
		wp_nav_menu(
			array(
				'menu'  => 'header2'
				
			)
		);
		?>
			<?php get_template_part( 'homepage' ); ?>
<div class="testmonialinner">
			<?php

$post = array(
  'post_type' => 'testimonials',
  'post_per_page'=> -1
  
  
);
$the_query = new WP_Query( $post );

// The Loop
if ( $the_query->have_posts() ) {

  while ( $the_query->have_posts() ) {
	  $the_query->the_post();
	  ?>
	  <div class="ghjgjgj">
		    <h2><?php the_title(); ?> </h2>
			<?php the_post_thumbnail('thumbnail'); ?>
			<?php the_content(); ?>
        </div>  
	 <?php 
  }

} else {
  // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div>