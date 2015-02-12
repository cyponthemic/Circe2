<?php 
if(!is_front_page()):
global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full", false, '' );
?>

<style>
.parralax {
	background: url(<?php echo $src[0]; ?> );
	
           }
</style>
<header id="skrollr-body" class="parralax"
data-0="background-position:  50% 0%;"
data-top-bottom="background-position: 50% 100%;"
>
	<div class="row">
		<div class="large-offset-3 small-9 columns">
		
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) & is_shop()) : ?>
			<h1 class="entry-title"><?php woocommerce_page_title(); ?></h1>		
		<?php else: ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php endif; ?>
				
		</div>
	</div>
</header>
<?php endif;?>
