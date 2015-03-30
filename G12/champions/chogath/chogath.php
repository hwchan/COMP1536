<?php
	$title = "Chogath";
	$css = "../champion.css";
	$css2 = "chogath.css";
	$active = "chogath";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Cho'gath</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Cho'gath - the Terror of the Void
				</h2>
				<h4>
				"You'd wish the world you know to end! Yeeeesssss..."
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					3
					</span>
					<span id="defence">
					7
					</span>
					<span id="ability">
					7
					</span>
					<span id="difficulty">
					5
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Cho'gath's lore
				</h3>
				<p>
				There is a place between dimensions, between worlds. To some it is known as the Outside, to others it is the Unknown. To those that truly know, however, it is called the Void. Despite its name, the Void is not an empty place, but rather the home of unspeakable things - horrors not meant for minds of men. Cho'Gath is a creature born of the Void, a thing whose true nature is so awful most will not speak its name. Its fellows have been poking at the walls that divide dimensions for a crack, a way into Runeterra, where they can visit their own personal paradise of horror upon the world. They are called the Voidborn, creatures so ancient and terrible that they have been removed from history altogether. It is rumored that the Voidborn command vast armies of unspeakable creatures on other worlds, that they were once driven from Runeterra by powerful magic lost to antiquity.
				</p>
				<p>
				If such tales are true, then the rumors that follow must be equally true - that one day, the Voidborn will return. Even now, something dark stirs in Icathia, perverting the summoning rituals of the League to allow the presence of Cho'Gath. It is an alien creature of malice and violence, a thing that causes all but the most stalwart to cringe in fear. Cho'Gath even appears to feed on its predations, growing and swelling as it gorges itself. Worse yet, the creature is intelligent, perhaps greatly so, making most wonder how such a monster could be contained. Fortunately, the power of the League's summoning has confined Cho'Gath's presence exclusively to the League of Legends. It is here that summoners use Cho'Gath's Voidborn abilities to help decide the fate of Runeterra. The Terror of the Void knows what fate it would choose for Runeterra, given half the chance.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Cho'gath's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Carnivore</h4>
				<p>
				Whenever Cho'Gath kills an enemy unit or structure, he recovers 17 + (3 × Cho'Gath's level) health and 3.25 + (0.25 × Cho'Gath's level) mana.			
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Rupture</h4>
				<p>
				Cho'Gath stamps the ground, causing a 175-radius target location to tremble for 0.625 seconds.
				</p> 
				<p>Afterwards, spikes erupt from it, dealing magic damage to and knocking up all enemies hit for 1 second. 
				</p>
				<p>
				Targets hit are slowed by 60% for 1.5 seconds after landing.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 80 / 135 / 190 / 245 / 305 <ap>(+ 100% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Feral Scream</h4>
				<p>
				Cho'Gath roars, dealing magic damage and silencing all enemies in a 60º cone area in front of him.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 75 / 125 / 175 / 225 / 275 <ap>(+ 70% AP)</ap>
				</p>
				<p>
				SILENCE: 1.5 / 1.75 / 2 / 2.25 / 2.5
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Vorpal Spikes</h4>
				<p>
				Whenever Cho'Gath performs a basic attack, he will launch spikes dealing magic damage to enemies in a line in front of him.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 20 / 35 / 50 / 65 / 80 <ap>(+ 30% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Feast</h4>
				<p>
				Cho'Gath devours target enemy, dealing true damage (1000 <ap>(+ 70% AP)</ap> true damage against minions and monsters).
				</p>
				<p>
				If Feast kills the target, Cho'Gath grows larger and gains extra health and basic attack range, stacking up to six times. 
				</p>
				<p>
				Cho'Gath loses half of these stacks, rounded up whenever he dies. (Lost stacks being rounded up, thus, kept stacks rounded down.) 
				</p>
				<p>
				If Feast is used to kill an enemy minion or neutral monster, it will refund half of the cooldown and mana cost.
				</p>
				</div>
				<div class="abilityright">
				<p>
				TRUE DAMAGE: 300 / 475 / 650 <ap>(+ 70% AP)</ap>
				</p>
				<p>
				HEALTH PER STACK: 90 / 120 / 150
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
