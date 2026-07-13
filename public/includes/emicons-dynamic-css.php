<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

if ( ! function_exists( 'emicons_sanitize_css_value' ) ) {
    /**
     * Strip characters that could break out of an inline CSS declaration
     * (tags, angle brackets, braces, semicolons) so stored option values are
     * safe to interpolate into the generated stylesheet.
     *
     * @param mixed $value Raw option value.
     * @return string Sanitized value.
     */
    function emicons_sanitize_css_value( $value ) {
        return trim( preg_replace( '/[<>{};]/', '', wp_strip_all_tags( (string) $value ) ) );
    }
}

add_action( 'wp_enqueue_scripts', 'emicons_dynamic_css' );
function emicons_dynamic_css() {

    $emicons_options = get_option( 'emicons_options' );
    $main_menu_color = !empty($emicons_options['icon_color']) ? emicons_sanitize_css_value($emicons_options['icon_color']) : '';
    $icon_font_size = !empty($emicons_options['icon_font_size']) ? emicons_sanitize_css_value($emicons_options['icon_font_size']) : '';
    $icon_margin = !empty($emicons_options['icon_margin']) ? $emicons_options['icon_margin'] : '';

    $icon_margin_left = !empty($icon_margin['margin_left']) ? emicons_sanitize_css_value($icon_margin['margin_left']) : '';
    $icon_margin_right = !empty($icon_margin['margin_right']) ? emicons_sanitize_css_value($icon_margin['margin_right']) : '';
    $icon_margin_top = !empty($icon_margin['margin_top']) ? emicons_sanitize_css_value($icon_margin['margin_top']) : '';
    $icon_margin_bottom = !empty($icon_margin['margin_bottom']) ? emicons_sanitize_css_value($icon_margin['margin_bottom']) : '';
    

    $custom_css = "";

    if(!empty($main_menu_color)){
        $custom_css .= "
        .menu-item > a .emicons.menu-icon {
            color: {$main_menu_color};
        }";
    }
    if(!empty($icon_font_size)){
         $custom_css .= "
        .menu-item > a .emicons.menu-icon {
            font-size: {$icon_font_size}
        }";
    }

    if(!empty($icon_margin)){
        $margin_properties = array();
        
        if(!empty($icon_margin_left)){
            $margin_properties[] = "margin-left: {$icon_margin_left}";
        }
        if(!empty($icon_margin_right)){
            $margin_properties[] = "margin-right: {$icon_margin_right}";
        }
        if(!empty($icon_margin_top)){
            $margin_properties[] = "margin-top: {$icon_margin_top}";
        }
        if(!empty($icon_margin_bottom)){
            $margin_properties[] = "margin-bottom: {$icon_margin_bottom}";
        }
        
        if(!empty($margin_properties)){
            $custom_css .= "
       .menu-item > a .emicons.menu-icon {
           " . implode(";\n           ", $margin_properties) . ";
       }";
        }
   }

    wp_add_inline_style( 'emicons-style', $custom_css );
}


