
    // Clé API Mapbox (remplace par ta clé API réelle)
    mapboxgl.accessToken = 'pk.eyJ1IjoicmVtMjAyNSIsImEiOiJjbTV4eTF4Z2YwOGt2MmlyM2h6dG5pZWYxIn0.0PO_Mcp-Xg3ebra0KayXcQ';

    // Initialisation de la carte
    const map = new mapboxgl.Map({
        container: 'map', // ID du conteneur
        style: 'mapbox://styles/mapbox/streets-v11', // Style de la carte
        center: [2.213749, 46.227638], // Coordonnées centrales [long, lat] pour la France
        zoom: 5 // Niveau de zoom pour voir tout le pays
    });

    // Liste des points à afficher (quelques villes françaises)
    const points = [
        { coords: [2.3522219, 48.856614], description: "Paris" },      // Paris
        { coords: [5.36978, 43.296482], description: "Marseille" },    // Marseille
        { coords: [-1.553621, 47.218371], description: "Nantes" },     // Nantes
        { coords: [4.835659, 45.764043], description: "Lyon" },        // Lyon
        { coords: [7.262008, 43.710173], description: "Nice" }         // Nice
    ];

    // Ajouter des marqueurs pour chaque point
    points.forEach(point => {
        const marker = new mapboxgl.Marker()
            .setLngLat(point.coords)
            .setPopup(new mapboxgl.Popup().setText(point.description)) // Ajouter une popup
            .addTo(map);
    });

