<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick-theme.css">
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>




  <section class="lazy slider" data-sizes="50vw">
    <div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Screenshot_1.png">
    </div>
    <div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Screenshot_2.png">
    </div>
    <div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Screenshot_3.png">
    </div>
    <div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Screenshot_4.png">
    </div>
    <div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Screenshot_5.png">
    </div>
   
  </section>

