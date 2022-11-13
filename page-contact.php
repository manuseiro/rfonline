<?php

/*Template Name: Contact*/

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
    <div id="page-contact" class="page-default page-contact">
        <div class="container-fluid">
            <div class="row">
				<div class="col-xs-12 col-lg-10 col-lg-offset-1 content-wrap">
                    <form id="commentform" class="comment-form" action="#" method="post" >
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input id="author" class="form-control" name="name" required="" type="name" value="" placeholder="<?php _e( "Name", 'rfonline' );?>" />
                            </div>
                            <div class="col-sm-6">
                                <input id="inputEmail" class="form-control" name="email" required="" type="email" value="" placeholder="<?php _e( "Email", 'rfonline' );?>" />
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <select class="form-control" id="inputSelect">
                                    <option selected><?php _e( "Subject Matter", 'rfonline' );?>:</option>
                                    <option value="1"><?php _e( "Donation", 'rfonline' );?></option>
                                    <option value="2"><?php _e( "Report/Hacks", 'rfonline' );?></option>
                                    <option value="3"><?php _e( "Bugs/Errors", 'rfonline' );?></option>
                                    <option value="4"><?php _e( "Downloads/Link", 'rfonline' );?></option>
                                    <option value="5"><?php _e( "Account/Lockout", 'rfonline' );?></option>
                                    <option value="6"><?php _e( "Site/Translation", 'rfonline' );?></option>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" name="comment" id="comment" rows="5" placeholder="<?php _e( "Message", 'rfonline' );?>"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <input class="commentsubmit btn btn-red btn-yellow" type="submit" value="<?php _e( "Send Ticket", 'rfonline' );?>" />
                            </div>
                        </div>
                    </form>
				</div>
            </div>
        </div>
    </div>
    <!-- /PAGE-POST -->
<?php get_footer(); ?>