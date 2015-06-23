<?php get_header(); ?>
<div class="row">
  <div class="col-md-3">    
    <?php get_categoriaslist();?>
    <?php get_marcaslist();?>  
  </div>    
    <div class="col-md-9">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <section id="content" role="main">
                <h2><?php echo the_title();?></h2>
                <div class="product-galery alignleft">
                    <?php 
                        $imagenes = get_field('imagenes');
                        if($imagenes){
                            ?>
                                <div class="main-image">
                                  <img src="<?php echo $imagenes[0][imagen];?>" alt="Placeholder" class="product-image">
                                </div>   
                                <ul class="thumbnails">
                                    <?php
                                        for($i=0;$i<sizeof($imagenes);$i++){
                                            ?>
                                    <li><a href="<?php echo $imagenes[$i][imagen];?>"><img class="thumbnails-image" src="<?php echo $imagenes[$i][imagen];?>" alt="Thumbnails"></a></li>                        
                                            <?php 
                                        }
                                    ?>
                                 </ul>                                 
                                <?php
                        }
                     ?>                                       
                </div>
                <?php echo get_field('descripcion');?>
            </section> 
        <div class="clear"></div>
                <?php 
                    $document = get_field('documentos');
                    if($document){?>
                    <section id="productdocs" role="main"> 
                        <h3>Documentos</h3>
                        <div class="row">
                            <?php for($i=0;$i<sizeof($document);$i++){?>
                                <div class="col-xs-6 col-md-3">
                                    <div class="thumbnail">
                                        <a href="<?php echo $document[$i][documento];?>" download>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/download.png" alt="Descargar">                                    
                                        </a>
                                        <div class="caption" align="center">
                                            <a href="<?php echo $document[$i][documento];?>" download><h4><?php echo $document[$i][nombre];?></h4></a>
                                        </div>
                                    </div>
                                </div>                        
                            <?php }?>                            
                        </div>
                    </section>
                    <?php }?>   
                <?php 
                    $otherproducts = get_field('productos_relacionados');
                    if($otherproducts){?>
                        <section id="content" role="main">                
                        <h3>Productos relacionados</h3>
                        <?php 
                            for($i=0;$i<sizeof($otherproducts);$i++){
                                get_producto($otherproducts[$i]);
                            }
                        ?>
                        </section>                    
                    <?php }
                ?>            
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>
  <script>
    $(document).ready(function () {
      $('.thumbnails').simpleGal({
        mainImage: '.product-image'
      });
    });
  </script>