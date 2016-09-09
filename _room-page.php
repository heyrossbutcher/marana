<?php

/*
	Template Name: Room Page
*/

get_header();  ?>

<div class="main">
  <div class="container rooms clearfix">

    <?php // Start the loop ?>


	<?php $latestPosts = new wp_query(array(
	    'post_type' => 'homes',//we only want home pieces
	    'posts_per_page' => -1
	  )) ?> 
    <?php // Start the loop ?>

    <?php
	 	$title = get_the_title();
	 	$title = strtolower( $title ); 
		//pre_r($title);
 	?>
    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>


        <?php $home_showcase = get_field('showcase');  ?>
        <?php $homes_info = get_field('create_a_row');  ?>
        <?php
        	foreach ($homes_info as $home_data) {
			 	$what_row = $home_data['select_a_type_of_row'];
	    		$which_room = $home_data[$what_row];
	    		// 
	    		if( $what_row  != 'two_column_copy'){

		    		if( $what_row ==  'full_width_image' || $what_row == 'image_with_margin' ){
			    		$the_room = $which_room[0]['room'];
				    		// pre_r($title);
			    		if ($the_room == $title ) {
					        $url = ($which_room[0]['image']['url']);
					        $room_thumbnail = ($which_room[0]['image']['sizes']['large']);
		                	// echo '<a href="'.$url.'" target="_">';
		                	echo '<div class="rooms_imgs" style="background-image: url('.$room_thumbnail.')" data-link="'.$url.'">'; 
		                	echo '<div class="rooms_imgs_overlay">'; 
		                	echo '</div>'; 
		                	echo '</div>'; 
		                	// echo '</a>';
						}
		    		} else if ( $what_row ==  'copy_and_image' || $what_row == 'image_and_copy' ){
			    		$the_room = $which_room[0]['image_choice'][0]['room'];
			    		if ($the_room == $title ) {
					        $url = ($which_room[0]['image_choice'][0]['image']['url']);
					        $room_thumbnail = ($which_room[0]['image_choice'][0]['image']['sizes']['large']);
		                	// echo '<a href="'.$url.'" target="_">';
		                	echo '<div class="rooms_imgs" style="background-image: url('.$room_thumbnail.')" data-link="'.$url.'">'; 
		                	echo '<div class="rooms_imgs_overlay">'; 
		                	echo '</div>'; 
		                	echo '</div>'; 
		                	// echo '</a>';
						}
		    		}

		    	} 

	        }
        ?>
      <?php wp_reset_postdata(); ?>

    <?php endwhile; // end of the loop. ?>

    

  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>