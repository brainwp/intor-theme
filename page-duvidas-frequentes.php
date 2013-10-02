<?php /* Template name: D&uacute;vidas Frequentes */ get_header(); ?>
				

<div id="conteudo-interno"><!--Início Conteúdo Interno -->
    	<div id="conteudo-interno-esquerda">
		<div id="conteudo-interno-esquerda-texto">

        <div id="breadcrumb"><?php the_breadcrumb(); ?></div>
        
        <h1><?php the_title(); ?></h1>

		<div id="post">
			<?php
            // Set up the arguments for retrieving the pages
            $args = array(
                'post_type' => 'page',
                'numberposts' => -1,
                'post_status' => null,
            // $post->ID gets the ID of the current page
                'post_parent' => $post->ID,
                'order' => ASC,
                'orderby' => post_date
                );
             $subpages = get_posts($args);
             // Just another WordPress Loop
             foreach($subpages as $post) :
                setup_postdata($post);
             ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo excerpt( 48 ); //Imprime 50 palavras ?></p>
            <p><a href="<?php the_permalink(); ?>" class="continue-reading">Leia mais>></a></p>
            <?php endforeach; ?>
		</div><!-- #post -->
       
        </div><!-- #conteudo-interno-esquerda-texto -->
        </div><!-- #conteudo-interno-esquerda -->

</div><!--#conteudo-interno-->

<?php get_sidebar( interna ); ?>
<?php get_footer(); ?>