// google maps
function initMap() {
    let location = {
        lat: -25.363,
        lng: 131.004
    };

    let map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: location
    });
}

// Caroussel
$(".carousel").carousel({
    interval: 100000
});


