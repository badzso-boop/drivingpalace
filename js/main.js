const menuBtn = document.querySelector('.menu-btn');
const navbar = document.querySelector(".navbar");
console.log(typeof(menuBtn),menuBtn);
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen){
        menuBtn.classList.add('open');
        navbar.classList.add('jobbra');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        navbar.classList.remove('jobbra');
        menuOpen = false;
    }
});