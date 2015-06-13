<?php get_header(); ?>
<div class="row">
  <div class="col-md-4">    
    <?php get_categoriaslist();?>
    <?php get_marcaslist();?>  
  </div>    
    <div class="col-md-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <section id="content" role="main">
                <h2><?php echo the_title();?></h2>
                <img src="<?php echo get_field('logo');?>" width="200px" class="alignleft">
                <?php echo get_field('descripcion');?>
            </section> 
            <section id="content" role="main">                
                <h3>Productos</h3>
                <?php get_productosbymarca(get_the_ID());?>
            </section>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>