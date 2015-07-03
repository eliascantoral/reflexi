<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_homeinfopage(){
    $args = array (
            'post_type'              => array( 'page' ),
            'post_status'            => array( 'publish' ),            
            'meta_query' => array(
                array(
                    'key' => '_wp_page_template',
                    'value' => 'infopage.php', // template name as stored in the dB
                )
            ),
            'meta_query' => array(
                array(
                    'key' => 'homepage',
                    'value' => true, // template name as stored in the dB
                )
            ),
            'order'                  => 'ASC',
    );
    $the_query = new WP_Query( $args );
    // The Loop
    if ( $the_query->have_posts() ) {            
            while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                        <div class="col-lg-4">
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>
                            <img class="img-circle" src="<?php echo $url;?>" alt="Generic placeholder image" width="140" height="140">
                            <h2><?php echo get_the_title();?></h2>
                            <p>
                                <?php echo the_excerpt_max_charlength(get_the_ID(),400);?>
                            </p>
                            <p><a class="btn btn-default" href="<?php echo get_permalink(); ?>" role="button">Ver mas &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->        

                    <?php                 
                    
                   // echo '<li>' . get_the_title() . '</li>';
            }            
    } else {
            // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();        
}