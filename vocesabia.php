<?php
require_once(ABSPATH . '/wordpress/wp-blog-header.php'); // <-- EDIT THAT SO THE PATH IS RIGHT
define('WP_USE_THEMES', false);
$my_query = new WP_Query('showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();
?>
<?php the_excerpt(); ?><?php the_title(); ?><?php the_content(); ?>
<?php endwhile; ?>