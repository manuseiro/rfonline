<?php 
//Template Name: Classe Accretia Warrior
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
    <article id="page-classe" class="page-default page-classe">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-xs-offset-0 col-sm-6">
                    <img class="lozad" data-src="https://rf-millenium.org/wp-content/uploads/2019/09/class_destroyer.jpg" alt="">
                    <div class="sub-classe-title"><h4><?php _e( "Destroyer", 'rfonline' );?></h4></div>
                    <div class="sub-classe-subtitle">
                    <p><strong><?php _e( "Level 30 Class Advancement", 'rfonline' );?></strong> <br> 
                        <strong><?php _e( "Required:", 'rfonline' );?> <?php _e( "None", 'rfonline' );?></strong></p>
                        <p><?php _e( "Destroyer units function as the main force for the Accretian army. They are very competent in melee combat and are the most powerful warriors among the three races on Novus.", 'rfonline' );?></strong></p>
                    </div>
                </div>
                <div class="col-xs-12 col-xs-offset-0 col-sm-6">
                    <img class="lozad" data-src="https://rf-millenium.org/wp-content/uploads/2019/09/class_gladius.jpg" alt="">
                    <div class="sub-classe-title"><h4><?php _e( "Gladius", 'rfonline' );?></h4></div>
                    <div class="sub-classe-subtitle">
                    <p><strong><?php _e( "Level 30 Class Advancement", 'rfonline' );?></strong> <br> 
                        <strong><?php _e( "Required:", 'rfonline' );?> <?php _e( "None", 'rfonline' );?></strong></p>
                        <p><?php _e( "Gladius units utilize one-hand weapons with the unique Accretian shields, which are significantly more powerful than those of other races. Gladius class therefore prioritize shield techniques.", 'rfonline' );?></strong></p>
                    </div>
                </div>
                <div class="col-xs-12 col-xs-offset-0 col-sm-4">
                    <img class="lozad" data-src="https://rf-millenium.org/wp-content/uploads/2019/09/class_punisher.jpg" alt="">
                    <div class="sub-classe-title"><h4><?php _e( "Punisher", 'rfonline' );?></h4></div>
                    <div class="sub-classe-subtitle">
                    <p><strong><?php _e( "Level 40 Class Advancement", 'rfonline' );?></strong> <br> 
                        <strong><?php _e( "Required:", 'rfonline' );?> <?php _e( "Destroyer", 'rfonline' );?></strong></p>
                        <p><?php _e( "Punisher units have the capacity to identify opponents’ weak points and use skills to ensnare enemies.", 'rfonline' );?></strong></p>
                    </div>
                </div>
                <div class="col-xs-12 col-xs-offset-0 col-sm-4">
                    <img class="lozad" data-src="https://rf-millenium.org/wp-content/uploads/2019/09/class_dreadnought.jpg" alt="">
                    <div class="sub-classe-title">
                        <h4><?php _e( "Dreadnought", 'rfonline' );?></h4>
                    </div>
                    <div class="sub-classe-subtitle">
                        <p><strong><?php _e( "Level 40 Class Advancement", 'rfonline' );?></strong> <br> 
                        <strong><?php _e( "Required:", 'rfonline' );?> <?php _e( "Destroyer", 'rfonline' );?> <?php _e( "or", 'rfonline' );?> <?php _e( "Gladius", 'rfonline' );?></strong></p>
                        <p><?php _e( "Assaulter units equalize potent offensive and defensive capacity.", 'rfonline' );?></strong></p>
                    </div>
                </div>
                <div class="col-xs-12 col-xs-offset-0 col-sm-3 col-sm-offset-1">
                    <img class="lozad" data-src="https://rf-millenium.org/wp-content/uploads/2019/09/class_warder.jpg" alt="">
                    <div class="sub-classe-title">
                        <h4><?php _e( "Warder", 'rfonline' );?></h4>
                    </div>
                    <div class="sub-classe-subtitle">
                    <p><strong><?php _e( "Level 40 Class Advancement", 'rfonline' );?></strong> <br> 
                        <strong><?php _e( "Required:", 'rfonline' );?> <?php _e( "Gladius", 'rfonline' );?></strong></p>
                        <p><?php _e( "Built to withstand Force assaults, Warders are structured with innovative frames that enable more fficient use of chargers.", 'rfonline' );?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- PAGE-CLASSE -->
    <article id="page-classe" class="page-default page-classe">
        <div class="container-fluid">
            <div class="row">
                
            <aside id="page-next-classe" class="page-next-classe">
                <div class="col-xs-12 col-sm-6">
                    <h4 class="col-xs-12"><?php _e( "All Accretia Classes", 'rfonline' );?></h4>
                    <div class="next-classe">
                        <a href="<?php bloginfo('home'); ?>/accretia-warrior" class="next-class-item">
                            <figure>
                                <img class="next-class-avatar lozad" data-src="<?php bloginfo('template_url'); ?>/images/classe/acc-warrior.png" alt="">
                            </figure>
                            <p><?php _e( "Warrior", 'rfonline' );?></p>
                        </a>
                    </div>
                    <div class="next-classe">
                        <a href="<?php bloginfo('home'); ?>/accretia-ranger" class="next-class-item">
                            <figure>
                                <img class="next-class-avatar lozad" data-src="<?php bloginfo('template_url'); ?>/images/classe/acc-ranger.png" alt="">
                            </figure>
                            <p><?php _e( "Ranger", 'rfonline' );?></p>
                        </a>
                    </div>
                    <div class="next-classe">
                        <a href="<?php bloginfo('home'); ?>/accretia-specialist" class="next-class-item">
                            <figure>
                                <img class="next-class-avatar lozad" data-src="<?php bloginfo('template_url'); ?>/images/classe/acc-specialist.png" alt="">
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