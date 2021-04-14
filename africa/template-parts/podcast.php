<div class="podcasts">
			<?php

$post = array(
  'post_type' => 'case',
  'post_per_page'=> -1 
);
$the_query = new WP_Query( $post );
// The Loop
if ( $the_query->have_posts() ) {
  while ( $the_query->have_posts() ) {
	  $the_query->the_post();
	  ?>
	  <div class="thumbnail">
	  			<?php the_post_thumbnail(); ?>
	  </div>
	  <div class="podcast">
		    <h3><?php the_title(); ?> </h3>
		    			<?php echo get_the_date(); ?><br>
		    			<?php echo get_the_author();?>
			<p><?php the_content(); ?></p>			
<div class="musicarea">			
<span class="show_btn">
<img src="https://www.roamd.com/wp-content/themes/roamd/img/ROAMDSpeakerElement-20.svg" width="100px" height="100px" />
</span>
<div class="music_section" style="display:none;float:right;">
<audio controls>
  <source src="<?php the_field('upload_song'); ?>" type="audio/mpeg";>
 
</audio> 
</div>
</div>
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