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
            <a href="<?php echo home_url(); ?>">
                <h1>
                    <?php bloginfo( 'name' ); ?>
                </h1>
            </a>
        </div>

</header>

<div class="content">
