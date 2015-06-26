<?php get_header(); ?>
<div class="row">
  <div class="col-md-3">
        <?php get_categoriaslist();?> 
  </div>    
    <div class="col-md-9">
        <section id="content" role="main">
        <header class="header">
            <h1 style="text-align: left;"><strong><?php single_cat_title(); ?></strong></h1>
        <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
        </header>
            <p><?php echo category_description(); ?></p>
        <?php 
            get_productsbycategory($_GET["cat"]);
        ?>
        </section>
    </div>
</div>        
<?php get_footer(); ?>