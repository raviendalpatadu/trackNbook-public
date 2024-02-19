<?php

echo "<pre>";
// // print_r($data);
// print_r($_SESSION);
echo "</pre>";
?>
<?php $this->view("./includes/header"); ?>

<body>
    <div class="column-left">
        <?php $this->view("./includes/navbar") ?>
        <main>
            <div class="container d-flex justify-content-center">
                <div class="passenger-container">
                    <div class="row mb-50 mobile-mb-20">
                        <div class="col-12">
                            <div class="loader d-flex align-items-center justify-content-center px-20">
                                <div class="loader-circle complete">
                                    <div class="loader-circle-text white">1</div>
                                </div>
                                <div class="divider complete"></div>

                                <div class="loader-circle complete">
                                    <div class="loader-circle-text white">2</div>
                                </div>

                                <div class="divider complete"></div>

                                <div class="loader-circle complete">
                                    <div class="loader-circle-text white">3</div>
                                </div>

                                <div class="divider complete"></div>

                                <div class="loader-circle complete">
                                    <div class="loader-circle-text white">4</div>
                                </div>

                                <div class="divider complete"></div>

                                <div class="loader-circle complete">
                                    <div class="loader-circle-text white">5</div>
                                </div>

                                <div class="divider complete"></div>

                                <div class="loader-circle  complete active">
                                    <div class="loader-circle-text white">6</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container d-flex flex-column g-20 justify-content-center">
                        <div class="ticket-summary d-flex flex-column" id="ticketSummary">
                            <h3 class="width-fill text-align-center">Booking Summary</h3>
                            <div class="d-flex flex-column g-20">

                                <div class="d-flex mobile-flex-column-reverse pb-20 width-fill border-bottom g-100 mobile-g-20">
                                    <!-- train details and qr code -->
                                    <div class="d-flex g-20 flex-column ticket-summary-train-data flex-grow">
                                        <p class="ref-no">Ref No: <?= Auth::getreservation_ticket_id() ?></p>
                                        <div class="d-flex g-5 ticket-summary-train-data-details flex-grow flex-column">
                                            <!-- <div class="ticket-summary-train-data-details flex-grow"> -->
                                            <div class="d-flex">
                                                <p class="width-fill heading">Price</p>
                                                <p class="width-fill"><?= number_format(floatval(Auth::reservation()['fare']->fare_price), 2) ?></p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="width-fill heading">Train No</p>
                                                <p class="width-fill"><?= str_pad(Auth::reservation()['train']->train_id, 4, '0', STR_PAD_LEFT) ?></p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="width-fill heading">Train Name</p>
                                                <p class="width-fill"><?= ucfirst(Auth::reservation()['train']->train_name) ?></p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="width-fill heading">Start Station</p>
                                                <p class="width-fill"><?= ucfirst(Auth::reservation()['from_station']->station_name) ?></p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="width-fill heading">End Station</p>
                                                <p class="width-fill"><?= ucfirst(Auth::reservation()['to_station']->station_name) ?></p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="width-fill heading">Arrival Time</p>
                                                <p class="width-fill"><?= date_format(date_create(Auth::reservation()['train']->train_start_time), "H:i") ?></p>
                                            </div>
                                            <div class="d-flex">
                                                <p class="width-fill heading">No of Passengers</p>
                                                <p class="width-fill"><?= str_pad(Auth::reservation()['no_of_passengers'], 2, "0", STR_PAD_LEFT) ?></p>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center">
                                        <div id="qr_code"></div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column align-items-start g-10 passenger-compartment-details">
                                    <p class="">Passenger and Compartment Details</p>
                                    <table class="ticket-summary-passenger-compartment-details text-align-center">

                                        <tr>
                                            <th>Seat No(s)</th>
                                            <?php for ($i = 0; $i < count(Auth::getSelected_seats()); $i++) : ?>
                                                <td><?= (isset(Auth::getSelected_seats()[$i])) ? str_pad(Auth::getSelected_seats()[$i], 2, "0", STR_PAD_LEFT) : "-" ?></td>
                                            <?php endfor; ?>
                                        </tr>
                                        <tr>
                                            <th>Gender</th>
                                            <?php for ($i = 0; $i < count(Auth::getSelected_seats()); $i++) : ?>
                                                <td><?= (isset(Auth::getpassenger_data()["reservation_passenger_gender"]["$i"])) ? ucfirst(Auth::getpassenger_data()["reservation_passenger_gender"]["$i"]) : "-" ?></td>
                                            <?php endfor; ?>
                                        </tr>
                                        <tr>
                                            <th>NIC</th>
                                            <?php for ($i = 0; $i < count(Auth::getSelected_seats()); $i++) : ?>
                                                <td><?= (isset(Auth::getpassenger_data()['reservation_passenger_nic'][$i])) ? Auth::getpassenger_data()['reservation_passenger_nic'][$i] : "-" ?></td>
                                            <?php endfor; ?>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex g-20 justify-content-center">
                            <!-- home btn and print btn -->
                            <button class="button mx-10">
                                <div class="button-base"><a href="<?= ROOT ?>">
                                        <div class="text">Home</div>
                                </div></a>
                            </button>
                            <button class="button mx-10" id="downloadTicket">
                                <div class="button-base">
                                    <div class="text">Download Ticket</div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
        </main>
        <?php $this->view("./includes/footer") ?>
    </div>


</body>

</html>



<script>
    var qrcode = new QRCode("qr_code", {
        text: "<?= Auth::getreservation_ticket_id() ?>",
        width: 128,
        height: 128,
        colorDark: "#324054",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H
    });

    $("#downloadTicket").click(function() {
        var element = $('#ticketSummary');
        var name = "TKT<?= Auth::getreservation_ticket_id() ?>";
        var pdf = new jsPDF();


        pdf.addHTML(element, function() {
            pdf.save(name + '.pdf');
        })
    });
</script>