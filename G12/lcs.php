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
						<img class ="team-img" src="images/cloud9.png" alt="cloud 9" width="134" height="134" draggable="false">
						<p class="founded"><span class="color">Founded:</span> December, 2012</p>
					</div>
					<!-- End of left column -->

					<!-- Middle column containing content on team -->
					<div class="col-md-5 col-sm-8">
						<h2>Cloud 9</h2>
						<!-- Content taken from http://na.lolesports.com/na-lcs/2015/spring/teams/cloud9 -->
						<p>Cloud9 has consistently dominated the NA LCS for the past three splits, making three trips to the finals and maintaining an overall 67-17 season record, and currently are one of the strongest performing international Western teams, with two straight World Quarterfinals trips.
						</p>
					</div>
					<!-- End of middle column -->

					<!-- Right column containing team members -->
					<div class="col-md-4 col-sm-4">
						<h3 class="members">Team</h3>
						<ul class="memb_bg">
							<li>Balls (Top)</li>
							<li>Meteos (Jungler)</li>
							<li>Hai (Mid)</li>
							<li>Sneaky (ADC)</li>
							<li>LemonNation (Support)</li>
						</ul>
					</div>	
					<!-- End of right column -->

				</div>

				<!-- Social media for team -->
				<br>
				<div class="row text-center">
					<div class="col-sm-3"><img src="https://g.twimg.com/Twitter_logo_blue.png" alt="twit" width="20" height="20">&nbsp;<a class="work" href="https://twitter.com/Cloud9gg">Twitter</a></div>
					<div class="col-sm-3"><a href="https://www.facebook.com/cloud9gg">Facebook</a></div>
					<div class="col-sm-3"><img src="http://img3.wikia.nocookie.net/__cb20141216220129/leagueoflegends/images/0/01/Cloud_9_LCS_Logo.png" alt="twitter" width="25" height="25">&nbsp;<a href="http://cloud9.gg/lol-na-cloud9/">Website</a></div>
					<div class="col-sm-3"><img src="http://na.lolesports.com/sites/default/files/favicon.ico" alt="twitter" width="25" height="25">&nbsp;<a href="http://na.lolesports.com/na-lcs/2015/spring/teams/cloud9">E-Sports</a></div>
				</div>
				<hr>
				<!-- End of Social media -->
			<!-- End of team 1 -->

			
			
			<!-- Team 2 -->
				<!-- Class row that contains left, mid, and right column -->
				<div class="row">

					<!-- Left column containing team image -->
					<div class="col-md-3">
						<img class ="team-img" src="images/clg.png" alt="cloud 9" width="134" height="134" draggable="false">
						<p class="founded"><span class="color">Founded:</span> December, 2012</p>
					</div>
					<!-- End of left column -->

					<!-- Middle column containing content on team -->
					<div class="col-md-5 col-sm-8">
						<h2>Counter Logic Gaming</h2>
						<!-- Content taken from 'http://na.lolesports.com/na-lcs/2015/spring/teams/counter-logic-gaming' -->
						<p>The original League of Legends powerhouse, Counter Logic Gaming crushed all competition during the infancy of LoL esports. However, they have failed to secure major tournament victories in a long time. While each season has heralded their "new potential", CLG has consistently managed to play second fiddle to TSM and Cloud9. Once again they move into a new season with a stronger roster; can their potential be realized?
						</p>
					</div>
					<!-- End of middle column -->

					<!-- Right column containing team members -->
					<div class="col-md-4 col-sm-4">
						<h3 class="members">Team</h3>
						<ul class="memb_bg">
							<li>[Top]&nbsp;Zion Spartan</li>
							<li>[Jungler]&nbsp;Xmithie</li>
							<li>[Mid]&nbsp;Link</li>
							<li>[ADC]&nbsp;Doublelift</li>
							<li>[Support]&nbsp;Aphromoo</li>
						</ul>
					</div>	
					<!-- End of right column -->

				</div>

				<!-- Social media for team -->
				<br>
				<div class="row text-center">
					<div class="col-sm-3"><a href="https://twitter.com/clgaming">Twitter</a></div>
					<div class="col-sm-3"><a href="https://www.facebook.com/CounterLogicGaming">Facebook</a></div>
					<div class="col-sm-3"><a href="http://clgaming.net">Website</a></div>
					<div class="col-sm-3"><a href="http://na.lolesports.com/na-lcs/2015/spring/teams/counter-logic-gaming">E-Sports</a></div>
				</div>
				<hr>
				<!-- End of Social media -->
			<!-- End of team 2 -->
			
			
			
			<!-- Team 3 -->
				<!-- Class row that contains left, mid, and right column -->
				<div class="row">

					<!-- Left column containing team image -->
					<div class="col-md-3">
						<img class ="team-img" src="images/gravity.png" alt="cloud 9" width="134" height="134" draggable="false">
						<p class="founded"><span class="color">Founded:</span> December, 2012</p>
					</div>
					<!-- End of left column -->

					<!-- Middle column containing content on team -->
					<div class="col-md-5 col-sm-8">
						<h2>Gravity</h2>
						<!-- Content taken from 'http://na.lolesports.com/na-lcs/2015/spring/teams/gravity' -->
						<p>After several unsuccessful runs in Challenger, Curse Academy picked up Cop and ran through the Expansion tournament with no competition. Now going by Gravity, ex-pros Cop and Saintvicious look to make a new name for themselves, while the smaller names on the team hope to stand out and show the world they have what it takes.
						</p>
					</div>
					<!-- End of middle column -->

					<!-- Right column containing team members -->
					<div class="col-md-4 col-sm-4">
						<h3 class="members">Team</h3>
						<ul class="memb_bg">
							<li>[Top]&nbsp;Hauntzer</li>
							<li>[Jungler]&nbsp;Saintvicious</li>
							<li>[Mid]&nbsp;Keane</li>
							<li>[ADC]&nbsp;Cop</li>
							<li>[Support]&nbsp;Bunny FuFuu</li>
						</ul>
					</div>	
					<!-- End of right column -->

				</div>

				<!-- Social media for team -->
				<br>
				<div class="row text-center">
					<div class="col-sm-3"><a href="https://twitter.com/TeamGravityLoL">Twitter</a></div>
					<div class="col-sm-3"><a href="https://www.facebook.com/teamgravitygaming">Facebook</a></div>
					<div class="col-sm-3"><a href="#">Website</a></div>
					<div class="col-sm-3"><a href="http://na.lolesports.com/na-lcs/2015/spring/teams/gravity">E-Sports</a></div>
				</div>
				<hr>
				<!-- End of Social media -->
			<!-- End of team 3 -->
			
			
			
			<!-- Team 4 -->
				<!-- Class row that contains left, mid, and right column -->
				<div class="row">

					<!-- Left column containing team image -->
					<div class="col-md-3">
						<img class ="team-img" src="images/team8.png" alt="cloud 9" width="134" height="134" draggable="false">
						<p class="founded"><span class="color">Founded:</span> December, 2013</p>
					</div>
					<!-- End of left column -->

					<!-- Middle column containing content on team -->
					<div class="col-md-5 col-sm-8">
						<h2>Team 8</h2>
						<!-- Content taken from 'http://na.lolesports.com/na-lcs/2015/spring/teams/team-8' -->
						<p>Team 8 is a relatively new competitive League of Legends team who fought up in to the LCS from the NA CS, taking down Complexity to earn their spot after dominating the NACS for some time. Can they adapt to the LCS?
						</p>
					</div>
					<!-- End of middle column -->

					<!-- Right column containing team members -->
					<div class="col-md-4 col-sm-4">
						<h3 class="members">Team</h3>
						<ul class="memb_bg">
							<li>[Top]&nbsp;CaliTrlolz8</li>
							<li>[Jungler]&nbsp;Porpoise8</li>
							<li>[Mid]&nbsp;Slooshi8</li>
							<li>[ADC]&nbsp;maplestreet8</li>
							<li>[Support]&nbsp;Dodo8</li>
						</ul>
					</div>	
					<!-- End of right column -->

				</div>

				<!-- Social media for team -->
				<br>
				<div class="row text-center">
					<div class="col-sm-3"><a href="https://twitter.com/Team8Gaming">Twitter</a></div>
					<div class="col-sm-3"><a href="https://www.facebook.com/Team8eSports">Facebook</a></div>
					<div class="col-sm-3"><a href="http://altgg.com/team8">Website</a></div>
					<div class="col-sm-3"><a href="http://na.lolesports.com/na-lcs/2015/spring/teams/team-8">E-Sports</a></div>
				</div>
				<hr>
				<!-- End of Social media -->
			<!-- End of team 4 -->
			<!-- Team 5 -->
				<!-- Class row that contains left, mid, and right column -->
				<div class="row">

					<!-- Left column containing team image -->
					<div class="col-md-3">
						<img class ="team-img" src="images/tsm.png" alt="TSM" width="134" height="134" draggable="false">
						<p class="founded"><span class="color">Founded:</span> January, 2011</p>
					</div>
					<!-- End of left column -->

					<!-- Middle column containing content on team -->
					<div class="col-md-5 col-sm-8">
						<h2>Team SoloMid (TSM)</h2>
						<!-- Content taken from 'http://na.lolesports.com/na-lcs/2015/spring/teams/team-solomid' -->
						<p>Team SoloMid has had an exceptional 2014 season. A strong second place finish in the spring split, followed by an even stronger first place finish in the summer playoffs, and an admirable performance at Worlds. A weak performance against UOL at IEM Cologne has fans worried, but TSM has always remained relevant. Can they live up to the hype, or is this the year TSM lets their fans down?
						</p>
					</div>
					<!-- End of middle column -->

					<!-- Right column containing team members -->
					<div class="col-md-4 col-sm-4">
						<h3 class="members">Team</h3>
						<ul class="memb_bg">
							<li>[Top]&nbsp;Darius</li>
							<li>[Jungler]&nbsp;Santorin</li>
							<li>[Mid]&nbsp;Bjergsen</li>
							<li>[ADC]&nbsp;WildTurtle</li>
							<li>[Support]&nbsp;Lustboy</li>
						</ul>
					</div>	
					<!-- End of right column -->

				</div>

				<!-- Social media for team -->
				<br>
				<div class="text-center">
					<div class="col-sm-3"><a href="https://twitter.com/TeamSoloMid">Twitter</a></div>
					<div class="col-sm-3"><a href="https://www.facebook.com/TSMPRO">Facebook</a></div>
					<div class="col-sm-3"><a href="http://www.tsm.gg">Website</a></div>
					<div class="col-sm-3"><a href="http://na.lolesports.com/na-lcs/2015/spring/teams/team-solomid">E-Sports</a></div>
				</div>
				<!-- End of Social media -->
			<!-- End of team 5 -->
			<br>
			<br>
			<nav class="text-center">
					<ul class="pagination">
						<li>
							<a aria-label="Previous" class="noClick">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="active"><a href="lcs.html">1</a></li>
						<li><a href="lcs2.php">2</a></li>
						<li>
							<a href="lcs2.php" aria-label="Next">
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
