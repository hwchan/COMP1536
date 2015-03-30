<?php
	$title = "Yasuo";
	$css = "../champion.css";
	$css2 = "yasuo.css";
	$active = "yasuo";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Yasuo</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Yasuo - the Unforgiven
				</h2>
				<h4>
				"Death is like the wind; always by my side."
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					8
					</span>
					<span id="defence">
					4
					</span>
					<span id="ability">
					4
					</span>
					<span id="difficulty">
					10
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Yasuo's lore
				</h3>
				<p>
				Yasuo is a man of resolve, an agile swordsman who wields the wind itself to cut down his foes. But this once proud warrior has been disgraced by a false accusation and forced into a desperate fight for survival. With the world turned against him, he will do everything in his power to bring the guilty to justice and restore his honor.
				</p>
				<p>
				Once a brilliant pupil at a renowned Ionian sword school, Yasuo was the only student in a generation to master the legendary wind technique. Many believed he was destined to become a great hero. However, his fate was changed forever when Noxus invaded. Yasuo was charged with guarding an Ionian Elder, but, foolishly believing his blade alone could make the difference, left his post to join the fray. By the time he returned, the Elder had been slain.
				</p>
				<p>
				Disgraced, Yasuo willingly turned himself in, prepared to pay for his failure with his life. He was shocked, however, to find himself accused not just of dereliction, but of the murder itself. Though confused and racked with guilt, he knew the assassin would go unpunished if he did not act. Yasuo raised his sword against the school and fought his way free, knowing his treason would turn all of Ionia against him. Now truly alone for the first time in his life, he set out to find the Elder's real killer.
				</p>
				<p>
				Yasuo spent the next several years wandering the land, seeking any clue that might lead him to the murderer. All the while, he was relentlessly hunted by his former allies, continually forced to fight or die. His mission drove him ever forward, until he was tracked down by the one foe he dreaded most – his own brother, Yone.
				</p>
				<p>
				Bound by a common code of honor, the two warriors bowed and drew their swords. Silently they circled one another under the moonlight. When they finally charged forward, Yone was no match for Yasuo; with a single flash of steel he cut his brother down. Yasuo dropped his weapon and rushed to Yone's side.
				</p>
				<p>
				Overcome with emotion, he demanded to know how his own kin could think him guilty. Yone spoke: “The Elder was killed by a wind technique. Who else could it be?” Understanding swept over Yasuo as he suddenly realized why he had been accused. He professed his innocence once more and begged his brother's forgiveness. Tears streamed down Yasuo's face as his brother passed in his arms.
				</p>
				<p>
				Yasuo buried Yone under the rising sun, but could take no time to mourn. Others would be after him before long. His brother's revelation had given Yasuo newfound purpose; he now had the clue that would lead to the true killer. Swearing an oath, he gathered his belongings and, with one last look at Yone's grave, set out with the wind at his back.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Yasuo's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Way of the Wanderer</h4>
				<p>
				Yasuo's critical strike chance is doubled, but the damage dealt by his critical strikes is reduced by 10% (25% on 		
				</p>
				<p>
				At maximum Flow, the next instance of damage coming from a champion or monster against Yasuo will first convert his Flow into an absorption shield. After 1 second, if not already depleted, the shield dissipates and Yasuo loses all his Flow.
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Steel Tempest</h4>
				<p>
				Hitting an enemy with Steel Tempest grants Gathering Storm for 10 seconds that modifies Yasuo's next Steel Tempest, forming a chain of three actives.
				</p>
				<p>
				Yasuo thrusts his sword forward, dealing physical damage to all enemies in a 475-unit line.
				</p>
				<p>
				 Same as the first active.
				</p>
				<p>
				Yasuo brandishes his sword, dealing physical damage and knocking up all enemies in a 475-unit line and unleashing a whirlwind that tears forward an additional 425-units (total 900 range), dealing the same physical damage and knocking up all enemies hit. This active resets the chain.
				</p>
				<p>
				Each cast can critically strike and on-hit effects will apply to the first enemy hit (excluding the third cast's whirlwind). Additionally, each cast can be used during Sweeping Blade to change the area of effect to a 375-radius circle around Yasuo.
				</p>
				<p>
				The cooldown and cast time of Steel Tempest is reduced by 1% for every 1.72% of Yasuo's bonus attack speed.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE: 20 / 40 / 60 / 80 / 100 <ad>(+ 100% AD)</ad>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Wind Wall</h4>
				<p>
				Yasuo creates a gust of wind that travels forward to form a wall 400 units away from himself. The wall slowly drifts forward over 3.75 seconds, blocking all enemy projectiles with the exception of tower hits.
				</p>
				</div>
				<div class="abilityright">
				<p>
				WALL WIDTH: 300 / 350 / 400 / 450 / 500
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Sweeping Blade</h4>
				<p>
				Yasuo dashes 475-units in the direction of the target enemy, dealing magic damage and marking them briefly. The speed of the dash scales with Yasuo's bonus movement speed.
				</p>
				<p>
				Each cast increases the next dash's base damage by 25% for 5 seconds, up to 50% bonus damage.
				</p>
				<p>
				Yasuo cannot use Sweeping Blade on an enemy that's already been marked.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 70 / 90 / 110 / 130 / 150 <ap>(+ 60% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Last Breath</h4>
				<p>
				 Yasuo blinks to the nearest visible Airborne enemy champion to the cursor, instantly generating maximum Flow. Upon arriving, he suspends all airborne units within a 400-radius of his target in the air for 1 second.
				</p>
				<p>
				Once he lands, Yasuo deals physical damage to all nearby units and gains 50% penetration to bonus armor for 15 seconds (this affects armor from items, buffs, runes and masteries). Casting Last Breath will reset the chain/Gathering Storm procs on Steel Tempest.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE: 200 / 300 / 400 <ad>(+ 150% bonus AD)</ad>
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
