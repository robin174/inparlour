<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 
require_once(get_template_directory().'/assets/functions/menu-walkers.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php');


// Custom Enqueue Scripts
// -------------------------------------------------------------
function ip_enqueue_scripts() {
    if ( !is_admin() ) { // Instruction to only load if it is not the admin area
    // Register your script location, dependencies and version
     
        /* jquery (google CDN) */
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
        wp_enqueue_script('jquery');

        /* jquery UI (google CDN) */
        wp_deregister_script('jquery-ui-core');
        wp_register_script('jquery-ui-core', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js');
        wp_enqueue_script('jquery-ui-core');

        /* isotope */
        wp_register_script('isotope', '/wp-content/themes/inparlour6/js/isotope.pkgd.js','', true);
        wp_enqueue_script('isotope');

        /* isotope - custom */
        wp_register_script('isotope-custom', '/wp-content/themes/inparlour6/js/isotope.custom.js','', true);
        wp_enqueue_script('isotope-custom');

        /* imageload - custom */
        wp_register_script('images-loaded', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.1.8/imagesloaded.min.js','jquery', true);
        wp_enqueue_script('images-loaded');

        /* masonry (http://masonry.desandro.com) */ 
        wp_register_script('masonry', '/wp-content/themes/inparlour6/js/masonry.pkgd.min.js','jquery','', true);    
        wp_enqueue_script('masonry');

        /* blueimp gallery (http://blueimp.github.io/Gallery/) */ 
        wp_register_script('blueimp', '/wp-content/themes/inparlour6/js/blueimp-gallery.min.js','jquery','', true);    
        wp_enqueue_script('blueimp');

        /* scrolltotop (https://premium.wpmudev.org/blog/back-to-top-button-wordpress/) */ 
        wp_register_script('scrolltotop', '/wp-content/themes/inparlour6/js/scrolltotop.js','jquery','', true);    
        wp_enqueue_script('scrolltotop');
        
    }
}
add_action('wp_enqueue_scripts', 'ip_enqueue_scripts');


// Custom Enqueue CSS Styles
// -------------------------------------------------------------
function ip_enqueue_styles() {
    wp_register_style('ip-googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
    wp_enqueue_style('ip-googlefont');

    wp_register_style('blueimp', '/wp-content/themes/inparlour6/css/blueimp-gallery.min.css');
    wp_enqueue_style('blueimp');
}
add_action('wp_print_styles', 'ip_enqueue_styles');


// Custom entry meta information for posts, used by multiple loops.
// -------------------------------------------------------------
function custom_entry_meta() {
    echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate><span>Published:&nbsp;</span> '. sprintf(__('%s', 'reverie'), get_the_time('F Y'), get_the_time()) .'</time>';
}

add_filter('latest_tweets_render_date', function( $created_at ){
    $date = DateTime::createFromFormat('D M d H:i:s O Y', $created_at );
    return $date->format('- d F Y');
}, 10 , 1 );


// Add Post Slug as class
// -------------------------------------------------------------
function the_slug() {
    $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name'];
    return $slug; 
}


// Add Page Slug to Body Class
// -------------------------------------------------------------
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


// Custom Admin Logo
// -------------------------------------------------------------
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/site-login-inparlour.png);
            padding-bottom: 0;
            -webkit-background-size: 270px 70px;
            background-size: 270px 70px;
            width: 270px;
            height: 70px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// Instagram widget fix 
// https://github.com/scottsweb/wp-instagram-widget/issues/118#issuecomment-524009143
// -------------------------------------------------------------
add_filter('wpiw_proxy', '__return_true');


// Sidebars
// -------------------------------------------------------------
// Twitter - Homepage
$sidebars = array('Twitter');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'id' => 'social-twitter',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h6>',
        'after_title' => '</h6>'
    ));
}

// Instagram - Homepage
$sidebars = array('Instagram');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'id' => 'social-instagram',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h6>',
        'after_title' => '</h6>'
    ));
}