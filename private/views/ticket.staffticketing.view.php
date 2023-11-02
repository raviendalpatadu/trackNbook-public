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
                    <div class="ticket-container mt-30">
                        <div class="ticket-details">     
                            <div class="row mb-20 "> 
                                <div class="col-12 d-flex align-items-center flex-column line">
                                    <h1>Ticket Details</h1>
                                </div>
                            </div>
                            <div class="row mb-10 mt-50 ml-10 "> 
                                <div class="col-6 d-flex align-items-center">
                                    <p1>Train Number</p1>
                                </div>
                                <div class="col-6 d-flex ml-20">
                                    <p1>1030</p1>
                                </div>
                            </div>
                            <div class="row mb-10 ml-10"> 
                                <div class="col-6 d-flex align-items-center  ">
                                    <p1>Train Type</p1>
                                </div>
                                <div class="col-6 d-flex align-items-center ml-20 ">
                                    <p1>Intercity Express</p1>
                                </div>
                            </div>
                            <div class="row mb-10 ml-10"> 
                                <div class="col-6 d-flex align-items-center  ">
                                    <p1>Train Name</p1>
                                </div>
                                <div class="col-6 d-flex align-items-center ml-20 ">
                                    <p1>Udarata Manike</p1>
                                </div>
                            </div>
                            <div class="row mb-10 ml-10"> 
                                <div class="col-6 d-flex align-items-center  ">
                                    <p1>Start Location</p1>
                                </div>
                                <div class="col-6 d-flex align-items-center ml-20 ">
                                    <p1>Kandy</p1>
                                </div>
                            </div>
                            <div class="row mb-10 ml-10"> 
                                <div class="col-6 d-flex align-items-center  ">
                                    <p1>End Location</p1>
                                </div>
                                <div class="col-6 d-flex align-items-center ml-20 ">
                                    <p1>Colombo</p1>
                                </div>
                            </div>
                            <div class="row mb-10 ml-10"> 
                                <div class="col-6 d-flex align-items-center  ">
                                    <p1>Train Class</p1>
                                </div>
                                <div class="col-6 d-flex align-items-center ml-20  ">
                                    <p1>First Class</p1>
                                </div>
                            </div>
                            <div class="row mb-10 ml-10"> 
                                <div class="col-6 d-flex align-items-center  ">
                                    <p1>No of Passengers</p1>
                                </div>
                                <div class="col-6 d-flex align-items-center ml-20 ">
                                    <p1>02</p1>
                                </div>
                            </div>
                            <div class="row mb-10 ml-10"> 
                                <div class="col-6 d-flex align-items-center  ">
                                    <p1>Time Start &#8594 End</p1>
                                </div>
                                <div class="col-6 d-flex align-items-center ml-20 ">
                                    <p1>06:15 - 08:50</p1>
                                </div>
                            </div>
                            <div class="row mb-10 ml-10"> 
                                <div class="col-6 d-flex align-items-center  ">
                                    <p1>Depature Date</p1>
                                </div>
                                <div class="col-6 d-flex align-items-center ml-20 ">
                                    <p1>2023-09-30</p1>
                                </div>
                            </div>
                            <div class="row mb-10 ml-10"> 
                                <div class="col-6 d-flex align-items-center  ">
                                    <p1>Price for 1 Person</p1>
                                </div>
                                <div class="col-6 d-flex align-items-center ml-20  ">
                                    <p1>1500</p1>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row bg-Primary-Gray text White total-row"> 
                                <div class="col-12 d-flex mr-10 align-items-center justify-content-end">
                                    <p1>Total Price - LKR 3000</p1>
                                </div>    
                            </div>       
                    </div>  
                    <div class="row">
                        <div class="col-6">
                            <button class="button mt-20"><a href="<?=ROOT?>passenger/details">
                                <div class="button-base">
                                     <div class="text">Cancel </div>
                                </div></a>
                            </button> 
                        </div> 
                        <div class="col-6">
                            <button class="button mt-20"><a href="<?=ROOT?>">
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
