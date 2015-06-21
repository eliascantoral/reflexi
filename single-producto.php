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
                <div class="product-galery alignleft">
                    <?php 
                        $imagenes = get_field('imagenes');
                        if($imagenes){
                            ?>
                                <div class="main-image">
                                  <img src="<?php echo $imagenes[0][imagen];?>" alt="Placeholder" class="custom">
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
            <section id="productdocs" role="main"> 
                <?php 
                    $document = get_field('documentos');
                    if($document){
                        print_array($document);
                    }else{
                        echo "No hay documentos.";
                    }
                    
                ?>
            </section>        
            <section id="content" role="main">                
                <h3>Productos</h3>
                <?php get_productosbymarca(get_the_ID());?>
            </section>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>
  <script>
    $(document).ready(function () {
      $('.thumbnails').simpleGal({
        mainImage: '.custom'
      });
    });
  </script>