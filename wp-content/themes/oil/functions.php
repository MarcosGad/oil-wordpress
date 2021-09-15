<?php 
//include navwalker class for bootstrap navigation menu
require_once('wp-bootstrap-navwalker.php');

//add feature image support
add_theme_support('post-thumbnails');



/*
*wp_enqueue_style()
*/
function psp_add_styles(){
	
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/all.css');
	wp_enqueue_style('hover.css',get_template_directory_uri().'/css/hover.css');
	wp_enqueue_style('animate.css',get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style('main',get_template_directory_uri().'/css/main.css');
	
}

/*
*function to add my custom script
*wp_enqueue_script()
*/
function psp_add_scripts(){
	
	
	// this is my jquery 
	wp_enqueue_script('jquery-2.0.0.min.js',get_template_directory_uri().'/js/jquery-2.0.0.min.js',array(),false,true);
	//add bootstrap script file
	wp_enqueue_script('bootstrap.min.js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false,true);
	// this is fontawesome
	wp_enqueue_script('all.min.js',get_template_directory_uri().'/js/all.min.js',array(),false,true);
	//add nice scroll file script
    wp_enqueue_script('jquery.nicescroll.min.js',get_template_directory_uri().'/js/jquery.nicescroll.min.js',array(),false,true);
	//add my file script
	wp_enqueue_script('main.js',get_template_directory_uri().'/js/main.js',array(),false,true);
	//add wow file script
	wp_enqueue_script('wow.min.js',get_template_directory_uri().'/js/wow.min.js',array(),false,true);
	
	//add html5shiv for old browsers
	wp_enqueue_script('html5shiv',get_template_directory_uri().'/js/html5shiv.min.js');
	//add conditional comment for html5shiv
	wp_script_add_data('html5shiv','conditional','lt IE 9');
	//add respond script for old browser
	wp_enqueue_script('respond',get_template_directory_uri().'/js/respond.min.js');
	//add conditional comment for respond
	wp_script_add_data('respond','conditional','lt IE 9');
}

//add css styles
add_action('wp_enqueue_scripts','psp_add_styles');
//add js script
add_action('wp_enqueue_scripts','psp_add_scripts');



function custom_add_google_fonts() {
 wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Bitter', false );
 }
 add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );


/*
*add custom menu support
*/
function o_register_custom_menu(){
	register_nav_menus(array(
	'bootstrap-menu'=>('Naviagation Bar'),
	'footer-menu'=>'footer menu'
	));
}
function o_bootstrap_menu(){
wp_nav_menu(array(
'theme_location'=>'bootstrap-menu',
'menu_class'    =>'nav navbar-nav navbar-left',
'container'     =>false,
'depth'         =>2,
'walker'        =>new wp_bootstrap_navwalker()
));
}


//register custom menus
add_action('init','o_register_custom_menu');


//register sidebar
function dmb_main_sidebar(){
	//register main sidebar
	register_sidebar(array(
		'name'=>'main sidebar',
		'id'  =>'main-sidebar',
		'description'=>'main sidebar appear every where',
		'class'=>'main-sidebar',
		'before_widget'=>'<div class="widget-content">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3 class="widget-title">',
		'after_title'=>'</h3>'
	));
}
add_action('widgets_init','dmb_main_sidebar');



// add our box 

	function create_our_box(){
		
		$values = array(
			
			'public' => true, 
			'labels' => array('name'=>'Box',
							  'add_new'=>'Add Box',
							  'singular_name'=>'Box',
							  'add_new_item'=>'Add New Box',
							  'edit_item'=>'Edit Box',
							  'new_item'=>'New Box',
							  'view_item'=>'View Box',
							  'view_items'=>'View Box',
							  'search_items'=>'Search Box',
							   ), 
			'menu_icon'=>'dashicons-admin-site',
			'supports'=> array('thumbnail','editor','title'),
		
		); 
		
		register_post_type('box',$values); 
		
		
		
	}


add_action('init','create_our_box');


// add What We Do 

	function create_what_we_do(){
		
		$values = array(
			
			'public' => true, 
			'labels' => array('name'=>'What We Do',
							  'add_new'=>'Add What We Do',
							  'singular_name'=>'Do',
							  'add_new_item'=>'Add What We Do',
							  'edit_item'=>'Edit What We Do',
							  'new_item'=>'New What We Do',
							  'view_item'=>'View What We Do',
							  'view_items'=>'View What We Do',
							  'search_items'=>'Search What We Do',
							   ), 
			'menu_icon'=>'dashicons-admin-site',
			'supports'=> array('thumbnail','editor','title'),
		
		); 
		
		register_post_type('do',$values); 
		
		
		
	}


add_action('init','create_what_we_do');


// add Slice 

	function create_slice(){
		
		$values = array(
			
			'public' => true, 
			'labels' => array('name'=>'Slice',
							  'add_new'=>'Add Slice',
							  'singular_name'=>'slice',
							  'add_new_item'=>'Add Slice',
							  'edit_item'=>'Edit Slice',
							  'new_item'=>'New Slice',
							  'view_item'=>'View Slice',
							  'view_items'=>'View Slice',
							  'search_items'=>'Search Slice',
							   ), 
			'menu_icon'=>'dashicons-admin-site',
			'supports'=> array('editor','title'),
		
		); 
		
		register_post_type('slice',$values); 
		
		
		
	}

add_action('init','create_slice');



/**
* Replaces "Post" in the update messages for custom post types on the "Edit"post screen.
* For example, for a "Product" custom post type, "Post updated. View Post." becomes "Product updated. View Product".
*
* @param array $messages The default WordPress messages.
*/

function pico_custom_update_messages( $messages ) {
global $post, $post_ID;

$post_types = get_post_types( array( 'show_ui' => true, '_builtin' => false ), 'objects' );

foreach( $post_types as $post_type => $post_object ) {

    $messages[$post_type] = array(
        0  => '', // Unused. Messages start at index 1.
        1  => sprintf( __( '%s updated. <a href="%s">View %s</a>' ), $post_object->labels->singular_name, esc_url( get_permalink( $post_ID ) ), $post_object->labels->singular_name ),
        2  => __( 'Custom field updated.' ),
        3  => __( 'Custom field deleted.' ),
        4  => sprintf( __( '%s updated.' ), $post_object->labels->singular_name ),
        5  => isset( $_GET['revision']) ? sprintf( __( '%s restored to revision from %s' ), $post_object->labels->singular_name, wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => sprintf( __( '%s published. <a href="%s">View %s</a>' ), $post_object->labels->singular_name, esc_url( get_permalink( $post_ID ) ), $post_object->labels->singular_name ),
        7  => sprintf( __( '%s saved.' ), $post_object->labels->singular_name ),
        8  => sprintf( __( '%s submitted. <a target="_blank" href="%s">Preview %s</a>'), $post_object->labels->singular_name, esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ), $post_object->labels->singular_name ),
        9  => sprintf( __( '%s scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview %s</a>'), $post_object->labels->singular_name, date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink( $post_ID ) ), $post_object->labels->singular_name ),
        10 => sprintf( __( '%s draft updated. <a target="_blank" href="%s">Preview %s</a>'), $post_object->labels->singular_name, esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ), $post_object->labels->singular_name ),
        );
}

return $messages;
}
add_filter( 'post_updated_messages', 'pico_custom_update_messages' );



/*
 * Change 'post' name to 'News'
*/
 
function dev_edit_admin_menus() {
    global $menu;
    global $submenu;
 
    $menu[5][0] = 'News'; // Change Posts to Houses
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Add News';
    $submenu['edit.php'][16][0] = 'News Tags';
}
 
function dev_change_post_object() {
    global $wp_post_types;
 
    
 
    $labels = &$wp_post_types['post']->labels;
 
 
 
    $labels->name = 'News';
    $labels->singular_name = 'News';
    $labels->add_new = 'Add News';
    $labels->add_new_item = 'Add News';
    $labels->edit_item = 'Edit News';
    $labels->new_item = 'News';
    $labels->view_item = 'View News';
    $labels->search_items = 'Search News';
    $labels->not_found = 'No News found';
    $labels->not_found_in_trash = 'No News found in Trash';
    $labels->all_items = 'All News';
    $labels->menu_name = 'News';
    $labels->name_admin_bar = 'News';
 
    // print_r($labels);
}
 
add_action( 'admin_menu', 'dev_edit_admin_menus' );
add_action( 'init', 'dev_change_post_object' );


// change icon post

function fontawesome_dashboard() {
   wp_enqueue_style('fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', '', '4.7.0', 'all'); 
}

add_action('admin_init', 'fontawesome_dashboard');
 

function fontawesome_icon_dashboard() {
   echo "<style type='text/css' media='screen'>
   		icon16.icon-media:before, #adminmenu .menu-icon-post div.wp-menu-image:before {
   		font-family: Fontawesome !important;
   		content: '\\f1ea';
     }
     	</style>";
 }
add_action('admin_head', 'fontawesome_icon_dashboard');



//numbering pagination
function numbering_pagination(){
	global $wp_query;
	$all_pages=$wp_query->max_num_pages;
	$current_page=max(1,get_query_var('paged'));
	if($all_pages>1){
		return paginate_links(array(
			'base'   =>get_pagenum_link().'%_%',
			'format' =>'page/%#%',
			'current'=>$current_page,
			'mid_size'=>3,
			'end_size'=>1,
		));
	}
}














































































