<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sidebar/Content Template
 *
Template Name:custom
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
					
<div class="recent-projects">
<h3>Announcements</h3>
<?php
$queryObject = new WP_Query( 'post_type=project&posts_per_page=4' );
// The Loop!
if ($queryObject->have_posts()) {
    ?>
    <ul>
    <?php
    while ($queryObject->have_posts()) {
        $queryObject->the_post();
        ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
         </a>
        </li>
    <?php
    }
    ?>
    </ul>
    <?php
}
?>
</div>


					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div>
				<div style="width:800px; margin:auto">
				
				<div class="grid col-380" style="border:1px solid #ccc; padding:5px;">
				<h2 style="text-align:center;">Enjoy the vast resources collections and benefits of becoming a member </h2>
				<div class="call-to-action">
					<a href="<?php echo $responsive_options['cta_url']; ?>" class="blue button">Click here
					</a>
				</div>
				</div>
				
				<div class="grid col-380 fit" style="border:1px solid #ccc; padding:5px; ">
				<h2 style="text-align:center;">Support our organization so we can continue to provide our services </h2>
				<div class="call-to-action">
					<a href="<?php echo $responsive_options['cta_url']; ?>" class="green button">Donate Today
					</a>
				</div>
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