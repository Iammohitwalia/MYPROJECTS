<?php
$args = array(
			    'post_type'      => 'case-studies',
				'posts_per_page' => -1,
				'publish_status' => 'published',					
				 ); 
	$query = new WP_Query($args);
	if($query->have_posts()) :
    while($query->have_posts()): 
        ?>
	<div class="col-md-6">
	<div class="Trip-item">
   <?php 
   $query->the_post() ;$term_obj_list = get_the_terms( $post->ID, 'instrument' );
 $terms_string = join(', ', wp_list_pluck($term_obj_list, 'slug'));   
	?>
<div class="post-area all <?php echo $terms_string; ?> ">
  
   <div class="featured-image">
   <?php echo the_post_thumbnail() ?>
   </div>
   <div class="post-title">
<a href="<?php the_permalink() ?>">
<?php echo the_title(); echo  the_excerpt();?></a>
   </div>
</div>
    <div class="content-area">
  
   
   </div>         


        
</div>
</div>
<?php
		endwhile;
		wp_reset_postdata();
	endif;    
?>
</div>
</div>