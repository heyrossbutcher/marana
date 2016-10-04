<?php

/*
	Template Name: Process Page
*/

get_header();  ?>

<div class="main">
  <div class="container process clearfix">

    <?php // Start the loop ?>

      	<?php $latestPosts = new wp_query(array(
      	    'post_type' => 'info',//we only want home pieces
      	    'posts_per_page' => -1

      	  )) ?> 
          <?php // Start the loop ?>
          <!--  -->
          <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
                  
          		<?php $page = 'process'; ?>
  	            <?php $title = get_the_title();  ?>
  	            <?php $title = strtolower($title); ?>
  	            <?php $i = 0; ?>
  	            <!--  -->
  	            <?php if ( $title == $page ) : ?>
  	            	<?php $info_array = get_field('process_item');  ?>
	  				<?php
	  					foreach ($info_array as $info) {
		  	            	// pre_r($info); 
	  						$info_keyImage = $info['key_image']['sizes']['large'];
	  						$info_sideImage = $info['side_image']['sizes']['large'];
	  						$info_header = $info['copy'][0]['header'];
	  						$info_copy = $info['copy'][0]['body_copy'];
	  						$info_lists = $info['copy'][0]['list'];
	  						// pre_r($info_lists);
	  						//
	  						echo '<div class="process_block clearfix">';
  							echo '<div class="process_key">';
  							echo '<div class="innerKey" style="background-image: url('.$info_keyImage.')"></div>';
  							echo '</div>';
	  						// 
	  						$i++;
	  						if ( $i % 2 == 0 )	{
	  							echo '<div class="process_collect clearfix">';
		  						echo '<div class="process_copy process_copy_left">';
		  						echo '<h3>'.$info_header.'</h3>';
		  						echo '<p>'.$info_copy.'</p>';
		  						foreach ($info_lists as $info_list) {
			  						echo '<p class="processList">'.$info_list['list_item'].'</p>';
			  					}
		  						echo '</div>';
		  						echo '<div class="process_image_right" style="background-image: url('.$info_sideImage.')">';
		  						echo '</div>';
		  						echo '</div>';
	  						} else {
	  							echo '<div class="process_collect clearfix">';
	  							echo '<div class="process_image_left" style="background-image: url('.$info_sideImage.')">';
	  							echo '</div>';
	  							echo '<div class="process_copy process_copy_right">';
		  						echo '<h3>'.$info_header.'</h3>';
		  						echo '<p>'.$info_copy.'</p>';
		  						foreach ($info_lists as $info_list) {
			  						echo '<p class="processList">'.$info_list['list_item'].'</p>';
			  					}
	  							echo '</div>';
	  							echo '</div>';
	  						}
	  						// 
	  						echo '</div>';
	  					}
	  				?>
  	            <?php endif ?>

        		<!--  -->
              <?php //$homes_info = get_field('create_a_row');  ?>
              
              
          <?php endwhile; // end of the loop. ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>