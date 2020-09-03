<?php 
  /*
    Template Name: Wines
  */
  get_header(); 

  $thisID = get_the_ID();

  $pageTitle = get_the_title($thisID);
  $custom_page_title = get_field('aangepaste_paginatitel', $thisID);
  if(!empty(str_replace(' ', '', $custom_page_title))){
    $pageTitle = $custom_page_title;
  } 
  $standaardbanner = get_field('bannerafbeelding', $thisID);
  if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/contact-bnr-page.jpg';
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
  $showhideblock = get_field('showhideblock', $thisID);
  $blocks = get_field('blocks', $thisID);  
  if( $showhideblock ):
    if( $blocks ):
?>
<section class="wines-pages">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="wines-pages-inr">
          <ul class="reset-list">
            <?php
              $i = 1; 
              foreach( $blocks as $block ): 
            ?>
            <li <?php echo ( $i == 1 )? 'class="active"': '';?>>
              <a href="#" class="active scrollto" data-to="#wines-row-<?php echo $i; ?>">
                <?php if( !empty($block['titel']) ) printf('%s', $block['titel']); ?>
              </a>
            </li>
            <?php $i++; endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php 
  $intro = get_field('introsec', $thisID); 
  if( $intro ):
?>
<section class="lam-wines-section inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/lam-wines-section-bg.png');">
  <span class="lam-wines-bg-color"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-grds lm-wn-gdrs">
          <div class="hm-grd-item lm-wn-gdrs-item">
            <div class="hmgi-col hm-grd-item-fea-img">
              <?php if( !empty($intro['afbeelding']) ): ?>
              <div class="inline-bg" style="background: url('<?php echo cbv_get_image_src($intro['afbeelding'], 'winesintrogrid'); ?>');"></div>
              <?php endif; ?>
            </div>
            <div class="hmgi-col hm-grd-item-des lm-wn-gdrs-item-desc">
              <?php 
                if( !empty($intro['subtitel']) ) printf('<h6 class="hmgid-sub-title">%s</h6>', $intro['subtitel']);
                if( !empty($intro['titel']) ) printf('<h2 class="hmgid-title">%s</h2>', $intro['titel']);
                if( !empty($intro['beschrijving']) ) echo wpautop( $intro['beschrijving'] );
              ?>
              <a class="lm-btn" href="#">Scroll Down</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endif; ?>

<?php 
  $showhideblock = get_field('showhideblock', $thisID);
  $blocks = get_field('blocks', $thisID);  
  if( $showhideblock ):
    
?>
<section class="wines-grid-sec">
  <span class="wines-grid-lines-top"></span>
  <span class="wines-grid-lines-btm"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if( $blocks ): ?>
        <div class="wines-grid-cntlr">
          <ul class="">
            <?php
              $i = 1; 
              foreach( $blocks as $block ): 
            ?>
            <li id="wines-row-<?php echo $i; ?>">
              <div class="wines-grid-item">
                <div class="wines-grid-item-fea-img">
                  <?php 
                    if( !empty($block['afbeelding']) ): 
                    echo cbv_get_image_tag($block['afbeelding']); 
                    endif; 
                  ?>
                </div>
                <div class="wines-grid-item-desc olive-oil-name-desc">
                  <h6 class="olive-oil-name-sub-title wines-grid-item-sub-title">
                    <?php if( !empty($block['merknaam']) ) printf('<span class="olive-oil-name-sub-title-up wines-grid-item-sub-title-up">%s</span>', $block['merknaam']); ?>
                    <?php if( !empty($block['label_naam']) ) printf('<br>%s', $block['label_naam']); ?>
                  </h6>
                  <?php 
                    if( !empty($block['titel']) ) printf('<h3 class="olive-lam-inr-desc-title wines-grid-item-title">%s</h3>', $block['titel']);
                    if( !empty($block['beschrijving']) ) echo wpautop( $block['beschrijving'] );
                  ?>
                </div>
              </div>
              <?php 
                $quote = $block['quote']; 
                if( $quote ):
              ?>
              <div class="wines-grid-blockquote">
                <blockquote>
                  <i>
                    <svg class="wines-quote-md-icon-svg" width="105" height="104" viewBox="0 0 105 104" fill="#B78454">
                      <use xlink:href="#wines-quote-md-icon-svg"></use>
                    </svg> 
                  </i>
                  <?php if( !empty($quote['beschrijving']) ) printf('<p>%s..</p>', $quote['beschrijving']); ?>
                  <strong>
                  <?php 
                    if( !empty($quote['naam']) ) printf('- %s ,', $quote['naam']);
                    if( !empty($quote['position']) ) printf(' %s</h3>', $quote['position']);
                  ?>
                  </strong>
                </blockquote>
              </div>
              <?php endif; ?>
            </li>
            <?php $i++; endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
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
<?php get_template_part('templates/google', 'maphm'); ?>
<?php get_footer(); ?>