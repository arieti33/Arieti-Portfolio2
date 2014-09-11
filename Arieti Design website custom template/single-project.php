<?php get_header(); ?>

<div class="container">
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-md-12 clearfix" role="main">
				

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
																								
<section class="post_content clearfix project" itemprop="articleBody">
   
      <!-- About Item Row -->
        <div class="row">
          <div class="col-lg-12">

            <div class="col-md-8">
                <img class="img-responsive" src="<?php the_field('image'); ?>" alt="">
            </div>

            <div class="col-md-4">
         <h3 class="single-title" itemprop="headline">Client: <?php the_title(); ?></h3>

                <h3>Project Description</h3>
                <p><?php the_field('description'); ?></p>
                
               <a href="<?php the_field('link'); ?>" class="btn btn-lg btn-primary" > Link to website</a>
               
               <div style="border-bottom:3px solid #ccc; margin:20px 0 20px 0;"></div>
               
               <a href="http://www.arietidesign.com/#portfolio" class="btn btn-md btn-primary" > back to Portfolio</a>

            </div>
				
<!-- /.row -->
</div>
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
							
							</div>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>
							
							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","wpbootstrap"); ?></a>
							<?php } ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template('',true); ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> 
        
			</div> <!-- end #main -->
</div><!-- end #content -->

</div> <!-- end .container -->
<?php get_footer(); ?>