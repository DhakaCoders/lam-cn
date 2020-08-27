<?php 
  /*
    Template Name: Contact
  */
  get_header(); 

  $thisID = get_the_ID();
  $spacialArry = array(".", "/", "+", " ", "(", ")");$replaceArray = '';
  $cont = get_field('contacteer', $thisID); 
  $collft = $cont['col_left'];
  $colright = $cont['col_right'];
?>
<section class="page-banner">
  <div class="page-banner-controller" style="overflow: hidden;">
    <div class="page-banner-bg inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/contact-bnr-page.jpg');"></div>
    <div class="page-banner-des">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-banner-des-inner">
              <h1 class="page-banner-title"> Contact & Point of sales</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
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
<section class="contact-form-sec">
  <span class="circle-contact-page">
    <img src="<?php echo THEME_URI; ?>/assets/images/circle-contact-page.png">
  </span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form-sec-inr clearfix">
          <div class="contact-form-left-sidebar">
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
            <?php if( !empty($collft['afbeelding']) ): ?>
            <div class="cfls-img inline-bg" style="background: url('<?php echo cbv_get_image_src($collft['afbeelding']); ?>');">
            </div>
            <?php endif; ?>
          </div>
          <div class="contact-form">
            <?php if( $colright ): ?>
            <div class="contact-form-entry-hdr">
            <?php 
              if( !empty($colright['titel']) ) printf('<h4 class="contact-form-entry-hdr-title">%s</h4>', $colright['titel']);
              if( !empty($colright['beschrijving']) ) echo wpautop( $colright['beschrijving'] );
            ?>
            </div>
            <div class="lam-contact-form-inr">
              <div class="wpforms-container">
                <?php if(!empty($colright['form_shortcode'])) echo do_shortcode( $colright['form_shortcode'] ); ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-table-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-table-sec-inr">
          <?php
            $showhidewmd = get_field('showhidewmd', $thisID); 
            if($showhidewmd):
            $wmd = get_field('wmdsec', $thisID);
            $wmds = $wmd['wmd'];
          ?>
          <div class="contact-table-sec-item">
            <?php if( !empty( $wmd['titel'] ) ) printf( '<h5 class="contact-table-title">%s</h5>', $wmd['titel']); ?>
            <div class="lam-table-ctlr">
              <?php if( $wmds ): ?>
              <table class="table">
                <thead>
                  <tr>
                    <th><span class="mHc">Naam</span></th>
                    <th><span class="mHc">Adres</span></th>
                    <th><span class="mHc">Website</span></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach( $wmds as $wmdd ): ?>
                  <tr>
                    <td><span class="mHc1"><?php if( !empty($wmdd['naam']) ) printf('%s', $wmdd['naam']); ?></span></td>
                    <td><span class="mHc1"><?php if( !empty($wmdd['adres']) ) printf('%s', $wmdd['adres']); ?></span></td>
                    <td><span class="mHc1"><a href="<?php if( !empty($wmdd['website']) ) printf('%s', $wmdd['website']); ?>"><?php if( !empty($wmdd['website']) ) printf('%s', $wmdd['website']); ?></a></span></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <?php endif; ?>
            </div>
            
          </div>
          <?php endif; ?>
          <div class="contact-table-sec-item">
            <?php
              $showhideresturent = get_field('showhideresturent', $thisID); 
              if($showhideresturent):
              $resturent = get_field('resturentsec', $thisID);
              $rests = $resturent['restaurant'];
            ?>
            <?php if( !empty( $resturent['titel'] ) ) printf( '<h5 class="contact-table-title">%s</h5>', $resturent['titel']); ?>
            <div class="lam-table-ctlr">
              <table class="table">
                <thead>
                  <tr>
                    <th><span class="mHc">Naam</span></th>
                    <th><span class="mHc">Adres</span></th>
                    <th><span class="mHc">Website</span></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach( $rests as $restt ): ?>
                  <tr>
                    <td><span class="mHc1"><?php if( !empty($restt['naam']) ) printf('%s', $restt['naam']); ?></span></td>
                    <td><span class="mHc1"><?php if( !empty($restt['adres']) ) printf('%s', $restt['adres']); ?></span></td>
                    <td><span class="mHc1"><a href="<?php if( !empty($restt['website']) ) printf('%s', $restt['website']); ?>"><?php if( !empty($restt['website']) ) printf('%s', $restt['website']); ?></a></span></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="google-map">
  <div class="google-map-cntlr">
    <span class="google-map-bg"></span>
    <div id="mapID" class="" data-latitude="23.7749" data-longitude="90.3657" style="width:100%; height:653px"></div>
    
  </div>
</section>
<?php get_footer(); ?>