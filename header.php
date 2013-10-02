<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Imprimi o tag <title> baseado no que est� sendo visto.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Adiciona o nome do Blog/Site.
	bloginfo( 'name' );

	// Adiciona a descri��o do Blog/Site na Home/FrontPage.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Adiciona o n�mero da p�gina, se necess�rio.
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

</head>

<body onload="vai(), comecar();">
<div id="wrapper" class="hfeed">
	<div id="cabecalho">
    <a href="<?php echo home_url( '/' ); ?>" id="logo"></a>
    
    <div id="cadastre-se">
	<a href="<?php echo home_url( '/' ); ?>fale-conosco" id="botao-cadastre-se"></a>
	</div>

	<div class="linguas">
<?php
  global $q_config;
  if(is_404()) $url = get_option('home'); else $url = '';
  echo '<ul id="headerMenuSystem">';

  foreach(qtrans_getSortedLanguages() as $language)
  {
    $link = qtrans_convertURL('', $language);

    if($_SERVER["HTTPS"] == "on")
      $link = preg_replace('#^http://#','https://', $link);

    echo '<div class="class-'.$language.'"><a class="a-class-'.$language.'" href="'.$link.'"';
    echo ' hreflang="'.$language.'" title="'.$q_config['language_name'][$language].'"';
    echo '></a></div>';
  }

  echo '</ul>';
?>
	
    </div><!-- .linguas -->

	</div><!-- Final #cabecalho -->

			<nav id="access" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->

	<div id="geral"><!--In�cio #geral -->
