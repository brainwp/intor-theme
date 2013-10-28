<?php /* Template name: Publica&ccedil;&otilde;es */ get_header(); ?>
				
    	<div id="conteudo-interno-esquerda">
		<div id="conteudo-interno-esquerda-texto">
        
        <div id="breadcrumb"><?php the_breadcrumb(); ?></div>
        
        <h1><?php the_title(); ?></h1>

		<div id="post">
<?php if (have_posts()) : ?>
<?php
$thePosts = get_posts('numberposts=10&category=1');
foreach($thePosts as $post) :
setup_postdata($post);
?>
       	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php echo excerpt( 50 ); //Imprime 50 palavras ?></p>
        <p><a href="<?php the_permalink(); ?>" class="continue-reading">Leia mais>></a></p>
        <?php endforeach; ?>
		<?php else : ?>
        No Results
		<?php endif; ?>
        

		</div><!-- #post -->
       
        </div><!-- #conteudo-interno-esquerda-texto -->
        </div><!-- #conteudo-interno-esquerda -->


<?php get_sidebar( interna ); ?>
<?php get_footer(); ?>