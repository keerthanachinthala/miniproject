<?php require_once('./complete-blog/config.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title></title>
    
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&libraries=places&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 400px;
      }

      /* Optional: Makes the sample page fill the window. 
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      body {
        padding: 0 !important;
      }*/

      table {
        font-size: 12px;
      }

      .hotel-search {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        left: 0;
        position: absolute;
        top: 0;
        width: 440px;
        z-index: 1;
      }

      #map {
        margin-top: 40px;
        width: 600px;
      }

      #listing {
        position: absolute;
        width: 200px;
        height: 470px;
        overflow: auto;
        left: 442px;
        top: 0px;
        cursor: pointer;
        overflow-x: hidden;
      }

      #findhotels {
        font-size: 14px;
      }

      #locationField {
        -webkit-box-flex: 1 1 190px;
        -ms-flex: 1 1 190px;
        flex: 1 1 190px;
        margin: 0 8px;
      }

      #controls {
        -webkit-box-flex: 1 1 140px;
        -ms-flex: 1 1 140px;
        flex: 1 1 140px;
      }

      #autocomplete {
        width: 100%;
      }

      #country {
        width: 100%;
      }

      .placeIcon {
        width: 20px;
        height: 34px;
        margin: 4px;
      }

      .hotelIcon {
        width: 24px;
        height: 24px;
      }

      #resultsTable {
        border-collapse: collapse;
        width: 240px;
      }

      #rating {
        font-size: 13px;
        font-family: Arial Unicode MS;
      }

      .iw_table_row {
        height: 18px;
      }

      .iw_attribute_name {
        font-weight: bold;
        text-align: right;
      }

      .iw_table_icon {
        text-align: right;
      }
    </style>
    <script>
      // This example uses the autocomplete feature of the Google Places API.
      // It allows the user to find all hotels in a given place, within a given
      // country. It then displays markers for all the hotels returned,
      // with on-click details for each hotel.
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      let map;
      let places;
      let infoWindow;
      let markers = [];
      let autocomplete;
      const countryRestrict = { country: "in" };
      const MARKER_PATH =
        "https://developers.google.com/maps/documentation/javascript/images/marker_green";
      const hostnameRegexp = new RegExp("^https?://.+?/");
      const countries = {
     /*   au: {
          center: { lat: -25.3, lng: 133.8 },
          zoom: 4,
        },
        br: {
          center: { lat: -14.2, lng: -51.9 },
          zoom: 3,
        },
        ca: {
          center: { lat: 62, lng: -110.0 },
          zoom: 3,
        },
        fr: {
          center: { lat: 46.2, lng: 2.2 },
          zoom: 5,
        },
        de: {
          center: { lat: 51.2, lng: 10.4 },
          zoom: 5,
        },
        mx: {
          center: { lat: 23.6, lng: -102.5 },
          zoom: 4,
        },
        nz: {
          center: { lat: -40.9, lng: 174.9 },
          zoom: 5,
        },
        it: {
          center: { lat: 41.9, lng: 12.6 },
          zoom: 5,
        },
        za: {
          center: { lat: -30.6, lng: 22.9 },
          zoom: 5,
        },
        es: {
          center: { lat: 40.5, lng: -3.7 },
          zoom: 5,
        },
        pt: {
          center: { lat: 39.4, lng: -8.2 },
          zoom: 6,
        },
        in: {
          center: { lat: 20.5937, lng: 78.9629 },
          zoom: 3,
        },
        uk: {
          center: { lat: 54.8, lng: -4.6 },
          zoom: 5,
        },*/
        in: {
          center: { lat: 20.5937, lng: 78.9629 },
          zoom: 5,
        },
      };

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          zoom: countries["in"].zoom,
          center: countries["in"].center,
          mapTypeControl: false,
          panControl: false,
          zoomControl: false,
          streetViewControl: false,
        });
        infoWindow = new google.maps.InfoWindow({
          content: document.getElementById("info-content"),
        });
        // Create the autocomplete object and associate it with the UI input control.
        // Restrict the search to the default country, and to place type "cities".
        autocomplete = new google.maps.places.Autocomplete(
          document.getElementById("autocomplete"),
          {
            types: ["(cities)"],
            componentRestrictions: countryRestrict,
          }
        );
        places = new google.maps.places.PlacesService(map);
        autocomplete.addListener("place_changed", onPlaceChanged);
        // Add a DOM event listener to react when the user selects a country.
        document
          .getElementById("country")
          .addEventListener("change", setAutocompleteCountry);
      }

      // When the user selects a city, get the place details for the city and
      // zoom the map in on the city.
      function onPlaceChanged() {
        const place = autocomplete.getPlace();

        if (place.geometry) {
          map.panTo(place.geometry.location);
          map.setZoom(15);
          search();
        } else {
          document.getElementById("autocomplete").placeholder = "Enter a city";
        }
      }

      // Search for hotels in the selected city, within the viewport of the map.
      function search() {
        const search = {
          bounds: map.getBounds(),
          type:"tourist_attraction",
          radius: 5000
        };
        console.log(map.getBounds());
        places.nearbySearch(search, (results, status, pagination) => {
          if (status === google.maps.places.PlacesServiceStatus.OK) {
            clearResults();
            clearMarkers();

            // Create a marker for each hotel found, and
            // assign a letter of the alphabetic to each marker icon.
            for (let i = 0; i < results.length; i++) {
              const markerLetter = String.fromCharCode(
                "A".charCodeAt(0) + (i % 26)
              );
              const markerIcon = MARKER_PATH + markerLetter + ".png";
              // Use marker animation to drop the icons incrementally on the map.
              markers[i] = new google.maps.Marker({
                position: results[i].geometry.location,
                animation: google.maps.Animation.DROP,
                icon: markerIcon,
              });
              // If the user clicks a hotel marker, show the details of that hotel
              // in an info window.
              markers[i].placeResult = results[i];
              google.maps.event.addListener(
                markers[i],
                "click",
                showInfoWindow
              );
              setTimeout(dropMarker(i), i * 100);
              addResult(results[i], i);
            }
          }
        });
      }

      function clearMarkers() {
        for (let i = 0; i < markers.length; i++) {
          if (markers[i]) {
            markers[i].setMap(null);
          }
        }
        markers = [];
      }

      // Set the country restriction based on user input.
      // Also center and zoom the map on the given country.
      function setAutocompleteCountry() {
        const country = document.getElementById("country").value;

        if (country == "all") {
          autocomplete.setComponentRestrictions({ country: [] });
          map.setCenter({ lat: 15, lng: 0 });
          map.setZoom(2);
        } else {
          autocomplete.setComponentRestrictions({ country: country });
          map.setCenter(countries[country].center);
          map.setZoom(countries[country].zoom);
        }
        clearResults();
        clearMarkers();
      }

      function dropMarker(i) {
        return function () {
          markers[i].setMap(map);
        };
      }

      function addResult(result, i) {
        const results = document.getElementById("results");
        const markerLetter = String.fromCharCode("A".charCodeAt(0) + (i % 26));
        const markerIcon = MARKER_PATH + markerLetter + ".png";
        const tr = document.createElement("tr");
        tr.style.backgroundColor = i % 2 === 0 ? "#F0F0F0" : "#FFFFFF";

        tr.onclick = function () {
          google.maps.event.trigger(markers[i], "click");
        };
        const iconTd = document.createElement("td");
        const nameTd = document.createElement("td");
        const icon = document.createElement("img");
        icon.src = markerIcon;
        icon.setAttribute("class", "placeIcon");
        icon.setAttribute("className", "placeIcon");
        const name = document.createTextNode(result.name);
        iconTd.appendChild(icon);
        nameTd.appendChild(name);
        tr.appendChild(iconTd);
        tr.appendChild(nameTd);
        results.appendChild(tr);
      }

      function clearResults() {
        const results = document.getElementById("results");

        while (results.childNodes[0]) {
          results.removeChild(results.childNodes[0]);
        }
      }

      // Get the place details for a hotel. Show the information in an info window,
      // anchored on the marker for the hotel that the user selected.
      function showInfoWindow() {
        const marker = this;
        places.getDetails(
          { placeId: marker.placeResult.place_id },
          (place, status) => {
            if (status !== google.maps.places.PlacesServiceStatus.OK) {
              return;
            }
            infoWindow.open(map, marker);
            buildIWContent(place);
          }
        );
      }

      // Load the place information into the HTML elements used by the info window.
      function buildIWContent(place) {
        document.getElementById("iw-icon").innerHTML =
          '<img class="hotelIcon" ' + 'src="' + place.icon + '"/>';
        document.getElementById("iw-url").innerHTML =
          '<b><a href="' + place.url + '">' + place.name + "</a></b>";
        document.getElementById("iw-address").textContent = place.vicinity;

        if (place.formatted_phone_number) {
          document.getElementById("iw-phone-row").style.display = "";
          document.getElementById("iw-phone").textContent =
            place.formatted_phone_number;
        } else {
          document.getElementById("iw-phone-row").style.display = "none";
        }

        // Assign a five-star rating to the hotel, using a black star ('&#10029;')
        // to indicate the rating the hotel has earned, and a white star ('&#10025;')
        // for the rating points not achieved.
        if (place.rating) {
          let ratingHtml = "";

          for (let i = 0; i < 5; i++) {
            if (place.rating < i + 0.5) {
              ratingHtml += "&#10025;";
            } else {
              ratingHtml += "&#10029;";
            }
            document.getElementById("iw-rating-row").style.display = "";
            document.getElementById("iw-rating").innerHTML = ratingHtml;
          }
        } else {
          document.getElementById("iw-rating-row").style.display = "none";
        }

        // The regexp isolates the first part of the URL (domain plus subdomain)
        // to give a short URL for displaying in the info window.
        if (place.website) {
          let fullUrl = place.website;
          let website = String(hostnameRegexp.exec(place.website));

          if (!website) {
            website = "http://" + place.website + "/";
            fullUrl = website;
          }
          document.getElementById("iw-website-row").style.display = "";
          document.getElementById("iw-website").textContent = website;
        } else {
          document.getElementById("iw-website-row").style.display = "none";
        }
      }
    </script>
  </head>
  <body>

<body>
  <nav class="navbar navbar-dark navbar-expand-sm fixed-top ">
        <div class="container">
            <button class="navbar-toggler" type="botton" data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--<a class="navbar-brand mr-auto" href="#"><img src="C:/Users/91986/Desktop/keer/logo.png" height="30" width="150px"></a>-->
            <div class="logo_div">
        <a href="index.php"><h1>Travel Advisor  </h1></a>
      </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Explore</a></li>
                    <li class="nav-item active"><a class="nav-link active" href="#"> Search</a></li>
                    <li class="nav-item"><a class="nav-link" href="./complete-blog/index.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">My Journey</a></li>
                </ul>
                <?php if (isset($_SESSION['user']['username'])) { ?>
						<div class=" dropdown text-right"  style="text-align: right;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="fa fa-user" style="color: white;"> <?php echo $_SESSION['user']['username'] ?></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./complete-blog/admin/create_post.php">Create your Own</a>
          <a class="dropdown-item" href="./complete-blog/admin/posts.php">My stories</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./coomplete-blog/logout.php">logout</a>
		</div>
				</div>
	  
	  <?php }else{ ?>
		<span class="navbar-text" style="text-align: right;">
                <a id="loginbutton" href="./complete-blog/login.php" style="text-decoration: none;">
                <span class="fa fa-sign-in"></span> Login/Sign up</a>
                </span>
					            
<?php }?>
            </div>
            

        </div>
    </nav>
  
    <div id="mycarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img  class="img-fluid"src="https://wallpapercave.com/wp/wp2392564.jpg" class="d-block w-100" alt="trek">
            <div class="text-block">
      <h1 style="font-family:'Georgia', serif; font-size: 80px;">Explore</h1></br></br>
      <h1 id="tag1" class="text-right" style="font-family:'Georgia', serif;">Let the adventures<br>Begin</h1>
      <!--<button id="myexplore" class="btn btn-sm btn-dark " ><h4>Explore <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h4></button>-->
      </div>
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="https://wallpapercave.com/wp/wp4190318.jpg" class="d-block w-100" alt="stone">
            <div class="text-block">
      <h1 style="font-family:'Georgia', serif; font-size: 80px;">Journey. Explore. Discover. Repeat</h1></br></br>
      <h1 id="tag1" class="text-right" style="font-family:'Georgia', serif;">Let the adventures<br>Begin</h1>
      <button id="myexplore" class="btn btn-sm btn-dark "><h4>Explore <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h4></button>
      
      </div>
        </div>
        <div class="carousel-item">
            <img  src="https://wallpaperaccess.com/full/211126.jpg" class="d-block w-100" alt="dusty">
            <div class="text-block">
      <h1 style="font-family:'Georgia', serif; font-size: 80px;">Journey. Explore. Discover. Repeat</h1></br></br>
      <h1 id="tag1" class="text-right" style="font-family:'Georgia', serif;">Let the adventures<br>Begin</h1>
      <button id="myexplore" class="btn btn-sm btn-dark "><h4>Explore <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h4></button>
      
      </div>
        </div>
      </div>
  </div></br></br></br><br>
<div class="container">
    <div class="row row-container">
        <div class="col-3">
            <h3 style="font-family: 'Trebuchet MS', Helvetica, sans-serif">Enter the location:</h3>
        </div>
        <div class="col-9">
            <form>
  <input id="autocomplete" type="text" name="search" placeholder="Location name.." onclick="my()">
</form>
        </div>
    <!--    <button class="btn btn-sm btn-dark" onclick="getcurrentlocation()">Get Current Location</button> -->
        <div class="col-12">
            <div id="panel"></div>

            <div id="map"></div>
            

    <!--<div id="map"></div>-->

    <div id="listing">
      <table id="resultsTable">
        <tbody id="results"></tbody>
      </table>
    </div>

    <div style="display: none">
      <div id="info-content">
        <table>
          <tr id="iw-url-row" class="iw_table_row">
            <td id="iw-icon" class="iw_table_icon"></td>
            <td id="iw-url"></td>
          </tr>
          <tr id="iw-address-row" class="iw_table_row">
            <td class="iw_attribute_name">Address:</td>
            <td id="iw-address"></td>
          </tr>
          <tr id="iw-phone-row" class="iw_table_row">
            <td class="iw_attribute_name">Telephone:</td>
            <td id="iw-phone"></td>
          </tr>
          <tr id="iw-rating-row" class="iw_table_row">
            <td class="iw_attribute_name">Rating:</td>
            <td id="iw-rating"></td>
          </tr>
          <tr id="iw-website-row" class="iw_table_row">
            <td class="iw_attribute_name">Website:</td>
            <td id="iw-website"></td>
          </tr>
        </table>
      </div>
    </div>
        </div>
        
    </div>
</div>


    <footer class="footer ">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.html">Explore</a></li>
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Myjourney</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                      101, Somewhere Somewhere<br>
                      Somewhere, Hyderabad<br>
                      INDIA<br>
                      <i class="fa fa-phone fa-lg"></i>: +91 555 555 555<br>
                      <i class="fa fa-fax fa-lg"></i>: +040 5555 5555<br>
                      <i class="fa fa-envelope fa-lg"></i>: <a href="#">noidea@lost.net</a>
                   </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center" style="background-color: white;">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon " href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 Travel Advisor</p>
                </div>
           </div>
        </div>
    </footer>

    
  </body>
</html>