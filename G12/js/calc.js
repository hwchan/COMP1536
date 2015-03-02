var w = window.innerWidth;
var h = window.innerHeight;
var d = document.getElementById("imgselect").offsetTop;
var ll = document.getElementById("imgselect").offsetLeft;
document.getElementById("imgselect").onclick=function(){window.open('ChampSelect.html',"ChampSelect","width=500, height=500, top = "+(d+100)+", left="+(ll+100))};
document.getElementById("item1").onclick=function(){window.open('ItemSelect.html',"Item1","width=500, height=500, top = "+(d+100)+", left="+(ll+100))};
document.getElementById("item2").onclick=function(){window.open('ItemSelect.html',"Item2","width=500, height=500, top = "+(d+100)+", left="+(ll+100))};
document.getElementById("item3").onclick=function(){window.open('ItemSelect.html',"Item3","width=500, height=500, top = "+(d+100)+", left="+(ll+100))};
document.getElementById("item4").onclick=function(){window.open('ItemSelect.html',"Item4","width=500, height=500, top = "+(d+100)+", left="+(ll+100))};
document.getElementById("item5").onclick=function(){window.open('ItemSelect.html',"Item5","width=500, height=500, top = "+(d+100)+", left="+(ll+100))};
document.getElementById("item6").onclick=function(){window.open('ItemSelect.html',"Item6","width=500, height=500, top = "+(d+100)+", left="+(ll+100))};
document.getElementById("stats1").innerHTML="0000000000000000000000";
document.getElementById("stats2").innerHTML="0000000000000000000000";
document.getElementById("stats3").innerHTML="0000000000000000000000";
document.getElementById("stats4").innerHTML="0000000000000000000000";
document.getElementById("stats5").innerHTML="0000000000000000000000";
document.getElementById("stats6").innerHTML="0000000000000000000000";
document.getElementById("ttest").onclick=function(){document.getElementById("ttest").innerHTML="Yes"};
document.getElementById("calculatestats").onclick=function(){
	var dmg = 0;
	for (i = 1; i < 7; i++) {
		dmg += parseInt(document.getElementById("stats"+i).innerHTML.substring(0,2))
	}
	var crit = 0;
	for (i = 1; i < 7; i++) {
		crit += parseInt(document.getElementById("stats"+i).innerHTML.substring(2,4))
	}	
	var atks = 0;
	for (i = 1; i < 7; i++) {
		atks += parseInt(document.getElementById("stats"+i).innerHTML.substring(4,6))
	}
	var ap = 0;
	for (i = 1; i < 7; i++) {
		ap += parseInt(document.getElementById("stats"+i).innerHTML.substring(6,9))
	}	
	var cdr = 0;
	for (i = 1; i < 7; i++) {
		cdr += parseInt(document.getElementById("stats"+i).innerHTML.substring(9,11))
	}	
	var mana = 0;
	for (i = 1; i < 7; i++) {
		mana += parseInt(document.getElementById("stats"+i).innerHTML.substring(11,14))
	}	
	var hp = 0;
	for (i = 1; i < 7; i++) {
		hp += parseInt(document.getElementById("stats"+i).innerHTML.substring(14,17))
	}	
	var armour = 0;
	for (i = 1; i < 7; i++) {
		armour += parseInt(document.getElementById("stats"+i).innerHTML.substring(17,20))
	}	
	var mres = 0;
	for (i = 1; i < 7; i++) {
		mres += parseInt(document.getElementById("stats"+i).innerHTML.substring(20,22))
	}	

	document.getElementById("damage").innerHTML=dmg;
	document.getElementById("critstrike").innerHTML=crit;
	document.getElementById("attackspeed").innerHTML=atks;
	document.getElementById("ap").innerHTML=ap;
	document.getElementById("cdr").innerHTML=cdr;
	document.getElementById("mana").innerHTML=mana;
	document.getElementById("health").innerHTML=hp;
	document.getElementById("armour").innerHTML=armour;
	document.getElementById("mres").innerHTML=mres;	
}