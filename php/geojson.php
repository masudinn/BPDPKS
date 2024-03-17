<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <title>GIS</title>
</head>

<body>
    <h1>GEOJSON</h1>
    <div id="map" style="width: 100%; height: 600px;"></div>
    <!-- <script src="geojson/mantrijeron.js"></script>
    <script src="geojson/kraton.js"></script> -->
    <!-- <script src="geojson/mergangsan.js"></script>
    <script src="geojson/umbulharjo.js"></script> -->
    <script src="yogyakarta.js"></script>
    <script src="../allyogyakarta.js"></script>

    <script>
        const map = L.map('map').setView([-7.761254962402551, 110.42463921766357], 16);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        }).addTo(map);

        //--gson kota aja--

        // L.geoJson(mantrijeron, {
        //     fillColor: 'blue',
        //     color: 'blue',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("mantrijeron").addTo(map);

        // L.geoJson(kraton, {
        //     fillColor: 'green',
        //     color: 'green',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("kraton").addTo(map);

        // L.geoJson(mergangsan, {
        //     fillColor: 'red',
        //     color: 'red',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("mergangsan").addTo(map);

        // L.geoJson(umbulharjo, {
        //     fillColor: 'yellow',
        //     color: 'yellow',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("umbulharjo").addTo(map);

        // L.geoJson(kotagede, {
        //     fillColor: 'brown',
        //     color: 'brown',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("kotagede").addTo(map);

        // L.geoJson(gondokusuman, {
        //     fillColor: 'violet',
        //     color: 'violet',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("gondokusuman").addTo(map);

        // L.geoJson(danurejan, {
        //     fillColor: 'Orange',
        //     color: 'Orange',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("danurejan").addTo(map);


        // L.geoJson(gondomanan, {
        //     fillColor: 'Purple',
        //     color: 'Purple',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("gondomanan").addTo(map);

        // L.geoJson(ngampilan, {
        //     fillColor: 'Salmon',
        //     color: 'Salmon',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("ngampilan").addTo(map);

        // L.geoJson(wirobrajan, {
        //     fillColor: 'Mustard',
        //     color: 'Mustard',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("wirobrajan").addTo(map);

        // L.geoJson(gedongtengen, {
        //     fillColor: 'Amber',
        //     color: 'Amber',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("gedongtengen").addTo(map);

        // L.geoJson(jetis, {
        //     fillColor: 'Magenta',
        //     color: 'Magenta',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("jetis").addTo(map);

        // L.geoJson(tegalrejo, {
        //     fillColor: 'Navy',
        //     color: 'Navy',
        //     fiilOpacity: 1,
        //     weight: 1
        // }).bindPopup("tegalrejo").addTo(map);


        // gson all yogyakarta
        L.geoJson(gk, {
            fillColor: 'Navy',
            color: 'Navy',
            fiilOpacity: 1,
            weight: 1
        }).bindPopup(
            "Ini peta Gunung Kidul <br>" +
            "<img src='../img/kab gk.jpg' width='200px'>").addTo(map);

        L.geoJson(sleman, {
            fillColor: 'Salmon',
            color: 'Salmon',
            fiilOpacity: 1,
            weight: 1
        }).bindPopup("Ini peta Sleman <br>" +
            "<img src='../img/kab sleman.jpg' width='200px'> + ").addTo(map);

        L.geoJson(bantul, {
            fillColor: 'Amber',
            color: 'Amber',
            fiilOpacity: 1,
            weight: 1
        }).bindPopup("Ini peta Bantul <br>" +
            "<img src='../img/kab bantul.jpg' width='200px'>").addTo(map);

        L.geoJson(kp, {
            fillColor: 'Orange',
            color: 'Orange',
            fiilOpacity: 1,
            weight: 1
        }).bindPopup("Ini peta Kulon Progo <br>" +
            "<img src='../img/kab kulonprogo.jpg' width='200px'>").addTo(map);

        L.geoJson(kota, {
            fillColor: 'red',
            color: 'red',
            fiilOpacity: 1,
            weight: 1
        }).bindPopup("Ini peta Kota Yogyakarta <br>" +
            "<img src='../img/kab kota.jpg' width='200px'>").addTo(map);
    </script>
</body>

</html>