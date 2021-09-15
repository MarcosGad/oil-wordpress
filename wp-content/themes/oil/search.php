<?php 

/* Template name: Custom Search */ 

get_header();  ?>

<?php 
	if($_GET['s'] && !empty($_GET['s']))
		
	{
		$text = $_GET['s']; 
	}
?> 

    <div class="container">
	  <div class="news">
		<div class="row">

		<?php 
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

		$args = array(

			'post_type' => 'post', 
			'posts_per_page' => 4,
			's' => $text,
			'paged' => $paged,

		); 
		?>

		<?php

	    $query = new WP_Query($args); 
			
		if($query->have_posts()){

		while($query->have_posts()) : $query->the_post();

		?>
		
	<div class="col-sm-12 wow fadeInDown hvr-float" data-wow-duration="2s" data-wow-offset="100" data-wow-iteration="1">

					<div class="news-content">

					<div class="row">

					<div class="col-sm-3">
					<div class="news-img">
					<?php the_post_thumbnail('',['class'=>'img-responsive img-thumbnail','title'=>'post image'])?>
					</div>
				    </div>

				    <div class="col-sm-9">

					 <div class="news-head">
						 
								 <h4 class="post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>			                     
						<div><?php the_content()?></div>
						 
					<span class="post-date">
					<i class="fas fa-calendar-alt"></i> <?php the_time('F j,Y') ?>
					</span>
					</div>
					</div>
				</div>
				</div>
				</div>
     
	 <?php endwhile; ?>

	<div class="pagination">
        <?php
        echo paginate_links( array(
            'format'  => 'page/%#%',
            'current' => $paged,
            'total'   => $query->max_num_pages,
            'mid_size'=>3,
			'end_size'=>1,
            'prev_text'       => __('&laquo; Prev Page'),
            'next_text'       => __('Next Page &raquo;')
        ) );
        ?>
    </div>

     <?php }else { ?>
		   
<div class="container word">
	
     <h1 class="notfound">Soory !</h1>
	 <p class="notfound-p">the Word you requested was <span>not found</span></p>
	 <p class="btn btn-primary notfound-back"><a href="<?php bloginfo('url')?>"> <i class="fas fa-long-arrow-alt-left"></i> Back To Home </a></p>

</div>

<?php	} ?>



<?php wp_reset_query(); ?>


			
</div> </div> </div>

 <!-- scroll top --> 
        
    <div class="scrollTop">
        <i class="fas fa-arrow-up"></i>   
    </div> 

  <!-- scroll top -->


<?php get_footer() ?>
<script>new WOW().init();</script>

