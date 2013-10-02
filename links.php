<?php /* Template name: Links */ get_header(); ?>					

<div id="conteudo-interno"><!--Início Conteúdo Interno -->
    	<div id="conteudo-interno-esquerda">
		<div id="conteudo-interno-esquerda-texto">

        <h1><?php the_title(); ?></h1>

<?php
        $links = get_bookmarks();
        foreach ($links as $link) {
            echo '<h3 class="link-nome">' . $link->link_name . '</h3>';
			echo '<a href="'. $link->link_url .'" class="link-url">' . $link->link_url . '</a>';
        }
?>
    	</div><!-- #conteudo-interno-esquerda-texto -->
        </div><!-- #conteudo-interno-esquerda -->

</div><!--#conteudo-interno-->

<?php get_sidebar( interna ); ?>
<?php get_footer(); ?>