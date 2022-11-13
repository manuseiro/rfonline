<?php

/*Template Name: Server Info*/

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
                        <h1 class="title"><?php the_title();?></h1>
					</div>
                </div>
            </div>
    </header>
    <!-- /HEADER-POST -->
    <!-- PAGE-POST -->
    <article id="page-server" class="page-default faq page-server">
        <div class="container-fluid">
            <div class="row">
				<div class="col-xs-12 col-lg-10 col-lg-offset-1 content-wrap">
					<?php
						query_posts('post_type=serverinfor&order=ASC')
					?>
					<?php	if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<div id="faq<?php the_id() ?>" class="panel panel-default">
						<div class="panel-heading"><?php the_title(); ?></div>
						<div class="panel-body">
						<?php the_content(); ?>
						</div>
					</div>
					<?php endwhile; ?>
					<?php else : ?>		
						<article class="text-center">
							<h3><?php _e( "Nothing found", 'rfonline' );?></h3>
							<p><?php _e( "Sorry, the server settings have not yet been listed.", 'rfonline' );?></p>
						</article>
					<?php endif; ?>
					<?php wp_reset_query(); ?> 	
				</div>
            </div>
        </div>
    </article>
    <!-- /PAGE-POST -->
<?php get_footer(); ?>