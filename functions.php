<?php
ini_set('display_errors', 'On');
    error_reporting(E_ALL);

function unhook_thematic_functions() {
    remove_action( 'template_redirect', 'xyren_smarty_search_url_redirect' );
    if (function_exists('w3tc_pgcache_flush')) {
        w3tc_pgcache_flush();
    }
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action( 'init', 'unhook_thematic_functions' );
