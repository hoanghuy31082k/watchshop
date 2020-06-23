var lastid;
var url = window.location.href;
var id = url.substring(url.lastIndexOf('#') + 1);
var listid = ["section_1","section_2","section_3","section_4"];
function detectmouse() {  
    var x = event.clientX; 
    var y = event.clientY; 
    el = document.elementFromPoint(x, y); 
    return el.id;
};
window.addEventListener("load",() =>{
	$("#select_1").removeClass("ondetect");
	$("#select_2").removeClass("ondetect");
	$("#select_3").removeClass("ondetect");
	$("#select_4").removeClass("ondetect");
	url = window.location.href;
	id = url.substring(url.lastIndexOf('#') + 1);
	$("#select_"+id.replace("section_","")).addClass("ondetect");
});
document.addEventListener("mouseover",() => {
	try{
		$("#select_1").removeClass("ondetect");
		$("#select_2").removeClass("ondetect");
		$("#select_3").removeClass("ondetect");
		$("#select_4").removeClass("ondetect");
		lastid=(detectmouse()!=="" && listid.includes(detectmouse())) ? detectmouse() : lastid; 
		$("#select_"+lastid.replace("section_","")).addClass("ondetect");
	} catch (e) {
		$("#select_"+lastid.replace("section_","")).addClass("ondetect");
	}
		
});