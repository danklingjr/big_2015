<?php

/*
Template Name: About
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
<section class="hero hero--page about--page" style="background-image: url(<?php echo $featured_large[0]; ?>);">
	<div>
		<h1>
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

<section class="page__overview group">
	<?php the_field('intro_text', 'option'); ?>
</section>

<section class="history group">
	<div class="left-side">
		<?php the_field('left_side', 'option'); ?>
	</div>
	<div class="right-side">
		<?php the_field('right_side', 'option'); ?>
	</div>
</section>

<section class="our-team group">
	<h2><b>Our</b> Team</h2>
	<div class="team__wrap group">
		<?php
		if (have_rows('staff_member', 'option')) :
		while(have_rows('staff_member', 'option')) : the_row();
		$image = get_sub_field('image', 'option');
		if( !empty($image) ):
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];

		// thumbnail
		$size = 'large-thumb';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ];
		?>
		<div class="team__member col-3">
			<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">
			<div class="team__details">
				<h3><?php the_sub_field('name','option'); ?></h3>
				<p><?php the_sub_field('title','option'); ?></p>
			</div>
		</div>
		<?php 
		endif;
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