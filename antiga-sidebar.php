<div id="conteudo-direito"><!--Início Conteúdo Direito -->

<div id="destaque03" style="background:url(<?php echo (get_option('mo_banner')); ?>)">
 
 				<a id="aparedefumar" href="<?php echo (get_option('mo_link_banner')); ?>"></a>
				<div id="transparencia-destaque03"></div>
				<div id="destaque03-texto">
				<p><?php echo (get_option('mo_desc_banner')); ?>  <strong><a href="<?php echo (get_option('mo_link_banner')); ?>">Leia mais>></a></strong></p>
				</div>
</div><!--#destaque03 -->

<div id="destaque01">
		<?php $recent = new WP_Query("cat=4&showposts=2"); while($recent->have_posts()) : $recent->the_post();?>
        <div id="destaque01-superior">
                        
		<div id="destaque01-superior-imagem">
		<?php the_post_thumbnail( 'thumb-reblogando' ); ?>
		</div><!--#destaque01-superior-imagem -->
            
		<div id="destaque01-superior-texto">
        <p><?php echo excerpt( 40 ); //Imprime 35 palavras ?></p>
        <?php
		// Verifica se o meta Link está vazio ou não //
		$meta = get_post_meta(get_the_ID(), 'br_text', true);
		if ( $meta ) { ?>
		<a href="http://<?php echo ereg_replace("(https?)://", "", $meta); ?>" class="continue-externo" target="_blank">Leia mais>></a>
		<?php } else { echo ''; } ?>
		<?php wp_reset_query(); ?>
		</div><!--#destaque01-superior-texto -->
</div><!--#destaque01-superior -->
<?php endwhile; ?>

	<?php
	$category_id = get_cat_ID( 'Re-Blogando' );
	$category_link = get_category_link( $category_id );
    ?>

	<a href="<?php echo $category_link ?>" class="link-re">Ver todos</a>

</div>
             
	</div><!--Final Conteúdo Direito -->