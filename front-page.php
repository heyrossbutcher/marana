<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>


<div class="main">
  <div class="container home containerHook clearfix">
        
        <?php $latestPosts = new wp_query(array(
            'post_type' => 'homes',//we only want home pieces
            'posts_per_page' => -1
          )) ?> 
        <?php // Start the loop ?>

        <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
            

            <?php $home_showcase = get_field('showcase');  ?>
            <?php $home_slug = get_field('slug_line');  ?>
            <?php $home_order = get_field('home_page_order');  ?>
            <?php $homes_info = get_field('create_a_row');  ?>
            <?php $id = get_the_ID(); ?>
            <?php $link = get_permalink($id); ?>
            <?php $page_title = get_the_title($id); ?>
            <!--  -->
            <?php
                if ( $home_showcase == 1 && $home_order == 'one' )  {
                    // pre_r($link); 
                   // 
                    echo '<div class="col1">';
                    echo '<a href="'.$link.'">';
                    echo '<div class="showcase01 showcase flexslider-showcase1 panelBtn invisible">';
                    echo '<div class="rollover">';
                    echo '<div class="rolloverTitle">';
                        echo '<div class="rolloverH">';
                            echo '<h4>'.$page_title.'</h4>';
                        echo '</div>';
                        echo '<div class="rolloverP">';
                            echo '<p>'.$home_slug.'</p>';
                        echo '</div>';
                        echo '</div>';
                    echo '</div>';
                    echo '<ul class="slides">';
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
                            echo '<li class="sh-01-'.$oneCounter.'" style="background-image: url('.$theImageOne.')"></li>';
                        }
                    }
                    echo '</ul>';
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
                <?php $panel_cat = get_field('panel_id');  ?>
                
                <?php 
                    if( $panel_cat == 'process' ){

                        $panel_id = get_the_id(); 
                        $panel_title = get_the_title($panel_id); 
                        $panel_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );
                        $panel_link = get_field('url');
                        $panel_image = get_field('panels');
                        $panel_image_select = $panel_image[0]['panel_image']['url'];
                        
                        //
                        echo '<a href="'.$panel_link.'">';
                        echo '<div class="process processHolder panelBtn invisible"  style="background-image: url('.$panel_image_select.')">';
                        echo '<div class="rollover">';
                        echo '<div class="rolloverTitle">';
                            echo '<div class="rolloverH">';
                                echo '<h4>'.$panel_title.'</h4>';
                            echo '</div>';
                        echo '</div>';
                        echo '</div>';
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
                <?php $home_slug = get_field('slug_line');  ?>
                <?php $home_order = get_field('home_page_order');  ?>
                <?php $homes_info = get_field('create_a_row');  ?>
                <?php $id = get_the_ID(); ?>
                <?php $link = get_permalink($id); ?>
                <?php $page_title = get_the_title($id); ?>
                <!--  -->
                <?php
                    if ( $home_showcase == 1 && $home_order == 'two' )  {
                       // 
                        echo '<a href="'.$link.'">';
                        echo '<div class="showcase02 showcase flexslider-showcase2 panelBtn invisible">';
                        echo '<div class="rollover">';
                        echo '<div class="rolloverTitle">';
                            echo '<div class="rolloverH">';
                                echo '<h4>'.$page_title.'</h4>';
                            echo '</div>';
                            echo '<div class="rolloverP">';
                                echo '<p>'.$home_slug.'</p>';
                            echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        echo '<ul class="slides">';
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
                                echo '<li class="sh-03-'.$twoCounter.'" style="background-image: url('.$theImageTwo.')"></li>';
                            }
                        }
                        echo '</ul>';
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
                'post_type' => 'panels',//
                'posts_per_page' => -1
              )) ?> 


            <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
                <?php 
                    $panel_cat = get_field('panel_id');  
                    if( $panel_cat == 'about' ){
                        //
                        $panel_id = get_the_id(); 
                        $panel_title = get_the_title($panel_id); 
                        $panel_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );
                        $panel_link = get_field('url');
                        $panel_image = get_field('panels');
                        $panel_image_select = $panel_image[0]['panel_image']['url'];
                        // pre_r($panel_image_select);
                        //
                        echo '<a href="'.$panel_link.'">';
                        echo '<div class="about aboutHolder flexslider-about panelBtn invisible" >';
                        echo '<div class="aboutInnerHolder"  style="background-image: url('.$panel_image_select.')">';
                        echo '<div class="rollover">';
                        echo '<div class="rolloverTitle">';
                            echo '<div class="rolloverH">';
                                echo '<h4>'.$panel_title.'</h4>';
                            echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        
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
                <?php $home_slug = get_field('slug_line');  ?>
                <?php $home_order = get_field('home_page_order');  ?>
                <?php $homes_info = get_field('create_a_row');  ?>
                <?php $id = get_the_ID(); ?>
                <?php $link = get_permalink($id); ?>
                <?php $page_title = get_the_title($id); ?>
                <!--  -->
                <?php
                    if ( $home_showcase == 1 && $home_order == 'three' )  {
                       // 
                        echo '<a href="'.$link.'">';
                        echo '<div class="showcase03 showcase flexslider-showcase3 panelBtn invisible">';
                        echo '<div class="rollover">';
                        echo '<div class="rolloverTitle">';
                            echo '<div class="rolloverH">';
                                echo '<h4>'.$page_title.'</h4>';
                            echo '</div>';
                            echo '<div class="rolloverP">';
                                echo '<p>'.$home_slug.'</p>';
                            echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        echo '<ul class="slides">';
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
                                echo '<li class="sh-04-'.$threeCounter.'" style="background-image: url('.$theImageThree.')"></li>';
                            }
                        }
                        echo '</ul>';
                    }
                ?>
              <?php wp_reset_postdata(); ?>
            <?php endwhile; // end of the loop. ?>
                <div class="preloader"></div>
            </div>
            </a>
        </div> <!-- end of column 3 -->



  </div> <!-- /.container -->
  <div class="mobileContainer mobileHome clearfix">
  <!--  -->
    <?php $latestPosts = new wp_query(array(
        'post_type' => 'homes',//we only want home pieces
        'posts_per_page' => -1
    )) ?> 
    <!--  -->
      <?php echo '<ul class="slides">'; ?>
      <?php $mobileCounter = 0; ?>
      <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
        
        <?php $mobileCounter++; ?>
        <?php $id = get_the_ID(); ?>
        <?php $url = get_post_permalink($id); ?>

        <?php $home_showcase = get_field('showcase');  ?>
        <?php $home_slug = get_field('slug_line');  ?>
        <?php $home_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" ); ?>
        <?php $home_thumbnail = $home_thumbnail[0]; ?>
       
        <?php $home_title = get_the_title();  ?>
          <?php 
            
            echo '<li class="listLabel-'.$mobileCounter.'">';
            echo '<a href="'.$url.'">';
            echo '<div class="mobileShowcaseHolder" style="background-image: url('.$home_thumbnail.')">';
            echo '<div class="titleOverlay">';
            echo '<div class="rolloverH"><p>'.$home_title.'</p></div>';
            echo '<div class="rolloverP"><p>'.$home_slug.'</p></div>';
            echo '<div class="cta">Learn more</div>';
            echo '</div>';
            echo '</div>';
            echo '</a>';
            // 
            echo '</li>';
            
          ?>
          <?php wp_reset_postdata(); ?>
          
    <?php endwhile; // end of the loop. ?>
    <?php echo '</ul>'; ?>
    <!--  -->
  </div>
</div> <!-- /.main -->


<?php get_footer(); ?>