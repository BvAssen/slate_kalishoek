<?php get_header(); ?>

	<div>
		<div class="u-gridContainer">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article class="u-col6" id="post-<?php the_ID(); ?>">
				<?php if(!is_front_page()) { ?>
				<h2><?php the_title(); ?></h2>
				<?php } ?>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

				
				</div>
			</article>
		
		<?php endwhile; endif; ?>

			<div class="Sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>