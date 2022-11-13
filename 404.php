<?php get_header(); ?> 
<div class="error">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
                <div class="error-code">
                    <i id="error404" class="fa fa-exclamation-triangle"></i>
                </div> 
                <h3 class="error-title"><?php _e( "Error 404, Page not found..", 'rfonline' );?></h3>
                <div class="error-desc">
                <p><?php _e( 'Sorry, but the page you are looking for was either not found or does not exist. Try refreshing the page or click the button below to go back to the Homepage.', 'rfonline' );?></p>
                    <div class="bt-home">
                        <a class="btn btn-yellow" href="<?php bloginfo('home'); ?>">
                            <i class="fa fa-arrow-left btn-icon"></i><?php _e( 'Go back Home', 'rfonline' );?>                        
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>