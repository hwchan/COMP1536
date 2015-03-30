<?php
	$title = "Katarina";
	$css = "../champion.css";
	$css2 = "katarina.css";
	$active = "katarina";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Katarina</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Katarina - the Sinister Blade
				</h2>
				<h4>
				"Violence solves everything!"
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					4
					</span>
					<span id="defence">
					3
					</span>
					<span id="ability">
					9
					</span>
					<span id="difficulty">
					8
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Katarina's lore
				</h3>
				<p>
				Driven by an intense killer instinct, Katarina uses her talents as an assassin for the glory of Noxus, and the continued elevation of her family. While her fervor drives her to ever-greater feats, it can sometimes lead her astray.
				</p>
				<p>
				From childhood, Katarina displayed a natural gift for combat. As the daughter of a prominent Noxian general, many paths were open to her, but she rejected them all for the path of the blade. Rigorously trained by the finest assassins in Noxus, her father the best among them, it was not long before Katarina demanded her first assignment. The task they gave her was aggravatingly simple: assassinate a low-ranking Demacian officer. As she set to her work infiltrating the enemy camp, Katarina discovered an opportunity too tantalizing to pass by – the arrival of a Demacian General. Stalking him to his tent, she quietly dispatched his guards and slit his throat. Pleased with her impressive kill, she disappeared into the night. Katarina's elation faded the next day when her original objective, the Demacian officer, led his forces to ambush unprepared Noxian soldiers. Though the Noxians fought valiantly, they suffered heavy casualties. Furious at her mistake, Katarina set off to complete her original task. Returning to the camp, she spied her now heavily guarded target and realized a stealthy kill was no longer possible. Drawing her blades, Katarina swore the officer would die, no matter the cost. She leapt into battle, unleashing a whirlwind of steel. One by one blades flashed and guards fell, each strike bringing her one step closer to the officer. A final thrown dagger restored her honor. Bloody and bruised, Katarina barely escaped the Demacian forces, and returned to Noxus a changed woman. The scar she earned that night now serves as a constant reminder that she must never let passion interfere with duty.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Katarina's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="Katarina Potrait" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Voracity</h4>
				<p>
				Whenever an enemy champion dies within 3 seconds of Katarina dealing damage to them, her cooldowns will be reduced by 15 seconds.			
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="Katarina Potrait" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Bouncing Blades</h4>
				<p>
				Katarina throws a dagger that bounces from enemy to enemy, dealing magic damage and marking each enemy hit for 4 seconds. Bouncing Blades hits a total of 5 unique targets (4 bounces), each striking the closest next target. Each subsequent hit deals 10% less damage.
				</p>
				<p>
				Striking a marked target with an ability or basic attack will consume the mark on the target and deal additional magic damage.
				</p>
				</div>
				<div class="abilityright">
				<p>
				DAGGER MAGIC DAMAGE: 60 / 85 / 110 / 135 / 160 <ap>(+ 45% AP)</ap>
				</p>
				<p>
				MARK MAGIC DAMAGE: 15 / 30 / 45 / 60 / 75 <ap>(+ 15% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="Katarina Potrait" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Sinister Steel</h4>
				<p>
				Katarina whirls her daggers, instantly dealing magic damage to all nearby enemies. If she damages an enemy champion, she gains movement speed for 1 second.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 40 / 75 / 110 / 145 / 180 <ap>(+ 25% AP)</ap> <ad>(+ 60% bonus AD)</ad>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="Katarina Potrait" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Shunpo</h4>
				<p>
				Katarina teleports to target unit and gains 15% damage reduction for 1.5 seconds. If the target is an enemy, the target takes magic damage.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 60 / 85 / 110 / 135 / 160 <ap>(+ 40% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="Katarina Potrait" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Death Lotus</h4>
				<p>
				Katarina rapidly spins in place and channels for 2.5 seconds, throwing a dagger every 0.25 seconds at every enemy champion within range, up to a maximum of 3 at a time. Each dagger deals magic damage and applies grievous wounds for 3 seconds.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE PER DAGGER: 35 / 55 / 75 <ap>(+ 25% AP)</ap> <ad>(+ 37.5% bonus AD)</ad>
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
