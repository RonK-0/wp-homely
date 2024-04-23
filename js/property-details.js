// add review star
function updateStars(hoveredIndex) {
    // Convert hoveredIndex to a number if it's a string
    hoveredIndex = Number(hoveredIndex);

    // Iterate over all star elements
    for (let i = 1; i <= 5; i++) {
        const star = document.getElementById(`star-${i}`);
        if (i <= hoveredIndex) {
            // Apply 'text-primary' and 'fa-solid' for stars up to and including the hovered star
            star.classList.add('active', 'fa-solid');
            star.classList.remove('fa-regular');
        } else {
            // Apply 'text-gray' and 'fa-regular' for stars after the hovered star
            star.classList.add('fa-regular');
            star.classList.remove('active', 'fa-solid');
        }
    }
}

// Add event listeners to each star
for (let i = 0; i <= 5; i++) {
    const star = document.getElementById(`star-${i}`);
    star.addEventListener("mouseover", () => updateStars(i));
}

// accordion
const accordion = document.querySelectorAll(".floor_plans_accordion");
accordion.forEach((accordion) => {
    accordion.addEventListener("click", ()=>{
        accordion.classList.toggle("active");
    });
});

//image to video
const demo = document.querySelector('.house__demo');
demo.addEventListener("click", () => {
    demo.classList.add('active');
});


// featured top properties slider
var featuredTopRatedProperties = tns({
    container: ".propertyCheckout__entries",
    items: 1,
    loop: true,
    center: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayButtonOutput: false,
    controls: false,
    nav: true,
    speed: 750,
    autoplayTimeout: 3000,
    preventActionWhenRunning: true,
    mouseDrag: true,
    touch: true,
    navAsThumbnails: true,
    lazyload: true,
    responsive: {
        1200: { items: 3, center: true, },
        768:  { items: 2, },
    }
});


// double banner slider
function Slider(selector) {
    this.slider = tns({
        container: selector,
        items: 1,
        controls: false,
        slideBy: 'page',
        loop: true,
        mouseDrag: true,
        touch: true,
        lazyload: true,
        navContainer: selector+'__thumbnails',
    });
    this.thumbnails = tns({
        container: selector+'__thumbnails',
        items: 4,
        controls: false,
        loop: true,
        slideBy: 1,
        nav: false,
        mouseDrag: true,
        touch: true,
        lazyload: true,
        responsive: {
            768: { items: 4, center: true, },
            490:  { items: 2, },
        }
    });
    
    this.slider.events.on('indexChanged', function(evt) {
        // hack beacause of strange idexes from tns slider
        var indexToGoTo = evt.index > this.slider.getInfo().slideCount ? 0 : evt.index - 1;
        this.thumbnails.goTo(indexToGoTo);
    });
}

Slider(".house__detail__slider");
