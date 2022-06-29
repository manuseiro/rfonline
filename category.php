<?php

/*Template Name: News*/
get_header();?>

    <!-- HEADER-POST -->
    <header id="single-header" class="masthead single-header">
		<style type="text/css">
			.single-header::before{
				background-image: url(<?php if ( has_post_thumbnail()) {the_post_thumbnail_url('single-posts');} else {}?>);
			}
			</style>
            <div class="content-title text-center">
                <div class="container-fluid">
                    <div  class="col-xs-12 col-lg-10 col-lg-offset-1">
                        <h1 class="title"><?php single_cat_title();?></h1>
					</div>
                </div>
            </div>
    </header>
    <!-- /HEADER-POST -->
    <!-- PAGE-POST -->
    <div id="page-category" class="page-default page-category">
        <div class="container-fluid">
            <div class="row">
				<div class="col-xs-12">
                    <?php if(have_posts()) :while(have_posts()) : the_post();?>
					<article class="page-news-posts col-xs-12 col-sm-4 col-md-4 col-lg-4 wow fadeIn animated">
                        <a href="<?php the_permalink() ?>" title="<?php the_title();?>">
                        <?php if ( has_post_thumbnail() ) {
                            ?>
                            <picture>
                                <img class="lozad" data-src="<?php the_post_thumbnail_url('news-posts');?>" alt="<?php the_title();?>">
                            </picture>
                            <?php
                            } else {
                            ?>
                            <picture>
                                <img class="lozad" data-src="<?php bloginfo('template_url'); ?>/images/default-page-news.jpg" alt="<?php the_title();?>">
                            </picture>
                            <?php
                            }
                            ?>
                        </a>
						<figcaption>
							<a href="<?php the_permalink() ?>" title="<?php the_title();?>">
								<div class="normalize-height-post">
									<h2 class="post-title"><?php the_title();?></h2>
									<p><?php echo excerpt('25'); ?></p>
								</div>
								<p class="postby">
                                <img class="lozad" data-src="<?php bloginfo('url');?>/?author=<?php the_author_id();?>" alt="<?php the_author_firstname();?> <?php the_author_lastname();?>" title="<?php the_author(); ?>"><?php _e('By', 'rfonline');?> <b><?php the_author_firstname();?> <?php the_author_lastname();?></b> <time datetime="<?php the_time( 'c' ); ?>" pubdate="pubdate"></time></p>
							</a>
						</figcaption>
					</article>
					<?php endwhile; ?>
					<div class="col-sm-12 load-more text-center">				
						<ul class="pager-nav">
							<?php wordpress_pagination(); ?>
						</ul>
					</div>
					<?php else: get_404_template(); endif;?>
					<?php wp_reset_query();?>
				</div>
			</div>
        </div>
    </div>
    <!-- /PAGE-POST -->
<?php get_footer(); ?>