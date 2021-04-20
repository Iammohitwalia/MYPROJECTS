<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick-theme.css">
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
 <section class="lazy">
  <?php
   $post = array(
  'post_type' => 'teams',
  'post_per_page'=> -1 
   );
$the_query = new WP_Query( $post );
// The Loop
  if ( $the_query->have_posts() ) {
  while ( $the_query->have_posts() ) {
	  $the_query->the_post();
?>
<div class="slide1">
	  <?php the_post_thumbnail(); ?>
	<h3><?php the_title(); ?> </h3>
	<p><?php the_field('subtitle'); ?></p>
	
	<ul class="social icons">
	<?php if(get_field('facebook')) { ?>
		<li> <a href="<?php echo get_field('facebook');?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png"> <?php  get_field('facebook');?></a></li>
<?php } ?>
	<?php if(get_field('twitter')) { ?>
		<li><a href="<?php echo get_field('twitter');?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png"> <?php get_field('twitter'); ?></a></li>
		<?php } ?>
			<?php if(get_field('pinterest')) { ?>
		<li><a href="<?php echo get_field('pinterest');?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pinterest.png"> <?php get_field('pinterest');?></a></li>
		<?php } ?>
			<?php if(get_field('linkedin')) { ?>
		<li><a href="<?php echo get_field('linkedin');?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin.png"> <?php get_field('linkedin'); ?></a></li>
		<?php } ?>

     </ul>

</div>
			
  
	 <?php 
  }
} else {
  // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</section>