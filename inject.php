<?php
/** 
 * @package WpCssJsCode
*/

defined( "ABSPATH" ) or die( "You are not allowed to access this file." );

if( ! function_exists( "add_action" ) ) {
    echo "You are not allowed to access this file.";
    exit;
}

function WPCSSJSCODE_inject_header ( ) {

    $default = get_post_meta( get_the_ID(), "_WPCSSJSCODE_css_default_code", true );
    $xs = get_post_meta( get_the_ID(), "_WPCSSJSCODE_css_xs_code", true );
    $sm = get_post_meta( get_the_ID(), "_WPCSSJSCODE_css_sm_code", true );
    $md = get_post_meta( get_the_ID(), "_WPCSSJSCODE_css_md_code", true );
    $jshead = get_post_meta( get_the_ID(), "_WPCSSJSCODE_js_code_header", true );
    
    if( $default || $xs || $sm || $md ) {
echo "<style type=\"text/css\">";
echo "/* 
WP CSS JS CODE PLUGIN - CSS CODE
*/";
echo $default ? $default : "";
echo $xs ? "@media screen and (max-width: 479px){" . $xs . "}" : "";
echo $sm ? "@media screen and (max-width: 767px){" . $sm . "}" : "";
echo $md ? "@media screen and (max-width: 980px){" . $md . "}" : "";
echo "</style>";
    }

    if( $jshead ) {
echo "<script type=\"text/javascript\">";
echo "/* 
WP CSS JS CODE PLUGIN - JAVASCRIPT CODE HEADER
*/";
echo $jshead;
echo "</script>";
    }

    $default_global = get_post_meta( 1, "_WPCSSJSCODE_css_default_code_global", true );
    $xs_global = get_post_meta( 1, "_WPCSSJSCODE_css_xs_code_global", true );
    $sm_global = get_post_meta( 1, "_WPCSSJSCODE_css_sm_code_global", true );
    $md_global = get_post_meta( 1, "_WPCSSJSCODE_css_md_code_global", true );
    $jshead_global = get_post_meta( 1, "_WPCSSJSCODE_js_code_header_global", true );

    if( $default_global || $xs_global || $sm_global || $md_global ) {
echo "<style type=\"text/css\">";
echo "/* 
WP CSS JS CODE PLUGIN - CSS CODE GLOBAL
*/";
echo $default_global ? $default_global : "";
echo $xs_global ? "@media screen and (max-width: 479px){" . $xs_global . "}" : "";
echo $sm_global ? "@media screen and (max-width: 767px){" . $sm_global . "}" : "";
echo $md_global ? "@media screen and (max-width: 980px){" . $md_global . "}" : "";
echo "</style>";  
    }

    if( $jshead_global ) {
echo "<script type=\"text/javascript\">";
echo "/* 
WP CSS JS CODE PLUGIN - JAVASCRIPT CODE HEADER GLOBAL
*/";
echo $jshead_global;
echo "</script>";
    }

    $insert_header_global = get_post_meta( 1, "_WPCSSJSCODE_code_global_header", true );

    if( $insert_header_global ) {
echo "<!-- Wp Css JS Code Plugin [ Header Global ] -->";
echo $insert_header_global;
    }
}

add_action ( "wp_head", "WPCSSJSCODE_inject_header" );

function WPCSSJSCODE_inject_footer ( ) {

    $script = get_post_meta( get_the_ID(), "_WPCSSJSCODE_js_code", true );

    if( $script ) {

echo "<script type=\"text/javascript\">";
echo "/* 
WP CSS JS CODE PLUGIN - JAVASCRIPT CODE FOOTER
*/";
echo $script;
echo"</script>";

    }

    $script_global = get_post_meta( 1, "_WPCSSJSCODE_js_code_footer_global", true );

    if( $script_global ) {

echo "<script type=\"text/javascript\">";
echo "/* 
WP CSS JS CODE PLUGIN - JAVASCRIPT CODE FOOTER GLOBAL
*/";
echo $script_global;
echo"</script>";

    }

    $insert_footer_global = get_post_meta( 1, "_WPCSSJSCODE_code_global_footer", true );

    if( $insert_footer_global ) {
echo "<!-- Wp Css JS Code Plugin [ Footer Global ] -->";
echo $insert_footer_global;
    }

}

add_action ( "wp_footer", "WPCSSJSCODE_inject_footer" );