<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div id="conteudo-interno"><!--Início Conteúdo Interno -->
<div id="conteudo-interno-esquerda">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php if ( is_day() ) : ?>
							<?php printf( __( 'Daily Archives: %s', 'twentyeleven' ), '<span>' . get_the_date() . '</span>' ); ?>
						<?php elseif ( is_month() ) : ?>
							<?php printf( __( 'Monthly Archives: %s', 'twentyeleven' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyeleven' ) ) . '</span>' ); ?>
						<?php elseif ( is_year() ) : ?>
							<?php printf( __( 'Yearly Archives: %s', 'twentyeleven' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentyeleven' ) ) . '</span>' ); ?>
						<?php else : ?>
							<?php _e( 'Blog Archives', 'twentyeleven' ); ?>
						<?php endif; ?>
					</h1>
				</header>


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); $count++;
				$class_noticias = 'cada-noticia-archive';
				if ( $count % 2 == 0 ) {
					$class_noticias = 'ultima-cada-noticia-archive';
				}
				?>

	<div class="<?php echo $class_noticias; ?>">
    	<div <?php thumbnail_bg( 'noticias-home' ); ?> class="thumb-cada-noticia-home">
        </div><!-- .thumb-cada-noticia-home -->
        <div class="titulo-cada-noticia-archive">
        	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div><!-- .titulo-cada-noticia-archive -->
    	<div class="content-cada-noticia-archive">
        	<?php the_excerpt(); ?>
        </div><!-- .content-cada-noticia-archive -->
    </div><!-- .<?php echo $class_noticias; ?> -->

				<?php endwhile; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

</div><!-- #conteudo-interno-esquerda -->
</div><!--#conteudo-interno-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>