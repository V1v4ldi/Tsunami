function initializeMap(mapId, locations, center, zoom) {
    var map = L.map('map').setView([0, 120], 4);
    var mapLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
    L.tileLayer(
        'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
        }).addTo(map);

    // Define custom icon
    var customIcon = L.icon({
        iconUrl: baseurl + 'img/icon5.svg', // Path ke ikon Anda
        iconSize: [25, 41], // Ukuran ikon
        iconAnchor: [12, 41], // Posisi anchor
        popupAnchor: [0, -41] // Posisi popup
    });

    for (var i = 0; i < locations.length; i++) {
        L.marker([locations[i][1], locations[i][2]], { icon: customIcon })
            .bindPopup(
                `<b>${locations[i][0]}</b><br>
                Lintang: ${locations[i][1]}<br>
                Bujur: ${locations[i][2]}<br>
                Tanggal: ${locations[i][3]}<br>
                Magnitudo: ${locations[i][4]}<br>`
            )
            .addTo(map);
    }
}