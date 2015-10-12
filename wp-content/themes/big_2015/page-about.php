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
<section class="hero hero--page about--page">
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
	<h2><b>Who We</b> Are</h2>
	<p>Headquartered in Central PA, Business Information Group is a customer-oriented IT consulting firm employing over 50 people. Established in 1992, BIG has grown with the technology boom and has been a leader in wireless networking. Today, BIG continues to listen to the client and specializes in applying the correct technologies to meet their requirements.</p>
</section>

<section class="history group">
	<div class="left-side">
		<h2><b>BIG</b> History</h2>
		<p>John and Scott Dolmetsch grew up during the PC revolution, and started programming computers in the early 1980’s. What started out as two brothers tinkering around in their basement and networking with friends soon became a bona fide business, offering a “one stop technology shop.” Business Information Group incorporated in the state of Pennsylvania on January 10, 1992, providing expertise across the technology and communications arenas to York County businesses. In the years since, both brothers continue to run at full throttle ahead, and their vision has managed to evolve as rapidly as the technology field.</p>
		<p>In 1998, years ahead of the industry curve, BIG focused attention on wireless broadband, or WiFi. BIG helped develop a community network that connected York county schools, libraries, and non-profit groups for low-cost, high-speed Internet access. In 2005, BIG Wireless, a wholly-owned subsidiary, was created to specialize in wireless broadband projects but benefit from BIG’s in-house expertise in related disciplines. Since then, BIG Wireless has engineered and installed hundreds of broadband networks in far-flung locations including Cleveland, OH, Miami, FL, Montgomery, AL and Cheyenne, WY. While BIG Wireless has sustained technical know-how for mid-size enterprises, it has also gained valuable experience on large-scale national projects through subcontracting relationships with respected systems integrators including IBM and Alcatel Lucent.</p>
		<p>In 2000, BIG created a climate-controlled data center at their downtown York facility, which houses servers and hosts websites for several businesses in the region. Later, BIG built the first “carrier-class” wireless voice and data network in Pennsylvania, which provides high speed connectivity at affordable rates to businesses in York County. Antennas are positioned to allow access by approximately 75% of York County businesses, and a new location within the service area can be up and running quickly. Outdoor grade radios provide access around the clock for companies that require their information anywhere, anytime. One of BIG’s major clients is a York County construction firm that relies on laptop computers and wireless communications to capture data in the field for real-time decision making.</p>
	</div>
	<div class="right-side">
		<figure>
			
		</figure>
		<p>BIG has always prided itself on its customer-oriented employees, now numbering more than 50. No matter how large or small they are, or where they need help, all BIG clients have around-the-clock access to the company’s technical support staff. The early roster of on-call technicians carrying pagers grew in 2005 into a 24/7 Network Operations Center. The NOC staff monitors more than 1000 devices owned by dozens of supported clients. Additionally, the NOC has access to several other client networks for remote troubleshooting, and provides case management and dispatch support for a mobile broadband network for commercial and business aviation nationwide.</p>
		<p>BIG continues to be an authorized provider and certified partner for numerous vendors including Cisco, HP, Compaq, IBM, Lenovo, Microsoft, and Novell. BIG Wireless partners include Alvarion, Motorola, Ceragon, BridgeWave, Tropos, Belaire, and Nera.</p>
	</div>
</section>

<section class="our-team group">
	<h2><b>Our</b> Team</h2>
	<div class="team__wrap group">
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
		<div class="team__member col-3">
			
		</div>
	</div>
	<hr>
	<p class="cta-text">Are you interested in a partnership with BIG?</p>
	<p class="cta-sub-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact Us Today</a> and let us know how BIG can help.</p>
</section>

<?php
}
//
genesis();