<?php
/** 
 * @package WpCssJsCode
*/

defined( "ABSPATH" ) or die( "You are not allowed to access this file." );

if( ! function_exists( "add_action" ) ) {
    echo "You are not allowed to access this file.";
    exit;
}

function WPCSSJSCODE_assets() {
    // codemirror libraries
    wp_enqueue_style( "wp-css-js-code-codemirror", WPCSSJSCODE_plugin_url . "libs/codemirror/lib/codemirror.css" );
    wp_enqueue_script( "wp-css-js-code-codemirror", WPCSSJSCODE_plugin_url . "libs/codemirror/lib/codemirror.js" );
    // codemirror modes
    wp_enqueue_script( "wp--css-js-code-codemirror-mode-css", WPCSSJSCODE_plugin_url . "libs/codemirror/mode/css/css.js" );
    wp_enqueue_script( "wp--css-js-code-codemirror-mode-js", WPCSSJSCODE_plugin_url . "libs/codemirror/mode/javascript/javascript.js" );
    // codemirror lints
    wp_enqueue_script( "wp--css-js-code-codemirror-linter", WPCSSJSCODE_plugin_url . "libs/codemirror/addon/lint/lint.js" );
    wp_enqueue_script( "wp--css-js-code-codemirror-lint-css", WPCSSJSCODE_plugin_url . "libs/codemirror/addon/lint/css-lint.js" );
    wp_enqueue_script( "wp--css-js-code-codemirror-lint-js", WPCSSJSCODE_plugin_url . "libs/codemirror/addon/lint/javascript-lint.js" );
    wp_enqueue_style( "wp--css-js-code-codemirror-lint-css-style", WPCSSJSCODE_plugin_url . "libs/codemirror/addon/lint/lint.css" );
    // codemirror hints
    wp_enqueue_script( "wp--css-js-code-codemirror-lint-css-hint", WPCSSJSCODE_plugin_url . "libs/css-js-hint/csshint.js" );
    wp_enqueue_script( "wp--css-js-code-codemirror-lint-js-hint", WPCSSJSCODE_plugin_url . "libs/css-js-hint/jshint.js" );
    // codemirror trailingspace
    wp_enqueue_script( "wp--css-js-code-codemirror-trailingspace", WPCSSJSCODE_plugin_url . "libs/codemirror/addon/edit/trailingspace.js" );
    //wp-css-js-code js
    wp_enqueue_script( "wp-css-js-code-js", WPCSSJSCODE_plugin_url . "ext/wp_css_js_code.js" );
    wp_enqueue_style( "wp-css-js-code-css", WPCSSJSCODE_plugin_url . "ext/wp_css_js_code.css" );
    //ajax access
    wp_localize_script( "wp-css-js-code-js", "wp_css_js_obj", array(
        "ajax_url"  => admin_url( "admin-ajax.php" )
    ) );
}

add_action( "admin_init", "WPCSSJSCODE_assets" );


function WPCSSJSCODE_admin_pages() {

    add_menu_page( "Wp CSS JS Code Global Settings", "Wp Css Js Code Globals Settings", "manage_options", "wp-css-js-code-globals", "WPCSSJSCODE_admin_index" , "dashicons-smiley", null );
}

add_action( "admin_menu", "WPCSSJSCODE_admin_pages" );

function WPCSSJSCODE_admin_index () {
    include WPCSSJSCODE_plugin_dir . "templates/globalcssjs.php";
}


function WPCSSJSCODE_metabox_add() {
    add_meta_box( "wp-css-responsive-metabox", "WordPress CSS and Javascript Code", "WPCSSJSCODE_metabox", null, 'normal', 'default' );
}

function WPCSSJSCODE_metabox()  
{  
    if( get_post_status() == "publish" ||  get_post_status() == "draft" )
    {
        include WPCSSJSCODE_plugin_dir . "templates/cssjs.php";
    } else {
        include WPCSSJSCODE_plugin_dir . "templates/feature-off.php";
    }
}

add_action( "add_meta_boxes", "WPCSSJSCODE_metabox_add" );

function WPCSSJSCODE_allowed_tags() {
    $allowed_tags = array(
        'link' => array(
            'charset' => array(),
            'crossorigin' => array(),
            'href' => array(),
            'hreflang' => array(),
            'media' => array(),
            'rel' => array(),
            'rev' => array(),
            'sizes' => array(),
            'target' => array(),
            'type' => array()
        ),
        'script' => array(
            'async' => array(),
            'charset' => array(),
            'defer' => array(),
            'src' => array(),
            'type' => array(),
            'xml:space' => array()
        ),
        'style' => array(
            'media' => array(),
            'type' => array()
        ),
        'meta' => array(
            'charset' => array(),
            'content' => array(),
            'http-equiv' => array(),
            'name' => array(),
            'scheme' => array()
        ),
        'a' => array(
			'class' => array(),
			'href'  => array(),
			'rel'   => array(),
			'title' => array(),
		),
		'abbr' => array(
			'title' => array(),
		),
		'b' => array(),
		'blockquote' => array(
			'cite'  => array(),
		),
		'cite' => array(
			'title' => array(),
		),
		'code' => array(),
		'del' => array(
			'datetime' => array(),
			'title' => array(),
		),
		'dd' => array(),
		'div' => array(
			'class' => array(),
			'title' => array(),
			'style' => array(),
		),
		'dl' => array(),
		'dt' => array(),
		'em' => array(),
		'h1' => array(),
		'h2' => array(),
		'h3' => array(),
		'h4' => array(),
		'h5' => array(),
		'h6' => array(),
		'i' => array(),
		'img' => array(
			'alt'    => array(),
			'class'  => array(),
			'height' => array(),
			'src'    => array(),
			'width'  => array(),
		),
		'li' => array(
			'class' => array(),
		),
		'ol' => array(
			'class' => array(),
		),
		'p' => array(
			'class' => array(),
		),
		'q' => array(
			'cite' => array(),
			'title' => array(),
		),
		'span' => array(
			'class' => array(),
			'title' => array(),
			'style' => array(),
		),
		'strike' => array(),
		'strong' => array(),
		'ul' => array(
			'class' => array(),
		)
	);
	
	return $allowed_tags;
}

function WPCSSJSCODE_postmeta() {

    if( ! DOING_AJAX || ! check_ajax_referer( 'wp-css-js-code-nonce', 'nonce' ) ) {
        return WPCSSJSCODE_return_json('error');
    }

    $post_id = (int)$_POST["post_id"];
    $meta_key = sanitize_text_field( $_POST["meta_key"] );
    
    if( isset( $_POST["get_type"] ) ) {
        if( $_POST["get_type"] == "html" ) {
            $code = wp_kses( $_POST["wp_css_js_code"], WPCSSJSCODE_allowed_tags() );
        } else {
            $code = sanitize_textarea_field( $_POST["wp_css_js_code"] );
        }
    }

    if( get_post_meta( $post_id, $meta_key, true) ) {
        if( $code == "" ) {
            delete_post_meta( $post_id, $meta_key );
        } else {
            update_post_meta( $post_id, $meta_key, $code );
        }
    } else {
        if( $code != "" ) {
            add_post_meta( $post_id, $meta_key, $code );
        }
    }

    return WPCSSJSCODE_return_json('success');
}

function WPCSSJSCODE_return_json( $status ) {
    $return = array(
        'status' => $status
    );

    wp_send_json( $return );

    wp_die();
}

add_action( "wp_ajax_wp_css_code_postmeta", "WPCSSJSCODE_postmeta" );

function WPCSSJSCODE_POSTMETA_GET( $postid, $key ) {
    $metaval = get_post_meta( $postid, $key, true );
    return $metaval ? $metaval : "";
}