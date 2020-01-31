
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="redwolfmendoza@gmail.com">

    <title>Best Elder Care</title>
    

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/all.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/besteldercare-theme.min.css">

  </head>

  <?php
    $bodyClass = 'page';
    if( is_front_page() || is_home() ):
      $bodyClass = 'home';
    endif;
  ?>

  <body class="<?php print $bodyClass; ?>">
    
    <?php include('inc-main-nav.php'); ?>
