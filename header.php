<!doctype html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
  <head>
  <title><?php 
  if(is_home()){
  bloginfo('name'); echo ' - '; bloginfo('description');
  }elseif(is_category()){
  single_cat_title(); echo ' - ' ; bloginfo('name'); echo ' - '; bloginfo('description');
  }elseif(is_single()){
  single_post_title(); echo ' - ' ; bloginfo('name'); echo ' - '; bloginfo('description');
  }elseif(is_page()){
  single_post_title(); echo ' - ' ; bloginfo('name'); echo ' - '; bloginfo('description');
  }elseif ( is_search() ) {
  echo 'Search for: '.wp_specialchars($s, 1); echo ' - ' ; bloginfo('name'); echo ' - '; bloginfo('description');
  }elseif ( is_404() ) { 
  bloginfo('name'); echo ' - '; bloginfo('description');
  }else{
  wp_title('', true);
  };?></title>
  <meta charset="<?php bloginfo('charset');?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <div class="browsehappy">
                <p><?php _e( "You are using an <strong>outdated</strong> browser. Please <a href=\"//browsehappy.com/\" target=\"_black\">upgrade your browser</a> to improve your experience.", 'rfonline' );?></p>
            </div>
        <![endif]-->
        <!-- LOADER-->
        <div  id="loader" class="loader">
            <div class="loaded">&nbsp;</div>
        </div>
        <!-- /LOADER-->
        <div class="navbar-wrapper">
            <div class="navbar navbar-top">
                <div class="container-fluid"> 
                    <div class="navbar-right">
                        <div class="btn-language btn-group dropdown">
                            <button type="button" class="btn btn-lang dropdown-toggle" data-toggle="dropdown">
                                <span class="lang-sm lang-lbl-full" lang="<?php _e( "en", 'rfonline' );?>"></span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="//rf-millenium.org/en"><span class="lang-sm lang-lbl-full" lang="en"><?php _e( "English (US)", 'rfonline' );?></span> </a></li>
                                <li><a href="//rf-millenium.org/br"><span class="lang-sm lang-lbl-full" lang="br"><?php _e( "Portuguese (BR)", 'rfonline' );?></span></a></li>
                            </ul>
                        </div>
                        <a href="<?php bloginfo('home'); ?>/downloads" class="nav-top-link" title="<?php _e( "Downloads", 'rfonline' );?>"><?php _e( "Downloads", 'rfonline' );?></a>
                        <a href="<?php bloginfo('home'); ?>/users/sign_in" class="nav-top-link" title="<?php _e( "Log In", 'rfonline' );?>"><?php _e( "Log In", 'rfonline' );?></a>
                        <a href="<?php bloginfo('home'); ?>/contact" title="<?php _e( "Support", 'rfonline' );?>"><?php _e( "Support", 'rfonline' );?></a>
                    </div>
                </div>
            </div>        
            <nav class="navbar navbar-rfonline nav-dark">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('home'); ?>">
                        <img class="brand-img lozad" data-src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="<?php bloginfo('name');?>">
                    </a>
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navigation">
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php bloginfo('home'); ?>/users/sign_in"  type="button" class="btn btn-trans-dark"><?php _e( "My Account", 'rfonline' );?></a></li>
                            <li><a href="<?php bloginfo('home'); ?>/users/sign_in#register-pane" type="button" class="btn btn-yellow"><?php _e( "Create Account", 'rfonline' );?></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- MAIN-WRAPPER-->
        <main id="wrapper" role="main">