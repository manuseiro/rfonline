<?php

/*Template Name: Donation*/

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
    <article id="page-donation" class="page-default page-donation">
        <div class="container-fluid">
			<div class="row">
				<!-- Pricing -->
				<div class="col-md-3">
					<div class="pricing hover-effect">
						<div class="pricing-head">
							<h3><?php _e( "Bonus 01", 'rfonline' );?> <span>
							<?php _e( "All items are found in game.", 'rfonline' );?></span>
							</h3>
							<h4><i>$</i>5<i>.49</i>
							<span>
							Per Month </span>
							</h4>
						</div>
						<ul class="pricing-content list-unstyled">
							<li>
								At vero eos
							</li>
							<li>
								No Support
							</li>
							<li>
								Fusce condimentum
							</li>
							<li>
								Ut non libero
							</li>
							<li>
								Consecte adiping elit
							</li>
						</ul>
						<div class="pricing-footer">
							<p>
								 <?php _e( "Players who make donations are rewarded for items mentioned above, having a validity of Four Months (04 months).", 'rfonline' );?>
							</p>
							<a href="javascript:;" class="btn btn-yellow">
							<?php _e( "Donate", 'rfonline' );?>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="pricing hover-effect">
						<div class="pricing-head">
							<h3><?php _e( "Bonus 01", 'rfonline' );?> <span>
							<?php _e( "All items are found in game.", 'rfonline' );?> </span>
							</h3>
							<h4><i>$</i>8<i>.69</i>
							<span>
							Per Month </span>
							</h4>
						</div>
						<ul class="pricing-content list-unstyled">
							<li>
								At vero eos
							</li>
							<li>
								No Support
							</li>
							<li>
								Fusce condimentum
							</li>
							<li>
								Ut non libero
							</li>
							<li>
								Consecte adiping elit
							</li>
						</ul>
						<div class="pricing-footer">
							<p>
							<?php _e( "Players who make donations are rewarded for items mentioned above, having a validity of Four Months (04 months).", 'rfonline' );?>
							</p>
							<a href="javascript:;" class="btn btn-yellow">
							<?php _e( "Donate", 'rfonline' );?>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="pricing pricing-active hover-effect">
						<div class="pricing-head pricing-head-active">
							<h3><?php _e( "Bonus 01", 'rfonline' );?> <span>
							<?php _e( "All items are found in game.", 'rfonline' );?> </span>
							</h3>
							<h4><i>$</i>13<i>.99</i>
							<span>
							Per Month </span>
							</h4>
						</div>
						<ul class="pricing-content list-unstyled">
							<li>
								At vero eos
							</li>
							<li>
								No Support
							</li>
							<li>
								Fusce condimentum
							</li>
							<li>
								Ut non libero
							</li>
							<li>
								Consecte adiping elit
							</li>
						</ul>
						<div class="pricing-footer">
							<p>
								 <?php _e( "Players who make donations are rewarded for items mentioned above, having a validity of Four Months (04 months).", 'rfonline' );?>
							</p>
							<a href="javascript:;" class="btn btn-yellow">
							<?php _e( "Donate", 'rfonline' );?>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="pricing hover-effect">
						<div class="pricing-head">
							<h3><?php _e( "Bonus 01", 'rfonline' );?> <span>
							<?php _e( "All items are found in game.", 'rfonline' );?> </span>
							</h3>
							<h4><i>$</i>99<i>.00</i>
							<span>
							Per Month </span>
							</h4>
						</div>
						<ul class="pricing-content list-unstyled">
							<li>
								At vero eos
							</li>
							<li>
								No Support
							</li>
							<li>
								Fusce condimentum
							</li>
							<li>
								Ut non libero
							</li>
							<li>
								Consecte adiping elit
							</li>
						</ul>
						<div class="pricing-footer">
							<p>
								 <?php _e( "Players who make donations are rewarded for items mentioned above, having a validity of Four Months (04 months).", 'rfonline' );?>
							</p>
							<a href="javascript:;" class="btn btn-yellow">
							<?php _e( "Donate", 'rfonline' );?>
							</a>
						</div>
					</div>
				</div>
				<!--//End Pricing -->
			</div>
        </div>
    </article>
    <!-- /PAGE-POST -->
<?php get_footer(); ?>