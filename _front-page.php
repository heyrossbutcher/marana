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
                    echo '<div class="showcase01 showcase">';
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
                            echo '<div class="sh-01-'.$oneCounter.' showcase-holder" style="background-image: url('.$theImageOne.')"></div>';
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
           <a href="<?php bloginfo( 'url' ); ?>/process/">
           <?php
             $page_id = "30"; //exampl
             $page_title = get_the_title($page_id);
             if (has_post_thumbnail($page_id) ):
               $aboutImage = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'single-post-thumbnail' );
               echo '<div class="processHolder">';
               echo '<div class="process" style="background-image: url('.$aboutImage[0].')">';
               echo '<div class="rolloverTitle"><div class="rolloverP">'.$page_title.'</div></div>';
                echo '<div class="rollover"></div>';
               echo '</div>';
                echo '<div class="preloader"></div>';
               echo '</div>';
              endif;      
           ?>
            </a>
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
                        echo '<div class="showcase02 showcase">';
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
                                echo '<div class="sh-02-'.$twoCounter.' showcase-holder" style="background-image: url('.$theImageTwo.')"></div>';
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
            <a href="<?php bloginfo( 'url' ); ?>/about/">
            <?php   $page_id = "51"; //exampl
                    $page_title = get_the_title($page_id);
                    // pre_r($page_title);
                    if (has_post_thumbnail($page_id) ):
                    $aboutImage = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'single-post-thumbnail' );
                    echo '<div class="aboutHolder">';
                    echo '<div class="about" style="background-image: url('.$aboutImage[0].')">';
                    echo '<div class="rolloverTitle"><div class="rolloverP">'.$page_title.'</div></div>';
                    echo '<div class="rollover"></div>';
                   echo '</div>';
                    echo '<div class="preloader"></div>';
                   echo '</div>';
                    endif;  ?>
            </a>

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
                                echo '<div class="sh-03-'.$threeCounter.' showcase-holder" style="background-image: url('.$theImageThree.')"></div>';
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