</section>
<?php if (!is_front_page()) : ?>
<footer class="row">
	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>
	<?php do_action('foundationPress_after_footer'); ?>
</footer>
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
