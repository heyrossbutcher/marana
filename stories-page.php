<?php

/*
	Template Name: Stories Page
*/

get_header();  ?>

<div class="main">
  <div class="container stories clearfix">

		<!--  -->
		<!--  -->
		<!-- Get the showcase homes -->
		<!--  -->
		<!--  -->
		<?php $latestPosts = new wp_query(array(
		    'post_type' => 'homes',//we only want home pieces
		    'posts_per_page' => -1
		  )) ?> 
	    <?php // Start the loop ?>
	    <!--  -->
      <?php $count_posts = wp_count_posts('homes')->publish; ?>
      <?php $even_count = false; ?>
                
      <?php if ( $count_posts % 2 == 0 ) {
        $even_count = true;
      } else {
        $even_count = false;
      }
      ?>

      <?php $counter = 0; ?>

      <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
        
        <?php $counter++; ?>

        <?php $id = get_the_ID(); ?>
        <?php $url = get_post_permalink($id); ?>

        <?php $home_showcase = get_field('showcase');  ?>
        <?php $home_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" ); ?>
        <?php $home_thumbnail = $home_thumbnail[0]; ?>
       
          <?php $home_title = get_the_title();  ?>
          <?php 
              echo '<a href="'.$url.'">';
              if ( $even_count == '' && $counter === 1 ) {
                echo '<div class="port_home top_row_home" style="background-image: url('.$home_thumbnail.')">';
              } else if( $even_count == '' && $counter !== 1 ) {
                echo '<div class="port_home lower_row_home" style="background-image: url('.$home_thumbnail.')">';
              } else {
                echo '<div class="port_home" style="background-image: url('.$home_thumbnail.')">';
              } 
              echo '<div class="port_home_name">';
              echo '<h3>'.$home_title.'</h3>'; 
              echo '</div>'; 
              echo '<div class="port_overlay">';
              echo '</div>'; 
              echo '</div>'; 
              echo '</a>';
          ?>
          <?php wp_reset_postdata(); ?>
          
    <?php endwhile; // end of the loop. ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>