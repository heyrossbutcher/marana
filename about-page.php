<?php

/*
	Template Name: About Page
*/

get_header();  ?>

<div class="main">
  <div class="container about clearfix">

    <?php // Start the loop ?>

     	<?php $latestPosts = new wp_query(array(
      	    'post_type' => 'about_info',//we only want about pieces
      	    'posts_per_page' => -1

      	  )) ?> 
          <?php // Start the loop ?>
          <!--  -->
          <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
               
               <?php $info_array = get_field('create_a_row');  ?>
               <?php 

                  foreach ($info_array as $info) {

                    $row_kind = $info['select_a_type_of_row'];

                    if ( $row_kind == 'full_width_image' ) {
                      // 
                      $image = $info['full_width_image']['url'];
                      echo '<div class="full_width_image">';
                      echo '<div class="innerKey" style="background-image: url('.$image.')"></div>';
                      echo '</div>';

                    } else if ( $row_kind == 'two_column_copy' ) {
                         $title = $info['two_column_copy'][0]['title'];
                         $copy = $info['two_column_copy'][0]['copy'];
                         echo '<div class="aboutTitle">'.$title.'</div>';
                         echo '<div class="two_column_copy">';
                         echo '<p>'.$copy.'</p>';
                         echo '</div>';

                    } else if ( $row_kind == 'Image_with_copy_overtop' ) {
                         $title = $info['image_with_copy_overtop'][0]['title'];
                         $copy = $info['image_with_copy_overtop'][0]['copy'];
                         $image = $info['image_with_copy_overtop'][0]['image']['url'];
                         //
                         echo '<div class="image_with_copy_overtop">';
                         echo '<div class="copyBlock">';
                         echo '<div class="aboutTitle2">'.$title.'</div>';
                         echo '<p>'.$copy.'</p>';
                         echo '</div>';
                         echo '<div class="darken"></div>';
                         echo '<div class="innerKey" style="background-image: url('.$image.')"></div>';
                         echo '</div>';                    
                    } else if ( $row_kind == 'copy_and_image' ) {
                         $title = $info['copy_and_image'][0]['title'];
                         $copy = $info['copy_and_image'][0]['copy'];
                         $image = $info['copy_and_image'][0]['image']['url'];
                           echo '<div class="copy_and_image clearfix">';
                           echo '<div class="copy">';
                           echo '<div class="aboutTitle3">'.$title.'</div>';
                           echo '<p>'.$copy.'</p>';
                           echo '</div>';
                           echo '<div class="image" style="background-image:url('.$image.')"></div>';
                           echo '</div>';
                    } else if ( $row_kind == 'image_and_copy' ) {
                         // pre_r($info);
                         $copy = $info['image_and_copy'][0]['title'];
                         $copy = $info['image_and_copy'][0]['copy'];
                         $image = $info['image_and_copy'][0]['image']['url'];
                         echo '<div class="image_and_copy clearfix">';
                         echo '<div class="image" style="background-image:url('.$image.')"></div>';
                         echo '<div class="copy">';
                         echo '<div class="aboutTitle3">'.$title.'</div>';
                         echo '<p>'.$copy.'</p>';
                         echo '</div>';
                         echo '</div>';
                    } 

                  }

               ?>
        		
              
              
          <?php endwhile; // end of the loop. ?>
     <div class="consultationFooter">
          <div class="consultation">
            <p>Book Consultation</p>
          </div>
     </div>
  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>