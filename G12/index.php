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

    <title>News</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Base style -->
    <link href="css/base.css" rel="stylesheet">
	<!-- Custom page style -->
	<link href="css/index.css" rel="stylesheet">

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
		<div class="middle-container">
				<h1><span class="h1-capital">N</span>EWS</h1>
				<!-- End of page heading -->
				
				<!-- News articles are taken from the League of Legends website -->
			<div class="middle-content">
				
				<!-- First news article -->
				<div class="row">
				<h2>Patch 5.4</h2>
				<img alt="News page" class = "col-md-6" src="images/News1.jpg" >
					<div class="col-md-6">
						<p>Welcome to patch 5.4 - the one where we follow up on patch 5.2 with some mage love. Up front: the new +120 AP item is currently slated for a future patch (soon(tm)), but this hasn't stopped us from working on the few mages that needed help in a post-DFG world. Actually, like we mentioned in the patch 5.2 foreword, the impact of DFG's removal hasn't been all that noticeable in champion performance, but there were two we knew would have identity crises (that's the plural) in the aftermath: Mordekaiser and Veigar.</p>
						<p>February 2015</p>
					</div>
				</div>
					<!-- End of first news article -->
				<hr>
				
				<!-- Second news article -->
				<div class="row">
				<h2>Featured game mode</h2>
				<img alt="News page" class = "col-md-6" src="images/News2.jpg">
					<div class="col-md-6">
						<p>We’ve just cranked open the Featured Game Mode workshop and rolled out the team’s latest creation! This time, you’re picking your ENEMIES’ champions before making the most of the champs and comps they pick out for you. Here are the main points:</p>
						<p>You pick out your enemy team.</p>
						<p>The champions you pick for your enemies will comprise your team’s combined champion pool.</p>
						<p>February 2015</p>			
					</div>
				</div>
					<!-- End of second news article -->
					
				<hr>
				
				<!-- Third news article -->
				<div class="row">
				<h2>Mixed nationality teams struggle</h2>
				<img alt="News page" class = "col-md-6" src="images/News3.jpg">
					<div class="col-md-6">
						<p>North America is learning what China discovered a month ago -- adding Koreans does not instantly make a better team. </p>
						<p>While many of the primarily Chinese teams have continued to dominate the region, the mixed nationality teams are still trying to fix their synergy problems. Internationally, Fnatic seems to be the exception to this rule, with both ReignOver and Huni preforming in each of their four games.</p>
						<p>February 2015</p>
					</div>
				</div>
					<!-- End of third news article -->
					
				<hr>
				
				<!-- Fourth news article -->
				<div class="row">
				<h2>Free Champions rotation</h2>
				<img alt="News page" class = "col-md-6" src="images/News4.jpg">
					<div class="col-md-6">
						<p>Looking to try out some new summoners? The following summoners are on free rotation!
						<p>Aatrox, Blitzcrank, Evelynn, Ezreal, Gragas, Quinn, Skarner, Syndra, Twisted Fate, and Wukong</p>
						<p>Try them out while you can!</p>
						<p>Remember, these free rotations only last for a limited time! Even if you these champions don't seam like your cup of tea, it's good to get experience with as many as possible, you never know, one of them might turn out to be your favourite!</p>
						<p>February 2015</p>
					</div>
				</div>
					<!-- End of third news article -->
					
				<hr>
				
				<!-- Fifth news article -->
				<div class="row">
				<h2>LOL Championship</h2>
				<img alt="News page" class = "col-md-6" src="images/News5.jpg">
					<div class="col-md-6">
					<p>We’ve officially reached the midpoint of the North American Collegiate Championship qualifiers! Two teams from each region (8 total) have already qualified for the NACC Playoffs, and eight more are vying for qualification through TeSPA and WellPlayed’s tournaments (starting February 13th and March 5th, respectively). If you missed some of the action, Andrew Whitmore (@glyceroll) and Cameron Gilbert (@shirokaisen) have you covered with a recap. This year is turning out to be one of the most exciting matches yet. </p>
					<p>February 2015</p>
					</div>
				</div>
				<hr><!-- End of third news article -->
					
				<!-- Page navigation bar -->
				<nav class="text-center">
					<ul class="pagination">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="active"><a href="index.html">1</a></li>
						<li><a href="index2.html">2</a></li>
						<li><a href="index3.html">3</a></li>
						<li><a href="index4.html">4</a></li>
						<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
					
			</div><!-- End of middle content -->
			
			<?php require "footer.php" ?>
			
		  </div>
	</div><!-- End of middle container -->
	
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
