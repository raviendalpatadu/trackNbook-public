<?php $this->view("./includes/header"); ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main>
            <div class="container  d-flex flex-column justify-content-center align-items-center">
                <div class="row">
                    <div class="col-8 d-flex flex-column justify-content-center g-30">
                        <p class="text-checker justify-content-end">What's Your <br>Today Work Station</p>
                        <div class="checker-container mt-30">
                            <div class="ticket-details">
                                <div class="row mb-20 g-10">
                                    <div class="col-6">
                                        <div class="text-inputs">
                                            <div class="input-text-label text lightgray-font">Train ID</div>
                                            <div class="input-field">
                                                <div class="text">
                                                    <input type="text" class="type-here" placeholder="Staff ID" name="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-inputs">
                                            <div class="input-text-label text lightgray-font">Start Location</div>
                                            <div class="input-field">
                                                <div class="text">
                                                    <input type="text" class="type-here" placeholder="Staff ID" name="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <button class="button btn mt-20 "><a href="reservationList/ticketchecker"<?= ROOT ?>">
                                                <div class="button-base btn bg-Border-blue  ">
                                                    <div class="text White">Start</div>
                                                </div>
                                            </a>    
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <img src="<?= ASSETS ?>images/checker.png" alt="">
                    </div>
                </div>
            </div>
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>

<!-- create a popup model -->



</html>