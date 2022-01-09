<?php
/**
 * Template Name: Flexible Page
 */
get_header();

while (have_posts()) {
    the_post();
    while (have_rows('flexible_content_group')) {
    	the_row();
    	include(locate_template('acf-templates/' . get_row_layout() . '.php'));
    }
}

get_footer();
