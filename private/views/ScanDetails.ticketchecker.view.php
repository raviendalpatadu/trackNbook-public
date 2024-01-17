<?php $this->view("./includes/header"); ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main>
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <div class="ticket-container mt-30">
                    <div class="ticket-details">
                        <div class="row mb-20 ">
                            <div class="col-12 d-flex align-items-center flex-column line">
                                <h1>Booking Summary</h1>
                            </div>
                        </div>
                        <div class="row mb-10 mt-50 ml-20 ">
                            <div class="col-12 d-flex align-items-center justify-content-start">
                                <p class="width-50">Train Number</p>
                                <p class="width-50"><?php echo (array_key_exists('train', $data)) ? $data['train']->train_id : ''; ?></p>
                            </div>
                        </div>
                        <div class="row mb-10 ml-20">
                            <div class="col-12 d-flex align-items-center justify-content-start">
                                <p class="width-50">Train Name</p>
                                <p class="width-50"><?php echo (array_key_exists('train', $data)) ? ucfirst($data['train']->train_name) : ''; ?></p>
                            </div>
                        </div>
                        <div class="row mb-10 ml-20">
                            <div class="col-12 d-flex align-items-center justify-content-start">
                                <p class="width-50">Start & End Station</p>
                                <p class="width-50"><?php echo (array_key_exists('train', $data)) ? ucfirst($data['train']->start_station) . "&#8594" . ucfirst($data['train']->end_station) : ''; ?></p>
                            </div>
                        </div>

                        <div class="row mb-10 ml-20">
                            <div class="col-12 d-flex align-items-center justify-content-start">
                                <p class="width-50">Train Class</p>
                                <p class="width-50"><?php echo (array_key_exists('reservations', $data)) ? ucfirst($data['reservations']->reservation_class) : ''; ?></p>
                            </div>
                        </div>

                        <div class="row mb-10 ml-20">
                            <div class="col-12 d-flex align-items-center justify-content-start">
                                <p class="width-50">Name</p>
                                <p class="width-50"><?php echo (array_key_exists('reservations', $data)) ? ucfirst($data['reservations']->reservation_passenger_title) . " " . ucfirst($data['reservations']->reservation_passenger_first_name) . " " . ucfirst($data['reservations']->reservation_passenger_last_name) : ''; ?></p>
                            </div>
                        </div>


                        <div class="row mb-10 ml-20">
                            <div class="col-12 d-flex align-items-center justify-content-start">
                                <p class="width-50">Date</p>
                                <p class="width-50"><?php echo (array_key_exists('reservations', $data)) ? $data['reservations']->reservation_date : ''; ?></p>
                            </div>
                        </div>

                        <div class="row mb-10 ml-20">
                            <div class="col-12 d-flex align-items-center justify-content-start">
                                <p class="width-50">Seat No</p>
                                <p class="width-50"><?php echo (array_key_exists('reservations', $data)) ? $data['reservations']->reservation_seat : ''; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="button mt-20 "><a href="<?= ROOT ?>ticketchecker/reservationList">
                                <div class="button-base">
                                    <div class="text">Done</div>
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