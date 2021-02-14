function changeForm(number){
    var divList = document.getElementsByClassName("forms");
    if (number == 0){
      //shfaq login
      divList[0].classList.remove("hidden");
      divList[0].classList.add("form-style");

      divList[1].classList.remove("form-style");
      divList[1].classList.add("hidden");

    }
    else if (number == 1) {
      divList[1].classList.remove("hidden");
      divList[1].classList.add("form-style");

      divList[0].classList.remove("form-style");
      divList[0].classList.add("hidden");
    }
  }
const usernameReg = /^[a-zA-Z0-9]{3,}$/; // new RegExp('')
const passwordReg = /^[A-Z]+$/; // new RegExp('')
// const emailReg = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

function validate() {
    let inputs = document.querySelectorAll("input");
    username = inputs[0].value;
    password = inputs[1].value;
    if (usernameReg.test(username) && password != "") {
        return true;
    }
    return false;

}


function validateContact(){
  let inputs = document.querySelectorAll("input");
  email = inputs[2].value;
  if (emailReg.test(email)){
    return true;
  }
  return false;
    
}