<!-- 	<footer>
	  <div class="container">
	    <p>&copy; Marana <?php echo date('Y'); ?></p>
	  </div>
	</footer> -->
	
</div> <!-- /.wrapper -->
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
  <div class="imageSlider">
    
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlVgCq7VmzIePSLj2My10Up2PrUqfCDnU&callback=initMap"
    async defer>
</script>
<!--  -->
</body>
</html>