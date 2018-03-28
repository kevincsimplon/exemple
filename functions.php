<?php

require TEMPLATEPATH.'/framework/theme.php';
$theme = new Theme(array(

'menus'=> array(
  'nav' => 'Navigation'
),

'images' => array(
    'post' => array(
        array('thumb',626,2626,true)
      ),
)
 ));

 function hide_wp_update_nag() {
 remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action('admin_menu','hide_wp_update_nag');

add_filter( 'sanitize_file_name', 'remove_accents' );
function wpc_remove_version_footer(){
   remove_filter('update_footer','core_update_footer');
}
  add_action('admin_menu','wpc_remove_version_footer');

// delete admin
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

 //  Pagination
 if ( !function_exists( 'wpex_pagination' ) ) {

 	function wpex_pagination() {

 		$prev_arrow = is_rtl() ? '→' : '←';
 		$next_arrow = is_rtl() ? '←' : '→';

 		global $wp_query;
 		$total = $wp_query->max_num_pages;
 		$big = 999999999; // need an unlikely integer
 		if( $total > 1 )  {
 			 if( !$current_page = get_query_var('paged') )
 				 $current_page = 1;
 			 if( get_option('permalink_structure') ) {
 				 $format = 'page/%#%/';
 			 } else {
 				 $format = '&paged=%#%';
 			 }
 			echo paginate_links(array(
 				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
 				'format'		=> $format,
 				'current'		=> max( 1, get_query_var('paged') ),
 				'total' 		=> $total,
 				'mid_size'		=> 3,
 				'type' 			=> 'list',
 				'prev_text'		=> $prev_arrow,
 				'next_text'		=> $next_arrow,
 			 ) );
 		}
 	}

 }
// Taille du excerpt (preview article)
function new_excerpt_length($length) {
return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');



// delete colonne etiquette et ajout colonne image dans admin
function bbx_columns( $column ) {
  unset( $column['tags'] );
  $column['image'] = 'Image';
  return $column;
}
add_filter( 'manage_post_posts_columns', 'bbx_columns' );

function bbx_rows( $column, $post_id ) {
  $custom_fields = get_post_custom( $post_id );
  switch ( $column ):
    case 'image':
      the_post_thumbnail( 'thumbnail' );
      break;

    default:
      break;
  endswitch;
}
add_action( 'manage_post_posts_custom_column', 'bbx_rows', 10, 4 );





// On ajoute les widget
  if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
          'name' => 'Sidebar',
  	'before_widget' => '<div class="widget_sidebar">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
        ));
  register_sidebar(array(
          'name' => 'recrutement',
  	'before_widget' => '<div class="header_right" id="%1$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
        ));
  register_sidebar(array(
          'name' => 'video',
    'before_widget' => '<div class="header_right" id="%1$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
        ));
  register_sidebar(array(
          'name' => 'progress',
    'before_widget' => '<div class="header_right" id="%1$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
        ));
  register_sidebar(array(
          'name' => 'rank',
    'before_widget' => '<div class="header_right" id="%1$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
        ));
  register_sidebar(array(
          'name' => 'twitter',
    'before_widget' => '<div class="header_right" id="%1$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
        ));

register_sidebar(array(
        'name' => 'news_text',
  'before_widget' => '<div class="header_right" id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));


      register_sidebar(array(
              'name' => 'Experience',
        'before_widget' => '<div class="header_right" id="%1$s">',
              'after_widget' => '</div>',
              'before_title' => '<h3>',
              'after_title' => '</h3>',
            ));
            register_sidebar(array(
                    'name' => 'Challenge',
              'before_widget' => '<div class="header_right" id="%1$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                  ));
      register_sidebar(array(
              'name' => 'Ambiance',
        'before_widget' => '<div class="header_right" id="%1$s">',
              'after_widget' => '</div>',
              'before_title' => '<h3>',
              'after_title' => '</h3>',
            ));

      register_sidebar(array(
              'name' => 'Performance',
        'before_widget' => '<div class="header_right" id="%2$s">',
              'after_widget' => '</div>',
              'before_title' => '<h3>',
              'after_title' => '</h3>',
            ));

        register_sidebar(array(
                'name' => 'Esprit',
          'before_widget' => '<div class="header_right" id="%1$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>',
              ));

      register_sidebar(array(
              'name' => 'Implication',
        'before_widget' => '<div class="header_right" id="%1$s">',
              'after_widget' => '</div>',
              'before_title' => '<h3>',
              'after_title' => '</h3>',
            ));
            register_sidebar(array(
                    'name' => 'title_page_news',
              'before_widget' => '<div class="header_right" id="%1$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                  ));

            register_sidebar(array(
                    'name' => 'pl_hm',
              'before_widget' => '<div class="header_right" id="%1$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                  ));
            register_sidebar(array(
                    'name' => 'pl_mm',
              'before_widget' => '<div class="header_right" id="%1$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                  ));
            register_sidebar(array(
                    'name' => 'pl_m+',
              'before_widget' => '<div class="header_right" id="%1$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                  ));


  	}

  function my_theme_add_editor_styles() {
    add_editor_style( 'style.css' );
    add_editor_style( 'editor-style.css' );

  }
  add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );



// delete des catégories inutile dans l'admin-bar
function kwiz_admin_remove_menus() {
  remove_menu_page( 'plugins.php' );
  // remove_menu_page( 'options-general.php' );
  remove_menu_page( 'tools.php' );
  remove_menu_page('separator1');
  remove_menu_page('Wordfence');
  remove_menu_page('wpseo_dashboard');
  remove_menu_page('WP-Optimize');
  remove_menu_page('update-core.php');

}
add_action( 'admin_menu', 'kwiz_admin_remove_menus' );
add_theme_support( 'post-thumbnails' );



add_action( 'admin_menu', 'kwiz_admin_remove_sub_menus', 999 );
function kwiz_admin_remove_sub_menus() {
  $page = remove_submenu_page( 'index.php', 'update-core.php'  ); //Menu Catégorie
}





/* = Modification de la page d'accueil de la zone d'administration */
/* ----------------------------- */
function change_landing_page() {
    return admin_url('index.php');
}
add_filter('login_redirect', 'change_landing_page');



// Ajouter un bouton de retour au forum
function Gk_MenuBar() {
	global $wp_admin_bar;

	$wp_admin_bar->add_menu( array(
	'id' => 'twitter-compte',
	'title' => __('Retour au forum'),
	'href' => ('http://illuzion.fr/forum/')
		)
	);

}
function Gk_Bar() {
	remove_action( 'admin_bar_menu', 'wp_admin_bar_new_content_menu', 40 );
	remove_action( 'admin_bar_menu', 'wp_admin_bar_comments_menu', 50 );
	remove_action( 'admin_bar_menu', 'wp_admin_bar_appearance_menu', 60 );
	remove_action( 'admin_bar_menu', 'wpseo_admin_bar_menu', 95 );
}

add_action( 'admin_bar_menu', 'Gk_MenuBar', 40 );
add_action('add_admin_bar_menus', 'Gk_Bar');




/* asgaros*/
add_action('asgarosforum_after_post_author', 'my_asgarosforum_after_post_administration', 10, 2);
function getUserRoles($id) {
    $user = new WP_User((int)$id);
    return implode(' and ', $user->roles);
}
function my_asgarosforum_after_post_administration($author_id, $author_posts) {

        if (getUserRoles($author_id)=='administrator') {
            echo '<div class="icon-status-admin">'.__('Admin','rcl-asgaros').' </div>';
          }
               else {
                    if(getUserRoles($author_id)=='membre') {
                    echo '<div class="icon-status-contributor">'.__('Membre','rcl-asgaros').' </div>';
                    }
                    else {
                            if(getUserRoles($author_id)=='apply') {
                            echo '<div class="icon-status-author">'.__('Apply','rcl-asgaros').' </div>';
                          }

                          else {
                                  if(getUserRoles($author_id)=='editor') {
                                  echo '<div class="icon-status-editor">'.__('Officier','rcl-asgaros').' </div>';
                                  }

                                  else {
                                            if(getUserRoles($author_id)=='friend') {
                                            echo '<div class="icon-status-friend">'.__('Friend','rcl-asgaros').' </div>';
                                            }
                                  }
                              }
                        }

                  }

  }




/* = Message custom dans le footer de l'admin */
/* ----------------------------- */
function lije_footer_admin () {
	echo 'Interface d\'administration de <strong>' . $_SERVER['HTTP_HOST'] . '</strong> - ';
}
add_filter('admin_footer_text', 'lije_footer_admin');


// Ce qui suit permet de cocher par défaut la case
// 'Se souvenir de moi' sur la page de connexion
function sf_check_rememberme() {
	global $rememberme;
	$rememberme = 1;
}
add_action("login_form", "sf_check_rememberme");



function admin_css() {

$admin_handle = 'admin_css';
$admin_stylesheet = get_template_directory_uri() . '/admin.css';

wp_enqueue_style( $admin_handle, $admin_stylesheet );
}
add_action('admin_print_styles', 'admin_css', 11 );


function change_editor_settings($settings) {
  if (is_super_admin()) {
    $settings['teeny'] = false;
    $settings['quicktags'] = true;
        return $settings;
  }
}
add_filter('asgarosforum_filter_editor_settings', 'change_editor_settings');
?>
