<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sidebar/Content Template
 *
Template Name:  Sidebar/Content custom
 *
 * @file           sidebar-content-custom.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-content-c.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>
		


<div id="content" class="grid-right col-620 fit">

<?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
if ($term->parent == 0) {  
wp_list_categories('taxonomy=topics&depth=1&show_count=0
&title_li=&child_of=' . $term->term_id);
} else {
wp_list_categories('taxonomy=topics&show_count=0
&title_li=&child_of=' . $term->parent);	
}
?>

	

	
        <?php 
        $type = 'project';
        $args = array (
         'post_type' => $type,
         'post_status' => 'publish',
         'paged' => $paged,
         'posts_per_page' => 12,
         'ignore_sticky_posts'=> 1
        );
        $temp = $wp_query; // assign ordinal query to temp variable for later use  
        $wp_query = null;
        $wp_query = new WP_Query($args); 
        if ( $wp_query->have_posts() ) :
            while ( $wp_query->have_posts() ) : $wp_query->the_post();
                echo '<h2>'; 
                the_title();
                echo '</h2>'; 
                echo '<div class="entry-content">';
                the_content();
                echo '</div>';
            endwhile;
        else :
            echo '<h2>Not Found</h2>';
            get_search_form();
        endif;
        $wp_query = $temp;
        ?>


</div><!-- end of #content -->

<?php get_sidebar( 'left' ); ?>
<?php get_footer(); ?>