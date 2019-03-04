<?php 


// Remove css adm
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false ); 
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false ); 
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>' ; 
    } elseif( is_tax('product_categories') ) {
        $title = single_cat_title( '', false ); 
    }

    return $title;
});


// add_theme_support( 'post-formats', array( 'aside', 'gallery', 'teste') );