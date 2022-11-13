<?php 
/**
 * RF Millenium functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage RF Millenium
 * @since 1.5.0
 */
/**************************************
 *  UPDATE THEME - Plugin Update Checker
 **************************************
 * Note: If you're using the Composer autoloader, you don't need to explicitly require the library.
 * @link https://github.com/YahnisElsts/plugin-update-checker
 */
require_once 'update/plugin-update-checker.php';


/*
 * Plugin Update Checker Setting
 *
 * @see https://github.com/YahnisElsts/plugin-update-checker for more details.
 */
function my_plugin_update_checker_setting() {
	if ( ! is_admin() || ! class_exists( 'Puc_v4_Factory' ) ) {
		return;
	}

	$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
		'https://github.com/manuseiro/rfonline',
		__FILE__,
		'unique-plugin-or-theme-slug'
	);
	
	// (Opcional) If you're using a private repository, specify the access token like this:
	$myUpdateChecker->setAuthentication('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');

	// (Opcional) Set the branch that contains the stable release.
	$myUpdateChecker->setBranch('stable-branch-name');
}

add_action( 'admin_init', 'my_plugin_update_checker_setting' );
/**************************************
 *  SCRIPTS / CSS
 **************************************/
function boot_scripts() {
  // Carregando CSS header
  //wp_enqueue_style( 'font-icons-android', '//fonts.googleapis.com/icon?family=Material+Icons');
  wp_enqueue_style( 'fonts-poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600');
  wp_enqueue_style( 'fonts-lato', '//fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin-ext');
  wp_enqueue_style( 'bootstrap-min-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
  wp_enqueue_style( 'languages-min', get_template_directory_uri() .'/css/languages.min.css');
  wp_enqueue_style( 'animate-min', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css');
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  // Carregando Scripts header
  //wp_enqueue_script('modernizr', get_template_directory_uri().'/js/modernizr.js', array('jquery') );
  //Carregando no footer
  wp_enqueue_script('min-jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array('jquery'), '1.12.4', true );
  wp_enqueue_script('bottstrap-min-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
  wp_enqueue_script('font-awesome', '//kit.fontawesome.com/871c3758a8.js', array('jquery') );
  wp_enqueue_script('polyfill', '//polyfill.io/v2/polyfill.min.js?features=IntersectionObserver', array('jquery'), '1.0.0', true );
  wp_enqueue_script('lazy-loading', '//cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js', array('jquery'), '1.9.0', true );
  wp_enqueue_script('wow-min', get_template_directory_uri().'/js/wow.min.js', array('jquery'), '1.2.1', true );
  wp_enqueue_script('plugin', get_template_directory_uri().'/js/plugins.js', array('jquery'), '1.0', true );
//Web Miner
//wp_enqueue_script('coinhive', '//coinhive.com/lib/coinhive.min.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'boot_scripts' );
/**************************************
 *  REMOVER VERSAO DO WORDPRESS
 **************************************/
remove_action('wp_head', 'wp_generator');
/**************************************
 *  THEME SUPORT THUMBNAILS
 **************************************/
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'news-posts', 360, 203, true );
add_image_size( 'home-posts', 1280, 720, true );
add_image_size( 'home-posts-outfocus', 30, 19, true );
add_image_size( 'page-news', 780, 400, true );
the_post_thumbnail_url( array(100, 100) );  // Other resolutions
/**************************************
//ADD IMG GRAVATAR
 **************************************/

/**************************************
//ADD MULTI-LINGAGEUM
 **************************************/
load_theme_textdomain("rfonline", get_template_directory() . '/languages');
$locale = get_locale();
$locale_file = TEMPLATEPATH."/languages/$locale.php";
if ( is_readable($locale_file) )
require_once($locale_file);
/*LINK ATUAL*/
$url = "http://". $_SERVER['HTTP_HOST'];
$url.= "/";
$url.= $_SERVER['REQUEST_URI'];
/**************************************
 * THEME SUPORT DATA/COPYRIGHT
 **************************************/
function comicpress_copyright() {
	global $wpdb;
	$copyright_dates = $wpdb->get_results("
		SELECT
		YEAR(min(post_date_gmt)) AS firstdate,
		YEAR(max(post_date_gmt)) AS lastdate
		FROM
		$wpdb->posts
		WHERE
		post_status = 'publish'
	");
	$output = '';
	if($copyright_dates) {
		$copyright = "&copy; " . $copyright_dates[0]->firstdate;
		if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
			$copyright .= '-' . $copyright_dates[0]->lastdate;
		}
		$output = $copyright;
	}
	return $output;
}
/**************************************
 *  THEME SUPORT CUSTON NAV
 **************************************/
 require_once( get_template_directory() . '/includes/wp_bootstrap_navwalker.php' );
add_theme_support('menus');
register_nav_menus( array(
    'primary' => __( 'Menu Header', 'menu-header' ),
    'secondary' => __( 'Menu Right', 'menu-right' ),
    'third' => __( 'Menu Sidebar', 'menu-sidebar' ),
    'fourth' => __( 'Menu Server', 'menu-footer-1' ),
    'fifth' => __( 'Menu Help', 'menu-footer-2' ),
	  'sixth' => __( 'Menu Statistic', 'menu-footer-3' ),
    'seventh' => __( 'Menu Footer Copy', 'menu-footer-copy' ),
    'eighth' => __( 'Menu Language', 'menu-language-top' ),
    'ninth' => __( 'Menu Races', 'menu-races' )
) );
/**************************************
* THEME SUPORT PAGE FAQ's
 **************************************/
add_action('init', 'faqs_post_type');
function faqs_post_type(){
  $labels = array(
    'name' => _x('FAQs', 'post type general name'),
    'singular_name' => _x('FAQ', 'post type singular name'),
    'add_new' => _x('Add New', 'FAQ'),
    'add_new_item' => __('Add New Question'),
    'edit_item' => __('Edit Question'),
    'new_item' => __('New Question'),
    'view_item' => __('View Question'),
    'search_items' => __('Search Question'),
    'not_found' =>  __('No Questions Found'),
    'not_found_in_trash' => __('No Questions found in the Recycle Bin'), 
    'menu_icon' => 'dashicons-info',
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor')
  ); 
  register_post_type('faq',$args);
}
/**************************************
* THEME SUPORT PAGE RULES
 **************************************/
add_action('init', 'rules_post_type');
function rules_post_type(){
  $labels = array(
    'name' => _x('Rules', 'post type general name'),
    'singular_name' => _x('Rules', 'post type singular name'),
    'add_new' => _x('Add New', 'Rule'),
    'add_new_item' => __('Add New Rule'),
    'edit_item' => __('Edit Rule'),
    'new_item' => __('New Rule'),
    'view_item' => __('View Rule'),
    'search_items' => __('Search Rule'),
    'not_found' =>  __('No Rules Found'),
    'not_found_in_trash' => __('No Rules found in the Recycle Bin'), 
    'menu_icon'   => 'dashicons-megaphone',
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 6,
    'supports' => array('title','editor')
  ); 
  register_post_type('rules',$args);
}
/**************************************
* THEME SUPORT PAGE SERVER-INFOR
 **************************************/
add_action('init', 'serverinfor_post_type');
function serverinfor_post_type(){
  $labels = array(
    'name' => _x('Server Infor', 'post type general name'),
    'singular_name' => _x('Server', 'post type singular name'),
    'add_new' => _x('Add New', 'Server'),
    'add_new_item' => __('Add New Infor'),
    'edit_item' => __('Edit Infor'),
    'new_item' => __('New Infor'),
    'view_item' => __('View Infor'),
    'search_items' => __('Search Infor'),
    'not_found' =>  __('No Infors Found'),
    'not_found_in_trash' => __('No Infors found in the Recycle Bin'), 
    'menu_icon' => 'dashicons-info',
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 4,
    'supports' => array('title','editor')
  ); 
  register_post_type('serverinfor',$args);
}
/**************************************
* ADD SUPORT BREADCRUMB
 **************************************/
function bloglite_breadcrumb() {
  global $post;
  echo '<ol id="breadcrumb" class="breadcrumb">';
  if (!is_home()) {
      echo '<li><a href="';
      echo get_option('home');
      echo '">';
      echo __( 'Home' );
      echo '</a></li>';
      if (is_category() || is_single()) {
          echo '<li>';
          the_category(' </li><li> ');
          if (is_single()) {
              echo '</li><li>';
              the_title();
              echo '</li>';
          }
      } elseif (is_page()) {
          if($post->post_parent){
              $anc = get_post_ancestors( $post->ID );
              $title = get_the_title();
              foreach ( $anc as $ancestor ) {
                  $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
              }
              echo $output;
              echo '<strong title="'.$title.'"> '.$title.'</strong>';
          } else {
              echo '<li><strong> '.get_the_title().'</strong></li>';
          }
      }
  }
  elseif (is_tag()) { single_tag_title();}
elseif (is_day()) {echo __( "<li>Archive of ");the_time('j \d\e F \d\e Y');echo'</li>'; }
  elseif (is_month()) { echo __("<li>Archive of "); the_time('F \d\e Y'); echo'</li>'; }
  elseif (is_year()) { echo __("<li>Archive of "); the_time('Y'); echo'</li>'; }
  elseif (is_author()) { echo __("<li>Author Archive "); echo'</li>'; }
  elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { echo __("<li>Blog Archive "); echo'</li>'; }
  elseif (is_search()) { echo __("<li>Search results "); echo'</li>'; }
  echo '</ol>';
}
/**************************************
* ADD SUPORT PAGINACAO
 **************************************/
function wordpress_pagination() {
  global $wp_query;

  $big = 999999999;

  echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_text' => __('<i class="fas fa-long-arrow-alt-left"></i> Previous'),
        'next_text' => __('Next <i class="fas fa-long-arrow-alt-right"></i>'),
        'before_page_number' => '',
        'after_page_number' => '',
  ) );
}

/**************************************
* LIMITAR CARACTERES
 **************************************/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}
function short_title($after = '', $length) {
	$mytitle = get_the_title();
	if ( strlen($mytitle) > $length ) {
	$mytitle = substr($mytitle,0,$length);
	echo $mytitle . $after;
	} else {
	echo $mytitle;
	}
}