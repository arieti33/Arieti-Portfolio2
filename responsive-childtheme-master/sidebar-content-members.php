<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sidebar/Content Template
 *
Template Name:  Sidebar/Content members
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
				

	
	
		<ul class="project-box-ul">
<?php
 // check if the repeater field has rows of data
if( have_rows('members_list') ): 
// loop through the rows of data
while ( have_rows('members_list') ) : the_row(); ?>
 
 	
		<li class="single-project-box">
		
 


	<div class="mosaic-block bar">
			<a href="<?php the_sub_field('project_page_link'); ?>" target="_blank" class="mosaic-overlay">
				<div class="details">
					<p><?php the_sub_field('description'); ?>
					<div class="member-only">
					</div>
					</p>
				
				</div>
				

			</a>
			<div class="mosaic-backdrop"><a href="<?php the_sub_field('project_page_link'); ?>" target="_blank">
			<?php
 
if(get_sub_field('members') == true)
{
	echo  '<img class="icon" style="width:35px; float:right" width="40" src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/05/key-icon.jpg" />';
}

  ?>
<img src="<?php the_sub_field('image'); ?>"/></a></div>

		</div>
		<h2><?php the_sub_field('title'); ?></h2>
		

		

			</li>

		
<?php endwhile;
 
 else :
 
    // no rows found
endif;
?>

	</ul>

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
					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div>
				

				<div class="grid col-460 botom-boxes" style="">
				<img style="float:left;padding:10px;width:80px;border:1px solid #e0e7ec;margin:10px" src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/05/members-icon.png">
				<h3>Become a Member. Enjoy access to Members’ Only resources.</h2>
				<div class="call-to-action">
					<a href="<?php echo $responsive_options['cta_url']; ?>" class="blue button">Join now
					</a>
				</div>
				</div>

				
				<div class="grid col-460 fit botom-boxes" style="">
				<img style="float:left;padding:10px;width:80px;border:1px solid #e0e7ec;margin:10px" src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/05/Dollar-icon.png">

				<h3>Your gift makes a difference </h2>
				<div class="call-to-action">
					<a href="<?php echo $responsive_options['cta_url']; ?>" class="green button">Donate Today
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