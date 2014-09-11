<?php
/*
Template Name: Single Services
*/
?>

<?php get_header(); ?>


<style>
.showhide {
	display:none;
	background:#fff;
}

a.hide {display:block;}

body #basicModal {
    /* new custom width */
    width: 100%;
    overflow: hidden;
}

body .modal-lg {width:75%;}

.h2-title {
	
margin-top:50px; 
margin-bottom:10px; 
padding-bottom:10px;
font-size:35px;
font-weight:200;
}

.h2-title h2{
	
font-size:35px;
font-weight:500;
}


</style>

<!-- Custom Theme JavaScript -->
<script>
    
jQuery(document).ready(function(){

  $(".show").click(function(){
    $(".showhide").toggle().slideDown(5000, 'linear');
    
  });
  
    $(".hideproject").click(function(){
    $(".showhide").hide().slideUp(5000, 'easeOutBounce');
  });


 $('#monster').hide().delay(500).slideDown(5000, 'linear');

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    
    
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -10}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});
    
    });
    </script>



<header id="top" class="header">
			    			        

<div class="text-vertical-center">
    <div id="monster"><h1><img src="http://www.arietidesign.com/wp-content/uploads/2014/09/arieti-logo.png" alt="arieti-logo" width="500" /></h1></a>
            <br>
        <a href="#services" class="btn btn-dark btn-lg">Find Out More</a>

     </div>
</header>





<div class="modal fade" id="webDesign" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
			<div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-0">
                        <div class="modal-body">
                        <div><a data-dismiss="modal" class="btn btn-dark btn-lg close-modal">Close</a></div>
							<div class="col-md-4">
				<img width="300" class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2014/01/e-commerce-design-large.jpg" />
	</div>
	
	       <div class="col-md-6 pull-right">
	       
	     <ul class="list-group" style="text-align:center;">

        <li class="list-group-item">Web planning & strategy</li>

        <li class="list-group-item">Device ready design & development</li>        

        <li class="list-group-item">E Commerce Solutions</li>

        <li class="list-group-item">Social media integration</li>

    </ul>

	       </div>

       <div class="col-md-12">
    <p>Arieti Design can help take your business or organization to the next level by designing and developing a professional, unique, up to date with the newest technologies, and customized website, 
    
  <br /><br />  which will attract the eye of your target audience while providing the client with clear business objectives and a solid marketing and execution plan.</p>

									<! end Col-md-12 -->
    						  </div>
	  						<! end model body -->
   						</div>

   					</div>
   				</div>
   			</div>    
   		</div>
   	</div>
</div>

<div class="modal fade" id="ecommerce" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
			<div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-0">
                        <div class="modal-body">
                        <div><a data-dismiss="modal" class="btn btn-dark btn-lg close-modal">Close</a></div>
							<div class="col-md-4">
								<img width="300" class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2014/01/e-commerce-design-large.jpg" />
 
   </div>
   
   		<div class="col-md-6 pull-right">

       <ul class="list-group" style="text-align:center;">

        <li class="list-group-item">E-commerce Website Development</li>

        <li class="list-group-item">Custom development</li>        

        <li class="list-group-item">Store Email marketing</li>

        <li class="list-group-item">Social media integration</li>

		</ul>
   		</div>

       <div class="col-md-12">

    <p>Arieti Design develops E-Commerce online stores to showcase your business products and merchandise through marketing and developed content. 
    <br /><br />E-Commerce stores provide your customer with easier access to products and services while raising your profit margin with a simple click of a button. 
   <br /><br /> Arieti Design develops an E-Commerce site that builds your brand, keeps customers informed, gives your business something to share on social media and helps you rank in search engines.</p>

									<! end Col-md-12 -->
    						  </div>
	  						<! end model body -->
   						</div>
   					</div>
   				</div>
   			</div>    
   		</div>
   	</div>
</div>


<div class="modal fade" id="books" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
			<div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-0">
                        <div class="modal-body">
                        <div><a data-dismiss="modal" class="btn btn-dark btn-lg close-modal">Close</a></div>
							<div class="col-md-4">
								<img width="300" class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2014/01/e-commerce-design-large.jpg" />
 
   </div>
   
   		<div class="col-md-6 pull-right">

	   	<ul class="list-group" style="text-align:center;">

        <li class="list-group-item">Flyers</li>

        <li class="list-group-item">Posters</li>        

        <li class="list-group-item">Books Covers</li>

        <li class="list-group-item">Publications</li>
        
        <li class="list-group-item">Brochures</li>

        <li class="list-group-item">Catalogs</li>


    </ul>
   		</div>

       <div class="col-md-12">

    <p> Whether you need a logo, banner, letterhead, personalized or business stationary, event invitations, publication design, guidance with color scheme, or other design needs, Arieti Design can create your visions.

<br /><br /><br /><br />Arieti Design offers a new and progressive approach to designing and redesigning, which brings new positive energy to your company or organization. Pinpointing your company’s philosophy, goals, and culture, while developing the company name is a high priority for Arieti Design.

<br /><br /><br /><br />The Arieti Design team works together to design a logo that is unique, recognizable, and attractive to the eye. The brand is the face of your company and what it stands for.</p>
									<! end Col-md-12 -->
    						  </div>
	  						<! end model body -->
   						</div>
   					</div>
   				</div>
   			</div>    
   		</div>
   	</div>
</div>


<div class="modal fade" id="branding" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
			<div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-0">
                        <div class="modal-body">
                        <div><a data-dismiss="modal" class="btn btn-dark btn-lg close-modal">Close</a></div>
							<div class="col-md-4">
				<img width="300" class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2014/01/e-commerce-design-large.jpg" />
 
   </div>
   
   <div class="col-md-6 pull-right">
       <ul class="list-group" style="text-align:center;">

        <li class="list-group-item">Branding & Identity</li>

        <li class="list-group-item">Logo Design</li>        

        <li class="list-group-item">Letterheads</li>

        <li class="list-group-item">Collateral matereals </li>

    </ul>

   
   </div>
   
  <div class="col-md-12">

    <p> Arieti Design captures, shapes, and develops the character of your company through their unique marketing strategies and development of branding and identity.
<br /><br />Arieti Design prides themselves on developing relationships with their clients to enhance their understanding of the purpose and expectations of the client through group discussion and immersion, brainstorming, ideology development, conceptualization, and implementation.

<br /><br />The visible elements such as brand vision, culture, positioning, personality, relationships, and presentations are represented through the logos, symbols, colors, and design that Arieti Design creates for the consumer.</p>

  <! end Col-md-12 -->
    						  </div>

	  						<! end model body -->
   						</div>
   					</div>
   				</div>
   			</div>    
   		</div>
   	</div>
</div>

   
   			    <!-- Services -->

       <section id="services" class="services bg-primary">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                	 <div class="col-sm-12 h2-title">

                    <h2>Our Work</h2>
                    
                     </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="portfolio-item">
 <img width="150" class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4><strong>Web Design & Development</strong></h4>
                                <p>Comprehensive web design and development solutions</p>
                                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#webDesign" >Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portfolio-item">
 <img width="150" class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2014/01/e-commerce-design-large.jpg" />                                <h4>
                              <h4>
                                    <strong>E-commerce Solutions</strong>
                                </h4>
                                <p> Comprehensive and advanced E-commerce Solutions</p>
                                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#ecommerce" >Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portfolio-item">
 <img width="150" class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2014/01/branding.jpg" />                                <h4>
                                <h4>
                                    <strong> Branding & Identity</strong>
                                </h4>
                                <p>Complete Branding and Identity Solutions</p>
                                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#branding" >Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portfolio-item">
 <img width="150" class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2014/01/print-publication.jpg" />                                <h4>
                                <h4>
                                    <strong> Book & Publication</strong>
                                </h4>
                                <p>Complete Branding and Identity Solutions</p>
                                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#branding" >Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#portfolio" class="btn btn-dark">View Our Work</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        <!-- /.container Services -->
    </section>


<section id="portfolio" class="portfolios pportfolios">
		<div class="row">
                	 <div class="col-sm-12 h2-title text-center">
                   		 <h2>Our Work</h2>
                     </div> 
                     <div class="col-lg-10 col-lg-offset-1 text-center">

    <div id="stop-log"></div>			
			    		<ul id="filters" class="clearfix">
			<li><span class="filter active" data-filter="web ecommerce book branding">All</span></li>
			<li><span class="filter" data-filter="web">Websites</span></li>
			<li><span class="filter" data-filter="ecommerce">E-commerce Websites</span></li>
			<li><span class="filter" data-filter="book">Print & Publication</span></li>
			<li><span class="filter" data-filter="branding">Branding & Identity</span></li>
		</ul>
		

		<div id="portfoliolist">
			
			<?php
 // check if the repeater field has rows of data
if( have_rows('project_portfolio') ): 
// loop through the rows of data
while ( have_rows('project_portfolio') ) : the_row(); ?>
 

			<div class="col-lg-3 portfolio <?php the_sub_field('category'); ?>" data-cat="<?php the_sub_field('category'); ?>">
				<div class="portfolio-wrapper">	
					<a href="<?php the_sub_field('projects_link'); ?>">			
 								<img class="img-portfolio img-responsive" src="<?php the_sub_field('project_image_thumb'); ?>" />   
 					</a>                             
					<div class="label">
						<div class="label-text">
							<a href="<?php the_sub_field('projects_link'); ?>" class="text-title show"><?php the_sub_field('projects_title'); ?></a>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>							
			
<?php endwhile;
 
 else :
    // no rows found
endif;
?>


			<?php
 // check if the repeater field has rows of data
if( have_rows('project_portfolio_branding') ): 
// loop through the rows of data
while ( have_rows('project_portfolio_branding') ) : the_row(); ?>
 

			<div class="col-lg-3 portfolio <?php the_sub_field('category'); ?>" data-cat="<?php the_sub_field('category'); ?>">
				<div class="portfolio-wrapper">	
								
 								<img class="img-portfolio img-responsive" src="<?php the_sub_field('project_image_thumb_br'); ?>" />   
 					                           
					<div class="label">
						<div class="label-text">
							<a class="text-title show"><?php the_sub_field('project_title_b'); ?></a>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>							
			
<?php endwhile;
 
 else :
    // no rows found
endif;
?>
			
			</div>
       </div> <!-- /.col-lg-10 -->
 </div> <!-- /.row -->
        

    </section>
    


       <section id="about" class="about bg-primary">
            <div class="row">
            	<div class="col-sm-12 h2-title text-center">
                   		 <h2>About Us</h2>
                     </div> 

                <div class="col-lg-8 col-lg-offset-2 text-center">
                	                    
					<p><?php the_field('about_us'); ?></p>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        <!-- /.container Services -->
    </section>
    
    
        </section>

       <section id="contact" class="contact bg-primary">
            <div class="row">
            	
            	<div class="col-sm-12 h2-title text-center">
                   		 <h2>Contact Us</h2>
                     </div> 

                <div class="col-lg-10 col-lg-offset-2">
     <div class="col-md-4">		
     	<?php echo do_shortcode('[gravityform id="2" name="contact us"]'); ?>
     </div>
    
      <div class="col-md-4 col-md-offset-2"><h3>Arieti Design and Development Solutions</h3>
     	<p>Phone:847 834 1879</p>
     	<p>Email:aarieti@arietidesign.com</p>
     	
     	</div>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        <!-- /.container Services -->
    </section>

    

		<div class="container">

				<div id="main" class="col-lg-10 clearfix" role="main">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<!--<header>
				
								<div class="page-header">
									<h1><?php the_title();?></h1>
								</div>				
								
							</div>
						
						</header>-->

						<section class="row post_content">
							<div class="col-sm-8">
						
								<?php the_content(); ?>
								
							</div>
							
													
						</section> <!-- end article header -->
						
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
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
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    


    <!-- Custom Theme JavaScript -->
    </div>

<?php get_footer(); ?>