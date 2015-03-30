<?php
	$title = "Garen";
	$css = "../champion.css";
	$css2 = "garen.css";
	$active = "garen";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Garen</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Garen - the Might of Demacia
				</h2>
				<h4>
				"My heart and sword always for Demacia."
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Portrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					7
					</span>
					<span id="defence">
					7
					</span>
					<span id="ability">
					1
					</span>
					<span id="difficulty">
					5
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Garen's lore
				</h3>
				<p>
				Throughout Valoran, the resolve of Demacia's military is alternately celebrated or despised, but always respected. Their "zero tolerance" moral code is strictly upheld by civilians and soldiers alike. In combat, this means Demacian troops may not make excuses, flee, or surrender by example. Garen, the valiant warrior who bears the title "the Might of Demacia", is the paradigm to which these leaders are compared. Thousands of great heroes have risen and fallen on the bloody battlefields between Demacia and its preeminent rival, Noxus. It was beneath their mighty banners of war that Garen first met steel with Katarina, the Sinister Blade. The infantrymen who beheld this event (and survived) commented that it seemed as though the two were locked in a mortal waltz set against a symphony of clashing blades.
				</p>
				<p>
				Garen, the pride of the Demacian military and the leader of the Dauntless Vanguard, returned from this battle breathless for the first time in his career, though some speculate this was due to reasons other than exhaustion. The plausibility of these rumors was bolstered when, in every instance thereafter, Garen seized the opportunity to encounter the Sinister Blade again. A paragon of Demacian ethic, Garen never entertained such allegations, for he knew others couldn't understand. Even simply the pursuit of a worthy opponent on the battlefield is, to a true warrior, the reason to rise each morning. The promise of one, particularly one so beautifully and diametrically opposed, is the validation of his existence.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Garen's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Perseverence</h4>
				<p>
				Garen will regenerate <hp>0.4 / 0.8 / 2.0% of his maximum health</hp> every second if he has not been hit with an enemy ability or taken damage from any source (excluding minions) in the last 9 / 6 / 4 seconds. 			
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Decisive Strike</h4>
				<p>
				Garen breaks free from all slows affecting him and gains 35% movement speed for a few seconds. Additionally, his next basic attack within 4.5 seconds will deal additional physical damage and will silence his target.
				</p>
				</div>
				<div class="abilityright">
				<p>
				BONUS PHYSICAL DAMAGE: 30 / 55 / 80 / 105 / 130 <ad>(+ 40% AD)</ad>
				</p>
				<p>
				MOVEMENT SPEED DURATION: 1.5 / 2.25 / 3 / 3.75 / 4.5
				</p>
				<p>
				SILENCE DURATION: 1.5 / 1.75 / 2 / 2.25 / 2.5
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Courage</h4>
				<p>
				Garen's bonus armor and magic resistance are increased by 20%.
				</p>
				<p>
				Garen gains a defensive shield for a few seconds, reducing incoming damage by 30% and granting 30% crowd control reduction for the duration.
				</p>
				</div>
				<div class="abilityright">
				<p>
				DURATION: 2 / 3 / 4 / 5 / 6
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Judgment</h4>
				<p>
				Garen rapidly spins his sword around his body for 3 seconds, dealing physical damage each second to enemies within range. Minions take 75% damage from Judgment. Garen ignores unit collision while spinning, but moves 20% slower when traveling through minions.
				</p>
				<p>
				Judgment can critically strike, multiplying the total AD component by (Garen's critical strike damage modifier − 50%).
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE PER SECOND: 20 / 45 / 70 / 95 / 120 <ad>(+ 70 / 80 / 90 / 100 / 110% AD)</ad>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Demacian Justice</h4>
				<p>
				Garen calls upon the might of Demacia to attempt to execute an enemy champion, dealing magic damage plus additional damage based on his target's missing health.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: <hp>175 / 350 / 525 (+ 28.57 / 33.33 / 40% of target's missing health)</hp>
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
