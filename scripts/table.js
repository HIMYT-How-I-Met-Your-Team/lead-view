
var deleteEnabled = false;
var downloadEnabled = false;


function toggleDelete() {
	deleteEnabled = !deleteEnabled;
	document.getElementById("deletionMessage").classList.toggle("hidden");
}
function toggleDownload() {
	downloadEnabled = !downloadEnabled;
	document.getElementById("downloadMessage").classList.toggle("hidden");
}


function clickFunctions(id) {
	if (deleteEnabled){
		clickDelete(id);
	}
	if (downloadEnabled){
		clickDownload(id);
	}
}


function clickDelete(id) {
	window.location.href = "https://myesperto.gbsweb.online/gp2/wp-admin/admin.php?page=lead-view&delete="+id;
	deleteEnabled = false;
	document.getElementById("deletionMessage").classList.toggle("hidden");
}
function clickDownload(id) {
	var message = document.getElementById("hidden"+id).value;
	console.log(id+": "+message);
	download("form_row"+id, message);
	downloadEnabled = false;
	document.getElementById("downloadMessage").classList.toggle("hidden");
}


function download(filename, text) {
	var element = document.createElement('a');
	element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
	element.setAttribute('download', filename);
  
	element.style.display = 'none';
	document.body.appendChild(element);
  
	element.click();
  
	document.body.removeChild(element);
}

function downloadAll(list){
	var breaker = "_______________________________________________\n";
	var message = breaker;

	list.forEach(e => {
		message += e + "\n" + breaker;
	});

	download("form_complete", message);
}
