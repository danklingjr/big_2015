<?php

/*
Template Name: Contact Us
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

<section class="contact__form group">
	<p class="contact__text col-3">Contact BIG with your questions or comments about your IT needs so you can get the service you deserve.</p>
	<div class="form__wrap col-9 group">
		<form action="" method="post">
			<div class="dropdown col-4">
				<span>I am contacting in reference to...</span>
				<ul>
					<li>option 1</li>
					<li>option 2</li>
					<li>option 3</li>
					<li>option 4</li>
				</ul>
			</div>
			<div class="input col-4">
				<input type="text" name="" placeholder="First Name" value="">
			</div>
			<div class="input col-4">
				<input type="text" name="" placeholder="Last Name" value="">
			</div>

			<div class="input col-4">
				<input type="text" name="" placeholder="Company Name" value="">
			</div>
			<div class="input col-4">
				<input type="text" name="" placeholder="Phone Number" value="">
			</div>
			<div class="input col-4">
				<input type="text" name="" placeholder="Email" value="">
			</div>

			<div class="input col-8">
				<input type="text" name="" placeholder="Comments" value="">
			</div>
			<div class="input input--submit col-4">
				<button class="button button--hero">Learn More <span>&rsaquo;</span></button>
			</div>
		</form>
	</div>
</section>

<section class="contact__details group">
	<div class="contact--group col-4">
		<h2><?php 
			$page = get_queried_object();
			$parent_title = get_the_title($page->post_parent);
			echo $parent_title;
			?></h2>
		<?php if (is_tree(6)) {?>
	    
		<?php
		if (have_rows('wireless_technologies', 'option')) :
		while(have_rows('wireless_technologies', 'option')) : the_row();
		?>
		<div class="contact">
			<h3><?php the_sub_field('name', 'option'); ?></h3>
			<p><?php the_sub_field('title', 'option'); ?></p>
			<p><?php the_sub_field('email', 'option'); ?></p>
		</div>
		<?php 
		endwhile;
		endif;
		?>

	    <?php } else if (is_tree(8)) {?>
	    
		<?php
		if (have_rows('networking_security', 'option')) :
		while(have_rows('networking_security', 'option')) : the_row();
		?>
		<div class="contact">
			<h3><?php the_sub_field('name', 'option'); ?></h3>
			<p><?php the_sub_field('title', 'option'); ?></p>
			<p><?php the_sub_field('email', 'option'); ?></p>
		</div>
		<?php 
		endwhile;
		endif;
		?>

	    <?php } else if (is_tree(10)) {?>
	    
		<?php
		if (have_rows('software_development', 'option')) :
		while(have_rows('software_development', 'option')) : the_row();
		?>
		<div class="contact">
			<h3><?php the_sub_field('name', 'option'); ?></h3>
			<p><?php the_sub_field('title', 'option'); ?></p>
			<p><?php the_sub_field('email', 'option'); ?></p>
		</div>
		<?php 
		endwhile;
		endif;
		?>

	    <?php } ?>
		
	</div>
	<div class="contact--group col-4">
		<h2>Corporate</h2>
		<?php
		if (have_rows('corporate', 'option')) :
		while(have_rows('corporate', 'option')) : the_row();
		?>
		<div class="contact">
			<h3><?php the_sub_field('name', 'option'); ?></h3>
			<p><?php the_sub_field('title', 'option'); ?></p>
			<p><?php the_sub_field('email', 'option'); ?></p>
		</div>
		<?php 
		endwhile;
		endif;
		?>

	</div>
	<div class="contact--group col-4">
		<h2>Support</h2>
		<?php
		if (have_rows('support', 'option')) :
		while(have_rows('support', 'option')) : the_row();
		?>
		<div class="contact">
			<h3><?php the_sub_field('name', 'option'); ?></h3>
			<p><?php the_sub_field('title', 'option'); ?></p>
			<p><?php the_sub_field('email', 'option'); ?></p>
		</div>
		<?php 
		endwhile;
		endif;
		?>

	</div>
</section>

<section class="contact__map group">
	<div class="contact--address col-5">
		<h2>Business Information Group, Inc.<br>BIG Wireless, LLC</h2>
		<p>
			<span>156 N. George Street</span>
			<span>Suite 100</span>
			<span>York, PA 17401</span>
		</p>
		<p>
			<span>(877) 508-9983</span>
			<span>(717) 854-9983</span>
		</p>
		<p>
			<span>Fax: (717) 854-1313</span>
		</p>
	</div>
	<div class="map col-7">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3057.9392109028445!2d-76.73113560000002!3d39.965111800000024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c88ea6b86674d7%3A0xe03af07ea9cae4f1!2s156+N+George+St%2C+York%2C+PA+17401!5e0!3m2!1sen!2sus!4v1444679151419" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>


<?php
}
//
genesis();