<?php
	$title = "Nasus";
	$css = "../champion.css";
	$css2 = "nasus.css";
	$active = "Nasus";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Nasus</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Nasus - the Curator of the Sands
				</h2>
				<h4>
				"The cycle of life and death continues. We will live, they will die."
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					0
					</span>
					<span id="defence">
					0
					</span>
					<span id="ability">
					0
					</span>
					<span id="difficulty">
					0
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Nasus's lore
				</h3>
				<p>
				To some, Nasus is a demigod who walks among the ruins of an ancient civilization; to others, he is nothing more than a myth. Legend speaks of his dominion over death and time. Millennia ago, he stood at the apex of Shuriman society as curator and guardian. He now roams the arid wastes, seeking to release his brother Renekton from the grip of madness.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Nasus's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Soul Eater</h4>
				<p>
				Nasus drains his foes of their spiritual energy, giving him a natural 10 / 15 / 20% life steal.		
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Siphoning Strike	</h4>
				<p>
				Nasus empowers his next basic attack within the next 10 seconds to deal bonus physical damage.
				</p>
				<p>
				If the ability deals a killing blow, Nasus gains 3 stacks of Siphoning Strike (doubled for killing champions, large minions and large monsters).
				</p>
				</div>
				<div class="abilityright">
				<p>
				BONUS DAMAGE: 30 / 50 / 70 / 90 / 110 (+total stacks of Siphoning Strike)
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Wither</h4>
				<p>
				Nasus ages his target, slowing their movement speed by 35% for 5 seconds. The target's attack speed is also slowed by half the amount, initially slowed by 17.5%. 
				</p>
				<p>
				The slow increases over the duration.
				</p>
				</div>
				<div class="abilityright">
				<p>
				ADDITIONAL MOVEMENT SLOW PER SECOND: 3 / 6 / 9 / 12 / 15%
				</p>
				<p>
				ADDITIONAL ATTACK SPEED SLOW PER SECOND: 1.5 / 3 / 4.5 / 6 / 7.5%
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Spirit Fire</h4>
				<p>
				Nasus unleashes a spirit flame at a target 400-radius area, dealing magic damage to enemies caught within. The spirit flame burns for 5 seconds afterwards, dealing magic damage each second and reducing the armor of enemies within the area.
				</p>
				</div>
				<div class="abilityright">
				<p>
				INITIAL MAGIC DAMAGE: 55 / 95 / 135 / 175 / 215 <ap>(+ 60% AP)</ap>
				</p>
				<p>
				MAGIC DAMAGE PER SECOND: 11 / 19 / 27 / 35 / 43 (+ 12% AP)
				</p>
				<p>
				ARMOR REDUCTION: 20 / 25 / 30 / 35 / 40
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Fury of the Sands	</h4>
				<p>
				Nasus summons a sandstorm to empower himself for 15 seconds, enlarging his size, gaining bonus health and increasing his attack range by 50 (175 total range). 
				</p>
				<p>
				While the storm rages, enemies within 175 range take magic damage equal to a percentage of their maximum health (max of 240 magic damage per second per enemy).
				</p>
				<p>
				Nasus converts 6.375% of the damage done by the sandstorm into bonus attack damage for himself (max of 300 bonus attack damage).
				</p>
				</div>
				<div class="abilityright">
				<p>
				BONUS HEALTH: 300 / 450 / 600
				</p>
				<p>
				MAGIC DAMAGE PER SECOND: 3 / 4 / 5% (+ 1% per 100 AP) of enemies' maximum health
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
