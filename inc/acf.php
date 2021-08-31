<?php
/**
 * Snimi ACF field-ove na Lokalu. Ukoliko je nesto izmenjeno ili ima razlicitu
 * vrednost od baze kod recimo drugog developera, potrebno je uraditi Sync
 * u podesavanjima ACF-a. Ne mora manuelan import ili rename.
 */
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    // return
    return $path;
}

