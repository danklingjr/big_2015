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
<section class="hero hero--page">
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
	<h2><b>BIG</b> has the IT experience</h2>
	<p>BIG has the IT experience and knowledge that allows hundreds of users in construction firms and their materials and manufacturing facilities to stay connected. BIG technicians have integrated custom and third-party applications in a terminal server environment.</p>

	<h2><b>BIG</b> knows mobile</h2>
	<p>Integrated mobile devices allow users from all companies to be in touch from numerous field locations, 24 hours a day. BIG staff configures connectivity and management of clients, both locally and at remote offices, using a variety of tools including Symantec antivirus central management. BIG sets up, configures, and upgrades dozens of physical and virtual servers as they reach end-of-life or more capacity is needed. Mission critical data is replicated off-site at a disaster recovery location.</p>
</section>

<section class="industry__details group">
	<div class="industry__items group">
		<div class="item--wrap">
			<p>BIG has established a regimen of network audits that provide these 
	organizations with information including, but not limited to:</p>
			<ul>
				<li>An overview of network status and usage</li>
				<li>Basic workstation information such as install date and software versions</li>
				<li>Current details of server share permissions</li>
				<li>Antivirus signature updates</li>
				<li>Printer usage</li>
			</ul>
		</div>
	</div>
	<div class="industry__graphic group" style="background-image: url();">
		
	</div>
</section>
<a href="" class="industry__cta">
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