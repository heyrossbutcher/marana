<?php

/*
	Template Name: Contact Page
*/

get_header();  ?>

<div class="main">
	
	<?php 
		$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'large') );
	  	echo '<div class="container contact clearfix" style="background-image: url('.$feat_image.')">'
	?>
	

	<?php $latestPosts = new wp_query(array(
	    'post_type' => 'homes',//we only want home pieces
	    'posts_per_page' => 3
	  )) ?> 

		<?php $counter = 0; ?>
    	<?php echo '<div class="cImageHolder">'; ?>
	  <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
	    
	    <?php $counter++; ?>
	    <?php $id = get_the_ID(); ?>
	    <?php $home_showcase = get_field('showcase');  ?>
	    <?php $home_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" ); ?>
	    <?php $home_thumbnail = $home_thumbnail[0]; ?>
	   	
    	<?php 
        	echo '<div class="cImage-'.$counter.'" data-holder="'.$home_thumbnail.'"></div>'; 
    	?>
    	<?php wp_reset_postdata(); ?>
	      
	<?php endwhile; // end of the loop. ?>
        	<?php echo '</div>';  ?>

  	<?php query_posts('pagename=contact'); ?>
  	  <?php while (have_posts()) : the_post(); ?>
  	    <?php the_content(); ?>
  	  <?php endwhile; ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlVgCq7VmzIePSLj2My10Up2PrUqfCDnU&callback=initMap" async defer></script>