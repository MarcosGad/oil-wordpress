<?php get_header();  ?> 



<!-- contact us --> 
        
<section class="contact" id="contact">
    <div class="container">
        <div class="header text-center">
        <h2 class="title">Contact Us</h2>
        <div class="line">
            <span></span>
        </div>
           
        </div>
        
        <div class="row">
            <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="contact-info">
                    <h3 class="contact-info-title">Have You Any Qestions ?</h3>
                    
                    <span>
                        <i class="fas fa-map-marker-alt"></i> 
                        <span class="span-text-icon">Location will detects Your</span>
                    </span>
                    <span>
                        <i class="fas fa-headphones"></i>
                        <span class="span-text-icon">+201270754985</span>
                    </span>
                    <span>
                        <i class="fas fa-envelope"></i>
                        <span class="span-text-icon">info@asiantechnocommercial.com</span>
                    </span>
                    <span class="contect-span-phone">
                        <i class="fas fa-globe"></i>
                        <span class="span-text-icon">www.asiantechnocommercial.com</span>
                    </span>
                </div>

                <!-- start map -->
                        <div id="map" style="width:100%"></div>
                      <script>

                          function initMap() {   

                            var uluru = {lat: 23.5922655, lng: 58.4013861};

                            var map = new google.maps.Map(document.getElementById('map'), {

                              zoom: 18,

                              center: uluru

                            });

                            var marker = new google.maps.Marker({

                              position: uluru,

                              map: map

                            });

                          }

                        </script>
                       <!-- end map -->
            </div>
            
            <div class="col-md-8 col-sm-7 col-xs-12">
                <?php 
                    echo do_shortcode('[contact-form-7 id="132" title="Contact form 1"]');
                ?>
            <!--
                <form>
                    <div class="form-group input-group-lg flex">
                        <input class="form-control" type="text" placeholder="name...">
                        <input class="form-control" type="text" placeholder="phone...">
                    </div>
                    <div class="form-group input-group-lg">
                    <input class="form-control" type="email" placeholder="email...">
                    </div>
                    <div class="form-group input-group-lg">
                    <textarea class="form-control" placeholder="message..."></textarea>
                    </div>
                    <button class="form-btn">Send Message</button>
                </form>
            -->
            </div>
        </div>
        
    </div>    
</section>








  <!-- scroll top --> 
        
    <div class="scrollTop">
        <i class="fas fa-arrow-up"></i>   
    </div> 

  <!-- scroll top -->



<?php get_footer() ?>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVjgaU60Q1Q0Ayi96CwtJWxdYNgsmQqHE&callback=initMap">
</script>





