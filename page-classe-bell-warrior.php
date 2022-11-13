<?php 
//Template Name: Classe Bellato Warrior
get_header();?>

    <!-- HEADER-POST -->
    <header id="single-header" class="masthead single-header">
		<style type="text/css">
			.single-header::before{
				background-image: url(<?php if ( has_post_thumbnail()) {the_post_thumbnail_url('single-posts');} else {}?>);
			}
			</style>
            <div class="content-title">
                <div class="container-fluid">
                    <div  class="col-xs-12 col-lg-10 col-lg-offset-1">
                        <h1 class="title text-center"><?php the_title();?></h1>
					</div>
                </div>
            </div>
    </header>
    <!-- /HEADER-POST -->
    <div class="page-default page-classe">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img class="lozad" data-src="https://rf-millenium.org/wp-content/uploads/2019/09/class_w-myr.jpg" alt="Class Destroyer"/>
                    <h3 class="header-title"><?php _e( "Myrmidon", 'rfonline' );?></h3>
                    <h4 class="subtitle">Level 30 Class Advancement</h4>
                    <p>Destroyer units function as the main force for the Accretian army. They are very competent in melee combat and are the most powerful warriors among the three races on Novus.
                </div>
                <div class="col-sm-6">
                    <img class="lozad" data-src="https://rf-millenium.org/wp-content/uploads/2019/09/class_w-sentry.jpg" alt="Class Gladius"/>
                    <h3 class="header-title"><?php _e( "Sentry", 'rfonline' );?></h3>
                    <h4 class="subtitle">Level 30 Class Advancement</h4>
                    <p>Using weapon and shield instead of two-hand weapons, the Sentry balances attack and defense ability. With skills specializing in strategic shield techniques, Sentries play an important defensive role in the Bellato Federation.</p>
                </div>
                <div class="col-sm-4">
                    <img class="lozad" data-src="https://rf-millenium.org/wp-content/uploads/2019/09/class_w-berserk.jpg" alt="Class Destroyer"/>
                    <h3 class="header-title"><?php _e( "Berserker", 'rfonline' );?></h3>
                    <h4 class="subtitle">Level 30 Class Advancement</h4>
                    <p>Punisher units have the capacity to identify opponents’ weak points and use skills to ensnare enemies.</p>
                </div>
                <div class="col-sm-4">
                    <img class="lozad" data-src="https://rf-millenium.org/wp-content/uploads/2019/09/class_w-warden.jpg" alt="Class Destroyer"/>
                    <h3 class="header-title"><?php _e( "Warden", 'rfonline' );?></h3>
                    <h4 class="subtitle">Level 30 Class Advancement</h4>
                    <p>Assaulter units equalize potent offensive and defensive capacity.</p>
                </div>
                <div class="col-sm-4">
                    <img class="lozad" data-src="https://rf-millenium.org/wp-content/uploads/2019/09/class_w-sentinel.jpg" alt="Class Destroyer"/>
                    <h3 class="header-title"><?php _e( "Sentinel", 'rfonline' );?></h3>
                    <h4 class="subtitle">Level 30 Class Advancement</h4>
                    <p>Built to withstand Force assaults, Warders are structured with innovative frames that enable more efficient use of chargers.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE-CLASSE -->
    <article id="page-classe" class="page-default page-classe">
        <div class="container-fluid">
            <div class="row">
               
            <aside id="page-next-classe" class="page-next-classe">
                <div class="col-xs-12 col-sm-6">
                    <h4 class="col-xs-12"><?php _e( "All Bellato Classes", 'rfonline' );?></h4>
                    <div class="next-classe">
                        <a href="<?php bloginfo('home'); ?>/bellato-warrior" class="next-class-item">
                            <figure>
                                <img class="next-class-avatar lozad" data-src="<?php bloginfo('template_url'); ?>/images/classe/bell-warrior.png" alt="">
                            </figure>
                            <p><?php _e( "Warrior", 'rfonline' );?></p>
                        </a>
                    </div>
                    <div class="next-classe">
                        <a href="<?php bloginfo('home'); ?>/bellato-ranger" class="next-class-item">
                            <figure>
                                <img class="next-class-avatar lozad" data-src="<?php bloginfo('template_url'); ?>/images/classe/bell-ranger.png" alt="">
                            </figure>
                            <p><?php _e( "Ranger", 'rfonline' );?></p>
                        </a>
                    </div>
                    <div class="next-classe">
                        <a href="<?php bloginfo('home'); ?>/bellato-mage" class="next-class-item">
                            <figure>
                                <img class="next-class-avatar lozad" data-src="<?php bloginfo('template_url'); ?>/images/classe/bell-mage.png" alt="">
                            </figure>
                            <p><?php _e( "Mage", 'rfonline' );?></p>
                        </a>
                    </div>
					<div class="next-classe">
                        <a href="<?php bloginfo('home'); ?>/bellato-specialist" class="next-class-item">
                            <figure>
                                <img class="next-class-avatar lozad" data-src="<?php bloginfo('template_url'); ?>/images/classe/bell-specialist.png" alt="">
                            </figure>
                            <p><?php _e( "Specialist", 'rfonline' );?></p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <?php include 'sidebar-classes-race.php';?>
                </div>
            </aside>
            </div>
        </div>
    </article>
    <!-- /PAGE-CLASSE -->
<?php get_footer(); ?>