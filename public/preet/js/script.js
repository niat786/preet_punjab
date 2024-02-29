/* Toggle between showing and hiding the dropdown content */

// /* Initialize Google Translate API */
function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      pageLanguage: "en",
      includedLanguages: "en,ur,pa,pa-Guru",
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      autoDisplay: false,
    },
    "google_translate_element"
  );
}

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("filterBtns").addEventListener("click", (e) => {
    let fil = document.querySelectorAll(".filterBtn");
    for (let i = 0; i < fil.length; i++) {
      fil[i].classList.remove("filterBtnActive");
      fil[i].classList.add("filterBtnNotActive");
    }
    // e.target.classList.toggle("filterBtnActivebb");
    e.target.classList.remove("filterBtnNotActive");

    document.getElementById("dressImg").style.display = "none";
    let foodImg = document.getElementById("foodImg");
    if (foodImg) {
      foodImg.style.display = "none";
    }
    document.getElementById("artImg").style.display = "none";
    document.getElementById("danceImg").style.display = "none";

    if (e.target.id == "all") {
      e.target.classList.add("filterBtnActive");

      let all = document.querySelectorAll(".allImg");
      for (let i = 0; i < all.length; i++) {
        all[i].style.display = "block";
      }
    } else if (e.target.id == "food") {
      document.getElementById("food").classList.toggle("filterBtnActive");

      foodImg.style.display = "block";
    } else if (e.target.id == "dress") {
      document.getElementById("dress").classList.toggle("filterBtnActive");

      document.getElementById("dressImg").style.display = "block";
    } else if (e.target.id == "art") {
      document.getElementById("art").classList.toggle("filterBtnActive");
      document.getElementById("artImg").style.display = "block";
    } else if (e.target.id == "dance") {
      e.target.classList.add("filterBtnActive");
      document.getElementById("danceImg").style.display = "block";
    }
  });
});

// gazals list

document.addEventListener("DOMContentLoaded", function () {
  const gazals = [
    "guzre jo apne yaron ki sohbat mein chaar din",
    "guzre jo apne yaron ki sohbat mein chaar din",
    "guzre jo apne yaron ki sohbat mein chaar din",
    "guzre jo apne yaron ki sohbat mein chaar din",
    "guzre jo apne yaron ki sohbat mein chaar din",
    "guzre jo apne yaron ki sohbat mein chaar din",
    "guzre jo apne yaron ki sohbat mein chaar din",
  ];
  let gazalDiv = document.getElementById("gazalDiv");

  let seeAllGazal = document.getElementById("seeAllGazal");
  let seeLessGazal = document.getElementById("seeLessGazal");
  seeLessGazal.style.display = "none";
  let gazalIndex = 4;
  seeAllGazal.onclick = () => {
    gazalIndex = gazals.length - 1;

    seeAllGazal.style.display = "none";
    seeLessGazal.style.display = "block";

    gazalFun();
  };

  seeLessGazal.onclick = () => {
    gazalIndex = 4;
    seeLessGazal.style.display = "none";
    seeAllGazal.style.display = "block";
    gazalFun();
  };

  const gazalFun = () => {
    gazalDiv.innerHTML = "";
    for (let i = 0; i < gazalIndex; i++) {
      let space = document.createElement("div");
      space.classList.add("px-3", "px-sm-5", "mx-3", "my-5");

      let flexDiv = document.createElement("div");
      flexDiv.classList.add("d-flex", "gap-2", "align-items-center", "gazal");

      let icon = document.createElement("i");
      icon.classList.add("far", "fa-heart");

      let p = document.createElement("p");
      p.classList.add("d-flex", "align-items-center", "mb-1");
      p.innerText = gazals[i];

      flexDiv.appendChild(icon);
      flexDiv.appendChild(p);

      space.appendChild(flexDiv);
      let hrLine = document.createElement("hr");
      space.appendChild(hrLine);

      let aTag = document.createElement("a");
      aTag.href = "ghazals.html";
      aTag.classList.add("text-decoration-none", "text-black");
      aTag.appendChild(space);
      gazalDiv.appendChild(aTag);
    }
  };
  gazalFun();
});

// header
let navPages = document.getElementById("navPages");
let navBtn = document.getElementById("navBtn");

navBtn.onclick = () => {
  if (navPages.style.display == "flex") {
    navPages.style.display = "none";
  } else {
    navPages.style.display = "flex";
  }
};

// popular poetry js
const poetry = [
  {
    head: "Na Kar Bandya Meri Meri",
    desc: `Na kar bandya meri meri 
        Na teri na meri
        Char dina da mela
        Dunya pher matti de dheri`,
    poet: "-Bulleh Shah",
  },

  {
    head: "Lorem ipsum",
    desc: `lorem ipsum
        lorem ipsum
        lorum imspsum`,
    poet: "-Bulleh Shah",
  },
  {
    head: "Zeeshan",
    desc: `Na kar bandya meri meri 
        Na teri na meri
        Char dina da mela
        Dunya pher matti de dheri`,
    poet: "-Bulleh Shah",
  },

  {
    head: "Noor",
    desc: `Na kar bandya meri meri 
        Na teri na meri
        Char dina da mela
        Dunya pher matti de dheri`,
    poet: "-Bulleh Shah",
  },
];

let popPrev = document.getElementById("popPrev");
let popNext = document.getElementById("popNext");

let sliderTxtHeadFirst = document.getElementById("sliderTxtHeadFirst");
let sliderTxtHeadSecond = document.getElementById("sliderTxtHeadSecond");

let sliderDescHeadFirst = document.getElementById("sliderDescHeadFirst");
let sliderDescHeadSecond = document.getElementById("sliderDescHeadSecond");

let firstWriter = document.getElementById("firstWriter");
let secondWriter = document.getElementById("secondWriter");

let indexPoetFirst = 0;
let indexPoetSecond = 0;
const mediaQueryList = window.matchMedia("(max-width: 500px)");
popNext.onclick = () => {
  popNext.style.backgroundColor = "#f2742062";
  popPrev.style.backgroundColor = "white";
  if (
    indexPoetFirst == poetry.length - 1 ||
    indexPoetSecond == poetry.length - 1
  ) {
    return;
  }

  if (indexPoetFirst == 0 && indexPoetSecond == 0) {
    indexPoetFirst += 1;

    indexPoetSecond += 2;
  } else if (mediaQueryList.matches) {
    indexPoetFirst++;
  } else {
    indexPoetFirst++;
    indexPoetSecond++;
  }

  sliderTxtHeadFirst.innerText = poetry[indexPoetFirst].head;
  sliderDescHeadFirst.innerText = poetry[indexPoetFirst].desc;
  firstWriter.innerText = poetry[indexPoetFirst].poet;

  sliderTxtHeadSecond.innerText = poetry[indexPoetSecond].head;
  sliderDescHeadSecond.innerText = poetry[indexPoetSecond].desc;
  secondWriter.innerText = poetry[indexPoetSecond].poet;
};

popPrev.onclick = () => {
  popNext.style.backgroundColor = "white";
  popPrev.style.backgroundColor = "#f2742062";

  if (indexPoetFirst == 0 || indexPoetSecond == 0) {
    return;
  } else if (mediaQueryList.matches) {
    indexPoetFirst--;
  } else {
    indexPoetFirst--;
    indexPoetSecond--;
  }

  sliderTxtHeadFirst.innerText = poetry[indexPoetFirst].head;
  sliderDescHeadFirst.innerText = poetry[indexPoetFirst].desc;
  firstWriter.innerText = poetry[indexPoetFirst].poet;

  sliderTxtHeadSecond.innerText = poetry[indexPoetSecond].head;
  sliderDescHeadSecond.innerText = poetry[indexPoetSecond].desc;
  secondWriter.innerText = poetry[indexPoetSecond].poet;
};
