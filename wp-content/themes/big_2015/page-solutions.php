<?php

/*
Template Name: Solutions
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
			<span>
				<?php 
				$page = get_queried_object();
				$parent_title = get_the_title($page->post_parent);
				echo $parent_title;
				?>
			</span>
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

<section class="solutions group">
	<div class="partners__wrap group">

	<?php 
		if (have_rows('solution')): 
		while(have_rows('solution')): the_row();
	?>
		<div class="solution group">
			<figure class="solution__logo">
				<?php the_sub_field('icon'); ?>
			</figure>
			<div class="solution__text">
				<h3><?php the_sub_field('title'); ?></h3>
				<?php the_sub_field('text'); ?>
			</div>
		</div>
	<?php 
		endwhile;
		endif;
	?>

	</div>
	<hr>
	<p class="cta-text">Are you interested in a partnership with BIG?</p>
	<p class="cta-sub-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact Us Today</a> and let us know how BIG can help.</p>
</section>


<?php
}
//
genesis();