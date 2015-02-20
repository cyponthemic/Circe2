<aside class="left-off-canvas-menu" aria-hidden="true">`
<a href="<?php echo get_site_url(); ?>">
	<img class="logo" src="<?php echo get_stylesheet_directory_uri()?>/img/circe_wines_logo_sml.png">
	<img class="logotype" src="<?php echo get_stylesheet_directory_uri()?>/img/circe_wines_logotype.png">
	</a>

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
</aside>