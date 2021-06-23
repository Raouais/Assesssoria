
const href = window.location.href;


if(href.match(/about/g) !== null && href.match(/about/g).length > 0){

    function initMap() {

        const uluru = { lat: -16.6719616, lng: -49.2159172 };

        const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: uluru,
        });
        const marker = new google.maps.Marker({
        position: uluru,
        map: map,
        });
    }

    initMap()
}
