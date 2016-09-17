<?php

/*
	Template Name: Portfolio Page
*/

get_header();  ?>

<div class="main">
  <div class="container portfolio clearfix">

    <!--  -->
    <!--  -->
		<!-- Get the rooms -->
		<!--  -->
		<!--  -->
  	<?php $latestPosts = new wp_query(array(
  	    'post_type' => 'rooms',//we only want home pieces
  	    'posts_per_page' => -1,	
  	    'orderby'=> 'title', 
  	    'order' => 'ASC'
  	  )) ?> 
    <?php // Start the loop ?>
    <!--  -->
    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

      <?php $id = get_the_ID(); ?>
      <?php $thePost = get_post($id); ?>
            
      <?php $home_showcase = get_field('showcase');  ?>
      <?php $home_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" ); ?>
      <?php $home_thumbnail = $home_thumbnail[0]; ?>

      <?php $home_title = get_the_title();  ?>
      <?php $getSlug = $post->post_name; ?>
      <?php $getPath = get_bloginfo( 'url' ).'/'; ?>
      <?php //pre_r($getSlug); ?>
      <?php 
          // echo '<a href="'.$getPath.$getSlug.'">';
          echo '<div class="port_home" style="background-image: url('.$home_thumbnail.')" data-link="'.$getPath.$getSlug.'">';
          echo '<div class="port_home_name">';
          echo '<h3>'.$home_title.'</h3>'; 
          echo '</div>'; 
          echo '<div class="port_overlay">';
          echo '</div>'; 
          echo '</div>'; 
          // echo '</a>';
      ?>
      <?php wp_reset_postdata(); ?>
  
        
    <?php endwhile; // end of the loop. ?>



  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>