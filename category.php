<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div id="conteudo-interno"><!--Início Conteúdo Interno -->
    	<div id="conteudo-interno-esquerda">
		<div id="conteudo-interno-esquerda-texto">
        
        <div id="breadcrumb"><?php the_breadcrumb(); ?></div>
        
		<div id="post">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
	</div>

<?php endwhile; ?>

	<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>

<?php else : ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1>Not Found</h1>
	</div>

<?php endif; ?>

		</div><!-- #post -->
       
        </div><!-- #conteudo-interno-esquerda-texto -->
        </div><!-- #conteudo-interno-esquerda -->

</div><!--#conteudo-interno-->

<?php get_sidebar( interna ); ?>
<?php get_footer(); ?>