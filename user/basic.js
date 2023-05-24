// Create active for list feedback
// const chooses = document.querySelectorAll(".choose__item");

// for (let i = 0; i < chooses.length; i++) {
//   chooses[i].onclick = function () {
//     for (choose of chooses) {
//       choose.classList.remove("it");
//     }
//     chooses[i].classList.add("it");
//   };
// }
// Value init for animation
AOS.init({
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  once: true, // whether animation should happen only once - while scrolling down
});

function res() {
    window.location = "https://pets.webmd.com/dogs/feeding-time#1";
}


// Respondsive for menu
const menu = document.querySelector(".header__menu");
let isclose = true;
menu.addEventListener("click", () => {
  if (isclose) {
    document.querySelector(".header__nav").style.display = "block";
    isclose = false;
  } else {
    document.querySelector(".header__nav").style.display = "none";
    isclose = true;
  }
});

// Animation counter
document.addEventListener("aos:in", ({ detail }) => {
  const counters = document.querySelectorAll(".number");

  counters.forEach((counter) => {
    let upNumber = 0;
    const updateCounter = () => {
      const target = +counter.getAttribute("data-number");
      const increment = target / 800; /// 800 is time 
      if (upNumber < target) {
        upNumber += increment;
        counter.innerText = `${Math.ceil(upNumber)}`;
        setTimeout(updateCounter, 1);
      } else {
        counter.innerText = target;
      }
    };
    updateCounter();
  });
});

// feedback aoto play
var radioIndex = 1;
document.getElementById('radio' + radioIndex).checked = true;

setInterval(function () {
  document.getElementById('radio' + radioIndex).checked = true;
   radioIndex++;
   if (radioIndex > 4)
    radioIndex = 1;
}, 5000);


