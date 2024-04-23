//clients success slider
var homeClientTestimonies = tns({
    container: ".homeClientStories__wrapper",
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
    responsive: {
        992: { items: 3, center: true, },
        768:  { items: 2, },
    }
});

// real estate agents slider
var agentsSlider = tns({
    container: ".homeAgents__wrapper",
    items: 2,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayButtonOutput: false,
    controls: false,
    nav: false,
    speed: 750,
    autoplayTimeout: 2500,
    preventActionWhenRunning: true,
    mouseDrag: true,
    touch: true,
    responsive: {
        1200: { items: 4 },
        992:  { items: 3 },
        768:  { items: 2 },
    }
});

// client logos slider
var clientSlider = tns({
    container: ".homeClientSlider_logos",
    items: 1,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayButtonOutput: false,
    controls: false,
    nav: false,
    speed: 5000,
    autoplayTimeout: 0,
    preventActionWhenRunning: true,
    mouseDrag: true,
    touch: true,
    responsive: {
        1200: { items: 5 },
        992:  { items: 4 },
        768:  { items: 3 },
        576:  { items: 2 },
    }
});