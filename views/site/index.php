<?php
/**
 * @var yii\base\View $this
 */

// register leaflet.js and css
\app\assets\LeafletAsset::register($this);

$this->registerMetaTag(array(
	'name' => "viewport",
	'content' => "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
));

$this->registerJs(<<<JS

	// adding a leafletjs map http://leafletjs.com/examples.html

	var map = L.map('map').setView([40.0, 10.0], 2);
	map.zoomControl.setPosition('bottomleft');

	L.tileLayer('http://{s}.tile.cloudmade.com/4c717e3e4d82421883b955c7d43ae6f3/1/256/{z}/{x}/{y}.png', {
	    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
	    maxZoom: 18
	}).addTo(map);

	// TODO foreach user add a marker

	var marker = L.marker([51.5, -0.09]).addTo(map);
	marker.bindPopup("<b>Hello world!</b><br>I am a popup.");

	var marker = L.marker([52.52526, 13.36972]).addTo(map);
	marker.bindPopup("<b>Berlin</b>, Germany<br>I am a popup.").openPopup();

	// TODO Set own position when clicking on the map
	function onMapClick(e) {
		alert("You clicked the map at " + e.latlng);
	}

	map.on('click', onMapClick);

JS
, \yii\base\View::POS_END);


$this->title = 'Welcome';
?>
<div id="map"></div>

<div class="jumbotron">
	<div class="pull-right">signup</div>
	<h1>Welcome to Yiimap.com! <span class="lead">A map to show Yii users in the world and bring them together for meetups.</span></h1>

	<a class="btn btn-large btn-success" href="http://www.yiiframework.com">Get started with Yii</a>
</div>



