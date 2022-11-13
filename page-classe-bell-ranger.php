<?php 
//Template Name: Classe Bellato Ranger
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