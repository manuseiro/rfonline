<?php get_header();?>

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
    <!-- PAGE-POST -->
    <article id="page-default" class="page-default">
        <div class="container-fluid">
            <div class="row">
                <section class="col-xs-12 col-lg-10 col-lg-offset-1 content-wrap">
                    <?php if(have_posts()) :while(have_posts()) : the_post();?>
                            <?php echo the_content(); ?>     
                    <?php endwhile;?>
                    <?php else :?>
                    <?php endif;?>
                </section>
            </div>
        </div>
    </article>
    <!-- /PAGE-POST -->
<?php get_footer(); ?>