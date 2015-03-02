document.getElementById("etest").onclick = function(){ window.opener.document.getElementById("ttest").style.color="red"; self.close(); };
document.getElementById("TryndamereSelect").onclick = function(){ 
	window.opener.document.getElementById("ttest").style.color="red";	
	self.close();
	window.opener.document.getElementById("imgselect").src="http://a00928827.webege.com/G12/champions/_Tryndamere/images/Icon.png";
	window.opener.document.getElementById("SelfP").src="champions/_Tryndamere/images/P.png";
	window.opener.document.getElementById("SelfQ").src="champions/_Tryndamere/images/Q.png";
	window.opener.document.getElementById("SelfW").src="champions/_Tryndamere/images/W.png";
	window.opener.document.getElementById("SelfE").src="champions/_Tryndamere/images/E.png";
	window.opener.document.getElementById("SelfR").src="champions/_Tryndamere/images/R.png";
};
document.getElementById("AnnieSelect").onclick = function(){
	window.opener.document.getElementById("ttest").style.color="red";
	self.close();
	window.opener.document.getElementById("imgselect").src="http://a00928827.webege.com/G12/champions/_Annie/images/Icon.png";
	window.opener.document.getElementById("SelfP").src="champions/_Annie/images/P.png";
	window.opener.document.getElementById("SelfQ").src="champions/_Annie/images/Q.png";
	window.opener.document.getElementById("SelfW").src="champions/_Annie/images/W.png";
	window.opener.document.getElementById("SelfE").src="champions/_Annie/images/E.png";
	window.opener.document.getElementById("SelfR").src="champions/_Annie/images/R.png";
};
document.getElementById("AmumuSelect").onclick = function(){
	window.opener.document.getElementById("ttest").style.color="red";
	self.close();
	window.opener.document.getElementById("imgselect").src="http://a00928827.webege.com/G12/champions/_Amumu/images/Icon.png";
	window.opener.document.getElementById("SelfP").src="champions/_Amumu/images/P.png";
	window.opener.document.getElementById("SelfQ").src="champions/_Amumu/images/Q.png";
	window.opener.document.getElementById("SelfW").src="champions/_Amumu/images/W.png";
	window.opener.document.getElementById("SelfE").src="champions/_Amumu/images/E.png";
	window.opener.document.getElementById("SelfR").src="champions/_Amumu/images/R.png";
};
document.write(window.name);