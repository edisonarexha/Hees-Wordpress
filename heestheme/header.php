<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div id="page" class="site">
    <a href="#content" class="skip-link screen-reader-text">
    <?php esc_html_e('Skip to content', 'heestheme'); ?>        
</a>

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
    <p class="site-title">
        <a href=" <?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>
    </p>
    <p class="site-description">
        <?php bloginfo('description'); ?>

    </p>
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php 
                wp_nav_menu([
                    'theme-location' => 'main-menu'
                ])
            ?>
        </nav>
    </header>

<div id="content" class="site-content">
    