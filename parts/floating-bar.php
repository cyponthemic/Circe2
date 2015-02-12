<nav id="floating"
data--350-bottom-bottom='opactity :1 !important;'
data--150-bottom-bottom='opactity :0 !important;'
>	
	
	<img class="logo" src="<?php echo get_stylesheet_directory_uri()?>/img/circe_wines_logo.gif">
	<img class="logotype" src="<?php echo get_stylesheet_directory_uri()?>/img/circe_wines_logotype.png">
	 <?php
      // Left Nav Section
      if ( has_nav_menu( 'top-bar-l' ) ) {
          wp_nav_menu( array(
              'theme_location' => 'top-bar-l',
              'container' => false,
              'depth' => 0,
              'items_wrap' => '<ul class="left">%3$s</ul>',
              'fallback_cb' => false,
              'after' => '<hr>',
          ) );
        }
      ?>
	<!-- </div> -->
</nav>
