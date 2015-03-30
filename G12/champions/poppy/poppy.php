<?php
	$title = "Poppy";
	$css = "../champion.css";
	$css2 = "poppy.css";
	$active = "Poppy";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Poppy</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Poppy - the Iron Ambassador
				</h2>
				<h4>
				"Valoran will know harmony."
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					6
					</span>
					<span id="defence">
					6
					</span>
					<span id="ability">
					5
					</span>
					<span id="difficulty">
					7
					</span>
					</div>
				</div>
				<hr class="hrsmall hr-white">

				<h3>
				Poppy's lore
				</h3>
				<p>
				While other young yordle girls played skip-step and braided wreathes out of posies, Poppy spent her youth earning calluses and grease stains in her father's armor shop. Blomgrun, her father, was Bandle City's finest smith. The only thing he loved as much as his work was his young daughter, Poppy - named for the sprightly sounds of the sparks that leapt from his ever-burning forge. He swelled with pride the day she was first able to lift his trusty hammer, Whomper. Poppy immediately took to his art, demonstrating a natural gift for smithing, which Blomgrun honed with devoted instruction.
				</p>
				<p>
				One day, a Demacian general named Florin Berell commissioned Blomgrun to craft a helm, glorious beyond comparison. Blomgrun toiled away on this project, determined to present Florin with his finest work. He let Poppy set the center jewel, entrusting her with the most important piece. When the pair finished, they departed for Demacia to deliver it in person. Word of the general's order, however, was leaked to the Noxian High Command, and two Noxian assassins were dispatched to intercept the delivery. Blomgrun was able to occupy the assassins long enough for Poppy to escape with the prized helm. She watched helplessly from the brush as her father was slain. Instead of fleeing home, she carried the helm the rest of the way to Demacia alone. She refused payment for it, saying that no amount would compensate for her father's life. Instead, she offered it as a gift, honoring her father's final intentions. Florin saw the grim determination behind the tears in her eyes, and requested that the leadership of Bandle City appoint Poppy as the yordle ambassador to Demacia. Soon after, seeking to crush Noxus with her father's hammer, Poppy volunteered for the League of Legends.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Poppy's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Valiant Fighter</h4>
				<p>
				All physical and magic damage dealt to Poppy that exceeds 10% of her current health is reduced by 50%. Valiant Fighter does not reduce damage from structures.			
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Devastating Blow</h4>
				<p>
				Poppy's next basic attack is modified to deal magic damage equal to <ad>100% AD</ad> <ap>(+ 60% AP)</ap>. Additionally, Devastating Blow deals bonus damage equal to a base amount plus <hp>8% of the target's maximum health</hp>. The bonus damage is capped.
				</p>
				</div>
				<div class="abilityright">
				<p>
				BONUS MAGIC DAMAGE: 20 / 40 / 60 / 80 / 100 <hp>(+ 8% of target's maximum health)</hp>
				</p>
				<p>
				MAXIMUM DAMAGE: 75 / 150 / 225 / 300 / 375 <ad>(+ 100% AD)</ad> <ap>(+ 60% AP)</ap>.
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Paragon of Demacia</h4>
				<p>
				Upon receiving damage from or dealing damage with a basic attack, Poppy's armor and damage are increased for 5 seconds, stacking up to 10 times.
				</p>
				<p>
				Poppy receives maximum stacks of Paragon of Demacia. Additionally, she gains increased movement speed for 5 seconds.
				</p>
				</div>
				<div class="abilityright">
				<p>
				ARMOR & ATTACK DAMAGE PER STACK: 1.5 / 2 / 2.5 / 3 / 3.5
				</p>
				<p>
				MAX ARMOR & ATTACK DAMAGE: 15 / 20 / 25 / 30 / 35
				</p>
				<p>
				MOVEMENT SPEED: 17 / 19 / 21 / 23 / 25%
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Heroic Charge</h4>
				<p>
				Poppy charges at an enemy, dealing magic damage and carrying it 300 units along with her. If they collide with terrain, she stuns her target for 1.5 seconds, dealing additional magic damage.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 50 / 75 / 100 / 125 / 150 <ap>(+ 40% AP)</ap>
				</p>
				<p>
				COLLISION MAGIC DAMAGE: 75 / 125 / 175 / 225 / 275 <ap>(+ 40% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Diplomatic Immunity</h4>
				<p>
				Poppy focuses intently on a single enemy champion, dealing amplified damage to them, and becoming immune to all damage and abilities from enemies other than her target.
				</p>
				</div>
				<div class="abilityright">
				<p>
				DURATION: 6 / 7 / 8
				</p>
				<p>
				INCREASED DAMAGE: 20 / 30 / 40%
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
