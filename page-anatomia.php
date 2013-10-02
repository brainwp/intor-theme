<?php /* Template name: Anatomia */ get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>					

<div id="conteudo-anatomia"><!--Início Conteúdo Anatomia -->

<div id="conteudo-anatomia-esquerda-figura"></div>

<?php get_sidebar( interna ); ?>

<div id="conteudo-anatomia-esquerda">

        <div id="breadcrumb"><?php the_breadcrumb(); ?></div>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

</div><!-- #conteudo-anatomia-esquerda -->

<?php endwhile; // end of the loop. ?>
				
</div><!--Final Conteúdo Anatomia-->

<?php get_footer(); ?>