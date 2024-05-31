<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFTyDaddy Map</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        #dashboard-container{height:100vh;width:100vw;}
        #map{height:100%;width:100%;}
        #side-bar-btn{position:absolute;z-index:1000;right:0;top:.5em;
            border-top-right-radius:0;border-bottom-right-radius: 0;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;}
    </style>
</head>
<body>
    <div class="row" id="dashboard-container">
        <div class="col-md-9">
            <div id="map">
                <button id="side-bar-btn" type="button" class="btn btn-secondary"><i class="bi bi-list"></i></button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-12 mt-4">
                    <h2>Maps Logo</h2>
                </div>
                <div class="col-12"><hr></div>
                <div class="col-12 btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary"><i class="bi bi-house-door-fill"></i></button>
                    <button type="button" class="btn btn-primary"><i class="bi bi-geo-alt-fill"></i></button>
                    <button type="button" class="btn btn-primary"><i class="bi bi-pie-chart-fill"></i></button>
                    <button type="button" class="btn btn-primary"><i class="bi bi-crosshair2"></i></button>
                </div>
                <div class="col-12"><hr></div>
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