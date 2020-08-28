<?php 
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
