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
                <div class="container d-flex justify-content-center">
                    <div class="passenger-container">     
                        <div class="row mb-20">
                            <div class="col-12">
                                <h1>Badulla -> Colombo Fort</h1>

                                <p>Select a seat to proceed</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 d-flex align-items-center flex-column g-20">
                                <h2>First class reservation</h2>
                                <div class="comparment d-flex flex-row g-10 p-30">
                                    <?php for ($i = 0; $i < $total_columns; $i++) { ?>
                                        <div class="seat-row d-flex flex-column align-items-start">
                                            <div class="seats-top d-flex flex-column align-items-start">
                                                <?php for ($j = 0; $j < $top_seats; $j++) { ?>
                                                    <div id="seatNo-<?= $seat_no ?>" class="seat d-flex flex-column align-items-center justify-content-center <?php echo (in_array($seat_no, $reserved_seats)) ? "reserved" : "" ?>"><?= $seat_no++ ?></div>
                                                <?php } ?>
                                            </div>
                                            <div class="seats-bottom d-flex flex-column align-items-start">
                                                <?php for ($j = 0; $j < $bottom_seats; $j++) { ?>
                                                    <div id="seatNo-<?= $seat_no ?>" class="seat d-flex flex-column align-items-center justify-content-center <?php echo in_array($seat_no, $reserved_seats) ? "reserved" : "" ?>"><?= $seat_no++ ?></div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="ledgend d-flex flex-row g-20 align-items-center">
                                    <div class="ledgend-item d-flex align-items-center flex-column g-5">
                                        <div class="ledgend-item-box ">
                                            <div class="seat d-flex flex-column align-items-center justify-content-center reserved"></div>
                                        </div>
                                        <p>Reserved</p>
                                    </div>
                                    <div class="ledgend-item d-flex align-items-center flex-column g-5">
                                        <div class="ledgend-item-box">
                                            <div class="seat d-flex flex-column align-items-center justify-content-center selected"></div>
                                        </div>
                                        <p>Selected</p>
                                    </div>
                                    <div class="ledgend-item d-flex align-items-center flex-column g-5">
                                        <div class="ledgend-item-box">
                                            <div class="seat d-flex flex-column align-items-center justify-content-center"></div>
                                        </div>
                                        <p>Available</p>
                                    </div>
                                </div>


                                <div class="d-flex justify-content-end align-items-end g-20 width-fill">
                                    <button class="button">
                                        <div class="button-base">
                                            <div class="text">Cancel</div>
                                        </div>
                                    </button>
                                    <button class="button"><a href="<?=ROOT?>passenger/details">
                                        <div class="button-base">

                                            <div class="text">Proceed</div>
                                            <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div></a>
                                    </button>
                                </div>
                            </div>
                        </div>
            </main>
            <?php $this->view('includes/footer'); ?>
        </div>
    </body>


    </html>
