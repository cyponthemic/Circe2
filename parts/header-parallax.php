<?php 
if(!is_front_page()):
global $post; ?>
<?php
$ID=$post->ID;
if (is_home()):
$ID=109;
endif;
$src = wp_get_attachment_image_src( get_post_thumbnail_id($ID), "full", false, '' );
?>

<style>
.parralax {
	background: url(<?php echo $src[0]; ?> );
	
           }
</style>
<header id="ParralaxHeader" class="parralax"
data-0="background-position:  50% 0%;"
data-top-bottom="background-position: 50% 100%;"
>
	<div class="row">
		<div class="large-offset-3 small-9 columns entry-title-container">
		
		<?php if (  is_shop() or is_product()) : ?>
			
				<h1 class="wcbreadcrumbs"><?php get_template_part('parts/breadcrumb');?></h1>
		
		<?php elseif (  is_home() ): ?>	
				<h1 class="entry-title">News</h1>		
		<?php else: ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php endif; ?>
				
		</div>
	</div>
</header>
<?php endif;?>
