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
add_action('genesis_after_header', 'hero_content');
function hero_content()
{
?>
<div class="header__push">
	
</div>
<section class="hero hero--overview">
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
	<?php if(is_page('6')){ ?>
	<?php get_template_part( 'content', 'wireless-services' ); ?>
	<?php }else if(is_page('8')){?>
	<?php get_template_part( 'content', 'networking' ); ?>
	<?php }else if(is_page('10')){?>
	<?php get_template_part( 'content', 'software-development' ); ?>
	<?php }?>
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