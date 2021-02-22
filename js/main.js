const menuBtn = document.querySelector('.menu-btn');
const navbar = document.querySelector(".navbar");
const main = document.querySelector(".main")
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen){
        menuBtn.classList.add('open');
        navbar.classList.add('jobbra');
        main.classList.add("tuny");
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        navbar.classList.remove('jobbra');
        main.classList.remove("tuny");
        menuOpen = false;
    }
});

// ennek megforditasa megjelenesnel?

menuBtn.addEventListener('click', function () {
  
  if (main.classList.contains('hidden')) {
    main.classList.remove('hidden');
    setTimeout(function () {
      main.classList.remove('visuallyhidden');
    }, 20);
  } else {
    main.classList.add('visuallyhidden');    
    main.addEventListener('transitionend', function(e) {
      main.classList.add('hidden');
    }, {
      capture: false,
      once: true,
      passive: false
    });
  }
  
}, false);

