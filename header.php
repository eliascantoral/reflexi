<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-theme.min.css">

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jqueryui/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>


<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

</head>
<body <?php body_class(); ?>>           
    <?php 
        $bg_color = get_field("header_color","options");
        $logo = get_field("logo","options");
        $promocenter = get_field("promo_center","options");
        $promoright = get_field("promo_right","options");
    ?>
    <div id="page_header" style="background-color: <?php echo $bg_color?$bg_color:"#09c"?>;">              
        <div class="container">
            <div class="row">
                <div id="header_p1" class="col-xs-6 col-sm-4"><?php if($logo){?><img src="<?php echo $logo;?>" height="80px"><?php }?></div>
                <div id="header_p2" class="col-xs-6 col-sm-4" align="center"><?php if($promocenter){?><img src="<?php echo $promocenter;?>" height="80px"><?php }?></div>
                <div class="clearfix visible-xs-block"></div>
                <div id="header_p3" class="col-xs-6 col-sm-4" align="right"><?php if($promoright){?><img src="<?php echo $promoright;?>" height="80px"><?php }?></div>
            </div>
        </div>
    </div>        
    <div class="container">
        <div class="navbar-wrapper">
          <div class="container">

            <nav class="navbar navbar-default navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                            <img alt="Brand" src="<?php echo get_template_directory_uri(); ?>/images/logomin.png" width="20px">
                    </a>
                                <?php 
                                $menu_args = array(
                                  'menu'            => 'Main Menu', 
                                  'container'       => 'container', 
                                  'container_class' => 'container_class', 
                                  'container_id'    => 'container_id',
                                  'menu_class'      => 'nav navbar-nav',
                                  'menu_id'         => 'menu_id',
                                  'echo'            => true,
                                  'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                  'walker'          => new wp_bootstrap_navwalker());
                                ?>
                                <?php wp_nav_menu($menu_args);?>    
                    <ul class="nav navbar-nav navbar-right">
                    <li>
                                    <form class="navbar-form navbar-left" role="search">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Buscar">
                                        </div>
                                    </form>  
                    </li>
                    </ul>
                </div>
              </div>
            </nav>

          </div>
        </div>        