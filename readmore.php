<?php
/**
* Plugin Name: Readmore
* Plugin URI: https://mudiman.github.io/
* Description: Add read more button.
* Version: 1.0
* Author: Mudassar Ali
* Author URI: http://mudiman.github.io/
**/

function readmore_link() {

    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';

}

add_filter( 'the_content_more_link', 'readmore_link' );