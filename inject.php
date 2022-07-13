<?php
/** 
 * @package WpCssJsCode
*/

defined( "ABSPATH" ) or die( "You are not allowed to access this file." );

if( ! function_exists( "add_action" ) ) {
    echo "You are not allowed to access this file.";
    exit;
}

function WPCSSJSCODE_optimize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );
    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return do_shortcode($buffer);
}

// inject header
function WPCSSJSCODE_inject_header ( ) {

    // ----- STYLES -------
    // global and specific
    $default_global = get_post_meta( 1, "_WPCSSJSCODE_css_default_code_global", true );
    $default = get_post_meta( get_the_ID(), "_WPCSSJSCODE_css_default_code", true );
    if( $default_global || $default ) {
        ob_start();
        ?>
        <style type="text/css" id="wp-css-javascript-html-cssoutput">
            <?php echo $default_global ? $default_global : ''; ?>
            <?php echo $default ? $default : ''; ?>
        </style>
        <?php
        $cssoutput = ob_get_clean();
        echo WPCSSJSCODE_optimize_output($cssoutput);
    }
    // ------ END OF STYLES --------


    // ---- HTML --------
    // global prioritize
    $insert_header_global = get_post_meta( 1, "_WPCSSJSCODE_code_global_header", true );
    if( $insert_header_global ) {
        echo WPCSSJSCODE_optimize_output($insert_header_global);
    }

    // for specifics
    $htmlhead = get_post_meta( get_the_ID(), "_WPCSSJSCODE_specific_html_before_body", true );
    if( $htmlhead ) {
        $htmlhead = ob_get_clean();
        echo WPCSSJSCODE_optimize_output($htmlhead);
    }
    // ----- END OF HTML --------



    // ----- SCRIPTS -------
    // global and specific
    $jshead_global = get_post_meta( 1, "_WPCSSJSCODE_js_code_header_global", true );
    $jshead = get_post_meta( get_the_ID(), "_WPCSSJSCODE_js_code_header", true );
    if( $jshead_global || $jshead ) {
        ob_start();
        ?>
        <script type="text/javascript" id="wp-css-javascript-html-jshead">
            <?php echo $jshead_global ? $jshead_global : ''; ?>
            <?php echo $jshead ? $jshead : ''; ?>
        </script>
        <?php
        $jsheadoutput = ob_get_clean();
        echo WPCSSJSCODE_optimize_output($jsheadoutput);
    }
    // ----- END OF SCRIPTS -------
}

add_action ( "wp_head", "WPCSSJSCODE_inject_header", 1000 );


// inject footer
function WPCSSJSCODE_inject_footer ( ) {


    // --- HTML ---
    // global prioritize
    $insert_footer_global = get_post_meta( 1, "_WPCSSJSCODE_code_global_footer", true );
    if( $insert_footer_global ) {
        echo WPCSSJSCODE_optimize_output($insert_footer_global);
    }

    // for specific
    $insert_footer_html = get_post_meta( get_the_ID(), '_WPCSSJSCODE_specific_html_footer', true );
    if( $insert_footer_html ) {
        echo WPCSSJSCODE_optimize_output($insert_footer_html);
    }
    // --- END OF HTML ---


    
    // --- SCRIPTS ---
    // global and specific
    $script_global = get_post_meta( 1, "_WPCSSJSCODE_js_code_footer_global", true );
    $script = get_post_meta( get_the_ID(), "_WPCSSJSCODE_js_code", true );
    if( $script_global || $script ) {
        ob_start();
        ?>
        <script type="text/javascript" id="wp-css-javascript-html-jsfooter">
            <?php echo $script_global ? $script_global : ''; ?>
            <?php echo $script ? $script : ''; ?>
        </script>
        <?php
        $jsfooteroutput = ob_get_clean();
        echo WPCSSJSCODE_optimize_output($jsfooteroutput);
    }
    // --- END OF SCRIPTS ---
}

add_action ( "wp_footer", "WPCSSJSCODE_inject_footer", 1000 );


// inject body tag
function WPCSSJSCODE_after_body_open_tag() {
    
    // for global
    $globalbodytag = get_post_meta( 1, "_WPCSSJSCODE_code_global_bodytag", true );
    if($globalbodytag) {
        echo WPCSSJSCODE_optimize_output($globalbodytag);
    }
    
    // for specifics
    $specific = get_post_meta( get_the_ID(), "_WPCSSJSCODE_specific_html_after_body", true );
    if($specific) {
        echo WPCSSJSCODE_optimize_output($specific);
    }
}

add_action('wp_body_open', 'WPCSSJSCODE_after_body_open_tag');