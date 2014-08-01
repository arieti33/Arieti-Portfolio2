<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>

	<div id="footer-wrapper">

		<?php get_sidebar( 'footer' ); ?>

		<div class="grid col-940">
						<p style="text-align:center; font-size:14px;">JTeach.org is funded, in part, by a generous grant from the Charles and M.R. Shapiro Foundation.</p>

				
				<div class="col-540">
				<?php if( has_nav_menu( 'footer-menu', 'responsive' ) ) { ?>
					<?php wp_nav_menu( array(
										   'container'      => '',
										   'fallback_cb'    => false,
										   'menu_class'     => 'footer-menu',
										   'theme_location' => 'footer-menu'
									   )
					);
					?>
				<?php } ?>
				
				</div>
			<!-- end of col-540 -->
<img src="http://jteach.org/wp-content/uploads/2014/07/thumbnail_geotrust_logo.jpg" alt="thumbnail_geotrust_logo" width="100" />
			<div class="grid col-380 fit">
				<?php echo responsive_get_social_icons() ?>
			</div>
			<!-- end of col-380 fit -->

		</div>
		<!-- end of col-940 -->
		<?php get_sidebar( 'colophon' ); ?>


	</div>
	<!-- end #footer-wrapper -->

	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>