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
      $showhidblock1 = get_field('showhidblock1', $thisID); 
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
        $block1 = get_field('block1', $thisID);
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
              <li class="clearfix">
                <div class="hm-grd-item clearfix">
                  <div class="hmgi-col hm-grd-item-fea-img">
                    <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-grd-item-fea-img-1.jpg);"></div>
                  </div>
                  <div class="hmgi-col hm-grd-item-des">
                    <h6 class="hmgid-sub-title">Passion for taste</h6>
                    <h2 class="hmgid-title">Wines</h2>
                    <p>Nullam a magna vitae nulla efficitur hendrerit. Maecenas sit amet elementum elit. Nunc aliquet risus interdum enim viverra tempor. Nulla in augue eleifend, egestas velit a, faucibus ex.</p>
                    <a class="lm-btn" href="#">Wines</a>
                  </div>
                </div>
              </li>
              <li class="clearfix">
                <div class="hm-grd-item clearfix">
                  <div class="hmgi-col hm-grd-item-fea-img">
                    <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-grd-item-fea-img-2.jpg);"></div>
                  </div>
                  <div class="hmgi-col hm-grd-item-des">
                    <h6 class="hmgid-sub-title">Passion for flavours</h6>
                    <h2 class="hmgid-title">Olive Oil </h2>
                    <p>Nullam a magna vitae nulla efficitur hendrerit. Maecenas sit amet elementum elit. Nunc aliquet risus interdum enim viverra tempor. Nulla in augue eleifend, egestas velit a, faucibus ex.</p>
                    <a class="lm-btn" href="#">Olive Oil</a>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
  </div>    
</section>


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
      <p>Fusce iaculis tellus ac congue fermentum. Donec dignissim, ante id cursus ornare, turpis odio suscipit enim, ut posuere sapien.</p>
      <strong>- Steven Rym, Customer</strong>
    </blockquote>
   </div>
   <div class="lm-testi-angle-sec-rgt-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/lm-testi-angle-sec-bg-2.png);">
    <img src="<?php echo THEME_URI; ?>/assets/images/lm-testi-angle-sec-bg-2.png">
   </div>
   <div class="lm-testi-angle-sec-logo">
     <img src="<?php echo THEME_URI; ?>/assets/images/logo-xlg-2.svg">
   </div>

</section>


<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $spacialArry = array(".", "/", "+", " ", "(", ")");$replaceArray = '';
  $gmapsurl = get_field('map_url', 'options');
  $adres = get_field('address', 'options');
  $e_mailadres = get_field('emailaddress', 'options');
  $show_telefoon = get_field('telephone', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
?>



<section class="google-map">
  <div class="google-map-cntlr">
    <span class="google-map-bg"></span>
    <div id="mapID" class="" data-latitude="23.7749" data-longitude="90.3657" style="width:100%; height:653px"></div>
    <div class="map-side-add">
      <div class="cfls-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php echo $logo_tag; ?>
        </a>
      </div>
      <?php if( !empty( $adres ) ): ?>
      <div class="cfls-adress">
        <a href="<?php echo $gmaplink; ?>">
          <i>
            <svg class="lam-map-marker-svg" width="13" height="17" viewBox="0 0 13 17" fill="#fff">
              <use xlink:href="#lam-map-marker-svg"></use>
            </svg> 
          </i>
          <?php echo $adres; ?>
        </a>
      </div>
      <?php endif; ?>
      <?php if( !empty( $e_mailadres ) ): ?>
      <div class="cfls-email">
        <a href="mailto:<?php echo $e_mailadres; ?>">
          <i>
            <svg class="lam-envelope-svg" width="15" height="15" viewBox="0 0 15 15" fill="#fff">
              <use xlink:href="#lam-envelope-svg"></use>
            </svg> 
          </i>
          <?php echo $e_mailadres; ?>
        </a>
      </div>
      <?php endif; ?>
      <?php if( !empty( $telefoon ) ): ?>
      <div class="cfls-phone">
        <a href="tel:<?php echo $telefoon; ?>">
          <i>
            <svg class="lam-phone-svg" width="13" height="13" viewBox="0 0 13 13" fill="#fff">
              <use xlink:href="#lam-phone-svg"></use>
            </svg> 
          </i>
          <?php echo $show_telefoon; ?>
        </a>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>