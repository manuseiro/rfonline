<?php 
//Template Name: About RFOnline
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
            <?php include 'sidebar-races.php';?>
    </header>
    <!-- /HEADER-POST -->
    <!-- PAGE-POST -->
    <article id="page-race" class="page-default page-race page-race-acc">
                
        <div class="container-fluid">
            <div class="row">
                <section class="col-xs-12 col-sm-8 content-wrap">
                 <img class="img-icon-race img-race-acc" src="<?php bloginfo('template_url'); ?>/images/race-icon-acc.png" alt="Race <?php the_title();?>">
                    <?php if(have_posts()) :while(have_posts()) : the_post();?>
                        <div class="race-overview">
                            <?php the_content(); ?>   
                        </div>
                    <?php endwhile;?>
                    <?php else :?>
                    <?php endif;?>
                </section>
            </div>
        </div>
    </article>
    <div id="page-race" class="page-default page-race-class">    
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-sm-12 header-title">
                        <h2 class="title"><?php _e( "Explore Available Classes", 'rfonline' );?></h2>
                    </div>
                    <aside class="col-xs-12 col-sm-6 col-md-4">
                        <div class=" box-class text-center">
                            <img class="class-avatar" src="<?php bloginfo('template_url'); ?>/images/acc-class-warrior.png" alt="" >
                            <h4 class="class-title"><?php _e( "Warrior", 'rfonline' );?></h4>
                            <p class="class-overview">A basic melee fighter class, destined for more specialization in weapons and to wear heavy or light armor. At level 20, the Human Fighter must choose to be either a damage-based Warrior, a stealthy Rogue, or a defense-based Human Knight.</p>
                            <a href="#" class="btn btn-yellow btn-lg">Learn More</a>
                        </div>
                    </aside>
                    <aside class="col-xs-12 col-sm-6 col-md-4">
                        <div class=" box-class text-center">
                            <img class="class-avatar" src="<?php bloginfo('template_url'); ?>/images/acc-class-ranger.jpg" alt="" >
                            <h4 class="class-title"><?php _e( "Ranger", 'rfonline' );?></h4>
                            <p class="class-overview">A basic melee fighter class, destined for more specialization in weapons and to wear heavy or light armor. At level 20, the Human Fighter must choose to be either a damage-based Warrior, a stealthy Rogue, or a defense-based Human Knight.</p>
                            <a href="#" class="btn btn-yellow btn-lg">Learn More</a>
                        </div>
                    </aside>
                    <aside class="col-xs-12 col-sm-6 col-md-4">
                        <div class=" box-class text-center">
                            <img class="class-avatar" src="<?php bloginfo('template_url'); ?>/images/acc-class-specialist.jpg" alt="" >
                            <h4 class="class-title"><?php _e( "Specialist", 'rfonline' );?></h4>
                            <p class="class-overview">A basic melee fighter class, destined for more specialization in weapons and to wear heavy or light armor. At level 20, the Human Fighter must choose to be either a damage-based Warrior, a stealthy Rogue, or a defense-based Human Knight.</p>
                            <a href="#" class="btn btn-yellow btn-lg">Learn More</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        </div>
    <!-- /PAGE-POST -->
<?php get_footer(); ?>