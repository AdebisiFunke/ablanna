<?php

/**
 * Ablanna Header Section
 * @package ablanna
 */

add_action('ablanna_header', 'ablanna_header_section');
function ablanna_header_section()
{ ?>
<main id="primary" role="main">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'ablanna'); ?></a>
    <header class="container-fluid">
        <div class="row">
            <div class="header-area">
                <div class="site-branding text-center">
                    <div class="site-branding">
                        <?php
                            the_custom_logo();
                            if (is_front_page() && is_home()) :
                            ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php
                            else :
                            ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php
                            endif;
                            $ablanna_description = get_bloginfo('description', 'display');
                            if ($ablanna_description || is_customize_preview()) :
                            ?>
                        <p class="site-description"><?php echo $ablanna_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                            ?></p>
                        <?php endif; ?>
                        <div class="ablanna-responsive-menu"></div>
                        <button
                            class="screen-reader-text menu-close"><?php esc_html_e('Close Menu', 'ablanna') ?></button>
                        <nav class="mainmenu" role="navigation">
                            <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu',)); ?>
                        </nav>
                        <!--.main menu-->
                    </div><!-- .site-branding -->
                </div>
                <!--header-area-->
            </div>
            <!--.row-->
    </header>
    <!--.container-fluid-->
    <section>
        <?php if ((is_front_page() || is_home()) and (get_header_image())) { ?>
        <!--load customizer image -->
        <img class="img-fluid" src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>"
            height="<?php echo absint(get_custom_header()->height); ?>" alt="blog posting">
        <?php } elseif ((is_page() || is_single()) and (has_post_thumbnail())) {
                $featured_img_url = esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full'), 'ablanna'); ?>
        <img class="img-fluid" src="<?php echo esc_url($featured_img_url, 'ablanna'); ?>" alt="blog posting">
        <?php } else { ?>
        <img class="img-fluid"
            src="<?php echo esc_url(get_template_directory_uri(), 'ablanna'); ?>/images/LW8SH6SOXT-default.jpg"
            alt="blog posting">
        <?php } ?>
    </section>
    <!--.img-fluid-->
    <?php  } ?>