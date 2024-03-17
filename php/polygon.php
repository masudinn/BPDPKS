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
    <h1>POLYGON</h1>
    <div id="map" style="width: 100%; height: 600px;"></div>

    <script>
        const map = L.map('map').setView([-7.427249877559827, 111.02307621472299], 16);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        }).addTo(map);

        L.polygon([
            [-7.427249877559827, 111.02307621472299],
            [-7.427153962091417, 111.02373054453948],
            [-7.428143206897519, 111.02388037658442],
            [-7.428239122150047, 111.02326018571488],
            [-7.427276207292588, 111.0230705248985]
        ], {
            color: 'red',
            fillColor: 'blue',
            fillOpacity: 0.7

        }).addTo(map);

        L.polygon([
            [-7.427787706135452, 111.01968444678793],
            [-7.427542829319134, 111.02128535753147],
            [-7.428530779777313, 111.02145992492639],
            [-7.428855874100518, 111.01960780744382],
            [-7.427775040096567, 111.01966315808123]
        ], {
            color: 'green',
            fillColor: 'yellow',
            fillOpacity: 0.7


        }).addTo(map);
    </script>

</body>

</html>