<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
        <link rel="icon" href="<?php echo CORE_TEMPLATE_URL; ?>/assets/images/NWCF-favicon.png" type="image/x-icon">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="wrapper" class="hfeed">
            <header id="header" role="banner">
                <div class="max-wrapper">
                    <div id="branding" class="branding">
                        <div class="branding__wrapper">
                            <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
                            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdKVqhEM1RVsO5enrxQzeYhQwfsrKduuX7ps4R_xpkYipg7JA/viewform?usp=header" target="_blank" class="button button__cta">Tables now available!</a>
                                <!-- <a target="_blank" class="button button__cta">Tables are no longer available!</a>                                 -->
                                <!-- <?php //wp_nav_menu( array( 'menu'=>'Main', 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?> -->
                            </nav>
                        </div>
                        <div class="branding__logo"><img src="<?php echo CORE_TEMPLATE_URL; ?>/assets/images/NWCF-Logo.png" /></div>
                        <div class="branding__introduction">
                            <?php 
                                echo get_post_by_title('Introduction');
                            ?>
                        </div>
                    </div>
                </div>
            </header>
            <div id="container" class="max-wrapper">
                <main id="content" role="main">