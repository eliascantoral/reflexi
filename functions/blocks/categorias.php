<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_categoriaslist(){
        $args = array(
          'orderby' => 'name',
          'order' => 'ASC',
          'hide_empty'               => 0,
          );
        $categories = get_categories($args);
            ?>
        
            <h3>Productos</h3>
           
                <div class="list-group"><?php 
                foreach($categories as $category) { 
                    ?><a href="<?php echo get_category_link( $category->term_id ); ?>" class="list-group-item"><?php echo $category->name;?></a><?php             
                }
            ?>
                </div>
           
        <?php 
}