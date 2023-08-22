// console.log("use backend.js")

let btn = document.querySelector('#btn-close');
let navbar = document.querySelector('#navbar');
// console.log(navbar);
let toggleNav = true;

btn.addEventListener('click', () => {
    console.log(toggleNav);

    if(toggleNav === true) {
        btn.innerHTML = "<box-icon name='chevrons-right' ></box-icon>"
        navbar.classList.add("max-w-[100px]");
        navbar.classList.remove("max-w-[240px]");
        toggleNav = false;
    } else {
        btn.innerHTML = "<box-icon name='chevrons-left' ></box-icon>"
        navbar.classList.add("max-w-[240px]");
        navbar.classList.remove("max-w-[100px]");
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