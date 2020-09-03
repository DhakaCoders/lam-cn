<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $spacialArry = array(".", "/", "+", " ", "(", ")");$replaceArray = '';
  $gmapsurl = get_field('map_url', 'options');
  $flgmap = get_field('flgmap', 'options');
  $adres = get_field('address', 'options');
  $e_mailadres = get_field('emailaddress', 'options');
  $show_telefoon = get_field('telephone', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
?>



<section class="google-map">
  <div class="google-map-cntlr">
    
    <div class="gmap-frame">
      <span class="google-map-bg2">
        <img src="<?php echo THEME_URI; ?>/assets/images/gmap-bg-1-svg.svg">
      </span>
      <?php if( $flgmap ): ?>
      <div id="mapID" class="" data-uri="<?php echo THEME_URI; ?>" data-latitude="<?php echo $flgmap['lat']; ?>" data-longitude="<?php echo $flgmap['lng']; ?>" style="width:100%; height:653px"></div>
      <?php endif; ?>
    </div>
    
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