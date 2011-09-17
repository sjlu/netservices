//##########################################################################//
// Scrolling background Tutorial Code by http://www.kudoswebsolutions.com
// Original Source code: http://youlove.us/
// Modified and extended by Kudos Web Solutions
// copyright 2009 kudoswebsolutions.com
// 2011-09-02 improved by sjlu (stevenlu.com) to have two overlay images
// with variable speed.
//##########################################################################//

$(function() {
   var backgroundwidth = 777;
   var backgroundwidth2 = 777;

   offset = Math.round(Math.floor(Math.random()* backgroundwidth));
   offset2 = Math.round(Math.floor(Math.random()* backgroundwidth2));
 
	function scrollbackground() {
      offset = (offset >= backgroundwidth2) ? 1 : offset + 1;
//      offset = (offset < 1) ? offset + (backgroundwidth - 1) : offset - 1;
   	$('.scrolling_overlay1').each(function() {
         $(this).css("background-position", "" + offset + "px 50%");
   	});
      
      setTimeout(function() {
         scrollbackground();
		}, 50);
   }
	function scrollbackground2() {
      offset2 = (offset2 >= backgroundwidth2-1) ? 1 : offset2 + 1;
//  		offset2 = (offset2 < 1) ? offset2 + (backgroundwidth2 - 1) : offset2 - 1;

   	$('.scrolling_overlay2').each(function() {
         $(this).css("background-position", "" + offset2 + "px 50%");
   	});

      setTimeout(function() {	
         scrollbackground2();
		}, 100);
   }

	// Initiate the scroll
	scrollbackground();
	scrollbackground2();
});
