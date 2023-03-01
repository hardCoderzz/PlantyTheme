<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Planty</title>
  <?php wp_head(); ?>
</head>
<body>
  <nav class="main-navigation">
    <div class="logo"> 
      <a href="planty.local"><?php the_custom_logo();?></a>
    </div>
    <div class="nav-item">
    <?php
            wp_nav_menu([
                'theme_location' => 'Primary menu',
                'container' => false,
                'menu_class' => 'nav-menu'
            ]);
            ?>
    </div>
  </nav>


