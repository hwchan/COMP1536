<?php
	$title = "Gnar";
	$css = "../champion.css";
	$css2 = "gnar.css";
	$active = "gnar";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Gnar</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Gnar - the Missing Link
				</h2>
				<h4>
				"Gnar gada!"
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Portrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					6
					</span>
					<span id="defence">
					5
					</span>
					<span id="ability">
					5
					</span>
					<span id="difficulty">
					8
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Gnar's lore
				</h3>
				<p>
				Time marches on for most, but not Gnar. A yordle born millennia ago, Gnar was captured and trapped in true ice, frozen–quite literally–in time. Civilizations formed and fell as the prehistoric yordle vacantly stared on, but nothing–not even true ice–could confine Gnar forever. After breaking free, he wandered Runeterra until he found himself taken in by his yordle descendants. But, as they would soon discover, there’s a beast behind the boy.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Gnar's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Rage Gene</h4>
				<p>
				When Gnar reaches 100 Rage, he gains access to an alternate set of abilities. After either 5 seconds or upon casting an ability, Gnar will transform into Mega Gnar for 15 seconds while his Rage depletes. Once his Rage is exhausted, he will turn back into Mini Gnar and cannot gain Rage again for 15 seconds.			
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Boomerange Throw/Boulder Toss</h4>
				<p>
				Gnar throws his boomerang forward in a line, dealing physical damage and slowing all enemies hit for 2 seconds.
				</p>
				<p>
				Gnar throws a boulder that stops when it hits an enemy, dealing physical damage and slowing all enemies hit within 250 units.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE: 5 / 35 / 65 / 95 / 125 <ad>(+ 115% AD)</ad>
				</p>
				<p>
				SLOW: 15 / 20 / 25 / 30 / 35%
				</p>
				<p>
				PHYSICAL DAMAGE: 5 / 45 / 85 / 125 / 165 <ad>(+ 120% AD)</ad>
				</p>
				<p>
				SLOW: 15 / 20 / 25 / 30 / 35%
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Hyper/Wallop</h4>
				<p>
				Gnar's basic attacks and damaging abilities apply marks to enemy units, up a maximum of 3 marks. Upon applying the third mark, Gnar deals magic damage equal to a base amount plus a percentage of the target's maximum health, and grants Gnar 30% bonus movement speed that decays over 3 seconds.
				</p>
				<p>
				Gnar stands on his back legs before slamming his fists into the ground, dealing physical damage and stunning enemies in a large area in front of him for 1.25 seconds.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 10 / 20 / 30 / 40 / 50 <ap>(+100% AP)</ap> <hp>(+ 6 / 8 / 10 / 12 / 14% of target's maximum health)</hp>
				</p>
				<p>
				PHYSICAL DAMAGE: 25 / 45 / 65 / 85 / 105 <ad>(+ 100% AD)</ad>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Hop/Crunch</h4>
				<p>
				Gnar leaps to a location, gaining bonus attack speed for 3 seconds.
				</p>
				<p>
				Gnar leaps to a location, dealing physical damage to all nearby enemies on impact and also briefly slowing enemies hit directly.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE: 20 / 60 / 100 / 140 / 180 <hp>(+ 6% maximum health)</hp>
				</p>
				<p>
				PHYSICAL DAMAGE: 20 / 60 / 100 / 140 / 180 <hp>(+ 6% maximum health)</hp>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: GNAR!</h4>
				<p>
				Gnar knocks all nearby enemies in the specified direction, dealing physical damage and slowing them by 45% for a short duration.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE: 200 / 300 / 400 <ad>(+ 20% bonus AD)</ad> <ap>(+ 50% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">
				<hr class="hrsmall hr-white">


			</div><!--Also delete this if group is pissed -->
			</div>
		</div>			
			
<!-- END OF CONTENT -->
<!-- START OF ENDING TEMPLATE -->	
			
<?php require "../../php_template_rellink/content_after.php" ?>
