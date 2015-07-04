<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<section id="content" role="main">
<header class="header">
<h1 class="entry-title"><?php printf( __( 'Resultados de la busqueda: %s', 'blankslate' ), get_search_query() ); ?></h1>
</header>
    <?php get_productosbysearch(get_search_query());?>
</section>
<?php get_footer(); ?>