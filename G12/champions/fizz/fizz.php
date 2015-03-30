<?php
	$title = "Fizz";
	$css = "../champion.css";
	$css2 = "fizz.css";
	$active = "fizz";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

		  <div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Fizz</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Fizz - the Tidal Trickster
				</h2>
				<h4>
				"Let me at 'em!"
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					6
					</span>
					<span id="defence">
					4
					</span>
					<span id="ability">
					7
					</span>
					<span id="difficulty">
					6
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Fizz's lore
				</h3>
				<p>
				Centuries ago, an ancient water-dwelling race built a hidden city beneath a mountain in the sea. Though these creatures had their enemies, the city was an impenetrable fortress, and, in the safety it provided, they grew complacent. Fizz, however, harbored a curious spirit that could not be satisfied living so cushioned a life. Unable to resist the allure of danger, Fizz had a habit of sneaking out of the city to look for trouble. In his many adventures he grew to be a powerful fighter with a sharp cleverness that let him skirt danger with ease. One day Fizz returned to find the city abandoned: his people had vanished, leaving Fizz without a clue to explain their disappearance. With nothing left in the city to keep him, Fizz salvaged an enchanted seastone trident from the ruins and set out alone.
				</p>
				<p>
				Fizz wandered the ocean in search of his people for years, using the skills he'd learned during his adventures as a young boy to survive. Finally, Fizz discovered the port of Bilgewater. He was fascinated with the existence of life above the water and could not resist exploring the island. In his endless curiosity, Fizz inadvertently meddled in the affairs of the humans who lived there, and his presence did not go unnoticed. His mischief angered many residents who eventually sought to capture or kill him. Fizz found himself cornered, and he prepared to return to the sea despite the fondness he'd come to hold for Bilgewater. As he stood at the docks, a massive dragon-shark attacked the port. Fizz defeated the beast, using his resourcefulness and knowledge of the creature's weaknesses to his advantage. Having earned the gratitude and respect of the humans, Fizz decided to stay in Bilgewater. To further serve his new home, he joined the League of Legends.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Fizz's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Nimble Fighter</h4>
				<p>
				Fizz's dexterity allows him to ignore unit collision and take 4 / 6 / 8 / 10 / 12 / 14 reduced physical damage from autoattacks.		
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Urchin Strike</h4>
				<p>
				ACTIVE: Fizz dashes a fixed distance in the direction of the target enemy unit, dealing <ad>100% AD</ad> physical damage plus bonus magic damage. The physical damage applies on-hit effects and the magic damage applies spell effects.
				</p>
				</div>
				<div class="abilityright">
				<p>
				TOTAL DAMAGE: 10 / 25 / 40 / 55 / 70 <ap>(+ 30% AP)</ap> <ad>(+ 100% AD)</ad>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Seastone Trident</h4>
				<p>
				Fizz's autoattacks rend his target, dealing magic damage over 3 seconds.
				</p>
				<p>
				For the next 5 seconds, Fizz's autoattacks deal bonus magic damage.
				</p>
				</div>
				<div class="abilityright">
				<p>
				TOTAL MAGIC DAMAGE: 20 / 30 / 40 / 50 / 60 <ap>(+ 45% AP)</ap>
				</p>
				<p>
				BONUS MAGIC DAMAGE: <hp>10 / 20 / 30 / 40 / 50 (+ 4 / 5 / 6 / 7 / 8% of target's missing health)</hp>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Playfull/Trickster</h4>
				<p>
				Fizz hops onto his trident in a nearby location, becoming untargetable for 0.75 seconds and gaining the ability to use Trickster for no additional cost before the effect ends.
				</p>
				<p>
				If Fizz does not use Trickster, he will slam the ground below him, dealing magic damage and slowing nearby enemies within 330 units for 2 seconds.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 70 / 120 / 170 / 220 / 270 <ap>(+ 75% AP)</ap>
				</p>
				<p>
				SLOW: 40 / 45 / 50 / 55 / 60%
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Chum the Waters</h4>
				<p>
				Fizz throws a fish in a line that will bind itself onto the first enemy champion it hits, slowing them for 1.5 seconds and increasing Fizz's damage against them by 20% for 6 seconds, excluding Chum the Waters's damage. A shark will come out from the earth to eat the fish after 1.5 seconds, regardless of position.
				</p>
				<p>
				If a champion has the fish attached to them, the shark will knock them up for 1 second. All other enemies within 250-range are knocked away from the shark. All enemies hit are dealt magic damage and are slowed for 1.5 seconds afterwards.
				</p>
				</div>
				<div class="abilityright">
				<p>
				SLOW: 50 / 60 / 70%
				</p>
				<p>
				MAGIC DAMAGE: 200 / 325 / 450 <ap>(+ 100% AP)</ap>
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
