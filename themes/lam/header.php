<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	


   <svg style="display: none;">

    <!-- End of Noyon-->

    <symbol id="lam-map-marker-svg" width="13" height="17" viewBox="0 0 13 17" xmlns="http://www.w3.org/2000/svg">
    <path d="M5.32011 0.0995048C2.94217 0.524137 1.07379 2.47745 0.649155 4.85539C0.224522 7.14841 1.15871 9.27157 2.77232 10.5455C4.38592 11.9043 5.57489 13.6877 6.16938 15.726L6.50908 16.9999L6.93372 15.726C7.5282 13.6028 8.88703 11.8194 10.5006 10.3756C11.6896 9.3565 12.4539 7.74289 12.4539 5.95943C12.4539 2.30759 9.14181 -0.579907 5.32011 0.0995048ZM6.50908 9.35649C4.6407 9.35649 3.11202 7.82782 3.11202 5.95943C3.11202 4.09105 4.6407 2.56237 6.50908 2.56237C8.37747 2.56237 9.90615 4.09105 9.90615 5.95943C9.90615 7.82782 8.37747 9.35649 6.50908 9.35649Z" fill="#B78454"/>
    </symbol>
    <symbol id="lam-envelope-svg" width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0)">
      <path d="M14.9023 3.39819L10.6406 7.6598L14.7971 11.8193C14.9229 11.603 15.0004 11.355 15.0004 11.0872V3.91309C15.0004 3.73127 14.963 3.55897 14.9023 3.39819Z" fill="#B78454"/>
      <path d="M13.5315 2.44537H1.46627C1.22231 2.44537 0.995586 2.51088 0.792969 2.61667L7.19888 9.02252C7.38474 9.20838 7.70756 9.20838 7.89017 9.02252L14.2659 2.64987C14.0491 2.52322 13.8003 2.44537 13.5315 2.44537Z" fill="#B78454"/>
      <path d="M0.123076 3.32843C0.0447363 3.50779 0 3.70501 0 3.91296V11.087C0 11.3506 0.0753809 11.5947 0.197549 11.8087L4.39893 7.60428L0.123076 3.32843Z" fill="#B78454"/>
      <path d="M9.94547 8.35417L8.58568 9.7172C8.01451 10.2819 7.08908 10.2912 6.50851 9.7172L5.09329 8.29874L0.9375 12.4516C1.10229 12.5158 1.27998 12.5543 1.46722 12.5543H13.5324C13.7151 12.5543 13.8883 12.5167 14.0497 12.4554L9.94547 8.35417Z" fill="#B78454"/>
      </g>
      <defs>
      <clipPath id="clip0">
      <rect width="15" height="15" fill="white"/>
      </clipPath>
      </defs>
    </symbol>

    <symbol id="lam-phone-svg" width="13" height="13" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
      <path d="M12.6462 9.54069L10.832 7.7265C10.1841 7.07858 9.08261 7.33777 8.82344 8.18005C8.62906 8.76321 7.98114 9.08717 7.39801 8.95756C6.10216 8.6336 4.35276 6.94899 4.0288 5.58835C3.83442 5.00519 4.22318 4.35727 4.80631 4.16292C5.64861 3.90375 5.90778 2.80227 5.25986 2.15435L3.44567 0.34016C2.92733 -0.113387 2.14982 -0.113387 1.69627 0.34016L0.465215 1.57122C-0.765842 2.86707 0.5948 6.30107 3.64005 9.34631C6.68529 12.3916 10.1193 13.817 11.4151 12.5211L12.6462 11.2901C13.0998 10.7717 13.0998 9.99424 12.6462 9.54069Z" fill="#B78454"/>
    </symbol>




    <!-- End of shariful-->



    <symbol id="quote-xlg-icon-svg" width="153" height="152" viewBox="0 0 153 152" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0)">
      <path d="M142.974 68.5576C136.562 62.0706 128.061 58.3152 118.956 57.926C118.913 57.3607 118.881 56.5817 118.881 55.5156C118.881 51.148 122.224 37.8026 124.332 30.4166L126.488 22.8594L100.316 22.8594L98.5626 25.6657C97.8673 26.779 81.5273 53.3936 81.5273 93.5156C81.5273 113.159 97.6139 129.141 117.387 129.141C137.16 129.141 153.246 113.159 153.246 93.5156C153.246 84.1222 149.598 75.2587 142.974 68.5576ZM117.387 117.266C104.205 117.266 93.4805 106.611 93.4805 93.5156C93.4805 64.03 103.293 42.2055 107.17 34.7344H110.795C109.078 41.439 106.928 50.7778 106.928 55.5156C106.928 59.2753 107.209 62.2957 108.581 64.8167C109.802 67.0623 112.358 69.7368 117.6 69.7653L117.861 69.7719C130.781 70.0206 141.293 80.6719 141.293 93.5156C141.293 106.611 130.569 117.266 117.387 117.266Z" fill="#B78454"/>
      <path d="M61.4468 68.5576C55.0346 62.0706 46.5341 58.3152 37.4285 57.926C37.3855 57.3607 37.3535 56.5817 37.3535 55.5156C37.3535 51.148 40.6968 37.8026 42.8044 30.4166L44.9611 22.8594L18.7885 22.8594L17.0353 25.6657C16.3399 26.779 0 53.3936 0 93.5156C0 113.159 16.0865 129.141 35.8594 129.141C55.6322 129.141 71.7188 113.159 71.7188 93.5156C71.7188 84.1222 68.0707 75.2587 61.4468 68.5576ZM35.8594 117.266C22.6775 117.266 11.9531 106.611 11.9531 93.5156C11.9531 64.03 21.7654 42.2055 25.643 34.7344H29.2675C27.5502 41.439 25.4004 50.7778 25.4004 55.5156C25.4004 59.2752 25.6813 62.2957 27.0532 64.8167C28.2751 67.0623 30.8307 69.7368 36.0727 69.7653L36.3336 69.7719C49.2541 70.0206 59.7656 80.6719 59.7656 93.5156C59.7656 106.611 49.0413 117.266 35.8594 117.266Z" fill="#B78454"/>
      </g>
      <defs>
      <clipPath id="clip0">
      <rect width="153" height="152" fill="white"/>
      </clipPath>
      </defs>
    </symbol>
 
    <!-- End of Rannojit-->
  
   </svg>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
$logoObj = get_field('hdlogo', 'options');
if( is_array($logoObj) ){
  $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
}else{
  $logo_tag = '';
}
?>
<header class="header">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="hdr-lft">
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
            </div>
            <div class="hdr-rgt clearfix">
              <nav class="main-nav">
              <?php 
                $menuOptions = array( 
                    'theme_location' => 'cbv_main_menu', 
                    'menu_class' => 'clearfix reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $menuOptions ); 
              ?>
              </nav>
              <div class="hdr-social">
                <ul class="reset-list clearfix">
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="hdr-lan">
                <ul class="reset-list clearfix">
                  <li><a class="active" href="#">EN</a></li>
                  <li><a href="#">IT</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</header>