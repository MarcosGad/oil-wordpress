<?php get_header();  ?> 

<div class="container">
<?php 
        
    $values = array('post_type'=>'box','order'=>'ASC'); 
          
    $query = new wp_query($values); 
        
      if($query->have_posts()){
            
        while($query->have_posts()){
              
          $query->the_post();   
        
?>


<div class="our">
<div class="row">

<div class="header text-center">
        <h2 class="title"><?php the_title() ?></h2>
    <div class="line">
          <span></span>
    </div>
</div>

<div class="col-sm-5">
  <div class="our-imgae">
    <img class="our-img wow fadeInDown" data-wow-duration="2s" data-wow-offset="100" src="<?php the_post_thumbnail_url(); ?>" alt="..." />
  </div>
</div>

<div class="col-sm-7">
	<div class="our-content">
		<?php the_content(); ?>
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