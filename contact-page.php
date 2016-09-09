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

  	<?php query_posts('pagename=contact'); ?>
  	  <?php while (have_posts()) : the_post(); ?>
  	    <?php the_content(); ?>
  	  <?php endwhile; ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>