<?php


?>


<?php $this->view("./includes/header"); ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main>
            <div class="container d-flex flex-column justify-content-center align-self-center">
                <div class="row">
                    <div class="col-7">
                        <div class="warrant-container mt-30">
                            <div class="ticket-details">

                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="warrant-container-box mt-30">
                            <div class="ticket-details">
                                <div class="row mb-20 ">
                                    <div class="col-12 d-flex align-items-center flex-column line">
                                        <h1>Ticket Details</h1>
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
                        <div class="row d-flex g-8 justify-content-center">
                            <div class="col-4">
                                <button class="button mt-20 " id="reject"><a href="<?= ROOT ?>staffticketing/rejectWarrent/<?php echo (array_key_exists('reservations', $data)) ? $data['reservations']->warrant_id : ''; ?>">
                                        <div class="button-base bg-Selected-red">
                                            <div class="text Banner-red">Rejected</div>
                                        </div>
                                    </a>
                                </button>
                            </div>
                            <div class="col-4">
                                <button class="button mt-20 "><a href="<?= ROOT ?>staffticketing/pendingWarrent/<?php echo (array_key_exists('reservations', $data)) ? $data['reservations']->warrant_id : ''; ?>">
                                        <div class="button-base bg-light-green">
                                            <div class="text dark-green">Pending</div>
                                        </div>
                                    </a>
                                </button>
                            </div>
                            <div class="col-4">
                                <button class="button mt-20 "><a href="<?= ROOT ?>staffticketing/verifiedWarrent/<?php echo (array_key_exists('reservations', $data)) ? $data['reservations']->warrant_id : ''; ?>">
                                        <div class="button-base bg-Selected-Blue">
                                            <div class="text Blue">Verified</div>
                                        </div>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>

</html>