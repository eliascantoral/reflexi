<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_marcaslist(){

        // WP_Query arguments
        $args = array (
                'post_type'              => 'marca',
                'post_status'            => 'publish',
                'posts_per_page'         => '-1',
                'order'                  => 'ASC',
                'orderby'                => 'title',
        );

        // The Query
        $the_query = new WP_Query( $args ); 
        // The Loop
        if ( $the_query->have_posts() ) {
            ?><div class="list-group"><?php 
                while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?><a href="<?php echo get_permalink(); ?>" class="list-group-item"><?php echo the_title();?></a><?php                                            
                }
                ?></div><?php 
        } else {
                // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
}