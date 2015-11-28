<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- This is for our tab icon -->
    <!-- <link rel="icon" href="<?php bloginfo ('template_directory'); ?>/images/favicon.ico"> -->

    <title>
        <?php wp_title( '|', true, 'right'); ?>
    </title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="header">

        <div class='site-logo'>
            
             
        
            <nav>

                <a id = "CILink" href ="http://carleton.ca/confucius-institute/"><span class="popup" data-popuptext="Check out the Confucius Institute's website!"><img class="ci-logo" src=<?php echo get_template_directory_uri() . '/images/Logo-CISU.png' ?> />
  </span></a>
  <div id="menu">


    <p class = "cl-effect-1" id= "list"><a id = "philLink" href = "#buddha">Buddhism</a></p>
    <p class = "cl-effect-1" id= "list" ><a id = "philLink" href = "#taoism">Taoism</a></p>
    <p class = "cl-effect-1" id= "list" ><a id = "philLink" href = "#confucius">Confucianism</a></p>
    <p class = "cl-effect-1" id= "list" ><a id = "philLink" href = "#legalism">Legalism</a></p>
  </div>
</nav>

        </div>

</header>

<div class="content">
