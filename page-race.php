<?php 
//Template Name: Expore Race
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
                        <h1 class="title text-center"><?php _e( "Explore By", 'rfonline' );?> <?php the_title();?></h1>
					</div>
                </div>
            </div>
    </header>
    <!-- /HEADER-POST -->
    <!-- PAGE-RACE -->
    <article id="page-race" class="page-default page-race">
                
        <div class="container-fluid">
            <div class="row">
                <section class="col-xs-12">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <h3><?php _e( "Empire Accretia", 'rfonline' );?></h3>
                        <p><?php _e( "The scientists of this race have learned to transfer the consciousness to robotic bodies — making the Empire warriors truly indestructible. This bloodthirsty nation desires — to wipe out every single living creature out there. So its most brilliant minds create innovative arms, which are beyond compare.", 'rfonline' );?></p>
                        <a href="<?php bloginfo('home');?>/accretia" class="btn btn-yellow"><?php _e( "View Race", 'rfonline' );?> Accretia</a>
                    </div>
                </section>
                <section class="col-xs-12">
                    <div class="col-sm-6">
                        <h3><?php _e( "Union Bellato", 'rfonline' );?></h3>
                        <div class="race-overrace">
                            <p><?php _e( "Bellatians are a highly intelligent and innovative nation. The home planet of the Union has high gravity, so the inhabitants are of short stature. They roamed space in search for resources, came to Novus and started the colonization focusing on mining and resource extraction.", 'rfonline' );?></p>
                            <a href="<?php bloginfo('home');?>/bellato" class="btn btn-yellow"><?php _e( "View Race", 'rfonline' );?> Bellato</a>
                        </div>
                    </div>
                    <div class="col-sm-6"></div>
                </section>
                <section class="col-xs-12">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <h3><?php _e( "Holy Alliance Cora", 'rfonline' );?></h3>
                        <p><?php _e( "The philosophy of Corites is based on devoted faith in the dark god Decem who charged his people with protection and preservation of the planet. They use resources of Novus to strengthen the Alliance and to spread their religion to the furthest corners of the Galaxy.", 'rfonline' );?></p>
                        <a href="<?php bloginfo('home');?>/cora" class="btn btn-yellow"><?php _e( "View Race", 'rfonline' );?> Cora</a>
                    </div>
                </section>
            </div>
        </div>
    </article>
    <!-- /PAGE-RACE -->
<?php get_footer(); ?>