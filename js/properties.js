var sqft_slider = document.getElementById('range_slider_sqft');
noUiSlider.create(sqft_slider, {
    start: [26, 74],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    }
});
var price_slider = document.getElementById('range_slider_price');
noUiSlider.create(price_slider, {
    start: [26, 74],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    }
});