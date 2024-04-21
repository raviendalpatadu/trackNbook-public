<?php

// echo "<pre>";
// print_r($data);
// echo "</pre>";

?>


<?php $this->view("./includes/header"); ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main class="bg">
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <div class="staff-ticket-summary d-flex flex-column ">
                    <h2 class="width-fill text-align-center pt-10">Booking Summary</h2>
                    <div class="d-flex flex-column  g-20 p-10">

                        <div class="d-flex g-20 p-10 border-bottom-light-gray">
                            <!-- train details and qr code -->
                            <div class="d-flex g-20 flex-column ticket-summary-train-data flex-grow">
                                <p class="ref-no" id="ticket_ref_no">Ref No: <?= $data['from_reservation_ticket_id'] ?></p>
                                <div class="d-flex g-5 ticket-summary-train-data-details flex-grow flex-column">
                                    <!-- <div class="ticket-summary-train-data-details flex-grow"> -->
                                    
                                    <div class="d-flex">
                                        <p class="width-fill heading">Train No</p>
                                        <p class="width-fill"><?= str_pad($data['from_train']->train_id, 4, "0", STR_PAD_LEFT) ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Train Name</p>
                                        <p class="width-fill"><?= ucfirst($data['from_train']->train_name) ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Start Station</p>
                                        <p class="width-fill"><?= ucfirst($data['from_station']->station_name) ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">End Station</p>
                                        <p class="width-fill"><?= ucfirst($data['to_station']->station_name) ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Arrival Time</p>
                                        <p class="width-fill"><?= date_format(date_create($data['from_train']->train_start_time), "H:i") ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Compartment Type</p>
                                        <p class="width-fill"><?= ucfirst($data['from_compartment_type']->compartment_class_type) ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Price</p>
                                        <p class="width-fill"><?= number_format(floatval($data['from_fare']->fare_price), 2) ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">No of Passengers</p>
                                        <p class="width-fill"><?= str_pad(($data['no_of_passengers']), 2, "0", STR_PAD_LEFT) ?></p>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>

                            <div class="d-flex justify-content-center align-items-center">
                                <div id="from_qr_code"></div>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center g-10 passenger-compartment-details">
                            <p class="">Passenger and Compartment Details</p>
                            <table class="ticket-summary-passenger-compartment-details text-align-center">

                                <tr class="mobile-display-none">
                                    <?php
                                    $columns = array('Seat No(s)', 'Gender', 'NIC');
                                    foreach ($columns as $column) : ?>
                                        <th class="display-none mobile-display-block"><?= $column ?></th>
                                    <?php endforeach; ?>
                                </tr>

                                <?php for ($i = 0; $i < count(Auth::getFrom_selected_seats()); $i++) : ?>
                                    <tr class="display-none mobile-display-block">
                                        <td data-label="Seat No(s)"><?= (isset(Auth::getFrom_selected_seats()[$i])) ? str_pad(Auth::getFrom_selected_seats()[$i], 2, "0", STR_PAD_LEFT) : "-" ?></td>
                                        <td data-label="Gender"><?= (isset(Auth::getpassenger_data()["reservation_passenger_gender"][$i])) ? ucfirst(Auth::getpassenger_data()["reservation_passenger_gender"]["$i"]) : "-" ?></td>
                                        <td data-label="NIC"><?= (isset(Auth::getpassenger_data()['reservation_passenger_nic'][$i])) ? Auth::getpassenger_data()['reservation_passenger_nic'][$i] : "-" ?></td>
                                    </tr>
                                <?php endfor; ?>

                                <tr class="mobile-display-none">
                                    <th class="mobile-display-none">Seat No(s)</th>
                                    <?php for ($i = 0; $i < count(Auth::getFrom_selected_seats()); $i++) : ?>
                                        <td class="mobile-display-none" data-label="Seat No(s)"><?= (isset(Auth::getFrom_selected_seats()[$i])) ? str_pad(Auth::getFrom_selected_seats()[$i], 2, "0", STR_PAD_LEFT) : "-" ?></td>
                                    <?php endfor; ?>
                                </tr>

                                <tr class="mobile-display-none">
                                    <th>Gender</th>
                                    <?php for ($i = 0; $i < count(Auth::getFrom_selected_seats()); $i++) : ?>
                                        <td data-label="Gender"><?= (isset(Auth::getpassenger_data()["reservation_passenger_gender"]["$i"])) ? ucfirst(Auth::getpassenger_data()["reservation_passenger_gender"]["$i"]) : "-" ?></td>
                                    <?php endfor; ?>
                                </tr>
                                <tr class="mobile-display-none">
                                    <th>NIC</th>
                                    <?php for ($i = 0; $i < count(Auth::getFrom_selected_seats()); $i++) : ?>
                                        <td data-label="NIC"><?= (isset(Auth::getpassenger_data()['reservation_passenger_nic'][$i])) ? Auth::getpassenger_data()['reservation_passenger_nic'][$i] : "-" ?></td>
                                    <?php endfor; ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <?php if (Auth::getReturn() == 'on') : ?>
                    <div class="ticket-summary d-flex flex-column display-none" id="toTicketSummary">
                        <h3 class="width-fill text-align-center">Booking Summary</h3>
                        <div class="d-flex flex-column g-20">

                            <div class="d-flex mobile-flex-column-reverse pb-20 width-fill border-bottom g-100 mobile-g-20">
                                <!-- train details and qr code -->
                                <div class="d-flex g-20 flex-column ticket-summary-train-data flex-grow">
                                    <p class="ref-no">Ref No: <?= Auth::getto_reservation_ticket_id() ?></p>
                                    <div class="d-flex g-5 ticket-summary-train-data-details flex-grow flex-column">
                                        <!-- <div class="ticket-summary-train-data-details flex-grow"> -->
                                        <div class="d-flex">
                                            <p class="width-fill heading">Price</p>
                                            <p class="width-fill"><?= number_format(floatval(Auth::reservation()['to_fare']->fare_price), 2) ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <p class="width-fill heading">Train No</p>
                                            <p class="width-fill"><?= str_pad(Auth::reservation()['to_train']->train_id, 4, '0', STR_PAD_LEFT) ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <p class="width-fill heading">Train Name</p>
                                            <p class="width-fill"><?= ucfirst(Auth::reservation()['to_train']->train_name) ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <p class="width-fill heading">Reservation Date</p>
                                            <p class="width-fill"><?= Auth::reservation()['to_date'] ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <p class="width-fill heading">Start Station</p>
                                            <p class="width-fill"><?= ucfirst(Auth::reservation()['to_station']->station_name) ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <p class="width-fill heading">End Station</p>
                                            <p class="width-fill"><?= ucfirst(Auth::reservation()['from_station']->station_name) ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <p class="width-fill heading">Arrival Time</p>
                                            <p class="width-fill"><?= date_format(date_create(Auth::reservation()['to_train']->train_start_time), "H:i") ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <p class="width-fill heading">No of Passengers</p>
                                            <p class="width-fill"><?= str_pad(Auth::reservation()['no_of_passengers'], 2, "0", STR_PAD_LEFT) ?></p>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center align-items-center">
                                    <div id="to_qr_code"></div>
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-start g-10 passenger-compartment-details">
                                <p class="">Passenger and Compartment Details</p>
                                <table class="ticket-summary-passenger-compartment-details text-align-center">

                                    <tr class="mobile-display-none">
                                        <?php
                                        $columns = array('Seat No(s)', 'Gender', 'NIC');
                                        foreach ($columns as $column) : ?>
                                            <th class="display-none mobile-display-block"><?= $column ?></th>
                                        <?php endforeach; ?>
                                    </tr>

                                    <?php for ($i = 0; $i < count(Auth::getTo_selected_seats()); $i++) : ?>
                                        <tr class="display-none mobile-display-block">
                                            <td data-label="Seat No(s)"><?= (isset(Auth::getTo_selected_seats()[$i])) ? str_pad(Auth::getTo_selected_seats()[$i], 2, "0", STR_PAD_LEFT) : "-" ?></td>
                                            <td data-label="Gender"><?= (isset(Auth::getpassenger_data()["reservation_passenger_gender"][$i])) ? ucfirst(Auth::getpassenger_data()["reservation_passenger_gender"]["$i"]) : "-" ?></td>
                                            <td data-label="NIC"><?= (isset(Auth::getpassenger_data()['reservation_passenger_nic'][$i])) ? Auth::getpassenger_data()['reservation_passenger_nic'][$i] : "-" ?></td>
                                        </tr>
                                    <?php endfor; ?>

                                    <tr class="mobile-display-none">
                                        <th class="mobile-display-none">Seat No(s)</th>
                                        <?php for ($i = 0; $i < count(Auth::getTo_selected_seats()); $i++) : ?>
                                            <td class="mobile-display-none" data-label="Seat No(s)"><?= (isset(Auth::getTo_selected_seats()[$i])) ? str_pad(Auth::getTo_selected_seats()[$i], 2, "0", STR_PAD_LEFT) : "-" ?></td>
                                        <?php endfor; ?>
                                    </tr>

                                    <tr class="mobile-display-none">
                                        <th>Gender</th>
                                        <?php for ($i = 0; $i < count(Auth::getTo_selected_seats()); $i++) : ?>
                                            <td data-label="Gender"><?= (isset(Auth::getpassenger_data()["reservation_passenger_gender"]["$i"])) ? ucfirst(Auth::getpassenger_data()["reservation_passenger_gender"]["$i"]) : "-" ?></td>
                                        <?php endfor; ?>
                                    </tr>
                                    <tr class="mobile-display-none">
                                        <th>NIC</th>
                                        <?php for ($i = 0; $i < count(Auth::getTo_selected_seats()); $i++) : ?>
                                            <td data-label="NIC"><?= (isset(Auth::getpassenger_data()['reservation_passenger_nic'][$i])) ? Auth::getpassenger_data()['reservation_passenger_nic'][$i] : "-" ?></td>
                                        <?php endfor; ?>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-12">
                        <button class="button mt-20 ">
                            <div class="button-base">
                                <div class="text">Print Ticket</div>
                            </div>
                        </button>
                    </div>
                </div>

            </div>



        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>

</html>
<script>

    var fromTicketID = <?= Auth::getfrom_reservation_ticket_id() ?>;
    var fromQrcode = new QRCode("from_qr_code", {
        text: 'http://localhost/trackNbook/public/ticketchecker/summary/'+ fromTicketID, 
        width: 128,
        height: 128,
        colorDark: "#324054",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H
    });
    var toTicketID = <?= Auth::getto_reservation_ticket_id() ?>;
    var toQrcode = new QRCode("to_qr_code", {
        text: 'http://localhost/trackNbook/public/ticketchecker/summary/'+ toTicketID,
        width: 128,
        height: 128,
        colorDark: "#324054",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H
    });
    
</script>