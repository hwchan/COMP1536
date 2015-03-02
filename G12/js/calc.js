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
document.getElementById("champbase").innerHTML="2292350100115776670493768085335120000000001400000000009000120100090000000000"
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

	dmg += parseInt(document.getElementById("champbase").innerHTML.substring(10,16))/1000;
	document.getElementById("damage").innerHTML=dmg;
	document.getElementById("critstrike").innerHTML=crit+parseInt(document.getElementById("champbase").innerHTML.substring(4,6));
	document.getElementById("attackspeed").innerHTML=parseInt(document.getElementById("champbase").innerHTML.substring(16,19))/1000*((parseInt(document.getElementById("champbase").innerHTML.substring(19,22))/10+atks)/100+1);
	document.getElementById("ap").innerHTML=ap;
	document.getElementById("cdr").innerHTML=cdr;
	document.getElementById("mana").innerHTML=mana+parseInt(document.getElementById("champbase").innerHTML.substring(6,10));
	document.getElementById("health").innerHTML=hp+parseInt(document.getElementById("champbase").innerHTML.substring(0,4));
	document.getElementById("armour").innerHTML=armour+parseInt(document.getElementById("champbase").innerHTML.substring(22,27))/1000;
	document.getElementById("mres").innerHTML=mres+parseInt(document.getElementById("champbase").innerHTML.substring(27,31))/100;

	var Qdmg = parseInt(document.getElementById("champbase").innerHTML.substring(33,36))+parseInt(document.getElementById("champbase").innerHTML.substring(36,39))*dmg/100+
	parseInt(document.getElementById("champbase").innerHTML.substring(39,42))*ap/100;
	document.getElementById("Qdmg").innerHTML=Qdmg;
	var Qdps = Qdmg/(parseInt(document.getElementById("champbase").innerHTML.substring(31,33))*(1-cdr/100));
	document.getElementById("Qdps").innerHTML=Qdps;
	var Wdmg = parseInt(document.getElementById("champbase").innerHTML.substring(44,47))+parseInt(document.getElementById("champbase").innerHTML.substring(47,50))*dmg/100+
	parseInt(document.getElementById("champbase").innerHTML.substring(50,53))*ap/100;
	document.getElementById("Wdmg").innerHTML=Wdmg;
	var Wdps = Wdmg/(parseInt(document.getElementById("champbase").innerHTML.substring(42,44))*(1-cdr/100));
	document.getElementById("Wdps").innerHTML=Wdps;
	var Edmg = parseInt(document.getElementById("champbase").innerHTML.substring(55,58))+parseInt(document.getElementById("champbase").innerHTML.substring(58,61))*dmg/100+
	parseInt(document.getElementById("champbase").innerHTML.substring(61,64))*ap/100;
	document.getElementById("Edmg").innerHTML=Edmg;
	var Edps = Edmg/(parseInt(document.getElementById("champbase").innerHTML.substring(53,55))*(1-cdr/100));
	document.getElementById("Edps").innerHTML=Edps;
	var Rdmg = parseInt(document.getElementById("champbase").innerHTML.substring(67,70))+parseInt(document.getElementById("champbase").innerHTML.substring(70,73))*dmg/100+
	parseInt(document.getElementById("champbase").innerHTML.substring(73,76))*ap/100;
	document.getElementById("Rdmg").innerHTML=Rdmg;
	var Rdps = Rdmg/(parseInt(document.getElementById("champbase").innerHTML.substring(64,67))*(1-cdr/100));
	document.getElementById("Rdps").innerHTML=Rdps;	
	var AAdps = dmg * (1+(crit+parseInt(document.getElementById("champbase").innerHTML.substring(4,6)))/100)*(parseInt(document.getElementById("champbase").innerHTML.substring(16,19))/1000*((parseInt(document.getElementById("champbase").innerHTML.substring(19,22))/10+atks)/100+1));
	document.getElementById("AAdps").innerHTML=AAdps;
	var totaldps = AAdps+Qdps+Wdps+Edps+Rdps;
	document.getElementById("totaldps").innerHTML=totaldps;	




	
}