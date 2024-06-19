const locationOptions = {
    maximumAge: 10000,
    timeout: 5000,
    enableHighAccuracy: true
};

var map = L.map('map').setView([12.30, -1.43], 11);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    minZoom: 1,
    maxZoom: 20
}).addTo(map);

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);
}

map.on('click', onMapClick);

if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(handleLocation, handleLocationError, locationOptions);
} else {
    /* Le navigateur n'est pas compatible */
    alert("Géolocalisation indisponible");
}

function handleLocation(position) {
    /* Zoom avant de trouver la localisation */
    map.setView([position.coords.latitude, position.coords.longitude], 16);

    /* Centre la carte sur la latitude et la longitude de la localisation de l'utilisateur */
    var maposition = new L.LatLng(position.coords.latitude, position.coords.longitude);
    var macircle = L.circle(maposition, {
        color: 'blue',
        fillColor: 'blue',
        fillOpacity: 0.5,
        radius: 50 // Rayon en mètres
    }).addTo(map);
    map.panTo(maposition);
}

function handleLocationError(msg) {
    alert("Erreur lors de la géolocalisation");
}

function placeSite() {
    let lat = parseFloat(document.getElementById('lat').value);
    let lng = parseFloat(document.getElementById('lng').value);
    let site = document.getElementById('nom').value;
    var marker = L.marker([lng, lat]).addTo(map);
    var marker2 = L.marker([lng + 1, lat- 1]).addTo(map); 
    marker.bindPopup("<b>" + site + "</b><br>I am a popup.").openPopup();
}
placeSite();
// Appel de placeSite() après la récupération des valeurs lat et lng depuis le formulaire
document.getElementById('submit').addEventListener('click', function(event) {
    event.preventDefault(); // Empêche la soumission du formulaire
    placeSite();
});
