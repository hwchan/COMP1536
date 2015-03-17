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

    <title>Introduction to League of Legends</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Base style -->
    <link href="css/base.css" rel="stylesheet">
    <!-- Custom page style -->
    <link href="css/intro.css" rel="stylesheet">

  </head>

  <body>
    <!-- Display a warning for disabled Javascript -->
	<noscript>
		<div class="alert alert-warning" role="alert"><strong>JavaScript is disabled!</strong> The items page, calculator, and sign in function requires JavaScript. Please reenable JavaScript to access these functions.</div>
	</noscript>
	<div class="container">
		
		<?php
			# Gets the current page name to set the class="active" attribute
			$active = basename(__FILE__, '.php'); ;
			require "nav.php";
		?>
		
		<!-- Page heading -->
		<div class= "middle-container">
			<h1><span class="h1-capital">I</span>NTRODUCTION TO <span class="h1-capital">L</span>EAGUE OF <span class="h1-capital">L</span>EGENDS</h1>
			<!-- End of page heading -->
			
			<div class= "middle-content">
			
				<!-- Intro paragraph, meant to welcome new players -->
				<p class = "paragraph"> League of Legends is one of the most popular games ever made, and with good reason; it's fun, easy to learn, and most importantly, costs nothing. League was inspired by a mod called <span class = "italics">Defence of the Ancients,</span> and was first released on October 2009. It;s popularity has grown exponentially since release, and by 2012, was the most played PC game in both Europe and North America, and has received numerous awards. Compared to other MOBA's like Dota2, LOL has quite a gentle learning curve, and is quite beginner friendly; it evan has a thorough tutorial which all players must go through. Once mastered however, there is also quite a strong competitive scene to take part it, as you can see on the LCS page. The community is also one of the largest in gaming, and is a great way to meat new people and play with friends. </p>
				<hr>
				<!-- End of intro -->
				
				<!-- Story/Lore section -->
				<h2> The Story</h2>
					<div class= "inner-content">
						<iframe class= "intro-vid" width="640" height="480" src="https://www.youtube.com/embed/ebJR2lBZsOc" allowfullscreen>
						</iframe>
					</div>
				<!-- End of lore section -->
				
				<hr>
				
				<!-- 1st gameplay section; basic how-to -->
				<div class= "row">
				<h2> Basics of play</h2>
					<div class= "col-md-6">
						<p> The first thing to know how to do is move your champion; to move, simply right click on the area you want to move to, right click on enemies you want to attack. Casting spells can be done by either left clicking on the spell or pressing the correct hotkey (Q,W,E, or R), then clicking on the enemy. Your objective is to force your way into the enemy's stronghold an destroy their nexus </p>	
					</div>
				<img alt="game" class = "col-md-6" src="images/gameplay1.jpg">
				</div>
				<br>
				<br>
				<!-- 2nd gameplay section; more intermediate techniques -->
				<div class= "row">
				<h2> Controlling the Battlefield</h2>
					<div class= "col-md-6">
						<p> There are 3 lanes that lead to the enemy's nexus, each lane is guarded by a series of turrets; powerful structures that will attack you once in range and no minions are in range. Minions are ai characters that spawn at each nexus, they will fight each other first but will attack you if no other minions are around.<p>
						</div>
				<img alt="game" class = "col-md-6" src="images/gameplay2.jpg">
					</div>
					<br>
				<!-- 3rd gameplay section; more advanced -->
				<div class= "row">
				<h2> Paving the way to victory </h2>
					<div class= "col-md-6">
						<p> You will have to do more than fight minions to win a game, destroying turrets is the first step; attack only when minions are within its firing range, and run away when you minions are down. Once destroyed you will want to deal with inhibitors, once destroyed your side will spawn super-minions that are stronger than regular minions; giving your side a decisive advantage. Once the nexus is vulnerable, coordinate a killing blow </p>
					</div>
				<img alt="game" class = "col-md-6" src="images/gameplay3.png">
				</div>
				<!-- Additional sections may be made later -->
				<!-- End of gameplay section -->
				<br>
				<div class= "row">
				<h2> Other hints and tips</h2>
					<div class= "col-md-6">
						<p> Remember to buy items to enhance your champions killing power. Gold is earned over time and by getting the killing hit on a minion or champion. Be mindful about your purchases, as they will depend on your prefered playstyle and Champion type. Lastly don't forget about the Jungle, it is filled with neutral monsters that can be killed for extra income, just be sure you don't bite off more than you can chew. </p>					
					</div>
				<img alt="game" class = "col-md-6" src="images/gameplay4.jpg">
				</div>
				<br>
				<hr>		
			</div>
			<!-- End of middle content -->
							
			<?php require "footer.php" ?>
			
		</div>
		<!-- End of middle container -->

	<?php require "modal.php" ?>

	</div><!-- /.middle -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/base.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="js/ie10-viewport-bug-workaround.js"></script-->
  </body>
</html>
		

		
		