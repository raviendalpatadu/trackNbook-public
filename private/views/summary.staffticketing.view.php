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
                <div class="ticket-summary d-flex flex-column align-items-center">
                    <h3 class="width-fill text-align-center">Booking Summary</h3>
                    <div class="d-flex flex-column align-items-center g-20 p-10">

                        <div class="d-flex g-20 p-10 border-bottom">
                            <!-- train details and qr code -->
                            <div class="d-flex g-20 flex-column ticket-summary-train-data flex-grow">
                                <p class="ref-no" id="ticket_ref_no">Ref No: <?= $data['reservations'][0]->reservation_ticket_id ?></p>
                                <div class="d-flex g-5 ticket-summary-train-data-details flex-grow flex-column">
                                    <!-- <div class="ticket-summary-train-data-details flex-grow"> -->
                                    <div class="d-flex">
                                        <p class="width-fill heading">Price</p>
                                        <p class="width-fill"><?= number_format(floatval($data['fares'][0]->fare_price), 2) ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Train No</p>
                                        <p class="width-fill"><?= str_pad($data['reservations'][0]->reservation_train_id, 4, "0", STR_PAD_LEFT) ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Train Name</p>
                                        <p class="width-fill"><?= ucfirst($data['reservations'][0]->reservation_train_name) ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Start Station</p>
                                        <p class="width-fill"><?= ucfirst($data['reservations'][0]->reservation_start_station) ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">End Station</p>
                                        <p class="width-fill"><?= ucfirst($data['reservations'][0]->reservation_end_station) ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Arrival Time</p>
                                        <p class="width-fill"><?= date_format(date_create($data['reservations'][0]->estimated_arrival_time), "H:i") ?></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">No of Passengers</p>
                                        <p class="width-fill"><?= str_pad(count($data['reservations']), 2, "0", STR_PAD_LEFT) ?></p>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="" id="qr_code"></div>

                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-start g-10 passenger-compartment-details">
                            <p class="">Passenger and Compartment Details</p>
                            <table class="ticket-summary-passenger-compartment-details">
                                <tr>
                                    <?php
                                    $columns = array('Seat No(s)', 'Gender', 'NIC');
                                    foreach ($columns as $column) { ?>
                                        <th><?= $column ?></th>
                                    <?php } ?>
                                </tr>

                                <?php for ($i = 0; $i < count($data['reservations']); $i++) : ?>
                                    <tr>
                                        <td data-label="Seat No(s)"><?= (isset($data['reservations'][$i]->reservation_seat)) ? str_pad($data['reservations'][$i]->reservation_seat, 2, "0", STR_PAD_LEFT) : "-" ?></td>
                                        <td data-label="Gender"><?= (isset($data['reservations'][$i]->reservation_passenger_gender)) ? ucfirst($data['reservations'][$i]->reservation_passenger_gender) : "-" ?></td>
                                        <td data-label="NIC"><?= (isset($data['reservations'][$i]->reservation_passenger_nic)) ? $data['reservations'][$i]->reservation_passenger_nic : "-" ?></td>
                                    </tr>
                                <?php endfor; ?>



                            </table>
                        </div>
                    </div>
                </div>
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
    $('#qr_code').empty();

    var ticketID = '<?= $data['reservations'][0]->reservation_ticket_id ?>';
    console.log(ticketID);
    var qrcode = new QRCode("qr_code", {
        text: 'http://localhost/trackNbook/public/ticketchecker/summary/'+ ticketID,
        width: 128,
        height: 128,
        colorDark: "#324054",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H
    });
</script>