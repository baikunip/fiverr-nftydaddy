<script>
        // map control functions
        let fullScreen=()=>{
            if(document.getElementById('map-container').classList.contains("col-md-9")){
                document.getElementById('map-container').classList.remove("col-md-9")
                document.getElementById('map-container').classList.add("col-md-12")
                document.getElementById('bar-container').style.display='none'
                map.resize()
                document.getElementById('side-bar-btn').innerHTML=`<i class="bi bi-caret-left-fill"></i>`
            }else{
                document.getElementById('map-container').classList.remove("col-md-12")
                document.getElementById('map-container').classList.add("col-md-9")
                document.getElementById('bar-container').style.display='block'
                map.resize()
                document.getElementById('side-bar-btn').innerHTML=`<i class="bi bi-caret-right-fill"></i>`
            }   
        },
        goHome=()=>{
            map.flyTo({
                center: [115.14083969067292,-8.393090919502285],zoom: 9.3
            })
        },
        goGeolocate=()=>{
            document.getElementsByClassName('maplibregl-ctrl-geolocate')[0].click()
            map.on('load',()=>{
                geolocate.trigger()
                geolocate.on('geolocate', () => {
                    alert('A geolocate event has occurred.')
                })
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
        }),
        geolocate = new maplibregl.GeolocateControl({
            positionOptions: {
                enableHighAccuracy: true
            },
            trackUserLocation: true
        })
        map.addControl(geolocate);
 </script>