<?php

// echo "<pre>";
// print_r($data);
// echo "</pre>";

?>


<?php $this->view("./includes/header"); ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main class="bg">
            <div class="d-flex flex-column align-items-center p-60 ">

                <div class="notificationCard-SG  mt-50 d-flex flex-column align-items-center g-10">

                    <div class="">
                        <p class="notificationHeading ">Add New Train</p>
                    </div>


                    <form class="profile">
                    

                        <div class="row g-20 mb-20 ">
                            <div class="col-5">
                                <div class="text-inputs ">
                                    <div class="input-text-label">Train Name</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Ticket ID" name="" id="trainId">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-5">
                            <div class="text-inputs">
                                    <div class="input-text-label">Train Route</div>
                                    <div class="width-fill">
                                        <select class="dropdown" placeholder="Please choose" value="<?= Auth::getuser_title() ?>" name="user_title">
                                            <option>Mr.</option>
                                            <option>Mrs.</option>
                                            <option>Miss.</option>
                                        </select>
                                    </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                </div>
                            </div>

                            
                        </div>

                        <!-- <script>
                            $(document).ready(function() {
                                        $('#loginBtn').click(function() {
                                                $('mou-canceldetails').css('display', 'flex')

                                            }
                                        }
                                    )
                        </script> -->

                        
                        <div class="row g-20 mt-20 mb-20 ">
                            <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">Start Station</div>
                                    <div class="width-fill">
                                        <select class="dropdown" placeholder="Please choose" value="<?= Auth::getuser_title() ?>" name="user_title">
                                            <option>Mr.</option>
                                            <option>Mrs.</option>
                                            <option>Miss.</option>
                                        </select>
                                    </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">Start Time</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="time" name="start_time" class="type-here" placeholder="Type here" value="<?= Auth::getuser_first_name() ?>" name="user_first_name">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
                            <div class="row g-20 mt-20 mb-20 ">
                            <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">End Station</div>
                                    <div class="width-fill">
                                        <select class="dropdown" placeholder="Please choose" value="<?= Auth::getuser_title() ?>" name="user_title">
                                            <option>Mr.</option>
                                            <option>Mrs.</option>
                                            <option>Miss.</option>
                                        </select>
                                    </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">End Time</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="time" name="start_time" class="type-here" placeholder="Type here" value="<?= Auth::getuser_first_name() ?>" name="user_first_name">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
                            
                        </div>
                        </div><div
                                    class="train-stopping-stations mt-20 d-flex flex-row align-items-center g-10 flex-wrap justify-content-between">
                                    <div class="input-text-label">Train Stoping stations</div>
                                </div>
                        <div class="row g-30 mb-20">
                            <!-- <div class="col-6">
                                <div class="text-inputs">
                                    <div class="input-text-label">NIC</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= Auth::getuser_nic() ?>" name="user_nic" disabled>
                                            <input type="hidden" class="type-here" placeholder="Type here" value="<?= Auth::getuser_nic() ?>" name="user_nic">

                                        </div>
                                    </div>

                                </div>
                            </div> -->
                            <div class="row g-20 mt-20 mb-20 ">
                            <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">Train Type</div>
                                    <div class="width-fill">
                                        <select class="dropdown" placeholder="Please choose" value="<?= Auth::getuser_title() ?>" name="user_title">
                                            <option>Mr.</option>
                                            <option>Mrs.</option>
                                            <option>Miss.</option>
                                        </select>
                                    </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">No of Compartments</div>
                                    <div class="input-field">
                                        <div class="text">
                                        <input type="number" id="noOfCompartments" name="no_of_compartments"
                                                class="type-here" placeholder="Type here">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
                            
                        </div>
                        </div>

                        <div class="row  border-bottom-Lightgray">
                            <div class="col-12">
                                <h9 class="text">Compartment Details</h9>
                            </div>
                        </div>

                        <div class="row g-20 mt-20 mb-20 ">

                            <div class="col-2">
                                <div class="text-inputs">
                                    <div class="input-text-label">Compartment Class</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= Auth::getuser_first_name() ?>" name="user_first_name">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div><div class="col-2">
                            <div class="text-inputs">
                                    <div class="input-text-label">Train Route</div>
                                    <div class="width-fill">
                                        <select class="dropdown" placeholder="Please choose" value="<?= Auth::getuser_title() ?>" name="user_title">
                                            <option>Mr.</option>
                                            <option>Mrs.</option>
                                            <option>Miss.</option>
                                        </select>
                                    </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                </div>
                            

                            
                        </div>
                            <div class="col-3">
                                <div class="text-inputs">
                                    <div class="input-text-label">Compartment Seat layout</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="number" class="type-here" placeholder="Type here" value="<?= Auth::getuser_last_name() ?> " name="user_last_name">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-inputs">
                                    <div class="input-text-label">Compartment Total Seats</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= Auth::getuser_first_name() ?>" name="user_first_name">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="text-inputs">
                                    <div class="input-text-label">No of Compartments</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= Auth::getuser_first_name() ?>" name="user_first_name">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <button class="button mx-10">
                                    <div class="button-base">
                                        <div class="text">Back</div>
                                    </div>
                                </button>

                                <button class="button mx-10" id="cancelReservationBtn">
                                    <div class="button-base">
                                        <div class="text">Cancel Reservation</div>
                                    </div>
                                </button>
                                <div class="" id="popoupError">

                                </div>
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
