var isActivated = false;

var path = window.location.pathname;
var page = path.split("/").pop();

document.addEventListener("DOMContentLoaded", function () {
  checkCategory();
});

function checkCategory() {
  if (typeof sessionStorage.getItem("actualCat") !== "undefined") {
    if (page == "index.php") {
      var actualCat = sessionStorage.getItem("actualCat");
      if (actualCat == "photography") {
        selectorClick("photography");
      } else if (actualCat == "design") {
        selectorClick("design");
      }
    }
  }
}

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

function selectorClick(category) {
  document
    .getElementById("selector-design")
    .classList.remove("selector__item--on");
  document
    .getElementById("selector-design")
    .classList.add("selector__item--off");
  document
    .getElementById("selector-photography")
    .classList.remove("selector__item--on");
  document
    .getElementById("selector-photography")
    .classList.add("selector__item--off");

  document
    .getElementById("selector-" + category)
    .classList.remove("selector__item--off");
  document
    .getElementById("selector-" + category)
    .classList.add("selector__item--on");

  photoSwitch(category);
}

function photoSwitch(category) {
  if (isActivated == false && category == "photography") {
    document.getElementById("transition").classList.add("transition-to-photo");
    sessionStorage.setItem("actualCat", "photography");

    sleep(600).then(() => {
      document.getElementById("landingMain").classList.add("landing--photo");
      document
        .getElementById("landingTop")
        .classList.add("landing__top--photo");
      document
        .getElementById("landingBottom")
        .classList.add("landing__bottom--photo");

      document.getElementById("background").style.display = "inline";
      document.getElementById("background-loading").style.display = "inline";

      document
        .getElementById("selectorTop")
        .classList.add("selector-container__choose--photo");

      buttons = document.getElementsByClassName("button");
      for (var i = 0; i < buttons.length; i++) {
        buttons.item(i).classList.add("button--photo");
      }

      for (
        var i = 0;
        i < document.getElementsByClassName("project--photo").length;
        i++
      ) {
        document
          .getElementsByClassName("project--photo")
          .item(i).style.display = "list-item";
      }

      for (
        var i = 0;
        i < document.getElementsByClassName("project--design").length;
        i++
      ) {
        document
          .getElementsByClassName("project--design")
          .item(i).style.display = "none";
      }

      document
        .getElementById("project-list")
        .classList.add("project-list--photo");
      document
        .getElementById("selector-container")
        .classList.add("selector-container--photo");
      document.getElementById("selector").classList.add("selector--photo");

      for (
        var i = 0;
        i < document.getElementsByClassName("project__title").length;
        i++
      ) {
        document
          .getElementsByClassName("project__title")
          .item(i)
          .classList.add("photo-style-text");
      }

      document
        .getElementById("footer-list")
        .classList.add("footer-list--photo");

      document.getElementById("warning").classList.add("warning--photo");
    });

    sleep(1600).then(() => {
      document
        .getElementById("transition")
        .classList.remove("transition-to-photo");
    });
    isActivated = true;

    
  } else if (isActivated == true && category == "design") {
    document.getElementById("transition").classList.add("transition-to-design");
    sessionStorage.setItem("actualCat", "design");

    sleep(850).then(() => {
      document.getElementById("landingMain").classList.remove("landing--photo");
      document
        .getElementById("landingTop")
        .classList.remove("landing__top--photo");
      document
        .getElementById("landingBottom")
        .classList.remove("landing__bottom--photo");

      document.getElementById("background").style.display = "none";
      document.getElementById("background-loading").style.display = "none";

      document
        .getElementById("selectorTop")
        .classList.remove("selector-container__choose--photo");

      buttons = document.getElementsByClassName("button");
      for (var i = 0; i < buttons.length; i++) {
        buttons.item(i).classList.remove("button--photo");
      }

      for (
        var i = 0;
        i < document.getElementsByClassName("project--photo").length;
        i++
      ) {
        document
          .getElementsByClassName("project--photo")
          .item(i).style.display = "none";
      }

      for (
        var i = 0;
        i < document.getElementsByClassName("project--design").length;
        i++
      ) {
        document
          .getElementsByClassName("project--design")
          .item(i).style.display = "list-item";
      }

      document
        .getElementById("project-list")
        .classList.remove("project-list--photo");

      document
        .getElementById("selector-container")
        .classList.remove("selector-container--photo");
      document.getElementById("selector").classList.remove("selector--photo");

      for (
        var i = 0;
        i < document.getElementsByClassName("project__title").length;
        i++
      ) {
        document
          .getElementsByClassName("project__title")
          .item(i)
          .classList.remove("photo-style-text");
      }

      document
        .getElementById("footer-list")
        .classList.remove("footer-list--photo");

      document.getElementById("warning").classList.remove("warning--photo");
    });

    sleep(1600).then(() => {
      document
        .getElementById("transition")
        .classList.remove("transition-to-design");
    });
    isActivated = false;
  }
}
