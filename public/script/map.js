
    // Clé API Mapbox
    mapboxgl.accessToken = 'pk.eyJ1IjoicmVtMjAyNSIsImEiOiJjbTV4eTF4Z2YwOGt2MmlyM2h6dG5pZWYxIn0.0PO_Mcp-Xg3ebra0KayXcQ';


    // Coordonnées GPS
    let longitude = document.getElementById('text_longitude').innerText;
    let latitude = document.getElementById('text_latitude').innerText;

    // Initialisation de la carte
    const map = new mapboxgl.Map({
        container: 'map', // ID du conteneur
        style: 'mapbox://styles/mapbox/streets-v11', // Style de la carte
        center: [longitude, latitude], 
        zoom: 15 
    });

    // Liste des points à afficher
    const points = [
        { coords: [longitude, latitude], description: "Point 1" }
    ];

    // Ajouter des marqueurs pour chaque point
    points.forEach(point => {
        const marker = new mapboxgl.Marker()
            .setLngLat(point.coords)
            .setPopup(new mapboxgl.Popup().setText(point.description)) // Ajouter une popup
            .addTo(map);
    });

