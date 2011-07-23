<?php get_header(); ?>
	<div id="title-container"><span><?php the_title(); ?></span></div>
	<?php if (have_posts()) : ?>
		<!--Starting "The Loop"-->
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="entry-content entry">
					<?php the_content(); ?>
				</div><!--close entry class-->
			</div><!--close post class-->
		<?php endwhile; ?>
		<!--The Loop has ended-->	
	<?php endif; ?>
<?php get_footer(); ?>
