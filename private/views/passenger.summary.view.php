<?php

// echo "<pre>";
// print_r($data);
// print_r($_SESSION);
// echo "</pre>";
?>
<?php $this->view("./includes/header"); ?>

<body>
    <div class="column-left">
        <?php $this->view("./includes/navbar") ?>
        <main>
            <div class="container d-flex justify-content-center">
                <div class="passenger-container">
                    <div class="row mb-50">
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
                    <div class="container d-flex justify-content-center">
                        <div class="ticket-container">
                            <div class="row mb-20 ">
                                <div class="col-12 d-flex align-items-center flex-column line">
                                    <h1>Ticket Summary</h1>
                                </div>
                                <div class="row mb-10 mt-50 ml-20 ">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Train Number</p>
                                        <p class="width-50"><?php echo (array_key_exists('train', $data)) ? $data['train']->train_id : ''; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Train Type</p>
                                        <p class="width-50"><?php echo (array_key_exists('train', $data)) ? ucfirst($data['train']->train_type) : ''; ?></p>
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
                                        <p class="width-50">Start Location</p>
                                        <p class="width-50"><?php echo (array_key_exists('train', $data)) ? ucfirst($data['train']->start_station) : ''; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">End Location</p>
                                        <p class="width-50"><?php echo (array_key_exists('train', $data)) ? ucfirst($data['train']->end_station) : ''; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Train Class</p>
                                        <p class="width-50"><?php echo (array_key_exists('train', $data)) ? ucfirst($data['train']->reservation_class) : ''; ?></p>
                                    </div>
                                </div>
                                
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Time Start &#8594 End</p>
                                        <p class="width-50"><?php echo (array_key_exists('train', $data)) ? date("H:i",strtotime($data['train']->train_start_time)) ."->" . date("H:i",strtotime($data['train']->train_end_time)): ''; ?></p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Date</p>
                                        <p class="width-50"><?php echo (array_key_exists('reservation', $_SESSION)) ? $_SESSION['reservation']['from_date'] : ''; ?></p>
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center flex-column">
                                        <button class="button"><a href="<?= ROOT ?>home">
                                                <div class="button-base">
                                                    <div class="text">Home</div>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
        </main>
        <?php $this->view("./includes/footer") ?>

    </div>


</body>

</html>