//get local storage
if (localStorage.getItem("preferredTheme") == "dark") {
  setDarkMode(true);
}

function setDarkMode(isDark) {
  let darkBtn = document.getElementById("darkBtn");
  let lightBtn = document.getElementById("lightBtn");

  if (isDark) {
    lightBtn.style.display = "block";
    darkBtn.style.display = "none";

    localStorage.setItem("preferredTheme", "dark");
  } else {
    lightBtn.style.display = "none";
    darkBtn.style.display = "block";
    localStorage.removeItem("preferredTheme");
  }

  document.body.classList.toggle("lightMode");
}

// //sticky navigation
// window.addEventListener("scroll", () => {
//   if (window.scrollY > 0) {
//     nav.classList.add("sticky");
//   } else {
//     nav.classList.remove("sticky");
//   }
// });

// //get the links
// let links = document.getElementsByClassName("link");

// //loop through the nav link
// for (let index = 0; index < links.length; index++) {
//   links[index].addEventListener("click", () => {
//     console.log("clicked");
//     //get the current active
//     let current = document.getElementsByClassName("active");
//     current[0].className = current[0].className.replace("active", "");
//     links[index].classList.add("active");
//   });
// }
