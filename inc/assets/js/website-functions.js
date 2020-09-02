document.addEventListener('DOMContentLoaded', function(){
	var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	if ( width > 768 ) {
		document.getElementById("topbarCollapse").classList.remove("collapse");
		document.getElementById("topbarCollapse").classList.add("collapse.show");
	}
	else {
		document.getElementById("topbarCollapse").classList.remove("collapse.show");
	}
});