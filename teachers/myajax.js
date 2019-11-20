function gotoServer(){
	//stop the default behaviour of element
	event.preventDefault();

	//grab user search term
	var myterm = document.getElementById('shterm').value;

	//start ajax code
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("showhere").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("POST", "contact.php"+myterm, true);
	  xhttp.send();
}
