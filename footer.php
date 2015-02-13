</section>
<?php if (!is_front_page()) : ?>
<div id="footer">
	<footer class="row">
		<div class="large-3 columns"> TEST</div>
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar Custom')) : ?>
		<?php endif; ?>
		<?php if ( has_nav_menu( 'footer-menu' ) ) {
			
			wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'inline-list', 'container' => 'nav', 'container_class' => 'small-12 large-3 columns test' ) );
			
		} ?>
	
	</footer>
</div>
<?php endif; ?>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
<script>
	  // Nothing new here...it's all in the CSS!
	  var scene = document.getElementById('scene');
	  var parallax = new Parallax(scene);
	  
  </script>
</html>

