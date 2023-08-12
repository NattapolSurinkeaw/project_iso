console.log("use main.js")


window.onscroll = () => {
  navBar();
};

function navBar() {
  let nav = document.getElementById("myNav");
  let navLink = document.getElementById("navLink");
  let navUser = document.getElementById("navUser");

  if (document.documentElement.scrollTop > 50) {
    nav.classList.remove("bg-inherit");
    nav.classList.add("bg-white");
    navLink.classList.remove("text-gray-200");
    // navUser.classList.remove("text-inherit");
  } else {
    nav.classList.remove("bg-white");
    navLink.classList.add("text-gray-200");
    // navUser.classList.add("text-white");
  }
}

// setting AOS animation
AOS.init({
  once: true
});
  
