<?php
/**
 * linden functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package linden
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function linden_setup() {
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on linden, use a find and replace
        * to change 'linden' to the name of your theme in all the template files.
        */
    load_theme_textdomain( 'linden', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support( 'title-tag' );

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'linden' ),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'linden_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'linden_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function linden_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'linden_content_width', 640 );
}
add_action( 'after_setup_theme', 'linden_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function linden_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'linden' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'linden' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'linden_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function linden_scripts() {
    wp_enqueue_style( 'linden-style-slick', get_template_directory_uri().'/css/slick.css', array(), _S_VERSION );
    wp_enqueue_style( 'linden-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'linden-style-media', get_template_directory_uri().'/css/media.css', array(), _S_VERSION );
    wp_style_add_data( 'linden-style', 'rtl', 'replace' );

    wp_enqueue_script( 'linden-slick', get_template_directory_uri() . '/js/slick.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'linden-main', get_template_directory_uri() . '/js/main.js', array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'linden-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_localize_script( 'linden-main', 'ajax_object', array('ajax_url' => admin_url( 'admin-ajax.php' )));

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'linden_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

// add options page to theme
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

//allow svg
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_filter( 'wpcf7_autop_or_not', '__return_false' );

/*
 * Change WP Login file URL using "login_url" filter hook
 * https://developer.wordpress.org/reference/hooks/login_url/
 */
//add_filter( 'login_url', 'custom_login_url', PHP_INT_MAX );
//function custom_login_url( $login_url ) {
//    $login_url = site_url( 'dashboard-login.php', 'login' );
//    return $login_url;
//}



// post views
function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count views";
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );


// filtering
function filter_projects() {
    $catSlug = $_POST['category'];
    $postType = $_POST['type'];

    $ajaxposts = new WP_Query([
        'post_type' => $postType,
        'posts_per_page' => 6,
        'category_name' => $catSlug,
        'orderby'=> 'date',
    ]);
    $response = '';

    if($ajaxposts->have_posts()) {
        while($ajaxposts->have_posts()) : $ajaxposts->the_post();
            $response .= get_template_part('template-parts/content', $postType );
        endwhile;
    } else {
        $response = 'empty';
    }

    if ($ajaxposts->max_num_pages > 1 ) {
        $response .= '<div style="width: 100%;" class="btn btn--secondary"><a id="more_posts" data-page="1" data-category="post" data-cat="'.$catSlug.'">Load More</a></div>';
    }

    echo $response;
    exit;
}
add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');

// load more
add_action( 'wp_ajax_load_more_posts', 'load_more_posts' );
add_action( 'wp_ajax_nopriv_load_more_posts', 'load_more_posts' );
function load_more_posts() {
    // Отримати сторінку, яку ми повинні вивантажити
    $page =  $_POST['page'] + 1;
    // Отримати категорію постів, яку ми повинні вивантажити
    $category = sanitize_text_field( $_POST['category'] );
    // Створити запит до бази даних за допомогою WP_Query
    $args = array(
        'post_type'      => $category,
        'category_name'  =>  $_POST['slug'],
        'posts_per_page' => 6,
        'paged'          => $page,
    );

    $query = new WP_Query( $args );
    // Перевірити, чи є пости
    if ( $query->have_posts() ) :
        $result = '';
        // Цикл по постах
        while ( $query->have_posts() ) :
            $query->the_post();

            // Додати HTML-код з окремого файлу
            ob_start();
            get_template_part( 'template-parts/content', $category );
            $result .= ob_get_clean();
        endwhile;
        // Скинути запит
        wp_reset_postdata();
    endif;
    // Повернути результат у вигляді JSON-об'єкта
    wp_send_json_success(
        array(
            'post' => $result,
            // Визначити, чи є ще сторінки для вивантаження
            'page' => $query->max_num_pages <= $page ? 0 : $page,
        )
    );
}