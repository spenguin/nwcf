<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="wrapper" class="hfeed">
            <header id="header" role="banner">
                <div id="branding">
                    <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                        <?php
                            // if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
                            // echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
                            // if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
                        ?>
                    </div>
                    <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
                    </div>
                    <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSe29bF0koJ0Ftf8E0Y1otk3vnv7fBSteblKCJ7Pr0x6Ck9mtQ/viewform?usp=header" target="_blank" class="button button__cta">Tables still available!</a>
                        <!-- <?php //wp_nav_menu( array( 'menu'=>'Main', 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?> -->
                    </nav>
                    <div class="branding__logo"><img src="<?php echo CORE_TEMPLATE_URL; ?>/assets/images/NWCF-Logo.png" /></div>
            </header>
            <div id="container" class="max-wrapper">
                <main id="content" role="main">