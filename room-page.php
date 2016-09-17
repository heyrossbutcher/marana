<?php

/*
	Template Name: Room Page
*/

get_header();  ?>

<div class="main">
  <div class="container rooms roomsHook clearfix">

    <?php // Start the loop ?>

    <?php
		$title = get_the_title();
	    $page = get_page_by_title( $title );
		$mypost = get_the_id($page);
 	?>
	  
	<?php $latestPosts = new wp_query(array(
	    'post_type' => 'rooms',
	    'posts_per_page' => -1
	 )) ?> 

    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

		<?php 
			$getTitle = get_the_title();
	        $rooms = get_field('rooms');  
	        $test = get_field('test');  
	        //
	        if ( $title == $getTitle ) {

				// pre_r($getTitle); 
				// pre_r($rooms); 
				$fs_counter = -1;
		        foreach ($rooms as $room) {
					// pre_r($room); 
					$fs_counter++;
			        $url = $room['room_image']['url'];
			        $room_thumbnail = $room['room_image']['sizes']['large'];
                	// echo '<a href="'.$url.'" target="_">';
                	echo '<div class="rooms_imgs" data-slide="'.$fs_counter.'" style="background-image: url('.$room_thumbnail.')" data-link="'.$url.'">'; 
                	echo '<div class="rooms_imgs_overlay">'; 
                	echo '</div>'; 
                	echo '</div>'; 
                	// echo '</a>';
		        }
	        }

		?>
        <?php
        	// foreach ($rooms as $room) {
			 	
	        // }
        ?>
      <?php wp_reset_postdata(); ?>

    <?php endwhile; // end of the loop. ?>

    

  </div> <!-- /.container -->

	<div class="mobileContainer mobileRoom clearfix flexslider-room-mobile">
		<!--  -->
		<div class="roomCloseOverlayButton">
		  <div class="close">
			  <a href="<?php bloginfo( 'url' ); ?>/portfolio/">
			    <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/heyross/img/x.svg"/>
			  </div>
			  </a>
		</div>
		<!--  -->
		<div class="handInstruction">
			<div class="leftArrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
			<div class="hand"><i class="fa fa-hand-paper-o" aria-hidden="true"></i></div>
			<div class="rightArrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
		</div>
		<!--  -->
	   <?php
	  		$title = get_the_title();
	  	    $page = get_page_by_title( $title );
	  		$mypost = get_the_id($page);
	   	?>
	  	  
	  	<?php $latestPosts = new wp_query(array(
	  	    'post_type' => 'rooms',
	  	    'posts_per_page' => -1
	  	 )) ?> 

	      <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

	  		<?php 
	  			$getTitle = get_the_title();
	  	        $rooms = get_field('rooms');  
	  	        //
	  	        if ( $title == $getTitle ) {

	  	        	echo '<ul class="slides">';

	  		        foreach ($rooms as $room) {
	  			        $url = $room['room_image']['url'];
	  			        $room_thumbnail = $room['room_image']['sizes']['large'];
	  			        //
	  			        echo '<li class="roomSlides" style="background-image: url('.$room_thumbnail.')"></li>';

	  		        }

	  		        echo '</ul>';

	  	        }

	  		?>

	        <?php wp_reset_postdata(); ?>

	      <?php endwhile; // end of the loop. ?>
	  <!--  -->
	</div>


</div> <!-- /.main -->


<?php get_footer(); ?>