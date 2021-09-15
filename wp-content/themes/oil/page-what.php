<?php get_header();  ?> 

<div class="container">
	<?php 
        
    $values = array('post_type'=>'do','order'=>'ASC'); 
          
    $query = new wp_query($values); 
        
      if($query->have_posts()){
            
        while($query->have_posts()){
              
          $query->the_post();   
        
    ?>
	<div class="what">
	<div class="row">
			<div class="col-sm-6">
				<div class="header-tow">
                   <h2 class="title"><?php the_title() ?></h2>
                <div class="line">
                    <span></span>
                </div>
                </div>
                <div class="what-content">
                	<?php the_content(); ?>
                </div>
			</div>
			<div class="col-sm-6">
				<div class="what-image">
				   <img class="what-img" src="<?php the_post_thumbnail_url(); ?>" alt="..." />
			    </div>
			</div>	
    </div>
	</div>
	<?php } } ?>
</div>


<div class="container">
	<?php 
        
    $values = array('post_type'=>'slice','order'=>'ASC'); 
          
    $query = new wp_query($values); 
        
      if($query->have_posts()){
            
        while($query->have_posts()){
              
          $query->the_post();   
        
    ?>
	<div class="gas">
	<div class="row">
			<div class="col-sm-6">
				<div class="header-three">
                   <h2 class="title"><?php the_title() ?></h2>
                <div class="line">
                    <span></span>
                </div>
                </div>
                <div class="gas-content">
                	<?php the_content(); ?>
                </div>
			</div>
			<div class="col-sm-6">
				<div class="gas-image">
				   <div class="row">
				   		<div class="col-sm-6">

				   			<img class="gas-img-one wow fadeInDown" data-wow-duration="2s" data-wow-offset="100" src="<?php the_field("photo_one") ?>" alt="..." />
				   		</div>
				   		<div class="col-sm-6">
				   			<img class="gas-img-two wow fadeInDown" data-wow-duration="2s" data-wow-offset="100" src="<?php the_field("photo_two") ?>" alt="..." />
				   		</div>
				   </div>
			    </div>
			</div>	
    </div>
	</div>
	<?php } } ?>
</div>








  <!-- scroll top --> 
        
    <div class="scrollTop">
        <i class="fas fa-arrow-up"></i>   
    </div> 

  <!-- scroll top -->



<?php get_footer() ?>
<script>new WOW().init();</script>