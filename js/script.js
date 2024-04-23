// AOS init and set animations to occur only once
// AOS.init({ once: true });

const burg = document.querySelector(".burger");
const nav = document.querySelector(".nav__links");

// nav burger toggle mobile
burg.addEventListener("click", ()=>{
    burg.classList.toggle("show");
    nav.classList.toggle("show");
});

const rt = document.querySelector("body");
const togglebtn1 = document.querySelector("#b-w-button-1");
const togglebtn2 = document.querySelector("#b-w-button-2");
togglebtn1.addEventListener("click", ()=>{
    rt.classList.toggle("dark");
});
togglebtn2.addEventListener("click", ()=>{
    rt.classList.toggle("dark");
});

// auto close nav menu on click of any link for mobile
// COMMENTED OUT SINCE NAV LINKS ARE DIFFERENT PAGES AND NOT SECTIONS ON THE SAME PAGE
// const menu_entry = document.querySelectorAll(".nav__link_item");
// menu_entry.forEach((item) => {
//     item.addEventListener("click", ()=>{
//         burg.classList.remove("active");
//         nav.classList.remove("open");
//     });
// });


var btt = document.querySelector('.backTop');
var btt_bg = document.querySelector('.back-to-top-bg');

window.onscroll = function() { 
    // on scroll show back to top button
    var pageBanner = document.querySelector('#pageBanner');
    var bannerHeight = pageBanner.offsetHeight*0.025;
    if ( window.scrollY > bannerHeight ) { btt_bg.classList.add("shown"); btt.classList.add("shown"); }
    else { btt_bg.classList.remove("shown"); btt.classList.remove("shown"); }

    // scroll back to top button outer ring progress indicator
    let scrollTop = window.scrollY;
    let docHeight = document.body.offsetHeight;
    let winHeight = window.innerHeight;
    let scrollPercent = scrollTop / (docHeight - winHeight);
    let scrollPercentRounded = Math.round(scrollPercent * 100);
    let degrees = scrollPercent * 360;
    document.querySelector(".back-to-top-bg").style.background = `conic-gradient(#A57A5A ${degrees}deg, transparent ${degrees}deg)`;
}

// scroll to top function
function scrollToTop(){ window.scrollTo(0,0); }