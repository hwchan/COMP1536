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
	<?php
		session_start();
		require "alert.php";
	?>
	<div class="container">
	
		<?php
			# Gets the current page name to set the class="active" attribute
			$active = basename(__FILE__, '.php'); ;
			require "nav.php";
		?>
		
		<!-- Page heading -->
		<div class="middle-container">
				<h1><span class="h1-capital">N</span>EWS</h1>
				
			<!-- News articles are taken from the League of Legends website -->
			<div class="middle-content">
				
				<!-- Include news articles -->
				<?php 	
					if (isset($_GET['p']) && $_GET['p']=="news2") {
						$activeNews = 2;
						include('news2.php');
					} else if (isset($_GET['p']) && $_GET['p']=="news3") {
						$activeNews = 3;
						include('news3.php');
					} else if (isset($_GET['p']) && $_GET['p']=="news4") {
						$activeNews = 4;
						include('news4.php');
					} else {
						$activeNews = 1;
						include('news1.php');
					}
				?>
					
				<!-- Page navigation bar -->
				<nav class="text-center">
					<ul class="pagination">
						<li>
							<a href="index.php?p=news1" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li <?php echo $activeNews==1 ? "class='active'" : "" ?>><a href="index.php?p=news1">1</a></li>
						<li <?php echo $activeNews==2 ? "class='active'" : "" ?>><a href="index.php?p=news2">2</a></li>
						<li <?php echo $activeNews==3 ? "class='active'" : "" ?>><a href="index.php?p=news3">3</a></li>
						<li <?php echo $activeNews==4 ? "class='active'" : "" ?>><a href="index.php?p=news4">4</a></li>
						<li>
							<a href="index.php?p=news4" aria-label="Next">
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
