<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SSC Site Template">
    <meta name="author" content="Jaden Chee">
    <link rel="shortcut icon" href="assets\images\logo.png">

    <?php wp_head(); ?>
</head>

<body>

<header>
    <div class="nav" role="navigation" aria-label="Header">
      <a href="#">
        <?php 
          if(function_exists('the_custom_logo')){
            
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
          }
        ?>   
        <img src="<?php echo $logo[0] ?>" alt="South Shore Conservatory logo" class="logo-img" />   
      </a>
      
        <!-- Enroll, Contact, Donate, Shop, Login -->
        <!-- calling WP menu to navigation bar -->
        <?php 
        wp_nav_menu(
            array(
                'menu' => 'header', 
                'container' => 'menu-header', //becomes <menu-header>, not called in source html but makes it customizable in #style
                'theme_location' => 'header', 
                'items_wrap' => '<ul id="" class="nav util-links">%3$s</ul>'
            )
        );
        ?>

    </div>
    <div class="nav" role="navigation" aria-label="Main">
      <!-- calling WP menu to navigation bar -->
        <?php 
        wp_nav_menu(
            array(
                'menu' => 'primary', 
                'container' => 'menu',
                'theme_location' => 'primary', 
                'items_wrap' => '<ul id="" class="nav util-links">%3$s</ul>'
            )
        );
        ?>

    </div>
</header>

</div>