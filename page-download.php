<?php 
/*Template Name: Download*/
get_header();?>

    <!-- HEADER-POST -->
    <header id="single-header" class="masthead single-header">
		<style type="text/css">
			.single-header::before{
				background-image: url(<?php if ( has_post_thumbnail()) {the_post_thumbnail_url('single-posts');} else {}?>);
			}
			</style>
            <div class="content-title text-center">
                <div class="container">
                    <div  class="col-xs-12 col-lg-10 col-lg-offset-1">
                        <?php bloglite_breadcrumb(); ?>
                        <h1 class="title"><?php the_title();?></h1>
					</div>
                </div>
            </div>
    </header>
    <!-- /HEADER-POST -->
    <!-- PAGE-DOWNLOAD -->
    <div id="page-download" class="page-default page-download">
        <div class="container-fluid">
            <div class="row">
                <div class="subheader col-xs-12 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
                    <p><?php _e( "The RFM Launcher version is now available for download and installation. The new RFM Launcher will offer a convenient hub for starting, updating and playing RF Millenium. Click the download button below.", 'rfonline' );?></p>
                    <p class="col-desktop"><a href="//cdn.rf-millenium.org/RFMillenium_AutoUpdate.exe" class="btn btn-yellow btn-xl" title="Download"><?php _e( "Download", 'rfonline' );?></a><p>
                    <div class="col-mobile">
                        <div class="alert alert-info" role="alert">
                            <p><?php _e( "Please visit this page on your PC to download the game installer.", 'rfonline' );?></p></div>
                        </div>
                    </div>
                <div class="page-down-screenshot col-xs-12">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
                    <img class="img-responsive screnshot-launcher lozad" data-src="<?php bloginfo('template_url'); ?>/images/laucher-download.png" alt="ScreenShot Launcher">
                    </div>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0 content-wrap">
                    <?php _e( "<p>With an updated look and feel, the new RFM Launcher will offer these benefits:</p>
                        <ul>
                            <li>Improved support for installing, updating and launching RF Millenium.</li>
                            <li>Convenient access to the official website, forums and customer support.</li>
                            <li>Immediate access to the latest RF Millenium news.</li>
                            <li>Direct feed to watch RF Millenium Twitch streams and YouTube videos directly from the launcher.</li>
                        </ul>", 'rfonline' );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /PAGE-DOWNLOAD -->
    <!-- PAGE-DOWNLOAD-FAQ -->
    <div id="page-down-faq" class="page-default page-down-faq">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 header-title text-center wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                    <h2 class="title"><?php _e( "FAQ", 'rfonline' );?></h2>
                </div>
                <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-download">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="fas more-less fa-plus"></i>
                                                Titulo do Panel
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Conteudo do Panel
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-download">
                                    <div class="panel-heading" role="tab" id="heading1">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                <i class="fas more-less fa-plus"></i>
                                                Why is the NC Launcher being updated?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                        <div class="panel-body">
                                        You are currently not required to upgrade to the new NC Launcher, however we recommend installing the new NC Launcher to improve your Lineage II experience. The new NC Launcher will be required to play Lineage II beginning on September 5, 2019.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-download">
                                    <div class="panel-heading" role="tab" id="heading2">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                <i class="fas more-less fa-plus"></i>
                                                Do I need to use the new NC Launcher?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                        <div class="panel-body">
                                        No, you do not need to download and reinstall the new NC launcher again if you already installed it when it was introduced with Blade & Soul. Your launcher will automatically update to support Lineage II when you launch it. After logging in, simply click on the Lineage II icon in the top right corner and the carousel view will switch to Lineage II. If you have Lineage II already installed on your PC, simply click the “Update” button and the new NC Launcher will be configured to launch Lineage II. If you do not have Lineage II installed on your PC, simply click the “Install Game” button to begin the game installation process.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-download">
                                    <div class="panel-heading" role="tab" id="heading3">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                <i class="fas more-less fa-plus"></i>
                                                Do I need to download and reinstall the new NC Launcher if I installed it with Blade & Soul?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                        <div class="panel-body">
                                        We are no longer supporting Lineage II through Steam. If you had previously played Lineage II through Steam, we recommend that you download and install the new NC Launcher to continue playing Lineage II. Please contact our customer support team if you have any questions regarding this change.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-download">
                                    <div class="panel-heading" role="tab" id="heading4">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                <i class="fas more-less fa-plus"></i>
                                                Will I be able to continue playing Lineage II through Steam with the new NC Launcher?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                        <div class="panel-body">
                                        The new NC Launcher will support the following languages: English (US), English (UK), French, German, Portuguese (Brazil). However, Lineage II will continue to support only English within the game and on the web.
                                        </div>
                                    </div>
                                </div>
                            </div><!-- panel-group -->
                </div>
            </div>
        </div>
    </div>
    <!-- /PAGE-DOWNLOAD-FAQ -->
    <!-- SYSTEM-REQUIRE -->
    <div id="system-require" class="system-require">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 header-title text-center wow fadeIn animated" data-wow-offset="120" data-wow-duration="1.5s">
                    <h2 class="title"><?php _e( "System Requirements", 'rfonline' );?></h2>
                    <div class="subtitle"><?php _e( "Minimum requirements needed to run the game", 'rfonline' );?></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="sr-features">
                        <div class="sr-features-icon">
                            <i class="fab fa-windows" aria-hidden="true"></i>
                        </div>
                        <div class="sr-features-text">
                            <h5><?php _e( "Operational Systems:", 'rfonline' );?></h5>
                            <p><?php _e( "Microsoft Windows 7 Service Pack 1 or later with latest updates, hotfixes, and service packs installed", 'rfonline' );?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
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
                <div class="col-md-4 col-sm-6">
                    <div class="sr-features">
                        <div class="sr-features-icon">
                            <i class="fas fa-hdd" aria-hidden="true"></i>
                            </div>
                        <div class="sr-features-text">
                            <h5><?php _e( "Disk Space:", 'rfonline' );?></h5>
                            <p><?php _e( "Minimum of 7 GB of free disk space (additional space for executable and patch updates)", 'rfonline' );?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
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
                <div class="col-md-4 col-sm-6">
                    <div class="sr-features">
                        <div class="sr-features-icon">
                            <i class="fas fa-film" aria-hidden="true"></i>
                        </div>
                        <div class="sr-features-text">
                            <h5><?php _e( "Graphics Card:", 'rfonline' );?></h5>
                            <p><?php _e( "nVIDIA Geforce FX Series, nVIDIA Geforce 6 or over, ATI Radeon 9500, ATI Radeon X700 or over", 'rfonline' );?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="sr-features">
                        <div class="sr-features-icon">
                            <i class="fas fa-bullhorn" aria-hidden="true"></i>
                        </div>
                        <div class="sr-features-text">
                            <h5><?php _e( "Driver Updates:", 'rfonline' );?></h5>
                            <p><?php _e( "Download the most current version of the most current driver for your graphics card. Keep in mind there may be different versions of the driver depending on your OS. ", 'rfonline' );?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /SYSTEM-REQUIRE -->
<?php get_footer(); ?>