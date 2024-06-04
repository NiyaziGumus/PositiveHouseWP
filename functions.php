<?php
/**
 * Bootstrap on WordPress functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Bootstrap 5.3.2
 * @author Babobski
 * @modified_by Niyo 
 */

define('BOOTSTRAP_VERSION', '5.3.2');
define('BOOTSTRAP_ICON_VERSION', '1.11.2');

/* ========================================================================================================================

01. Add language support to theme

======================================================================================================================== */

add_action('after_setup_theme', 'my_theme_setup');

function my_theme_setup(){
    load_theme_textdomain('WPBootstrapThemeWP', get_template_directory() . '/languages');
}

/* ========================================================================================================================

02. Required external files

======================================================================================================================== */

require_once('external/bootstrap-utilities.php');
require_once('external/bs5navwalker.php');

/* ========================================================================================================================

03. Add HTML5 support to WordPress elements

======================================================================================================================== */

add_theme_support('html5', [
    'comment-list',
    'search-form',
    'comment-form',
    'gallery',
    'caption',
]);

/* ========================================================================================================================

04. Theme specific settings

======================================================================================================================== */

add_theme_support('post-thumbnails');

//add_image_size('name', width, height, crop true|false);

register_nav_menus([
    'primary' => 'Primary Navigation'
]);

/* ========================================================================================================================

05. Actions and Filters

======================================================================================================================== */

add_action('wp_enqueue_scripts', 'bootstrap_script_init');

$BsWp = new BsWp;
add_filter('body_class', [$BsWp, 'add_slug_to_body_class']);

/* ========================================================================================================================

06. Custom Post Types - include custom post types and taxonomies here e.g.

e.g. require_once('custom-post-types/your-custom-post-type.php');

======================================================================================================================== */



/* ========================================================================================================================

07. Scripts

======================================================================================================================== */

/**
 * Add scripts via wp_head()
 *
 * @return void
 * @author Keir Whitaker
 */
if (!function_exists('bootstrap_script_init')) {
    function bootstrap_script_init() {

        // Get theme version number (located in style.css)
        $theme = wp_get_theme();

        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', ['jquery'], BOOTSTRAP_VERSION, true);

        // Dropdown JS
        wp_enqueue_script('dropdown-js', get_template_directory_uri() . '/mobirise/assets/dropdown/js/navbar-dropdown.js', ['bootstrap'], $theme->get('Version'), true);
        
        // Embla JS
        wp_enqueue_script('embla-min', get_template_directory_uri() . '/mobirise/assets/embla/embla.min.js', ['bootstrap'], $theme->get('Version'), true);
        wp_enqueue_script('embla-script', get_template_directory_uri() . '/mobirise/assets/embla/script.js', ['bootstrap'], $theme->get('Version'), true);
        
        // SmoothScroll JS
        wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/mobirise/assets/smoothscroll/smooth-scroll.js', ['bootstrap'], $theme->get('Version'), true);
        
        // Theme JS
        wp_enqueue_script('theme-script', get_template_directory_uri() . '/mobirise/assets/theme/js/script.js', ['bootstrap'], $theme->get('Version'), true);

        // Mobirise Switch Arrow JS
        wp_enqueue_script('mobirise-arrow', get_template_directory_uri() . '/mobirise/assets/mobirise/js/mbr-switch-arrow.js', ['bootstrap'], $theme->get('Version'), true);

        wp_enqueue_script('site', get_template_directory_uri() . '/js/app.js', ['jquery', 'bootstrap'], $theme->get('Version'), true);

        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], BOOTSTRAP_VERSION, 'all');

        // Mobirise CSS
        wp_enqueue_style('mobirise-css', get_template_directory_uri() . '/mobirise/assets/mobirise/css/mbr-additional.css', ['bootstrap'], $theme->get('Version'), 'all');
        
        // Dropdown CSS
        wp_enqueue_style('dropdown-style', get_template_directory_uri() . '/mobirise/assets/dropdown/css/style.css', ['bootstrap'], $theme->get('Version'), 'all');
        
        // Socicon CSS
        wp_enqueue_style('socicon', get_template_directory_uri() . '/mobirise/assets/socicon/css/styles.css', ['bootstrap'], $theme->get('Version'), 'all');
        
        // Theme CSS
        wp_enqueue_style('theme-style', get_template_directory_uri() . '/mobirise/assets/theme/css/style.css', ['bootstrap'], $theme->get('Version'), 'all');
        
        // Mobirise Icons CSS
        wp_enqueue_style('mobirise-icons', get_template_directory_uri() . '/mobirise/assets/web/assets/mobirise-icons2/mobirise2.css', [], $theme->get('Version'), 'all');
        wp_enqueue_style('custom', get_template_directory_uri() . '/scss/custom/custom.css', ['bootstrap'], $theme->get('Version'), 'all');
        wp_enqueue_style('extra', get_template_directory_uri() . '/extra/extra.css', [], $theme->get('Version'), 'all');
        wp_enqueue_style('bootstrap_icons', get_template_directory_uri() . '/css/bootstrap-icons.min.css', [], BOOTSTRAP_ICON_VERSION, 'all');
        wp_enqueue_style('screen', get_template_directory_uri() . '/style.css', [], $theme->get('Version'), 'screen');
    }
}

/* ========================================================================================================================

08. Security & cleanup wp admin

======================================================================================================================== */

// Remove WP version
function theme_remove_version() {
    return '';
}

add_filter('the_generator', 'theme_remove_version');

// Remove default footer text
function remove_footer_admin() {
    echo "";
}

add_filter('admin_footer_text', 'remove_footer_admin');

// Remove WordPress logo from admin bar
function wp_logo_admin_bar_remove() {
    global $wp_admin_bar;

    /* Remove their stuff */
    $wp_admin_bar->remove_menu('wp-logo');
}

add_action('wp_before_admin_bar_render', 'wp_logo_admin_bar_remove', 0);

// Remove default Dashboard widgets
if (!function_exists('disable_default_dashboard_widgets')) {
    function disable_default_dashboard_widgets() {

        //remove_meta_box('dashboard_right_now', 'dashboard', 'core');
        remove_meta_box('dashboard_activity', 'dashboard', 'core');
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
        remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
        remove_meta_box('dashboard_plugins', 'dashboard', 'core');

        remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
        remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
        remove_meta_box('dashboard_primary', 'dashboard', 'core');
        remove_meta_box('dashboard_secondary', 'dashboard', 'core');
    }
}
add_action('admin_menu', 'disable_default_dashboard_widgets');

remove_action('welcome_panel', 'wp_welcome_panel');

// Disable the emoji's
if (!function_exists('disable_emojis')) {
    function disable_emojis() {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

        // Remove from TinyMCE
        add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
    }
}
add_action('init', 'disable_emojis');

// Filter out the TinyMCE emoji plugin.
function disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, ['wpemoji']);
    } else {
        return [];
    }
}

add_action('admin_head', 'custom_logo_guttenberg');

if (!function_exists('custom_logo_guttenberg')) {
    function custom_logo_guttenberg() {
        echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') .
        '/css/admin-custom.css?v=1.0.0" />';
    }
}

/* ========================================================================================================================

09. Disabling Gutenberg

======================================================================================================================== */

// Optional: disable Gutenberg block editor
// add_filter('use_block_editor_for_post', '__return_false');

// Remove Gutenberg Block Library CSS from loading on the frontend
// function smartwp_remove_wp_block_library_css() {
// wp_dequeue_style('wp-block-library');
// wp_dequeue_style('wp-block-library-theme');
// wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
// wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront 
// }
// add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);

/* ========================================================================================================================

10. Custom login

======================================================================================================================== */

// Add custom CSS
if (!function_exists('my_custom_login')) {
    function my_custom_login() {
        echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/custom-login-style.css?v=1.0.0" />';
    }
}
add_action('login_head', 'my_custom_login');

// Link the logo to the home of our website
if (!function_exists('my_login_logo_url')) {
    function my_login_logo_url() {
        return get_bloginfo('url');
    }
}
add_filter('login_headerurl', 'my_login_logo_url');

// Change the title text
if (!function_exists('my_login_logo_url_title')) {
    function my_login_logo_url_title() {
        return get_bloginfo('name');
    }
}
add_filter('login_headertext', 'my_login_logo_url_title');

/* ========================================================================================================================

11. Comments

======================================================================================================================== */

/**
 * Custom callback for outputting comments
 *
 * @return void
 * @author Keir Whitaker
 */
if (!function_exists('bootstrap_comment')) {
    function bootstrap_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        ?>
        <?php if ($comment->comment_approved == '1'): ?>
        <li class="row">
            <div class="col-4 col-md-2">
                <?php echo get_avatar($comment); ?>
            </div>
            <div class="col-8 col-md-10">
                <h4><?php comment_author_link() ?></h4>
                <time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
                <?php comment_text() ?>
            </div>
        <?php endif;
    }
}


// IP-Based Language Redirection
function detect_and_redirect_language() {
    if (!is_admin() && !is_user_logged_in()) {
        // Get the visitor's IP address
        $user_ip = $_SERVER['REMOTE_ADDR'];
        // Get geolocation data based on the IP address
        $geo = wp_remote_get("https://geolocation-db.com/json/{$user_ip}&position=true");

        if (!is_wp_error($geo)) {
            // Decode the JSON response to get the country code
            $geo = json_decode(wp_remote_retrieve_body($geo), true);
            $country_code = $geo['country_code'];

            // Switch the locale based on the country code
            switch ($country_code) {
                case 'DE':
                    // Redirect to German language for visitors from Germany
                    if (get_locale() != 'de_DE') {
                        switch_to_locale('de_DE');
                    }
                    break;
                case 'FR':
                    // Redirect to French language for visitors from France
                    if (get_locale() != 'fr_FR') {
                        switch_to_locale('fr_FR');
                    }
                    break;
                case 'NL':
                    // Redirect to Dutch language for visitors from the Netherlands
                    if (get_locale() != 'nl_NL') {
                        switch_to_locale('nl_NL');
                    }
                    break;
                default:
                    // Redirect to English language for visitors from other countries
                    if (get_locale() != 'en_US') {
                        switch_to_locale('en_US');
                    }
                    break;
            }
        }
    }
}
add_action('init', 'detect_and_redirect_language');

add_filter('show_admin_bar', '__return_false');

// Add Google Fonts
function enqueue_google_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');

?>


