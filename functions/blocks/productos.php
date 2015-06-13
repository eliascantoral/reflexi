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
    ?>
<div class="product_box">
    <div class="product_box_header">
        <a href="<?php echo get_permalink($producto); ?>"><img src="<?php echo $image;?>" width="100%"></a>
        
    </div>
    <div class="product_box_info" align="center">
        <strong><a href="<?php echo get_permalink($producto); ?>"><?php echo get_the_title($producto);?></a></strong>
    </div>
</div>
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