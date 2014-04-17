<?php
/*
Template Name: Overons template
*/
?>
<?php get_header(); ?>
	<div>
		<div class="u-gridContainer">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article class="col6" id="post-<?php the_ID(); ?>">
				
				<h2><?php the_title(); ?></h2>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

				
				</div>
			</article>
			
			<aside class="col6">

				<article>
					<h3>Servicegericht</h3>
					<img src="/files/2014/04/over-ons1.jpg" class="u-border" style="float: right; padding: 3px 3px 0px 3px;">

					<p>
					Ons team van specialisten geeft nog om een servicegerichte dienstverlening. Zij hebben de kennis in huis om u te kunnen voorzien van alle informatie die u nodig hebt en staan voor u klaar met raad en daad.</p>

					
				</article>

				<article>
					<h3>Vriendelijk</h3>
					<img src="/files/2014/04/over-ons2.jpg" class="u-border" style="float: right; padding: 3px 3px 0px 3px;">

					<p>
Vriendelijkheid zien wij als uitermate belangrijk in de benadering van onze klanten. Dit zorgt voor een goede en soepele verstandhouding, en is volgens ons de enige manier van zaken doen. </p>
					
				</article>

				<article>
					<p class="small"></p>
					<h3>Flexibel</h3>
										<img src="/files/2014/04/over-ons3.jpg" class="u-border" style="float: right; padding: 3px 3px 0px 3px;" >

					<p>
				Wij zijn geen bedrijf dat moeilijk doet over tijd of dienstverlening. Ons team is flexibel en streeft naar een perfecte afhandeling van alle opdrachten en diensten.</p>

				</article>

			
			<aside>

		<?php endwhile; endif; ?>

			
		</div>
	</div>

<?php get_footer(); ?>