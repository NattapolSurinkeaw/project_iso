// console.log("use backend.js")

let main_box = document.querySelector('#main-box');
let btn = document.querySelector('#btn-close');
let navbar = document.querySelector('#navbar');
// console.log(navbar);
let toggleNav = true;

btn.addEventListener('click', () => {
    console.log(toggleNav);

    if(toggleNav === true) {
        btn.innerHTML = "<box-icon name='chevrons-right' ></box-icon>"
        navbar.classList.add("max-w-[0px]", "invisible");
        navbar.classList.remove("max-w-[240px]", "visible");
        main_box.classList.remove("gap-2");
        toggleNav = false;
    } else {
        btn.innerHTML = "<box-icon name='chevrons-left' ></box-icon>"
        main_box.classList.add("gap-2");
        navbar.classList.add("max-w-[240px]", "visible");
        navbar.classList.remove("max-w-[0px]", "invisible");
        toggleNav = true;
    }
})


//  ปุ่ม logout let btnLogout = document.querySelector('#btnLogout');
btnLogout.addEventListener('click', () => {
    axios.get('/api/auth/logout').then((response) => {
        console.log("response");
        location.href ='/login';
    });
})
