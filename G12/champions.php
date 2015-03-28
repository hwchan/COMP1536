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

    <title>Champions</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Base style -->
    <link href="css/base.css" rel="stylesheet">
	<!-- Custom page style -->
	<link href="css/champions.css" rel="stylesheet">
	

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
			<h1><span class="h1-capital">C</span>HAMPIONS</h1>
			<div class="middle-content">
				<div>
					<h2>
					Mages
					</h2>
					<p>
					Mages are mostly ranged champions who prioritize powerful abilities over basic attacks. Typically mages are characterized by some combination of long-range, area-effect or high-utility spells to get the job done. A skilled mage can have a huge impact on any team with their versatile skillsets and flexible playstyle.
					</p>
					<hr class="hr-white">
					<div class="group">
						<div class="icon">
						<a href="champions/_Ahri/Ahri.html"><img src="champions/_Ahri/images/Icon.png" alt="Ahri icon">Ahri</a>
						</div>
						<div class="icon">
						<a href="champions/_Annie/Annie.html"><img src="champions/_Annie/images/Icon.png" alt="champion icon">Annie</a>
						</div>
						<div class="icon">
						<a href="champions/_Fiddlesticks/Fiddlesticks.html"><img src="champions/_Fiddlesticks/images/icon.png" alt="champion icon">Fiddlesticks</a>
						</div>
						<div class="icon">
						<a href="champions/_Katarina/Katarina.html"><img src="champions/_Katarina/images/icon.png" alt="champion icon">Katarina</a>
						</div>
						<div class="icon">
						<a href="champions/_Ryze/Ryze.html"><img src="champions/_Ryze/images/icon.png" alt="champion icon">Ryze</a>
						</div>
					</div>
					<hr class="hr-white hrsmall">
				</div>
				<div>
					<h2>
					Assassins
					</h2>
					<p>
					An assassin is an agile champion that specializes in killing or disabling high value targets. Focused on infiltration, deception, and mobility, assassins are opportunistic hunters who find favorable moments within a fight before jumping into the fray. Regardless of the size of the enemy team, assassins specialize in positioning and artful killing. They strike when the time is right – no sooner, no later.
					</p>
					<hr class="hr-white">
					<div class="group">
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
					</div>
					<hr class="hr-white hrsmall">
				</div>
				<div>
					<h2>
					Tanks
					</h2>
					<p>
					Tanks are durable, front-line champions that help lock down enemies and start fights. They're usually found leading the charge, choosing the right times and situations to initiate aggression. Many tanks can also protect their more fragile teammates by stunning or pushing around dangerous foes and limiting their damage potential.
					</p>
					<hr class="hr-white">
					<div class="group">
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
					</div>
					<hr class="hr-white hrsmall">
				</div>
				<div>
					<h2>
					Fighters
					</h2>
					<p>
					Fighters are close range combatants that possess a mix of offensive and defensive capabilities. While they don't have as much utility as a tank or as much damage as an assassin, a fighter's damage will add up over time to make it a major threat. Each fighter has a unique blend of mobility, damage, disruption and durability.
					</p>
					<hr class="hr-white">
					<div class="group">
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
					</div>
					<hr class="hr-white hrsmall">
				</div>
				<div>
					<h2>
					Marksmen
					</h2>
					<p>
					A marksman is a ranged attacker that sacrifices defensive power and utility to focus on dealing strong, continuous damage to individual targets. Typically focused on using their basic attacks more than their abilities, marksmen have the capability to scale and deal out devastating levels of damage in the late phase of any game.
					</p>
					<hr class="hr-white">
					<div class="group">
						<div class="icon">
						<a href="champions/_Jinx/Jinx.html"><img src="champions/_Jinx/images/Icon.png" alt="champion icon">Jinx</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>						
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
						<div class="icon">
						<a href="champions/_Placeholder/Placeholder.html"><img src="champions/_Placeholder/images/icon.png" alt="champion icon">Placeholder</a>
						</div>
					</div>
					<hr class="hr-white hrsmall">
				</div>
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
	<script src="base.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="js/ie10-viewport-bug-workaround.js"></script-->
  </body>
</html>
