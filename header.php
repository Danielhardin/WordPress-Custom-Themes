<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <?php 
    wp_head();
  ?>
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
          <?php 
                    if(function_exists('the_custom_logo'))
                    {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
            ?>
            <img src="<?php echo $logo[0]; ?>" alt="" />
            <span>
            <?php echo get_bloginfo('name'); ?>
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="navbar-nav ml-auto mr-2" id="">%3$s</ul>'
                        )
                    );
            ?>
          
          </div>
          
         <?php 
             dynamic_sidebar('sidebar-1');
         ?>
        </nav>
      </div>
    </header>
    <!-- end header section -->


  </div>

  <!-- custom menu -->
  <div class="custom_menu-container">
    <div class="container">
      <div class="custom_menu">
      <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="navbar-nav" id="">%3$s</ul>'
                        )
                    );
        ?>
      </div>
    </div>
  </div>

  <!-- custom menu -->
