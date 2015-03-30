<?php
	$title = "Vayne";
	$css = "../champion.css";
	$css2 = "vayne.css";
	$active = "Vayne";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Vayne</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Vayne - the Night Hunter
				</h2>
				<h4>
				"Let us hunt those who have fallen to darkness."
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					10
					</span>
					<span id="defence">
					1
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
				Vayne's lore
				</h3>
				<p>
				The world is not always as civilized as people might think. There are still those who would follow the blackest paths of magic and become corrupted by the darker powers that flow through Runeterra. Shauna Vayne knows this fact well. As a young privileged girl in the heart of Demacia's elite, her father tried to convince her of the constabulary's ever-vigilant eye. Young and naive, she truly believed that her world was one of perfect safety, until one night, when a twisted witch took interest in her father. The malevolent woman overcame her father's conciliar guard, then tortured her family before murdering them. The young Shauna escaped only by hiding herself and then fleeing once the hag had departed, plagued by the screams of her loved ones as she ran. A burning hatred was born in her that day, one that could never be denied.
				</p>
				<p>
				Vayne was able to take care of herself using her father's money, and she began to train as soon as an instructor would have her as a student. By the time she was a fully grown woman, she had become a grim warrior. However, the fields of battle were not to be her home. Demacia needed a protector, one who hunted those lost to the darkness. Shauna used her family's contacts to become the first Night Hunter, and now her prowess is the stuff of legends. It is said that those who practice the black arts quake when they hear that the Night Hunter is on the prowl. Despite her crusade, Shauna has looked at the League of Legends in horror. There are champions who have clearly lost themselves to the blackest of magics, and who have been embraced within the League even though they should be put down for the safety of all. The time has come for the Night Hunter to execute her secret mission - to purge the League of Legends.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Vayne's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Night Hunter</h4>
				<p>
				Vayne gains 30 movement speed when moving towards a visible enemy champion.			
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Tumble</h4>
				<p>
				Vayne quickly rolls toward the cursor's location, causing her next basic attack within 6 seconds to deal bonus damage. This ability resets the basic attack timer on cast.
				</p>
				</div>
				<div class="abilityright">
				<p>
				BONUS PHYSICAL DAMAGE: <ad>30 / 35 / 40 / 45 / 50% AD</ad>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Silver Bolts</h4>
				<p>
				Consecutive attacks and abilities mark Vayne's target with silver rings. The rings are removed if Vayne attacks a different target or doesn't attack for 3 seconds.
				</p>
				<p>
				The third consecutive attack or spell against the same target will consume the rings, dealing true damage equal to a flat amount plus a percentage of the target's maximum health (capped at 200 against monsters).
				</p>
				</div>
				<div class="abilityright">
				<p>
				TRUE DAMAGE: 20 / 30 / 40 / 50 / 60 <hp>(+ 4 / 5 / 6 / 7 / 8% target's maximum health)</hp>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Condemn</h4>
				<p>
				Vayne fires a projectile at target unit, dealing physical damage and knocking the target back 470 units, also applies Silver Bolts once.
				</p>
				<p>
				If the target is knocked into a wall, the target takes the same damage again and is stunned for 1.5 seconds.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE: 45 / 80 / 115 / 150 / 185 <ad>(+ 50% bonus AD)</ad>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Final Hour</h4>
				<p>
				Vayne temporarily gains attack damage and enhances her other abilities.
				</p>
				<p>
				While Final Hour is active, Night Hunter's movement speed increase is tripled, and using Tumble stealths Vayne for 1 second.
				</p>
				</div>
				<div class="abilityright">
				<p>
				DURATION: 8 / 10 / 12
				</p>
				<p>
				BONUS ATTACK DAMAGE: 30 / 50 / 70
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
