<?php
/*
Template Name: Contact template
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
		<?php endwhile; endif; ?>
	
			<aside class="u-col6">
				<div class="Contactbar">
					<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
					<div id="map_canvas"></div>
					<div class="Contactbar-form">
					<?php echo do_shortcode('[gravityform id="1" name="Contact" title="false"]'); ?>
					</div>
				</div>
			</aside>
		</div>
	</div>

<?php get_footer(); ?>