<?php
/*
Template Name: Home page
*/
get_header(); ?>
<link href="<?php echo get_template_directory_uri(); ?>/style/animate.min.css" rel="stylesheet">
<div class="row">
  <div class="col-md-3">
        <?php get_categoriaslist();?> 
  </div>    
    <div class="col-md-9">
<div id="carousel-example-generic" class="carousel slide hidden-xs">
      <div class="carousel-inner" role="listbox">
                            <?php 
                                    //$pageslider = get_field("slider");
                                    $the_slider = get_field("slider_home","options");
                                    if($the_slider){
                                            for($i=0;$i<sizeof($the_slider);$i++){?>
                                                    <div class="item <?php echo $i==0?"active":"";?>">
                                                        <?php if($the_slider[$i][link]){?><a href="<?php echo get_permalink($the_slider[$i][link][0])?>"><?php }?>
                                                            <img class="first-slide" src="<?php echo $the_slider[$i][imagen]?>" alt="First slide">
                                                         <?php if($the_slider[$i][link]){?></a><?php }?>
                                                        <div class="carousel-caption">
                                                            <?php if($the_slider[$i][texto_1]){?>
                                                                <h3 data-animation="animated bounceInLeft"><?php echo $the_slider[$i][texto_1]?></h3>                                                            
                                                            <?php }?>
                                                            <?php if($the_slider[$i][texto_2]){?>
                                                                <h3 data-animation="animated bounceInRight"><?php echo $the_slider[$i][texto_2]?></h3>                                                                
                                                            <?php }?>
                                                        </div>
                                                    </div>	
                                            <?php }
                                    }

                            ?>
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>  
        <br>
        <div class="row">
            <h3>Productos recientes</h3>
            <?php get_homeproducts(4);?>            
        </div>
    </div>
</div>


    
<script src="<?php echo get_template_directory_uri(); ?>/js/demo.js"></script>

<?php get_footer();?>
