$(function () {
  $('[data-toggle="popover"]').popover({ trigger: "hover" })
})

// Check all the filter inputs to see if they're valid
function validateItemFilters(){
	var filter1 = document.getElementById("filter1").value;	// FILTER 1
	var filter2 = document.getElementById("filter2").value;	// FILTER 2
	var filter3 = document.getElementById("filter3").value;	// FILTER 3
	
	if(validateFilter(filter1) && validateFilter(filter2) && validateFilter(filter3)){
		alert("good");
		return true;
	}
	alert(filter1 + " : " + filter2 + " : " + filter3);
	return false;
}

// See if the input is a filter
function validateFilter(input){
	// Possible filters:
	var filterTypes = ["null", "attack damage", "critical strike", "attack speed", 
		"ability power", "cooldown", "mana", "health", "armour", "magic resist"]
	
	// Check each filter
	for( i=0; i<filterTypes.length; i++){
		if(input == filterTypes[i]){
			return true;
		}
	}
	return false;
}