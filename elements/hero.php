<!DOCTYPE html>
<head>
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.css' rel='stylesheet' />
<style>
  #map {position:absolute; left: 0;top:0%; bottom:0; height:100%; width:100%; }
</style>
</head>

<script type="text/html" id="hero-section">
    <% var diner= data.info.name.split( ' ').join( '-'); %>
    <div class="diner-name"><p>[<%= data.info.coordinates %>]</p><span><h1><%= data.info.title %></h1></span></div>
        <div class="hero">
            <div id="map"></div>
        </div>
    </div>
</script>
<script>

function buildmapbox(lat, lng) {
    L.mapbox.accessToken = 'pk.eyJ1Ijoic3RldmVuYmVubmV0dCIsImEiOiJLQUhKR2NJIn0.cr7yrw4LzFXpHAsdboSxFA#15';
    var map = L.mapbox.map('map', 'mapbox.streets', {
            zoomControl: false
        }).setView([lat, lng], 16);
    map.scrollWheelZoom.disable();
    L.mapbox.featureLayer({

    type: 'Feature',
    geometry: {
        type: 'Point',
        coordinates: [
          lng,
          lat
        ]
    },
    properties: {

        'marker-size': 'large',
        'marker-color': '#ff3200',
    }

    }).addTo(map);

}
$(document).ready(function() {
    var loc = window.location.pathname;
    $.get('info.json', function(data) {
        var template = _.template($('#hero-section').html(), {
            variable: 'data'
        });
        var html = template(data);
        $('#hero').append(html);
        buildmapbox(data.info.lat, data.info.long)
    })
});
</script>