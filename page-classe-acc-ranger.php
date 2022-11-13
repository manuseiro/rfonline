<?php 
//Template Name: Classe Accretia Ranger
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