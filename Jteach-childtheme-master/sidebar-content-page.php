<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sidebar/Content Template
 *
Template Name:  Sidebar/Content
 *
 * @file           sidebar-content-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-content-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

<div id="content" class="grid-right col-620 fit">

	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php get_responsive_breadcrumb_lists(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<h1 class="post-title"><?php the_title(); ?></h1>

				<?php if( comments_open() ) : ?>
					<div class="post-meta">
						<?php responsive_post_meta_data(); ?>

						<?php if( comments_open() ) : ?>
							<span class="comments-link">
                        <span class="mdash">&mdash;</span>
								<?php comments_popup_link( __( 'No Comments &darr;', 'responsive' ), __( '1 Comment &darr;', 'responsive' ), __( '% Comments &darr;', 'responsive' ) ); ?>
                        </span>
						<?php endif; ?>
					</div><!-- end of .post-meta -->
				<?php endif; ?>

				<div class="post-entry">
					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
					
					<ul class="staffing">
<?php
 // check if the repeater field has rows of data
if( have_rows('single_staff') ): 
// loop through the rows of data
while ( have_rows('single_staff') ) : the_row(); ?>
 
 	
<li class="staff" style="width:100%; margin:10px 10px 20px 10px;">
		
    <div style="border:1px solid #eee; width:110px; float:left; margin-top:25px;">
  <img  src="<?php the_sub_field('staff_image'); ?>"/>
    </div>

 <div style="width:80%;float:left; margin-top:0px; margin-bottom:20px; padding:0px;">
  <p style="padding:0; margin:0"><?php the_sub_field('staff_description'); ?></p>
  
 </div>
		

</li>

		
<?php endwhile;
 
 else :
 
    // no rows found
endif;
?>

	</ul>

					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div>
				

				<div class="grid col-460 botom-boxes" style="">
				<img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/05/members-icon.png">
				<h3>Join the <em>Kehillah</em> and gain access to all the resources</h3>
				<div class="call-to-action">
					<a href="http://nvcz-s7pj.accessdomain.com/members/" class="blue button">Join Now
					</a>
				</div>
				</div>

				
				<div class="grid col-460 fit botom-boxes" style="">
				<img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/05/donate.jpg">

				<h3>Your gift makes a difference</h3>
				<br/>


				<div class="call-to-action">
					<a href="http://nvcz-s7pj.accessdomain.com/donate/" class="green button">Donate Today
					</a>
				</div>
				</div>

				<!-- end of .post-entry -->
				
				
				<?php if( comments_open() ) : ?>
					<div class="post-data">
						<?php the_tags( __( 'Tagged with:', 'responsive' ) . ' ', ', ', '<br />' ); ?>
						<?php the_category( __( 'Posted in %s', 'responsive' ) . ', ' ); ?>
					</div><!-- end of .post-data -->
				<?php endif; ?>

				<div class="post-edit"><?php edit_post_link( __( 'Edit', 'responsive' ) ); ?></div>

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

<?php get_sidebar( 'left' ); ?>
<?php get_footer(); ?>