// Form validation
function validateForm() {
  var validFname = document.forms["contactForm"]["firstname"].value;
  if (validFname.length == 0) {
    var element = document.getElementById("firstname");
    var pattern = element.getAttribute("pattern");
    var regex = new RegExp(pattern);
    if (regex.test(element.value)) {

    } else {
      alert("Please enter the first name in the required pattern: [A-Za-z]");

    }
    return false;
  }

  var validLname = document.forms["contactForm"]["lastname"].value;
  if (validLname.length == 0) {
    var element = document.getElementById("lastname");
    var pattern = element.getAttribute("pattern");
    var regex = new RegExp(pattern);
    if (regex.test(element.value)) {

    } else {
      alert("Please enter the last name in the required pattern: [A-Za-z]");

    }
    return false;
  }

  var validEmail = document.forms["contactForm"]["email"].value;
  if (validEmail.length == 0) {
    var element = document.getElementById("email");
    var pattern = element.getAttribute("pattern");
    var regex = new RegExp(pattern);
    if (regex.test(element.value)) {

    } else {
      alert("Please enter the e-mail address in the required pattern: name@domain");

    }
    return false;
  }

  var validComment = document.forms["contactForm"]["comment"].value;
  if (validEmail.length == 0) {
    var element = document.getElementById("comment");
    var pattern = element.getAttribute("pattern");
    var regex = new RegExp(pattern);
    if (regex.test(element.value)) {

    } else {
      alert("Please enter the comment in the required pattern: [A-Za-z]");

    }
    return false;
  }
}
