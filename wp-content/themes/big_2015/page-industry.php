<?php

/*
Template Name: Industry
*/


// Set the page layout to full-width
add_filter( 'genesis_pre_get_option_site_layout', 'big_home_layout' );
    function big_home_layout( $opt ) {
    $opt = 'full-width-content'; // You can change this to any Genesis layout
    return $opt;
}

//Remove Post Title and headers for Home Page
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
remove_action( 'genesis_entry_content', 'genesis_do_post_content_nav', 12 );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

//
add_action('genesis_after_header', 'hero_content');
function hero_content()
{
?>
<div class="header__push">
	
</div>
<?php 
$featured_id = get_post_thumbnail_id();
$featured_url = wp_get_attachment_image_src($featured_id,'large', true); 
$featured_large = wp_get_attachment_image_src($featured_id,'full', true);
?>
<section class="hero hero--page" style="background-image: url(<?php echo $featured_large[0]; ?>);">
	<div>
		<h1>
			<span>Industries We Serve</span>
			<b><?php the_title(); ?></b>
		</h1>
	</div>
</section>

<?php
}
add_action('genesis_entry_content', 'site_content');
function site_content()
{
?>

<section class="industry__overview group">
	<?php the_content(); ?>
</section>

<section class="industry__details group">
	<div class="industry__items group">
		<div class="item--wrap">
			<?php the_field('details_text'); ?>
		</div>
	</div>
	<?php 
	
	?>
	
	<div class="industry__graphic group" style="background-image: url(<?php the_field('details_graphic'); ?>);">
		
	</div>

</section>
<?php if (is_tree(6)) {?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>wireless-technologies/solutions" class="industry__cta">
<?php } else if (is_tree(8)) {?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>networking-security/solutions" class="industry__cta">
<?php } else if (is_tree(10)) {?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>software-development/solutions" class="industry__cta">
<?php } ?>
	<?php 
	$page = get_queried_object();
	$parent_title = get_the_title($page->post_parent);
	echo $parent_title;
	?> Solutions <span class="arrow">&rsaquo;</span>
</a>

<?php
}
//
genesis();