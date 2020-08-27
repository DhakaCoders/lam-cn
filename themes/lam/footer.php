<?php $copyright_text = get_field('copyright_text', 'options'); ?>
<footer class="footer-wrp">
  <div class="ftr-top-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-nav-inr">
            <?php 
              $fmenuOptions = array( 
                  'theme_location' => 'cbv_ft_menu', 
                  'menu_class' => 'clearfix reset-list',
                  'container' => '',
                  'container_class' => ''
                );
              wp_nav_menu( $fmenuOptions ); 
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ftr-btm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-btm-inr">
            <div class="ftr-copyright">
              <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?>
            </div>
            <div class="ftr-pg-link">
            <?php 
              $cmenuOptions = array( 
                  'theme_location' => 'cbv_copyright_menu', 
                  'menu_class' => 'reset-list',
                  'container' => '',
                  'container_class' => ''
                );
              wp_nav_menu( $cmenuOptions ); 
            ?> 
            </div>
            <div class="ftr-designby">
              <a href="#">webdesign by conversal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</footer>
<?php wp_footer(); ?>
</body>
</html>