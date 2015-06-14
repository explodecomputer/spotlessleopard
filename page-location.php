<?php get_header(); ?>

<div class="jumbotron">
<div id="map"></div>
</div>

<!-- 		
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/leaflet.js"></script>
 -->
<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.js'></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/Control.FullScreen.js"></script>
<script>

function onClick(e) {
	//console.log(this.options.win_url);
	window.open(this.options.win_url);
}

function googleMapsLink(coords) {
	link = "https://www.google.co.uk/maps/place/@"+coords[0]+","+coords[1]+",15z/data=!3m1!4b1!4m2!3m1!1s0x0:0x0?hl=en"
	return link;
}

function newPositionRegular(coords) {
	map.removeLayer(marker);
	marker = L.marker(coords, {icon: myIcon, win_url: googleMapsLink(coords)}).addTo(map);
	map.setView(coords, 16);
	marker.bindPopup("<b>"+"<?php echo $opentext; ?>"+"</b>").openPopup();
	marker.on('click', onClick);
}

function newPositionEvent(coords, message) {
	map.removeLayer(marker);
	marker = L.marker(coords, {icon: myIcon, win_url: googleMapsLink(coords)}).addTo(map);
	map.setView(coords, 16);
	marker.bindPopup("<b>"+message+"</b>").openPopup();
	marker.on('click', onClick);
}

var map = L.map('map', {fullscreenControl: false, zoomControl: false}).setView([51.463539, -2.609762], 16);
new L.Control.Zoom({ position: 'bottomleft' }).addTo(map);
new L.Control.FullScreen({ position: 'bottomleft'}).addTo(map);


map.scrollWheelZoom.disable();
map.on('enterFullscreen', function(){
	if(window.console) window.console.log('enterFullscreen');
});
map.on('exitFullscreen', function(){
	if(window.console) window.console.log('exitFullscreen');
});

var myIcon = L.icon({
    iconUrl: '<?php bloginfo('template_url'); ?>/inc/img/pin2.png',
    iconRetinaUrl: '<?php bloginfo('template_url'); ?>/inc/img/pin2.png',
    iconSize: [50, 50],
    iconAnchor: [25,50],
    popupAnchor: [1, -47]
});

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    // attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    // id: 'explodecomputer.l21agb97',
    id: 'explodecomputer.md6kdnpo',
    accessToken: 'pk.eyJ1IjoiZXhwbG9kZWNvbXB1dGVyIiwiYSI6Ii1QRDlDbDgifQ.wX73a_KCDJ3T2bMtrUt2uA'
}).addTo(map);

coords = [51.463539, -2.609762];
var marker = L.marker(coords, {icon: myIcon, win_url: googleMapsLink(coords)}).addTo(map);
marker.bindPopup("<b><?php echo openOrClosed($regular); ?></b>").openPopup();
marker.on('click', onClick);

</script>

<div class="container">
	<div class="row">
		<div class="col-md-4 text-left buff">
			<?php if ( have_posts() ) : while( have_posts() ) : the_post();
			     the_content();
			endwhile; endif; ?>
			<?php displayOpenings($regular, $calTimeZone, 7, "openingtimes"); ?>
		</div>
		<div class="col-md-8 text-center">
			<h1>Special events</h1>
			<?php displayEvents($events, $calTimeZone, 100, NULL); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
