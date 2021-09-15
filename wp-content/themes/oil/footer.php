
<!--start footer --> 
        <?php if ( ! is_front_page() ) { ?> 

        <section class="footer">
            <div class="container">
                <div class="row follo">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
								<ul class="list-unstyled simple_social">
								<li> <i class="fab fa-facebook-f fa-lg"></i><a href="#">Asiantechnocommercial </a></li>
								<li> <i class="fab fa-twitter fa-lg"></i><a href="#">Asiantechnocommercial </a></li>
								<li> <i class="fab fa-instagram fa-lg"></i><a href="#">Asiantechnocommercial </a></li>
								</ul>
							</div>

		                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								   <?php get_sidebar('main-sidebar') ?>
		                    </div>

                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					  <h3>Contact Us</h3>
							<ul class="list-unstyled contact-footer">
								<address><a href="mailto:info@asiantechnocommercial.com"><i class="fa fa-envelope fa-lg"></i> info@asiantechnocommercial.com</a></address>

								<address><a href="mailto:Khalfan@asianpterocommercial.com"><i class="fa fa-envelope fa-lg"></i> Khalfan@asianpterocommercial.com</a></address>
								<li><span href=""><i class="fa fa-headphones fa-lg"></i> +201270754985 </span></li>
							</ul>
                    </div>
                </div>

                <div class="row">
                <div class="col-sm-7">
                <?php 
                   //echo do_shortcode('[smartslider3 slider=5]');
                ?>
                </div>
                <div class="col-md-1 hidden-sm hidden-xs"></div>
                <div class="col-md-4 col-sm-5">
                    <?php 
                     echo do_shortcode('[email-subscribers-form id="1"]');
                    ?>
                </div>
                
                </div>

            </div>
			<div class="copyright text-center">
                 Copyright &copy; <span class="copy"><?php echo date('Y')?> Asiantechnocommercial.com</span> All Rights Reserved
            </div>
        </section>

    <?php } ?>
      
    <!-- end footer -->

<?php wp_footer();?>

</body>
</html>