<?php
	$title = "Jinx";
	$css = "../champion.css";
	$css2 = "jinx.css";
	$active = "jinx";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Jinx</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Jinx - the Loose Cannon
				</h2>
				<h4>
				"Rules are made to be broken... like buildings! Or people!"
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Jinx Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					9
					</span>
					<span id="defence">
					2
					</span>
					<span id="ability">
					4
					</span>
					<span id="difficulty">
					6
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Jinx's lore
				</h3>
				<p>Jinx lives to wreak havoc without a thought for consequence, leaving a trail of mayhem and panic in her wake. A manic and impulsive criminal, she despises nothing more than boredom, and gleefully unleashes her own volatile brand of pandemonium to the one place she finds dullest: Piltover. With an arsenal of deadly toys, she unleashes the brightest explosions and loudest blasts - all the better to shock and surprise the hapless authorities. Always just out of the law's reach, Jinx's favorite game is to toy with Piltover's finest - especially Vi.
				</p>
				<p>
				Piltover had long been known as the City of Progress, a place where peace and order reigned. That serenity was challenged when a new kind of criminal arrived, the likes of whom had never been seen. This mysterious outlaw unleashed a series of warped and destructive capers that endangered the entire city, and left its people reeling from the worst crime spree in Piltover's history.
				</p>
				<p>
				As the string of crimes without rhyme or reason hit the city, sightings of the lawbreaker emerged. Though the young woman's origins were a mystery, some saw traces of Piltover hextech in her firearms, while others described the street fashions of Zaun in her dress. Because her arrival always brought trouble with it, those who crossed her path soon gave her a name: Jinx.
				</p>
				<p>
				Jinx's rampage escalated.  Caitlyn - the sheriff of Piltover - responded by declaring a state of emergency and organizing a city-wide manhunt. In typical Jinx fashion, the criminal marked the Piltover treasury, the city's most secure building, with a direct challenge to its most abrasive officer. With a caricature of Vi's face splashed across the treasury's facade, and with a time and date of her supposed raid, Jinx was openly daring the enforcer to stop her from robbing it.
				</p>
				<p>
				Determined to put the troublemaker behind bars, Vi watched and waited outside the treasury until Jinx's time had finally come. True to her scrawled promise, the smiling menace showed her face. Knowing this was her chance to capture the outlaw, Vi gave chase into the building's interior. She smashed through wall after wall to chase down Jinx, who giggled as she lit up the evacuated treasury with fiery explosions. Vi finally cornered the criminal inside the vault, but Jinx wasn't done just yet. With a maniacal laugh, she fired a barrage of rockets, bringing the entire building down upon them both.
				</p>
				<p>
				When Vi finally crawled out of the ruins, the battered enforcer found no trace of Jinx. Adding insult to injury, not a single ounce of gold had been taken from the ruined vault. Instead, the criminal left a parting message to her favorite officer of the law - a challenge only now visible through the gaping opening in Piltover's skyline. The lights of the city spelled out a simple taunt: you'll never catch me. As Vi read the message, she heard the distant laughter of her new nemesis, and the city plunged into utter darkness for the very first time.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Jinx's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="Jinx Potrait" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Get excited!</h4>
				<p>
				Whenever an enemy champion or structure that Jinx has dealt damage to within the last 3 seconds is killed or destroyed, she gains 175% movement speed that decays over 4 seconds.
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="Annie Potrait" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Switcheroo!</h4>
				<p>
				POW-POW: Jinx's basic attacks grant bonus attack speed for 2.5 seconds, stacking up to 3 times, with the first stack granting twice as much attack speed. The stacks decay one at a time when she stops attacking. Switching to Fishbones, the Rocket Launcher Fishbones will not clear any active stacks, but they will not grant attack speed after her first attack.
				</p>
				<p>
				FISHBONES: Jinx, at the cost of 20 mana per attack, gains bonus attack range, also dealing 10% AD bonus damage and making her basic attacks splash. The splash deals full damage to all enemies in a 150-radius area, and the bonus damage to her target and the splash damage both scale additively with critical strikes.
				</p>
				</div>
				<div class="abilityright">
				<p>
				ATTACK SPEED PER STACK: 15 / 27.5 / 40 / 52.5 / 65%
				</p>
				BONUS RANGE: 75 / 100 / 125 / 150 / 175
				<p>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="Annie Potrait" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: ZAP!</h4>
				<p>
				After a short delay, Jinx fires a shock blast that deals physical damage to the first enemy hit, granting sight and Slow icon slowing the unit for 2 seconds.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE: 10 / 60 / 110 / 160 / 210 <ad>(+ 140% AD)</ad>
				</p>
				<p>
				SLOW: 30 / 40 / 50 / 60 / 70%
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="Annie Potrait" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Flame chompers!</h4>
				<p>
				Jinx tosses out 3 chompers that, after a 0.7 seconds arm time, explode on contact with enemy champions dealing magic damage over 1.5 seconds to enemies within 50-unit area.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 80 / 135 / 190 / 245 / 300 <ap>(+ 100% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="Annie Potrait" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Super mega death rocket!</h4>
				<p>
				Jinx fires a rocket that travels in a line, exploding on a 225-range area around the first enemy champion hit. The primary target of the explosion takes full damage, while nearby enemies take 80% of the total damage.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MINIMUM PHYSICAL DAMAGE: 125 / 175 / 225 <ad>(+ 50% bonus AD)</ad> <hp>(+ 25 / 30 / 35% of enemies' missing health)</hp>
				</p>
				MAXIMUM PHYSICAL DAMAGE: 250 / 350 / 450 <ad>(+ 100% bonus AD)</ad> <hp>(+ 25 / 30 / 35% of enemies' missing health)</hp>
				<p>
				</p>
				</div>
				</div>

				<hr class="hrsmall hr-white">


			</div><!--Also delete this if group is pissed -->
			</div>			
			
<!-- END OF CONTENT -->
<!-- START OF ENDING TEMPLATE -->	
			
<?php require "../../php_template_rellink/content_after.php" ?>
