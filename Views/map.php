<div class="row">
			<div class="mainContent">
				<div class="large-4 columns">
					<h3 style="text-align:center;font-weight: bold; color:#003654; ">Locations</h3>
					<ul class="ndrysho">
						<span onclick="initMap(43.143484, 13.08313)"><li>Colle Paradiso</li></span>
						<span onclick="initMap(43.142401, 13.079734)"><li>Contram</li></span>
						<span onclick="initMap(43.146560, 13.066600)"><li>Campus</li></span>
						<span onclick="initMap(43.139535, 13.068700)"><li>Polo Carla Ludovici</li></span>
						<span onclick="initMap(43.139850, 13.068137)"><li>Polo Giachetta</li></span>
						<span onclick="initMap(43.141054, 13.068017)"><li>Scuola di Scienze Ambientali</li></span>
						<span onclick="initMap(43.138390, 13.068166)"><li>D'Avack</li></span>
						<span onclick="initMap(43.138303, 13.069933)"><li>Dipartimento di Scienze Chimiche</li></span>
						<span onclick="initMap(43.155509, 13.052629)"><li>Impianti Sportivi CUS</li></span>
					</ul>
				</div>
				<style>
			       #map {
			        height: 400px;
			        width: 100%;
			       }
			       .ndrysho span {
			       		color: #424242;
			       }
			       .ndrysho span:hover {
			       	cursor: pointer;
			       	color: #c60b22;
			       }
			    </style>
			    <div class="large-8 columns">
			    	<div id="map"></div>
			    </div>
				
				    <script>
				      function initMap(lati, long) {
				      	if(!lati){
				      		lati = 43.1355301;
				      		long = 13.0686574;
				      	}
				        var uluru = {lat: lati, lng: long};
				        var map = new google.maps.Map(document.getElementById('map'), {
				          zoom: 17,
				          center: uluru
				        });
				        var marker = new google.maps.Marker({
				          position: uluru,
				          map: map
				        });
				      }
				    </script>
				    <script async defer
				    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6UeAMyLBRPS_OswztWDMFGpmgu_i5Dd8&callback=initMap">
				    </script>
			    </script>
				<div class="large-12 columns travelingBox">
					<h3 style="text-align:center;font-weight: bold;color:#003654; ">Traveling Tips</h3>
					<ul>
						<li>
							<p>
								 From Ancona Falconara A irport:
•by taxi (approx. 130 Euro for up  to seven passengers, 1,15  hour).
•by train from Ancona or Falconara Marittima train station (about 15 Euro). Take the train to Fabriano and once there the connection to Castelraimondo/Camerino. The railway station 'Camerino-Castelraimondo' is on a branch line connected to the station of Fabriano that is located on the main Rome to Ancona line. A regular bus service scheduled for each arrival connects 'Camerino-Castelraimondo' station with the centre of Camerino-(1 Euro, about 10 minutes
							</p>
						</li>
						<li>
							<p>
								Rome Fiumicino airport 
by train
Take the express train from the Airport station to Roma Termini station (30 minutes).
Take the train for Ancona to either Foligno station (1 1/2 hours) or Fabriano station (2 hours).
From Foligno station take a taxi to Camerino (45 minutes, 90 Euro for up to seven passengers) or a bus (departure hours 15.10 and 17,30 from Mondays to Saturdays www.contram.it)
From Fabriano station, take the local train for Civitanova Marche to Castelraimondo-Camerino (30 minutes).
Once there buses are scheduled for each arrival(1 Euro, about 10 minutes
To help you in planning your train schedule, please visit the website
 http://www.trenitalia.com/
							</p>
						</li>
						<li>
							<p>
								Important information when travelling by train in Italy.

You MUST stamp your ticket on the platform before boarding the train
On Eurostar trains you should make a seat reservation before boarding the train.
To help you in planning your train schedule, please visit the website
 http://www.trenitalia.com/
							</p>
						</li>
					</ul>
					<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d371296.4765425554!2d13.06491394570365!3d43.36126184901289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x132d802a2447a9c3%3A0xfad5680543fc5ac!2sAncona%2C+Province+of+Ancona%2C+Italy!3m2!1d43.6158299!2d13.518915!4m5!1s0x132ddb925134594d%3A0xf9cad7fc944f5f5f!2sCamerino%2C+Province+of+Macerata%2C+Italy!3m2!1d43.135650299999995!2d13.068325399999999!5e0!3m2!1sen!2sus!4v1488752144240" width="49%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d752896.438157001!2d12.285053476030214!3d42.512771611295726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x132f6196f9928ebb%3A0xb90f770693656e38!2sRome%2C+Metropolitan+City+of+Rome%2C+Italy!3m2!1d41.9027835!2d12.4963655!4m5!1s0x132ddb925134594d%3A0xf9cad7fc944f5f5f!2sCamerino%2C+Province+of+Macerata%2C+Italy!3m2!1d43.135650299999995!2d13.068325399999999!5e0!3m2!1sen!2sus!4v1488752187916" width="49%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>