<?php 
  /*
    Template Name: Olive Oil
  */
  get_header(); 

  $thisID = get_the_ID();

  $pageTitle = get_the_title($thisID);
  $custom_page_title = get_field('aangepaste_paginatitel', $thisID);
  if(!empty(str_replace(' ', '', $custom_page_title))){
    $pageTitle = $custom_page_title;
  } 
  $standaardbanner = get_field('bannerafbeelding', $thisID);
  if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/olive-oil-bnr.jpg';
?>
<section class="page-banner">
  <div class="page-banner-controller" style="overflow: hidden;">
    <div class="page-banner-bg inline-bg" style="background: url('<?php echo $standaardbanner; ?>');"></div>
    <div class="page-banner-des">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-banner-des-inner">
              <h1 class="page-banner-title"> <?php echo $pageTitle; ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  $intro = get_field('introsec', $thisID);  
  if( $intro ):
?>
<section class="olive-oil-name-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="olive-oil-name-inr">
          <?php if( !empty($intro['afbeelding']) ): ?>
          <div class="olive-oil-name-fea-img inline-bg" style="background-image: url('<?php echo cbv_get_image_src($intro['afbeelding'], 'oliveintrogird'); ?>');">
          </div>
          <?php endif; ?>
          <div class="olive-oil-name-desc">
            <h6 class="olive-oil-name-sub-title">
            <?php if( !empty($intro['merknaam']) ) printf('<span class="olive-oil-name-sub-title-up">%s</span>', $intro['merknaam']); ?>
            <?php if( !empty($intro['label_naam']) ) printf('<br>%s', $intro['label_naam']); ?>
            </h6>
            <?php 
              if( !empty($intro['titel']) ) printf('<h2 class="olive-oil-name-title">%s</h2>', $intro['titel']);
              if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php 
  $showhideusps = get_field('showhideusps', $thisID);
  $flusps = get_field('flusps', $thisID);  
  if( $showhideusps ):
  if( $flusps ):
?>
<section class="olive-oil-grid-items">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="olive-oil-grid-items-inr">
          <ul class="reset-list">
            <?php foreach( $flusps as $flusp ): ?>
            <li>
              <div class="olive-oil-grid-item">
                <div class="olive-oil-grid-item-img mHc">
                  <?php
                    $iconobj = $flusp['icon']; 
                    if( is_array($iconobj) ){
                      echo '<img src="'.$iconobj['url'].'" alt="'.$iconobj['alt'].'" title="'.$iconobj['title'].'">';
                    }
                  ?>
                </div>
                <?php 
                  if( !empty($flusp['titel']) ) printf('<h4 class="olive-oil-grid-item-title mHc1">%s</h4>', $flusp['titel']);
                  if( !empty($flusp['beschrijving']) ) echo wpautop( $flusp['beschrijving'] );
                ?>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php 
  $showhideintro2 = get_field('showhideintro_2', $thisID);
  $intro2 = get_field('introsec2', $thisID);  
  if( $showhideintro2 ):
  if( $intro2 ):
?>
<section class="olive-lam-desc">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="olive-lam-desc-inr">
          <div class="olive-lam-desc-fea-img">
            <?php 
            if( !empty($intro2['afbeelding']) ): 
              echo cbv_get_image_tag($intro2['afbeelding']);
            endif;
            ?>
          </div>
          <div class="olive-lam-inr-desc">
          <?php 
            if( !empty($intro2['titel']) ) printf('<h3 class="olive-lam-inr-desc-title">%s</h3>', $intro2['titel']);
            if( !empty($intro2['beschrijving']) ) echo wpautop( $intro2['beschrijving'] );
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php 
  $showhidegetuigenis = get_field('showhidegetuigenis', $thisID);
  $getuigenis = get_field('getuigenis', $thisID);  
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
<?php get_template_part('templates/google', 'map'); ?>
<?php get_footer(); ?>