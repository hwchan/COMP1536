<?php
	$title = "Lucian";
	$css = "../champion.css";
	$css2 = "lucian.css";
	$active = "lucian";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Lucian</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Lucian - the Purifier
				</h2>
				<h4>
				"Everybody dies. Some just need a little help."
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
					7
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Lucian's lore
				</h3>
				<p>
				Lucian wields relic weapons imbued with ancient power and stands a stalwart guardian against the undead. His cold conviction never wavers, even in the face of the maddening horrors he destroys beneath his hail of purifying fire. Lucian walks alone on a grim mission: to purge the spirits of those ensnared in undeath, his eternal beloved among them.
				</p>
				<p>
				Like the twin relic weapons they wielded, Lucian and his wife Senna were carved from the same stone. Together they battled evil in Runeterra for years, bringing light to darkness and purging those taken by corruption. They were beacons of righteousness: Senna's dedication to their cause never faltered, while Lucian's kindness and warmth touched the hearts of the many lives they saved. Two parts of one whole, they were devoted and inseparable.
				</p>
				<p>
				Though Lucian and Senna witnessed terror that would break most warriors, nothing they had seen compared to the horrors wrought by the Shadow Isles. When the spectral denizens of that accursed place began to manifest across Runeterra, Lucian and Senna hunted them down wherever they appeared. It was grim work, but the fearless pair prevailed until one tragic encounter with the soul-collector Thresh. Lucian and Senna had faced such nightmarish undead before, but never one so deviously clever and cruel. As the terrible battle unfolded, Thresh sprung an unexpected ploy. To Lucian's horror, the creature tricked Senna and ensnared her soul, trapping her in a spectral prison.
				</p>
				<p>
				Nothing could bring her back. Senna was lost, and for the first time, Lucian faced his mission alone.
				</p>
				<p>
				Though the Warden had taken half of Lucian's heart, he had also created the Shadow Isles' most dangerous foe. Lucian became a man of dark determination, one who would stop at nothing to purge the undead from the face of Runeterra. In honor of Senna's memory, he took up her fallen weapon and vowed to see their mission through to the end. Now wielding both relic weapons, Lucian fights to slay the undead and cleanse the souls of the Shadow Isles. He knows that Senna's soul is lost, but never loses hope that one day he will bring her peace.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Lucian's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Lightslinger</h4>
				<p>
				After using an ability, Lucian's next basic attack within 3 seconds will shoot twice. The second shot deals damage equal <ad>30 / 40 / 50% of Lucian's Total AD</ad> (200% damage against minions and monsters), but fully applies on-hit effects, and can critically strike. If the target is killed before the second shot can go off, the second shot will automatically shoot at something else.			
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Piercing Light</h4>
				<p>
				After a 0.35 second delay, Lucian fires a laser in the direction of the target enemy, dealing physical damage to all enemies in a 1100-unit line.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE: 80 / 110 / 140 / 170 / 200 <ad>(+ 60 / 75 / 90 / 105 / 120% bonus AD)</ad>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Ardent Blaze</h4>
				<p>
				Lucian fires a shot that explodes in a cross pattern upon hitting an enemy or reaching the end of its path, dealing magic damage and marking enemies hit for 6 seconds.
				</p>
				<p>
				If Lucian damages a marked target with his basic attacks or abilities, he gains movement speed for 2 seconds. This does not consume the mark.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 60 / 100 / 140 / 180 / 220 <ap>(+ 90% AP)</ap>
				</p>
				<p>
				MOVEMENT SPEED: 40 / 45 / 50 / 55 / 60
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Relentless Pursuit</h4>
				<p>
				Lucian dashes a short distance.
				</p>
				<p>
				Relentless Pursuit's cooldown is reduced by 1 second for each of Lightslinger's strikes; the reduction per strike is doubled against enemy champions.
				</p>
				</div>
				<div class="abilityright">
				<p>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: The Culling</h4>
				<p>
				Lucian starts firing shots in the target direction for 3 seconds, each shot dealing physical damage to the first enemy it hits. The number of shots fired scales with his attack speed. The Culling deals 400% damage to minions but not monsters.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE PER SHOT: 40 / 50 / 60 <ad>(+25% bonus AD)</ad> <ap>(+10% AP)</ap>
				</p>
				<p>
				SHOTS FIRED: 7.5 + (7.5 / 9 / 10.5  × attack speed at the time of cast)
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
