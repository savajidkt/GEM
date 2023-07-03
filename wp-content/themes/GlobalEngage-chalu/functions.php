<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
add_theme_support( 'woocommerce' );
if ( ! function_exists( 'twenty_twenty_one_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Twenty-One 1.0
     *
     * @return void
     */
    function twenty_twenty_one_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Twenty Twenty-One, use a find and replace
         * to change 'twentytwentyone' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'twentytwentyone', get_template_directory() . '/languages' );
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        /*
         * Let WordPress manage the document title.
         * This theme does not use a hard-coded <title> tag in the document head,
         * WordPress will provide it for us.
         */
        add_theme_support( 'title-tag' );
        /**
         * Add post-formats support.
         */
        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1568, 9999 );
        register_nav_menus(
            array(
                'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
                'footer'  => __( 'Secondary menu', 'twentytwentyone' ),
            )
        );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        $logo_width  = 300;
        $logo_height = 100;
        add_theme_support(
            'custom-logo',
            array(
                'height'               => $logo_height,
                'width'                => $logo_width,
                'flex-width'           => true,
                'flex-height'          => true,
                'unlink-homepage-logo' => true,
            )
        );
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );
        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );
     
        // Custom background color.
        add_theme_support(
            'custom-background',
            array(
                'default-color' => 'd1e4dd',
            )
        );
        // Editor color palette.
        $black     = '#000000';
        $dark_gray = '#28303D';
        $gray      = '#39414D';
        $green     = '#D1E4DD';
        $blue      = '#D1DFE4';
        $purple    = '#D1D1E4';
        $red       = '#E4D1D1';
        $orange    = '#E4DAD1';
        $yellow    = '#EEEADD';
        $white     = '#FFFFFF';
        
        /*
        * Adds starter content to highlight the theme on fresh sites.
        * This is done conditionally to avoid loading the starter content on every
        * page load, as it is a one-off operation only needed once in the customizer.
        */
        if ( is_customize_preview() ) {
            require get_template_directory() . '/inc/starter-content.php';
            add_theme_support( 'starter-content', twenty_twenty_one_get_starter_content() );
        }
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
        // Add support for custom line height controls.
        add_theme_support( 'custom-line-height' );
        // Add support for experimental link color control.
        add_theme_support( 'experimental-link-color' );
        // Add support for experimental cover block spacing.
        add_theme_support( 'custom-spacing' );
        // Add support for custom units.
        // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
        add_theme_support( 'custom-units' );
    }
}
add_action( 'after_setup_theme', 'twenty_twenty_one_setup' );
//Upload SVG Files
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');
//Add Options Page
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
  
  acf_add_options_page(array(
        'page_title'    => 'GE Widgets Settings',
        'menu_title'    => 'GE Widgets',
        'menu_slug'     => 'ge-widget-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
function ajax_filter_posts_scripts() {
  // Enqueue script
  //wp_register_script('afp_script', get_template_directory_uri() . '/js/ajax-filter-posts.js', false, null, false);
  wp_enqueue_script('afp_script');
  wp_localize_script( 'afp_script', 'afp_vars', array(
        'afp_nonce' => wp_create_nonce( 'afp_nonce' ), // Create nonce which we later will use to verify AJAX request
        'afp_ajax_url' => admin_url( 'admin-ajax.php' ),
      )
  );
}
add_action('wp_enqueue_scripts', 'ajax_filter_posts_scripts', 100);
//Disable Gutenberg Editor :
add_filter( 'use_block_editor_for_post', '__return_false' );
// Creating Default Woocomerce Template:
add_action( 'after_setup_theme', 'setup_woocommerce_support' );
function setup_woocommerce_support()
{
  add_theme_support('woocommerce');
}  
//Calling CSS File
function enqueue_parent_styles() {
   wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri().'/css/custom-style.css' );
   wp_enqueue_style( 'harry-style', get_stylesheet_directory_uri().'/css/harry-style.css' );
    wp_enqueue_style('responsive-style',get_stylesheet_directory_uri() .'/css/responsive.css');
   wp_enqueue_style( 'slick', get_stylesheet_directory_uri().'/css/slick.css' );
   wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri().'/css/slick-theme.css' );
  
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
// custome js
function mainjs_enqueue_scripts () {   
     wp_enqueue_script('custome', get_stylesheet_directory_uri() .'/js/custome.js','jquery' , false);
     wp_enqueue_script('blockUI', get_stylesheet_directory_uri() .'/js/jquery.blockUI.js','jquery' , false);

     wp_localize_script( 'custome', 'frontendajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));

     wp_enqueue_script('slick-main',get_stylesheet_directory_uri() . '/js/slick.min.js', array(), false);       
     wp_enqueue_script('slick',get_stylesheet_directory_uri() . '/js/slick.js', array(), false);       
}
add_action( 'wp_enqueue_scripts', 'mainjs_enqueue_scripts' );
// Add  confirm password field on the register form under My Accounts.
add_filter('woocommerce_registration_errors', 'registration_errors_validation', 10,3);
function registration_errors_validation($reg_errors, $sanitized_user_login, $user_email) {
    global $woocommerce;
    extract( $_POST );
    if ( strcmp( $password, $password2 ) !== 0 ) {
        return new WP_Error( 'registration-error', __( 'Passwords do not match.', 'woocommerce' ) );
    }
    return $reg_errors;
}
add_action( 'woocommerce_register_form', 'wc_register_form_password_repeat' );
function wc_register_form_password_repeat() {
    ?>
    <p class="form-row form-row-wide confirm_pswd">
       
        <input type="password" class="input-text" name="password2" id="reg_password2" value="<?php if ( ! empty( $_POST['password2'] ) ) echo esc_attr( $_POST['password2'] ); ?>" placeholder="Confirm Password*"/>
    </p>
    <?php
}
add_action( 'init', 'wpse25157_init' );
function wpse25157_init()
{
    add_shortcode( 'ref-list', 'wpse25157_ref_list' );  
}
function wpse25157_ref_list()
{
    // very hackish get_terms call with the 0 as a string to return top level terms
    $cats = get_terms( 'product_cat', array( 'parent' => '29' ) );
    if( ! $cats || is_wp_error( $cats ) ) return;
    $out = '<div id="ref-list">' . "\n";
    foreach( $cats as $cat )
    {
        $out .= sprintf( 
            '<p class="lit-author"><a href="%s">%s</a> (%s)</p>',
            esc_url( get_term_link( $cat ) ),
            sanitize_term_field( 'name', $cat->name, $cat->term_id, 'product_cat', 'display' ),
            sanitize_term_field( 'count', $cat->count, $cat->term_id, 'product_cat', 'display' )
        );
        
        $out .= "\n"; // add some newlines to prettify our source
        
        $children = get_term_children( $cat->term_id, 'product_cat' );
        if( $children && ! is_wp_error( $children ) )
        {
            foreach( $children as $child )
            {
                $child = get_term( $child, 'product_cat' );
                if( is_wp_error( $child ) ) continue;
                $out .= sprintf( 
                    '<p class="lit-work"><a href="%s"><em>%s</em></a>. %s (%s)</p>',
                    esc_url( get_term_link( $child ) ),
                    sanitize_term_field( 'name', $child->name, $child->term_id, 'product_cat', 'display' ),
                    sanitize_term_field( 'description', $child->description, $child->term_id, 'product_cat', 'display' ),
                    sanitize_term_field( 'count', $child->count, $child->term_id, 'product_cat', 'display' )
                );
                $out .= "\n"; // prettifying newline
            }
        }
    } // end of the foreach( $cats as $cat ) loop
    $out .= "</div>\n";
    return $out;
}
function get_sub_categories_ids($parent_id){
    $ids=[];
    $args_query = array(
        'taxonomy' => 'product_cat', 
        'hide_empty' => false, 
        'child_of' => $parent_id
    );
    if ($parent_id != 0 ) {
        // Loop through WP_Term Objects
        foreach ( get_terms( $args_query ) as $term ) {
            if( $term->term_id != $main_term->term_id ) {
                // $term->slug; // Slug
                $ids[]=$term->term_id;
            }
        }
        return $ids;
    }
}

add_filter( 'wc_get_template_part', 'so_29984159_custom_content_template_part', 10, 3 );

function so_29984159_custom_content_template_part( $template, $slug, $name ){

    global $post;
    $id = $post->ID;

        if ( $slug == 'content' && $name == 'single-product')  {
            if(get_field('event_type') == 'training'){
             $template = dirname( __FILE__ ) . '/woocommerce/single-training-course.php';
            }

            if(get_field('event_type') == 'webinar'){
             $template = dirname( __FILE__ ) . '/woocommerce/single-webinar.php';
            }
            
            // if(locate_template('content-single-product-custom.php') ) {
            //     $template = locate_template( $file_name );
            // } else {
            //     // Template not found in theme's folder, use plugin's template as a fallback
            //     $template = dirname( __FILE__ ) . '/content-single-product-custom.php';
            // }

        }
        return $template;
    }

add_action( 'init', 'bc_remove_wc_breadcrumbs' );
function bc_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

add_action( 'woocommerce_product_query', 'product_query_by_sku',50,1 );
function product_query_by_sku( $q ) {
    if (! is_admin() ) {
        
        $meta_query = $q->get( 'meta_query' );
        $meta_query[] = array(
            'key'       => 'WooCommerceEventsDateTimestamp',
            'value'     => strtotime(date('d M Y')),
            'compare'   => '>=',
        );
    
        $q->set( 'meta_query', $meta_query );


     
        
    }
}

add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_get_catalog_ordering_args',50,1 );
function custom_get_catalog_ordering_args( $args ) {
    if ( isset( $_GET['orderby'] ) ) {
        // Sort by "menu_order" DESC (the default option)
        if ( 'title_desc' === $_GET['orderby'] ) {
            $args = array( 'orderby' => 'title', 'order' => 'DESC' );
        }
        // Sort by "menu_order" ASC
        elseif ( 'title_asc' == $_GET['orderby'] ) {
            $args = array( 'orderby'  => 'title', 'order' => 'ASC' );
        }
        // Make a clone of "menu_order" (the default option)
        elseif ( 'natural_order' == $_GET['orderby'] ) {
            $args = array( 'orderby'  => 'menu_order title', 'order' => 'ASC' );
        }
    }
    return $args;
}

add_filter( 'woocommerce_catalog_orderby', 'custom_catalog_orderby' );
function custom_catalog_orderby( $orderby ) {
    unset($orderby['popularity']);
    unset($orderby['rating']);
    unset($orderby['date']);
    unset($orderby['price']);
    unset($orderby['price-desc']);
    $orderby['title_asc'] = __('A-Z', 'woocommerce');
    $orderby['title_desc'] = __('Z-A', 'woocommerce');

    return $orderby ;
}

//add_filter( 'woocommerce_default_catalog_orderby', 'custom_default_catalog_orderby' );
function custom_default_catalog_orderby( $default_orderby ) {
    return 'title_desc';
}

add_action( 'woocommerce_product_query', 'product_query_sort_alphabetically',60,1 );
function product_query_sort_alphabetically( $q ) {
   
    if (!isset( $_GET['orderby'] ) && $_GET['orderby'] != 'eventdate-desc' && ! is_admin() ) {
        $q->set( 'orderby', 'meta_value' );
        $q->set( 'order', 'asc' );
        $q->set( 'meta_key', 'WooCommerceEventsDateTimestamp' );

    }
}

add_filter ('add_to_cart_redirect', 'redirect_to_checkout');

function redirect_to_checkout() {
    global $woocommerce;


    $cart = WC()->cart->get_cart();
    foreach($cart as $key=>$value){
        $product_id = $value['product_id'];
        $event_type = get_post_meta($product_id,'event_type',true);
        $is_free_webinar = get_post_meta($product_id,'is_free_webinar',true);
        if($is_free_webinar =='free' && $event_type=='webinar'){
           $checkout_url = $woocommerce->cart->get_checkout_url();
            return $checkout_url; 
        }
    }


    
}


add_filter( 'woocommerce_account_menu_items', function($items) {
    $items['my-events'] = __('My Events', 'textdomain');

    return $items;
}, 99, 1 );

add_action( 'init', function() {
    add_rewrite_endpoint( 'my-events', EP_ROOT | EP_PAGES );
    // Repeat above line for more items ...
} );

add_action( 'woocommerce_account_my-events_endpoint', function() {
  
    wc_get_template_part('myaccount/my-events');
});


add_filter('wpcf7_form_tag_data', 'woocommerce_user_data_to_cf7', 10, 2);

function woocommerce_user_data_to_cf7($tag_data, $context)
{
    if ('your-name' === $tag_data['name'] && is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $tag_data['values'] = array($current_user->display_name);
    }

    if ('your-email' === $tag_data['name'] && is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $tag_data['values'] = array($current_user->user_email);
    }

    if ('your-phone' === $tag_data['name'] && is_user_logged_in()) {
        $phone_number = get_user_meta(get_current_user_id(), 'phone', true);
        $tag_data['values'] = array($phone_number);
    }

    return $tag_data;
}
if(!is_admin()){
       add_filter( 'wp_terms_checklist_args', 'my_wp_terms_checklist_args', 10, 2 );
    }

function my_wp_terms_checklist_args( $args, $post_id ) {
    
    //require_once _DIR_ . '/includes/class-my-walker-category-checklist.php';

    $args['walker'] = new My_Walker_Category_Checklist;

    return $args;
}

class My_Walker_Category_Checklist extends Walker {

	public $tree_type = 'category';
	public $db_fields = array(
		'parent' => 'parent',
		'id'     => 'term_id',
	); // TODO: Decouple this.

	/**
	 * Starts the list before the elements are added.
	 *
	 * @see Walker:start_lvl()
	 *
	 * @since 2.5.1
	 *
	 * @param string $output Used to append additional content (passed by reference).
	 * @param int    $depth  Depth of category. Used for tab indentation.
	 * @param array  $args   An array of arguments. @see wp_terms_checklist()
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
        if( $args['has_children'] > 0 ){
		$indent  = str_repeat( "\t", $depth );
		$output .= "$indent<ul class='children childClsUl'>\n";
        }
	}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @see Walker::end_lvl()
	 *
	 * @since 2.5.1
	 *
	 * @param string $output Used to append additional content (passed by reference).
	 * @param int    $depth  Depth of category. Used for tab indentation.
	 * @param array  $args   An array of arguments. @see wp_terms_checklist()
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
        if( $args['has_children'] > 0 ){
		$indent  = str_repeat( "\t", $depth );
		$output .= "$indent</ul>\n";
        }
	}

	/**
	 * Start the element output.
	 *
	 * @see Walker::start_el()
	 *
	 * @since 2.5.1
	 * @since 5.9.0 Renamed `$category` to `$data_object` and `$id` to `$current_object_id`
	 *              to match parent class for PHP 8 named parameter support.
	 *
	 * @param string  $output            Used to append additional content (passed by reference).
	 * @param WP_Term $data_object       The current term object.
	 * @param int     $depth             Depth of the term in reference to parents. Default 0.
	 * @param array   $args              An array of arguments. @see wp_terms_checklist()
	 * @param int     $current_object_id Optional. ID of the current term. Default 0.
	 */
	public function start_el( &$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0 ) {
	    
       if( $args['has_children'] > 0 || $depth != 0){
       
		// Restores the more descriptive, specific name for use within this method.
		$category = $data_object;

		if ( empty( $args['taxonomy'] ) ) {
			$taxonomy = 'category';
		} else {
			$taxonomy = $args['taxonomy'];
		}

		if ( 'category' === $taxonomy ) {
			$name = 'post_category';
		} else {
			$name = 'tax_input[' . $taxonomy . ']';
		}

		$args['popular_cats'] = ! empty( $args['popular_cats'] ) ? array_map( 'intval', $args['popular_cats'] ) : array();

        if($depth == 0){
		$class = in_array( $category->term_id, $args['popular_cats'], true ) ? ' class="popular-category accordionLI"' : '';
        }else {
            $class = in_array( $category->term_id, $args['popular_cats'], true ) ? ' class="popular-category childClsLi"' : '';
        }
		$args['selected_cats'] = ! empty( $args['selected_cats'] ) ? array_map( 'intval', $args['selected_cats'] ) : array();

		if ( ! empty( $args['list_only'] ) ) {
			$aria_checked = 'false';
			$inner_class  = 'category';

			if ( in_array( $category->term_id, $args['selected_cats'], true ) ) {
				$inner_class .= ' selected';
				$aria_checked = 'true';
			}

			$output .= "\n" . '<li' . $class . '>' .				
				'<div class="' . $inner_class . '" data-term-id=' . $category->term_id .
				' tabindex="0" role="checkbox" aria-checked="' . $aria_checked . '">' .
				/** This filter is documented in wp-includes/category-template.php */
				esc_html( apply_filters( 'the_category', $category->name, '', '' ) ) . '</div>';
		} else {
			$is_selected = in_array( $category->term_id, $args['selected_cats'], true );
			$is_disabled = ! empty( $args['disabled'] );
            if($depth == 0){
			
            
               
                //$termchildren = get_terms( $category->taxonomy,array('child_of' => $category->term_id));
             // if( count( $termchildren ) > 0 ){
                $output .= "\n<li id='{$taxonomy}-{$category->term_id}'$class>" .
				'<input type="checkbox" class="checkInput" checked=""><i></i>'.
				'<label class="selectit">'.
				/** This filter is documented in wp-includes/category-template.php */
				esc_html( apply_filters( 'the_category', $category->name, '', '' ) ) . '</label>';
              //}

                


			}else{
			 $output .= "\n<li id='{$taxonomy}-{$category->term_id}'$class>" .
				'<label class="selectit"><input value="' . $category->term_id . '" type="checkbox" class="filter-category" name="' . $name . '[]" id="in-' . $taxonomy . '-' . $category->term_id . '"' .
				checked( $is_selected, true, false ) .
				disabled( $is_disabled, true, false ) . ' /> ' .
				/** This filter is documented in wp-includes/category-template.php */
				esc_html( apply_filters( 'the_category', $category->name, '', '' ) ) . '</label>';   
			}
		}
		}
	}

	/**
	 * Ends the element output, if needed.
	 *
	 * @see Walker::end_el()
	 *
	 * @since 2.5.1
	 * @since 5.9.0 Renamed `$category` to `$data_object` to match parent class for PHP 8 named parameter support.
	 *
	 * @param string  $output      Used to append additional content (passed by reference).
	 * @param WP_Term $data_object The current term object.
	 * @param int     $depth       Depth of the term in reference to parents. Default 0.
	 * @param array   $args        An array of arguments. @see wp_terms_checklist()
	 */
	public function end_el( &$output, $data_object, $depth = 0, $args = array() ) {
        if( $args['has_children'] > 0 ){
		  $output .= "</li>\n";
        }
	}
}





add_action( 'wp_ajax_nopriv_wp_filter_data', 'wp_filter_data' );
add_action( 'wp_ajax_wp_filter_data', 'wp_filter_data' );

function wp_filter_data(){
    $categoryData = $_POST['categoryData'];
    $resourceType = $_POST['resourceType'];
    $page = $_POST['page'] ? $_POST['page'] : 1;
    $tax_query = array( 'relation' => 'AND' );
    $tax_query[] = array(
                'taxonomy' => 'resource-type',
                'field' => 'slug',
                'terms' => $resourceType
            );

    if( $categoryData ){
        $tax_query[] = array(
                    'taxonomy' => 'resource-category',
                    'field' => 'term_id',
                    'terms' => $categoryData
                );
     }
     

    $args = array(
        'post_type' => 'resource-center',
        'posts_per_page' => 9,
        'paged' =>$page,
        'orderby'   => 'ID',
        'order' => 'DESC',
        'tax_query' => $tax_query
    );

    $uposts = new WP_Query($args);
    

    
    if($uposts->have_posts()) :
        ob_start();
      while ( $uposts->have_posts() ) : $uposts->the_post();

         $response .= get_template_part('template-parts/content', 'resource');

   
      endwhile;

      $output = ob_get_contents();
      ob_end_clean();
        $result = [
            'max' => $uposts->max_num_pages,
            'html' => $output,
          ];

  else:
    $result = [
            'max' =>0,
            'html' =>'No Found',
          ];
  endif;
echo json_encode($result);

    die();

}

add_action( 'wp_ajax_nopriv_wp_filter_faq_data', 'wp_filter_faq_data' );
add_action( 'wp_ajax_wp_filter_faq_data', 'wp_filter_faq_data' );

function wp_filter_faq_data(){
    $categoryData = $_POST['categoryData'];
    $faqType = $_POST['faqType'];

    $tax_query = array( 'relation' => 'AND' );
    $tax_query[] = array(
                'taxonomy' => 'faq-type',
                'field' => 'slug',
                'terms' => $faqType
            );

    if( $categoryData ){
        $tax_query[] = array(
                    'taxonomy' => 'faq-category',
                    'field' => 'term_id',
                    'terms' => $categoryData
                );
     }
     

    $args = array(
        'post_type' => 'faqs',
        'posts_per_page' =>-1,
        'orderby'   => 'ID',
        'order' => 'DESC',
        'tax_query' => $tax_query
    );

    $uposts = new WP_Query($args);

    if($uposts->have_posts()) :
        ob_start();
      while ( $uposts->have_posts() ) : $uposts->the_post();

         $response .= get_template_part('template-parts/content', 'faq');

   
      endwhile;

      $output = ob_get_contents();
      ob_end_clean();
        $result = [
            'max' => $uposts->max_num_pages,
            'html' => $output,
          ];
  else:
    $result = [
            'max' =>0,
            'html' =>'No FAQ',
          ];
  endif;
echo json_encode($result);
    die();

}



function yith_wcan_filter_button( $example ) {

    return 'X Clear';
}
add_filter( 'yith_wcan_filter_button', 'yith_wcan_filter_button' );

add_action( 'wp_ajax_nopriv_fragment_data', 'fragment_data' );
add_action( 'wp_ajax_wp_fragment_data', 'fragment_data' );

function fragment_data(){
        WC_AJAX::get_refreshed_fragments();
        die();
}


// /

function wpb_posts_nav(){
    $next_post = get_next_post();
    $prev_post = get_previous_post();
      
    if ( $next_post || $prev_post ) : ?>
      
        <div class="wpb-posts-nav">
            <div class="priv_arrow_img">
                <?php if ( ! empty( $prev_post ) ) : ?>
                    <a href="<?php echo get_permalink( $prev_post ); ?>">
                        <div class="arrow_blog_img_single">
                            <div class="arrow_blog_img_single">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-left-side.svg" />
                            </div>
                              <p><?php _e( 'Previous article', 'textdomain' ) ?> </p> 
                        </div>
                    </a>
                <?php endif; ?>
            </div>
            <div class="next_arrow_img">
                <?php if ( ! empty( $next_post ) ) : ?>
                    <a href="<?php echo get_permalink( $next_post ); ?>">
                        <div class="arrow_blog_img_single">
                         
                                <p><?php _e( 'Next article', 'textdomain' ) ?></p>
                                <div class="arrow_blog_img_single">
                                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Path 902.svg" />
                               </div>
                                
                         
                           
                        </div>
                        
                    </a>
                <?php endif; ?>
            </div>
        </div> <!-- .wpb-posts-nav -->
      
    <?php endif;
}

add_action( 'wp_ajax_nopriv_wp_filter_resource_data', 'wp_filter_resource_data' );
add_action( 'wp_ajax_wp_filter_resource_data', 'wp_filter_resource_data' );

function wp_filter_resource_data(){

    $resourceType = $_POST['resourceType'];
    $page = $_POST['page'] ? $_POST['page'] : 1;
    $tax_query = array( 'relation' => 'AND' );
    $tax_query[] = array(
                'taxonomy' => 'resource-type',
                'field' => 'slug',
                'terms' => $resourceType
            );


    $args = array(
        'post_type' => 'resource-center',
        'posts_per_page' => 4,
        'paged' =>$page,
        'orderby'   => 'ID',
        'order' => 'DESC',
        'tax_query' => $tax_query
    );

    $uposts = new WP_Query($args);
    

    
    if($uposts->have_posts()) :
        ob_start();
      while ( $uposts->have_posts() ) : $uposts->the_post();

         $response .= get_template_part('template-parts/content', 'home-resource');

   
      endwhile;

      $output = ob_get_contents();
      ob_end_clean();
        $result = [
            'max' => $uposts->max_num_pages,
            'html' => $output,
          ];

  else:
    $result = [
            'max' =>0,
            'html' =>'No Found',
          ];
  endif;
echo json_encode($result);

    die();

}

                   



