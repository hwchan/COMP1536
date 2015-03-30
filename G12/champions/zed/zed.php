<?php
$title = "Zed";
$css = "../champion.css";
$css2 = "zed.css";
$active = "Zed";
require "../../php_template_rellink/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

<div class="middle-container">
    <h1><span style="font-size:55px">C</span>HAMPION - Zed</h1>
    <div class="middle-content">
        <div class="background"><!--Delete if group is pissed -->
            <h2> 
                Zed - the Master of Shadows
            </h2>
            <h4>
                "The unseen blade is the deadliest."
            </h4>
            <hr class="hr-white">

            <div class="flexbox">
                <img src="images/icon.png" alt="Potrait"  id="championicon">
                <div id="championstats">
                    <span id="attack">
                        9
                    </span>
                    <span id="defence">
                        2
                    </span>
                    <span id="ability">
                        1
                    </span>
                    <span id="difficulty">
                        7
                    </span>
                </div>
            </div>
            <hr class="hrsmall hr-white">

            <h3>
                Zed's lore
            </h3>
            <p>
                Zed is the first ninja in 200 years to unlock the ancient, forbidden ways. He defied his clan and master, casting off the balance and discipline that had shackled him all his life. Zed now offers power to those who embrace knowledge of the shadows, and slays those who cling to ignorance.
            </p>
            <p>
                An orphan, Zed was taken in and trained by a great ninja master. Only one other student appeared to be Zed's equal - the master's son, Shen. It seemed Zed could never win the favor of the master, as every match between the rivals ended in a draw. Frustrated and jealous, he sought an advantage. The young ninja ventured into a sealed part of the clan's temple, where he found an ornate, foreboding box. Sensing the dark knowledge within, Zed knew he should not open it, but he peered inside nonetheless. In an instant, shadows touched his mind, revealing techniques that had long been hidden. Now armed with a secret edge, he challenged Shen, and this time he defeated the master's son. He expected praise and recognition in his moment of victory, but somehow the master knew Zed had used forbidden ways, and banished him.
            </p>
            <p>
                Humiliated, the young ninja wandered for years. His bitterness turned to ambition, and he began to train others in the style of the shadows. As his power grew, so did his circle of followers, but he knew that without the box, his technique would never be perfect. One day, Zed looked at his followers and saw that his students were now an army. He led them back to the temple to claim his prize. At the gates, he was surprised to find the old master waiting, receiving Zed and his disciples as if they were welcome guests. The old man laid his sword at Zed's feet, declaring that he had failed Zed as his master. By banishing his former student, the master had doomed Zed to the shadows, instead of leading him to the balanced path. The old man implored Zed to enter the temple, destroy the box, and lead his followers to balance. The dark ninja followed the master inside. Moments later, the assembled ninjas heard Zed cry out in pain. Mysteriously, he emerged unscathed, and threw the severed head of the master at Shen's feet. Screaming in rage, Zed commanded his followers to slaughter the master's students and seize the box.
            </p>
            <p>
                That day, the old ninja order fell. Though many students died, some escaped thanks to Shen's heroic efforts. Now the temple is a dark training ground for the Order of the Shadow. Zed rules as the Order's master, and his edict is simple: perfect one's technique, and kill all ninjas who refuse to embrace the shadows.
            </p>
            <hr class="hrsmall hr-white">


            <h3>
                Zed's abilities
            </h3>
            <div class="flexbox">
                <img src="images/p.png" alt="p" class="abilityleft">
                <div class="abilitymiddle">
                    <h4>Passive: Contempt for the Weak</h4>
                    <p>
                        Zed's basic attacks against targets below 50% health deal <hp>6 / 8 / 10% of the target's maximum health</hp> as bonus magic damage.	
                    </p>
                    <p>
                        This effect can only occur on the same target once every few seconds.
                    </p>
                </div>
            </div>
            <hr class="hr-white">

            <div class="flexbox">
                <img src="images/q.png" alt="q" class="abilityleft">
                <div class="abilitymiddle">
                    <h4>Q: Razor Shuriken</h4>
                    <p>
                        ACTIVE: Zed throws his spinning blades forward, dealing physical damage to the first enemy they pass through and 60% damage to enemies thereafter.
                    </p>
                    <p>
                        Active shadows will also throw a shuriken in the direction of the target point. Additional shuriken striking the same enemy deal 50% damage and restore energy.
                    </p>
                </div>
                <div class="abilityright">
                    <p>
                        PHYSICAL DAMAGE: 75 / 115 / 155 / 195 / 235 <ad>(+ 100% bonus AD)</ad>
                    </p>
                </div>
            </div>
            <hr class="hr-white">

            <div class="flexbox">
                <img src="images/w.png" alt="w" class="abilityleft">
                <div class="abilitymiddle">
                    <h4>W: Living Shadow</h4>
                    <p>
                        Zed's bonus attack damage is increased by a percentage.
                    </p>
                    <p>
                        Zed's shadow dashes forward, remaining in place for 4 seconds. Reactivating Living Shadow will cause Zed to swap places with this shadow.
                    </p>
                    <p>
                        Zed's shadows mimic his basic abilities. If a target is struck twice by a mimicked ability, Zed restores some energy. Energy can only be restored once per mimicked cast.
                    </p>
                </div>
                <div class="abilityright">
                    <p>
                        BONUS ATTACK DAMAGE: <ad>5 / 10 / 15 / 20 / 25% Bonus AD</ad>
                    </p>
                    <p>
                        ENERGY RESTORED: 20 / 25 / 30 / 35 / 40
                    </p>
                </div>
            </div>
            <hr class="hr-white">

            <div class="flexbox">
                <img src="images/e.png" alt="e" class="abilityleft">
                <div class="abilitymiddle">
                    <h4>E: Shadow Slash</h4>
                    <p>
                        Zed spins his blades, creating a burst of shadow energy and dealing physical damage to nearby enemies. Each enemy champion hit reduces Living Shadow's cooldown by 2 seconds.
                    </p>
                    <p>
                        Active shadows also slash, dealing physical damage to nearby enemies and slowing them for 1.5 seconds. Enemies hit by both slashes are slowed more and restore energy but will not take additional damage.
                    </p>
                </div>
                <div class="abilityright">
                    <p>
                        PHYSICAL DAMAGE: 60 / 90 / 120 / 150 / 180 <ad>(+ 80% bonus AD)</ad>
                    </p>
                    <p>
                        SLOW: 20 / 25 / 30 / 35 / 40%
                    </p>
                </div>
            </div>
            <hr class="hr-white">

            <div class="flexbox">
                <img src="images/r.png" alt="r" class="abilityleft">
                <div class="abilitymiddle">
                    <h4>R: Death Mark</h4>
                    <p>
                        Zed becomes untargetable for 0.75 seconds and dashes behind the target enemy champion. Upon arrival, he marks the target for death, ignores unit collision, and spawns a shadow that lasts for 6 seconds at the cast location. Reactivating Death Mark will cause Zed to swap places with this shadow.
                    </p>
                    <p>
                        After 3 seconds, Death Mark will trigger, dealing flat physical damage plus a percentage of all phsyical and magic damage dealt to the marked champion while it was active.
                    </p>
                </div>
                <div class="abilityright">
                    <p>
                        PHYSICAL DAMAGE: <ad>100% AD</ad> + 20 / 35 / 50% of damage dealt
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
