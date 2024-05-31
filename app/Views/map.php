<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFTyDaddy Map</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css">
    <style>
        #dashboard-container{height:100vh;width:100vw;}
        #map{height:100%;width:100%;}
    </style>
</head>
<body>
    <div class="row" id="dashboard-container">
        <div class="col-md-9">
            <div id="map"></div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-12">
                    This is for map control
                </div>
                <div class="col-12">
                    This is real estate list
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/maplibre-gl/dist/maplibre-gl.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        let map = new maplibregl.Map({
            container: 'map',
            center: [115.14083969067292,-8.393090919502285],
            zoom: 9.3,
            style: {
                version: 8,
                sources: {
                    osm: {
                        type: 'raster',
                        tiles: ['https://a.tile.openstreetmap.org/{z}/{x}/{y}.png'],
                        tileSize: 256,
                        attribution: '&copy; OpenStreetMap Contributors',
                        maxzoom: 22
                    },
                },
                layers: [
                {
                    id: 'osm',
                    type: 'raster',
                    source: 'osm'
                }]
            }
        });
    </script>
</body>
</html>