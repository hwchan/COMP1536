<?php
	$title = "Amumu";
	$css = "../champion.css";
	$css2 = "amumu.css";
	$active = "amumu";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Amumu</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Amumu - the Sad Mummy
				</h2>
				<h4>
				"I thought you'd never pick me."
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					2
					</span>
					<span id="defence">
					6
					</span>
					<span id="ability">
					8
					</span>
					<span id="difficulty">
					3
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Amumu's lore
				</h3>
				<p>
				Perhaps one of the oddest champions in the League of Legends is the Yordle known as Amumu. His life before joining the League remains unknown... especially to Amumu. All he remembers is that he woke up alone inside a pyramid within the Shurima Desert. He was entwined in mummy wrappings and he could not feel his heart beat. Furthermore, he felt a deep sadness that he could not entirely explain; he knew he missed his parents, though he could not remember who they were. Dropping to his knees, Amumu wept into his bandages. No matter what he did, it seemed he could never stop his tears or sadness. Eventually he stood up, determined to wander the world to discover his past. Amumu traveled all across southern Valoran - a feat that is not easily dismissed.
				</p>
				<p>
				While Amumu still hasn't learned much about his past, he has learned a great deal about who he has become. He is most assuredly undead, though he harbors none of the evil characteristics typical of undead beings. He also seems to keep trouble at arm's length; Amumu was able to traverse all of Southern Valoran without so much as a single bad thing happening to him. He was just sad, and the people and beings he encountered eventually shared his sadness. Ultimately, he made his way north across the Great Barrier to the Institute of War, the home of the League. Amumu's story was compelling to the summoners he met there, and they invited him to take part in a League Judgment. His success within the League as a champion has given Amumu something he desired: a home. With his present (un)life secured, he now hopes the friends he has made will help him discover his past.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Amumu's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="Passive" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Cursed Touch</h4>
				<p>
				Amumu's basic attacks reduce their target's magic resistance by 15 / 20 / 25 for 3 seconds. This debuff refreshes with every basic attack.			
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Bandage Toss</h4>
				<p>
				Amumu tosses a line of linen in the targeted direction. The linen will catch on the first enemy it hits and pull Amumu to target, stunning the enemy for 1 second and dealing magic damage.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 80 / 130 / 180 / 230 / 280 <ap>(+70% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Despair</h4>
				<p>
				Amumu's tears begin to pool around him. Enemies within the pool take magic damage per second equal to a base amount plus a percentage of their maximum health.
				</p>
				</div>
				<div class="abilityright">
				<p>
				BASE MAGIC DAMAGE PER SECOND: 8 / 12 / 16 / 20 / 24
				</p>
				<p>
				ADDITIONAL DAMAGE PER SECOND: <hp>1 / 1.5 / 2 / 2.5 / 3%<hp> <ap>(+1% per 100 AP)</ap> <hp>of enemies' maximum health</hp>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Tantrum</h4>
				<p>
				Amumu takes reduced physical damage from basic attacks and abilities.
				</p>
				<p>
				Amumu releases his anger, dealing magic damage to surrounding enemies. Tantrum's cooldown is reduced by 0.5 seconds for each basic attack that hits Amumu.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PHYSICAL DAMAGE REDUCTION: 2 / 4 / 6 / 8 / 10
				</p>
				<p>
				MAGIC DAMAGE: 75 / 100 / 125 / 150 / 175 <ap>(+50% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Curse of the Sad Mummy</h4>
				<p>
				Amumu entangles nearby enemies, dealing magic damage and rendering them unable to move and attack for 2 seconds.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 150 / 250 / 350 <ap>(+80% AP)</ap>
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
