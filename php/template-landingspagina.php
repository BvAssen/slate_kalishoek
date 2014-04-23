<?php
/*
Template Name: Landingspagina template
*/
?>
<?php get_header(); ?>
	<div>
		<div class="u-gridContainer">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="u-col12">
				<h2><?php the_title(); ?></h2>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

				
				</div>


			</article>
			<div class="Call u-col12">
				Neem direct <span class="Call-button"><a href="/contact">contact</a></span> op! 
			</div>

			<article class="u-col6" id="post-<?php the_ID(); ?>">
				
				
				<h2>Over ons</h2>
				<div>
					<h4 class="Blue-header">Het team van uw sleutelspecialist in Rhoon staat altijd voor u klaar</h4>
					<hr class="Line">
					<p><strong>Kalishoek slotenservice is een familiebedrijf/onderneming dat gespecialiseerd is in:</strong></p>
					<ul class="usp">
						<li class="icon check"> Het vervangen, repareren of plaatsen van sloten en cilinders </li>
						<li class="icon check"> Schadevrij openen van deuren en auto’s </li>
						<li class="icon check"> Leveren en ontwerpen van sluitplannen/sluitsystemen </li>
						<li class="icon check"> Bijmaken van alle soorten sleutels </li>
						<li class="icon check"> Inbraakwerend hang-en sluitwerk </li>
					</ul>
					<p><strong>Wij werken o.a voor:</strong></p>
					<ul class="usp">
						<li class="icon check"> Particulieren </li>
						<li class="icon check"> Bedrijven </li>
						<li class="icon check"> Gemeente </li>
						<li class="icon check"> Woningbouwverenigingen </li>
						<li class="icon check"> VVE’s </li>
						<li class="icon check"> Politie </li>
						<li class="icon check"> Deurwaarders</li>
						<li class="icon check"> Incassobureaus</li>
						<li class="icon check"> Makelaars</li>
					</ul>
					<p>Service staat bij ons hoog in het vaandel. Onze monteurs hebben jaren lang ervaring en de kennis in huis om u te kunnen voorzien van alle informatie die u nodig heeft en er voor te zorgen dat er altijd een passende oplossing gevonden wordt.</p>
					<p><a class="post-edit-link" href="http://kalishoek.lokaalgevonden.nl/wp-admin/post.php?post=11&amp;action=edit">Edit this entry.</a></p>

				</div>
			
			</article>
			
			<aside class="u-col6">

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