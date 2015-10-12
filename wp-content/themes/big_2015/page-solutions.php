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
<section class="hero hero--page">
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

<section class="partners group">
	<div class="partners__wrap group">
		<div class="partner group">
			<figure class="partner__logo">
				<img src="" alt="">
			</figure>
			<div class="partner__text">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis dui aliquet, vestibulum mauris vitae, luctus arcu. Nullam vitae dictum risus. Donec quis efficitur magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor tellus sed quam gravida pretium. Sed ut gravida enim, vel gravida nibh. Proin eget iaculis neque. Ut ligula odio, pharetra sit amet volutpat non, auctor vel quam.</p>
				<p>Aliquam sit amet vehicula nisl. Proin dictum iaculis libero, non tempor arcu facilisis in. Quisque non ullamcorper elit. Sed sollicitudin, risus ac vestibulum accumsan, nisi ipsum suscipit metus, et ultricies dolor elit eu mauris.</p>
			</div>
		</div>

		<div class="partner group">
			<figure class="partner__logo">
				<img src="" alt="">
			</figure>
			<div class="partner__text">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis dui aliquet, vestibulum mauris vitae, luctus arcu. Nullam vitae dictum risus. Donec quis efficitur magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor tellus sed quam gravida pretium. Sed ut gravida enim, vel gravida nibh. Proin eget iaculis neque. Ut ligula odio, pharetra sit amet volutpat non, auctor vel quam.</p>
				<p>Aliquam sit amet vehicula nisl. Proin dictum iaculis libero, non tempor arcu facilisis in. Quisque non ullamcorper elit. Sed sollicitudin, risus ac vestibulum accumsan, nisi ipsum suscipit metus, et ultricies dolor elit eu mauris.</p>
			</div>
		</div>

		<div class="partner group">
			<figure class="partner__logo">
				<img src="" alt="">
			</figure>
			<div class="partner__text">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis dui aliquet, vestibulum mauris vitae, luctus arcu. Nullam vitae dictum risus. Donec quis efficitur magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor tellus sed quam gravida pretium. Sed ut gravida enim, vel gravida nibh. Proin eget iaculis neque. Ut ligula odio, pharetra sit amet volutpat non, auctor vel quam.</p>
				<p>Aliquam sit amet vehicula nisl. Proin dictum iaculis libero, non tempor arcu facilisis in. Quisque non ullamcorper elit. Sed sollicitudin, risus ac vestibulum accumsan, nisi ipsum suscipit metus, et ultricies dolor elit eu mauris.</p>
			</div>
		</div>

		<div class="partner group">
			<figure class="partner__logo">
				<img src="" alt="">
			</figure>
			<div class="partner__text">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis dui aliquet, vestibulum mauris vitae, luctus arcu. Nullam vitae dictum risus. Donec quis efficitur magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor tellus sed quam gravida pretium. Sed ut gravida enim, vel gravida nibh. Proin eget iaculis neque. Ut ligula odio, pharetra sit amet volutpat non, auctor vel quam.</p>
				<p>Aliquam sit amet vehicula nisl. Proin dictum iaculis libero, non tempor arcu facilisis in. Quisque non ullamcorper elit. Sed sollicitudin, risus ac vestibulum accumsan, nisi ipsum suscipit metus, et ultricies dolor elit eu mauris.</p>
			</div>
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