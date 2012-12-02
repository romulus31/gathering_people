window.onload=initialize;

var longitudeCalifornia=37.77785;
var markerTrails;
/* itinirary */

var panel;
var initialize;
var calculate;
var direction;
/* itinirary */

var mapPrinc;
var gmarkers = [];
var latitudeCalifornia=-122.421551;
var locationBikeCalifornia = new google.maps.LatLng(longitudeCalifornia,latitudeCalifornia);

var contentTrails = '<h2>California Biking</h2>'+
					'<TEXTAREA name="description" rows=4 cols=40 readonly>Welcome to the california trails ! This association helps you to discover whole california by bike </TEXTAREA>'+
					'<img src="images/img02.jpg" width="160" height="120" hspace="10" border="1" alt="Thumbnail 0" id="Img02" />;';


var infowindowTrails = new google.maps.InfoWindow({
		content: contentTrails
	});


function initialize() {

  var mapOptions=
  {
		zoom: 16,
		//overviewMapControl : true; // chercher pourquoi empêche l'affichage de la carte
        center: locationBikeCalifornia, //new google.maps.LatLng(37.77785,-122.421551),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
	  mapPrinc=new google.maps.Map(document.getElementById("map_div"), mapOptions);

	  //createPolyline();
	  createMarkers(); // créer les marqueurs
	  direction = new google.maps.DirectionsRenderer({
		map   : mapPrinc,
		panel : panel
});
	  }
	  
	  
 function createMarkers()
  {
  
 
  var iconTrails = new google.maps.MarkerImage('images/markerSc.png', new google.maps.Size(35,39), new google.maps.Point(0,0), new google.maps.Point(10,35));
  
		var side_bar_html = "";

			markerTrails = new google.maps.Marker({
			icon: iconTrails,
			position: locationBikeCalifornia,
			map: mapPrinc,
			title: "California Trails"
		});

	google.maps.event.addListener(markerTrails, 'click', function() {
		infowindowTrails.open(mapPrinc, markerTrails);
	});
	gmarkers.push(markerTrails);
	
	side_bar_html += '<a href="javascript:myclick(' + (gmarkers.length-1) + ')">' 
	+ "California Trails" + '</a><br>';

	
	document.getElementById("side_bar").innerHTML = side_bar_html;
  }
   function myclick(i)
  {
		if(i==0)
		{	
		infowindowTrails.open(mapPrinc, markerTrails);
		}
		else if (i==1)
		{
		infowindowAquaCenter.open(map, markerAquaCenter);
		}
		
  }
  
  calculate = function(){
    origin = document.getElementById('origin').value; // Le point départ
  
    if(origin){
        var request = {
            origin      : origin,
            destination : locationBikeCalifornia,
            travelMode  : google.maps.DirectionsTravelMode.DRIVING // Type de transport
        }
        var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itinéraire
        directionsService.route(request, function(response, status){ // Envoie de la requête pour calculer le parcours
            if(status == google.maps.DirectionsStatus.OK){
                direction.setDirections(response); // Trace l'itinéraire sur la carte et les différentes étapes du parcours
				
            }
        });
    }
directionsDisplay.setMap(mapPrinc);
				directionsDisplay.setPanel(document.getElementById("pathDetail"));	
};
  
