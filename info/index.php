<!-- https://www.w3schools.com/w3css/w3css_templates.asp : "You are free to modify, save, share, and use them in all your projects." -->
<!DOCTYPE html>
<html>
<title>Clixel Information</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" type="text/css" href="./index_files/AMOEwinningmodal.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--Google jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../index_files/modal.js"></script>
    <script type="text/javascript" src="../index_files/primaryjs.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128568955-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128568955-1');
</script>

<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>

<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Clixel?<br>Clixel!</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#whatis" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">What is Clixel?</a> 
    <a href="#requirements" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Requirements to Participate</a> 
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">The Team</a>
    <a href="#amoe" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">AMOE</a>
    <a href="#auctionhouse" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">The Auction House</a>
    <a href="#copyright" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Copyright</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
    <a href="../index.php" target="_blank" class="w3-bar-item w3-button w3-hover-white">Go to Clixel</a>
    
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- What is Clixel? -->
  <div class="w3-container" id="whatis" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>What is Clixel?</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Clixel allows users the chance to win money without spending money!</p>
    <p>The concept is simple - there is a winning pixel hidden somewhere on the sponsor board. Click on a pixel to begin a countdown and a message from the respective sponsor. After the countdown, press the "Click here to discover if you've won" button. If you chose the winning pixel, you can take a percentage of the total winnings or try your chances at the full amount. If you did not win, the pixel changes to another random location on the sponsor board and the process repeats.
    </p>
  </div>
  
  <!-- Requirements to Play-->
  <div class="w3-container" id="requirements" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Requirements to Participate</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>No purchase necessary! Subject to Official Rules that will be established at a later date. Void where prohibited.</p>
  </div>

  <!-- The Team -->
  <div class="w3-container" id="team" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>The Team</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="./images/jason_dog.jpeg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Jason</h3>
          <p class="w3-opacity">Founder, CEO</p>
          <p>25 year old entrepreneur living and working in Silicon Valley</p>
        </div>
      </div>
      </div>
    </div>
    <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="./images/kenny_cat.jpeg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Kenneth</h3>
          <p class="w3-opacity">Adviser</p>
        </div>
      </div>
    </div>
  </div>

<!-- AMOE-->
  <div class="w3-container" id="amoe" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>AMOE (Alternate Method of Entry)</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>We offer an alternate method of entry for participants to use. AMOE is a service that allows the user the chance to win without supporting our sponsors. Click the button below for more information.</p>

    <input type="button" class="moreinfo" value="More info" data-toggle="modal" data-target="#AMOEmodal">
    
  </div>

    <!-- The Auction House-->
  <div class="w3-container" id="auctionhouse" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>The Auction House</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>You can sell the ad space you have purchased on our board. For more information, click on the following link: <a href="../auction/index.php"target="_blank">The Auction House</a></p>
  </div>

    <!-- Copyright -->
  <div class="w3-container" id="copyright" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Copyright</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>This website was established by Jason Eaton with the help of Kenneth Jabon.</p><!--Clixel © 2018 Jason Eaton and Kenneth Jabon. All rights reserved. We are not responsible for the content of linked advertisements. All sponsor content is © of the respective owner(s).-->
  </div>

  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact Us</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Have questions or feedback? Want to help make this website a success? Contact us at ClixelWebsite@gmail.com!</p>
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
</body>
</html>

<!-- AMOE Modal -->
<div class="modal fade" id="AMOEmodal" tableindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        *Placeholder text for more information about AMOE and/or legal information*<br/>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br/>
        <br/>
        <input type="button" id="amoebtncontinue" value="Click here if you accept the terms of use" onclick="amoeAlert();" />
        <input type="button" id="amoebtnclose" value="Click here if you decline the terms of use" onclick="amoeClose();" />
        <form id="name" style="display: none;">
          Enter your name to continue - by entering your name, you are agreeing to the legal information above.
          <br>
          First name:<br>
          <input type="text" id="firstname" value="">
          <br>
          Last name:<br>
          <input type="text" id="lastname" value="">
          <br><br>
          <input type="button" id="namedone" value="Submit" onclick="namedonefunction()">
          </form> 
        <div id="textbeforeamoe" style="display: none;">Now just...</div>
        <input type="button" id="amoebtn" class="amoebtn" style="display: none;" value="Click here to start the countdown!" />
        
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
          <h3>10% of Total Reward <br>($<script type="text/javascript"> document.write(tenpercentwithcommas)</script>)</h3>
          <button type="button" id="10percent" style="margin-top:20px" z-index=1 onclick="fractionfunction()">I choose $<script type="text/javascript"> document.write(tenpercentwithcommas)</script>!</button>
          </div>

          <div class="split middle">
          </div>

          <!-- Right side of winning modal -->
          <div class="split right">
          <h3>1 in 20 Chance of Total Reward ($<script type="text/javascript"> document.write(totalwithcommas)</script>)</h3>
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

<!-- hidden button that gets pressed when AMOE modal wins -->
<button type="button" id="winner" hidden="hidden" class="winnerFunction"></button>

</div> 