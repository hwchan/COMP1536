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

    <title>LCS</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Base style -->
    <link href="css/base.css" rel="stylesheet">
	<!-- Custom page style -->
	<link href="css/lcs.css" rel="stylesheet">

  </head>
	<!-- Display a warning for disabled Javascript -->
	<body>
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
		 <div class="middle-container">
		  	<h1><span class="h1-capital">L</span>EAGUE OF <span class="h1-capital">L</span>EGENDS <span class="h1-capital">C</span>HAMPIONSHIP <span class="h1-capital">S</span>ERIES</h1>
			<h3>North America</h3>
		<!-- End of page heading -->

			 				<!--*** All of the team information and pictures were taken from 'http://na.lolesports.com/na-lcs/2015/spring/teams' ***-->
			 
			<div class="middle-content">
				
			<!-- Team 1 -->
				<!-- Class row that contains left, mid, and right column -->
				<div class="row">

					<!-- Left column containing team image -->
					<div class="col-md-3">
						<img class ="team-img" src="images/winterfox.png" alt="winterfox" width="134" height="134" draggable="false">
						<p class="founded"><span class="color">Founded:</span> January, 2015</p>
					</div>
					<!-- End of left column -->

					<!-- Middle column containing content on team -->
					<div class="col-md-5 col-sm-8">
						<h2>WinterFox</h2>
						<!-- Content taken from 'http://na.lolesports.com/na-lcs/2015/spring/teams/winterfox' -->
						<p>When they first came to NA LCS from EU LCS, Evil Geniuses contained much of their core roster from Season 2: Snoopeh, Yellowpete, and Krepo. However, with no original roster members remaining, Evil Geniuses is an entirely different team: Winterfox. With the potential of young stars Altec and Pobelter, as well as jungle talent Helios, Winterfox could be a team to reckon with once they iron out the kinks.
						</p>
					</div>
					<!-- End of middle column -->

					<!-- Right column containing team members -->
					<div class="col-md-4 col-sm-4">
						<h3 class="members">Team Roster</h3>
						<ul class="memb_bg">
							<li>[Top]&nbsp;Avalon</li>
							<li>[Jungler]&nbsp;Helios</li>
							<li>[Mid]&nbsp;Pobelter</li>
							<li>[ADC]&nbsp;Paragon</li>
							<li>[Support]&nbsp;Altec</li>
						</ul>
					</div>	
					<!-- End of right column -->

				</div>

				<!-- Social media for team -->
				<br>
				<div class="row text-center">
					<div class="col-sm-3"><a href="https://twitter.com/winterfoxgg">Twitter</a></div>
					<div class="col-sm-3"><a href="https://www.facebook.com/winterfoxgg">Facebook</a></div>
					<div class="col-sm-3"><a href="http://www.winterfox.gg">Website</a></div>
					<div class="col-sm-3"><a href="http://na.lolesports.com/na-lcs/2015/spring/teams/winterfox">E-Sports</a></div>
				</div>
				<hr>
				<!-- End of Social media -->
			<!-- End of team 1 -->

			
			
			<!-- Team 2 -->
				<!-- Class row that contains left, mid, and right column -->
				<div class="row">

					<!-- Left column containing team image -->
					<div class="col-md-3">
						<img class ="team-img" src="images/tip.png" alt="cloud 9" width="134" height="134" draggable="false">
						<p class="founded"><span class="color">Founded:</span> January, 2015></p>
					</div>
					<!-- End of left column -->

					<!-- Middle column containing content on team -->
					<div class="col-md-5 col-sm-8">
						<h2>Team Impulse</h2>
						<!-- Content taken from 'http://na.lolesports.com/na-lcs/2015/spring/teams/team-impulse' -->
						<p>Born from the ashes of LMQ, Team Impulse formed around XiaoWeiXiao, one of the most dominant Season 4 NA mid laners. With an entirely new roster including Korean solo queue star Rush and the first recipient of a League of Legends sports scholarship, Adrian, Team Impulse has a lot of talent but not much experience. Can they band together, and how far can they go?
						</p>
					</div>
					<!-- End of middle column -->

					<!-- Right column containing team members -->
					<div class="col-md-4 col-sm-4">
						<h3 class="members">Team</h3>
						<ul class="memb_bg">
							<li>[Top]&nbsp;Impact</li>
							<li>[Jungler]&nbsp;Rush</li>
							<li>[Mid]&nbsp;XiaoWeiXiao</li>
							<li>[ADC]&nbsp;Apollo</li>
							<li>[Support]&nbsp;Adrian</li>
						</ul>
					</div>	
					<!-- End of right column -->

				</div>

				<!-- Social media for team -->
				<br>
				<div class="row text-center">
					<div class="col-sm-3"><a href="https://twitter.com/teamimpulselol">Twitter</a></div>
					<div class="col-sm-3"><a href="https://www.facebook.com/teamImpulselol">Facebook</a></div>
					<div class="col-sm-3"><a href="http://www.teamimpulse.gg">Website</a></div>
					<div class="col-sm-3"><a href="http://na.lolesports.com/na-lcs/2015/spring/teams/team-impulse">E-Sports</a></div>
				</div>
				<hr>
				<!-- End of Social media -->
			<!-- End of team 2 -->
			
			
			
			<!-- Team 3 -->
				<!-- Class row that contains left, mid, and right column -->
				<div class="row">

					<!-- Left column containing team image -->
					<div class="col-md-3">
						<img class ="team-img" src="images/teamliquid.png" alt="team-liquid" width="134" height="134" draggable="false">
						<p class="founded"><span class="color">Founded:</span> January, 2015</p>
					</div>
					<!-- End of left column -->

					<!-- Middle column containing content on team -->
					<div class="col-md-5 col-sm-8">
						<h2>Team Liquid</h2>
						<!-- Content taken from 'http://na.lolesports.com/na-lcs/2015/spring/teams/team-liquid' -->
						<p>Team Curse had an unfortunate history of cracking under tournament pressure, a history which earned them the reputation of always falling to 4th place in the postseason. With a star-studded roster including former World Champion Piglet and support legend Xpecial, Curse have cast off their old name to become Team Liquid, and maybe finally break their Curse.
						</p>
					</div>
					<!-- End of middle column -->

					<!-- Right column containing team members -->
					<div class="col-md-4 col-sm-4">
						<h3 class="members">Team</h3>
						<ul class="memb_bg">
							<li>[Top]&nbsp;Quas</li>
							<li>[Jungler]&nbsp;IWDominate</li>
							<li>[Mid]&nbsp;FeniX</li>
							<li>[ADC]&nbsp;Piglet</li>
							<li>[Support]&nbsp;Xpecial</li>
						</ul>
					</div>	
					<!-- End of right column -->

				</div>

				<!-- Social media for team -->
				<br>
				<div class="row text-center">
					<div class="col-sm-3"><a href="https://twitter.com/teamliquidlol">Twitter</a></div>
					<div class="col-sm-3"><a href="https://www.facebook.com/TeamLiquidLoL">Facebook</a></div>
					<div class="col-sm-3"><a href="http://www.liquidlegends.net">Website</a></div>
					<div class="col-sm-3"><a href="http://na.lolesports.com/na-lcs/2015/spring/teams/team-liquid">E-Sports</a></div>
				</div>
				<hr>
				<!-- End of Social media -->
			<!-- End of team 3 -->
			
			
			
			<!-- Team 4 -->
				<!-- Class row that contains left, mid, and right column -->
				<div class="row">

					<!-- Left column containing team image -->
					<div class="col-md-3">
						<img class ="team-img" src="images/teamcoast.png" alt="team-coast" width="134" height="134" draggable="false">
						<p class="founded"><span class="color">Founded:</span> January, 2013</p>
					</div>
					<!-- End of left column -->

					<!-- Middle column containing content on team -->
					<div class="col-md-5 col-sm-8">
						<h2>Team Coast</h2>
						<!-- Content taken from 'http://na.lolesports.com/na-lcs/2015/spring/teams/team-coast' -->
						<p>Historically in the shadow of the older NA League of Legends teams, Team Coast found themselves relegated at the hands of Complexity, another underdog team. After a brief stint in the Challenger Series, Team Coast fought their way back into the LCS through the NA Expansion tournament, and is looking for a second chance with a new roster.
						</p>
					</div>
					<!-- End of middle column -->

					<!-- Right column containing team members -->
					<div class="col-md-4 col-sm-4">
						<h3 class="members">Team</h3>
						<ul class="memb_bg">
							<li>[Top]&nbsp;Cris</li>
							<li>[Jungler]&nbsp;Impaler</li>
							<li>[Mid]&nbsp;mancloud</li>
							<li>[ADC]&nbsp;Mash</li>
							<li>[Support]&nbsp;Sheep</li>
						</ul>
					</div>	
					<!-- End of right column -->

				</div>

				<!-- Social media for team -->
				<br>
				<div class="row text-center">
					<div class="col-sm-3"><a href="https://twitter.com/teamcoastgaming">Twitter</a></div>
					<div class="col-sm-3"><a href="https://www.facebook.com/TeamCoastGaming">Facebook</a></div>
					<div class="col-sm-3"><a href="http://teamcoast.net/">Website</a></div>
					<div class="col-sm-3"><a href="http://na.lolesports.com/na-lcs/2015/spring/teams/team-coast">E-Sports</a></div>
				</div>
				<hr>
				<!-- End of Social media -->
			<!-- End of team 4 -->
			<!-- Team 5 -->
				<!-- Class row that contains left, mid, and right column -->
				<div class="row">

					<!-- Left column containing team image -->
					<div class="col-md-3">
						<img class ="team-img" src="images/dig.png" alt="dig" width="134" height="134" draggable="false">
						<p class="founded"><span class="color">Founded:</span> September, 2011</p>
					</div>
					<!-- End of left column -->

					<!-- Middle column containing content on team -->
					<div class="col-md-5 col-sm-8">
						<h2>Team Dignitas</h2>
						<!-- Content taken from 'http://na.lolesports.com/na-lcs/2015/spring/teams/team-dignitas' -->
						<p>Dignitas has been one of the most consistent teams in competitive League of Legends, but they recently seem unable to break into the top rankings. After a shaky two seasons, questions remain if they still have what it takes to compete on the world stage.
						</p>
					</div>
					<!-- End of middle column -->

					<!-- Right column containing team members -->
					<div class="col-md-4 col-sm-4">
						<h3 class="members">Team</h3>
						<ul class="memb_bg">
							<li>[Top]&nbsp;Gamsu</li>
							<li>[Jungler]&nbsp;Azingy</li>
							<li>[Mid]&nbsp;Shiphtur</li>
							<li>[ADC]&nbsp;CoreJJ</li>
							<li>[Support]&nbsp;KiWiKiD</li>
						</ul>
					</div>	
					<!-- End of right column -->

				</div>

				<!-- Social media for team -->
				<br>
				<div class="text-center">
					<div class="col-sm-3"><a href="https://twitter.com/teamdignitas">Twitter</a></div>
					<div class="col-sm-3"><a href="https://www.facebook.com/TeamDignitas">Facebook</a></div>
					<div class="col-sm-3"><a href="http://team-dignitas.net">Website</a></div>
					<div class="col-sm-3"><a href="http://na.lolesports.com/na-lcs/2015/spring/teams/team-dignitas">E-Sports</a></div>
				</div>
				<!-- End of Social media -->
			<!-- End of team 5 -->
			<br>
			<br>
			<nav class="text-center">
					<ul class="pagination">
						<li>
							<a href="lcs.php" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="lcs.php">1</a></li>
						<li class="active"><a href="lcs2.html">2</a></li>
						<li>
							<a aria-label="Next" class="noClick">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>			
			</div><!-- End of middle content -->
			
			<?php require "footer.php" ?>
			
		  </div>
	</div><!-- /.middle -->
	
	<?php require "modal.php" ?>
	
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
