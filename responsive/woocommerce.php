<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * woocommerce Template
 *
 *
 * @file           woocommerce.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="grid-right col-620 fit">

<?php woocommerce_content(); ?>

</div><!-- end of #content -->

<?php get_sidebar('left'); ?>
<?php get_footer(); ?>
