<?php
/*
Template Name: App template
*/
?>
<?php get_header(); ?>
	<div>
		<div class="u-gridContainer">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article class="u-col6" id="post-<?php the_ID(); ?>">
				
				<h2><?php the_title(); ?></h2>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

				
				</div>
			</article>
			
			<aside class="u-col6">
				<div class="sidebarpic2">
					<img src="/files/2014/04/24uur.jpg" class="u-border">
				
				</div>


			<aside>

		<?php endwhile; endif; ?>

			
		</div>
	</div>

<?php get_footer(); ?>