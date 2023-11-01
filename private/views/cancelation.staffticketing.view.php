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

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main>
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <div class="cancel-container mt-50">
                    <div class="ticket-details">
                        <div class="row ">
                            <div class="col-12 pb-10 d-flex align-items-center flex-column line">
                                <h1>Booking Cancellation</h1>
                            </div>
                        </div>
                        <div class="row mt-30 mb-30 g-10">
                            <div class="col-6 d-flex align-items-center">
                                <div class="text-inputs">
                                    <div class="input-text-label text lightgray-font">Passenger NIC </div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" name="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-start">
                                <div class="text-inputs">
                                    <div class="input-text-label text lightgray-font">Ticket Number</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" name="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-30 g-10">
                            <div class="col-6 d-flex align-items-center">
                                <div class="text-inputs">
                                    <div class="input-text-label text lightgray-font">Reason</div>
                                    <div class="width-fill">
                                        <select class="dropdown" placeholder="Please choose">
                                            <option value="" selected>--Select The Reason--</option>
                                            <option value="">Booking Name Is Incorrect</option>
                                            <option value="">I Have Changed My Plan </option>
                                            <option value="">Other </option>
                                        </select>
                                    </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-start">
                                <button class="button mt-20 cancel"><a href="<?= ROOT ?>passenger/details">
                                        <div class="button-base">
                                            <div class="text">Submit</div>
                                        </div>
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class="line">
                            <hr>
                        </div>
                        <div id="refund" class="">
                            <div class="row mt-30">
                                <div class="col-12">
                                    <div class="text ">
                                        <p class="text">Need a refund for your canceled tickets? </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-20 mt-30 d-flex flex-row justify-content-center align-items-center">
                                <div class="col-6 djustify-content-center">
                                    <button class="button" id="no">
                                        <div class="button-base bg-blue">
                                            <div class="text White ">No</div>
                                        </div>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button class="button" id="yes">
                                        <div class="button-base bg-blue">
                                            <div class="text White">Yes</div>
                                        </div>
                                    </button>
                                    <!-- popup -->
                                    <div class="row d-flex flex-column justify-content-center align-items-center">
                                        <div class="col-12 justify-content-center">
                                            <div class="popup justify-content-center" id="popup">

                                                <h2 class="text">Thank You!</h2>
                                                <p class="text">Your booking has been succesfully cancelled and request for a refund payment. Thanks!</p>
                                                <button class="button" onclick="closePopup()"><a href="<?= ROOT ?>staffticketing/reservationList">
                                                        <div class="button-base bg-blue">
                                                            <div class="text White ">OK</div>
                                                        </div>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php $this->view('includes/footer'); ?>
    </div>
    <script>
        $(document).ready(function() {
            $("#popup").hide();
        });

        $("#yes").on("click", function() {
            $("#popup").show();
        });
    </script>


</body>

</html>