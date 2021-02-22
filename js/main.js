const menuBtn = document.querySelector('.menu-btn');
const navbar = document.querySelector(".navbar");
const main = document.querySelector(".main")
const about = document.querySelector(".about");
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen){
        menuBtn.classList.add('open');
        navbar.classList.add('jobbra');
        main.classList.add("tuny");
        about.setAttribute("style", "display: none");
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        navbar.classList.remove('jobbra');
        main.classList.remove("tuny");
        about.setAttribute("style", "display: normal");
        menuOpen = false;
    }
});