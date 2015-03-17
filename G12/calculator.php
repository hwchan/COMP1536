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
	<div class="container">
	
		<?php
			# Gets the current page name to set the class="active" attribute
			$active = basename(__FILE__, '.php'); ;
			require "nav.php";
		?>

		  <div class="middle-container">
			<h1><span class="h1-capital">C</span>ALCULATOR</h1>
			<div class="middle-content">
				<div class = "champ-select">
					<div>
                    <!--Click on the icon to select your champion. A pop-up should appear to let you select from 20+ champions.
						For milestone 4 we've only included 3 to show functionality. More will be included once we have access
						to database.-->
					<h4> Champion selection</h4>
					<img id="imgselect" alt="IE" src="champions/_Tryndamere/images/Icon.png" height = "120" width = "120">
					</div>
					<div>
                    <!--Click on any slot, 10 sample items will show up for selection. More will be available once we have
						database-->
					<h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please click to select your items</h4>
					<ul>
						<li><img id="item1" alt="IE" src="images/items/empty_icon.png" height = "100" width = "100"></li>
						<li><img id="item2" alt="IE" src="images/items/empty_icon.png" height = "100" width = "100"></li>
						<li><img id="item3" alt="IE" src="images/items/empty_icon.png" height = "100" width = "100"></li>
						<li><img id="item4" alt="IE" src="images/items/empty_icon.png" height = "100" width = "100"></li>
						<li><img id="item5" alt="IE" src="images/items/empty_icon.png" height = "100" width = "100"></li>
						<li><img id="item6" alt="IE" src="images/items/empty_icon.png" height = "100" width = "100"></li>
					</ul>
					</div>
				</div>
				

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
				Your total combat stats are : <span id="damage">0</span> attack damage, <span id="critstrike">0</span>% critical strike, 
				<span id="attackspeed">0</span> attacks/sec, <span id="ap">0</span> ability power, <span id="cdr">0</span>% cool down reduction
				,<span id="mana">0</span>mana, <span id="health">0</span> health, <span id="armour">0</span> armour, <span id="mres">0</span> magic resist.
				<br id="stats3"><br id="stats4">
				Your auto-attack damage per second is <span id="AAdps">0</span>. <br id="stats5"><br id="stats6">
				Your combined damage per second is <span id="totaldps">0</span>.
				

				
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
			
			<?php require "footer.php" ?>
			
		  </div>
	</div><!-- /.middle -->
	
	<?php require "modal.php" ?>
	
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
