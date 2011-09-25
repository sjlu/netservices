//##########################################################################//
// Scrolling background Tutorial Code by http://www.kudoswebsolutions.com
// Original Source code: http://youlove.us/
// Modified and extended by Kudos Web Solutions
// copyright 2009 kudoswebsolutions.com
// 2011-09-02 improved by sjlu (stevenlu.com) to have two overlay images
// with variable speed.
// 2011-09-16 sjlu: comments added into provide better understanding
//##########################################################################//

$(function() {
   // you must provide the width's of the images
   // find the images at resources/img/*bubbles*.png
   var backgroundwidth = 777;
   var backgroundwidth2 = 777;

   // just gives us a random number to start at
   offset = Math.round(Math.floor(Math.random()* backgroundwidth));
   offset2 = Math.round(Math.floor(Math.random()* backgroundwidth2));
 
	function scrollbackground() {
      // up the number, if we reached our cap, set it back to 1
      offset = (offset >= backgroundwidth2) ? 1 : offset + 1;

      // the each allows us to affect ALL elements matching that tag
   	$('.scrolling_overlay1').each(function() {
         $(this).css("background-position", "" + offset + "px 50%");
   	});
      
      // the function will call itself back after an X amount of time.
      setTimeout(function() {
         scrollbackground();
		}, 50);
   }

	function scrollbackground2() {
      offset2 = (offset2 >= backgroundwidth2-1) ? 1 : offset2 + 1;

   	$('.scrolling_overlay2').each(function() {
         $(this).css("background-position", "" + offset2 + "px 50%");
   	});

      setTimeout(function() {	
         scrollbackground2();
		}, 100);
   }

	//starting it up
   scrollbackground();
	scrollbackground2();
});
