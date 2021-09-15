<?php get_header();  ?> 


<div class="gallery">
	<div class="container">
		<?php 
		echo do_shortcode('[smartslider3 slider=3]');
		?>
	</div>
</div>

<div class="container">
	<div class="news">
		<div class="row">
			<?php
			if(have_posts()){
				while(have_posts()){
					the_post();
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
			<?php 

				}

			}


			?>

			<div class="pagination">
                <?php echo numbering_pagination();?>
	        </div>
	   
	
	</div>
	</div>
	</div>
 



  <!-- scroll top --> 
        
    <div class="scrollTop">
        <i class="fas fa-arrow-up"></i>   
    </div> 

  <!-- scroll top -->

<?php get_footer() ?>
<script>new WOW().init();</script>
