<?php /* Template name: M&eacute;dicos */ get_header(); ?>

	<div id="conteudo-interno-esquerda">
	<div id="conteudo-interno-esquerda-texto">

	<div id="breadcrumb"><?php the_breadcrumb(); ?></div>

		<h1><?php the_title(); ?></h1>
		<div id="medicos"><!--Início Médicos -->
		
		<?php $loop = new WP_Query(); $loop->query('post_type=medicos'); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div id="medico">
			<div class="foto"><?php the_post_thumbnail( 'thumb-medicos' ); ?></div>
			<div class="conteudo">
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
			</div><!-- .conteudo -->
		</div><!-- #medico -->

		<?php endwhile; ?>

		</div><!--Final Médicos -->
            
</div><!-- conteudo-interno-esquerda-texto -->
</div><!-- conteudo-interno-esquerda -->

<?php get_sidebar( interna ); ?>
	

<?php get_footer(); ?>