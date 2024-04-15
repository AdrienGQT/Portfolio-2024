var language = "en"; // or 'fr' depending on the selected language
var texts;

var path = window.location.pathname;
var page = path.split("/").pop();

window.onload = checkLanguage();

// Get IDS

function getIds() {
  homeIds = [];
  fetch("/src/json/en.json")
    .then((response) => response.json())
    .then((data) => {
      homeIds.push(...Object.keys(data));
    });
}

function checkLanguage() {
  var actualLanguage = localStorage.getItem("actualLanguage");
  if (actualLanguage !== null) {
    if (actualLanguage == "en") {
      languageSelectorClick("en");
    } else if (actualLanguage == "fr") {
      languageSelectorClick("fr");
    }
  } else {
    localStorage.setItem("actualLanguage", "en");
    checkLanguage();
  }
}

// Language selector click

function languageSelectorClick(category) {
  document.getElementById("en").classList.remove("language-selector__item--on");
  document.getElementById("en").classList.add("language-selector__item--off");
  document.getElementById("fr").classList.remove("language-selector__item--on");
  document.getElementById("fr").classList.add("language-selector__item--off");

  document
    .getElementById(category)
    .classList.remove("language-selector__item--off");
  document
    .getElementById(category)
    .classList.add("language-selector__item--on");
  language = category;

  triggerUpdate(language);
}

// Load appropriate JSON file

function triggerUpdate(language) {
  localStorage.setItem("actualLanguage", language);
  getIds();
  if (language === "en") {
    fetch("/src/json/en.json")
      .then((response) => response.json())
      .then((data) => {
        texts = data;
        if(page == "index.php" || page == ""){document.getElementById('landingBarContainer').style.display = "none";}
        updateTexts();
      });
  } else if (language === "fr") {
    fetch("/src/json/fr.json")
      .then((response) => response.json())
      .then((data) => {
        texts = data;
        if(page == "index.php" || page == ""){document.getElementById('landingBarContainer').style.display = "block";}
        updateTexts();
      });
  }
}

// Update texts

function updateTexts() {
  homeIds.forEach((element) => {
    if (element.substring(0, 5) == "class") {
      for (
        var i = 0;
        i < document.getElementsByClassName(element.substring(5)).length;
        i++
      ) {
        document
          .getElementsByClassName(`${element.substring(5)}`)
          .item(i).innerText = texts[element];
      }
    } else {
      if (document.getElementById(`${element}`)) {
        document.getElementById(`${element}`).innerText = texts[element];
      }
    }
  });
}
