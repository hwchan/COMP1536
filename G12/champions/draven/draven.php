<?php
	$title = "Draven";
	$css = "../champion.css";
	$css2 = "draven.css";
	$active = "draven";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

		  <div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Draven</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Draven - the Glorious Executioner
				</h2>
				<h4>
				"Welcome to the League of Draven."
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					9
					</span>
					<span id="defence">
					3
					</span>
					<span id="ability">
					1
					</span>
					<span id="difficulty">
					8
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Draven's lore
				</h3>
				<p>
				Unlike his brother Darius, victory in battle was never enough for Draven. He craved recognition, acclaim, and glory. He first sought greatness in the Noxian military, but his flair for the dramatic went severely underappreciated. Thirsting for a method to share "Draven" with the world, he turned his attention to the prison system. There he carved out the celebrity he desired by turning the tedious affair of executions into a premiere spectacle.
				</p>
				<p>
				At Draven's first execution, he shocked onlookers when he ordered the doomed prisoner to run for dear life. Just before the man managed to flee from sight, Draven brought him down with a flawless throw of his axe. Soon, all Draven's executions became a gauntlet through which Noxian prisoners raced for a final chance at life. He used this trial as his own personal stage, and turned executions into a leading form of entertainment. He rallied onlookers into a frenzy, while desperate prisoners scrambled to evade him. They never succeeded. Rejecting the solemn, black uniforms of Noxian executioners, Draven donned bright outfits and developed flashy signature moves to distinguish himself. Crowds flocked to see Draven in action, and tales of his performances spread quickly. As his popularity grew, so did his already-inflated ego. He belonged at the center of the entire world.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Draven's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: League of Draven</h4>
				<p>
				When Draven catches a Spinning Axe, kills a minion or monster or destroys a tower, he gains one stack of Adoration. When Draven kills an enemy champion, he consumes all of his Adoration stacks and gains 50 + (2 × per stack consumed) gold. Draven loses half of his Adoration stacks upon death.
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Spinning Axe</h4>
				<p>
				Draven starts spinning his axe, making his next attack within 5.8 seconds deal bonus physical damage equal to a percentage of his total attack damage.
				</p>
				<p>
				This axe will ricochet off the target high up into the air, landing 2 seconds later at a location determined by Draven's current movement direction and speed. If Draven catches it, Spinning Axe will be applied to his next attack and he gains a stack of Adoration.
				</p>
				<p>
				Draven can hold up to two Spinning Axes spinning at once.
				</p>
				</div>
				<div class="abilityright">
				<p>
				BONUS PHYSICAL DAMAGE: <ad>45 / 55 / 65 / 75 / 85% AD</ad>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Blood Rush</h4>
				<p>
				Draven gains increased movement speed for 1.5 seconds and increased attack speed for 3 seconds. The movement speed bonus decreases rapidly over its duration. Catching a Spinning Axe will refresh Blood Rush's cooldown.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MOVEMENT SPEED: 40 / 45 / 50 / 55 / 60%
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
				<h4>E: Stand Aside</h4>
				<p>
				Draven throws his axes in a line. Enemies hit take physical damage, are knocked aside, and are slowed for 2 seconds afterwards.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE: 70 / 105 / 140 / 175 / 210 <ad>(+ 50% bonus AD)</ad>
				</p>
				<p>
				SLOW: 20 / 25 / 30 / 35 / 40%
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Whirling Death</h4>
				<p>
				Draven hurls two massive axes in a given direction, dealing physical damage to every enemy struck.
				</p>
				<p>
				Upon reaching the edge of the map, striking an enemy champion or upon the reactivation of Whirling Death, the axes will slowly come to a stop before changing direction and returning to Draven, dealing the same damage to every enemy struck on the way back.
				</p>
				<p>
				Whirling Death deals 8% less damage for each unit hit, down to a minimum of 40%. The damage reduction resets when the axes reverse direction.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE (ONE HIT): 175 / 275 / 375 <ad>(+ 110% bonus AD)</ad>
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
