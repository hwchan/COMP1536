<?php
	$title = "Ryze";
	$css = "../champion.css";
	$css2 = "ryze.css";
	$active = "Ryze";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Ryze</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Ryze - the Rogue Mage
				</h2>
				<h4>
				"Let's go, let's go!"
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					2
					</span>
					<span id="defence">
					2
					</span>
					<span id="ability">
					10
					</span>
					<span id="difficulty">
					7
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Ryze's lore
				</h3>
				<p>
				There are many on Runeterra who are attracted to the study of magic or, in recent times, the emerging field of techmaturgy. For most, pursuit of such knowledge is formalized in a college or university. The halls of traditional study were never for Ryze, however, who felt a more raw and primal connection to the magic of Runeterra than those who tried to teach him. He struck out on his own as a young man to discover what already called to him. Ryze traveled the world, seeking the wisdom of powerful hermits, witches, and shamans - anyone who had something to share beyond what was taught in the city-states of Valoran. When he had learned all he could from these fonts of wisdom, Ryze turned to seek the lost, forgotten, and forbidden knowledge in the world, delving into mystical worlds where others feared to tread.
				</p>
				<p>
				Ryze's tireless searching for magical knowledge led him to an ancient form of spellcraft known as thorn magic. This art required Ryze to tattoo spells on his body, permanently infusing his being with vast arcane power and finally fulfilling his need to bond with the mystical energies of Runeterra. His travels also led him to uncover the giant indestructible scroll he now carries on his back - the purpose of the inscribed spell remains a secret only Ryze knows. He claims it is an abomination - something that he must safeguard from the world. This has piqued the curiosity of many, though no one is sure how to separate the scroll from Ryze, or if it is possible to overcome the rogue mage to do so. Since then, Ryze has joined the League of Legends to study the magical creatures and powerful will-workers that fight there, in order to complete his exploration of mystical Runeterra.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Ryze's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Arcane Mastery</h4>
				<p>
				When Ryze uses an ability, all of his other abilities have their cooldown reduced by 1 second.			
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Overload</h4>
				<p>
				Ryze gains cooldown reduction.
				</p>
				<p>
				Ryze throws a charge of pure energy at an enemy unit, dealing magic damage.
				</p>
				</div>
				<div class="abilityright">
				<p>
				COOLDOWN REDUCTION: 2 / 4 / 6 / 8 / 10%
				</p>
				<p>
				MAGIC DAMAGE: 55 / 75 / 95 / 115 / 135 <ap>(+ 40% AP)</ap> <mp>(+ 6.5% of max mana)</mp>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Rune Prison</h4>
				<p>
				Ryze traps an enemy in a cage of magic, dealing magic damage and rooting it for a short time.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 60 / 95 / 130 / 165 / 200 <ap>(+ 60% AP)</ap> <mp>(+ 4.5% of max mana)</mp>
				</p>
				<p>
				DURATION: 0.75 / 1 / 1.25 / 1.5 / 1.75
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Spell Flux</h4>
				<p>
				Ryze unleashes an orb of magical power which bounces to enemy units or himself within 200 range, up to 5 times (for a total of 6 hits). 
				</p>
				<p>
				Each bounce deals magic damage and reduces magic resistance for 5 seconds. This reduction does not stack with multiple hits. The orb has no effect on Ryze if it bounces back to himself.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 50 / 70 / 90 / 110 / 130 <ap>(+ 35% AP)</ap> <mp>(+ 1% of max mana)</mp>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Desperate Power</h4>
				<p>
				Ryze becomes supercharged, gaining spell vamp and 80 bonus flat movement speed, and causing his spells to deal 50% of their damage to other enemies in a 200 unit radius around the original target.
				</p>
				</div>
				<div class="abilityright">
				<p>
				SPELL VAMP: 15 / 20 / 25%
				</p>
				<p>
				DURATION: 5 / 6 / 7
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
