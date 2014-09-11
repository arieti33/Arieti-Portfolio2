<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<style>
.showhide {
	display:none;
	background:#fff;
}

a.hide {display:block;}
</style>
			
			    <header id="top" class="header">
			    			    
			        <!-- Custom Theme JavaScript -->
    <script>
    
jQuery(document).ready(function(){

  $(".show").click(function(){
    $(".showhide").toggle().slideDown(5000, 'easeIn');
  });
  
    $(".hideproject").click(function(){
    $(".showhide").toggle(8000, 'easeIn');
  });

  



 $('#monster').hide().delay(500).slideDown(5000, 'easeOutBounce');
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

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
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
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
    



        <div class="text-vertical-center">
            <div id="monster"><h1><img src="http://localhost:8888/wordpress/wp-content/uploads/2014/08/arieti-logo.png" alt="arieti-logo" width="500" /></h1></a>
            <br>
                        <a href="#services" class="btn btn-dark btn-lg">Find Out More</a>


        </div>
    </header>
    
          <!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    				    
			    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="service-item">
 <img width="150" class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
                                    <strong>Web Design & Development</strong>
                                </h4>
                                <p>Comprehensive web design and development solutions</p>
                                <a href="#" class="btn btn-light" >Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="service-item">
 <img width="150" class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2014/01/e-commerce-design-large.jpg" />                                <h4>
                              <h4>
                                    <strong>E-commerce Solutions</strong>
                                </h4>
                                <p> Comprehensive and advanced E-commerce Solutions</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="service-item">
 <img width="150" class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2014/01/branding.jpg" />                                <h4>
                                <h4>
                                    <strong> Branding & Identity</strong>
                                </h4>
                                <p>Complete Branding and Identity Solutions</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        
        
        <!-- /.container -->
    </section>

                <!-- About -->
    <section id="about" class="about showhide">
        <div class="container">

        <!-- Portfolio Item Row -->
        <div class="row">
                    <h2>JTeach.org</h2>

            <div class="col-md-8">
                <img class="img-responsive" src="http://placehold.it/750x500" alt="">
            </div>

            <div class="col-md-4">
                <h3>Project Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3>Project Details</h3>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                </ul>
            </div>
                                <a class="hideproject" >close</a>

        </div>
        <!-- /.row -->

        </div>
        <!-- /.container -->
    </section>
    
    
<section id="portfolio" class="portfolio">
 <div class="container">
   <div class="row">
    
 <div class="col-lg-12 text-left">

    <div id="stop-log"></div>			
			    		<ul id="filters" class="clearfix">
			<li><span class="filter active" data-filter="app card icon logo web">All</span></li>
			<li><span class="filter" data-filter="app">App</span></li>
			<li><span class="filter" data-filter="card">Card</span></li>
			<li><span class="filter" data-filter="icon">Icon</span></li>
			<li><span class="filter" data-filter="logo">Logo</span></li>
			<li><span class="filter" data-filter="web">Web</span></li>
		</ul>

		<div id="portfoliolist">
			
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">				
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Bird Document</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				

			<div class="portfolio app" data-cat="app">
				<div class="portfolio-wrapper">			
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a href="#about" class="text-title show">Visual Infography</a>
							<span class="text-category">APP</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>		
			
			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Sonor's Design</a>
							<span class="text-category">Web design</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				
			
			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper">			
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Typography Company</a>
							<span class="text-category">Business card</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
						
			<div class="portfolio app" data-cat="app">
				<div class="portfolio-wrapper">
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Weatherette</a>
							<span class="text-category">APP</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>			
			
			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper">			
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">BMF</a>
							<span class="text-category">Business card</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
			
			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper">			
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Techlion</a>
							<span class="text-category">Business card</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
			
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">KittyPic</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																																							
			
			<div class="portfolio app" data-cat="app">
				<div class="portfolio-wrapper">			
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Graph Plotting</a>
							<span class="text-category">APP</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>														
			
			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper">			
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">QR Quick Response</a>
							<span class="text-category">Business card</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				

			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Mobi Sock</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																	

			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Village Community Church</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>													
			
			<div class="portfolio icon" data-cat="icon">
				<div class="portfolio-wrapper">			
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Domino's Pizza</a>
							<span class="text-category">Icon</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>							

			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Backend Admin</a>
							<span class="text-category">Web design</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																								

			<div class="portfolio icon" data-cat="icon">
				<div class="portfolio-wrapper">			
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Instagram</a>
							<span class="text-category">Icon</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				
			
			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
 <img class="img-portfolio img-responsive" src="http://www.arietidesign.com/wp-content/uploads/2013/08/web-design-large.jpg" />                                <h4>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Student Guide</a>
							<span class="text-category">Web design</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																	

			<div class="portfolio icon" data-cat="icon">
				<div class="portfolio-wrapper">
					<img src="img/portfolios/icon/2.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Scoccer</a>
							<span class="text-category">Icon</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																																																																

			<div class="portfolio icon" data-cat="icon">
				<div class="portfolio-wrapper">						
					<img src="img/portfolios/icon/5.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">3D Map</a>
							<span class="text-category">Icon</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>			
			
			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
					<img src="img/portfolios/web/1.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Note</a>
							<span class="text-category">Web design</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>									
			
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/3.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Native Designers</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																	

			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/4.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Bookworm</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																												
			
			<div class="portfolio icon" data-cat="icon">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/icon/3.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Sandwich</a>
							<span class="text-category">Icon</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																								
			
			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/card/3.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Reality</a>
							<span class="text-category">Business card</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	

			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/2.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Speciallisterne</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				
										
			
		</div>
        </div>

        </div>
                </div>

        <!-- /.container -->
        

    </section>


    <!-- Portfolio -->
    <section id="portfo" class="portfo">
    
                          <div class="col-lg-12 text-left">
              </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="http://localhost:8888/wordpress/wp-content/uploads/2014/08/arieti-logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="http://localhost:8888/wordpress/wp-content/uploads/2014/08/arieti-logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="http://localhost:8888/wordpress/wp-content/uploads/2014/08/arieti-logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a class="show" href="#about">
                                    <img class="img-portfolio img-responsive" src="http://localhost:8888/wordpress/wp-content/uploads/2014/08/arieti-logo.png">
                                </a>

                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        

    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary showhide">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>



				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<header>

							<?php 
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-home' );
							?>

							<div class="jumbotron" style="background-image: url('<?php echo $featured_src[0]; ?>'); background-repeat: no-repeat; background-position: 0 0;">
				
								<div class="page-header">
									<h1><?php bloginfo('title'); ?><small><?php echo get_post_meta($post->ID, 'custom_tagline' , true);?></small></h1>
								</div>				
								
							</div>
						
						</header>
						
						<section class="row post_content">
						
							<div class="col-sm-8">
						
								<?php the_content(); ?>
								
							</div>
							
							<?php get_sidebar('sidebar2'); // sidebar 2 ?>
													
						</section> <!-- end article header -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
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

<?php get_footer(); ?>