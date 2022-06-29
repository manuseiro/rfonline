<?php 
/*Template Name: FAQ*/
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
                        <?php bloglite_breadcrumb(); ?>
                        <h1 class="title"><?php the_title();?></h1>
					</div>
                </div>
            </div>
    </header>
    <!-- /HEADER-POST -->
    <!-- PAGE-POST -->
    <div id="page-faq" class="page-default faq page-faq">
        <div class="container-fluid">
            <div class="row">
				<div class="col-xs-12 col-lg-10 col-lg-offset-1">
					<?php
						query_posts('post_type=faq&order=ASC')
					?>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
						<?php	if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="panel panel-faq">
							<div class="panel-heading" role="tab" id="heading<?php the_id() ?>">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_id() ?>" aria-expanded="false" aria-controls="collapse<?php the_id() ?>">
										<i class="fas more-less fa-plus"></i>
										<?php the_title(); ?>
									</a>
								</h4>
							</div>
							<div id="collapse<?php the_id() ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php the_id() ?>">
								<div class="panel-body">
								<?php echo the_content(); ?>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
							<?php else : ?>
							<aside class="text-center">
								<h3><?php _e( "Nothing found", 'rfonline' );?></h3>
								<p><?php _e( "Sorry, there are still no frequently asked questions (F.A.Q).", 'rfonline' );?></p>
							</aside>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
					</div><!-- panel-group -->	
				</div>
            </div>
        </div>
    </div>
    <!-- /PAGE-POST -->
<?php get_footer(); ?>