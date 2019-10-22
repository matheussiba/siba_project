<?php
/**
 * Functions and definitions
 *
 * @package WordPress
 * @subpackage sibaproject
 * @since 1.0
 * @version 1.0
 */

 // TGM plugin activation
 require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
 require_once get_template_directory() . '/inc/required-plugins.php';

// CPTs
require get_template_directory() . '/inc/cpts.php';

// Requerendo o arquivo do Customizer
require get_template_directory() . '/inc/customizer.php';

// Carregando nossos scripts e folhas de estilos
function load_scripts(){
	// Folhas de estilos
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans' );
	wp_enqueue_style( 'styles-merged', get_template_directory_uri() . '/css/styles-merged.css' );
	wp_enqueue_style( 'style-min', get_template_directory_uri() . '/css/style.min.css' );
  // Theme customized edits
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );


	// Scripts
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/scripts.min.js', array( 'jquery'), null, true  );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/main.min.js', array( 'jquery'), null, true  );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/custom.js', array( 'jquery'), null, true  );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Função de Configuração do Tema
function sibaproject_config(){
	// Registrando nossos menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu'
		)
	);

	// Adding Image Sizes
	add_image_size( 'custom-thumb-sq-200-crop', 200, 200, TRUE );
	add_image_size( 'custom-thumb-sq-400-crop', 400, 400, TRUE );

	// Adicionando suporte ao tema
	$args = array(
		'height'	=> 650,
		'width'		=> 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );
	add_theme_support( 'title-tag');
	add_theme_support( 'custom-logo', array( 'height' => 80, 'width' => 170 ) );

  // Enabiling Theme Translation
	$textdomain = 'siba-project';
  // Child Theme
	load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
  // Parent Theme
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

	// Suporte para Gutenberg
	add_theme_support( 'align-wide');
	add_theme_support( 'editor-color-palette', array(
		array(
			'name' => 'Vermelho logo',
			'slug' => 'red-logo',
			'color' => '#dd3a40'
		),
		array(
			'name' => 'Vermelho logo v2',
			'slug' => 'red-logo-variation',
			'color' => '#e04343'
		),
		array(
			'name' => 'Vermelho Escuro',
			'slug' => 'red-darker',
			'color' => '#b9121b'
		),
		array(
			'name' => 'Cinza logo',
			'slug' => 'gray-logo',
			'color' => '#e9e6df'
		),
		array(
			'name' => 'Azul logo',
			'slug' => 'blue-logo',
			'color' => '#135b97'
		),
		array(
			'name' => 'Azul Escuro',
			'slug' => 'blue-darker',
			'color' => '#0a4a72'
		),
		array(
			'name' => 'Azul Claro logo',
			'slug' => 'blue-light-logo',
			'color' => '#73bdbd'
		),
		array(
			'name' => 'Verde logo',
			'slug' => 'green-logo',
			'color' => '#42ad6a'
		)
	));
	// add_theme_support( 'disable-custom-colors');
	// add_theme_support( 'editor-styles' );
	// add_editor_style( 'css/style-editor.css' );
	// add_theme_support( 'wp-block-styles' );

}
add_action( 'after_setup_theme', 'sibaproject_config', 0 );

add_action( 'widgets_init', 'sibaproject_sidebars' );
function sibaproject_sidebars(){
	register_sidebar(
		array(
			'name' => 'Arquive Sidebar',
			'id' => 'sidebar-archive',
			'description' => 'Sidebar para ser usada na pagina de Arquivos (archive.php)',
			'before_widget' => '<div class="widgets-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
}

// ADD FILTERS
add_filter('enter_title_here','custom_enter_title');
function custom_enter_title( $input ) {
  // Create a custom Title label for the CPTs
    if ( 'classes' === get_post_type() ) {
        return __( 'Class Name', 'siba-project' );
    }
    elseif ( 'team' === get_post_type() ) {
        return __( 'Team Member Name', 'siba-project' );
    }
    elseif ( 'testimonials' === get_post_type() ) {
        return __( 'Name of the Testimonial Person', 'siba-project' );
    }
    return $input;
}

add_filter( 'gettext', 'custom_excerpt_label', 10, 2 );
function custom_excerpt_label( $translation, $original ) {
  // Create a custom excerpt label for the CPTs
    if ( 'classes' === get_post_type() ) {
      if ( 'Excerpt' == $original ) {
          return __( 'Class Summary', 'siba-project');
      } elseif ( false !== strpos( $original, 'Excerpts are optional hand-crafted summaries of your' ) ) {
          return __( 'Write a summary for this class (between 15-25 words).', 'siba-project' );
      }
    } elseif ( 'team' === get_post_type() ) {
      if ( 'Excerpt' == $original ) {
          return __( 'Person Role', 'siba-project');
      } elseif ( false !== strpos( $original, 'Excerpts are optional hand-crafted summaries of your' ) ) {
          return __( 'Write here the role of this person in your business (ex: Coordinator and Manager).', 'siba-project' );
      }
    } elseif ( 'testimonials' === get_post_type() ) {
      if ( 'Excerpt' == $original ) {
          return __( 'Person Role', 'siba-project');
      } elseif ( false !== strpos( $original, 'Excerpts are optional hand-crafted summaries of your' ) ) {
          return __( 'Write here the role of this person (ex: Student).', 'siba-project' );
      }
    }

    return $translation;
}

// ADD ACTIONS
//Adding Instructions about to add a new post for each of the CPTs
function options_instructions_example() {
  // Give Instructions about how to add a new CPT
    global $my_admin_page;
    $screen = get_current_screen();

    if ( is_admin() && ($screen->id == 'classes') ) {
        function add_content_after_editor() {
            global $post;
            $id = $post->ID;
            echo '<div class="postbox" style="background:#0074a2;color:#fff;margin-top:20px;"><div class="inside">';
            echo __( 'INSTRUCTIONS:', 'siba-project');
            echo '<br /><p style="margin: 0px; padding: 0px">';
            echo __( '1) Add the name of the class in the above box.', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px">';
            echo __( '2) Add a cover image for this class using the "Cover Image" box', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px">';
            echo __( '3) Add a class summary, using the "Class Summary" box', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px">';
            echo __( '4) Write something about this class, using the text area box below. This text will only appear when someone wants to know more details about this class', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px; font-style: italic;">';
            echo __( 'Additionally you can adjust the order of appearance using the "Item Attributes" box > "Order".', 'siba-project');
            echo '<br />';
            echo __( 'Numbers close to 0 appears first.', 'siba-project');
            echo '</p><br />';
            echo '</div></div>';
        }
        add_action( 'edit_form_after_title', 'add_content_after_editor' );
    } elseif ( is_admin() && ($screen->id == 'team') ) {
        function add_content_after_editor() {
            global $post;
            $id = $post->ID;
            echo '<div class="postbox" style="background:#0074a2;color:#fff;margin-top:20px;"><div class="inside">';
            echo __( 'INSTRUCTIONS:', 'siba-project');
            echo '<br /><p style="margin: 0px; padding: 0px">';
            echo __( '1) Add the name of the person in the above box.', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px">';
            echo __( '2) Add a photo of this person using the "Profile Picture" box', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px">';
            echo __( '3) Add the role of this person (ex: Coordinator, Teacher, etc.), using the "Person Role" box', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px">';
            echo __( '4) Add the social media links of this person using the "Social Media" box', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px">';
            echo __( '5) Write something about this person, using the text area box below. This text will only appear when someone wants to know more details about this person', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px; font-style: italic;">';
            echo __( 'Additionally you can adjust the order of appearance using the "Item Attributes" box > "Order".', 'siba-project');
            echo '<br />';
            echo __( 'Numbers close to 0 appears first.', 'siba-project');
            echo '</p><br />';
            echo '</div></div>';
        }
        add_action( 'edit_form_after_title', 'add_content_after_editor' );
    }elseif ( is_admin() && ($screen->id == 'testimonials') ) {
        function add_content_after_editor() {
            global $post;
            $id = $post->ID;
            echo '<div class="postbox" style="background:#0074a2;color:#fff;margin-top:20px;"><div class="inside">';
            echo __( 'INSTRUCTIONS:', 'siba-project');
            echo '<br /><p style="margin: 0px; padding: 0px">';
            echo __( '1) Add the name of the person who is giving the testimonial, in the above box.', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px">';
            echo __( '2) Add a photo of this person using the "Profile Picture" box', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px">';
            echo __( '3) Add the role of this person (ex: Students, etc.), using the "Person Role" box', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px">';
            echo __( '4) Add the testimonial of this person in the text area box below', 'siba-project');
            echo '</p><br /><p style="margin: 0px; padding: 0px; font-style: italic;">';
            echo __( 'Additionally you can adjust the order of appearance using the "Item Attributes" box > "Order".', 'siba-project');
            echo '<br />';
            echo __( 'Numbers close to 0 appears first.', 'siba-project');
            echo '</p><br />';
            echo '</div></div>';
        }
        add_action( 'edit_form_after_title', 'add_content_after_editor' );
    }
}
add_action( 'admin_notices', 'options_instructions_example' );

// Removing the Excerpt box of the CPTs
function oz_remove_normal_excerpt() {
    remove_meta_box( 'postexcerpt' , 'team' , 'normal' );
    remove_meta_box( 'postexcerpt' , 'classes' , 'normal' );
    remove_meta_box( 'postexcerpt' , 'testimonials' , 'normal' );
}
add_action( 'admin_menu' , 'oz_remove_normal_excerpt' );
// Adding it again in the position we want it to be
function oz_add_excerpt_meta_box( $post_type ) {
    if ( in_array( $post_type, array( 'team', 'classes', 'testimonials' ) ) ) {
        add_meta_box(
            'oz_postexcerpt',
            __( 'Excerpt', 'thetab-theme' ),
            'post_excerpt_meta_box',
            $post_type,
            'side', //normal, form_top, after_title, after_editor, before_permalink, advanced
            'low' // low, high,
        );
    }
}
add_action( 'add_meta_boxes', 'oz_add_excerpt_meta_box' );

// Requiring default values for customizer
require_once get_template_directory() . '/inc/customizer-default-values.php';

// Added Functions
function get_post_primary_category($post_id, $term='category', $return_all_categories=false){
	//source: https://www.lab21.gr/blog/wordpress-get-primary-category-post
    $return = array();

    if (class_exists('WPSEO_Primary_Term')){
        // Show Primary category by Yoast if it is enabled & set
        $wpseo_primary_term = new WPSEO_Primary_Term( $term, $post_id );
        $primary_term = get_term($wpseo_primary_term->get_primary_term());

        if (!is_wp_error($primary_term)){
            $return['primary_category'] = $primary_term;
        }
    }

    if (empty($return['primary_category']) || $return_all_categories){
        $categories_list = get_the_terms($post_id, $term);

        if (empty($return['primary_category']) && !empty($categories_list)){
            $return['primary_category'] = $categories_list[0];  //get the first category
        }
        if ($return_all_categories){
            $return['all_categories'] = array();

            if (!empty($categories_list)){
                foreach($categories_list as &$category){
                    $return['all_categories'][] = $category->term_id;
                }
            }
        }
    }

    return $return;
}
