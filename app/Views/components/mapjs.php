<script>
        // map control functions
        let fullScreen=()=>{
            document.getElementById('map-container').classList.remove("col-md-9")
            document.getElementById('map-container').classList.add("col-md-12")
            document.getElementById('bar-container').style.width=0
        },
        goHome=()=>{
            map.flyTo({
                center: [115.14083969067292,-8.393090919502285],zoom: 9.3
            })
        }
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
        })
 </script>