<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
</head>
<body <?php body_class();?>>
<div id="fb-root"></div>
<div class="wrap">

<header>
    <div class="d-flex align-items-center justify-content-between desktop-menu">

        <a href="<?php echo get_home_url(); ?>">
            <img src="<?php bloginfo( 'template_directory' );?>/img/logo.gif" alt="Akvariehobby logo" class="logo img-fluid"/>
        </a>
        <div class="d-flex align-items-right justify-content-between menu-content">
            <nav class="navbar navbar-expand-lg" role="navigation">
                <div class="menu-icons">
                    <div class="d-flex flex-row-reverse text-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        
                        <?php 
                            wp_nav_menu( 
                                array( 
                                    'theme-location' => 'top-menu',
                                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                    'container'       => 'div',
                                    'container_class' => 'collapse navbar-collapse',
                                    'container_id'    => 'collapsibleNavbar',
                                    'menu_class'      => 'navbar-nav mr-auto',
                                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'          => new WP_Bootstrap_Navwalker(),
                                ) 
                            );
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
