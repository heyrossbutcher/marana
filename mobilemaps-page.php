<?php

/*
	Template Name: Mobile Maps Page
*/

get_header();  ?>

<div class="main">
	<?php 
		$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'large') );
	  	echo '<div class="container mobile-map clearfix" style="background-image: url('.$feat_image.')">'
	?>

  
  	  <?php while (have_posts()) : the_post(); ?>
  	    <?php the_content(); ?>
  	  <?php endwhile; ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>