
var email = document.forms["rform"]["email"];
var phonenumber1 = document.forms["rform"]["phonenumber1"];
var phonenumber2 = document.forms["rform"]["phonenumber2"];


var email_error = document.getElementById("email_error");
var phonenumber_error = document.getElementById("phonenumber_error");

// Event Listeners

email.addEventListener("blur", emailVerify, true);
phonenumber1.addEventListener("blur", phonenumber1Verify, true);
phonenumber2.addEventListener("blur", phonenumber1Verify, true);


//Validation
function Validate() {
  //email validation
  if (email.value == "") {
    email.style.border = "1px solid red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  //phone number validation
  if (phonenumber1.value == "") {
    phonenumber1.style.border = "1px solid red";
    phonenumber_error.textContent = "Phone number is required";
    phonenumber1.focus();
    return false;
  }
  if (phonenumber2.value == "") {
    phonenumber2.style.border = "1px solid red";
    phonenumber_error.textContent = "Phone number is required";
    phonenumber.focus();
    return false;
  }
}

function emailVerify() {
  if (email.value != "") {
    email.style.border = "1px solid red";
    email_error.innerHTML = "";
    return true;
  }
}
function phonenumber1Verify() {
  if (phonenumber1.value != "") {
    phonenumber1.style.border = "1px solid red";
    phonenumber_error.innerHTML = "";
    return true;
  }
}
function phonenumber2Verify() {
  if (phonenumber2.value != "") {
    phonenumber2.style.border = "1px solid red";
    phonenumber_error.innerHTML = "";
    return true;
  }
}
