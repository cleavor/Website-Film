<?php
  include "conf/info.php";
  $title="Find Cinema";
  include_once "header.php";
?>

<script src='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css' rel='stylesheet' />

<div id='map' style='width: 400px; height: 300px;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiY2xlYXZvciIsImEiOiJjbDNmY2NnYmowZWUxM2luOHhreXo4ZzJzIn0.x-HskCjhjHpo-HqrB-UX9A';
const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [-74.5, 40], // starting position [lng, lat]
    zoom: 9 // starting zoom
});
</script>

<?php
  include_once "footer.php";
?>