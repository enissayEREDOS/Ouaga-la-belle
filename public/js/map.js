const locationOptions = {
    maximumAge: 10000,
    timeout: 5000,
    enableHighAccuracy: true
};

var map = L.map('map').setView([12.30, -1.43], 13);
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
    document.getElementById('geoLocationBtn').addEventListener('click', function() {
        navigator.geolocation.getCurrentPosition(handleLocationAndRoute, handleLocationError, locationOptions);
    });
} else {
    alert("Géolocalisation indisponible");
}

function handleLocation(position) {
    // Récupérer la position de l'utilisateur
    var userLatLng = new L.LatLng(position.coords.latitude, position.coords.longitude);
    var macircle = {
        color: 'blue',          
        fillColor: 'blue',      
        fillOpacity: 0.5,       
        radius: 50              // Rayon en mètres
    };

    // Créer le cercle avec les options spécifiées
    var macircle = L.circle(userLatLng, macircle).addTo(map);

    // Contenu de la popup
    var popupContent = `<div style="text-align:center; color:royalblue; font-size:18px;">
                            <i class="fa-solid fa-user"></i><br>
                             <b>Vous êtes ici</b><br>
                        </div>`;

    macircle.bindPopup(popupContent).openPopup();

    // Stocker la position actuelle dans la variable globale
    currentLocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
    };

    // Centrer la carte sur la position de l'utilisateur
    map.setView(userLatLng, 13);
}

function handleLocationError(error) {
    let errorMessage;
    switch(error.code) {
        case error.PERMISSION_DENIED:
            errorMessage = "L'utilisateur a refusé la demande de géolocalisation.";
            break;
        case error.POSITION_UNAVAILABLE:
            errorMessage = "Les informations de localisation sont indisponibles.";
            break;
        case error.TIMEOUT:
            errorMessage = "La demande de localisation a expiré.";
            break;
        case error.UNKNOWN_ERROR:
        default:
            errorMessage = "Une erreur inconnue est survenue.";
            break;
    }
    alert("Erreur lors de la géolocalisation : " + errorMessage);
    console.error("Erreur de géolocalisation : ", errorMessage);
}

function placeSite() {
    let lat = parseFloat(document.getElementById('lat').value);
    let lng = parseFloat(document.getElementById('lng').value);
    let site = document.getElementById('nom').value;

    if (isNaN(lat) || isNaN(lng)) {
        alert("Veuillez entrer des coordonnées valides.");
        return;
    }

    var marker = L.marker([lat, lng]).addTo(map);
    marker.bindPopup("<b>" + site + "</b><br>").openPopup();
    map.setView([lat, lng], 13);
}

function handleLocationAndRoute(position) {
    handleLocation(position);
    calculateRoute();
}

function calculateRoute() {
    if (currentLocation) {
        var lat = parseFloat(document.getElementById('lat').value);
        var lng = parseFloat(document.getElementById('lng').value);

        if (isNaN(lat) || isNaN(lng)) {
            alert("Coordonnées de destination invalides.");
            return;
        }

        var routeControl = L.Routing.control({
            waypoints: [
                L.latLng(currentLocation.lat, currentLocation.lng),
                L.latLng(lat, lng)
            ],
            routeWhileDragging: true,
            show: false, // Ne pas afficher l'itinéraire par défaut
            createMarker: function(i, waypoint, n) {
                if (i === 0) {
                    // Marqueur pour le point de départ (votre position)
                    return L.marker(waypoint.latLng, {
                        icon: L.icon({
                            iconSize: [25, 41],
                            iconAnchor: [12, 41],
                            popupAnchor: [1, -34],
                            tooltipAnchor: [16, -28],
                            shadowSize: [41, 41]
                        }),
                        draggable: false,
                        title: 'Vous êtes ici'
                    });
                } else {
                    // Marqueur pour le point de destination (site)
                    return L.marker(waypoint.latLng, {
                        icon: L.icon({
                            iconSize: [25, 41],
                            iconAnchor: [12, 41],
                            popupAnchor: [1, -34],
                            tooltipAnchor: [16, -28],
                            shadowSize: [41, 41]
                        }),
                        draggable: false,
                        title: 'Destination'
                    });
                }
            }
        }).addTo(map);

        routeControl.on('routesfound', function(e) {
            var routes = e.routes;
            // Si vous souhaitez faire quelque chose lorsque l'itinéraire est calculé
            console.log("Itinéraire trouvé :", routes);
        });
    } else {
        alert("Impossible de trouver votre position actuelle.");
    }
}


placeSite();
