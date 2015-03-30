<?php
	$title = "Fiddlesticks";
	$css = "../champion.css";
	$css2 = "fiddlesticks.css";
	$active = "fiddlesticks";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

			<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Fiddlesticks</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Fiddlesticks - the Harbinger of Doom
				</h2>
				<h4>
				"Your bidding, master!"
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					2
					</span>
					<span id="defence">
					3
					</span>
					<span id="ability">
					9
					</span>
					<span id="difficulty">
					9
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Fiddlesticks's lore
				</h3>
				<p>
				For nearly twenty years, Fiddlesticks has stood alone in the easternmost summoning chamber of the Institute of War. Only the burning emerald light of his unearthly gaze pierces the musty darkness of his dust-covered home. It is here that the Harbinger of Doom keeps a silent vigil. His is a cautionary tale of power run amok, taught to all summoners within the League. Decades ago, there existed a powerful rune mage from Zaun - Istvaan. At the end of the fifth Rune War, he became one of the League's first summoners. Too much a prisoner to the old ways of magic, Istvaan stepped further and further outside the rules of conduct in the League. In what was ultimately his last match, his reach finally exceeded his grasp. Sealing himself inside the easternmost summoning chamber, he began incanting the most forbidden of rituals - an extra-planar summoning.
				</p>
				<p>
				What exactly happened inside that chamber remains unknown. No champion came to represent Zaun that day in Summoner's Rift. Only silence echoed back from repeated knocks on the chamber door. The first apprentice who entered was cut down immediately by an unearthly scythe. What few who followed and survived were driven mad by fear, mere husks of men gibbering about crows and death. Afraid of the evil even Istvaan could not control, the League sealed all exits to the chamber, hoping they could contain what they could not destroy. Years went by, but the wooden figure within never moved save to slay any foolish enough to enter. Seeing no recourse to reclaim the chamber, the Council instead devised a use for Fiddlesticks: executioner. While he comes to life and seemingly abides by the rules of summoning in the Fields of Justice, what he awaits inside his chamber is unknown. His unmoving face yields no clues, and his scythe stands ready to strike down any who stand before him.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Fiddlesticks's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Dread</h4>
				<p>
				Dealing magic damage or casting Terrify applies Dread to enemies for 2.5 seconds, reducing their magic resistance by 10.				
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Terrify</h4>
				<p>
				Fiddlesticks terrifies the target enemy unit, causing it to turn and flee for a short duration.
				</p>
				</div>
				<div class="abilityright">
				<p>
				DURATION: 1.25 / 1.5 / 1.75 / 2 / 2.25
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Drain</h4>
				<p>
				Fiddlesticks creates a leash on a target enemy and channels for up to 5 seconds, dealing magic damage each second and healing himself for a percentage of the damage done. 
				</p>
				<p>
				If the target moves further than 650 range of Fiddlesticks while leashed, he will stop channeling.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE PER SECOND: 60 / 90 / 120 / 150 / 180 <ap>(+ 45% AP)</ap>
				</p>
				<p>
				HEAL FROM DAMAGE RATIO: 60 / 65 / 70 / 75 / 80%
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Dark Windy</h4>
				<p>
				Fiddlesticks sends a crow that bounces between enemy units within 450 range up to 4 times prioritizing targets not yet hit, dealing magic damage with each strike and Silence icon silencing them for 1.25 seconds once. 
				</p>
				<p>
				Minions and monsters take 50% additional damage.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE PER BOUNCE: 65 / 85 / 105 / 125 / 145 <ap>(+ 45% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Crowstorm</h4>
				<p>
				After channeling for 1.5 seconds, Fiddlesticks teleports to nearby target location with a murder of crows flying wildly around him for 5 seconds, dealing magic damage to all enemy units within 600 range each second.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE PER SECOND: 125 / 225 / 325 <ap>(+ 45% AP)</ap>
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
