//##########################################################################//
// Scrolling background Tutorial Code by http://www.kudoswebsolutions.com
// Original Source code: http://youlove.us/
// Modified and extended by Kudos Web Solutions
// copyright 2009 kudoswebsolutions.com
// 2011-09-02 improved by sjlu (stevenlu.com) to have two overlay images
// with variable speed.
//##########################################################################//

$(function() {
   var backgroundheight = 777;
   var backgroundheight2 = 777;

   offset = Math.round(Math.floor(Math.random()* backgroundheight));
   offset2 = Math.round(Math.floor(Math.random()* backgroundheight2));
 
	function scrollbackground() {
      offset = (offset < 1) ? offset + (backgroundheight - 1) : offset - 1;
   	$('#container').css("background-position", "50% " + offset + "px");
   	setTimeout(function() {
			scrollbackground();
		}, 50);
   }
	function scrollbackground2() {
  		offset2 = (offset2 < 1) ? offset2 + (backgroundheight2 - 1) : offset2 - 1;
  		$('#overlay').css("background-position", "50% " + offset2 + "px");
  		setTimeout(function() {	
         scrollbackground2();
		}, 100);
   }

	// Initiate the scroll
	scrollbackground();
	scrollbackground2();
});
