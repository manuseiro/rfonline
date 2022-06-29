<?php get_header(); ?>
<!-- COVER-->
<div id="cover" class="cover">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-lg-offset-3 col-md-offset-2 col-sm-offset-1">
                <h1 class="cover-title"><?php _e( "I'll be back, soon the server will be back. Wait...", 'rfonline' );?>
                </h1>
                <p><?php _e( "Are you ready for the best PvP? Soon, wait...", 'rfonline' );?></p>
                <p><a
                        class="btn btn-primary btn-xs"><?php _e( "Sign up for the Beta", 'rfonline' );?><?php //_e( "Play free now", 'rfonline' );?></a>
                </p>
            </div>
            <!-- USEFUL -->
            <div id="useful" class="useful col-xs-12">
                <!-- Service Box start -->
                <div class="col-useful col-xs-12 col-sm-6 col-md-4">
                    <a class="btn-useful" href="#">
                        <div class="useful-icon">
                            <i class="fas fa-sign-in-alt" aria-hidden="true"></i>
                        </div>
                        <div class="useful-text">
                            <h5><?php _e( "Create Account", 'rfonline' );?></h5>
                            <p><?php _e( "Create your account for free and play", 'rfonline' );?></p>
                        </div>
                    </a>
                </div>
                <div class="col-useful col-xs-12 col-sm-6 col-md-4 col-desktop">
                    <a class="btn-useful" href="<?php bloginfo('home'); ?>/downloads">
                        <div class="useful-icon">
                            <i class="fas fa-cloud-download-alt" aria-hidden="true"></i>
                        </div>
                        <div class="useful-text">
                            <h5><?php _e( "Download Now", 'rfonline' );?></h5>
                            <p><?php _e( "Download and Play Now", 'rfonline' );?></p>
                        </div>
                    </a>
                </div>
                <div class="col-useful col-xs-12 col-sm-6 col-md-4">
                    <a class="btn-useful" href="<?php bloginfo('home'); ?>/donation">
                        <div class="useful-icon">
                            <i class="fas fa-donate" aria-hidden="true"></i>
                        </div>
                        <div class="useful-text">
                            <h5><?php _e( "Make a Donation", 'rfonline' );?></h5>
                            <p><?php _e( "Collaborate with the Server", 'rfonline' );?></p>
                        </div>
                    </a>
                </div>
                <!-- Service Box end -->
            </div>
            <!-- /USEFUL -->
        </div>
    </div>
</div>
<!-- /COVER-->
<!-- SERVER-STATUS -->
<div id="counter" class="counter text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 header-title text-center wow fadeIn animated" data-wow-offset="120"
                data-wow-duration="1.5s">
                <h2 class="title"><?php _e( "Server Status", 'rfonline' );?></h2>
                <p class="subtitle"><?php _e( 'Real time status of our server', 'rfonline' );?></p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="status-icon">
                    <i class="fas fa-globe-americas "></i>
                </div>
                <div class="status-content">
                    <h5 class="status-title"><?php _e( "Game", 'rfonline' );?></h5>
                    <span><strong class="server-on">Online</strong>,
                        <?php _e( "checked in the last 60 min", 'rfonline' );?>.</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="status-icon">
                    <i class="fas fa-gamepad"></i>
                </div>
                <div class="status-content">
                    <h5 class="status-title"><?php _e( "Client", 'rfonline' );?></h5>
                    <span><strong class="server-off">Offline</strong>,
                        <?php _e( "checked in the last 60 min", 'rfonline' );?>.</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="status-icon">
                    <i class="fas fa-gamepad"></i>
                </div>
                <div class="status-content">
                    <h5 class="timer status-title">+<span class="counter-up">9999</span>
                        <?php _e( "Players", 'rfonline' );?></h5>
                    <span><?php _e( "Checked in the last 1440 min", 'rfonline' );?>.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /SERVER-STATUS -->
<!-- LAST NOTICE -->
<div id="last-notice" class="last-notice">
    <div class="container-fluid">
        <div class="row">
            <?php query_posts('showposts=3');
                    if(have_posts()) :while(have_posts()) : the_post();?>
            <article class="last-notice-article col-xs-12 col-sm-6">
                <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                    <img class="lozad"
                        data-src=" <?php if ( has_post_thumbnail()) {the_post_thumbnail_url('home-posts');} else {?><?php bloginfo('template_url'); ?>/images/last-news-default.jpg<?php };?>">

                    <figcaption class="last-resume-notice">
                        <h5><?php the_title();?></h5>
                    </figcaption>
                </a>
            </article>
            <?php endwhile;?>
            <div class="col-xs-12 load-more text-center">
                <a title="<?php _e( "See all News", 'rfonline' );?>" href="<?php bloginfo('home'); ?>/category/news"
                    class="btn btn-yellow"><i
                        class="fas fa-plus btn-icon"></i><?php _e( "See all News", 'rfonline' );?></a>
            </div>
            <?php else:?>
            <?php endif;?>
        </div>
    </div>
</div>
<!-- /NEWS-POSTS -->
<!-- SYSTEM-REQUIRE -->
<div id="system-require" class="system-require">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 header-title text-center wow animated fadeInUp">
                <h2 class="title"><?php _e( "Game Requirements", 'rfonline' );?></h2>
                <div class="subtitle"><?php _e( "Minimum requirements needed to run the game", 'rfonline' );?></div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="sr-features">
                    <div class="sr-features-icon">
                        <i class="fab fa-windows" aria-hidden="true"></i>
                    </div>
                    <div class="sr-features-text">
                        <h5><?php _e( "Operational Systems:", 'rfonline' );?></h5>
                        <p><?php _e( "Microsoft Windows 7 Service Pack 1 or later with latest updates, hotfixes, and service packs installed", 'rfonline' );?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="sr-features">
                    <div class="sr-features-icon">
                        <i class="fas fa-hdd" aria-hidden="true"></i>
                    </div>
                    <div class="sr-features-text">
                        <h5><?php _e( "Disk Space:", 'rfonline' );?></h5>
                        <p><?php _e( "Minimum of 7 GB of free disk space (additional space for executable and patch updates)", 'rfonline' );?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="sr-features">
                    <div class="sr-features-icon">
                        <i class="fas fa-microchip" aria-hidden="true"></i>
                    </div>
                    <div class="sr-features-text">
                        <h5><?php _e( "CPU:", 'rfonline' );?></h5>
                        <p><?php _e( "Intel Pentium 4/AMD Athlon 64 processor or faster", 'rfonline' );?></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="sr-features">
                    <div class="sr-features-icon">
                        <i class="fas fa-film" aria-hidden="true"></i>
                    </div>
                    <div class="sr-features-text">
                        <h5><?php _e( "Graphics Card:", 'rfonline' );?></h5>
                        <p><?php _e( "nVIDIA Geforce FX Series, nVIDIA Geforce 6 or over, ATI Radeon 9500, ATI Radeon X700 or over", 'rfonline' );?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="sr-features">
                    <div class="sr-features-icon">
                        <i class="fas fa-memory" aria-hidden="true"></i>
                    </div>
                    <div class="sr-features-text">
                        <h5><?php _e( "RAM:", 'rfonline' );?></h5>
                        <p><?php _e( "2 GB of RAM or more", 'rfonline' );?></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 ">
                <div class="sr-features">
                    <div class="sr-features-icon">
                        <i class="fas fa-bullhorn" aria-hidden="true"></i>
                    </div>
                    <div class="sr-features-text">
                        <h5><?php _e( "Driver Updates:", 'rfonline' );?></h5>
                        <p><?php _e( "Download the most current version of the most current driver for your graphics card. Keep in mind there may be different versions of the driver depending on your OS. ", 'rfonline' );?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /SYSTEM-REQUIRE -->
<!-- OLD-DAYS -->
<div id="old-days" class="old-days text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h3><?php _e( "Come play the best private server of rfonline", 'rfonline' );?></h3>
                <p><?php _e( "Invite your friends to feel nostalgia again, in playing a good rf server online. Focused on PVP to facilitate players who do not have much time to lose.", 'rfonline' );?>
                </p>
                <p><button class="btn btn-yellow"><?php _e( "Sign Up", 'rfonline' );?></button></p>
            </div>
        </div>
    </div>
</div>
<!-- /OLD-DAYS -->
<!-- FAQ -->
<div id="faq" class="faq faq-last">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 header-title text-center wow fadeIn animated" data-wow-offset="120"
                data-wow-duration="1.5s">
                <h2 class="title"><?php _e( "Have questions about the Server?", 'rfonline' );?></h2>
                <div class="subtitle"><?php _e( "We'll explain everything right to you.", 'rfonline' );?></div>
            </div>
            <div class="col-md-6 col-lg-6 col-md-8 col-sm-10 col-sm-offset-1 col-xs-12">
                <?php
                                query_posts('post_type=faq&order=ASC')
                            ?>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php	if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="panel panel-faq">
                        <div class="panel-heading" role="tab" id="heading<?php the_id() ?>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse<?php the_id() ?>" aria-expanded="true"
                                    aria-controls="collapse<?php the_id() ?>">
                                    <i class="fas more-less fa-plus"></i>
                                    <?php the_title(); ?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse<?php the_id() ?>" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="heading<?php the_id() ?>">
                            <div class="panel-body">
                                <?php echo the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <article class="text-center">
                        <h3><?php _e( "Nothing found", 'rfonline' );?></h3>
                        <p><?php _e( "Sorry, there are still no frequently asked questions (F.A.Q).", 'rfonline' );?>
                        </p>
                    </article>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div><!-- panel-group -->
            </div>
        </div>
        <div class="col-sm-12 load-more text-center wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
            <a title="<?php _e( "Remove all doubts", 'rfonline' );?>" href="<?php bloginfo('home'); ?>/faq"
                class="btn btn-yellow"><i
                    class="fas fa-plus btn-icon"></i><?php _e( "Remove all Doubts", 'rfonline' );?></a>
        </div>
    </div>
</div>
<!-- /FAQ -->
<?php get_footer(); ?>