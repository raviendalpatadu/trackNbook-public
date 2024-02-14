<?php
echo "<pre>";
// print_r($data);
// print_r($_SESSION);
// print_r($_POST);
echo "</pre>";




$total_seats = 48;
$top_seats = 2;
$bottom_seats = 2;

$total_columns = $total_seats / ($top_seats + $bottom_seats);
$seat_no = 1;
$class_name = "";
if ($_SESSION['reservation']['class_id'] == 1) {
    $class_name = "first";
} elseif ($_SESSION['reservation']['class_id'] == 2) {
    $class_name = "second";
} elseif ($_SESSION['reservation']['class_id'] == 3) {
    $class_name = "third";
}



$reserved_seats = array();
if ($data != null) {
    foreach ($data as $key => $value) {
        $reserved_seats[] = $value->reservation_seat;
    }
}




?>


<?php $this->view("./includes/header"); ?>

<body>
    <div class="column-left">
        <?php $this->view("./includes/navbar") ?>
        <main>
            <div class="container d-flex justify-content-center">
                <div class="passenger-container">
                    <!-- complete loader -->

                    <div class="row mb-50">
                        <div class="col-12">
                            <div class="loader d-flex align-items-center justify-content-center px-20">
                                <div class="loader-circle complete">
                                    <div class="loader-circle-text white">1</div>
                                </div>
                                <div class="divider complete"></div>

                                <div class="loader-circle active">
                                    <div class="loader-circle-text white">2</div>
                                </div>

                                <div class="divider"></div>

                                <div class="loader-circle ">
                                    <div class="loader-circle-text white">3</div>
                                </div>

                                <div class="divider"></div>

                                <div class="loader-circle ">
                                    <div class="loader-circle-text white">4</div>
                                </div>

                                <div class="divider"></div>

                                <div class="loader-circle ">
                                    <div class="loader-circle-text white">5</div>
                                </div>

                                <div class="divider"></div>

                                <div class="loader-circle ">
                                    <div class="loader-circle-text white">6</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-20">
                        <div class="col-12">
                            <h1><?php echo (isset($_SESSION['reservation']['start_station'])) ? $_SESSION['reservation']['start_station']->station_name . "->" : "" ?> <?= (isset($_SESSION['reservation']['start_station'])) ? $_SESSION['reservation']['end_station']->station_name : "No Trains" ?></h1>
                            <p>Select a seat to proceed</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex align-items-center flex-column g-20">
                            <h2><?= ucfirst($class_name) ?> class reservation</h2>
                            <form action="" method="post" class="d-flex align-items-center flex-column g-20">
                                <div class="comparment d-flex flex-row g-10 p-30">

                                    <?php for ($i = 0; $i < $total_columns; $i++) { ?>
                                        <div class="seat-row d-flex flex-column align-items-start">
                                            <div class="seats-top d-flex flex-column align-items-start">
                                                <?php for ($j = 0; $j < $top_seats; $j++) { ?>
                                                    <div id="seatNo-<?= $seat_no ?>" class="seat d-flex flex-column align-items-center justify-content-center <?php echo (in_array($seat_no, $reserved_seats)) ? "reserved" : "" ?>">
                                                        <?= $seat_no++ ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="seats-bottom d-flex flex-column align-items-start">
                                                <?php for ($j = 0; $j < $bottom_seats; $j++) { ?>
                                                    <div id="seatNo-<?= $seat_no ?>" class="seat d-flex flex-column align-items-center justify-content-center <?php echo in_array($seat_no, $reserved_seats) ? "reserved" : "" ?>">
                                                        <?= $seat_no++ ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <input type="hidden" name="no_of_passengers" id="noOfPassengers" value="<?= $_SESSION['reservation']['no_of_passengers'] ?>">
                                </div>
                                <select name="selected_seats[]" class="display-none" id="hiddenSeats" multiple="true">
                                    <?php for ($i = 1; $i <= $total_seats; $i++) : ?>
                                        <option id="seatNoOption-<?= $i ?>" value="<?= $i ?>"></option>
                                    <?php endfor; ?>
                                </select>
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
                                    <a class="button" href="<?= ROOT ?>home">
                                        <div class="button-base">
                                            <div class="text">Cancel</div>
                                        </div>
                                    </a>
                                    <!-- </button> -->

                                    <div class="button-base">
                                        <input type="submit" value="proceed" name="submit">
                                        <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>


</body>

</html>