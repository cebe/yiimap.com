<?php
/**
 * @var yii\base\View $this
 */

// register leaflet.js and css
\app\assets\LeafletAsset::register($this);

$this->registerJs(<<<JS

	var map = L.map('map').setView([40.0, 10.0], 2);

	L.tileLayer('http://{s}.tile.cloudmade.com/4c717e3e4d82421883b955c7d43ae6f3/1/256/{z}/{x}/{y}.png', {
	    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
	    maxZoom: 18
	}).addTo(map);

JS
, \yii\base\View::POS_END);


$this->title = 'Welcome';
?>
<div id="map"></div>

<div class="jumbotron">
	<h1>Welcome!</h1>

	<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus
		commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	<a class="btn btn-large btn-success" href="http://www.yiiframework.com">Get started with Yii</a>
</div>

<hr>

<!-- Example row of columns -->
<div class="row-fluid">
	<div class="span4">
		<h2>Heading</h2>

		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
			condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
			Donec sed odio dui. </p>

		<p><a class="btn" href="#">View details &raquo;</a></p>
	</div>
	<div class="span4">
		<h2>Heading</h2>

		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
			condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
			Donec sed odio dui. </p>

		<p><a class="btn" href="#">View details &raquo;</a></p>
	</div>
	<div class="span4">
		<h2>Heading</h2>

		<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
			felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
			massa.</p>

		<p><a class="btn" href="#">View details &raquo;</a></p>
	</div>
</div>

