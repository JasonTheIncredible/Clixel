$(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?rel=0&showinfo=0&modestbranding=1&autoplay=1" ); 
})
  
  
// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc);
    $("#maybewinner").prop("disabled", true);
    $("#maybewinner").text("Please wait");
})


// Have random compare "winner" button appear after time//
$( "#support" ).click(function() {
	$("#maybewinner").prop("disabled", true);
        setTimeout(function(){
        	$("#maybewinner").text("Wait 7")}, 1000);

        setTimeout(function(){
        	$("#maybewinner").text("Wait 6")}, 2000);

        setTimeout(function(){
        	$("#maybewinner").text("Wait 5")}, 3000);

        setTimeout(function(){
        	$("#maybewinner").text("Wait 4")}, 4000);
        
        setTimeout(function(){
        	$("#maybewinner").text("Wait 3")}, 5000);

        setTimeout(function(){
        	$("#maybewinner").text("Wait 2")}, 6000);

        setTimeout(function(){
        	$("#maybewinner").text("Wait 1")}, 7000);
        
        setTimeout(function(){
        	$("#maybewinner").prop("disabled", false); $("#maybewinner").text("Winner?")}, 8000);

        	//$("#maybewinner").text("Winner? 2"), 4000;
			//$("#maybewinner").prop("disabled", false)}, 6000;
			
			//$("#maybewinner").prop("disabled", false); $("#maybewinner").text("Winner?")}, 8000);
		});
  
// document ready  
});