<?php

/*
Template Name: Gateway
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
add_action('genesis_before_content_sidebar_wrap', 'hero_content');
function hero_content()
{
?>


<?php
}
add_action('genesis_entry_content', 'site_content');
function site_content()
{
?>

<section class="gateway__services group">
	<div class="gateway__service">
		<div class="service--content">
			<div class="text__wrap">
				<h2>Wireless Technologies</h2>
				<p>From bandwidth analysis tools to harnesses, from spectrum analyzers to bucket trucks, we have all the tools and skills to handle even the largest wireless engineering projects.</p>
			</div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>wireless-technologies" class="button">Learn More ></a>
		</div>
		
	</div>
	<div class="gateway__service">
		<div class="service--content">
			<div class="text__wrap">
				<h2>Networking &amp; Security</h2>
				<p>Our Network &amp; Security Team can provide a multitude of IT services for all levels of business, from small to large. </p>
			</div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>networking-security" class="button">Learn More ></a>
		</div>
		
	</div>
	<div class="gateway__service">
		<div class="service--content">
			<div class="text__wrap">
				<h2>Software Development</h2>
				<p>Our Software Development team can provide a brand new application to meet your specifications, or implement new processes within an existing application.</p>
			</div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>software-development" class="button">Learn More ></a>
		</div>
		
	</div>
</section>

<?php
}
//
genesis();