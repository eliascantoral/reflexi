<?php
/*
Template Name: Home page
*/
get_header(); ?>

<div class="row">
  <div class="col-md-4">
     
                <?php get_categoriaslist();?>
               

                 <?php get_marcaslist();?>  
  </div>    
    <div class="col-md-8">a
        <?php //get_articulobox(2);?>        
    </div>
</div>

<?php get_footer();?>