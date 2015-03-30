<?php
	$title = "Tryndamere";
	$css = "../champion.css";
	$css2 = "tryndamere.css";
	$active = "Tryndamere";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Tryndamere</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Tryndamere - the Barbarian King
				</h2>
				<h4>
				"This'll be a slaughter."
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					10
					</span>
					<span id="defence">
					5
					</span>
					<span id="ability">
					2
					</span>
					<span id="difficulty">
					4
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Tryndamere's lore
				</h3>
				<p>
				Fueled by his unbridled fury and rage, Tryndamere cuts his way through the tundra, mastering the art of battle by challenging the Freljord's greatest warriors. The wrathful barbarian seeks revenge on the one who decimated his clan and strikes down all those who stand between him and his final retribution.
				</p>
				<p>
				Struggling to survive in the harsh, frostbitten Freljord, the young Tryndamere and his people warred with other tribes over the scarce resources of the land. One such battle changed his life forever. Raiders ambushed Tryndamere's clan in the dead of night, and though his warriors were able to push the first wave of attackers back, they weren't prepared for the dark figure that next stepped forth. He wielded a cruel, living sword, and inspired an unhinged bloodlust in the invaders with his unearthly magic. Tryndamere's tribe was overrun within moments. With no hope of defeating the enigmatic being, Tryndamere threw himself at certain death. The dark figure swatted him aside, mortally wounding the young barbarian.
				</p>
				<p>
				Tryndamere saw death and destruction engulf his home as his life slipped away. No one was left standing - only the screams of the dying remained. Unable to surrender to death, Tryndamere gave in fully to his wrath. His blood boiled and his anger consumed him, banishing his mortality. He staggered to his feet - barely able to take hold of his sword - steeling himself for the decisive confrontation with the shadowy being. But the dark figure did not even lift his blade, and instead gave Tryndamere a knowing smile as he withdrew into the shadows. That was the last time the barbarian ever saw his nemesis.
				</p>
				<p>
				A man robbed of his home and his people, Tryndamere wandered across the Freljord for years, vowing to forge himself into a brutal instrument of revenge. He visited all the tribes in the frozen wastes, besting each of their warriors until there were none left to challenge. In doing so, he mastered the barbarian ways of war and harnessed his anger as a force to be reckoned with. With sword in hand and rage in his heart, he is now on an undying quest for vengeance against the one who destroyed the life he once knew.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Tryndamere's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Battle Fury</h4>
				<p>
				Tryndamere receives 0.35% bonus critical strike chance per point of FURY he currently has, for a maximum of 35% critical chance at 100 FURY.				
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Bloodlust</h4>
				<p>
				Tryndamere permanently gains increased attack damage equal to a base amount plus a further bonus per 1% of health he is missing.
				</p>
				<p>
				Tryndamere consumes all of his current FURY, restoring health equal to a base amount plus extra health per point of FURY consumed.
				</p>
				</div>
				<div class="abilityright">
				<p>
				ATTACK DAMAGE BONUS: 5 / 10 / 15 / 20 / 25 + 0.15 / 0.2 / 0.25 / 0.3 / 0.35 per 1% of missing health
				</p>
				<p>
				HEAL: 30 / 40 / 50 / 60 / 70 <ap>(+ 30% AP)</ap> + 0.5 / 0.95 / 1.4 / 1.85 / 2.3 <ap>(+ 1.2% AP)</ap> per Fury
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Mocking Shout</h4>
				<p>
				Decreases surrounding enemy champions' attack damage. Enemies with their backs turned to Tryndamere also have their movement speed slowed for 4 seconds.
				</p>
				</div>
				<div class="abilityright">
				<p>
				ATTACK DAMAGE REDUCTION: 20 / 35 / 50 / 65 / 80
				</p>
				<p>
				SLOW: 30 / 37.5 / 45 / 52.5 / 60%
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Spinning Slash</h4>
				<p>
				Tryndamere whirls his sword and dashes to a target location, dealing physical damage to enemies in his path and granting 2 FURY per enemy hit. If he kills a unit, he additionally gains 10 more FURY.
				</p>
				<p>
				The cooldown is reduced by 1 seconds whenever Tryndamere critically strikes (doubled against champions).
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE: 70 / 100 / 130 / 160 / 190 <ap>(+ 100% AP)</ap> <ad>(+ 120% bonus AD)</ad>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Undying Rage</h4>
				<p>
				After a 0.5 second delay, Tryndamere instantly receives FURY and becomes immune to death for 5 seconds during which his health cannot fall below 1. This move is usable even when under the effects of hard crowd control.
				</p>
				<p>
				If Tryndamere is below 3% health when Undying Rage ends, it will heal him to 3%.
				</p>
				</div>
				<div class="abilityright">
				<p>
				FURY GAINED: 50 / 75 / 100
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
