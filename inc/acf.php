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

/**
 * Blocks
 */
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a hero block.
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A custom theme block.'),
            'render_template'   => 'template-parts/blocks/hero.php',
            'category'          => 'formatting',
            'align'             => 'full',
            'keywords'          => array( 'hero', 'block' ),
        ));

        // register a Members block.
        acf_register_block_type(array(
            'name'              => 'members',
            'title'             => __('Members'),
            'description'       => __('A custom theme block.'),
            'render_template'   => 'template-parts/blocks/members.php',
            'category'          => 'formatting',
            'align'             => 'full',
            'keywords'          => array( 'hero', 'block' ),
        ));
    }
}

