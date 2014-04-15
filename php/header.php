<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

    <!-- Include only one concatenated stylesheet here, minified -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">

    <!-- Head scripts, avoid including scripts here -->
    <!-- Don't forget to compile and minify the used modernizr features, or to remove it when unused -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/modernizr.js"></script>
    
    <script type="text/javascript" src="//use.typekit.net/nva7lcq.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <!-- Wordpress head function -->
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >

  <!-- Include svg icons -->
  

  <!-- Header -->  
  <header class="Header">
    
    <div class="Header-logo">
        <div class="u-gridContainer Informatie">
        
          <div class="Logo">
              <a href="/" class="Logo-imageLink"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/kalishoek-logo.svg" alt="Logo"></a>
              <a href="/" class="Logo-textLink"><h1 class="Logo-heading"><span class="Logo-headingTop">Kalishoek Slotenservice</span>
                <span class="Logo-headingBottom">De slotenmaker voor Rotterdam en regio Hoekse Waard & Drechtsteden</span></h1></a>
          </div>
          <span class="u-objRight Phone">
          
            Bel ons voor meer informatie
        <span class="Phone-nr">0180-394444</span></h1></a>

          
          </span>
      </div>
    </div>

    <div class="Header-nav">
        <div class="u-gridContainer">
            <!-- Main navigation -->
            <?php include 'includes/navigation.php'; ?>

        </div>
    </div>
  

 <!-- Slider -->
  <div class="u-gridRow">
      <div class="Slider-frame">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/kalishoek3.jpg" />
      </div>
    </div>
  </div>

    
    <div class="u-gridRow bgwhite">
      <div class="u-gridContainer">
          <?php if(is_front_page()) {?><!-- Display banner only on the frontpage -->
          <?php }?>
      </div>  
    </div>
  </header>







        

