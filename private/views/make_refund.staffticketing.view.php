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

                <div class="notificationCard  mt-50 d-flex flex-column align-items-center g-10">

                    <div class="">
                        <p class="notificationHeading ">Enter Ticket ID</p>
                    </div>


                    <div class="text-inputs d-flex mt-20">
                        <div class="input-text-label text lightgray-font">NIC</div>
                        <div class="input-field">
                            <div class="text">
                                <input type="text" class="type-here" placeholder="NIC" name="" id="trainId">
                            </div>
                        </div>
                    </div>

                    <div class="text-inputs d-flex mt-20">
                        <div class="input-text-label text lightgray-font">Ticket ID</div>
                        <div class="input-field">
                            <div class="text">
                                <input type="text" class="type-here" placeholder="Ticket ID" name="" id="trainId">
                            </div>
                        </div>
                    </div>



                            <button class="button btn mt-20 " id="loginBtn">
                                <a href="<?= ROOT ?>staffticketing/refundDetails">
                                    <div class="button-base btn bg-Border-blue ">
                                        <div class="text White">Enter</div>
                                    </div>
                                </a>
                            </button>
                        </div>

                        <!-- <script>
                            $(document).ready(function() {
                                        $('#loginBtn').click(function() {
                                                $('mou-canceldetails').css('display', 'flex')

                                            }
                                        }
                                    )
                        </script> -->

                        <div class="row  border-bottom-Lightgray">
                            <div class="col-12">
                                <h9 class="text">Passenger Details</h9>
                            </div>
                        </div>
                        <div class="row g-20 mt-20 mb-20 ">
                            <div class="col-2">
                                <div class="text-inputs">
                                    <div class="input-text-label">Title</div>
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
                                    <div class="input-text-label">First Name</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= Auth::getuser_first_name() ?>" name="user_first_name">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">Last Name</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= Auth::getuser_last_name() ?> " name="user_last_name">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
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
                            <div class="col-6">
                                <div class="text-inputs">
                                    <div class="input-text-label">Mobile</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= Auth::getuser_phone_number() ?>" name="user_phone_number">

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">Booking Type</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= Auth::getuser_last_name() ?> " name="user_last_name">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
                        </div>

                        <div class="row  border-bottom-Lightgray">
                            <div class="col-12">
                                <h9 class="text">Train Details</h9>
                            </div>
                        </div>

                        <div class="row g-20 mt-20 mb-20 ">

                            <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">Train Name</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= Auth::getuser_first_name() ?>" name="user_first_name">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">ksjchv</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= Auth::getuser_last_name() ?> " name="user_last_name">
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
<script>
    $(document).ready(function() {
        $('#cancelReservationBtn').click(function(event) {
            event.preventDefault();
            var div = $('body');
            var imgURL = '<?= ASSETS . 'images/error.jpg' ?>';
            var description1 = "By cancelling this booking, you will lose the opportunity to travel on the selected train. ";
            var description2 = "<br><br>Are you sure you want to cancel?";
            var description = description1 + description2;
            div.append(makePopupBox('Are you sure you want to cancel?', description, 'OK', imgURL))
        });
    });
</script>