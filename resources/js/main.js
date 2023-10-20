console.log("use main.js")


window.onscroll = () => {
  navBar();
};

window.onload = () => {
  navBar();
};

function navBar() {
  let nav = document.getElementById("myNav");
  let elNav = document.getElementById("elNav");

  if (document.documentElement.scrollTop > 50) {
    nav.classList.remove("bg-white");
    nav.classList.add("bg-gray-300");
    // elNav.classList.remove("text-white");
    // elNav.classList.add("text-gray-700");
  } else {
    nav.classList.remove("bg-gray-300");
    nav.classList.add("bg-white");
    // elNav.classList.remove("text-white");
    // elNav.classList.add("text-black");
  }
}

// setting AOS animation
AOS.init({
  once: true
});
  
