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

    <title>Videos</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Base style -->
    <link href="css/base.css" rel="stylesheet">

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

		  <div class="middle-container">
			<h1><span class="h1-capital">V</span>IDEOS</h1>
			<div class="middle-content">
				<!-- Video 1 -->
				<iframe class="vid" width="560" height="315" src="https://www.youtube.com/embed/tEnsqpThaFg" allowfullscreen>
				</iframe>
				<p>Get up close and personal with your favorite champions in the League of Legends Cinematic: A Twist of Fate.</p>
				<hr>
				<!-- Video 2 -->
				<iframe class="vid" width="560" height="315" src="https://www.youtube.com/embed/vzHrjOMfHPY" allowfullscreen></iframe>
				<p>Day breaks over a landscape consecrated by blood and steel. A battle begins as a new dawn rises.</p>
				<hr>
				<!-- Video 3 -->
				<iframe class="vid" width="560" height="315" src="https://www.youtube.com/embed/IzMnCv_lPxI" allowfullscreen></iframe>
				<p>This video shows the first ever gameplay of league of legends and the introduction to the game. Also this was the first cinematic by the company.</p>
				<hr>
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
	<script src="js/base.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="js/ie10-viewport-bug-workaround.js"></script-->
  </body>
</html>
