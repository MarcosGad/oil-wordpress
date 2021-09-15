$(function () {

    'use strict';

    // scroll to top 

    var scrollButton = $('.scrollTop');

    $(window).scroll(function (){

        if($(this).scrollTop() >= 180 ) {

            scrollButton.show();

        }else {

            scrollButton.hide(); 
        }
    }); 
    
   $('.scrollTop').click(function(){
       
       $('body , html').animate({
           
           scrollTop : 0
           
       },500); 
       
   });
	
    // nice scroll 

   $("body").niceScroll({
    cursorwidth: "10px",
    cursorcolor: "#3f3d6a",
    cursorborder:"1px solid #000",
   });

   // placeholder

   $('[placeholder]').focus(function(){

    $(this).attr('data-text', $(this).attr('placeholder'));

    $(this).attr('placeholder', '');

  }).blur(function(){

    $(this).attr('placeholder',$(this).attr('data-text'));

  });


   
	
  }); 

	


	

        