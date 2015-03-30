<?php
	$title = "Teemo";
	$css = "../champion.css";
	$css2 = "teemo.css";
	$active = "Teemo";
	require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
			<h1><span style="font-size:55px">C</span>HAMPION - Teemo</h1>
			<div class="middle-content">
			<div class="background"><!--Delete if group is pissed -->
				<h2> 
				Teemo - the Swift Scout
				</h2>
				<h4>
				"Captain Teemo on duty."
				</h4>
				<hr class="hr-white">

				<div class="flexbox">
					<img src="images/icon.png" alt="Potrait"  id="championicon">
					<div id="championstats">
					<span id="attack">
					5
					</span>
					<span id="defence">
					3
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
				Teemo's lore
				</h3>
				<p>
				Teemo is a legend among his yordle brothers and sisters in Bandle City. As far as yordles are concerned, there is something just slightly off about him. While Teemo enjoys the companionship of other yordles, he also insists on frequent solo missions in the ongoing defense of Bandle City. Despite his genuinely warm personality, something switches off inside Teemo's mind during combat so that the lives he must end while on patrol do not burden him. Even as a young recruit, the drill instructors and other trainees found it a little disconcerting that, while Teemo was normally charming and kind, he turned deadly serious and highly efficient the minute combat exercises began. Teemo's superiors quickly steered him toward the Scouts of the Mothership, which is one of Bandle City's most distinguished Special Forces unit alongside the Megling Commandos.
				</p>
				<p>
				While most yordles do not handle solo scouting missions with a great deal of finesse, Teemo is remarkably efficient at them. His record of success in defending Bandle City from infiltrators easily makes him one of the most dangerous yordles alive, though you'd never know it by having a cup of honey mead with him at his favorite inn. Bandle City chose Teemo as their first champion for the League, and he has taken to it like a duck to water. His signature weapon - a blowgun - uses a rare ajunta poison he personally gathers from the jungles of Kumungu. To help cope with his lengthy periods of isolation, Teemo recently struck up a friendship with Tristana, a fellow League champion and fellow member of Bandle City's Special Forces. This connection is healthy for both yordles, though now Valoran's voracious media outlets circulate rumors that the friendship is turning into a romantic relationship. Regardless, Teemo is a crowd favorite in the League of Legends, and a pint-sized foe that many have come to fear.
				</p>
				<hr class="hrsmall hr-white">


				<h3>
				Teemo's abilities
				</h3>
				<div class="flexbox">
				<img src="images/p.png" alt="p" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Passive: Camouflage</h4>
				<p>
				If Teemo stands still and takes no action for 2 seconds, he becomes stealthed. Taking any action or being moved will break his camouflage, giving Teemo the Element of Surprise, 40% bonus attack speed for 3 seconds.
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/q.png" alt="q" class="abilityleft">
				<div class="abilitymiddle">
				<h4>Q: Blinding Dart</h4>
				<p>
				Teemo shoots a dart at an enemy, dealing magic damage and blinding them for a few seconds.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE: 80 / 125 / 170 / 215 / 260 <ap>(+ 80% AP)</ap>
				</p>
				<p>
				BLIND DURATION: 1.5 / 1.75 / 2 / 2.25 / 2.5
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/w.png" alt="w" class="abilityleft">
				<div class="abilitymiddle">
				<h4>W: Move Quick</h4>
				<p>
				Teemo gains increased movement speed. Damage from champions and structures will disable this bonus for 5 seconds.
				</p>
				<p>
				For 3 seconds, Teemo doubles his passive movement speed bonus. While active, Move Quick's bonus cannot be disabled via champion or structure damage.
				</p>
				</div>
				<div class="abilityright">
				<p>
				PASSIVE MOVEMENT SPEED: 10 / 14 / 18 / 22 / 26%
				</p>
				<p>
				ACTIVE MOVEMENT SPEED: 20 / 28 / 36 / 44 / 52%
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/e.png" alt="e" class="abilityleft">
				<div class="abilitymiddle">
				<h4>E: Toxic Shot</h4>
				<p>
				Teemo's auto-attacks deal bonus magic damage and poison his target, causing them to take additional magic damage over 4 seconds. Subsequent attacks only refresh the duration.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE PER SECOND: 6 / 12 / 18 / 24 / 30 <ap>(+ 10% AP)</ap>
				</p>
				<p>
				MAGIC DAMAGE ON-HIT: 10 / 20 / 30 / 40 / 50 <ap>(+ 30% AP)</ap>
				</p>
				</div>
				</div>
				<hr class="hr-white">

				<div class="flexbox">
				<img src="images/r.png" alt="r" class="abilityleft">
				<div class="abilitymiddle">
				<h4>R: Noxious Trap</h4>
				<p>
				Teemo generates a new trap periodically, and can only store up to 3 traps at once.
				</p>
				</div>
				<div class="abilityright">
				<p>
				MAGIC DAMAGE PER SECOND: 50 / 81.25 / 112.5 <ap>(+ 12.5% AP)</ap> 
				</p>
				<p>
				SLOW: 30 / 40 / 50%
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
