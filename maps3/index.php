<!DOCTYPE html>
<html>
<head>
    <title>Mapa con la API de Google Maps</title>
    <style>
        /* Estilos para el mapa */
        #map {
            height: 80%;
            width: 100%;
            position: relative;
            z-index: 1;
        }
        /* Estilos para asegurar que el cuerpo y el html ocupen toda la ventana */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }
        /* Contenedor para el formulario */
        #form-container {
            margin: 20px;
            position: relative;
            z-index: 2;
        }
        /* Estilos para los inputs y el botón */
        input, button {
            margin: 5px;
            padding: 10px;
            font-size: 16px;
        }
        /* Imagen de fondo */
        #background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            opacity: 0.5; /* Imagen con fondo poco transparente */
        }
    </style>
</head>
<body>
    <img id="background-image" src="https://img.freepik.com/vector-gratis/marco-fondo-azul-fluido_53876-99019.jpg?t=st=1718047532~exp=1718051132~hmac=94ff7951aab4b51766f9b0da5e8550450108d6ed60967c1584e9987442111dc0&w=360" alt="Imagen de fondo">
    <h1 style="position: relative; z-index: 2;">Mi Mapa con Google Maps API</h1>

    <!-- Contenedor del formulario -->
    <div id="form-container">
        <input type="text" id="latitude" placeholder="Latitud">
        <input type="text" id="longitude" placeholder="Longitud">
        <button onclick="updateMap()">Buscar</button>
    </div>

    <!-- Contenedor para el mapa -->
    <div id="map"></div>

    <!-- Script para inicializar el mapa -->
    <script>
        var map;
        var marker;

        function initMap() {
            // Ubicación inicial
            var initialLocation = {lat: -34.397, lng: 150.644};
            // Creación del mapa
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: initialLocation
            });
            // Marcador inicial
            marker = new google.maps.Marker({
                position: initialLocation,
                map: map
            });
        }

        function updateMap() {
            // Obtención de valores de latitud y longitud del formulario
            var lat = parseFloat(document.getElementById('latitude').value);
            var lng = parseFloat(document.getElementById('longitude').value);
            var newLocation = {lat: lat, lng: lng};

            // Centrado del mapa en la nueva ubicación
            map.setCenter(newLocation);
            // Actualización de la posición del marcador
            marker.setPosition(newLocation);
        }
    </script>

    <!-- Incluyendo la API de Google Maps con tu clave de API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtswYlOq55AAisoNwA7iTFjpRBsPkZTAw&callback=initMap" async defer></script>
</body>
</html>
