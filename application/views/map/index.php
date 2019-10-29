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


        <!-- /.container-fluid -->


      <!-- End of Main Content -->


<div class="container-fluid">



<!-- leaflet map SCRIPT -->
<link rel="stylesheet" href="<?= base_url(); ?>/assets/leaflet/leaflet.css" />
<script src="<?= base_url(); ?>/assets/leaflet/leaflet.js"></script>
<link rel="stylesheet" href="<?= base_url(); ?>/assets/leaflet-compass.min.csss" />
<script src="<?= base_url(); ?>/assets/leaflet/leaflet-compass.min.js"></script>
<script src="leaflet.ajax.min.js"></script>
<div id='map'></div>

<script type="text/javascript">var statesData = {"type":"FeatureCollection","features":[
{
"type": "FeatureCollection",
"name": "bisadong",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
{ "type": "Feature", "properties": { "id": 1, "name": "PANTRY", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454732676315004, 0.474385102460369 ], [ 101.454738867027643, 0.474318379233945 ], [ 101.454714043185007, 0.474315268736171 ], [ 101.454708065945297, 0.474382388398612 ], [ 101.454732676315004, 0.474385102460369 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "TOILET", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.45473955319045, 0.474332170632147 ], [ 101.45476309619599, 0.474335128654533 ], [ 101.454766084815873, 0.474305975361686 ], [ 101.454742236849086, 0.474302864863906 ], [ 101.45473955319045, 0.474332170632147 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "IT", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454823364155558, 0.474388929592395 ], [ 101.454829951317734, 0.474333550534343 ], [ 101.454809213955329, 0.474330866967642 ], [ 101.454803236715577, 0.47438636800602 ], [ 101.454823364155558, 0.474388929592395 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "SERVER ROOM", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454831720092741, 0.474334099445713 ], [ 101.454825376899535, 0.474387892759815 ], [ 101.454834098790201, 0.474384538301465 ], [ 101.454841112898052, 0.474373804034733 ], [ 101.454842576711869, 0.474366973137714 ], [ 101.454846541207644, 0.474335868160129 ], [ 101.454831720092741, 0.474334099445713 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "SEKRETARIS", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454800919010225, 0.474385880084805 ], [ 101.454806774265506, 0.474334526376779 ], [ 101.454787500716904, 0.474332086770688 ], [ 101.45478188943062, 0.474383440478732 ], [ 101.454800919010225, 0.474385880084805 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "KACAB", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454788110639427, 0.474308910512776 ], [ 101.454766214424424, 0.474305921995303 ], [ 101.454762890347226, 0.474338338261296 ], [ 101.454762890347226, 0.474338338261296 ], [ 101.454739469326142, 0.474335227763531 ], [ 101.45473478817155, 0.474383897904871 ], [ 101.454779503109251, 0.474389669097986 ], [ 101.454788110639427, 0.474308910512776 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "KABAG KOMERSIL", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454848024081642, 0.474333009246742 ], [ 101.454855434639072, 0.474265706613363 ], [ 101.454827500192067, 0.474261711758348 ], [ 101.454820455588091, 0.474329166867146 ], [ 101.454848024081642, 0.474333009246742 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "KABAG KOMERSIL 2", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454794594877328, 0.474255978683972 ], [ 101.454759951283663, 0.474251343432345 ], [ 101.454754583966334, 0.474301477337936 ], [ 101.454789471528969, 0.474306478530445 ], [ 101.454794594877328, 0.474255978683972 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "RUANG MEETING", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454793558009214, 0.474147721161607 ], [ 101.454756779687074, 0.47414235402806 ], [ 101.454753913051675, 0.474172910095131 ], [ 101.454790508397124, 0.474177911287733 ], [ 101.454793558009214, 0.474147721161607 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "TOILET", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454881203861547, 0.47441674872533 ], [ 101.454867968544932, 0.474415284961692 ], [ 101.454864979925063, 0.474438461219248 ], [ 101.454878520202882, 0.474440290923788 ], [ 101.454881203861547, 0.47441674872533 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "MUSHALLA", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454665748765322, 0.474365013829083 ], [ 101.454661357323957, 0.47441356198991 ], [ 101.454689657724373, 0.474416245556579 ], [ 101.454689840701093, 0.474413196049001 ], [ 101.454689535739902, 0.474398863363364 ], [ 101.454687157042429, 0.474387885136048 ], [ 101.454683863461355, 0.474379468495093 ], [ 101.454677886221603, 0.474371234824585 ], [ 101.454670506160227, 0.474365867691211 ], [ 101.454665748765322, 0.474365013829083 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "TOILET", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454714723630119, 0.474295597506039 ], [ 101.454717163319799, 0.474265956291803 ], [ 101.454704842886855, 0.474264492528134 ], [ 101.454702525181659, 0.474294499683292 ], [ 101.454714723630119, 0.474295597506039 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "GUDANG", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454700390453169, 0.4742941032473 ], [ 101.454709508793414, 0.474184991863381 ], [ 101.454679317633449, 0.474180661562475 ], [ 101.454671663107035, 0.474290748788904 ], [ 101.454700390453169, 0.4742941032473 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "GUDANG", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454715760498289, 0.474098904261049 ], [ 101.45468526437709, 0.474094390989625 ], [ 101.454679653090807, 0.474177764530177 ], [ 101.454709722266287, 0.474181972850778 ], [ 101.454715760498289, 0.474098904261049 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "PEMASARAN", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454865160996007, 0.474187827905523 ], [ 101.454875224716019, 0.474109150606973 ], [ 101.454874370824641, 0.474101648817995 ], [ 101.454871931134946, 0.474095122871478 ], [ 101.454867600685745, 0.474089694747736 ], [ 101.454861989399447, 0.47408768207264 ], [ 101.454825333061777, 0.474082741870127 ], [ 101.454816001248645, 0.474166603332049 ], [ 101.454826857867786, 0.474182948693236 ], [ 101.454865160996007, 0.474187827905523 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "TOILET", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454755329215672, 0.474278024718295 ], [ 101.454744594581015, 0.47427680491524 ], [ 101.454742459852525, 0.474299920183106 ], [ 101.454753194487196, 0.474301200976311 ], [ 101.454755329215672, 0.474278024718295 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "TOILET", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.4547447165655, 0.474273572437141 ], [ 101.454755634176877, 0.474275158181114 ], [ 101.454757768905353, 0.474252408854083 ], [ 101.454747034270696, 0.474251067070717 ], [ 101.4547447165655, 0.474273572437141 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "KASI", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454713412297124, 0.474168425412893 ], [ 101.454706703150464, 0.474242101518219 ], [ 101.454729392264639, 0.474245273006178 ], [ 101.454735491488876, 0.474171718881194 ], [ 101.454713412297124, 0.474168425412893 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "ADOP", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454758577052544, 0.474099598024056 ], [ 101.454718230684207, 0.474093331285694 ], [ 101.454712863366879, 0.474166397490281 ], [ 101.454752081378729, 0.47417234403027 ], [ 101.454758577052544, 0.474099598024056 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "PARKIR SEPEDA MOTOR", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454841861959466, 0.474434952379604 ], [ 101.454843447757753, 0.474422876329618 ], [ 101.454734393628371, 0.474409031565214 ], [ 101.454733173783538, 0.474420985634921 ], [ 101.454841861959466, 0.474434952379604 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "BUNKER", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454866197864177, 0.474414703649313 ], [ 101.45484668034662, 0.474412386023553 ], [ 101.454843752719, 0.474435318320512 ], [ 101.454863636190012, 0.474438245847778 ], [ 101.454866197864177, 0.474414703649313 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 1, "name": "RESEPSIONIS", "type": "ROOM" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454822527418671, 0.474082642761128 ], [ 101.454762511052181, 0.474073860178875 ], [ 101.454757021750368, 0.47413911964396 ], [ 101.454815757279775, 0.474146926383667 ], [ 101.454822527418671, 0.474082642761128 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "FUNGSIONAL", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454796300754452, 0.474236459929056 ], [ 101.454800570211432, 0.474197426230937 ], [ 101.454788615731914, 0.474195840486946 ], [ 101.454790445499199, 0.474181080869784 ], [ 101.45475336221584, 0.474176079677184 ], [ 101.454747750929528, 0.474230116953127 ], [ 101.454796300754452, 0.474236459929056 ] ] ] ] } },
{ "type": "Feature", "properties": { "id": 200, "name": "POS SECURITY", "type": "OFFICE" }, "geometry": { "type": "MultiPolygon", "coordinates": [ [ [ [ 101.454932435439503, 0.474042938170438 ], [ 101.454914747689216, 0.474040742524863 ], [ 101.454911393115879, 0.474070505720373 ], [ 101.454928531935977, 0.474072579385629 ], [ 101.454932435439503, 0.474042938170438 ] ] ] ] } }
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
		this._div.innerHTML = '<h4>Peta Lantai 1 PTSI</h4>' +  (props ?
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
map.addControl( new L.Control.Compass() );



</script>
</div>
