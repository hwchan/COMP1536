<?php
	$title = "Masteryi";
	$css = "../champion.css";
	$css2 = "masteryi.css";
	$active = "masteryi";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Mater Yi</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Mater Yi - the Wuju Bladesman
				</h2>
				<h4>
				"My blade is yours."
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					10
					</span>
					<span id="defence">
					4
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
				Mater Yi's lore
				</h3>
				<p>
				Through the ancient martial art of Wuju, Master Yi tempered his body and sharpened his mind until thought and action became one. Though he chooses to enter into violence as a last resort, the grace and speed with which he wields his blade ensures resolution is always swift. As the last living practitioner of Wuju, Master Yi has devoted his life to finding able pupils to carry on the legacy of his lost people.
				</p>
				<p>
				Even before Yi mastered Wuju, he was considered one of the most skilled practitioners of the mystical martial art. He would soon prove his mastery when word of a massive Noxian invasion reached his remote village. Yi swept across the battlefields of Ionia, turning back the tide of Noxus's vast infantry with swift and deadly strikes, much to the embarrassment of the Noxian High Command. Recognizing the threat the Wuju disciples posed to their invasion, the Noxians chose to unleash a nightmarish chemical attack on the home of the deadly art. Those who somehow survived the poisonous concoction had their minds twisted beyond repair. Yi's home was left in ruin.
				</p>
				<p>
				At the war's conclusion, Yi returned to the grotesque remains of his village. There he became the attack's final casualty. Slain in spirit, if not in body, Yi clung to the only feeling left within his heart: vengeance. Driven only by his desire to punish those who'd destroyed his home, Yi spent years training in seclusion. He became a deadlier swordsman than he had ever been, but true mastery of Wuju still eluded him.
				</p>
				<p>
				At the height of Yi's frustration, a monkey of unusually noble bearing interrupted his training. Standing as straight and tall as a man, the monkey watched and mimicked Yi's movements. Yi shooed the monkey away, but the agile creature took great amusement in turning Yi's own techniques against him. Gradually, Yi felt his anger subside as he sparred with the playful animal, and when the burden of his hatred had fully lifted, he found he had caught the monkey by his tail. Yi then understood that he would never master Wuju so long as he pursued it for vengeance, and as he let go of the monkey, he also released his desire to shed his enemy's blood.
				</p>
				<p>
				Yi thanked the monkey for showing him what he'd been blind to, and was surprised when the creature actually replied. He wished to learn Yi's art of fighting. It was an odd request, but through it Yi saw his new path: the way to honor the memory of his lost people was to pass their teachings on to a new generation.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Mater Yi's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Double Strike</h4>
				<p>
				Every 4th consecutive autoattack, Master Yi strikes twice. The second strike deals <ad>50% of Master Yi's AD</ad>, but fully applies on-hit effects and can critically strike.			
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Alpha Strike</h4>
				<p>
				Master Yi becomes untargetable and leaps to strike up to 4 enemies, dealing physical damage to each and dealing additional damage to minions and monsters. 
				</p>
				<p>
				Each bounce will target the nearest enemy that has not yet been damaged. Master Yi re-appears at the initial target's location after the effect ends.
				</p>
				<p>
				Alpha Strike can critically strike, dealing additional physical damage equal to <ad>60% AD</ad>. Basic attacks reduce the cooldown of Alpha Strike by 1 second.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE: 25 / 60 / 95 / 130 / 165 <ad>(+ 100% AD)</ad>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Meditate</h4>
				<p>
				Master Yi channels for up to 4 seconds, restoring health each second. This healing is increased by 1% for every 1% of his missing health. Meditate also resets the autoattack timer.
				</p>
				<p>
				While channeling, Master Yi reduces incoming damage (halved against turrets).
				</p>
				</div>
				<div class="abilityright">
				<p>
				BASE HEALING PER SECOND: 30 / 50 / 70 / 90 / 110 (+ 30% AP)
				</p>
				<p>
				DAMAGE REDUCTION: 50 / 55 / 60 / 65 / 70%
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Wuju Style</h4>
				<p>
				Master Yi gains <ad>10% of his total AD</ad> as bonus attack damage.
				</p>
				<p>
				Autoattacks deal bonus true damage for 5 seconds. Afterwards, the passive bonus is lost until Wuju Style is off cooldown.
				</p>
				</div>
				<div class="abilityright">
				<p>
				BONUS TRUE DAMAGE: 10 / 15 / 20 / 25 / 30 <ad>(+10 / 12.5 / 15 / 17.5 / 20% AD)</ad>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Highlander</h4>
				<p>
				Champion kills and assists reduce the current cooldown of Master Yi's basic abilities by 70%.
				</p>
				<p>
				For 10 seconds, Master Yi gains increased movement speed and attack speed, and becomes immune to all slowing effects. While active, champion kills and assists extend the duration of Highlander by 4 seconds.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MOVEMENT SPEED: 25 / 35 / 45%
				</p>
				<p>
				ATTACK SPEED: 30 / 55 / 80%
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
