<!doctype html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset')?>"/>	
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('|','true','right')?><?php bloginfo('name')?></title>	
<link rel="pingback" href="<?php bloginfo('pingback_url');?>"/>

<?php wp_head();?>	
</head>
	
	<body> 
		
   <!-- start upper bar -->
     <?php if ( ! is_front_page() ) { ?> 

        <div class="upper-bar">
            <div class="container">
                <div class="row">
                    <div class="info col-xs-12 col-sm-6 col-md-6">
                    <a href="mailto:info@asiantechnocommercial.com"><i class="fa fa-envelope fa-lg"></i> info@asiantechnocommercial.com</a>

                    </div>
                    <div class="info info-sm col-xs-12 col-sm-6 col-md-6">

                    	<i class="fas fa-clock hidden-md hidden-lg"></i> <div id="MyClockDisplay" class="clock" onload="showTime()"></div> 
                        <i class="fas fa-clock clock-md hidden-sm hidden-xs"></i>

                    	<div class="location">
                		<i class="fas fa-map-marker-alt"></i> Al Safat St, Oman
                	    </div>

                    </div>
                </div>
            </div>
        </div>
    <!-- end upper bar -->

<!-- start nav --> 
        
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="85">
  <div class="container">
	  <div class="row">
		  <div class="col-sm-1 col-md-1 col-lg-2">
			  
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="<?php bloginfo('url')?>">
				  <img class="hvr-pop" src="<?php echo get_template_directory_uri() . '/images/logo.jpeg' ?>" alt="..." />
			  </a>  
			</div>
         </div>
		  
	<div class="col-sm-11 col-md-11 col-lg-10">
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	 <div class="nav navbar-nav navbar-right s-h">
		<form id="my_form" action="<?php echo home_url( '/' ); ?>" method="get">
		 <div class="search-hide">
		 <div class="search-cont-hide">
			<div class="searchbar pull-left">
			  <input class="search_input" type="text" name="s" placeholder="Search...">
			  <a href="javascript:{}" onclick="document.getElementById('my_form').submit(); return false;" class="search_icon"><i class="fas fa-search"></i></a>
			</div>
		  </div>
        </div>
	    </form>
	</div>

	<?php  o_bootstrap_menu(); ?>

</div><!-- /.navbar-collapse -->
		
		
   </div>
  </div>
  </div><!-- /.container-fluid -->
</nav>
<!-- end nav -->

<?php 
//echo do_shortcode('[smartslider3 slider=2]');
?>

<?php } ?>

<script>
	  // clock 

function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();
</script>