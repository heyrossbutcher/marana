<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>


<div class="main">
  <div class="container home clearfix">
        
        
        <?php $latestPosts = new wp_query(array(
            'post_type' => 'homes',//we only want home pieces
            'posts_per_page' => -1
          )) ?> 
        <?php // Start the loop ?>

        <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

            <?php $home_showcase = get_field('showcase');  ?>
            <?php $home_order = get_field('home_page_order');  ?>
            <?php $homes_info = get_field('create_a_row');  ?>
            <?php $id = get_the_ID(); ?>
            <?php $link = get_permalink($id); ?>
            <?php $page_title = get_the_title($id); ?>
            <!--  -->
            <?php
                if ( $home_order == 'one' )  {
                    // pre_r($link); 
                   // 
                    echo '<div class="col1">';
                    echo '<a href="'.$link.'">';
                    echo '<div class="showcase01 showcase flexslider">';
                    echo '<div class="rolloverTitle"><div class="rolloverIcon"><img src="'.get_bloginfo( 'url' ).'/wp-content/themes/heyross/img/houseIcon.svg" /></div><div class="rolloverP">'.$page_title.'</div></div>';
                    echo '<div class="rollover"></div>';
                    $oneCounter = 0;
                    foreach ($homes_info as $home_info) {
                        $whatImage = $home_info['select_a_type_of_row'];
                       //
                        if( $whatImage != 'two_column_copy' ){
                            $oneCounter++;
                            if ( $whatImage == 'image_with_margin' || $whatImage == 'full_width_image' ) {
                                $theImageOne = $home_info[$whatImage][0]['image']['sizes']['large'];  
                            } else if( $whatImage == 'copy_and_image' || $whatImage == 'image_and_copy' ){
                                $theImageOne = $home_info[$whatImage][0]['image_choice'][0]['image']['sizes']['large'];   
                            }
                            echo '<div class="sh-01-'.$oneCounter.' holder" style="background-image: url('.$theImageOne.')"></div>';
                        }
                    }
                }
            ?>
          <?php wp_reset_postdata(); ?>
        <?php endwhile; // end of the loop. ?>

        <!-- </div> -->
        <div class="preloader"></div>
        </div>
        </a>
        </div><!-- end of column 1 -->
        <div class="col2">
            <!--  -->
            <?php $latestPosts = new wp_query(array(
                'post_type' => 'panels',//we only want home pieces
                'posts_per_page' => -1
              )) ?> 
            <?php // Start the loop ?>
            <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
                <?php $process_items = get_field('panels');  ?>
                <?php $process_id = get_the_id();  ?>
                <?php $process_title = get_the_title($process_id);  ?>
                <?php $process_title_lc =  strtolower($process_title);  ?>
                <?php $process_link =  get_bloginfo( 'url' ).'/'.$process_title_lc;  ?>

                <?php 
                    if( $process_title == 'Process' ){
                        echo '<a href="'.$process_link.'">';
                        echo '<div class="processHolder flexslider">';
                        echo '<div class="rolloverTitle"><div class="rolloverP">'.$process_title.'</div></div>';
                        echo '<div class="rollover"></div>';
                        $processCounter = 0;
                        foreach ($process_items as $process_item) {
                            $processCounter++;
                            $process_image = $process_item['panel_image']['sizes']['large'];
                        //     // pre_r($process_item['panel_image']['sizes']['large']);
                            echo '<div class="process process-'.$processCounter.' holder" style="background-image: url('.$process_image.')">';
                            echo '</div>';
                        }
                        echo '<div class="preloader"></div>';
                        // echo '</div>';
                        echo '</div>';
                        echo '</a>';
                    }

                 ?>
                <?php wp_reset_postdata(); ?>
            <?php endwhile; // end of the loop. ?>
            <!--  -->
            <?php $latestPosts = new wp_query(array(
                'post_type' => 'homes',//we only want home pieces
                'posts_per_page' => -1
              )) ?> 
            <?php // Start the loop ?>
            <!--  -->
            <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

                <?php $home_showcase = get_field('showcase');  ?>
                <?php $home_order = get_field('home_page_order');  ?>
                <?php $homes_info = get_field('create_a_row');  ?>
                <?php $id = get_the_ID(); ?>
                <?php $link = get_permalink($id); ?>
                <?php $page_title = get_the_title($id); ?>
                <!--  -->
                <?php
                    if ( $home_order == 'two' )  {
                       // 
                        echo '<a href="'.$link.'">';
                        echo '<div class="showcase02 showcase flexslider">';
                        echo '<div class="rolloverTitle"><div class="rolloverIcon"><img src="'.get_bloginfo( 'url' ).'/wp-content/themes/heyross/img/houseIcon.svg" /></div><div class="rolloverP">'.$page_title.'</div></div>';
                        echo '<div class="rollover"></div>';
                        $twoCounter = 0;
                        foreach ($homes_info as $home_info) {
                            $whatImage = $home_info['select_a_type_of_row'];
                           //
                            if( $whatImage != 'two_column_copy' ){
                                $twoCounter++;
                                if ( $whatImage == 'image_with_margin' || $whatImage == 'full_width_image' ) {
                                    $theImageTwo = $home_info[$whatImage][0]['image']['sizes']['large'];  
                                } else if( $whatImage == 'copy_and_image' || $whatImage == 'image_and_copy' ){
                                    $theImageTwo = $home_info[$whatImage][0]['image_choice'][0]['image']['sizes']['large'];   
                                }
                                echo '<div class="sh-02-'.$twoCounter.' holder" style="background-image: url('.$theImageTwo.')"></div>';
                            }
                        }
                    }
                ?>
              <?php wp_reset_postdata(); ?>
            <?php endwhile; // end of the loop. ?>
            <!--  -->
            <div class="preloader"></div>
        </div>
        </a>
        </div><!-- end of column 2 -->
        <div class="col3 clearfix"">
            <!--  -->
            <!--  -->
            <?php $latestPosts = new wp_query(array(
                'post_type' => 'panels',//we only want home pieces
                'posts_per_page' => -1
              )) ?> 
            <?php // Start the loop ?>
            <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
                <?php $about_items = get_field('panels');  ?>
                <?php $about_id = get_the_id();  ?>
                <?php $about_title = get_the_title($about_id);  ?>
                <?php $about_title_lc =  strtolower($about_title);  ?>
                <?php $about_link =  get_bloginfo( 'url' ).'/'.$about_title_lc;  ?>

                <?php 
                    if( $about_title == 'About' ){
                        echo '<a href="'.$about_link.'">';
                        echo '<div class="aboutHolder flexslider">';
                        echo '<div class="aboutInnerHolder">';
                        echo '<div class="rolloverTitle"><div class="rolloverP">'.$about_title.'</div></div>';
                        echo '<div class="rollover"></div>';
                        $aboutCounter = 0;
                        foreach ($about_items as $about_item) {
                            $aboutCounter++;
                            $about_image = $process_item['panel_image']['sizes']['large'];
                        //     // pre_r($process_item['panel_image']['sizes']['large']);
                            echo '<div class="about about-'.$aboutCounter.' holder" style="background-image: url('.$about_image.')">';
                            echo '</div>';
                        }
                        echo '<div class="preloader"></div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</a>';
                    }

                 ?>
                <?php wp_reset_postdata(); ?>
            <?php endwhile; // end of the loop. ?>
            <!--  -->
            <!--  -->
            <!--  -->
            <?php $latestPosts = new wp_query(array(
                'post_type' => 'homes',//we only want home pieces
                'posts_per_page' => -1
              )) ?> 
            <?php // Start the loop ?>
            <!--  -->
            <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

                <?php $home_showcase = get_field('showcase');  ?>
                <?php $home_order = get_field('home_page_order');  ?>
                <?php $homes_info = get_field('create_a_row');  ?>
                <?php $id = get_the_ID(); ?>
                <?php $link = get_permalink($id); ?>
                <?php $page_title = get_the_title($id); ?>
                <!--  -->
                <?php
                    if ( $home_order == 'three' )  {
                       // 
                        echo '<a href="'.$link.'">';
                        echo '<div class="showcase03 showcase">';
                        echo '<div class="rolloverTitle"><div class="rolloverIcon"><img src="'.get_bloginfo( 'url' ).'/wp-content/themes/heyross/img/houseIcon.svg" /></div><div class="rolloverP">'.$page_title.'</div></div>';
                        echo '<div class="rollover"></div>';
                        $threeCounter = 0;
                        foreach ($homes_info as $home_info) {
                            $whatImage = $home_info['select_a_type_of_row'];
                           //
                            if( $whatImage != 'two_column_copy' ){
                                    $threeCounter++;

                                if ( $whatImage == 'image_with_margin' || $whatImage == 'full_width_image' ) {
                                    $theImageThree = $home_info[$whatImage][0]['image']['sizes']['large'];  
                                } else if( $whatImage == 'copy_and_image' || $whatImage == 'image_and_copy' ){
                                    $theImageThree = $home_info[$whatImage][0]['image_choice'][0]['image']['sizes']['large'];   
                                }
                                echo '<div class="sh-03-'.$threeCounter.' holder" style="background-image: url('.$theImageThree.')"></div>';
                            }
                        }
                    }
                ?>
              <?php wp_reset_postdata(); ?>
            <?php endwhile; // end of the loop. ?>
                <div class="preloader"></div>
            </div>
            </a>
        </div> <!-- end of column 3 -->



  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>