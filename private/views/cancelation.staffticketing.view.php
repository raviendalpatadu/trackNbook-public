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
                            <div class="row mb-30 g-10">
                                <div class="col-6 d-flex align-items-center">
                                    <div class="text-inputs">
                                        <div class="input-text-label text lightgray-font">Passenger NIC</div>
                                        <div class="width-fill">
                                           <select class="dropdown" placeholder="Please choose">
                                                <option value="" selected>All</option>
                                                <option value="">200162387156</option>
                                                <option value="">2001546218 </option>
                                                <option value="">2001546218 </option>
                                                <option value="">2001546218 </option>
                                            </select>
                                        </div>
                                        <div class="assistive-text display-none">Assistive Text</div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-start">
                                    <div class="text-inputs">
                                        <div class="input-text-label text lightgray-font">Ticket Number</div>
                                            <div class="width-fill">
                                                <select class="dropdown" placeholder="Please choose">
                                                    <option value="" selected>All</option>
                                                    <option value="">WD1001</option>
                                                    <option value="">WD1991 </option>
                                                    <option value="">WD1009 </option>
                                                    <option value="">WD1291 </option>
                                                    <option value="">WD1091 </option>
                                                    <option value="">WD1021 </option>
                                                </select>
                                            </div>
                                            <div class="assistive-text display-none">Assistive Text</div>
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
                                    <button class="button mt-20 cancel"><a href="<?=ROOT?>passenger/details">
                                        <div class="button-base">
                                            <div class="text">Submit</div>
                                        </div></a>
                                    </button> 
                                </div>
                            </div>      
                        </div> 
                    </div>    
                        <div class="row">
                            <div class="col-12">
                                <button class="button mt-20 "><a href="<?=ROOT?>passenger/details">
                                    <div class="button-base bg-blue">
                                        <div class="text White ">Refund</div>
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

                     


 