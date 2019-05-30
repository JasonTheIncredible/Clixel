$(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;

$carry = false; //executes different code in gsc3.js depending on boolean status

$(window).bind('beforeunload', function(){
        $("#myModal").empty();
        location.reload();
});

$('.video-btn')
    .mouseenter(function() {	
        var title = $(this).attr("title");
        $(this).attr("tmp_title", title);
        $(this).attr("title","");
    })
    .mouseleave(function() {
        var title = $(this).attr("tmp_title");
        $(this).attr("title", title);
    })
    .click(function() {	
        var title = $(this).attr("tmp_title");
        $(this).attr("title", title);
    }); //previous 13 lines hide secondary title popup on ad board

$('.video-btn').click(function(event) {
    $videoSrc = $(this).data( "src" );
	if (navigator.userAgent.search("Firefox") >= 0){
        $xxx = event.clientX;
        $yyy = event.clientY;
    }
    else{
        $xxx = event.pageX;
        $yyy = event.pageY;
    }
	$carry = true;
});

// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
if ($('.moreinfo').length){
}
else{
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?rel=0&showinfo=0&modestbranding=1&autoplay=1&controls=0"); 
}
});

// checks to see if 'winner' button was clicked //
$("#winner").click(function(){

   $(this).data('clicked', true)

});

// Clicking the 'winner' button closes first modal and opens second //
$('.winnerFunction').click(function () {
    $("#myModal").modal('hide');
    $("#AMOEmodal").modal('hide');
    $("#myModal").empty();
    $("#AMOEmodal").empty();
    $("#winningModal").modal('show');
});

// Closes first modal and opens 'winning' modal //
function realwinner() {
    $("#myModal").modal('hide');
    $("#myModal").empty();
    $("#winningModal").modal('show');
};

// checks to see if 'winner' button was clicked //
$("#winner").click(function(){
   $(this).data('clicked', true)
});

// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
if ($('.moreinfo').length){
    $("#myModal").empty();
    location.reload();
}
else{
    // a poor man's stop video
    $("#video").attr('src',$videoSrc);
    $("#maybewinner").prop("disabled", true);
    $carry = false;
    if ($("#winner").data("clicked")){
   	}
    else{
        $("#myModal").empty();
    	location.reload();
    	}
	}
});

// give warning when exiting winning modal //
$('#winningModal').on('hide.bs.modal', function (e) {
        if (confirm("Are you sure you want to leave? To choose later, go to 'My Account' and click on 'My reward choice' at your convenience.")){
        	window.location.reload()
        }
        else{
        	return false
        }
});

// reloads AMOE modal when exiting unless "Congratulations" //
$('#AMOEmodal').on('hide.bs.modal', function (e) {
if ($("#winner").data("clicked")){
}
else{
    $(this).find($('#firstname')).val('');
    $(this).find($('#lastname')).val('');
    window.location.reload();
}
});

// Have random compare "winner" button appear after time//
$(".video-btn").click(function() {
    
    $("#maybewinner").prop("disabled", true);
        
    setTimeout(function(){
        $("#maybewinner").text("Discover if you've won in 7")}, 1000);
        
    setTimeout(function(){
        $("#maybewinner").text("Discover if you've won in 6")}, 2000);
        
    setTimeout(function(){
        $("#maybewinner").text("Discover if you've won in 5")}, 3000);
        
    setTimeout(function(){
        $("#maybewinner").text("Discover if you've won in 4")}, 4000);
        
    setTimeout(function(){
        $("#maybewinner").text("Discover if you've won in 3");
        $.ajax({
            url:"randomvars.php",
            type: "POST",
            datatype:"json",
            data: { "callphp": "1"},
            success: function (data){
                randone = data[0];
                randtwo = data[1];
            }
        });
    }, 5000); //Fetching the numbers before the button is clicked should probably be adjusted in the final version for security.
        
    setTimeout(function(){
        $("#maybewinner").text("Discover if you've won in 2")}, 6000);

    setTimeout(function(){
        $("#maybewinner").text("Discover if you've won in 1")}, 7000);
        
    setTimeout(function(){
        $("#maybewinner").prop("disabled", false); $("#maybewinner").text("Click here to discover if you've won")}, 8000);
        
});

$(".amoebtn").click(function() {
    
    $(".amoebtn").prop("disabled", true);

    setTimeout(function(){
        $(".amoebtn").val("Discover if you've won in 8")}, 0);
        
    setTimeout(function(){
        $(".amoebtn").val("Discover if you've won in 7")}, 1000);
        
    setTimeout(function(){
        $(".amoebtn").val("Discover if you've won in 6")}, 2000);
        
    setTimeout(function(){
        $(".amoebtn").val("Discover if you've won in 5")}, 3000);
        
    setTimeout(function(){
        $(".amoebtn").val("Discover if you've won in 4")}, 4000);
        
    setTimeout(function(){
        $(".amoebtn").val("Discover if you've won in 3");
        $.ajax({
            url:"../randomvars.php",
            type: "POST",
            datatype:"json",
            data: { "callphp": "1"},
            success: function (data){
                randone = data[0];
                randtwo = data[1];
            }
        });
    }, 5000); //Fetching the numbers before the button is clicked should probably be adjusted in the final version for security.
        
    setTimeout(function(){
        $(".amoebtn").val("Discover if you've won in 2")}, 6000);

    setTimeout(function(){
        $(".amoebtn").val("Discover if you've won in 1")}, 7000);
        
    setTimeout(function(){
        if (x_faux == randone && y_faux == randtwo) {
            alert("Congratulations! A new window will now load.");
            $("#winner").click();
        }
        else{
            alert("I'm sorry, but you chose (" + x_faux + "," + y_faux + ") and the winning pixel was (" + randone + "," + randtwo + ").");
            location.reload();
        }
    }, 8000);
        
});

$('#amoeModal').on('shown.bs.modal', function (e) {
    
$("p").text("Hello world!");
}) //trying to create modal with another button
// document ready  
});