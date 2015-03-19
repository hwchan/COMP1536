<!DOCTYPE html>
<!-- Adapted from http://getbootstrap.com/examples/starter-template/ -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A League of Legends fanpage complete with news, information, and damage calculator">
    <meta name="author" content="hwc, mk, mdl, plm, bw">
    <link rel="icon" href="images/icon.png">

    <title>Calculator</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Base style -->
    <link href="css/base.css" rel="stylesheet">
	<!-- Custom page style -->
    <link href="css/calc.css" rel="stylesheet">
	

  </head>
	<!-- Display a warning for disabled Javascript -->
	<noscript>
		<div class="alert alert-warning" role="alert"><strong>JavaScript is disabled!</strong> The items page, calculator, and sign in function requires JavaScript. Please reenable JavaScript to access these functions.</div>
	</noscript>
  <body>
  <?php
  $servername = "127.0.0.1";
$username = "root";
$password = "Rubixcube22";
$dbname = "cdcol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>
  <script>
  function validateForm(){
	  var form = document.forms["calculator"]["champions"].value;
	  	  var form2 = document.forms["calculator"]["items1"].value;
		  var form3 = document.forms["calculator"]["items2"].value;
		  var form4 = document.forms["calculator"]["items3"].value;
		  var form5 = document.forms["calculator"]["items4"].value;
		  var form6 = document.forms["calculator"]["items5"].value;
		  var form7 = document.forms["calculator"]["items6"].value;
	  if(form != tryndamere || form != annnie || form != amumu || form2 != null form2 !=botrk || form2 !=ie ||form2 != fh|| form2 !=berserkers_shoes || form2 !=randuins || form2 !=spirit || form2 !=rylais || form2 !=iceborn || form2 !=deathcap form2 != null form3 !=botrk || form3 !=ie ||form3 != fh|| form3 !=berserkers_shoes || form3 !=randuins || form3 !=spirit || form3 !=rylais || form3 !=iceborn || form3 !=deathcap form4 != null form4 !=botrk || form4 !=ie ||form4 != fh|| form4 !=berserkers_shoes || form4 !=randuins || form4 !=spirit || form4 !=rylais || form4 !=iceborn || form4 !=deathcap form5 != null form5 !=botrk || form5 !=ie ||form5 != fh|| form5 !=berserkers_shoes || form5 !=randuins || form5 !=spirit || form5 !=rylais || form5 !=iceborn || form5 !=deathcap form6 != null form6 !=botrk || form6 !=ie ||form6 != fh|| form6 !=berserkers_shoes || form6 !=randuins || form6 !=spirit || form6 !=rylais || form6 !=iceborn || form6 !=deathcap form6 != null form6 !=botrk || form6 !=ie ||form6 != fh|| form6 !=berserkers_shoes || form6 !=randuins || form6 !=spirit || form6 !=rylais || form6 !=iceborn || form6 !=deathcap form6 != null form7 !=botrk || form7 !=ie ||form7 != fh|| form7 !=berserkers_shoes || form7 !=randuins || form7 !=spirit || form7 !=rylais || form7 !=iceborn || form7 !=deathcap  )
		  alert ("bad input")
		  return false
  }
  </script>
	<div class="container">
	<a href="index.html"><img alt="League of Legends logo" src="images/League_of_legends_logo_transparent.png" width="190" height="75"></a>
	
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-header">
				<!-- Collapsed navbar hamburger -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand"></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.html">News</a></li>
					<li><a href="intro.html">Intro</a></li>
					<li>
						<!-- Show the dropdown for Media if Javascript is enabled -->
						<script type="text/javascript">
							document.write(" \
							<a href=\"\" data-toggle=\"dropdown\">Media<span class=\"caret\"></span></a> \
							<ul class=\"dropdown-menu inverse-dropdown\"> \
								<li><a href=\"videos.html\">Videos</a></li> \
								<li><a href=\"lcs.html\">Pro teams</a></li> \
							</ul> \
							")
						</script>
						<!-- Else show plain links -->
						
						<noscript>
							<div id="noscript-media">
								<a href="videos.html">Videos</a><br>
								<a href="lcs.html">Pro teams</a>
							</div>
						</noscript>
						
					</li>
					<li><a href="champions.html">Champions</a></li>
					<li><a href="items.html">Items</a></li>
					<li class="active"><a href="calculator.html">Calculator</a></li>
					<li>
						<script type="text/javascript">
							document.write(" \
							<a href=\"#signin\" data-toggle=\"modal\" data-target=\"#signInModal\">Sign in</a> \
							")
						</script>
						
						<noscript>
							<div id="noscript-signin">
								<a href="signin.html">Sign in</a>
							</div>
						</noscript>
					</li>
				</ul>
			</div><!--/.nav-collapse -->

		</nav>

		  <div class="middle-container">
			<h1><span class="h1-capital">C</span>ALCULATOR</h1>
			<div class="middle-content">
				<div class = "champ-select">
				<form name = "calculator" action = "http://localhost/G12/calculator.php" onsubmit = "validateForm()" method="post">
					<div>
                    <!--Click on the icon to select your champion. A pop-up should appear to let you select from 20+ champions.
						For milestone 4 we've only included 3 to show functionality. More will be included once we have access
						to database.-->
					<h4> Champion selection</h4>
					<select name="champions">
					<option value = 0>Tryndamere</option>
					<option value = 1>Annie</option>
					<option value = 2>Amumu</option>
					</select>
					</div>
					<div>
                    <!--Click on any slot, 10 sample items will show up for selection. More will be available once we have
						database-->
					<h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please click to select your items</h4>
					<select name="items1">
					<?php
						$list-of-item-names = "SELECT item_name FROM items";
						for(int i=0; i<$list-of-item-names.length; i++){
							echo "<option value=" . i . ">";
							echo list-of-item-names[i];
							echo "</option>";
						}
					?>
					<option value="0"> &nbsp; </option>
					<option value="1">botrk</option>
					<option value="2">ie</option>
					<option value="3">berserkers shoes</option>
					<option value="4">fh</option>
					<option value="5">randuins</option>
					<option value="6">spirit</option>
					<option value="7">rod</option>
					<option value="8">deathcap</option>
					<option value="9">rylais</option>
					<option value="10">iceborn</option>
					</select>
					<select name="items2">
					<option value="0"> &nbsp; </option>
					<option value="1">botrk</option>
					<option value="2">ie</option>
					<option value="3">berserkers shoes</option>
					<option value="4">fh</option>
					<option value="5">randuins</option>
					<option value="6">spirit</option>
					<option value="7">rod</option>
					<option value="8">deathcap</option>
					<option value="9">rylais</option>
					<option value="10">iceborn</option>
					</select>
					<select name="items3">
					<option value="0"> &nbsp; </option>
					<option value="1">botrk</option>
					<option value="2">ie</option>
					<option value="3">berserkers shoes</option>
					<option value="4">fh</option>
					<option value="5">randuins</option>
					<option value="6">spirit</option>
					<option value="7">rod</option>
					<option value="8">deathcap</option>
					<option value="9">rylais</option>
					<option value="10">iceborn</option>
					</select>
					<select name="items4">
					<option value="0"> &nbsp; </option>
					<option value="1">botrk</option>
					<option value="2">ie</option>
					<option value="3">berserkers shoes</option>
					<option value="4">fh</option>
					<option value="5">randuins</option>
					<option value="6">spirit</option>
					<option value="7">rod</option>
					<option value="8">deathcap</option>
					<option value="9">rylais</option>
					<option value="10">iceborn</option>
					</select>
					<select name="items5">
					<option value="0"> &nbsp; </option>
					<option value="1">botrk</option>
					<option value="2">ie</option>
					<option value="3">berserkers shoes</option>
					<option value="4">fh</option>
					<option value="5">randuins</option>
					<option value="6">spirit</option>
					<option value="7">rod</option>
					<option value="8">deathcap</option>
					<option value="9">rylais</option>
					<option value="10">iceborn</option>
					</select>
					<select name="items6">
					<option value="0"> &nbsp; </option>
					<option value="1">botrk</option>
					<option value="2">ie</option>
					<option value="3">berserkers shoes</option>
					<option value="4">fh</option>
					<option value="5">randuins</option>
					<option value="6">spirit</option>
					<option value="7">rod</option>
					<option value="8">deathcap</option>
					<option value="9">rylais</option>
					<option value="10">iceborn</option>
					</select>
					</div>
				</div>
				<?php
				// define variables and set to empty values
$champion = $item1 = $item2 = $item3 = $item4 = $item5 = $item6 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $champion = test_input($_POST["champions"]);
  $item1 = test_input($_POST["items1"]);
  $item2 = test_input($_POST["items2"]);
  $item3 = test_input($_POST["items3"]);
  $item4 = test_input($_POST["items4"]);
  $item5 = test_input($_POST["items5"]);
  $item6 = test_input($_POST["items6"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>
                <!--Champbase is used to store values passed from the child window.-->
				<br><br id="champbase">
				<div class="outcomebox">
                    <!--The compute outcome will be displayed here. Damage per hit is the damage it does in the normal sense.
                    Damage over time takes into consideration of the ability cooldown and attack speed (for auto-attack)-->
					<div>
						<img id="SelfP" alt="Passive" src="champions/_Tryndamere/images/P.png" height = "100" width = "100">
					<!-- passiveability lets us change the name of passive ability once a champ has been selected-->
						<br><span id="passiveability">Battle Fury</span>:
						<br>The damage per hit is 0.
						<br>The damage per second is 0.
					</div>
					<div>
						<img id="SelfQ" alt="Qability" src="champions/_Tryndamere/images/Q.png" height = "100" width = "100">
						<br><span id="Qability">Bloodlust</span>:
					<!-- Qdmg displays the calculated damage per hit and Qdps is the damage per second-->
						<br>The damage per hit is <span id="Qdmg">0</span>. 
						<br>The damage per second is <span id="Qdps">0</span>.
					</div>
					<div>
						<img id="SelfW" alt="Wability" src="champions/_Tryndamere/images/W.png" height = "100" width = "100">
						<br><span id="Wability">Mocking Shout</span>: 
						<br>Damage per hit is <span id="Wdmg">0</span>.
						<br>Damage per second is <span id="Wdps">0</span>.
					</div>
					<div>
						<img id="SelfE" alt="Eability" src="champions/_Tryndamere/images/E.png" height = "100" width = "100">
						<br><span id="Eability">Spinning Slash</span>: 
						<br>The damage per hit is <span id="Edmg">0</span>. 
						<br>The damage per second is <span id="Edps">0</span>.
					</div>
					<div>
						<img id="SelfR" alt="Rability" src="champions/_Tryndamere/images/R.png" height = "100" width = "100">
						<br><span id="Rability">Undying Rage</span>: 
						<br>The damage per hit is <span id="Rdmg">0</span>. 
						<br>The damage per second is <span id="Rdps">0</span>.
					</div>
				</div>
				
                <!--stats1 to stats 6 are used to hold item stats passed from child windows.-->
				<button id="calculatestats">Calculate it now.</button><br id="stats1"><br id="stats2">
				<!--these id's here display their respective values-->
				</form>
				<p>Your chapmion stats are:</p>  
				<?php
						$sql = "SELECT * FROM championstats LIMIT $champion, 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			echo $row["Hitpoints"] . $row["Attackdmg"] . $row["Attackspeed"] .  "<br>";
	}
}
						?> 
				<p>Item 1 stats are:</p>
				 <?php
						$sql = "SELECT * FROM items LIMIT $item1, 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		 $stuff = $row["Damage"]. $row["Atkspeed"] . "<br>";
	}
}
echo $stuff;
						?> 
				<p>Item 2 stats are:</p>
				 <?php
						$sql = "SELECT * FROM items LIMIT $item2, 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			echo $row["Damage"]. $row["Atkspeed"] . "<br>";
	}
}
						?> 
				<p>Item 3 stats are:</p>
				 <?php
						$sql = "SELECT * FROM items LIMIT $item3, 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			echo $row["Damage"]. $row["Atkspeed"] . "<br>";
	}
}
						?> 
				<p>Item 4 stats are:</p>
				 <?php
						$sql = "SELECT * FROM items LIMIT $item4, 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			echo $row["Damage"]. $row["Atkspeed"] . "<br>";
	}
}
						?> 
				<p>Item 5 stats are:</p>
				 <?php
						$sql = "SELECT * FROM items LIMIT $item5, 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			echo $row["Damage"]. $row["Atkspeed"] . "<br>";
	}
}
						?> 
				<p>Item 6 stats are:</p>
				 <?php
						$sql = "SELECT * FROM items LIMIT $item6, 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			echo $row["Damage"]. $row["Atkspeed"] . "<br>";
	}
}
						?> 
		
				<hr>
				
				<div class = "champ-select">
					<div>
                    <!--Not put to work in this milestone yet. Explanation is given in the report-->
					<h4> Please select enemy champion</h4>
					<img alt="IE" src="champions/_Amumu/images/Icon.png" height = "120" width = "120">
					</div>
					<div>
					<h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please click to select enemy items</h4>
					<ul>
						<li><img alt="IE" src="images/items/fh.png" height = "100" width = "100"></li>
						<li><img alt="IE" src="images/items/randuins.png" height = "100" width = "100"></li>
						<li><img alt="IE" src="images/items/tabi_shoes.png" height = "100" width = "100"></li>
						<li><img alt="IE" src="images/items/abyssal.png" height = "100" width = "100"></li>
						<li><img alt="IE" src="images/items/empty_icon.png" height = "100" width = "100"></li>
						<li><img alt="IE" src="images/items/empty_icon.png" height = "100" width = "100"></li>
					</ul>
                    </div>
				</div>
				
				<br><br>
				<div class="outcomebox">
					<div>
						<img alt="Amumupass" src="champions/_Amumu/images/P.png" height = "100" width = "100">
						<br>Cursed Touch:
						<br>The damage per hit is x. 
						<br>The damage per second is y.
					</div>
					<div>
						<img alt="Amumupass" src="champions/_Amumu/images/Q.png" height = "100" width = "100">
						<br>Bandage Toss:
						<br>The damage per hit is x. 
						<br>The damage per second is y.
					</div>
						<div>
						<img alt="Amumupass" src="champions/_Amumu/images/W.png" height = "100" width = "100">
						<br>Despair:
						<br>The damage per hit is x. 
						<br>The damage per second is y.
					</div>
						<div>
						<img alt="Amumupass" src="champions/_Amumu/images/E.png" height = "100" width = "100">
						<br>Tantrum:
						<br>The damage per hit is x. 
						<br>The damage per second is y.
					</div>
					<div>
						<img alt="Amumupass" src="champions/_Amumu/images/R.png" height = "100" width = "100">
						<br>Curse of the Sad Mummy:
						<br>The damage per hit is x. 
						<br>The damage per second is y.
					</div>					
				</div>
				Your auto-attack damage per hit is x. Your auto-attack per second is y. <br><br>
				Your total health is w. Your combined damage per second is: z

            </div>
			
			
			<footer class="row">
				<div class="col-md-4 footer-left">
					Group 12: hwc, mk, mdl, plm, bw
					<br>
					<a href="mailto:someone@example.com">someone@example.com</a>
				</div>
				<div class="col-md-4 footer-center">
					<a href="#"><img alt="News page" src="images/League_of_legends_logo_transparent.png" width="190" height="75"></a>
				</div>
				<div class="col-md-4 footer-right">
					Disclaimer notice
					<br>
					&copy; 2015 Copyright notice&nbsp;			
				</div>
			</footer>
		  </div>
	</div><!-- /.middle -->
	
	<!-- Sign in modal -->
	<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="signIn" action="http://webdevfoundations.net/scripts/formdemo.asp" onsubmit="return validateSignIn()" method="POST">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h1 id="signin-title">Sign in</h1>
					</div>
					<div class="modal-body">
						<!-- Email -->
						<span class="modal-title">Email: <span id="email-star">*</span></span><br>
						<input type="text" placeholder="example@email.com" name="email" size="40">
						<br>
						<!-- Submit -->
						<input id="submitButton" type="submit" class="btn btn-primary pull-right" value="Go!">
						<br>
						<!-- Password -->
						<span class="modal-title">Password: <span id="password1-star">*</span></span><br>
						<input type="password" name="password1" size="40">
						<!-- Register -->
						<a id="registerLink" href="#" onclick="registerToggle()" class="small pull-right">Register</a>
						<br>
						<!-- Forgot your password -->
						<a href="#" class="small">Forgot your password?</a>
						<!-- Hidden registration area -->
						<div id="registerArea">
							<hr class="hr-white">
							<!-- Repeat password -->
							<span class="modal-title">Repeat password: <span id="password2-star">*</span></span><br>
							<input type="password" name="password2" size="40">
							<br>
							<!-- Terms -->
							<input type="checkbox" name="termsConditions">
							<span class="small">I accept the <a href="#" data-toggle="tooltip" data-placement="right" title="By accepting, you forfeit all your assets to us.">terms and conditions</a> <span id="terms-star">*</span></span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div><!-- End of modal -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/calc.js"></script>
	<script src="js/base.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="js/ie10-viewport-bug-workaround.js"></script-->
  </body>
</html>