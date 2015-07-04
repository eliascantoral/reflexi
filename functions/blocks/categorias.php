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

function get_categoriasbox(){
        $args = array(
          'orderby' => 'name',
          'order' => 'ASC',
          'hide_empty'               => 0,
          );
        $categories = get_categories($args);
        $count = 0;
            ?><div class="row"><?php
                foreach($categories as $category) {
                    //var_dump($category);
                    if($count==0) echo '<div class="row">';
                    $count++;
            ?>
                  <div class="col-xs-12 col-sm-3 category-box-row">
                      <div class="category-box">
                            <?php $catimage = get_field("imagen",$category->taxonomy."_".$category->term_id);?>                            
                            <a href="<?php echo get_category_link( $category->term_id ); ?>" >  
                              <h4><?php echo $category->name;?> </h4>
                              <img src="<?php echo $catimage?$catimage:get_template_directory_uri().'/images/categoria-default.jpg';?>" width="150px">
                            </a>
                      </div>
                      <?php /*?>
                            <?php if($catimage){?>                      
                      <div class="product_category_box">
                            <a href="<?php echo get_category_link( $category->term_id ); ?>" >   
                                <img src="<?php echo $catimage;?>" alt="Producto" height="90%" class="alignleft"/>                                      
                                <h4><?php echo $category->name;?> </h4>
                            </a>                           
                      </div>
                            <?php }else{?>
                      <div class="product_category_box">
                            <a href="<?php echo get_category_link( $category->term_id ); ?>" >                                
                                <h4><?php echo $category->name;?></h4>
                            </a>                          
                      </div>                                
                            <?php }?>                          
                      <?php */?>
                  </div>                         
            <?php 
                    if($count==4){echo '</div>';$count=0;}
                }
            if($count!=0){echo '</div>';}
           ?></div><?php                
}