</div>
<div class="clear"></div>
<?php $bg_color = get_field("header_color","options");?>
<div id="footer" role="contentinfo">
    <div class="container">
        <div class="row">
          <div class="col-xs-6 col-md-4 footer-part" align="left">
            <address>
              <strong>Reflexsi, S.A.</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              <abbr title="Phone">P:</abbr> (502) 5555-5555
            </address>

            <address>
              <strong>Webmaster</strong><br>
              <a href="mailto:aemc@aemcode.com">aemc@aemcode.com</a>
            </address>          
          </div>
          <div class="col-xs-6 col-md-4 footer-part" align="center">
              <div class="footer-menu-canvas" align="left">
                <?php 
                $menu_args = array(
                  'menu'            => 'Footer-Menu', 
                  'container'       => 'container', 
                  'container_class' => 'container_class', 
                  'container_id'    => 'container_id',
                  'menu_class'      => 'footer-menu',
                  'menu_id'         => '2',
                  'echo'            => true);
                ?>
                <?php wp_nav_menu($menu_args);?>                
              </div>
          </div>
          <div class="col-xs-6 col-md-4 footer-part" align="right">
                        <?php $social = get_field("social","options");
                              if($social){
                                  for($i=0;$i<sizeof($social);$i++){?>
                        <a href="<?php echo $social[$i][url];?>" target="_blank"><img src="<?php echo $social[$i][imagen];?>" width="40px"></a>
                                  <?php }                
                              }
                        ?>     
          </div>
        </div>
        <div id="copyright">
        <?php echo sprintf( __( '%1$s %2$s %3$s. Tddos los derechos reservados.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo ' Tema por:'.'<a href="http://aemcode.com/">@emcode</a>' ; ?>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>

<script>
$(function() {
    $('.sub-menu').addClass('dropdown-menu');   
});  

</script>