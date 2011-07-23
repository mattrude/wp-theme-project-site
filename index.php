<?php get_header(); ?>
	<div id="title-container"><span>Blog</span></div>
	<?php if (have_posts()) : ?>
		<!--Starting "The Loop"-->
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1 class="single-title entry-title">
					<?php if (is_single()) {
						the_title();
        				} else { ?>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					<?php } ?>
				</h1>
				<div class="entry-content entry">
					<?php the_content(); ?>
				</div><!--close entry class-->
				<?php if ( is_single() ) { ?>
					<!--Adding Related Entries if Yet Another Related Posts Plugin is installed-->
					<div class="related-entries">
        					<?php if (function_exists('related_entries')) { echo related_entries(); }?>
					</div>
				<?php } ?>
			</div><!--close post class-->
		<?php endwhile; ?>
		<!--The Loop has ended-->	
	<?php endif; ?>
<?php get_footer(); ?>
