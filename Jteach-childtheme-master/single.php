<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Single Posts Template
 *
 *
 * @file           single.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/single.php
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="grid-right col-620 fit">

	<?php get_template_part( 'loop-header' ); ?>

	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<?php get_template_part( 'post-meta' ); ?>

				<div class="post-entry">
					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
					

<ul class="staffing">
<?php
 // check if the repeater field has rows of data
if( have_rows('single_staff') ): 
// loop through the rows of data
while ( have_rows('single_staff') ) : the_row(); ?>
 
 	
<li class="staff" style="width:100%; margin:10px;">
		
    <div style="width:130px; float:left;">
  <img src="<?php the_sub_field('staff_image'); ?>"/>
    </div>

 <div style="width:80%;float:left; margin-top:0px; padding:0px;">
  <p style="padding:0; margin:0"><?php the_sub_field('staff_description'); ?></p>
  
 </div>
		

</li>

		
<?php endwhile;
 
 else :
 
    // no rows found
endif;
?>

	</ul>
					



 

					<?php if( get_the_author_meta( 'description' ) != '' ) : ?>

						<div id="author-meta">
							<?php if( function_exists( 'get_avatar' ) ) {
								echo get_avatar( get_the_author_meta( 'email' ), '80' );
							} ?>
							<div class="about-author"><?php _e( 'About', 'responsive' ); ?> <?php the_author_posts_link(); ?></div>
							<p><?php the_author_meta( 'description' ) ?></p>
						</div><!-- end of #author-meta -->

					<?php endif; // no description, no author's meta ?>

					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div>
				<!-- end of .post-entry -->
				
								<div class="grid col-460 botom-boxes" style="">
				<img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/05/members-icon.png">
				<h3>Enjoy the vast resources collections and benefits of becoming a member </h2>
				<div class="call-to-action">
					<a href="<?php echo $responsive_options['cta_url']; ?>" class="blue button">Click here
					</a>
				</div>
				</div>

				
				<div class="grid col-460 fit botom-boxes" style="">
								<img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/05/Dollar-icon.png">

				<h3>Support our organization so we can continue to provide our services </h2>
				<div class="call-to-action">
					<a href="<?php echo $responsive_options['cta_url']; ?>" class="green button">Donate Today
					</a>
				</div>
				</div>


				<div class="navigation">
					<div class="previous"><?php previous_post_link( '&#8249; %link' ); ?></div>
					<div class="next"><?php next_post_link( '%link &#8250;' ); ?></div>
				</div>
				<!-- end of .navigation -->

				<?php get_template_part( 'post-data' ); ?>

				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			<?php responsive_entry_after(); ?>

			<?php responsive_comments_before(); ?>
			<?php comments_template( '', true ); ?>
			<?php responsive_comments_after(); ?>

		<?php
		endwhile;

		get_template_part( 'loop-nav' );

	else :

		get_template_part( 'loop-no-posts' );

	endif;
	?>

</div><!-- end of #content -->

<?php get_sidebar('left'); ?>
<?php get_footer(); ?>
