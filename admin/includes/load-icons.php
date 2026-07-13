<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! function_exists( 'emicons_read_icons_json' ) ) {
    /**
     * Read a bundled icon JSON file straight from the plugin directory and
     * decode it. Reads off disk instead of over HTTP, so it works reliably on
     * password-protected, offline, or SSL-misconfigured sites where a loopback
     * request would fail.
     *
     * @param string $relative_path Path relative to the plugin root, e.g. 'admin/assets/json/dashicons.json'.
     * @param bool   $assoc         Whether to decode objects into associative arrays.
     * @return mixed Decoded data, or null when the file is missing/unreadable/invalid.
     */
    function emicons_read_icons_json( $relative_path, $assoc = false ) {
        $file = EMICONS_PL_PATH . ltrim( $relative_path, '/' );

        if ( ! is_readable( $file ) ) {
            return null;
        }

        $contents = file_get_contents( $file );
        if ( false === $contents || '' === $contents ) {
            return null;
        }

        return json_decode( $contents, $assoc );
    }
}

 if($emicons_item_icon_source == 'dashicon'){
    ?>
        <div class="icon-tab-contents-wrapper">
            <div class="icon-tab-content active">
                <div class="emicons_icons-selection-wrapper">
                    <?php
                        $emicons_icons = emicons_read_icons_json( 'admin/assets/json/dashicons.json' );

                        if ( ! empty( $emicons_icons ) ) :
                        foreach ($emicons_icons as $emicons_key => $emicons_icon) {
                            ?>
                                <button class="emicons-icon-button" icon_class="dashicons dashicons-<?php echo esc_attr( $emicons_key )?>">
                                    <span class="dashicons dashicons-<?php echo esc_attr( $emicons_key )?>"></span>
                                    <span class="icon-name"><?php echo esc_attr( $emicons_key )?></span>
                                </button>
                            <?php
                        }
                        endif;

                    ?>
                </div>
            </div>
        </div>
    <?php
 }
 else if($emicons_item_icon_source == 'fontawesome'){

        $emicons_fontawesome_directory = 'admin/assets/json/font-awesome/';
                     ?>
                        <ul id="icon-tabs-nav">
                            <li><a href="#solid_icons">Solid</a></li>
                            <li><a href="#regular_icons">Regular</a></li>
                            <li><a href="#brands_icons">Brands</a></li>
                        </ul> <!-- END tabs-nav -->
                        <div class="icon-tab-contents-wrapper">
                            <div id="solid_icons" class="icon-tab-content">
                                <div class="emicons_icons-selection-wrapper">
                                    <?php

                                        // Solid Icons JSON file
                                        $emicons_icons = emicons_read_icons_json( $emicons_fontawesome_directory . 'solid.json', true );
                                        $emicons_icons = isset( $emicons_icons['icons'] ) ? $emicons_icons['icons'] : null;

                                        if ( ! empty( $emicons_icons ) ) :
                                        foreach ($emicons_icons as $emicons_key => $emicons_icon) {
                                            ?>
                                                <button class="emicons-icon-button" icon_class="fas fa-<?php echo esc_attr( $emicons_key )?>">
                                                    <i class="fas fa-<?php echo esc_attr( $emicons_key )?>"></i>
                                                    <span class="icon-name"><?php echo esc_attr( $emicons_key )?></span>
                                                </button>
                                            <?php
                                        }
                                        endif;

                                    ?>
                                </div>
                            </div>
                            <div id="regular_icons" class="icon-tab-content" style="display:none">
                                <div class="emicons_icons-selection-wrapper">
                                    <?php
                                        // Regular Icons JSON file
                                        $emicons_icons = emicons_read_icons_json( $emicons_fontawesome_directory . 'regular.json', true );
                                        $emicons_icons = isset( $emicons_icons['icons'] ) ? $emicons_icons['icons'] : null;

                                        if ( ! empty( $emicons_icons ) ) :
                                        foreach ($emicons_icons as $emicons_key => $emicons_icon) {
                                            ?>
                                                <button class="emicons-icon-button" icon_class="far fa-<?php echo esc_attr( $emicons_key )?>">
                                                    <i class="far fa-<?php echo esc_attr( $emicons_key )?>"></i>
                                                    <span class="icon-name"><?php echo esc_attr( $emicons_key )?></span>
                                                </button>
                                            <?php
                                        }
                                        endif;
                                    ?>
                                </div>
                            </div>
                            <div id="brands_icons" class="icon-tab-content" style="display:none">
                                <div class="emicons_icons-selection-wrapper">
                                    <?php
                                        // Brands Icons JSON file
                                        $emicons_icons = emicons_read_icons_json( $emicons_fontawesome_directory . 'brands.json', true );
                                        $emicons_icons = isset( $emicons_icons['icons'] ) ? $emicons_icons['icons'] : null;

                                        if ( ! empty( $emicons_icons ) ) :
                                        foreach ($emicons_icons as $emicons_key => $emicons_icon) {
                                            ?>
                                                <button class="emicons-icon-button" icon_class="fab fa-<?php echo esc_attr( $emicons_key )?>">
                                                    <i class="fab fa-<?php echo esc_attr( $emicons_key )?>"></i>
                                                    <span class="icon-name"><?php echo esc_attr( $emicons_key )?></span>
                                                </button>
                                            <?php
                                        }
                                        endif;
                                    ?>
                                </div>
                            </div>
                        </div>
        <?php
}else{
    ?>
        <div class="icon-tab-contents-wrapper">
            <p class="warning"><?php
                printf(
                    /* translators: %s is the selected icon source name */
                    esc_html__( 'Oops! You can\'t use icon from %s. Please use our premium plugin and enjoy all icons.', 'easy-menu-icons' ),
                    esc_html( $emicons_item_icon_source )
                );
            ?></p>
        </div>
    <?php
}
