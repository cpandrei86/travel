document.getElementById("bookingform").onsubmit = function () {
    var a = document.forms["bookingform"]["firstname"].value;
    var b = document.forms["bookingform"]["lastname"].value;
    var c = document.forms["bookingform"]["email"].value;
	var d = document.forms["bookingform"]["confirmemail"].value;
	var e = document.forms["bookingform"]["address"].value;
	var f = document.forms["bookingform"]["city"].value;
	var g = document.forms["bookingform"]["zip"].value;
	var h = document.forms["bookingform"]["country"].value;
	var i = document.forms["bookingform"]["datepicker4"].value;
	var j = document.forms["bookingform"]["datepicker5"].value;

    var submit = true;

    if (a == null || a == "") {
        firstnameError = "Please enter your first name";
        document.getElementById("firstname_error").innerHTML = firstnameError;
        submit = false;
    }

    if (b == null || b == "") {
        lastnameError = "Please enter your last name";
        document.getElementById("lastname_error").innerHTML = lastnameError;
        submit = false;
    }

    if (c == null || c == "") {
        emailError = "Please enter your email";
        document.getElementById("email_error").innerHTML = emailError;
        submit = false;
    }
	
	if (d == null || d == "") {
        confirmemailError = "Please confirm your email";
        document.getElementById("confirmemail_error").innerHTML = confirmemailError;
        submit = false;
    }
	
	if (e == null || e == "") {
        addressError = "Please enter your address";
        document.getElementById("address_error").innerHTML = addressError;
        submit = false;
    }
	
	if (f == null || f == "") {
        cityError = "Please enter your city";
        document.getElementById("city_error").innerHTML = cityError;
        submit = false;
    }
	
	if (g == null || g == "") {
        zipError = "Please enter your zip";
        document.getElementById("zip_error").innerHTML = zipError;
        submit = false;
    }
	
	if (h == null || h == "") {
        countryError = "Please enter your country";
        document.getElementById("country_error").innerHTML = countryError;
        submit = false;
    }
	
	if (i == null || i == "") {
        startingdateError = "Please select your starting date";
        document.getElementById("startingdate_error").innerHTML = startingdateError;
        submit = false;
    }
	
	if (j == null || j == "") {
        endingdateError = "Please select your ending date";
        document.getElementById("endingdate_error").innerHTML = endingdateError;
        submit = false;
    }

    return submit;
}

function removeWarning() {
    document.getElementById(this.id + "_error").innerHTML = "";
}

document.getElementById("firstname").onkeyup = removeWarning;
document.getElementById("lastname").onkeyup = removeWarning;
document.getElementById("email").onkeyup = removeWarning;
document.getElementById("confirmemail").onkeyup = removeWarning;
document.getElementById("address").onkeyup = removeWarning;
document.getElementById("city").onkeyup = removeWarning;
document.getElementById("zip").onkeyup = removeWarning;
document.getElementById("country").onkeyup = removeWarning;
document.getElementById("datepicker4").onkeyup = removeWarning;
document.getElementById("datepicker5").onkeyup = removeWarning;