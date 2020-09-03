<?php 
  /*
    Template Name: About Us
  */
  get_header(); 

  $thisID = get_the_ID();

  $pageTitle = get_the_title($thisID);
  $custom_page_title = get_field('aangepaste_paginatitel', $thisID);
  if(!empty(str_replace(' ', '', $custom_page_title))){
    $pageTitle = $custom_page_title;
  } 
  $standaardbanner = get_field('bannerafbeelding', $thisID);
  if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/about-us-bnr-page.jpg';
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

<section class="lam-about-us-grd-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lam-about-us-grd-sec-inr">
          <ul>
          <?php 
          $intro = get_field('introsec', $thisID); 
          if( $intro ):
          ?>
            <li>
              <div class="lam-about-us-grd-item">
                <div class="lam-about-us-grd-item-fea-img-ctlr">
                  <?php if( !empty($intro['afbeelding']) ): ?>
                  <div class="lam-about-us-grd-item-fea-img inline-bg" style="background: url('<?php echo cbv_get_image_src($intro['afbeelding'], 'aboutgrid'); ?>');"></div>
                  <?php endif; ?>
                </div>
                
                <div class="lam-about-us-grd-item-des">
                  <?php 
                    if( !empty($intro['titel']) ) printf('<h2 class="lam-about-us-grd-item-des-title">%s</h2>', $intro['titel']);
                    if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
                  ?>
                  <div class="lam-about-us-grd-item-des-link">
                    <?php 
                      $knop1 = $intro['knop_1'];
                      $knop2 = $intro['knop_2'];
                      if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
                          printf('<div class="lam-about-us-grd-item-des-link-left"><a href="%s" target="%s">%s</a></div>', $knop1['url'], $knop1['target'], $knop1['title']); 
                      } 
                      if( is_array( $knop2 ) &&  !empty( $knop2['url'] ) ){
                          printf('<div class="lam-about-us-grd-item-des-link-rgt"><a href="%s" target="%s">%s</a></div>', $knop2['url'], $knop2['target'], $knop2['title']); 
                      } 
                    ?> 
                  </div>
                </div>
              </div>
            </li>
            <?php endif; ?>
            <?php
              $showhidblock1 = get_field('showhidblock1', $thisID); 
              if($showhidblock1):
              $block1 = get_field('block1', $thisID);
              if($block1):
            ?>
            <li>
              <div class="lam-about-us-grd-item">
                <div class="lam-about-us-grd-item-fea-img-ctlr">
                  <?php if( !empty($block1['afbeelding']) ): ?>
                  <div class="lam-about-us-grd-item-fea-img inline-bg" style="background: url('<?php echo cbv_get_image_src($block1['afbeelding'], 'aboutgrid'); ?>');"></div>
                  <?php endif; ?>
                </div>
                
                <div class="lam-about-us-grd-item-des">
                  <?php 
                    if( !empty($block1['titel']) ) printf('<h2 class="lam-about-us-grd-item-des-title">%s</h2>', $block1['titel']);
                    if( !empty($block1['beschrijving']) ) echo wpautop( $block1['beschrijving'] );
                  ?>
                </div>
              </div>
            </li>
            <?php endif; ?>
            <?php endif; ?>
            <?php
              $showhideblock2 = get_field('showhideblock2', $thisID); 
              if($showhideblock2):
              $block2 = get_field('block2', $thisID);
              if($block2):
            ?>
            <li>
              <div class="lam-about-us-grd-item">
                <div class="lam-about-us-grd-item-fea-img-ctlr">
                  <?php if( !empty($block2['afbeelding']) ): ?>
                  <div class="lam-about-us-grd-item-fea-img inline-bg" style="background: url('<?php echo cbv_get_image_src($block2['afbeelding'], 'aboutgrid'); ?>');"></div>
                  <?php endif; ?>
                </div>
                
                <div class="lam-about-us-grd-item-des">
                  <?php 
                    if( !empty($block2['titel']) ) printf('<h2 class="lam-about-us-grd-item-des-title">%s</h2>', $block2['titel']);
                    if( !empty($block2['beschrijving']) ) echo wpautop( $block2['beschrijving'] );
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
  $showhidegallery = get_field('showhidegallery', $thisID); 
  if($showhidegallery):
  $galerij = get_field('galerijs', $thisID);
  if($galerij):
?>
<section class="lam-about-us-gallery-sec">
  <ul class="reset-list clearfix">
    <?php foreach( $galerij as $gall ): ?>
    <li>
      <div class="lam-about-us-gallery-ctlr">
        <!-- <a class="overlay-link" href="<?php echo THEME_URI; ?>/assets/images/lam-about-us-glry-img-01.jpg" data-fancybox="gallery"></a> -->
        <?php if( !empty($gall['id']) ): ?>
        <div class="lam-about-us-gallery-item inline-bg" style="background: url('<?php echo cbv_get_image_src($gall['id'], 'gallery'); ?>');"></div>
        <?php endif; ?>
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
  <div class="lam-about-us-gallery-btm-logo">
    <img src="<?php echo THEME_URI; ?>/assets/images/lam-about-us-glry-btm-logo.png">
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php
  $showhideblock3 = get_field('showhideblock3', $thisID); 
  if($showhideblock3):
  $block3 = get_field('block3', $thisID);
  if($block3):
    $block3_src = '';
    if( !empty($block3['achtergrond_afbeelding']) ) $block3_src = cbv_get_image_src($block3['achtergrond_afbeelding']);
?>
<section class="lam-about-us-tradition-sec inline-bg" style="background: url('<?php echo $block3_src; ?>');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lam-about-us-tradition-sec-inr">
          <div class="lab-about-us-trdt-ambition">
            <?php 
              if( !empty($block3['titel']) ) printf('<h3 class="lab-about-us-trdt-ambition-title">%s</h3>', $block3['titel']);
              if( !empty($block3['beschrijving']) ) echo wpautop( $block3['beschrijving'] );
            ?>
          </div>
          <div class="lab-about-us-trdt-wines">
            <?php 
              if( !empty($block3['aantal']) ) printf('<span>%s</span>', $block3['aantal']);
              if( !empty($block3['subtitel']) ) printf('<h6 class="lab-about-us-trdt-wines-title">%s</h6>', $block3['subtitel']);
              if( !empty($block3['korte_beschrijving']) ) echo wpautop( $block3['korte_beschrijving'] );
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
  if($showhidegetuigenis):
  $getuigenis = get_field('getuigenis', $thisID);
  if($getuigenis):
?>
<section class="lam-about-us-generation-sec">
  <span class="circle-about-page">
    <img src="<?php echo THEME_URI; ?>/assets/images/circle-about-page.svg">
  </span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lam-about-us-generation-sec-inr clearfix">
          <div class="lam-about-us-generation-fea-img-ctlr">
            <?php if( !empty($getuigenis['afbeelding']) ): ?>
            <div class="lam-about-us-generation-fea-img inline-bg" style="background: url('<?php echo cbv_get_image_src($getuigenis['afbeelding'], 'quotegrid'); ?>');"></div>
            <?php endif; ?>
          </div>
          
          <div class="lam-about-us-generation-des">
            <?php 
              if( !empty($getuigenis['titel']) ) printf('<h4 class="lam-about-us-generation-des-title">%s</h4>', $getuigenis['titel']);
              if( !empty($getuigenis['beschrijving']) ) echo wpautop( $getuigenis['beschrijving'] );
              if( !empty($getuigenis['subtitel']) ) printf('<strong>- %s</strong>', $getuigenis['subtitel']);
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php get_template_part('templates/google', 'maphm'); ?>
<?php get_footer(); ?>