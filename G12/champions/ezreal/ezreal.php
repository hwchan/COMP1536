<?php
	$title = "Ezreal";
	$css = "../champion.css";
	$css2 = "ezreal.css";
	$active = "ezreal";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

 <div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Ezreal</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Ezreal - the Prodigal Explorer
				</h2>
				<h4>
				"Time for a true display of skill!"
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					7
					</span>
					<span id="defence">
					2
					</span>
					<span id="ability">
					6
					</span>
					<span id="difficulty">
					7
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Ezreal's lore
				</h3>
				<p>
				The intrepid young adventurer Ezreal has explored some of the most remote and abandoned locations on Runeterra. During an expedition to the buried ruins of ancient Shurima, he recovered an amulet of incredible mystical power. Likely constructed to be worn by one of the Ascended, the enormous talisman nonetheless fit snugly upon his arm, amplifying his raw sorcerous skill to such an extent that he's gained the reputation of a hero, much to his embarrassment.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Ezreal's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Rising Spell Force</h4>
				<p>
				Hitting a target with any of Ezreal's abilities increases his own attack speed by 10%. 
				</p>
				<p>
				This effect lasts for 6 seconds and stacks up to 5 times.
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Mysic Shot</h4>
				<p>
				Ezreal fires a bolt of energy in a line that will deal physical damage and apply on-hit effects to the first enemy it hits. 
				</p>
				<p>
				If it strikes an enemy unit, all of Ezreal's cooldowns will be reduced by 1 second.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE: 35 / 55 / 75 / 95 / 115 <ad>(+ 110% AD)</ad> <ap>(+ 40% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Essence Flux</h4>
				<p>
				Ezreal fires a wave of energy in a line. Any enemy champions it passes through are dealt magic damage, while any allied champions it travels through have their attack speed increased for 5 seconds.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 70 / 115 / 160 / 205 / 250 <ap>(+ 80% AP)</ap>
				</p>
				<p>
				ATTACK SPEED: 20 / 25 / 30 / 35 / 40%
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Arcane Shift</h4>
				<p>
				Ezreal instantly teleports to a nearby target location and fires a homing bolt at the nearest enemy unit within 750 range, dealing magic damage to it.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 75 / 125 / 175 / 225 / 275 <ap>(+ 75% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Trueshot Barrage</h4>
				<p>
				After gathering energy for 1 second, Ezreal fires a powerful, broad energy missile that travels in a line across the whole map dealing magic damage to each enemy unit it passes through. 
				</p>
				<p>
				It will deal 10% less damage for each subsequent target hit, down to a minimum of 30% damage dealt.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 350 / 500 / 650 <ad>(+ 100% Bonus AD)</ad> <ap>(+ 90% AP)</ap>
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
