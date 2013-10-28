<?php /* Template name: Temas e Procedimentos */ get_header(); ?>
				

    	<div id="conteudo-interno-esquerda">
		<div id="conteudo-interno-esquerda-texto">

        <div id="breadcrumb"><?php the_breadcrumb(); ?></div>
        
        <h1><?php the_title(); ?></h1>

		<div id="post">
			<?php
            $args = array(
                'post_type' => 'page',
                'numberposts' => -1,
                'post_status' => null,
                'post_parent' => $post->ID, // gets the ID of the current page
                'order' => ASC,
                'orderby' => post_date,
                );
             $subpages = get_posts($args);
             // Just another WordPress Loop
             foreach($subpages as $post) :
                setup_postdata($post);
             ?>
			<div class="cada-post">

			<div class="thumb-cada-post">
            
            <a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'thumb-temas' );
            } else { ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thumb-temas-default.jpg" alt="<?php the_title(); ?>" />
            <?php } ?>
            </a>
			</div><!-- .thumb-cada-post -->

			<div class="content-cada-post">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p>
				<?php
					$excerpt = excerpt( 48 ); //Imprime 48 palavras
					echo $content = apply_filters('the_content', $excerpt);
				?>
				</p>
				<p><a href="<?php the_permalink(); ?>" class="continue-reading">Leia mais>></a></p>
			</div><!-- .content-cada-post -->	
			</div><!-- .cada-post -->
            <?php endforeach; ?>
		</div><!-- #post -->
       
        </div><!-- #conteudo-interno-esquerda-texto -->
        </div><!-- #conteudo-interno-esquerda -->


<?php get_sidebar( interna ); ?>
<?php get_footer(); ?>