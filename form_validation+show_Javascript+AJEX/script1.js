function validateForm(){

	var name,email,password,gender,date,month,year;

	name = document.getElementById("name").value;
	email = document.getElementById("email").value;
	password = document.getElementById("password").value;
	gender = document.getElementById("gender").value;
    date = document.getElementById("date").value;
    month = document.getElementById("month").value;
    year = document.getElementById("year").value;

    if (name == '' || password == '' || email == '' || gender== ''|| date== '' || date == '' 
            || month == '' || year == '') {
        alert("Fill all fields!!");
    }else{
        var arr = name.split('');
        if(name.indexOf(' ') === -1 || !isLetter(arr[0])){
            alert("Please provide valid information!!");
        }else{
           document.getElementById("myForm").submit();
        }
    }


}
function isLetter(c) {
    return c.toLowerCase() != c.toUpperCase();
  }
  
  


function showCustomer(str) {
  var xhttp;  
  /*if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }*/
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "y.php?q="+str, true);
  xhttp.send();
}






