<?php get_header(); ?>
<?php include('php/calendar.php');?>

<div class="jumbotron">
<div id="map"></div>
</div>

<!-- 		
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/leaflet.js"></script>
 -->
<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.js'></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/Control.FullScreen.js"></script>
<script>
function newPosition(description) {
	map.removeLayer(marker);
	marker = L.marker(description, {icon: myIcon}).addTo(map);
	map.setView(description, 16);
	marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
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



var marker = L.marker([51.463539, -2.609762], {icon: myIcon, win_url: "http://google.com"}).addTo(map);
marker.bindPopup("<b><?php echo openOrClosed($regular); ?></b>").openPopup();
marker.on('click', onClick);
function onClick(e) {
        //console.log(this.options.win_url);
        window.open(this.options.win_url);
    }
</script>

<div class="container">
	<div class="row">
		<div class="col-md-4 text-left buff">
			
<!-- 			<p>Find us on <a href="javascript:void(0);" onclick="newPosition([5.463539, -2.609762]);"><img src="<?php bloginfo('template_url'); ?>/inc/img/pin2.png" height="20" width="20">Alma Road</a> in Clifton. The van will be parked near the entrance to Sainsbury's, just on the corner of Whiteladies Road.</p>
			<hr>
			<table>
			<tr><td>Monday:</td><td class="tabletime">Closed</td></tr>
			<tr><td>Tuesday:</td><td class="tabletime">10am-4pm</td></tr>
			<tr><td>Wednesday:</td><td class="tabletime">10am-4pm</td></tr>
			<tr><td>Thursday:</td><td class="tabletime">10am-4pm</td></tr>
			<tr><td>Friday:</td><td class="tabletime">10am-4pm</td></tr>
			<tr><td>Saturday:</td><td class="tabletime">10am-4pm</td></tr>
			<tr><td>Sunday:</td><td class="tabletime">10am-4pm</td></tr>
			</table>
			<p>See the full schedule <a href="">here</a>.</p>

 -->

<?php if ( have_posts() ) : while( have_posts() ) : the_post();
     the_content();
endwhile; endif; ?>

		<?php displayOpenings($regular, $calTimeZone, 7, "hello"); ?>

			<!-- 
			<?php displayRegular($regular, $calTimeZone); ?> -->


		</div>
		<div class="col-md-8 text-center">
			<h1>Special events</h1>
			<?php displayEvents($events, $calTimeZone, 100, "hello"); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
