menu.onclick = function myFunction() {
	var x = document.getElementById("myTopnav");

	if(x.className === "topnav") {
		x.classname += " responsive";
	} else{
		x.className = "topnav";
	}
}