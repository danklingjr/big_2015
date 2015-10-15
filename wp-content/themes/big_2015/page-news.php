<?php

/*
Template Name: News
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

<section class="news--page group">
	<div class="news__wrap col-9 group">
		<article class="news--article">
			<time datetime="">April 01 2015</time>
			<h2>BIG Accounces Expansion</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis facilisis erat, condimentum pellentesque quam iaculis a. Duis consequat diam bibendum consequat laoreet. Maecenas accumsan aliquam lacus vel viverra. Quisque eu eros ullamcorper ante suscipit vestibulum at et est. Nullam eget ante fringilla, accumsan sapien a, aliquet mauris. Ut eleifend, justo vitae interdum lacinia, tortor justo ultrices mauris, id feugiat diam turpis et purus.</p>
			<a class="button button--black">Read More <span>&rsaquo;</span></a>
		</article>
		<article class="news--article">
			<time datetime="">April 01 2015</time>
			<h2>BIG Accounces Expansion</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis facilisis erat, condimentum pellentesque quam iaculis a. Duis consequat diam bibendum consequat laoreet. Maecenas accumsan aliquam lacus vel viverra. Quisque eu eros ullamcorper ante suscipit vestibulum at et est. Nullam eget ante fringilla, accumsan sapien a, aliquet mauris. Ut eleifend, justo vitae interdum lacinia, tortor justo ultrices mauris, id feugiat diam turpis et purus.</p>
			<a class="button button--black">Read More <span>&rsaquo;</span></a>
		</article>
		<article class="news--article">
			<time datetime="">April 01 2015</time>
			<h2>BIG Accounces Expansion</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis facilisis erat, condimentum pellentesque quam iaculis a. Duis consequat diam bibendum consequat laoreet. Maecenas accumsan aliquam lacus vel viverra. Quisque eu eros ullamcorper ante suscipit vestibulum at et est. Nullam eget ante fringilla, accumsan sapien a, aliquet mauris. Ut eleifend, justo vitae interdum lacinia, tortor justo ultrices mauris, id feugiat diam turpis et purus.</p>
			<a class="button button--black">Read More <span>&rsaquo;</span></a>
		</article>
		<article class="news--article">
			<time datetime="">April 01 2015</time>
			<h2>BIG Accounces Expansion</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis facilisis erat, condimentum pellentesque quam iaculis a. Duis consequat diam bibendum consequat laoreet. Maecenas accumsan aliquam lacus vel viverra. Quisque eu eros ullamcorper ante suscipit vestibulum at et est. Nullam eget ante fringilla, accumsan sapien a, aliquet mauris. Ut eleifend, justo vitae interdum lacinia, tortor justo ultrices mauris, id feugiat diam turpis et purus.</p>
			<a class="button button--black">Read More <span>&rsaquo;</span></a>
		</article>
	</div>
	<aside class="news__sidebar col-3">
		<div class="sidebar__group">
			<h3>Categories</h3>
			<ul>
				<li>Lorem Ipsum</li>
				<li>Category</li>
				<li>Another Cool One</li>
				<li>This thing</li>
				<li>Oh ya!</li>
				<li>Blueberry Crumb Cake</li>
				<li>More News</li>
				<li>Kinda News</li>
				<li>This News</li>
			</ul>
		</div>

		<div class="sidebar__group">
			<h3>Archives</h3>
			<ul>
				<li>July 2015</li>
				<li>June 2015</li>
				<li>May 2015</li>
				<li>April 2015</li>
				<li>March 2015</li>
				<li>February 2015</li>
				<li>January 2015</li>
				<li>December</li>
			</ul>
		</div>
	</aside>
</section>


<?php
}
//
genesis();