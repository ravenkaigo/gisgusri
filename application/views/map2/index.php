<style>
#map { width: 400px; height: 600px; }
.info { padding: 6px 8px; font: 14px/16px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }
.legend { text-align: left; line-height: 18px; color: #555; } .legend i { width: 18px; height: 18px; float: left; margin-right: 8px; opacity: 0.7; }
</style>
               <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

     </div>

    <!-- panggil peta -->
		<div class="container-fluid" id="map"> </div>
		<!-- endof panggil pete -->
        </div>



        <!-- /.container-fluid -->


      <!-- End of Main Content -->


<div class="container-fluid">



<!-- leaflet map SCRIPT -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets/leaflet/leaflet.css" />
<script src="<?= base_url(); ?>/assets/leaflet/leaflet.js"></script>
<script src="leaflet.ajax.min.js"></script>
<div id='map'></div>

<script type="text/javascript">var statesData = {"type":"FeatureCollection","features":[
{
"type": "FeatureCollection",
"name": "LT 2 FIX",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "id": 1, "name": "TOILET", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454691123710333, 0.474373249891527 ], [ 101.454693699384563, 0.474346359852561 ], [ 101.454670003181647, 0.474343578124392 ], [ 101.454667633561357, 0.474370674217297 ], [ 101.454691123710333, 0.474373249891527 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "TEMPAT WUDHU", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454693493330623, 0.474373661999404 ], [ 101.454721001531411, 0.474376031619696 ], [ 101.454723783259581, 0.474348935526791 ], [ 101.454695965977891, 0.474346565906499 ], [ 101.454693493330623, 0.474373661999404 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "ARSIP KEUANGAN", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454723216611256, 0.474376443727573 ], [ 101.454757215511094, 0.474379740590588 ], [ 101.454761130535928, 0.474335542020793 ], [ 101.454727028609113, 0.474331420942024 ], [ 101.454723216611256, 0.474376443727573 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "KASIR", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454760306320182, 0.474371189352143 ], [ 101.454796468786384, 0.474374898323035 ], [ 101.454800486838181, 0.474339766126531 ], [ 101.454763654696691, 0.474335928371927 ], [ 101.454760306320182, 0.474371189352143 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "KEUANGAN", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454848574676063, 0.474332528481943 ], [ 101.454804936315412, 0.474327447964523 ], [ 101.454799411494164, 0.474376746369295 ], [ 101.454827537856758, 0.474379219016556 ], [ 101.454836887554208, 0.47437636001816 ], [ 101.454840982876235, 0.474371723804545 ], [ 101.454844460036441, 0.474365928537527 ], [ 101.454848574676063, 0.474332528481943 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "KABAG KASUM", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454822573244655, 0.474280564254343 ], [ 101.454817473409676, 0.474326153688222 ], [ 101.454848845121802, 0.474329939929341 ], [ 101.454853944956795, 0.474284331177905 ], [ 101.454822573244655, 0.474280564254343 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "TOILET", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454832618374141, 0.474278704939508 ], [ 101.454854408578129, 0.474281312809666 ], [ 101.454857016448287, 0.474259696463687 ], [ 101.454834994433625, 0.474256798830177 ], [ 101.454832618374141, 0.474278704939508 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "PENGADAAN", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454690460474168, 0.474303783957531 ], [ 101.454724594596911, 0.474307724739103 ], [ 101.454726970656409, 0.474280660842127 ], [ 101.45469231495963, 0.474275908723171 ], [ 101.454690460474168, 0.474303783957531 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "ASET", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454726796798383, 0.474307956549784 ], [ 101.454770029490348, 0.47431276662141 ], [ 101.454773448697892, 0.474286282251135 ], [ 101.454729114905192, 0.474280776747467 ], [ 101.454726796798383, 0.474307956549784 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "MUSHALLA", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454675450732566, 0.474271040698876 ], [ 101.454727260419716, 0.474277531397937 ], [ 101.454729462621188, 0.474252727655097 ], [ 101.454677305218013, 0.474245773334675 ], [ 101.454675450732566, 0.474271040698876 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "RUANG MEETING", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454858523217652, 0.474268722592068 ], [ 101.454899901424156, 0.474273706521704 ], [ 101.45490905794604, 0.474204395128162 ], [ 101.454866520686124, 0.474198831671824 ], [ 101.454858523217652, 0.474268722592068 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "ISO SEKRETARIAT", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454826475390988, 0.474180286817364 ], [ 101.454865999112059, 0.474185618463022 ], [ 101.454870403514988, 0.474149687807506 ], [ 101.45483076388858, 0.474143660729807 ], [ 101.454826475390988, 0.474180286817364 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "SMOKING AREA", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "ARSIP SDM", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454833139947979, 0.474120682496078 ], [ 101.454872200047689, 0.474126593668437 ], [ 101.45486988194088, 0.474116625809165 ], [ 101.454866520685997, 0.474111410068848 ], [ 101.45486026179762, 0.474107701097956 ], [ 101.454834762622738, 0.474104571653766 ], [ 101.454833139947979, 0.474120682496078 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "SDM", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.45475872871944, 0.474164262904058 ], [ 101.454803931802189, 0.474170985413799 ], [ 101.454810886122615, 0.47409958772413 ], [ 101.454739836148988, 0.474088460811455 ], [ 101.454734736313995, 0.474142472700068 ], [ 101.454760235488877, 0.474145718049598 ], [ 101.45475872871944, 0.474164262904058 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "TOILET", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454709295091803, 0.474138242155144 ], [ 101.454732592065213, 0.474141835220696 ], [ 101.454735257888046, 0.474111641879529 ], [ 101.454711729103948, 0.474107932908637 ], [ 101.454709295091803, 0.474138242155144 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "TOILET", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454707092890317, 0.474137720581113 ], [ 101.454709179186437, 0.474107701097956 ], [ 101.454687273077113, 0.474104687559107 ], [ 101.454685186780992, 0.474135054758284 ], [ 101.454707092890317, 0.474137720581113 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "KNU", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454754729985225, 0.474183532166895 ], [ 101.454757569666072, 0.474148644659443 ], [ 101.45468501292298, 0.474137749557448 ], [ 101.454682434029152, 0.474172521159559 ], [ 101.454754729985225, 0.474183532166895 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "HALL", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454677623957508, 0.474243223417186 ], [ 101.454748789836501, 0.474252379939075 ], [ 101.45475423738749, 0.474186429800404 ], [ 101.454682260171111, 0.47417576650909 ], [ 101.454677623957508, 0.474243223417186 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 600, "name": "TANGGA TURUN", "type": "STAIR" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454673045696552, 0.474304885058264 ], [ 101.454687765674777, 0.474306565685699 ], [ 101.454688171343463, 0.474301291992712 ], [ 101.454673509317914, 0.474299669317947 ], [ 101.454673045696552, 0.474304885058264 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 600, "name": "VOID", "type": "VOID" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454751035502468, 0.474252930489442 ], [ 101.454786734347309, 0.474257450797717 ], [ 101.454795311342494, 0.474255944028292 ], [ 101.454804815580403, 0.474249569234572 ], [ 101.454811306279467, 0.474239253659278 ], [ 101.454814435723648, 0.474226504071838 ], [ 101.454813740291613, 0.474215377159162 ], [ 101.454809104077995, 0.474204018435805 ], [ 101.454802729284282, 0.474196600494022 ], [ 101.454793688667721, 0.474192196091087 ], [ 101.454756598958809, 0.474186516729409 ], [ 101.454751035502468, 0.474252930489442 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "SMOKING AREA", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "TOILET", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454841108439979, 0.474206061267429 ], [ 101.454863304312667, 0.474208842995598 ], [ 101.454864869034765, 0.474187864128991 ], [ 101.454843368594126, 0.474185546022183 ], [ 101.454841108439979, 0.474206061267429 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 600, "name": "TANGGA TURUN", "type": "STAIR" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454673393412563, 0.474298973885905 ], [ 101.454688113390787, 0.47430065451334 ], [ 101.454688519059474, 0.474295380820353 ], [ 101.454673857033924, 0.474293758145588 ], [ 101.454673393412563, 0.474298973885905 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 600, "name": "TANGGA TURUN", "type": "STAIR" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454673972939261, 0.474293062713546 ], [ 101.454688692917486, 0.474294743340981 ], [ 101.454689098586172, 0.474289469647995 ], [ 101.454674436560623, 0.474287846973229 ], [ 101.454673972939261, 0.474293062713546 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 600, "name": "TANGGA TURUN", "type": "STAIR" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454674668371311, 0.474286919730506 ], [ 101.454689388349536, 0.474288600357942 ], [ 101.454689794018222, 0.474283326664955 ], [ 101.454675131992673, 0.47428170399019 ], [ 101.454674668371311, 0.474286919730506 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 600, "name": "TANGGA TURUN", "type": "STAIR" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454675016087322, 0.474281008558147 ], [ 101.454689736065546, 0.474282689185583 ], [ 101.454690141734233, 0.474277415492596 ], [ 101.454675479708683, 0.474275792817831 ], [ 101.454675016087322, 0.474281008558147 ] ] ] ] } }
]
}

]};</script>
<script>
var map = L.map('map').setView([  	0.47424620118399127,101.45489805767535], 20);
// kotak peta
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 30,
    id: 'mapbox.streets-satellite',
    accessToken: 'pk.eyJ1IjoicmF2ZW5rYWlnbyIsImEiOiJjazFtYW5lenQwMzlkM250MWdxbHYxdTMwIn0.8VTsz-5JRywb43JhiUqttA'

}).addTo(map);


	// control that shows state info on hover
	var info = L.control();

	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	info.update = function (props) {
		this._div.innerHTML = '<h4>Peta Lantai 2 PTSI</h4>' +  (props ?
			'<b>' + props.name + '</b><br />' + props.type + ''
			: 'Arahkan kursor');
	};

	info.addTo(map);


	// get color depending on population density value
	function getColor(d) {
		return d > 1000 ? '#800026' :
				d > 500  ? '#BD0026' :
				d > 200  ? '#E31A1C' :
				d > 100  ? '#FC4E2A' :
				d > 50   ? '#FD8D3C' :
				d > 20   ? '#FEB24C' :
				d > 10   ? '#FED976' :
							'#FFEDA0';
	}

	function style(feature) {
		return {
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.7,
			fillColor: getColor(feature.properties.id)
		};
	}

	function highlightFeature(e) {
		var layer = e.target;

		layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});

		if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
			layer.bringToFront();
		}

		info.update(layer.feature.properties);
	}

	var geojson;

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight,
			click: zoomToFeature
		});
	}

	geojson = L.geoJson(statesData, {
		style: style,
		onEachFeature: onEachFeature
	}).addTo(map);

	map.attributionControl.addAttribution('Peta Lantai 1 PTSI Pekanbaru');




</script>
</div>
