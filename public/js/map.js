let map;
let currentMarker = null; // Variable global para mantener el marcador actual
let currentInfoWindow = null; // Variable global para la InfoWindow actual

// Función para determinar el tamaño del marcador basado en el ancho de la pantalla
function getMarkerSize() {
    const screenWidth = window.innerWidth;
    if (screenWidth > 700) {
        return new google.maps.Size(48, 48); // Tamaño más grande para pantallas mayores a 700px
    } else {
        return new google.maps.Size(35, 35); // Tamaño reducido para pantallas de 700px o menos
    }
}

function initMap() {
    const initialCoords = {lat: 28.63528, lng: -106.08889};

    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: initialCoords,
        styles: mapStyles, // Aplica los estilos desde mapStyles.js
        disableDefaultUI: true // Deshabilita la UI por defecto para un aspecto más limpio
    });

    // Carga el GeoJSON desde una ruta relativa
    map.data.loadGeoJson('/geojson/spotuno.geojson');
    map.data.loadGeoJson('/geojson/prueba.geojson');
    map.data.loadGeoJson('/geojson/poligono.geojson');

    // Aplica estilos a los marcadores de GeoJSON
    map.data.setStyle({
        icon: {
            url: 'images/ubicacionspot.png', // Ruta al ícono personalizado
            scaledSize: getMarkerSize() // Ajusta el tamaño del ícono según la resolución de pantalla
        }
    });

    initAutocomplete();
}

function initAutocomplete() {
    const input = document.getElementById('search-input');
    const autocomplete = new google.maps.places.Autocomplete(input, {types: ['geocode']});

    autocomplete.addListener('place_changed', function() {
        const place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("No se encontraron detalles para: '" + place.name + "'.");
            return;
        }

        // Si ya existe un marcador, lo elimina
        if (currentMarker) {
            currentMarker.setMap(null);
        }

        // Si ya existe una InfoWindow, la cierra
        if (currentInfoWindow) {
            currentInfoWindow.close();
        }

        // Centra el mapa en la nueva ubicación y ajusta el zoom a 15
        map.setCenter(place.geometry.location);
        map.setZoom(15);

        // Crea un nuevo marcador con el tamaño ajustado
        currentMarker = new google.maps.Marker({
            map: map,
            position: place.geometry.location,
            icon: {
                url: 'images/aprobacion.png', // Asegúrate de tener este ícono disponible
                scaledSize: getMarkerSize() // Usa la función para obtener el tamaño adecuado
            }
        });

        // Verifica si el punto está dentro de alguno de los polígonos GeoJSON
        checkIfLocationWithinPolygon(place.geometry.location);
    });
}

function checkIfLocationWithinPolygon(location) {
    let isWithinPolygon = false;
    let message = "La ubicación está fuera de las zonas de cobertura.<br><span class='additional-text'>Ponte en contacto con Spot Uno para ofrecerte una alternativa al número 614 399 00 92 o al correo contrataciones@spotuno.mx</span>";
    let iconUrl = 'images/desaprobacion.png'; // Ícono predeterminado para ubicaciones fuera de cobertura

    map.data.forEach(function(feature) {
        if (feature.getGeometry().getType() === 'Polygon') {
            const paths = feature.getGeometry().getAt(0).getArray().map(point => ({lat: point.lat(), lng: point.lng()}));
            const polygon = new google.maps.Polygon({paths: paths});
            if (google.maps.geometry.poly.containsLocation(location, polygon)) {
                isWithinPolygon = true;
                message = "La ubicación está dentro de una zona de cobertura.<br><span class='additional-text'>No esperes más, ponte en contacto con Spot Uno al número 614 399 00 92 o al correo contrataciones@spotuno.mx</span>";
                iconUrl = 'images/aprobacion2.png'; // Cambia el ícono para ubicaciones dentro de cobertura
            }
        }
    });

    // Actualiza el ícono del marcador según si la ubicación está dentro de cobertura
    if(currentMarker) {
        currentMarker.setIcon({
            url: iconUrl,
            scaledSize: getMarkerSize() // Ajusta el tamaño del ícono si es necesario
        });
    }

    // Crea y muestra la ventana de información con el mensaje adecuado
    currentInfoWindow = new google.maps.InfoWindow({
        content: `<div class="${isWithinPolygon ? 'inside-coverage message' : 'outside-coverage message'}">${message}</div>`
    });
    currentInfoWindow.open(map, currentMarker);
}

document.addEventListener('DOMContentLoaded', function() {
    initMap();
});
