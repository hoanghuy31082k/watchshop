var lastid;
var url ;
var listid = ["section_1","section_2","section_3","section_4"];

var selectfunction = () => {
	setTimeout(() => {
		$("#select_1").removeClass("ondetect");
		$("#select_2").removeClass("ondetect");
		$("#select_3").removeClass("ondetect");
		$("#select_4").removeClass("ondetect");
		url = window.location.href;
		lastid = listid.includes(url.substring(url.lastIndexOf('#') + 1)) ? url.substring(url.lastIndexOf('#') + 1) : "section_1";
		console.log(lastid);
		$("#select_"+lastid.replace("section_","")).addClass("ondetect");
	},500);
};

function detectmouse() {  
    var x = event.clientX; 
    var y = event.clientY; 
    el = document.elementFromPoint(x, y); 
    return el.id;
};


window.addEventListener("load",() => {
	selectfunction();
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