<?php

/**
 * Ablanna Footer Section
 * @package ablanna
 */ ?>
<?php
function ablanna_footer_section()
{ ?>
<div id="footer" role="contentinfo">
    <div class="container py-3">
        <div class="row">
            <div class="col-lg-6">
                <div class="copyright text-center"><a
                        href="<?php echo esc_url(__('https://wordpress.org/', 'ablanna')); ?>">
                        <?php printf(esc_html__('Proudly Powered By %s', 'ablanna'), 'WordPress'); ?></a></div>
            </div><!-- .col-lg-6-->
            <div class="col-lg-6">
                <div class="copyright-right text-center"><a
                        href="<?php echo esc_url(__('https://wpdevtechsupport.com/', 'ablanna')); ?>">
                        <?php printf(esc_html__('Theme By: %s', 'ablanna'), 'WPDevTechSupport'); ?></a></div>
            </div><!-- .col-lg-6-->
        </div><!-- .row-->
    </div><!-- .container-->
</div><!-- #footer-->
<?php }
add_action('ablanna_footer', 'ablanna_footer_section');