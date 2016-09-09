<?php get_header(); ?>

<div class="main">
  <div class="container homeGallery clearfix">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php $page_id = get_the_id();
              $key_image = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'single-post-thumbnail' );
              echo '<div class="full_width_image">';
              echo '<div class="innerKey" style="background-image: url('.$key_image[0].')"></div>';
              echo '</div>';
              $page_title = get_the_title();
              echo '<div class="showcaseTitle">'.$page_title.'</div>';
           ?>
        

      <?php $home = get_field('create_a_row'); ?>
      <?php 

        foreach ($home as $home_info) {
          $row_kind = $home_info['select_a_type_of_row'];
          //
          // 
          if ( $row_kind == 'full_width_image' ) {
            // 
            $image = $home_info[$row_kind][0]['image']['sizes']['large'];
            // pre_r($image);
            echo '<div class="full_width_image">';
            echo '<div class="innerKey" style="background-image: url('.$image.')"></div>';
            echo '</div>';

          } else if ( $row_kind == 'image_with_margin' ) {
            // 
            $image = $home_info[$row_kind][0]['image']['sizes']['large'];
            echo '<div class="image_with_margin scrolling_bg" style="background-image: url('.$image.')">';
            echo '</div>';

          } else if ( $row_kind == 'two_column_copy' ) {
            $copy = $home_info[$row_kind];
            echo '<div class="two_column_copy">';
            echo '<p>'.$copy.'</p>';
            echo '</div>';

          } else if ( $row_kind == 'copy_and_image' ) {
            // pre_r($home_info);
            // $title = $home_info[$row_kind][0]['title'];
            $copy = $home_info[$row_kind][0]['copy'];
            $image = $home_info[$row_kind][0]['image_choice'][0]['image']['sizes']['large'];
            // pre_r($title);
            echo '<div class="image_and_copy clearfix">';
            echo '<div class="image" style="background-image:url('.$image.')"></div>';
            echo '<div class="copy">'.$copy.'</div>';
            echo '</div>';
          } else if ( $row_kind == 'image_and_copy' ) {
            // $title = $home_info[$row_kind][0]['title'];
            $copy = $home_info[$row_kind][0]['copy'];
            $image = $home_info[$row_kind][0]['image_choice'][0]['image']['sizes']['large'];
            // pre_r($title);
            echo '<div class="image_and_copy clearfix">';
            echo '<div class="image" style="background-image:url('.$image.')"></div>';
            echo '<div class="copy">'.$copy.'</div>';
            echo '</div>';

          }
        } 
      ?>

      <?php endwhile; // end of the loop. ?>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<!-- <?php get_footer(); ?> -->