<?php get_header(); ?>

<section class="main-banner-sec">
  <div class="main-banner-sec-inr">
    <div class="container">
      <div class="row">
        <?php 
          $collft = get_field('collft', HOMEID);  
          $colrgt = get_field('colrgt', HOMEID);  
        ?>
        <div class="col-md-6 order-2">
          <div class="hm-bnr-fea-img-cntlr">

            <span class="hm-bnr-graphics-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-bnr-graphics-img.png);">
            </span>
            <?php if( $colrgt ): ?>
            <span class="hm-bnr-btl">
              <?php 
                if( !empty($colrgt['afbeelding']) ): 
                  echo cbv_get_image_tag($colrgt['afbeelding']);
                endif;
              ?>
            </span>
            <div class="hm-bnr-circle-cntlr">
              <span class="cirle-xs-size"></span>
              <span class="cirle-xs-size-2"></span>
              <span class="cirle-md-size"></span>
              <div class="hm-bnr-circle-cntlr-inr">
              <?php if( !empty($colrgt['merknaam']) ) printf('<span>%s</span>', $colrgt['merknaam']); ?>
              <?php if( !empty($colrgt['label_naam']) ) printf('<br>%s', $colrgt['label_naam']); ?>
              </h4>
              <?php if( !empty($colrgt['titel']) ) printf('<h2 class="hmbcc-title">%s</h2>', $colrgt['titel']); ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-6 order-1">
          <?php if( $collft ): ?>
          <div class="main-bnr-sec-des">
            <div class="main-bnr-logo-xlg">
            <?php 
              if( !empty($collft['logo']) ): 
                echo cbv_get_image_tag($collft['logo']);
              endif;
            ?>
            </div>
            <div class="main-bnr-sub-title">
              <?php if( !empty($collft['titel']) ) printf('<strong>%s</strong>', $collft['titel']); ?>
            </div>
            <?php if( !empty($collft['beschrijving']) ) echo wpautop( $collft['beschrijving'] ); ?>
            <?php
              $knop1 = $collft['knop'];
              if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $knop1['url'], $knop1['target'], $knop1['title']); 
              } 
            ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <span class="hm-main-bnr-btm-line-xs"></span>    
</section>


<div class="two-sec-cntrl">
  <span class="lines" style="background: url(<?php echo THEME_URI; ?>/assets/images/lines.svg);"></span>
  <div class="two-sec-cntrl-inr">
    <?php
      $showhidblock1 = get_field('showhidblock1', HOMEID); 
      if($showhidblock1):
    ?>
    <section class="hm-about-us-section">
      <span class="hm-about-us-top-angle">
        <svg class="svg-cntlr" preserveAspectRatio="none" width="1920" height="502" viewBox="0 0 1920 502" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M-48 499.012L26 454.512C777 53.5123 1986.5 290.683 1986.5 290.683V141" stroke="#B78454" stroke-width="5" stroke-miterlimit="10"/>
        <path d="M1976.72 288.466C1976.72 288.466 780.762 51.0624 38.1714 452.456L-35 497V0.00012207H1996L1976.72 288.466Z" fill="#251B1C"/>
        <path d="M1214.5 221.512C1012 109.512 158 18.0001 0 18.0001" stroke="#B78454" stroke-width="5" stroke-miterlimit="10"/>
        </svg>
      </span>
      <div class="scroll-down-direction scrollto" data-to="#sec-welcome">
        <img src="<?php echo THEME_URI; ?>/assets/images/mouse-icon.svg">
      </div>

      <div class="hm-about-us-bg-1 inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-about-us-bg-1.png);"></div>
      <?php
        $block1 = get_field('block1', HOMEID);
        if($block1):
      ?>
      <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="hm-about-us-fea-img hm-about-us-fea-img-1 cmn-z-index hide-sm">
                <?php if( !empty($block1['afbeelding_1']) ): ?>
                <div class="inline-bg" style="background: url('<?php echo cbv_get_image_src($block1['afbeelding_1'], 'hmgrid1'); ?>');"></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="hm-about-us-des cmn-z-index" id="sec-welcome">
                <?php 
                  if( !empty($block1['titel']) ) printf('<h2 class="hmaud-title">%s</h2>', $block1['titel']);
                  if( !empty($block1['beschrijving']) ) echo wpautop( $block1['beschrijving'] );
                ?>
                <div class="hmaud-btns">
                    <?php 
                      $knop1 = $block1['knop_1'];
                      $knop2 = $block1['knop_2'];
                      if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
                          printf('<span class="hmaud-btn hmaud-btn-1"><a href="%s" target="%s">%s</a></span>', $knop1['url'], $knop1['target'], $knop1['title']); 
                      } 
                      if( is_array( $knop2 ) &&  !empty( $knop2['url'] ) ){
                          printf('<span class="hmaud-btn hmaud-btn-2"><a href="%s" target="%s">%s</a></span>', $knop2['url'], $knop2['target'], $knop2['title']); 
                      } 
                    ?>
                </div>

                <div class="hm-about-us-fea-img hm-about-us-fea-img-1 cmn-z-index show-sm">
                <?php if( !empty($block1['afbeelding_1']) ): ?>
                  <div class="inline-bg" style="background: url('<?php echo cbv_get_image_src($block1['afbeelding_1'], 'hmgrid1'); ?>');"></div>
                <?php endif; ?>
                </div>
                <div class="hm-about-us-fea-img hm-about-us-fea-img-2">
                <?php if( !empty($block1['afbeelding_2']) ): ?>
                  <div class="inline-bg" style="background: url('<?php echo cbv_get_image_src($block1['afbeelding_2'], 'hmgrid2'); ?>');"></div>
                <?php endif; ?>
                  <span class="hm-about-us-fea-img-inr-logo">
                    <img src="<?php echo THEME_URI; ?>/assets/images/logo-xlg.svg">
                  </span>
                </div>
              </div>
            </div>
          </div>
      </div>  
      <?php endif; ?>  
    </section>
    <?php endif; ?>

    <?php
      $showhideblock2 = get_field('showhideblock2', HOMEID); 
      if($showhideblock2):
      $block2 = get_field('block2', HOMEID);
      if($block2):
        $block2_src = '';
        if( !empty($block2['achtergrond_afbeelding']) ) $block2_src = cbv_get_image_src($block2['achtergrond_afbeelding']);
    ?>
    <section class="lam-about-us-tradition-sec inline-bg " style="background: url('<?php echo $block2_src; ?>');">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="lam-about-us-tradition-sec-inr">
              <div class="lab-about-us-trdt-ambition cmn-z-index">
                <?php 
                  if( !empty($block2['titel']) ) printf('<h3 class="lab-about-us-trdt-ambition-title">%s</h3>', $block2['titel']);
                  if( !empty($block2['beschrijving']) ) echo wpautop( $block2['beschrijving'] );
                ?> 
              </div>
              <div class="lab-about-us-trdt-wines cmn-z-index">
              <?php 
                if( !empty($block2['aantal']) ) printf('<span>%s</span>', $block2['aantal']);
                if( !empty($block2['subtitel']) ) printf('<h6 class="lab-about-us-trdt-wines-title">%s</h6>', $block2['subtitel']);
                if( !empty($block2['korte_beschrijving']) ) echo wpautop( $block2['korte_beschrijving'] );
              ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <?php endif; ?>
  </div>
</div>

<section class="hm-grds-section">
  <span class="hm-grds-sec-top-circle"><img src="<?php echo THEME_URI; ?>/assets/images/hm-grds-sec-top-circle.svg"></span>
  <span class="hm-grds-sec-top-line"></span>
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-grds">
            <ul class="reset-list">
            <?php
              $showhideblock3 = get_field('showhideblock3', HOMEID); 
              if($showhideblock3):
              $block3 = get_field('block3', HOMEID);
              if($block3):
            ?>
              <li class="clearfix">
                <div class="hm-grd-item clearfix">
                  <div class="hmgi-col hm-grd-item-fea-img">
                  <?php if( !empty($block3['afbeelding']) ): ?>
                  <div class="inline-bg" style="background: url('<?php echo cbv_get_image_src($block3['afbeelding'], 'winesintrogrid'); ?>');"></div>
                  <?php endif; ?>
                  </div>
                  <div class="hmgi-col hm-grd-item-des">
                    <?php 
                      if( !empty($block3['subtitel']) ) printf('<h6 class="hmgid-sub-title">%s</h6>', $block3['subtitel']);
                      if( !empty($block3['titel']) ) printf('<h2 class="hmgid-title">%s</h2>', $block3['titel']);
                      if( !empty($block3['beschrijving']) ) echo wpautop( $block3['beschrijving'] );

                      $knop3 = $block3['knop'];
                      if( is_array( $knop3 ) &&  !empty( $knop3['url'] ) ){
                          printf('<a class="lm-btn" href="%s" target="%s">%s</a>', $knop3['url'], $knop3['target'], $knop3['title']); 
                      } 
                    ?>
                  </div>
                </div>
              </li>
              <?php endif; ?>
              <?php endif; ?>
              <?php
                $showhideblock4 = get_field('showhideblock4', HOMEID); 
                if($showhideblock4):
                $block4 = get_field('block4', HOMEID);
                if($block4):
              ?>
              <li class="clearfix">
                <div class="hm-grd-item clearfix">
                  <div class="hmgi-col hm-grd-item-fea-img">
                  <?php if( !empty($block4['afbeelding']) ): ?>
                  <div class="inline-bg" style="background: url('<?php echo cbv_get_image_src($block4['afbeelding'], 'winesintrogrid'); ?>');"></div>
                  <?php endif; ?>
                  </div>
                  <div class="hmgi-col hm-grd-item-des">
                    <?php 
                      if( !empty($block4['subtitel']) ) printf('<h6 class="hmgid-sub-title">%s</h6>', $block4['subtitel']);
                      if( !empty($block4['titel']) ) printf('<h2 class="hmgid-title">%s</h2>', $block4['titel']);
                      if( !empty($block4['beschrijving']) ) echo wpautop( $block4['beschrijving'] );

                      $knop4 = $block4['knop'];
                      if( is_array( $knop4 ) &&  !empty( $knop4['url'] ) ){
                          printf('<a class="lm-btn" href="%s" target="%s">%s</a>', $knop4['url'], $knop4['target'], $knop4['title']); 
                      } 
                    ?>
                  </div>
                </div>
              </li>
              <?php endif; ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
  </div>    
</section>

<?php 
  $showhidegetuigenis = get_field('showhidegetuigenis', HOMEID);
  $getuigenis = get_field('getuigenis', HOMEID);  
  if( $showhidegetuigenis ):

  if( $getuigenis ):
    
?>
<section class="lm-testi-angle-section clearfix">
    <div class="lm-testi-angle-sec-bg-1-xs show-md">
      <img src="<?php echo THEME_URI; ?>/assets/images/lm-testi-angle-sec-bg-1.png">
    </div>
   <div class="lm-testi-angle-sec-des-cntlr" style="background: url(<?php echo THEME_URI; ?>/assets/images/lm-testi-angle-sec-bg-1.png);">
    <blockquote>
      <i>
        <svg class="quote-xlg-icon-svg" width="153" height="152" viewBox="0 0 153 152" fill="#B78454">
          <use xlink:href="#quote-xlg-icon-svg"></use>
        </svg> 
      </i>
      <?php if( !empty($getuigenis['beschrijving']) ) echo wpautop( $getuigenis['beschrijving'] ); ?>
      <strong>
      <?php 
        if( !empty($getuigenis['naam']) ) printf('- %s ,', $getuigenis['naam']);
        if( !empty($getuigenis['positie']) ) printf(' %s</h3>', $getuigenis['positie']);
      ?>
      </strong>
    </blockquote>
   </div>
   <div class="lm-testi-angle-sec-rgt-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/lm-testi-angle-sec-bg-2.png);">
    <img src="<?php echo THEME_URI; ?>/assets/images/lm-testi-angle-sec-bg-2.png">
   </div>
   <div class="lm-testi-angle-sec-logo">
     <img src="<?php echo THEME_URI; ?>/assets/images/logo-xlg-2.svg">
   </div>

</section>
<?php endif; ?>
<?php endif; ?>
<?php get_template_part('templates/google', 'maphm'); ?>
<?php get_footer(); ?>