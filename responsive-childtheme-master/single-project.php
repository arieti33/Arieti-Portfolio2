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

<h1 class="post-title"><?php the_title(); ?> <?php the_field('hebrew'); ?></h1>


	<ul class="project-box-ul">
<?php
 // check if the repeater field has rows of data
if( have_rows('single_projects') ): 
// loop through the rows of data
while ( have_rows('single_projects') ) : the_row(); ?>
 
 	
		<li class="single-project-box">
		
 


	<div class="mosaic-block bar">
			<a href="<?php the_sub_field('project_page_link'); ?>" target="_blank" class="mosaic-overlay">
				<div class="details">
					<p><?php the_sub_field('project_description'); ?>
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
<img src="<?php the_sub_field('project_image'); ?>"/></a></div>

		</div>
		<h2><?php the_sub_field('project_title'); ?></h2>
		

		

			</li>

		
<?php endwhile;
 
 else :
 
    // no rows found
endif;
?>

	</ul>




	<div class="post-entry">
		

					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>

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

			<!--	<div class="navigation">
					<div class="previous"><?php previous_post_link( '&#8249; %link' ); ?></div>
					<div class="next"><?php next_post_link( '%link &#8250;' ); ?></div>
			</div> -->
				<!-- end of .navigation -->
				
				<h1 style="aditional_projects_header">You may also like</h1>
				
<?php 
$post_terms = wp_get_object_terms($post->ID, 'topics', array('fields'=>'ids'));

$post_id = $post->ID;

$args = array(
    'post_type' => 'project',
    'tax_query' => array(
        array(
            'taxonomy' => 'topics',
            'field' => 'id',
            'terms' => $post_terms
        )
    ),
    'post__not_in' => array($post_id)
);

$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
 <li class="aditional_projects"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>
            <?php
    }
        echo '</ul>';
} else {
    // no posts found
}
wp_reset_postdata(); ?>

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
