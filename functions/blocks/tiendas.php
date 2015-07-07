<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_tiendas(){

        // WP_Query arguments
        $args = array (
                'post_type'              => 'tienda',
                'post_status'            => 'publish',
                'posts_per_page'         => '-1',
                'order'                  => 'ASC',
                'orderby'                => 'title',
        );

        // The Query
        $the_query = new WP_Query( $args ); 
        // The Loop
        if ( $the_query->have_posts() ) {
            ?>
                   <?php 
                        while ( $the_query->have_posts() ) {
                        ?> <div class="row"><?php
                                $the_query->the_post();?>
                                <div class="col-xs-12 col-sm-12 col-md-6" align="center">
                                    <div class="media">
                                      <div class="media-left hidden-xs">
                                          <?php echo get_the_post_thumbnail(); ?> 
                                      </div>
                                      <div class="media-body">
                                        <h4 class="media-heading"><?php echo the_title();?></h4>
                                        <?php echo get_field('descripcion');?>
                                      </div>
                                    </div>                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6" align="left">
                                    <iframe
                                      width="100%"
                                      height="225"
                                      frameborder="0" style="border:0"
                                      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCEAP2RDAsm51I4dL89sBs9LWrj0AbUSxA
                                      &q=<?php echo get_field('mapa');?>" allowfullscreen>
                                    </iframe>                                
                                </div>                                
                            </div>
                                <hr>
                                <?php 
                        }
                    ?>
            <?php 
        } else {
                // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
}