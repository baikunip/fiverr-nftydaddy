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
        :root {
            --primary: #2C3E50;
            --secondary: #1ABC9C;
            --neutral1:#ECF0F1;
            --neutral2:#7F8C8D;
            --accent1:#F39C12;
            --accent2:#27AE60;
            --complementary:#8E44AD;
        }
        body{background-color:var(--neutral1);font-family: 'Lato', sans-serif;}
        h1, h2, h3, h4, h5, h6 {font-family: 'Montserrat', sans-serif;}
        button, .highlight {font-family: 'Roboto', sans-serif;}
        .control-btn{background-color:var(--secondary);border-color:var(--primary)}
        #dashboard-container{height:100vh;width:100vw;}
        #map{height:100%;width:100%;}
        #side-bar-btn{position:absolute;z-index:1000;right:0;top:.5em;
            border-top-right-radius:0;border-bottom-right-radius: 0;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            background-color:var(--neutral1);border-color:var(--neutral1);
        }
    </style>
</head>
<body>
    <div class="row" id="dashboard-container">
        <div id="map-container" class="col-md-9">
            <div id="map">
                <button id="side-bar-btn" type="button" class="btn" onclick="fullScreen()"><i class="bi bi-caret-right-fill"></i></button>
            </div>
        </div>
        <div id="bar-container" class="col-md-3">
            <div class="row">
                <div class="col-12 mt-4">
                    <h1>Maps Logo</h1>
                </div>
                <div class="col-12"><hr></div>
                <div class="col-12 btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary control-btn" onclick="goHome()"><i class="bi bi-house-door-fill"></i></button>
                    <button type="button" class="btn btn-primary control-btn"><i class="bi bi-geo-alt-fill"></i></button>
                    <button type="button" class="btn btn-primary control-btn"><i class="bi bi-pie-chart-fill"></i></button>
                    <button type="button" class="btn btn-primary control-btn" onclick="goGeolocate()"><i class="bi bi-crosshair2"></i></button>
                </div>
                <div class="col-12"><hr></div>
                <div class="col-12">
                    This is real estate list
                </div>
            </div>
        </div>
    </div>
    <script src="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Lato:wght@300;400;700&family=Roboto:wght@400;500;700&display=swap"></script>
    <script src="https://unpkg.com/maplibre-gl/dist/maplibre-gl.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <?php echo view("components/datasample"); ?>
    <?php echo view("components/mapjs"); ?>
</body>
</html>