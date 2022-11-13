<?php

/*Template Name: Down thank You*/

get_header(); ?>

<!-- ARTICLE-POST -->

<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <!-- PAGE-POST -->
    <div class="downloads-thank">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-sm-12 header-title">
                    <h2 class="title"><?php _e( "Almost finished!", 'rfonline' );?></h2>
                    <p class="subtitle"><?php _e( 'Follow these <strong>3 easy steps</strong> to complete your <strong>RF Online</strong> installation.', 'rfonline' );?></p>
                </div>
                <div class="col-sm-12">
                    <p class="note"><?php _e( '<strong>Note:</strong> If your download did not start automatically, please <a href="//cdn.rf-millenium.org/rfonline_millenium_setup.exe">click here</a>.', 'rfonline' );?></p>
                </div>
                <div class="box-steps">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="step">
                            <span>1</span>
                        </div>
                        <div class="box-content">
                            <h2><?php _e( 'Save the RF Online file', 'rfonline' );?></h2>
                            <p><?php _e( 'Click "Save File" when prompted.', 'rfonline' );?></p> 
                            <img class="lozad" data-src="<?php bloginfo('template_url'); ?>/images/step1<?php _e( '-en', 'rfonline' );?>.png">
                        </div>       
                    </div> 
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="step">
                            <span>2</span>
                        </div>    
                        <div class="box-content">
                            <h2><?php _e( 'Open the RF Online file to install', 'rfonline' );?></h2>
                            <p><?php _e( 'Double-click the file in the list of downloaded files. If the list is not open, press Ctrl+J to show it.', 'rfonline' );?></p>
                            <img class="lozad" data-src="<?php bloginfo('template_url'); ?>/images/step2.png">
                        </div>       
                    </div> 
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="step">
                            <span>3</span>
                        </div>    
                        <div class="box-content">
                            <h2><?php _e( 'Follow setup instructions', 'rfonline' );?></h2>
                            <p><?php _e( 'Click the button in the installer window to begin installation.', 'rfonline' );?></p>
                            <img class="lozad" data-src="<?php bloginfo('template_url'); ?>/images/express-install<?php _e( '-en', 'rfonline' );?>.png">
                        </div>       
                    </div> 
                </div>      
            </div>
            </div>
        </div>
    </div>
    <!-- /USEFUL -->
</article>
<?php get_footer(); ?>