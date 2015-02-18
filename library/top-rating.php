<?php

function woo_top_rating() {
 
	// The new tab content
	$WPID= get_the_id();
	$stack=array();
	$loop = new WP_Query( 
			array( 
					'post_type' => 'review',
					'posts_per_page'=>0
				) 
			);
			
	while ( $loop->have_posts() ) : $loop->the_post();
	
	$productwine= get_field('wine');
	$WCID=$productwine->ID;
	
	if($WPID==$WCID):
	$top_author=get_field('author');
	if(get_field('Rating')>1){
	$top_rating= get_field('Rating');}
	endif;
	endwhile;
	wp_reset_postdata();
	
	if(!is_null($top_rating)){
	$top_all=$top_rating.'pts, by '.$top_author;
	}
	array_push($stack, $top_all);
	arsort($stack);
	return $stack[0];
}
function woo_link_review() {
$product= get_the_id();
$wcproduct = new WC_Product($product->ID);
$subheadingvalues = get_the_terms( $wcproduct->id, 'pa_winename');
foreach ( $subheadingvalues as $subheadingvalue ) {
$l= str_replace(' ','-',$subheadingvalue->name)." ";
return str_replace('.','-',$l)." ";
}
}
add_action('woocommerce_single_product_summary', 'Professionalrating',25);


function Professionalrating(){
								echo '<div class="ratings">';
								if(woo_top_rating()){
								echo '<span class="top-rating fi-bookmark">';
								echo woo_top_rating();
								echo '</span>';
								$filter=  woo_link_review();
								echo '<a class="see-all" href="'. home_url().'/review/?filter='.$filter.'">  >See all</a>';
								}
								else{
									$filter=  woo_link_review();
									echo '<a class="see-all" href="'. home_url().'/review/?filter='.$filter.'">  >See all reviews</a>';	
								}
								echo '</div>';
	
		

							}
?>