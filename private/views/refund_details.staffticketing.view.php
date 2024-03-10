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
            <div class="container d-flex flex-column g-20 justify-content-center align-items-center">
                <div class="ticket-summary d-flex flex-column align-items-center" id="ticketSummary">
                    <h3 class="width-fill text-align-center">Booking Summary</h3>
                    <div class="d-flex flex-column align-items-center g-20">

                        <div class="d-flex align-items-center mobile-align-items-center mobile-flex-column-reverse pb-20 width-fill border-bottom g-100 mobile-g-20">
                            <!-- train details and qr code -->
                            <div class="d-flex g-20 flex-column ticket-summary-train-data flex-grow">
                                <p class="ref-no"></p>
                                <div class="d-flex g-5 ticket-summary-train-data-details flex-grow flex-column">
                                    <!-- <div class="ticket-summary-train-data-details flex-grow"> -->
                                    <div class="d-flex">
                                        <p class="width-fill heading">Price</p>
                                        <p class="width-fill"> mrg</p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Train No</p>
                                        <p class="width-fill">rlw</p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Train Name</p>
                                        <p class="width-fill"></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Start Station</p>
                                        <p class="width-fill"></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">End Station</p>
                                        <p class="width-fill"></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">Arrival Time</p>
                                        <p class="width-fill"></p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="width-fill heading">No of Passengers</p>
                                        <p class="width-fill"></p>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>

                            <div class="ticket-summary-qr-code">
                                <div id="qr_code"></div>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-start g-10 passenger-compartment-details">
                            <p class="">Passenger and Compartment Details</p>
                            <table class="ticket-summary-passenger-compartment-details text-align-center">
                                <!-- <tr>
                                            <th>Seat No(s)</th>
                                                <td>23</td>
                                                <td>23</td>
                                                <td>23</td>
                                                <td>23</td>
                                        </tr>
                                        <tr>
                                            <th>Gender</th>
                                                <td>female</td>
                                                <td>female</td>
                                                <td>female</td>
                                                <td>female</td>
                                           
                                        </tr>
                                        <tr>
                                            <th>NIC</th>
                                                <td>20000000000000</td>
                                                <td>20000000000000</td>
                                                <td>20000000000000</td>
                                                <td>20000000000000</td>
                                        </tr> -->
                                <tr>
                                    <th>Seat No(s)</th>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                </tr>
                                <tr>
                                    <th>NIC</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="d-flex g-20">
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
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>

</html>