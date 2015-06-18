<?php
/*
Template Name: Home page
*/
get_header(); ?>
<link href="<?php echo get_template_directory_uri(); ?>/style/animate.min.css" rel="stylesheet">
<div class="row">
  <div class="col-md-4">
        <?php get_categoriaslist();?>
        <?php get_marcaslist();?>  
  </div>    
    <div class="col-md-9">
<div id="carousel-example-generic" class="carousel slide">
      <!-- Indicators 
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
        -->
      <!-- Wrapper for slides -->
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
        <!-- First slide -->
 <!--       <div class="item active deepskyblue">

          <div class="carousel-caption">
            <h3 data-animation="animated bounceInLeft">
              This is the caption for slide 1
            </h3>
            <h3 data-animation="animated bounceInRight">
              This is the caption for slide 1
            </h3>
            <button class="btn btn-primary btn-lg" data-animation="animated zoomInUp">Button</button>
          </div>
        </div> <!-- /.item -->

        <!-- Second slide -->
<!--        <div class="item skyblue">
          <div class="carousel-caption">
            <h3 class="icon-container" data-animation="animated bounceInDown">
              <span class="glyphicon glyphicon-heart"></span>
            </h3>
            <h3 data-animation="animated bounceInUp">
              This is the caption for slide 2
            </h3>
            <button class="btn btn-primary btn-lg" data-animation="animated zoomInRight">Button</button>
          </div>
        </div><!-- /.item -->

        <!-- Third slide -->
<!--        <div class="item darkerskyblue">
          <div class="carousel-caption">
            <h3 class="icon-container" data-animation="animated zoomInLeft">
              <span class="glyphicon glyphicon-glass"></span>
            </h3>
            <h3 data-animation="animated flipInX">
              This is the caption for slide 3
            </h3>
            <button class="btn btn-primary btn-lg" data-animation="animated lightSpeedIn">Button</button>
          </div>
        </div><!-- /.item -->

      </div><!-- /.carousel-inner -->

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>       
    </div>
</div>


    
<script src="<?php echo get_template_directory_uri(); ?>/js/demo.js"></script>

<?php get_footer();?>
