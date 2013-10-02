<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>					

<div id="conteudo-interno"><!--Início Conteúdo Interno -->
    	<div id="conteudo-interno-esquerda">
		<div id="conteudo-interno-esquerda-texto">
        <div id="breadcrumb"><?php the_breadcrumb(); ?></div>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    	</div><!-- #conteudo-interno-esquerda-texto -->
        </div><!-- #conteudo-interno-esquerda -->

<?php endwhile; // end of the loop. ?>

</div><!--#conteudo-interno-->

<?php get_sidebar(  ); ?>
<?php get_footer(); ?>