<?php get_header(); ?>
<div class="row">
  <div class="col-md-4">

                <?php get_categoriaslist();?>

                 <?php get_marcaslist();?>  

  </div>    
    <div class="col-md-8">a
        <section id="content" role="main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
            <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
            <?php endwhile; endif; ?>
            <footer class="footer">
            <?php get_template_part( 'nav', 'below-single' ); ?>
            </footer>
        </section>     
    </div>
</div>
<?php get_footer(); ?>