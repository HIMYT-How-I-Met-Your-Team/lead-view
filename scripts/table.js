
var deleteEnabled = false;  	//keeps in check if the delete button has been clicked
var downloadEnabled = false;	//keeps in check if the download button has been clicked

//changes the deleteEnabled variable
function toggleDelete() {
	deleteEnabled = !deleteEnabled;
	document.getElementById("deletionMessage").classList.toggle("hidden");
}
//changes the downloadEnabled variable
function toggleDownload() {
	downloadEnabled = !downloadEnabled;
	document.getElementById("downloadMessage").classList.toggle("hidden");
}

//performs either (or both) the onClick functions if the variable are toggled
function clickFunctions(id) {
	if (deleteEnabled){
		clickDelete(id);
	}
	if (downloadEnabled){
		clickDownload(id);
	}
}

//deletes a row from the database
function clickDelete(id) {
	window.location.href = "https://myesperto.gbsweb.online/gp2/wp-admin/admin.php?page=lead-view&delete="+id;
	deleteEnabled = false;
	document.getElementById("deletionMessage").classList.toggle("hidden");
}
//download a row from the list
function clickDownload(id) {
	var message = document.getElementById("hidden"+id).value;
	console.log(id+": "+message);
	download("form_row"+id, message);
	downloadEnabled = false;
	document.getElementById("downloadMessage").classList.toggle("hidden");
}

//downloads a txt file named -filename- and containing the text -text-
function download(filename, text) {
	var element = document.createElement('a');
	element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
	element.setAttribute('download', filename);
  
	element.style.display = 'none';
	document.body.appendChild(element);
  
	element.click();
  
	document.body.removeChild(element);
}

//loops all the values in a list and then downloads the concat version of the list
function downloadAll(list){
	var breaker = "_______________________________________________\n";
	var message = breaker;

	list.forEach(e => {
		message += e + "\n" + breaker;
	});

	download("form_complete", message);
}
