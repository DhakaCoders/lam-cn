<?php 
  get_header(); 
  
  while ( have_posts() ) :
  the_post();
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

<section class="innerpage-con-wrap">
  <div class="container-sm">
    <div class="row">
      <div class="col-sm-12">
        <article class="default-page-con">
          <?php 
            if(have_rows('inhoud')){ 
            while ( have_rows('inhoud') ) : the_row(); 
            if( get_row_layout() == 'teksteditor' ){
              $beschrijving = get_sub_field('fc_teksteditor');
              echo '<div class="dfp-text-module clearfix">';
                if( !empty( $beschrijving ) ) echo wpautop($beschrijving);
              echo '</div>';    
            }elseif( get_row_layout() == 'afbeelding_tekst' ){
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              $imgsrc = cbv_get_image_src($fc_afbeelding, 'dfpageg1');
              $fc_tekst = get_sub_field('fc_tekst');
              $fc_title = get_sub_field('fctitel');
              $positie_afbeelding = get_sub_field('positie_afbeelding');
              $imgposcls = ( $positie_afbeelding == 'right' ) ? 'fl-dft-rgtimg-lftdes' : '';
              echo '<div class="fl-dft-overflow-controller">';
                if(!empty($fc_title)) printf('<h2>%s</h2>', $fc_title);
                echo '<div class="fl-dft-lftimg-rgtdes clearfix '.$imgposcls.'">';
                      echo '<div class="fl-dft-lftimg-rgtdes-lft mHc" style="background: url('.$imgsrc.');"></div>';
                echo '<div class="fl-dft-lftimg-rgtdes-rgt mHc">';
                    echo wpautop($fc_tekst);
                echo '</div>';
              echo '</div></div>';      
            }elseif( get_row_layout() == 'afbeelding' ){
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              if( !empty( $fc_afbeelding ) ){
                printf('<div class="dfp-plate-one-img-bx">%s</div>', cbv_get_image_tag($fc_afbeelding));
              }
            }elseif( get_row_layout() == 'horizontal_rule' ){
              $rheight = get_sub_field('fc_horizontal_rule');
              printf('<div class="dfhrule clearfix" style="height: %spx;"></div>', $rheight);
          
            }elseif( get_row_layout() == 'gap' ){
             $gap = get_sub_field('fc_gap');
             printf('<div class="gap clearfix" data-value="20" data-md="20" data-sm="20" data-xs="10" data-xxs="10"></div>', $rheight);
            }
          
           endwhile;
         } else{
            echo '<div class="default-page-con">';
              the_content();
            echo '</div>';
           }
        ?>
        </article>

      </div>
    </div>
  </div>
</section>
<?php 
endwhile;
?>
<?php get_template_part('templates/google', 'map'); ?>
<?php get_footer(); ?>