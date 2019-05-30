var total = 173130.82;
var totalwithcommas = total.toLocaleString();

function sponsor(t){
	sponsortitle = t.title;
	sponsorimage = t.src;
}

window.onload = function () {
	if (document.cookie.indexOf("CONFIRMATION") > -1){
			document.getElementById("overlay").style.display = "none";
			document.getElementById("overlay").style.zindex = "-1";
	}
	else{
		document.getElementById("confirmation").onclick = function(){   //for a server
    		document.cookie = "CONFIRMATION=true";
			document.getElementById("overlay").style.display = "none";
			document.getElementById("overlay").style.zindex = "-1";
	}
}
}

function amoeAlert(){
	if (confirm("By using the AMOE, you are not supporting our website. This makes paying the bills very difficult for us.")){
		amoeContinue();
	}
	else{
		alert("Thank you for supporting our website! :)");
		location.reload();
	}
}

function amoeContinue(){
	document.getElementById("amoebtncontinue").style.display="none";
	document.getElementById("amoebtnclose").style.display="none";
	document.getElementById("name").style.display="block";
	//document.getElementById("textbeforeamoe").style.display="block";
	//document.getElementById("amoebtn").style.display="block";
}

function namedonefunction(){
	if (document.getElementById("firstname").value == "" || document.getElementById("lastname").value == ""){
		alert("Please verify both fields are filled!")
	}
	else {
		document.getElementById("name").style.display="none";
		document.getElementById("firstname").value="";
		document.getElementById("lastname").value="";
		document.getElementById("textbeforeamoe").style.display="block";
		document.getElementById("amoebtn").style.display="block";
	}
}

function amoeClose(){
	location.reload();
}

var headerHeight = 44; //Changes start (top) of ad board//

var x;
var y;

//compares the randomly selected number to the one the participant chose//
function randomCompare(){

		if (x > 1250){
			x = 1250
		}
		if (x < 1){
			x = 1
		}
		if (y > 800){
			y = 800
		}
		if (y < 1){
			y = 1
		}
			if (x == randone && y == randtwo) {
			alert("You picked correctly! Congratulations! A new window will now load.")
			document.getElementById("winner").click();
		}
		else {
			alert("I'm sorry, but you chose (" + x + "," + y + ") and the winning pixel was (" + randone + "," + randtwo + ").\nYou were " + Math.round(Math.sqrt((Math.pow(x - randone, 2) + Math.pow(y - randtwo, 2)))) + " pixels away from the winning pixel.");
			location.reload();
			}
}

function winnerexample(){

		var node1 = document.getElementById("maybewinner");
		var node2 = document.getElementById("winnerexample");
		var a = document.createAttribute("hidden");
		var b = document.createAttribute("hidden");
		node1.setAttributeNode(a);
		node2.setAttributeNode(b);

		if (document.getElementById("winner").hasAttribute("hidden")) {
			(document.getElementById("winner").removeAttribute("hidden"))
		}
		else{
		}
}

// turns total into 10% and adds appropriate commas //

var tenpercent = (total / 10);
var tenpercentwithcommas = tenpercent.toLocaleString(undefined, {maximumFractionDigits:2})

function fractionfunction(){
	alert("The money will be credited to your account.");
	window.location.reload();
}

var oneintwentywinningvar = Math.floor(Math.random() * 20) + 1;

function oneintwenty(value){
	var oneintwentyvar = value;
	if (oneintwentyvar == oneintwentywinningvar){
		alert("You picked correctly! Congratulations! The money will be credited to your account!");
		window.location.reload();
	}
	else{
		alert("I'm sorry, but you chose " + oneintwentyvar + " and the winning button was " + oneintwentywinningvar + ".");
		window.location.reload();
	}
}  

var x_faux=Math.floor(Math.random() * 1250) + 1;
var y_faux=Math.floor(Math.random() * 800) + 1;

//function amoeButton(){

//	document.getElementById("amoebtn").disabled = true;
	
//    setTimeout(function(){
//        document.getElementById("amoebtn").value = "Discover if you've won in 8"}, 0);
	
//	setTimeout(function(){
//        document.getElementById("amoebtn").value = "Discover if you've won in 7"}, 1000);
	
//	setTimeout(function(){
//        document.getElementById("amoebtn").value = "Discover if you've won in 6"}, 2000);
	
//	setTimeout(function(){
//        document.getElementById("amoebtn").value = "Discover if you've won in 5"}, 3000);
	
//	setTimeout(function(){
//        document.getElementById("amoebtn").value = "Discover if you've won in 4"}, 4000);
	
//	setTimeout(function(){
//        document.getElementById("amoebtn").value = "Discover if you've won in 3";
//    	randomnumberlength();
//		randomnumberheight();
//	}, 5000);

//	setTimeout(function(){
//        document.getElementById("amoebtn").value = "Discover if you've won in 2"}, 6000);
	
//	setTimeout(function(){
//        document.getElementById("amoebtn").value = "Discover if you've won in 1"}, 7000);

//	setTimeout(function(){
//		if (x_faux == randone && y_faux == randtwo) {
//			alert("Congratulations! A new window will now load.");
//        	document.getElementById("winner").click();
//		}
//		else{
//			alert("I'm sorry, but you chose (" + x_faux + "," + y_faux + ") and the winning pixel was (" + randone + "," + randtwo + ").");
//			location.reload()
//	}}, 8000);
//}

function toggleSponsorImages() {
	var pixelbackgroundimage = document.getElementById("pixelbackgroundimage");
	var map =  document.getElementById("Map");
	if (pixelbackgroundimage.style.visibility == "visible"){
	pixelbackgroundimage.style.visibility = "hidden";
	document.getElementById("sponsorMap").removeAttribute("hidden");
	document.getElementsByClassName("sponsorimage")[0].removeAttribute("hidden");
	document.getElementsByClassName("sponsorimage")[1].removeAttribute("hidden");
	document.getElementsByClassName("sponsorimage")[2].removeAttribute("hidden");
	document.getElementsByClassName("sponsorimage")[3].removeAttribute("hidden");
	}
	else {
	pixelbackgroundimage.style.visibility = "visible";
	document.getElementById("sponsorMap").setAttribute("hidden", "hidden");
	document.getElementsByClassName("sponsorimage")[0].setAttribute("hidden", "hidden");
	document.getElementsByClassName("sponsorimage")[1].setAttribute("hidden", "hidden");
	document.getElementsByClassName("sponsorimage")[2].setAttribute("hidden", "hidden");
	document.getElementsByClassName("sponsorimage")[3].setAttribute("hidden", "hidden");
	}
}