// banner categories slider
var bannerCategorySlider = tns({
    container: ".homeBanner_categorySlider__wrapper",
    items: 2,
    loop: true,
    center: false,
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
        1200: { items: 5, },
        992:  { items: 4, },
        768:  { items: 3, center: true, },
        // 490:  { items: 2, center: false, },
    }
});

// featured top properties slider
var featuredTopRatedProperties = tns({
    container: ".homeFeaturedProperties__entries",
    items: 1,
    loop: true,
    center: true,
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
        1200: { items: 3, center: true, },
        768:  { items: 2, center: false, },
    }
});

//clients success slider
var homeClientTestimonies = tns({
    container: ".homeClientStories__wrapper",
    items: 1,
    loop: true,
    center: true,
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
        992: { items: 3, },
        768:  { items: 2, center: false,},
    }
});

// real estate agents slider
var agentsSlider = tns({
    container: ".homeAgents__wrapper",
    items: 1,
    loop: true,
    center: true,
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
        768:  { items: 2, center: false, },
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

// blog post slider
// var blogSlider = tns({
//     container: ".homeBlogEntries",
//     items: 1,
//     loop: true,
//     center: true,
//     autoplay: true,
//     autoplayHoverPause: true,
//     autoplayButtonOutput: false,
//     controls: false,
//     nav: true,
//     speed: 750,
//     autoplayTimeout: 4500,
//     preventActionWhenRunning: true,
//     mouseDrag: true,
//     touch: true,
//     navAsThumbnails: true,
//     responsive: {
//         992: { items: 3, },
//         768:  { items: 2, center: false,},
//     }
// });