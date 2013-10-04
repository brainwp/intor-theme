<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 */
?>
	</div><!-- #main -->

	<div id="rodape"><!--Início Rodapé -->
    
        <div id="menus-rodape">
            <div class="menu-links">
            <?php
                $menu_obj = echo_name_menu( 'um' ); 
                wp_nav_menu( array('theme_location' => 'um', 'items_wrap'=> '<h3>'.esc_html($menu_obj->name).'</h3><ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>') );
            ?>
            </div><!-- .menu-links -->
            <div class="menu-links">
            <?php
                $menu_obj = echo_name_menu( 'dois' ); 
                wp_nav_menu( array('theme_location' => 'dois', 'items_wrap'=> '<h3>'.esc_html($menu_obj->name).'</h3><ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>') );
            ?>
            </div><!-- .menu-links -->
            <div class="menu-links">
            <?php
                $menu_obj = echo_name_menu( 'tres' ); 
                wp_nav_menu( array('theme_location' => 'tres', 'items_wrap'=> '<h3>'.esc_html($menu_obj->name).'</h3><ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>') );
            ?>
            </div><!-- .menu-links -->
        </div><!-- #menus-rodape -->
        
        <div class="direita-rodape">
            <div class="btn-rodape">
            	<a class="a-btn-rodape" href="<?php echo home_url('locais-de-atendimento'); ?>">Locais de Atendimento</a>
            </div><!-- .btn-rodape -->
            <div class="btn-rodape-final">
	            <a class="a-btn-rodape" href="<?php echo home_url('convenios'); ?>">Conv&ecirc;nios</a>
            </div><!-- .btn-rodape-final -->
            <div class="btn-rodape">
	            <a class="a-btn-rodape" href="<?php echo home_url('parceiros'); ?>">Parcerias</a>
            </div><!-- .btn-rodape -->
            <div class="btn-rodape-final">
	            <a class="a-btn-rodape" href="<?php echo home_url('contato'); ?>">Contato</a>
            </div><!-- .btn-rodape-final -->
            
            <div class="hack"></div>

        <div class="redes">
        	<p>Siga: </p>
            	<a class="a-facebook" href=""></a> <a class="a-twitter" href=""></a>
		</div><!-- .redes -->
    
		</div><!-- .direita-rodape -->
        
        <div class="hack"></div>
        
        <div class="bottom-rodape">
        
        	<div class="direitos">
            	<p>Todos os Direitos Reservados</p>
            </div><!-- .direitos -->
	        <div id="desenvolvido">
            <div class="wordpress">
            	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/wordpress.png" />
            </div><!-- .wordpress -->
            <div class="brasa">
	            <a href="http://www.brasa.art.br"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/brasa.png" /></a>
            </div><!-- .brasa -->
            </div>
        </div><!-- .bottom-rodape -->
      
	
    </div><!--Final Rodapé -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>