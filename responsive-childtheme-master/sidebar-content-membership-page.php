<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sidebar/Content Membership Template
 *
Template Name:  Sidebar/Content Membership
 *
 * @file           sidebar-content-membership-page.php
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

<style>
 
div.member-box {
    cursor: hand;
    cursor: pointer;
}
 
</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
$(document).ready(function () {
 
    // Open in new window
    $(".member-box").click(function () {
        window.open($(this).find("a:first").attr("href"));
        return false;
    });
        
    // Or use this to Open link in same window (similar to target=_blank)
    $(".box1").click(function(){
        window.location = $(this).find("a:first").attr("href");
        return false;
    });
 
    // Show URL on Mouse Hover
    $(".box1").hover(function () {
        window.status = $(this).find("a:first").attr("href");
    }, function () {
        window.status = "";
    });
 
});
</script>



<div id="content" class="grid-right col-620 fit">


	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php get_responsive_breadcrumb_lists(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<h1 class="post-title"><?php the_title(); ?><span style="font-style:normal;"><?php the_field('hebrew'); ?></span></h1>

				<?php if( comments_open() ) : ?>
				<?php endif; ?>

				<div class="post-entry">
					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
					
					
					
					<!--<ul>

<li class="member-box-list">
<div class="member-box">
     <div class="membership_level_box_img">
     <img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/03/member.jpg" width="201" height="154" alt=""/> 
     
     </div>
     
     <div class="member_bene_div">
    <ul class="member_bene_list">
         <li>Access to <em>Kehillah</em> members’ materials</li>
    </ul>
</div>
</div>
</li>

<li class="friend-box-list">
<div class="member-box">
     <div class="membership_level_box_img">
    <img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/03/friend.jpg" width="201" height="154" alt=""/> 
    </div>
    
 <div class="member_bene_div">
  <ul class="member_bene_list">
	<li>Access to <em>Kehillah</em> members’ materials</li>
	<li>30 minute phone or video chat consultation regarding your curriculum   </li>
   </ul>
  </div>
</div>
</li>

<li class="supporter-box-list">

  <div class="member-box">
     <div class="membership_level_box_img">
    <img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/03/supporter.jpg" width="201" height="154" alt=""/> </div>
    
   <div class="member_bene_div">
    <ul class="member_bene_list">
	   <li>Access to <em>Kehillah</em> members’ materials</li>
	   <li>30 minute phone or video chat consultation regarding your curriculum</li>
	<li>Hard copy of Celebrating Israel Through The Arts by Linda Sonin</li>
    </ul>
   </div>
</div>
</li>


<li class="sponsor-box-list">

  <div class="member-box">
       <div class="membership_level_box_img">
    <img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/03/sponsor.jpg" width="201" height="154" alt=""/>       </div>
    
   <div class="member_bene_div">
    <ul class="member_bene_list">
	         <li>Access to <em>Kehillah</em> members’ materials</li>
	         <li>30 minute phone call or video chat conversation regarding your curriculum</li>
             <li>Hard copy of Celebrating Israel Through the Arts by Linda Sonin</li>
	         <li>Hard copy of Walk the Talk: Jewish Values in Action by Linda Sonin</li>
      <li>Member access code for one additional team member</li>
    </ul>
</div>
</div>

</li>


<li class="partener-box-list">

  <div class="member-box">
     <div class="membership_level_box_img">
    <img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/03/partener.png" width="201" height="154" alt=""/> </div>
      <div class="member_bene_div">
         <ul class="member_bene_list">
	      <li>Access to <em>Kehillah</em> members' materials</li>
	      <li>30 minute phone call or video chat conversation regarding your curriculum</li>
	      <li>Hard copy of Walk the Talk: Jewish Values in Action by Linda Sonin</li>
	      <li>Hard copy of Celebrating Israel Through the Arts by Linda Sonin</li>
	      <li>Member access codes for additional staff (up to 12 teachers at same organization)</li>
         </ul>
</div>
  </div>
</li>
</ul>-->

<!--<div id="responsive-membership-level">
<ul class="project-box-uresponsive-ul">

<li class="single-project-box-regular-responsive">
	<div class="membership_level-block">
	   <div class="membership_level_responsive_box_img">
	      <div>
            <img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/03/member.jpg" width="201" height="154" alt=""/> 
       	   </div>
      </div>


		<div class="details">
           <ul class="member_bene_list">
              <li>Access to <em>Kehillah</em> members’ materials</li>
           </ul>
		</div>
	</div>

</li>

			
 <li class="single-project-box-friend-responsive">
      <div class="membership_level-block">
	     <div class="membership_level_responsive_box_img">
	            <div>
               <img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/03/friend.jpg" width="201" height="154" alt=""/> 
        		</div>
         </div>


		<div class="details">
           <ul class="member_bene_list">
	             <li>Access to <em>Kehillah</em> members’ materials</li>
	             <li>30 minute phone or video chat consultation regarding your curriculum   </li>
           </ul>
		</div>
	  </div>

</li>


<li class="single-project-box-supporter-responsive">
	 <div class="membership_level-block">
	   <div class="membership_level_responsive_box_img">
	          <div>
              <img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/03/supporter.jpg" width="201" height="154" alt=""/>
             </div>
       </div>


		<div class="details">
             <ul class="member_bene_list">
	            <li>Access to <em>Kehillah</em> members’ materials</li>
	            <li>30 minute phone or video chat consultation regarding your curriculum</li>
	            <li>Hard copy of Celebrating Israel Through The Arts by Linda Sonin</li>
            </ul>
		</div>
	   </div>

</li>
			
<li class="single-project-box-sponsor-responsive">
     <div class="membership_level-block">
	   <div class="membership_level_responsive_box_img">
	   	 <div>
            <img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/03/sponsor.jpg" width="201" height="154" alt=""/> 
         </div>
       </div>

		<div class="details">
               <ul class="member_bene_list">
	             <li>Access to <em>Kehillah</em> members’ materials</li>
	             <li>30 minute phone call or video chat conversation regarding your curriculum</li>
                 <li>Hard copy of Celebrating Israel Through the Arts by Linda Sonin</li>
	             <li>Hard copy of Walk the Talk: Jewish Values in Action by Linda Sonin</li>
                 <li>Member access code for one additional team member</li>
               </ul>
		</div>
	  </div>

</li>

<li class="single-project-box-partner-responsive">
	   <div class="membership_level-block">
	      <div class="membership_level_responsive_box_img">
	        <div>
                <img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/03/Untitled_13.jpg" width="201" height="154" alt=""/> 
            </div>
          </div>

		<div class="details">
                 <ul class="member_bene_list">
	                <li>Access to <em>Kehillah</em> members' materials</li>
	                <li>30 minute phone call or video chat conversation regarding your curriculum</li>
	                <li>Hard copy of Walk the Talk: Jewish Values in Action by Linda Sonin</li>
	                <li>Hard copy of Celebrating Israel Through the Arts by Linda Sonin</li>
	                <li>Member access codes for additional staff (up to 12 teachers at same organization)</li>
                 </ul>
		</div>
	   </div>

</li>

</ul>

</div> --><!-- end class="responsive-membership-level" -->
			
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

					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div>
				

				<div class="grid col-460 botom-boxes" style="">
				<img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/05/members-icon.png">
				<h3>Join the Kehillah and gain access to all the resources</h3>
				<div class="call-to-action">
					<a href="<?php echo $responsive_options['cta_url']; ?>" class="blue button">Join Now
					</a>
				</div>
				</div>

				
				<div class="grid col-460 fit botom-boxes" style="">
								<img src="http://nvcz-s7pj.accessdomain.com/wp-content/uploads/2014/05/donate.jpg">

				<h3>Your gift makes a difference</h3>
				<br/>
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