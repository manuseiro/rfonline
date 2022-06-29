         

        </main>
        <!-- /MAIN-WRAPPER-->
        <!-- ACCOMPANY -->
        <div class="fallow-me text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3">
                        <h4><?php _e( 'Follow RF Millenium', 'rfonline' );?></h4>
                        <a href="//www.facebook.com/rfmillenium" class="fallow-facebook" target="_black"><i class="fab fa-facebook"></i></a>
                        <a href="//www.instagram.com/rfmillenium" class="fallow-instagram" target="_black"><i class="fab fa-instagram"></i></a>
                        <a href="https://t.me/joinchat/Kl9DrBSKcKx660QNeJgsww" class="fallow-telegram" target="_black"><i class="fab fa-telegram"></i><span></span></a>
                        <a href="//discord.gg/c8VseAs" class="fallow-discord" target="_black"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <!-- /ACCOMPANY -->  
<!-- FOOTER-->
<footer>
            <div class="container-fluid">
                <div class="row footer-cont-top">
                    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 menu-footer">
                        <h6><i class="fas fa-server btn-icon"></i><?php _e( 'Server', 'rfonline' );?></h6>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'fourth',
                                'theme_location'    => 'fourth',
                                'depth'             => 2,
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </div>
                    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 menu-footer">
                        <h6><i class="fas fa-hands-helping btn-icon"></i><?php _e( 'Help', 'rfonline' );?></h6>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'fifth',
                                'theme_location'    => 'fifth',
                                'depth'             => 2,
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </div>
                    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 menu-footer">
                        <h6><i class="fas fa-trophy btn-icon"></i><?php _e( 'Ranking', 'rfonline' );?></h6>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'sixth',
                                'theme_location'    => 'sixth',
                                'depth'             => 2,
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </div>
                    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 menu-footer">
                        <h6><?php _e( 'Other Links', 'rfonline' );?></h6>
                        <ul>
                            <li><a href="<?php bloginfo('home'); ?>/downloads"><i class="fas fa-download btn-icon"></i><?php _e( 'Downloads', 'rfonline' );?></a></li>
                            <li><a href="<?php bloginfo('home'); ?>/translation"><i class="fas fa-language btn-icon"></i><?php _e( 'Translation', 'rfonline' );?></a></li>
                            <li><a href="<?php bloginfo('home'); ?>/updates"><i class="fas fa-redo btn-icon"></i><?php _e( 'Updates', 'rfonline' );?></a></li>
                            <li><a href="<?php bloginfo('home'); ?>/updates"><i class="fas fa-sitemap btn-icon"></i><?php _e( 'Sitemap', 'rfonline' );?></a></li>
                        </ul>    
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-4 col-md-offset-0">
                        <a href="<?php bloginfo('home'); ?>" title="<?php bloginfo('name'); ?>">
                            <img class="img-responsive img-footer lozad" data-src="<?php bloginfo('template_url'); ?>/images/logo-white.svg" alt="Logo <?php bloginfo('name'); ?>">
                        </a>
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-9 col-sm-offset-0 col-md-8 col-md-offset-0">
                        <p>RF Online © <?php _e( 'is a trademark of CCR Inc. These terms and all related materials, logos, and images are copyright', 'rfonline' );?> © CCR Inc.</br>
                        <?php _e( 'This site is in no way associated with or endorsed by CCR Inc', 'rfonline' );?> ©</p>
                    </div>
                </div>
                <hr class="my-0">
                <div class="row footer-cont-copy">
                    <div class="col-md-4">
                       
                    </div>
                    <div class="col-md-8">
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'seventh',
                                'theme_location'    => 'seventh',
                                'depth'             => 2,
                                'menu_class'        => 'navbar navbar-right',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /FOOTER-->
        <?php wp_footer(); ?>
        <script>
            lozad('.lozad', {
                load: function(target) {
                    target.src = target.dataset.src;
                    target.onload = function() {
                        target.classList.add('fadein');
                    }
                }
            }).observe();
        </script>
        <script>
            //LANGUAGE
			$("#language-selection").countrySelect({
				defaultCountry: "br",
				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
				responsiveDropdown: true,
				preferredCountries: ['br', 'en']
			});
		</script>
</body>

</html>