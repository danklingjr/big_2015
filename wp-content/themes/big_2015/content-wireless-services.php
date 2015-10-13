<?php if (is_tree(6)) {?>
	<?php if( have_rows('industry_link') ): ?>
    <?php while ( have_rows('industry_link') ) : the_row(); ?>
	<div class="box box--service col-3">
		<?php the_sub_field('industry_svg'); ?>
		<h2><?php the_sub_field('industry_title'); ?></h2>
		<p><?php the_sub_field('industry_text'); ?></p>
		<a href="<?php the_sub_field('industry_link'); ?>" class="button">Learn More <span>&rsaquo;</span></a>
	</div>
	<?php endwhile ?>
    <?php endif ?>
<?php } ?>