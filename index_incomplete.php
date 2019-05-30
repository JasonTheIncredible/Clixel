<?php

$total = 173130.82;
setlocale(LC_MONETARY, 'en_US.UTF-8');
$totalwithcommas = money_format('%!i', $total);
$totaloverten = ($total/10);
$tenpercenttotal = money_format('%!i', $totaloverten);

setcookie("zindex", 101);
setcookie("display", block);

if (isset($_COOKIE['CONFIRMATION'])){
  setcookie("zindex", -1);
  setcookie("display", none);
}
else{
  if(isset($_POST['confirmation'])){
    setcookie("CONFIRMATION", true);
    setcookie("zindex", -1);
    setcookie("display", none);
  }
}

$x;
$y;

//compares the randomly selected number to the one the participant chose//
function randomCompare(){

    if ($x > 1250){
      $x = 1250;
    }
    if ($x < 1){
      $x = 1;
    }
    if ($y > 800){
      $y = 800;
    }
    if ($y < 1){
      $y = 1;
    }
    if ($x == $randone && $y == $randtwo) {
      echo "<script type='text/javascript'>alert('You picked correctly! Congratulations! A new window will now load.');</script>";
      echo '<script type="text/javascript">',
      'winner();',
      '</script>';
    }
    else {
      echo "<script type='text/javascript'>alert('I'm sorry, but you chose (" + $x + "," + $y + ") and the winning pixel was (" + $randone + "," + $randtwo + ").\nYou were " + round(sqrt((pow($x - $randone, 2) + pow($y - $randtwo, 2)))) + " pixels away from the winning pixel.');</script>";
      
      }
}

if (isset($_POST['maybewinner'])) {
    randomCompare();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" ><!-- http-equiv="Content-Type" content="text/html; charset=UTF-8">-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./index_files/style.php">
	<link type="text/css" rel="stylesheet" href="./index_files/banner-styles.css">
	<!--Google jquery CDN-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./index_files/modal.js"></script>
	<script type="text/javascript" src="./index_files/primaryjs_test.js"></script>
	<script type="text/javascript" src="./randomJS/node_modules/randomorg-js/dist/randomorg-js.js"></script>
	<script>
		function randomnumberlength(){
    var randomJs = new RandomJs();
 
		var result = randomJs
  			.apikey('96f04c28-ee5d-446e-a763-e1c1f3c867a9')
  			.method('generateIntegers')
  			.params({n:1,min:1,max:1250}) //Need to create two for the two dimensions?//
  			.post(function(xhr, stream, body) {
  				//in browser:
        		//first argument is xhr object
        		//second argument is null

        		//in node:
        		//first argument is error object or null
        		//second argument is stream
    			console.log('==START==')
    			console.log('==xhr==')
    			console.log(xhr)
    			console.log('==stream==')
    			console.log(stream)
    			console.log('==body==')
    			console.log(body)
    			console.log('==END==')
          randone = (JSON.parse(xhr.responseText).result.random.data[0])
        });
    }
  </script>

  <script>
  function randomnumberheight(){
  var randomJsTwo = new RandomJs();
 
  var result = randomJsTwo
      .apikey('96f04c28-ee5d-446e-a763-e1c1f3c867a9')
      .method('generateIntegers')
      .params({n:1,min:1,max:800}) //Need to create two for the two dimensions?//
      .post(function(xhr, stream, body) {
        //in browser:
          //first argument is xhr object
          //second argument is null

          //in node:
          //first argument is error object or null
          //second argument is stream
        console.log('==START==')
        console.log('==xhr==')
        console.log(xhr)
        console.log('==stream==')
        console.log(stream)
        console.log('==body==')
        console.log(body)
        console.log('==END==')
        randtwo = (JSON.parse(xhr.responseText).result.random.data[0])
      });
  }
  </script>

  <script> //move this to .js file for clickash only in the future//
document.onmousemove = mouseinfo;

function mouseinfo(event) {

  var coordstart = (document.body.getBoundingClientRect().width)/2; //Changes where the search area starts for ad block. OffsetWidth supposedly display width of an area//

  if ($carry == false){ //boolean found in modal.js
    $xxx = event.pageX;
    $yyy = event.pageY;
  }

  document.getElementById('mousedisplay').style.left=$xxx + 10; //Changes mouse hover display box start////
  document.getElementById('mousedisplay').style.top=$yyy + 18; //Changes mouse hover display box start////

  if (((coordstart % 1) * 10) < 5) {
    x = Math.ceil(($xxx - coordstart + 625)) + 1;
  }
  else {
    x = Math.floor(($xxx - coordstart + 625)) + 1;
  }
  
  y = Math.ceil(($yyy - headerHeight)); //Changes search height for ad board//
 
  if ((y <= 0) || (y > 800) || (x <= 0) || (x > 1250)){
    document.getElementById('mousedisplay').style.display = "none";
  }
  else {
    document.getElementById('mousedisplay').style.display = "";
    if ((y > 0) && (y <= 400) && (x > 0) && (x <= 625) && (document.cookie.indexOf("CONFIRMATION") > -1)){
      document.getElementById('displayimage').innerHTML = '<img src="./index_files/Facebook.png" width="30" height="30">';
    }
    if ((y > 0) && (y <= 400) && (x > 625) && (x < 1250) && (document.cookie.indexOf("CONFIRMATION") > -1)){
      document.getElementById('displayimage').innerHTML = '<img src="./index_files/Google.jpg" width="30" height="30">';
    }
    if ((y > 400) && (y < 800) && (x > 0) && (x <=625) && (document.cookie.indexOf("CONFIRMATION") > -1)){
      document.getElementById('displayimage').innerHTML = '<img src="./index_files/Amazon.jpg" width="30" height="30">';
    }
    if ((y > 400) && (y < 800) && (x > 625) && (x < 1250) && (document.cookie.indexOf("CONFIRMATION") > -1)){
      document.getElementById('displayimage').innerHTML = '<img src="./index_files/Apple.png" width="30" height="30">';
    }
    document.getElementById('displaytitle').innerHTML = " " + sponsortitle + " ";
    document.getElementById('xylocation').innerHTML = "(" + x + "," + y + ")";
  }
}
  </script>

	<title>Clixel</title>
	<meta name="keywords" content="clixel, million, dollar, pixels, pixel, jason eaton, jason, eaton, kenny jabon, kenny, jabon, entrepreneur, student, loans, advertising, ad, links">
	<meta name="description" content="Selling ad space and giving away cash in the process.">

</head>

<!-- for server-->
<div id="overlay" class="animated fadeIn">
    <center>
        <br/><br/><br/><br/><br/><br/><br/>
        By clicking <form method="post" style="display: inline;"><input type="submit" name="confirmation" style="border-radius: 8px" value="HERE"/></form>
        you acknowledge that this website is a work in progress<br/>
        and you can NOT win any money at this time.</br>
        <br/>
        All copyrighted material on this website is for example purposes only; <br/>
        it does not reflect actual sponsorship or support of this site.
    </center>
</div>


<!-- Creates the mouse popup on the sponsor page -->
<div id="mousedisplay" style="position: absolute; z-index: 99; border: 1px solid rgb(0, 0, 0); display: none; background: rgb(255, 255, 255);">
	
<!-- Leaves hover box coordinates visible after opening the modal -->
<span id="displayimage"></span><span id="displaytitle"></span><span id="xylocation"></span>

</div>

<center>

	<header class="w3-grayscale-min">
				
		<!-- Creates the banner at the top -->
		<div id="toplogo">
			
			<!-- I used #646464 for the banner boundground grey and roboto as the font-->
			<a><img src="./index_files/clixel_current_prize.PNG" border="0" width="580" height="44" alt="Clixel" style="position:absolute; LEFT: 0; TOP: 0px; z-index: 1;"></a>
			<!--<font size="6" color="white" style="position:absolute; LEFT: 410; TOP: 0px; z-index: 1;">$1731.87</font>-->

			<!-- Login buttons -->
			<button class="loginBtn loginBtn--facebook" style="Left:170px">
  			Login with Facebook
			</button>
			<button class="loginBtn loginBtn--google" style="Left:170px">
  			Login with Google
			</button>

			<!-- "New to Clixel? Click here!" button-->
  			<div class="w3-display-right w3-text-white" style="padding:30px; z-index: 1">
			<p><a href="./info/index.html"target="_blank" class="w3-button w3-light-grey w3-padding-small w3-large w3-hover-opacity-off" style="position:relative; TOP:6px; LEFT:25px; z-index:1;">New to Clixel? Click here!</a></p>
  			</div>

		</div>

	</header>

<!-- Pixel layout -->
<div id="pixels" style="z-index:1">
<map id="Map" name="Map">

<area onmouseover="sponsor(this)" type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Lb4IcGF5iTQ" data-target="#myModal" shape="rect" coords="0,0,625,400" title="Facebook">
<img class=sponsorimage hidden="hidden" src="./index_files/Facebook.png" style="position:absolute; TOP:0; LEFT:0;" width="625" height="400">
<area onmouseover="sponsor(this)" type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/oT6Xd5QsBOE" data-target="#myModal" shape="rect" coords="625,0,1250,400" title="Google">
<img class=sponsorimage hidden="hidden" src="./index_files/Google.jpg" style="position:absolute; TOP:0; LEFT:625px;" width="625" height="400">
<area onmouseover="sponsor(this)" type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/J6-8DQALGt4" data-target="#myModal" shape="rect" coords="0,400,625,800" title="Amazon">
<img class=sponsorimage hidden="hidden" src="./index_files/Amazon.jpg" style="position:absolute; TOP:400px; LEFT:0;" width="625" height="400">
<area onmouseover="sponsor(this)" type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/8rwsuXHA7RA" data-target="#myModal" shape="rect" coords="625,400,1250,800" title="Apple">
<img class=sponsorimage hidden="hidden" src="./index_files/Apple.png" style="position:absolute; TOP:400px; LEFT:625px;" width="625" height="400">
<img id=sponsorMap usemap="Map" hidden="hidden" style="position:absolute; TOP:0; LEFT:0;" width="1250" height="800">
			
</map>

<!-- Board overlay image -->
<img id=pixelbackgroundimage src="./index_files/adboard_money.jpeg" width="1250" height="800" border="0" usemap="#Map" style="position: absolute; top: 0px; left: 0px; border: none; visibility: visible;">

</center> <!--End of page content -->

<center>
<table>

<!-- Copyright bar at bottom -->
<tr><td id="copyright" height="18" width=1250px>Established by Jason Eaton and Kenneth Jabon. This website is a work in progress; prizes are not being awarded.  All copyrighted material on this website is for example purposes only; it does not reflect actual sponsorship or support of this site.</td></tr> <!--Clixel © 2018 Jason Eaton and Kenneth Jabon. All rights reserved. We are not responsible for the content of linked advertisements. All sponsor content is © of the respective owner(s).-->


</table>

<button class="hiddenbutton" onclick="toggleSponsorImages()"> [][][][] </button>

</center>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-body">

      		<!-- Modal exit button -->
       		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          	<span aria-hidden="true">×</span>
        	</button>
        
        	<!-- 16:9 aspect ratio -->
			<div class="embed-responsive embed-responsive-16by9">
  			<iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always">></iframe>
			</div>

			<!-- 'Winner?' button -->
			<!-- <button type="button" id="maybewinner" onclick="randomCompare()">Discover if you've won in 8</button> -->
      <form method="post" style="display: inline;"><input type="submit" name="maybewinner" value="Discover if you've won in 8"/></form>

			<!-- 'Winner' example button -->
			<button type="button" id="winnerexample" onclick="winnerexample()">'Winner' example</button>

			<!-- Winner button -->
			<button type="button" id="winner" hidden="hidden" class="winnerFunction">Congratulations, you've won! Click here!</button>


	  		</div>
		</div>
  	</div>
</div>

<!-- Winning Modal -->
<div class="modal fade" id="winningModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-body">

      		<!-- Modal exit button -->
       		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          	<span aria-hidden="true">×</span>
        	</button>

        	<div class="winningtitle">
        	<h2>Choose One</h2>
        	</div>

        	<div class="winningmodal"></div>

        	<!-- Left side of winning modal -->
        	<div class="split left">
    		<h3>10% of Total Reward <br>($<?php echo $tenpercenttotal; ?>)</h3>
    		<button type="button" id="10percent" style="margin-top:20px" z-index=1 onclick="fractionfunction()">I choose $<?php echo $tenpercenttotal; ?>!</button>
			</div>

			<div class="split middle">
			</div>

			<!-- Right side of winning modal -->
			<div class="split right">
    		<h3>1 in 20 Chance of Total Reward ($<?php echo $totalwithcommas; ?>)</h3>
    		<button type="button" id="10percent" value="1" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">1</button>
    		<button type="button" id="10percent" value="2" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">2</button>
    		<button type="button" id="10percent" value="3" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">3</button>
    		<button type="button" id="10percent" value="4" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">4</button>
    		<button type="button" id="10percent" value="5" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">5</button>
    		<button type="button" id="10percent" value="6" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">6</button>
    		<button type="button" id="10percent" value="7" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">7</button>
    		<button type="button" id="10percent" value="8" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">8</button>
    		<button type="button" id="10percent" value="9" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">9</button>
    		<button type="button" id="10percent" value="10" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">10</button>
    		<button type="button" id="10percent" value="11" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">11</button>
    		</br>
    		<button type="button" id="10percent" value="12" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">12</button>
    		<button type="button" id="10percent" value="13" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">13</button>
    		<button type="button" id="10percent" value="14" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">14</button>
    		<button type="button" id="10percent" value="15" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">15</button>
    		<button type="button" id="10percent" value="16" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">16</button>
    		<button type="button" id="10percent" value="17" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">17</button>
    		<button type="button" id="10percent" value="18" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">18</button>
    		<button type="button" id="10percent" value="19" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">19</button>
    		<button type="button" id="10percent" value="20" style="margin-top:20px" z-index=1 onclick="oneintwenty(this.value)">20</button>
			</div>

	  		</div>
		</div>
  	</div>
</div>