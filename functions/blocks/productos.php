<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_productos($total){
    
}

function get_producto($producto){    
    $images = get_field('imagenes',$producto);
    //print_array($images);
    $image = $images[0][imagen];
    $marca = get_field('marca',$producto);
    //var_dump($marca);
    ?>
  <div class="col-sm-6">
 
    <!-- normal -->
    <div class="ih-item square effect1 left_and_right"><a href="<?php echo get_permalink($producto); ?>">
        <div class="img"><img src="<?php echo $image;?>" alt="img"></div>
        <div class="info">
          <h3><?php echo get_the_title($producto);?></h3>
          <p><?php echo get_the_title( $marca[0] ); ?> </p>
        </div></a></div>
    <!-- end normal -->
 
  </div>
<?php /*?>
<div class="product_box">
    <div class="product_box_header">
        <a href="<?php echo get_permalink($producto); ?>"><img src="<?php echo $image;?>" width="100%"></a>
        
    </div>
    <div class="product_box_info" align="center">
        <strong><a href="<?php echo get_permalink($producto); ?>"><?php echo get_the_title($producto);?></a></strong>
    </div>
</div>
 <?php */?>
    <?php
}

function get_productosbymarca($marca){    
    $productos = get_posts(array(
            'post_type' => 'producto',
            'meta_query' => array(
                    array(
                            'key' => 'marca',
                            'value' => '"' . $marca . '"',
                            'compare' => 'LIKE'
                    )
            )
    ));
    ?>
    <?php if( $productos ): ?>							
            <?php foreach( $productos as $producto ): ?>
                <?php get_producto($producto->ID);?>
            <?php endforeach; ?>							
    <?php endif;    
}

function get_homeproducts($elements = 4){
    $productos = get_posts(array(
            'post_type' => 'producto',
            'meta_query' => array(
                    array(
                            'key' => 'home',
                            'value' => '1',
                            'compare' => 'LIKE'
                    )
            ),
            'posts_per_page' => $elements,
            'order'                  => 'DESC',
    ));
    ?>
    <?php if( $productos ): ?>							
            <?php foreach( $productos as $producto ): ?>
                <?php get_producto($producto->ID);?>
            <?php endforeach; ?>							
    <?php endif;     
}

function get_productsbycategory($category){
    $productos = get_posts(array(
            'post_type' => 'producto',
            'cat'                    => $category,
            'posts_per_page' => -1,
            'order'                  => 'DESC',
    ));    
   ?>
    <?php if( $productos ): ?>							
            <?php foreach( $productos as $producto ): ?>
                <?php get_producto($producto->ID);?>
            <?php endforeach; ?>							
    <?php endif;      
}

function get_productosbysearch($s){
        $productos = array();
        // WP_Query arguments
        $args = array (
                'post_type'              => 'producto',                
                'post_status'            => 'publish',
                'order'                  => 'DESC',
                'posts_per_page'         => 20,
                'meta_query'	=> array(
                        'relation'		=> 'OR',
                        array(
                                'key'		=> 'descripcion',
                                'value'		=> $s,
                                'compare'	=> 'LIKE'
                        ),
                        array(
                                'key'		=> 'title',
                                'value'		=> $s,
                                'compare'	=> 'LIKE'
                        )
                )            
        );

        // The Query
        $the_query = new WP_Query( $args ); 
        // The Loop
        if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        array_push($productos, get_the_ID());                                          
                }
        }  
        $args = array (
                'post_type'              => 'producto',                
                'post_status'            => 'publish',
                'order'                  => 'DESC',   
                's'                      => $s,
                'posts_per_page'         => 20,
        );

        // The Query
        $the_query = new WP_Query( $args ); 
        // The Loop
        if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        if(!array_contain(get_the_ID(), $productos, 0)){array_push($productos, get_the_ID());}
                                                                  
                }
        }
        if(sizeof($productos)>0){
            for($i=0;$i<sizeof($productos);$i++){
                 get_producto($productos[$i]);
            }    
        }else{
            echo '<h3>Lo sentimos no se encontraron productos.</h3>';
        }
}