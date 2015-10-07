<?php

/*
Template Name: Service Main
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
<div class="header__push">
	
</div>
<section class="hero hero--page">
	<div>
		<h1>
			<span>There's A</span>
			<b>BIG</b>
			<span>Difference</span>
		</h1>
		<a href="" class="button button--hero">Learn More <span>&rsaquo;</span></a>
	</div>
</section>

<?php
}
add_action('genesis_entry_content', 'site_content');
function site_content()
{
?>

<section class="service__main group">
	<div class="box box--service col-3">
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 67.9 65" enable-background="new 0 0 67.9 65" xml:space="preserve"><g id="Layer_14"/><g id="footerthree"/><g id="footer" display="none"/><g id="footertwo" display="none"/><g id="Layer_11"/><g id="Layer_12"><path fill="#88C53B" d="M62.9 59v-4.1h-2.5v-3.7h-2V25.6h2V22h2.5v-3.8h3.6L33.5 0 0.4 18.2h3.6V22h2.7v3.7h1.8v25.6h-2v3.7H4.1V59H0v6h67.9v-6H62.9zM28.6 51.2V25.6h2V22h5.6v3.7h2v25.6h-2v3.7h-5.6v-3.7H28.6zM53.2 25.6v25.6h-2v3.7h-5.6v-3.7h-2V25.6h2V22h5.6v3.7H53.2zM13.8 51.2V25.6h1.8V22h5.9v3.7h2v25.6h-2v3.7h-5.6v-3.7H13.8z"/></g><g id="menu"/><g id="search" display="none"/><g id="soft_highlight" display="none"><g display="inline"><defs><rect id="SVGID_26_" x="-855.6" y="189.9" width="566" height="1031"/></defs><clipPath id="SVGID_2_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_2_)"><defs><rect id="SVGID_28_" x="-1262.9" y="190" width="1380.6" height="1031"/></defs><clipPath id="SVGID_4_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_4_)"><rect x="-1915.5" y="30.5" opacity="0.4" width="3132.1" height="1252.4"/></g></g></g></g><g id="soft_normal"><defs><rect id="SVGID_30_" x="-855.6" y="189.9" width="566" height="1031"/></defs><clipPath id="SVGID_6_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_6_)"><defs><rect id="SVGID_32_" x="-1262.9" y="190" width="1380.6" height="1031"/></defs><clipPath id="SVGID_8_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_8_)"><rect x="-1915.5" y="30.5" opacity="0.4" width="3132.1" height="1252.4"/></g></g><defs><rect id="SVGID_34_" x="-855.6" y="189.9" width="566" height="1031"/></defs><clipPath id="SVGID_10_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_10_)"><defs><rect id="SVGID_36_" x="-1262.9" y="190" width="1380.6" height="1031"/></defs><clipPath id="SVGID_12_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_12_)"><rect x="-1915.5" y="30.5" opacity="0.4" width="3132.1" height="1252.4"/></g></g></g><g id="network_highlight" display="none"/><g id="net_normal"/><g id="wire_highlight" display="none"/><g id="wire_normal"/><g id="gateway_footer"/><g id="Layer_9"/><g id="Layer_19"/><g id="Layer_20"/><g id="Layer_18" display="none"/></svg>
		<h2>Government</h2>
		<p>BIG Wireless has been involved in governmental projects from the local to the Federal level. Agencies of all kinds have turned to BIG Wireless to help them conceive, construct, and manage wireless systems that have provided [...]</p>
		<a href="" class="button">Learn More <span>&rsaquo;</span></a>
	</div>
	<div class="box box--service col-3">
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 70.5 65" enable-background="new 0 0 70.5 65" xml:space="preserve"><g id="Layer_14"/><g id="footerthree"/><g id="footer" display="none"/><g id="footertwo" display="none"/><g id="Layer_11"/><g id="Layer_12"><g id="home-icon_4_"><path fill="#88C53B" d="M61.2 65H42.5c-0.8 0-1.5-0.7-1.5-1.5V51.4H30v12.1c0 0.8-0.7 1.5-1.5 1.5H9.7c-0.8 0-1.5-0.7-1.5-1.5V43.9c0 0 0 0 0 0 0-0.2 0.1-0.4 0.1-0.6 0.1-0.2 0.2-0.3 0.3-0.5 0 0 0 0 0 0l25.7-22.5c0.6-0.5 1.4-0.5 2 0l25.7 22.3c0 0 0 0 0 0 0.2 0.1 0.3 0.3 0.4 0.5 0.1 0.2 0.1 0.4 0.1 0.6 0 0 0 0 0 0v19.7C62.7 64.3 62 65 61.2 65zM6.5 38.4c-0.4 0-0.8-0.2-1.1-0.5l-5-5C0.1 32.6 0 32.2 0 31.8c0-0.4 0.2-0.8 0.5-1.1L34.4 0.4c0.6-0.5 1.5-0.5 2 0L70 30.5c0.3 0.3 0.5 0.7 0.5 1.1 0 0.4-0.2 0.8-0.4 1.1l-5 5c-0.6 0.6-1.5 0.6-2.1 0.1L35.4 13.6 7.6 38C7.3 38.3 6.9 38.4 6.5 38.4z"/></g></g><g id="menu"/><g id="search" display="none"/><g id="soft_highlight" display="none"><g display="inline"><defs><rect id="SVGID_26_" x="-1186.1" y="189.9" width="566" height="1031"/></defs><clipPath id="SVGID_2_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_2_)"><defs><rect id="SVGID_28_" x="-1593.4" y="190" width="1380.6" height="1031"/></defs><clipPath id="SVGID_4_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_4_)"><rect x="-2246.1" y="30.5" opacity="0.4" width="3132.1" height="1252.4"/></g></g></g></g><g id="soft_normal"><defs><rect id="SVGID_30_" x="-1186.1" y="189.9" width="566" height="1031"/></defs><clipPath id="SVGID_6_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_6_)"><defs><rect id="SVGID_32_" x="-1593.4" y="190" width="1380.6" height="1031"/></defs><clipPath id="SVGID_8_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_8_)"><rect x="-2246.1" y="30.5" opacity="0.4" width="3132.1" height="1252.4"/></g></g><defs><rect id="SVGID_34_" x="-1186.1" y="189.9" width="566" height="1031"/></defs><clipPath id="SVGID_10_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_10_)"><defs><rect id="SVGID_36_" x="-1593.4" y="190" width="1380.6" height="1031"/></defs><clipPath id="SVGID_12_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_12_)"><rect x="-2246.1" y="30.5" opacity="0.4" width="3132.1" height="1252.4"/></g></g></g><g id="network_highlight" display="none"/><g id="net_normal"/><g id="wire_highlight" display="none"/><g id="wire_normal"/><g id="gateway_footer"/><g id="Layer_9"/><g id="Layer_19"/><g id="Layer_20"/><g id="Layer_18" display="none"/></svg>
		<h2>Communities &amp; Municipalities</h2>
		<p>Communities around the country have turned to BIG Wireless to aid them in service to their communities. Whether providing wireless Internet service to a single building, or providing the residents of a city with wireless access [...]</p>
		<a href="" class="button">Learn More <span>&rsaquo;</span></a>
	</div>
	<div class="box box--service col-3">
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 55.2 65" enable-background="new 0 0 55.2 65" xml:space="preserve"><g id="Layer_14"/><g id="footerthree"/><g id="footer" display="none"/><g id="footertwo" display="none"/><g id="Layer_11"/><g id="Layer_12"><g id="police-badge-3-icon"><path fill="#88C53B" d="M27.6 65c-0.3 0-0.7-0.1-1-0.3 -3.3-2.7-4.1-3.3-10.7-5C5.8 57.1 0 50.4 0 41.2c0-4.4 1.5-8.3 3.3-13.3 0.3-0.7 0.6-1.5 0.8-2.3 2.3-6.3 0.9-7.8-1.2-10l-2.2-2.3c-0.3-0.3-0.4-0.7-0.4-1.1 0-0.4 0.2-0.8 0.5-1.1L13.6 0.4c0.6-0.5 1.5-0.5 2.1 0.1C15.8 0.7 16 0.8 16.1 1c1.2 1.2 2.5 2.7 4.7 2.7 2.3 0 3.9-1.5 5.3-2.7 0.2-0.2 0.3-0.3 0.5-0.5 0.6-0.5 1.5-0.5 2 0 0.1 0.1 0.3 0.3 0.5 0.4 1.2 1.1 2.9 2.7 5.2 2.7 2.2 0 3.5-1.4 4.7-2.7 0.2-0.2 0.3-0.4 0.5-0.5 0.6-0.6 1.5-0.6 2.1-0.1l0.9 0.8c1.1 1 1.1 1 5.9 5l5.9 5c0.3 0.3 0.5 0.7 0.5 1.1 0 0.4-0.1 0.8-0.4 1.1l-2.2 2.3c-2.1 2.2-3.5 3.7-1.2 10l0 0c0.3 0.8 0.6 1.5 0.8 2.3 1.9 5 3.3 8.9 3.3 13.3 0 9.2-5.8 15.9-16 18.5 -6.6 1.7-7.4 2.3-10.7 5C28.3 64.9 27.9 65 27.6 65z"/></g><path fill="#FFFFFF" d="M35.7 45.1c-0.2 0-0.5-0.1-0.7-0.2l-7.3-3.9L20.3 45c-0.5 0.3-1.1 0.2-1.6-0.1 -0.5-0.3-0.7-0.9-0.6-1.5l1.4-8.2 -5.9-5.8c-0.4-0.4-0.6-1-0.4-1.6 0.2-0.6 0.7-1 1.2-1l8.2-1.2 3.7-7.4c0.3-0.5 0.8-0.9 1.4-0.9 0.6 0 1.1 0.3 1.4 0.9l3.7 7.4 8.2 1.2c0.6 0.1 1.1 0.5 1.2 1 0.2 0.6 0 1.2-0.4 1.6l-5.9 5.8 1.4 8.2c0.1 0.6-0.1 1.2-0.6 1.5C36.4 45 36.1 45.1 35.7 45.1z"/><path fill="#88C53B" d="M27.7 37.8c0.2 0 0.5 0.1 0.7 0.2l5.3 2.8 -1-5.9c-0.1-0.5 0.1-1 0.4-1.4l4.3-4.2 -5.9-0.9c-0.5-0.1-0.9-0.4-1.2-0.8l-2.7-5.4L25 27.6c-0.2 0.5-0.7 0.8-1.2 0.8l-5.9 0.9 4.3 4.2c0.4 0.4 0.5 0.9 0.4 1.4l-1 5.9L27 38C27.2 37.9 27.4 37.8 27.7 37.8z"/></g><g id="menu"/><g id="search" display="none"/><g id="soft_highlight" display="none"><g display="inline"><defs><rect id="SVGID_26_" x="-1520.1" y="189.9" width="566" height="1031"/></defs><clipPath id="SVGID_2_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_2_)"><defs><rect id="SVGID_28_" x="-1927.5" y="190" width="1380.6" height="1031"/></defs><clipPath id="SVGID_4_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_4_)"><rect x="-2580.1" y="30.5" opacity="0.4" width="3132.1" height="1252.4"/></g></g></g></g><g id="soft_normal"><defs><rect id="SVGID_30_" x="-1520.1" y="189.9" width="566" height="1031"/></defs><clipPath id="SVGID_6_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_6_)"><defs><rect id="SVGID_32_" x="-1927.5" y="190" width="1380.6" height="1031"/></defs><clipPath id="SVGID_8_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_8_)"><rect x="-2580.1" y="30.5" opacity="0.4" width="3132.1" height="1252.4"/></g></g><defs><rect id="SVGID_34_" x="-1520.1" y="189.9" width="566" height="1031"/></defs><clipPath id="SVGID_10_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_10_)"><defs><rect id="SVGID_36_" x="-1927.5" y="190" width="1380.6" height="1031"/></defs><clipPath id="SVGID_12_"><use overflow="visible"/></clipPath><g clip-path="url(#SVGID_12_)"><rect x="-2580.1" y="30.5" opacity="0.4" width="3132.1" height="1252.4"/></g></g></g><g id="network_highlight" display="none"/><g id="net_normal"/><g id="wire_highlight" display="none"/><g id="wire_normal"/><g id="gateway_footer"/><g id="Layer_9"/><g id="Layer_19"/><g id="Layer_20"/><g id="Layer_18" display="none"/></svg>
		<h2>Public Safety</h2>
		<p>The wireless industry provides many advantages to those in the public safety service sector. Police and other agencies now use wireless devices deployed by BIG Wireless to aid them in monitoring problematic neighborhoods [...]</p>
		<a href="" class="button">Learn More <span>&rsaquo;</span></a>
	</div>
	<div class="box box--service col-3">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0" y="0" viewBox="0 0 59.3 65" enable-background="new 0 0 59.3 65" xml:space="preserve"><g id="Layer_14"/><g id="footerthree"/><g id="footer" display="none"/><g id="footertwo" display="none"/><g id="Layer_11"/><g id="Layer_12"><path id="wrench-8-icon" fill="#88C53B" d="M44.5 9.7c-4.6-2.6-9.6-4-14.7-4V0l-12 8.7 12 8.6v-5.9c4.1 0 8.2 1.1 11.8 3.2 7.4 4.3 11.9 12.2 11.9 20.7 0 4-1 7.8-2.8 11.2l-4.2-4.2c-1.6-1.6-2.5-3.9-2.3-6.1 0.3-4.1-1.1-8.3-4.3-11.4 -4.1-4.1-10.1-5.3-15.2-3.5l9.4 9.4c0.2 3.7-5.4 9.3-9.1 9.1l-9.4-9.4c-1.8 5.2-0.6 11.1 3.5 15.2 3.1 3.1 7.3 4.6 11.4 4.3 2.3-0.2 4.5 0.7 6.1 2.3l4.2 4.2c-7.3 3.9-16.1 3.8-23.2-0.4C10.3 51.8 5.8 43.9 5.8 35.4c0-6.4 2.6-12.5 7-16.9l-4.1-4.1c-5.5 5.5-8.7 13-8.7 21C0 45.9 5.7 55.7 14.8 61s20.5 5.3 29.6 0 14.8-15.1 14.8-25.7S53.6 15 44.5 9.7z"/></g><g id="menu"/><g id="search" display="none"/><g id="soft_highlight" display="none"><g display="inline"><defs><rect id="SVGID_26_" x="-1847.3" y="189.9" width="566" height="1031"/></defs><clipPath id="SVGID_2_"><use xlink:href="#SVGID_26_" overflow="visible"/></clipPath><g clip-path="url(#SVGID_2_)"><defs><rect id="SVGID_28_" x="-2254.6" y="190" width="1380.6" height="1031"/></defs><clipPath id="SVGID_4_"><use xlink:href="#SVGID_28_" overflow="visible"/></clipPath><g clip-path="url(#SVGID_4_)"><rect x="-2907.2" y="30.5" opacity="0.4" width="3132.1" height="1252.4"/></g></g></g></g><g id="soft_normal"><defs><rect id="SVGID_30_" x="-1847.3" y="189.9" width="566" height="1031"/></defs><clipPath id="SVGID_6_"><use xlink:href="#SVGID_30_" overflow="visible"/></clipPath><g clip-path="url(#SVGID_6_)"><defs><rect id="SVGID_32_" x="-2254.6" y="190" width="1380.6" height="1031"/></defs><clipPath id="SVGID_8_"><use xlink:href="#SVGID_32_" overflow="visible"/></clipPath><g clip-path="url(#SVGID_8_)"><rect x="-2907.2" y="30.5" opacity="0.4" width="3132.1" height="1252.4"/></g></g><defs><rect id="SVGID_34_" x="-1847.3" y="189.9" width="566" height="1031"/></defs><clipPath id="SVGID_10_"><use xlink:href="#SVGID_34_" overflow="visible"/></clipPath><g clip-path="url(#SVGID_10_)"><defs><rect id="SVGID_36_" x="-2254.6" y="190" width="1380.6" height="1031"/></defs><clipPath id="SVGID_12_"><use xlink:href="#SVGID_36_" overflow="visible"/></clipPath><g clip-path="url(#SVGID_12_)"><rect x="-2907.2" y="30.5" opacity="0.4" width="3132.1" height="1252.4"/></g></g></g><g id="network_highlight" display="none"/><g id="net_normal"/><g id="wire_highlight" display="none"/><g id="wire_normal"/><g id="gateway_footer"/><g id="Layer_9"/><g id="Layer_19"/><g id="Layer_20"/><g id="Layer_18" display="none"/></svg>
		<h2>Utilities</h2>
		<p>Communities around the country have turned to BIG Wireless to aid them in service to their communities. Whether providing wireless Internet service to a single building, or providing the residents of a city with wireless access [...]</p>
		<a href="" class="button">Learn More <span>&rsaquo;</span></a>
	</div>
</section>

<section class="overview__details group">
	<div class="contact--details">
		<div class="contact__dropdown col-3">
			<p>Contact Big <span class="arrow">&rsaquo;</span></p>
		</div>
		<div class="request__eval col-9">
			<span>NOT SURE WHAT TYPE OF HELP YOU NEED?</span>
			<span>Request and evaluation now <span class="arrow">&rsaquo;</span></span>
		</div>
	</div>

	<div class="overview__announcements group">
		<div class="news overview--news col-3">
			<time datetime="">April 01 2015</time>
			<h3>BIG Announces Expansion</h3>
			<p>BIG today announced it will be leading a formal business affiliation and begin servicing clients of Star Systems Engineering, Inc. (Star Systems), York, Pennsylvania.</p>
			<a href="" class="button">Read More <span class="arrow">&rsaquo;</span></a>
		</div>
		<div class="testimonials overview--testimonials col-6">
			<h2>What our customers are saying</h2>
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut maximus magna. Vestibulum eu orci velit. Ut vel risus mollis est ullamcorper dignissim a in."</p>
			<b>- Chris' Italian Meatballs -</b>
			<i>Company Name</i>
		</div>
		<div class="careers overview--careers col-3">
			<h3>We're Hiring</h3>
			<p>Join South-Central PA's leading provider of information technology services!</p>
			<a href="" class="button button--black">See Positions <span class="arrow">&rsaquo;</span></a>
		</div>
	</div>
</section>

<section class="overview__partners group">
	<h2>Our Trusted Wireless Partners Include:</h2>
	<div class="partner__wrap group">
		<figure class="partner--logo">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/alvarion.jpg" alt="">
		</figure>
		<figure class="partner--logo">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/alvarion.jpg" alt="">
		</figure>
		<figure class="partner--logo">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/alvarion.jpg" alt="">
		</figure>
		<figure class="partner--logo">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/alvarion.jpg" alt="">
		</figure>
		<figure class="partner--logo">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/alvarion.jpg" alt="">
		</figure>
		<figure class="partner--logo">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/alvarion.jpg" alt="">
		</figure>
	</div>
</section>

<?php
}
//
genesis();