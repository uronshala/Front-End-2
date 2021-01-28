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