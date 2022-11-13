<?php get_header(); ?>
<!-- ARTICLE-POST -->
<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <!-- HEADER-POST -->
    <header id="single-header" class="masthead single-header">
        <style type="text/css">
        .single-header::before {
            background-image: url(<?php if ( has_post_thumbnail()) {
                the_post_thumbnail_url('single-posts');
            }

            else {}

            ?>);
        }
        </style>
        <?php if(have_posts()) :while(have_posts()) : the_post();?>
        <div class="content-title">
            <div class="container-fluid">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="single-category"><?php the_category( '  ' ); ?></div>
                    <?php //bloglite_breadcrumb(); ?>
                    <h1 class="title"><?php the_title();?></h1>
                    <p class="postby">
                        <?php echo get_avatar( get_the_author_email(), '50' ); ?>
                    <div class="author-posted"><?php _e('Posted by', 'rfonline');?> <b><a
                                href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></b><br><?php _e('on', 'rfonline');?>
                        <time class="entry-date" datetime="<?php the_time( 'c' ); ?>"
                            pubdate="pubdate"><?php the_time(__('F j, Y \a\t g\hi A', 'rfonline'));?></time></p>
                        </p>
                    </div>
                </div>
            </div>
    </header>
    <!-- /HEADER-POST -->
    <!-- PAGE-POST -->
    <article id="single-page" class="page-default single-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1 content-wrap">
                    <div class="single-resume"><?php the_excerpt(); ?></div>
                    <?php echo the_content(); ?>
                    <?php endwhile;?>
                    <?php else :?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </article>
    <!-- RELATED-NEWS -->
    <div id="related-single" class="related-single">
        <div class="container-fluid">
            <div class="row">
                <?php 

                $categories = get_the_category($post->ID);  
                if ($categories) {  $category_ids = array();  
                    foreach($categories as $individual_category)  
                        $category_ids[] = $individual_category->term_id; 

                    $args=array( 
                        'category__in' => $category_ids, 
                        'post__not_in' => array($post->ID), 
                        'showposts'=>3, // Number of related posts that will be shown. 
                        'caller_get_posts'=>1 
                    ); 
                    $my_query = new wp_query($args); 
                    if( $my_query->have_posts() ) { 
                        $count=1; 
                        while ($my_query->have_posts()) { 
                            $my_query->the_post(); ?>
                <aside class="page-news-posts col-xs-12 col-sm-4 col-md-4 col-lg-4 wow fadeIn animated">
                    <div class="card-img">
                        <a href="<?php the_permalink() ?>" title="<?php the_title();?>">
                            <?php if ( has_post_thumbnail() ) {
                            ?>
                            <picture>
                                <img class="lozad" data-src="<?php the_post_thumbnail_url('single-posts');?>"
                                    alt="<?php the_title();?>">
                            </picture>
                            <?php
                            } else {
                            ?>
                            <picture>
                                <img class="lozad"
                                    data-src="<?php bloginfo('template_url'); ?>/images/default-page-news.jpg"
                                    alt="<?php the_title();?>">
                            </picture>
                            <?php
                            }
                            ?>
                        </a>
                    </div>
                    <figcaption>
                        <a href="<?php the_permalink() ?>" title="<?php the_title();?>">
                            <div class="normalize-height-post">
                                <h2 class="post-title"><?php the_title();?></h2>
                                <p><?php echo excerpt('25'); ?></p>
                            </div>
                            <p class="postby">
                                <img class="lozad" data-src="<?php bloginfo('url');?>/?author=<?php the_author_id();?>"
                                    alt="<?php the_author_firstname();?> <?php the_author_lastname();?>"
                                    title="<?php the_author(); ?>"><?php _e('By', 'rfonline');?>
                                <b><?php the_author_firstname();?> <?php the_author_lastname();?></b> <time
                                    datetime="<?php the_time( 'c' ); ?>" pubdate="pubdate"></time>
                            </p>
                        </a>
                    </figcaption>
                </aside>
                <?php $count ++; ?>
                <?php } 
                            wp_reset_query();
                        } 
                    } 

                ?>
            </div>
        </div>
    </div>
    <div id="comment-single" class="comment-single">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <?php //comments_template();?>
                    <div id="comments">
                        <h3 class="comment-disabled"><i class="fas fa-comment-slash"
                                aria-hidden="true"></i><br>Comentários estão desabilitado.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /RELATED-NEWS -->
</article>
<!-- /ARTICLE-POST -->

<div class="fab-btn">
    <button class="main">
    </button>
    <ul>
        <li>
            <button id="opcao1">
                <i class="fab fa-facebook"></i>
            </button>
        </li>
        <li>
            <button id="opcao2">
                <i class="fas fa-envelop"></i>
            </button>
        </li>
        <li>
            <button id="opcao3">
                <i class="fab fa-whatsapp"></i>
            </button>
        </li>

        <li>
            <button id="opcao4">
                <i class="fab fa-telegram-plane"></i>
            </button>
        </li>
    </ul>
</div>
<?php get_footer(); ?>