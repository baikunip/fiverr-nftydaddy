<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFTyDaddy Map</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <?php echo view("components/mapstyle"); ?>
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
                <div class="col-12"><h4>Map Panel Control</h4></div>
                <div class="col-12 btn-group mb-4" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary control-btn" onclick="goHome()"><i class="bi bi-house-door-fill"></i></button>
                    <button type="button" class="btn btn-primary control-btn"><i class="bi bi-geo-alt-fill"></i></button>
                    <button type="button" class="btn btn-primary control-btn"><i class="bi bi-pie-chart-fill"></i></button>
                    <button type="button" class="btn btn-primary control-btn" onclick="goGeolocate()"><i class="bi bi-crosshair2"></i></button>
                </div>
                <div class="col-12"><hr></div>
                <div class="col-12">
                    <h4>List of Real Estate</h4>
                    <div id="real-estate-list" class="list-group">
                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="row">
                                <div class="col-2"><img src="..." class="card-img-top" alt="..."></div>
                                <div class="col-10"><div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small>3 days ago</small>
                                </div>
                                <p class="mb-1">Some placeholder content in a paragraph.</p>
                                <small>And some small print.</small></div>
                            </div>     
                        </a>
                    </div>
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