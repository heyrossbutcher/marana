<!-- 	<footer>
	  <div class="container">
	    <p>&copy; Marana <?php echo date('Y'); ?></p>
	  </div>
	</footer> -->
	
</div> <!-- /.wrapper -->
<?php 
$title = get_the_title();
  
  if(is_page_template( 'room-page.php' )){
    $is_room_page = true;
  } else {
   $is_room_page = false;
  }
 ?>
<div class="overlay">
  <!--  -->
    <div class="closeOverlayButton">
      <div class="close">
        <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/heyross/img/x.svg"/>
      </div>
    </div>
  <!--  -->
  <div class="consultationForm">
     <!--  -->
      <?php query_posts('pagename=consultation'); ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
      

   </div>
  <!--  -->
  <!--  -->
  <div class="closeOverlay">
    
  </div>
  <!--  -->
  <div class="imageSlider flexslider-rooms">
    <?php if( $is_room_page !== '' ): ?>
     <!--    //  -->
    <?php
      $page = get_page_by_title( $title );
      $mypost = get_the_id($page);
      
    ?>
    <!--  -->
    <?php $latestPosts = new wp_query(array(
        'post_type' => 'rooms',//we only want home pieces
        'posts_per_page' => -1
      )) ?> 
        <!-- // -->
        <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

        <?php 
          $fs_getTitle = get_the_title();
            $fs_rooms = get_field('rooms');  
            //
            if ( $title == $fs_getTitle ) {
              
              echo '<ul class="slides clearfix">';
              foreach ($fs_rooms as $fs_room) {
                  $fs_url = $fs_room['room_image']['url'];
                  $fs_room_thumbnail = $fs_room['room_image']['sizes']['large'];
                  echo '<li>';
                  echo '<img src="'.$fs_room_thumbnail.'"/>';
                  echo '</li>';
              }
              echo '</ul>';
            }
          //
        ?>

        <?php wp_reset_postdata(); ?>

        <?php endwhile; // end of the loop. ?>


   <?php endif; ?>
    
  </div>

  <!--  -->
<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>


<!--  -->
</body>
</html>