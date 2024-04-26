<?php

$total_seats = 60;
$top_seats = 2;
$bottom_seats = 3;

$total_columns = $total_seats / ($top_seats + $bottom_seats);
$seat_no = 1;

$reserved_seats = array(1, 32, 43, 24, 40, 6, 57, 8);


?>


<?php $this->view("./includes/header"); ?>

<body>
    <div class="column-left">
        <?php $this->view("./includes/navbar") ?>
        <main class="d-flex align-items-center">
            <div class="container d-flex justify-content-center flex-grow">
                <div class="passenger-container">
                    <!-- complete loader -->


                    <div class="row">
                        <div class="col-6 width-fill d-flex">
                            <div class="map flex-grow" id="map"></div>
                        </div>

                        <div class="col-6 d-flex flex-column justify-content-center align-items-center p-20 g-20">
                            <form action="" method="post" class="width-fill">
                                <div class="text-inputs">
                                    <div class="input-text-label">Enter Train No</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" name="train_id" id="trainId" value="<?= get_var('train_id') ?>">
                                        </div>
                                    </div>
                                    <?= printError($data, 'train_id') ?>
                                </div>
                            </form>
                            <div class="d-flex justify-content-start flex-column g-20 track-content">
                                <div class="d-flex flex-row align-items-center g-10">
                                    <h2 class="topic black">Current Station</h2>
                                    <p class="track-text d-flex align-self-end flex-grow">Colombo Fort</p>
                                </div>
                                <div class="d-flex flex-row align-items-center g-10">
                                    <h2 class="topic black">Arrived at</h2>
                                    <p class="track-text d-flex align-self-end flex-grow">06.00</p>
                                </div>
                                <div class="d-flex flex-row align-items-center g-10">
                                    <h3 class="topic black">Next Station</h3>
                                    <p class="track-text d-flex align-self-end flex-grow">Maradana</p>
                                </div>
                                <div class="d-flex flex-row align-items-center g-10">
                                    <h4 class="topic black">Train Name</h4>
                                    <p class="track-text d-flex align-self-end flex-grow">Udarata Menike Express Train</p>
                                </div>
                                <div class="d-flex flex-row align-items-center g-10">
                                    <h4 class="topic black">Train No</h4>
                                    <p class="track-text d-flex align-self-end flex-grow">1106</p>
                                </div>
                                <div class="d-flex flex-row align-items-center justify-content-end g-10">
                                    <button class="button"><a href="<?= ROOT ?>home">
                                            <div class="button-base">
                                                <div class="text">Back</div>
                                            </div>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>

</html>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCranEueyo_pnCvKoHJwegdlluPvTPjyhU&callback=initMap&v=weekly" defer></script>

<script>
    function initMap() {
        function calculateAndDisplayRoute(directionsService, directionsRenderer, originLatLng, destinationLatLng, markerToAdd) {
            directionsService
                .route({
                    origin: {
                        lat: originLatLng.lat,
                        lng: originLatLng.lng
                    },
                    destination: {
                        lat: destinationLatLng.lat,
                        lng: destinationLatLng.lng
                    },
                    travelMode: google.maps.TravelMode.TRANSIT,
                    transitOptions: {
                        modes: [google.maps.TransitMode.TRAIN]
                    }
                })
                .then((response) => {
                    // Add marker before setting directions
                    markerToAdd.setMap(directionsRenderer.getMap()); // Set map for marker
                    directionsRenderer.setDirections(response);
                })
                .catch((e) => window.alert("Directions request failed due to " + status));
        }

        async function findPlaces(stationName, callback) {
            const {
                Place
            } = await google.maps.importLibrary("places");
            const {
                AdvancedMarkerElement
            } = await google.maps.importLibrary("marker");
            const request = {
                textQuery: stationName,
                fields: ["displayName", "location"],
                includedType: "train_station"
            };
            //@ts-ignore
            const {
                places
            } = await Place.searchByText(request);

            if (places.length) {
                callback(places);
            } else {
                console.log("No results");
            }
        }

        function drawMap(startStationMap, endStationMap, markerOptions) {

            findPlaces(startStationMap + ' railway station', function(res) {
                var startStation = res[0].Fg.location;
                findPlaces(endStationMap + ' railway station', function(resp) {
                    var endStation = resp[0].Fg.location;

                    // Create a marker object with desired options
                    const marker = new google.maps.Marker(markerOptions);

                    calculateAndDisplayRoute(directionsService, directionsRenderer, startStation, endStation, marker);
                });
            });

            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer();
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 10,
                center: {
                    lat: 6.9337010999999995,
                    lng: 79.85003019999999
                }
            });

            directionsRenderer.setMap(map);
        }

        // Example usage:
        const markerOptions = {
            position: {
                lat: 7.000000,
                lng: 80.000000
            }, // Your desired marker location along the route (latitude, longitude)
            map: null, // Initially set to null, will be set by calculateAndDisplayRoute
            icon: { // Optional: Customize marker icon
                url: "https://www.example.com/marker_icon.png", // Replace with your icon image URL
                scaledSize: new google.maps.Size(32, 32) // Size of the icon
            }
        };

        drawMap('colombo', 'kandy', markerOptions);


        $('#trainId').on('change', function() {
            $.ajax({
                url: '<?= ROOT ?>ajax/getTrainLocation',
                type: 'POST',
                data: {
                    train_id: $('#trainId').val()
                },
                success: function(res) {
                    var data = JSON.parse(res);
                    // data = data.train;
                    console.log(data);
                    if (data != false) {
                        $('.track-content .track-text').eq(0).text(data.train[0].current_station);
                        $('.track-content .track-text').eq(1).text(data.train[0].train_location_updated_time);
                        $('.track-content .track-text').eq(2).text(data.train[0].next_station);
                        $('.track-content .track-text').eq(3).text(data.train[0].train_name);
                        $('.track-content .track-text').eq(4).text(data.train[0].train_id);
                    } else {
                        alert('Invalid Train No')
                    }
                }
            })
        })


    }
</script>