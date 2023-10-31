<?php
$no_of_passengers = 2;

// echo "<pre>";
// print_r($data);
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

                                <div class="loader-circle active">
                                    <div class="loader-circle-text white">5</div>
                                </div>

                                <div class="divider"></div>

                                <div class="loader-circle ">
                                    <div class="loader-circle-text white">6</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container d-flex justify-content-center">
                        <div class="ticket-container">
                            <div class="row mb-20 ">
                                <div class="col-12 d-flex align-items-center flex-column line">
                                    <h1>Ticket Details</h1>
                                </div>
                                <div class="row mb-10 mt-50 ml-20 ">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Train Number</p>
                                        <p class="width-50">1030</p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Train Type</p>
                                        <p class="width-50">Express</p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Train Name</p>
                                        <p class="width-50">Udarata Manike</p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Start Location</p>
                                        <p class="width-50">Kandy</p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">End Location</p>
                                        <p class="width-50">Colombo</p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Train Class</p>
                                        <p class="width-50">First Class</p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">No of Passengers</p>
                                        <p class="width-50">02</p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Time Start &#8594 End</p>
                                        <p class="width-50">06:15 - 08:50</p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Date</p>
                                        <p class="width-50">2023-09-30</p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Price for 1 Person</p>
                                        <p class="width-50">1500</p>
                                    </div>
                                </div>
                                <div class="row mb-10 bg-Primary-Gray text White total-row">
                                    <div class="col-12 d-flex align-items-center justify-content-end pr-10  ">
                                        <p >Total Price - LKR 3000</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center flex-column">
                                        <button class="button"><a href="<?= ROOT ?>passenger/billing">
                                                <div class="button-base">
                                                    <div class="text">Pay</div>
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