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

<section class="hero overview-slider hero--overview">
	<?php
	if(have_rows('slide')) :
	while(have_rows('slide')) : the_row();
	$image = get_sub_field('slide_image');
	if( !empty($image) ):
	$url = $image['url'];
	$title = $image['title'];
	$alt = $image['alt'];
	$caption = $image['caption'];

	// thumbnail
	$size = 'large';
	$thumb = $image['sizes'][ $size ];
	?>
	<div class="slide" style="background-image: url(<?php echo $thumb; ?>);">
		<div>

		<?php the_sub_field('slide_text'); ?>

		<a href="" class="button button--hero">Learn More <span>&rsaquo;</span></a>
		</div>
	</div>
	<?php
	endif;
	endwhile;
	endif;
	?>
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
			<p>
				<span>NOT SURE WHAT TYPE OF HELP YOU NEED?</span>
				<span>Request and evaluation now <span class="arrow">&rsaquo;</span></span>
			</p>
		</div>
	</div>
	<div class="contact__dropdown--form group">
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
					<button class="button button--hero">Submit <span>&rsaquo;</span></button>
				</div>
			</form>
		</div>
	</div>

	<div class="overview__announcements group">
		<?php 
		// $post_list = array(50,56,44,54,48,46,52);
		query_posts(array(
		    'showposts' => 1, 
		    'order' => 'DESC',
		    'post_type' => 'post')); 
		while (have_posts()) { the_post(); 
		?>
		<div class="news overview--news col-3">
			<time datetime="">April 01 2015</time>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
			<a href="<?php the_permalink(); ?>" class="button">Read More <span class="arrow">&rsaquo;</span></a>
		</div>
		<?php } ?>
		<?php wp_reset_query(); ?>
		<div class="testimonials overview--testimonials col-6">
		<h2>What our customers are saying</h2>
		<div class="testimonial__wrap">
		<?php if(is_page('6')){ ?>
			<?php 
			// $post_list = array(50,56,44,54,48,46,52);
			query_posts(array(
			    'showposts' => 3, 
			    'cat' => 5,
			    'post_type' => 'testimonial')); 
			while (have_posts()) { the_post(); 
			?>
			<div class="testimonial">
				
				<?php the_content(); ?>
				<b>- <?php the_title(); ?> -</b>
				<i><?php the_field('company_name'); ?></i>
			</div>
			<?php } ?>
			<?php wp_reset_query(); ?>
		<?php }else if(is_page('8')){?>
			<?php 
			// $post_list = array(50,56,44,54,48,46,52);
			query_posts(array(
			    'showposts' => 3, 
			    'cat' => 7,
			    'post_type' => 'testimonial')); 
			while (have_posts()) { the_post(); 
			?>
			<div class="testimonial">
				<?php the_content(); ?>
				<b>- <?php the_title(); ?> -</b>
				<i><?php the_field('company_name'); ?></i>
			</div>
			<?php } ?>
			<?php wp_reset_query(); ?>
		<?php }else if(is_page('10')){?>
			<?php 
			// $post_list = array(50,56,44,54,48,46,52);
			query_posts(array(
			    'showposts' => 3, 
			    'cat' => 6,
			    'post_type' => 'testimonial')); 
			while (have_posts()) { the_post(); 
			?>
			<div class="testimonial">
				<?php the_content(); ?>
				<b>- <?php the_title(); ?> -</b>
				<i><?php the_field('company_name'); ?></i>
			</div>
			<?php } ?>
			<?php wp_reset_query(); ?>
		<?php }?>
		</div>
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
		<?php if(is_page('6')){ ?>
			<?php 
			// $post_list = array(50,56,44,54,48,46,52);
			query_posts(array(
			    'showposts' => 3, 
			    'cat' => 5,
			    'post_type' => 'partner')); 
			while (have_posts()) { the_post(); 
			$logo = get_field('partner_logo');
			if( !empty($logo) ):
			$logourl = $logo['url'];
			$logotitle = $logo['title'];
			$logoalt = $logo['alt'];
			$logocaption = $logo['caption'];

			// thumbnail
			$logosize = 'large';
			$logothumb = $logo['sizes'][ $size ];
			?>
			<figure class="partner--logo">
				<img src="<?php echo $thumb; ?>" alt="">
			</figure>
			<?php } ?>
			<?php wp_reset_query(); ?>
		<?php }else if(is_page('8')){?>
			<?php 
			// $post_list = array(50,56,44,54,48,46,52);
			query_posts(array(
			    'showposts' => 3, 
			    'cat' => 7,
			    'post_type' => 'partner')); 
			while (have_posts()) { the_post(); 
			$logo = get_field('partner_logo');
			if( !empty($logo) ):
			$logourl = $logo['url'];
			$logotitle = $logo['title'];
			$logoalt = $logo['alt'];
			$logocaption = $logo['caption'];

			// thumbnail
			$logosize = 'large';
			$logothumb = $logo['sizes'][ $size ];
			?>
			<figure class="partner--logo">
				<img src="<?php echo $thumb; ?>" alt="">
			</figure>
			<?php } ?>
			<?php wp_reset_query(); ?>
		<?php }else if(is_page('10')){?>
			<?php 
			// $post_list = array(50,56,44,54,48,46,52);
			query_posts(array(
			    'showposts' => 3, 
			    'cat' => 6,
			    'post_type' => 'partner')); 
			while (have_posts()) { the_post(); 
			$logo = get_field('partner_logo');
			if( !empty($logo) ):
			$logourl = $logo['url'];
			$logotitle = $logo['title'];
			$logoalt = $logo['alt'];
			$logocaption = $logo['caption'];

			// thumbnail
			$logosize = 'large';
			$logothumb = $logo['sizes'][ $size ];
			?>
			<figure class="partner--logo">
				<img src="<?php echo $thumb; ?>" alt="">
			</figure>
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/alvarion.jpg" alt="">
			</figure>
			<?php } ?>
			<?php wp_reset_query(); ?>
		<?php }?>


		<!-- <figure class="partner--logo">
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
		<figure class="partner--logo">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/alvarion.jpg" alt="">
		</figure>
		<figure class="partner--logo">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/alvarion.jpg" alt="">
		</figure>
		<figure class="partner--logo">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/alvarion.jpg" alt="">
		</figure> -->
	</div>
</section>

<?php
}
//
genesis();