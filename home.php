<?php
/*
Template Name: Home page
*/
get_header(); ?>

<div class="row">
  <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Productos</div>
            <div class="panel-body">      
                <?php get_categoriaslist();?>
            </div>
        </div>               
        <div class="panel panel-primary">
            <div class="panel-heading">Nuestras Marcas</div>
            <div class="panel-body">
                 <?php get_marcaslist();?>  
            </div>
        </div>
  </div>    
    <div class="col-md-8">a
        <?php //get_articulobox(2);?>        
    </div>
</div>

<?php get_footer();?>