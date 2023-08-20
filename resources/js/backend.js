console.log("use backend.js")

let btn = document.querySelector('#btn-close');
let navbar = document.querySelector('#navbar');
console.log(navbar);
let toggleNav = true;

btn.addEventListener('click', () => {
    console.log(toggleNav);

    if(toggleNav === true) {
        navbar.classList.add("max-w-[100px]");
        navbar.classList.remove("max-w-[240px]");
        toggleNav = false;
    } else {
        navbar.classList.add("max-w-[240px]");
        navbar.classList.remove("max-w-[100px]");
        toggleNav = true;
    }
})