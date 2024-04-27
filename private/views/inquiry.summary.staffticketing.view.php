<?php
echo "<pre>";
print_r($data);
echo "</pre>";


?>


<?php $this->view("./includes/header"); ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main class="bg">
            <div class="d-flex flex-column m-30 g-20">

                <!-- img and train -->
                <div class="d-flex  flex-row g-20">
                    <!-- train details -->
                    <div class="d-flex flex-column  flex-auto mou-inquiry-warrant_Card bg-white g-30">
                        <div class="d-flex justify-content-center border-bottom-Lightgray">
                            <h2>Inquiry Details</h2>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <div class="d-flex flex-row  ">
                                <div class="d-flex">
                                    <h3>Ref No : </h3>
                                </div>
                                <div class="d-flex">

                                    <h3><?= (array_key_exists('inquiry', $data)) ? '  ' .  str_pad(get_data_view($data['inquiry'][0], 'inquiry_ticket_id'), 2, "0", STR_PAD_LEFT) : ''; ?></h3>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-start ">
                                <div class="d-flex">
                                    <h3>Inquiry ID : </h3>
                                </div>
                                <div class="d-flex">

                                    <h3><?= (array_key_exists('inquiry', $data)) ? '  ' . str_pad(get_data_view($data['inquiry'][0], 'inquiry_ticket_id'), 2, "0", STR_PAD_LEFT) : ''; ?></h3>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row g-100">

                            <div class="d-flex flex-column mou-inquiry-ticket-details-warrant">


                                <p class="">User Name</p>
                                <p class="">User Mobile No</p>
                                <p class="">User Email</p>
                                <p class="">Inquiry Created Date</p>
                                <!-- <p class="">Train Class</p>
                                <p class="">Reservation Date</p>
                                <p class="">No of Passengers</p>  -->
                            </div>

                            <div class="d-flex flex-column flex-auto g-10">

                                <div class="text-inputs">
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ? ucfirst($data['inquiry'][0]->user_title) . '' . ucfirst($data['inquiry'][0]->user_first_name) . ' ' . ucfirst($data['inquiry'][0]->user_last_name) : ''; ?> " name="user_name" disabled>
                                        </div>
                                    </div>
                                    <div class="assistive-text"></div>
                                </div>

                                <div class="text-inputs">
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ? $data['inquiry'][0]->user_phone_number  : ''; ?> " name="user_phone_number" disabled>
                                        </div>
                                    </div>
                                    <div class="assistive-text"></div>
                                </div>
                                <div class="text-inputs">
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ? $data['inquiry'][0]->user_email  : ''; ?> " name="user_email" disabled>
                                        </div>
                                    </div>
                                    <div class="assistive-text"></div>
                                </div>
                                <div class="text-inputs">
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ? $data['inquiry'][0]->inquiry_created_time : ''; ?> " name="inquiry" disabled>
                                        </div>
                                    </div>
                                    <div class="assistive-text"></div>
                                </div>




                            </div>
                        </div>
                    </div>

                    <!-- warrant img-->
                    <div class="d-flex flex-column mou-inquiry-desc-Card bg-white g-30">
                        <div class="d-flex justify-content-start border-bottom-Lightgray">
                            <h3>Inquiry Description</h3>
                        </div>
                        <div class="mou-text">
                            <textarea type="text" class="" placeholder="Type here" value=" " name="inquiry_reason" disabled><?= (array_key_exists('inquiry', $data)) ? ($data['inquiry'][0]->inquiry_reason) : ''; ?></textarea>

                        </div>
                        <div class="assistive-text"></div>

                    </div>




                </div>

                <!-- passenger details -->
                <div class="d-flex flex-column  flex-auto mou-inquiry-warrant_Card bg-white g-10">
                    <div class="d-flex justify-content-center border-bottom-Lightgray">
                        <h2>Journey Details</h2>
                    </div>
                    <div class="d-flex bg-white g-20 p-20">


                        <div class="d-flex flex-column flex-grow mou-ticket-details-warrant">
                            <!-- train name -->
                            <div class="d-flex flex-row g-50 ">
                                <div class="d-flex flex-column flex-auto">
                                    <p class="">Train Name</p>
                                    <div class="text-inputs">
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ? STR_PAD($data['inquiry'][0]->reservation_train_id, 2, '0', STR_PAD_LEFT) . ' - ' . ucfirst($data['inquiry'][0]->train_name) : ''; ?> " name="reservation_train_id" disabled>
                                            </div>
                                        </div>
                                        <div class="assistive-text"></div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-auto">
                                    <p class="">Train Type</p>
                                    <div class="text-inputs">
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ? $data['inquiry'][0]->train_type : ''; ?> " name="train_type" disabled>
                                            </div>
                                        </div>
                                        <div class="assistive-text"></div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-auto">
                                    <p class="">Train Class</p>
                                    <div class="text-inputs">
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ? $data['inquiry'][0]->compartment_class_type : ''; ?> " name="compartment_class_type" disabled>
                                            </div>
                                        </div>
                                        <div class="assistive-text"></div>
                                    </div>
                                </div>

                            </div>

                            <div class="d-flex flex-row g-20">
                                <div class="d-flex flex-column flex-auto">
                                    <p class="">Start Station</p>
                                    <div class="text-inputs">
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ? $data['inquiry'][0]->start_station_name : ''; ?> " name="start_station_name" disabled>
                                            </div>
                                        </div>
                                        <div class="assistive-text"></div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-auto">
                                    <p class="">End Station</p>
                                    <div class="text-inputs">
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ? $data['inquiry'][0]->end_station_name : ''; ?> " name="end_station_name" disabled>
                                            </div>
                                        </div>
                                        <div class="assistive-text"></div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-auto">
                                    <p class="">Train Arrival</p>
                                    <div class="text-inputs">
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ? $data['inquiry'][0]->reservation_date . ' at ' . $data['inquiry'][0]->train_start_time : ''; ?> " name="Train Arrival" disabled>
                                            </div>
                                        </div>
                                        <div class="assistive-text"></div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column">
                                    <p class="">Train Depature</p>
                                    <div class="text-inputs">
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ?  $data['inquiry'][0]->train_end_time : ''; ?> " name="Train Depature" disabled>
                                            </div>
                                        </div>
                                        <div class="assistive-text"></div>
                                    </div>
                                </div>

                            </div>

                            <div class="d-flex flex-grow g-20">
                                <div class="d-flex flex-column">
                                    <p class="">Booking Type</p>
                                    <div class="text-inputs">
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ?  $data['inquiry'][0]->reservation_type : ''; ?> " name="reservation_type" disabled>
                                            </div>
                                        </div>
                                        <div class="assistive-text"></div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="">No of Passengers</p>
                                    <div class="text-inputs">
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('inquiry', $data)) ?  str_pad(count($data['inquiry']), 2, '0', STR_PAD_LEFT) : ''; ?> " name="no_of_passengers" disabled>
                                            </div>
                                        </div>
                                        <div class="assistive-text"></div>
                                    </div>
                                </div>


                            </div>

                            <div class="d-flex flex-row justify-content-between">
                                <?php if ($data['inquiry'][0]->reservation_is_travelled == 0) : ?>
                                    <div class="d-flex">
                                        <p class="red">* This Passenger is not travelled yet</p>
                                    </div>
                                <?php else : ?>
                                    <div class="d-flex">
                                        <p class="red">* This Passenger is travelled</p>
                                    </div>
                                <?php endif; ?>

                                <?php if (strtolower($data['inquiry'][0]->reservation_type) == 'normal') : ?>
                                    <div class="d-flex">
                                        <p class="blue" id="displayWarrantImg">View Warrant Image</p>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="">
                                    <!-- check if the warrant booking done by the counter -->
                                    <?php if (empty($data['warrant_img']) && strtolower($data['warrant_reservations'][0]->warrant_status) == 'completed') : ?>
                                        <p class="mou-warrant-text">Reservation Done by Manually</p>

                                        <!-- check if the warant booking done by the user but image not uploaded succefully -->
                                    <?php elseif (empty($data['warrant_img']) && strtolower($data['warrant_reservations'][0]->warrant_status) == 'approval pending') : ?>
                                        <p class="mou-warrant-error-text">Image Not Found</p>

                                    <?php else : ?>
                                        <!-- get the scr by the controller eke method ekata danna database eken ena warant_image_path eka  -->
                                        <img src="<?= ROOT . 'warrantreservation/getwarrantimg/' . $data['warrant_img']->warrant_image_path ?>" class="mou-warrant_image_width" alt="">
                                    <?php endif; ?>

                                </div>


                            </div>


                        </div>




                    </div>

                </div>
                <div class="d-flex flex-column bg-white g-20 p-20">

                    <?php for ($i = 0; $i < count($data['inquiry']); $i++) : ?>
                        <div class="d-flex border-bottom-Lightgray ">Passenger Details - <?= '0' . $i + 1 ?></div>
                        <div class="d-flex flex-row g-20">
                            <div class="d-flex width-20">
                                <div class="text-inputs">
                                    <div class="input-text-label">Title</div>
                                    <div class="width-fill">
                                        <select type="text" class="dropdown" placeholder="Please choose" name="reservation_passenger_title" value="<?= (array_key_exists('reservations', $data)) ? $data['reservations'][$i]->reservation_passenger_title : ''; ?>" disabled>
                                            <option value="">Mr</option>
                                            <option value="">Mrs</option>
                                            <option value="">Miss</option>
                                        </select>
                                    </div>
                                    <div class="assistive-text display-none"></div>
                                </div>
                            </div>

                            <div class="text-inputs">
                                <div class="input-text-label">First Name</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="text" class="type-here" placeholder="Type here" name="reservation_passenger_first_name" value="<?= (array_key_exists('reservations', $data)) ? ucfirst($data['reservations'][$i]->reservation_passenger_first_name) : ''; ?>" disabled>
                                    </div>
                                </div>
                                <div class="assistive-text display-none"></div>
                            </div>

                            <div class="text-inputs">
                                <div class="input-text-label">Last Name</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('reservations', $data)) ? ucfirst($data['reservations'][$i]->reservation_passenger_last_name) : ''; ?> " name="reservation_passenger_last_name" disabled>
                                    </div>
                                </div>
                                <div class="assistive-text"></div>
                            </div>

                            <div class="text-inputs">
                                <div class="input-text-label">NIC</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('reservations', $data)) ? $data['reservations'][$i]->reservation_passenger_nic : ''; ?>" name="reservation_passenger_nic" disabled>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="d-flex flex-row g-20">

                            <div class="text-inputs">
                                <div class="input-text-label">Mobile</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('reservations', $data)) ? $data['reservations'][$i]->reservation_passenger_phone_number : ''; ?>" name="reservation_passenger_phone_number" disabled>

                                    </div>
                                </div>

                            </div>

                            <div class="text-inputs">
                                <div class="input-text-label">Email</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('reservations', $data)) ? $data['reservations'][$i]->reservation_passenger_email : ''; ?>" name="reservation_passenger_email" disabled>

                                    </div>
                                </div>

                            </div>
                            <div class="text-inputs">
                                <div class="input-text-label">Seat No</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('reservations', $data)) ? str_pad($data['reservations'][$i]->reservation_seat, 2, '0', STR_PAD_LEFT) : ''; ?>" name="reservation_seat" disabled>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="text-inputs">
                                <div class="input-text-label">Gender</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="text" class="type-here" placeholder="Type here" value="<?= (array_key_exists('reservations', $data)) ? ucfirst($data['reservations'][$i]->reservation_passenger_gender) : ''; ?>" name="reservation_passenger_gender" disabled>

                                    </div>
                                </div>

                            </div>
                        </div>








                    <?php endfor; ?>


                </div>


                <!-- action btns -->
                <?php if (strtolower($data['warrant_reservations'][0]->warrant_status) == 'completed') : ?>

                    <div class="d-flex justify-content-center">
                        <button class="button mt-20 "><a href="<?= ROOT ?>staffticketing/warrant">
                                <div class="button-base bg-Selected-Blue">
                                    <div class="text Blue">Back</div>
                                </div>
                            </a>
                        </button>
                    </div>

                <?php elseif (strtolower($data['warrant_reservations'][0]->warrant_status) == 'approval pending') : ?>

                    <div class="row d-flex g-8 justify-content-center">
                        <div class="col-4">
                            <button class="button mt-20 "><a href="<?= ROOT ?>staffticketing/warrant">
                                    <div class="button-base bg-Selected-Blue">
                                        <div class="text Blue">Back</div>
                                    </div>
                                </a>
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="button mt-20 " id="reject">
                                <div class="button-base bg-Selected-red">
                                    <div class="text Banner-red">Rejected</div>
                                </div>
                            </button>
                        </div>

                        <div class="col-4">
                            <button class="button mt-20 "><a href="<?= ROOT ?>staffticketing/verifiedWarrent/<?php echo (array_key_exists('reservations', $data)) ? $data['warrant_reservations'][0]->warrant_id : ''; ?>">
                                    <div class="button-base bg-light-green">
                                        <div class="text dark-green ">Verified</div>
                                    </div>
                                </a>
                            </button>
                        </div>
                    </div>

                <?php elseif (strtolower($data['warrant_reservations'][0]->warrant_status) == 'verified') : ?>
                    <div class="row d-flex g-8 justify-content-center">
                        <div class="col-4">
                            <button class="button mt-20 "><a href="<?= ROOT ?>staffticketing/warrant">
                                    <div class="button-base bg-Selected-Blue">
                                        <div class="text Blue">Back</div>
                                    </div>
                                </a>
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="button mt-20 " id="reject">
                                <div class="button-base bg-Selected-red">
                                    <div class="text Banner-red">Rejected</div>
                                </div>
                            </button>
                        </div>

                        <div class="col-4">
                            <button class="button mt-20 "><a href="<?= ROOT ?>staffticketing/verifiedWarrent/<?php echo (array_key_exists('reservations', $data)) ? $data['warrant_reservations'][0]->warrant_id : ''; ?>">
                                    <div class="button-base bg-light-green">
                                        <div class="text dark-green ">Handed Over</div>
                                    </div>
                                </a>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>

                <div id="mou-rejectReason">
                    <form action="<?= ROOT ?>staffticketing/rejectWarrent/<?= (array_key_exists('reservations', $data)) ? $data['reservations'][0]->reservation_ticket_id : ''; ?>" method="POST" class="mou-reject_form" id="mou-rejectReasonForm">

                        <div class="title">Reason for Rejection</div>

                        <textarea placeholder="Enter the Reason Clearly" class="" name="warrantRejectReason" id="reason" cols="30 p-20" rows="10"></textarea>


                        <div class="assistive-text" id="rejectError">* Enter the Reject Reason Before Submit</div>

                        <button class="button btn" id="submitBtn">
                            <div class="button-base btn bg-Border-blue white">
                                Submit
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>

</html>
<!-- <div class="ticket-img bg-red d-flex ">
    <img src="<?= ASSETS ?>images/checker-mobile.jpg" class="" alt="" srcset="">
</div> -->

<script>
    $(document).ready(function() {
        $('#mou-rejectReason').hide();

        $('#reject').click(function(e) {
            e.preventDefault
            $('#mou-rejectReason').show();
            $('#rejectError').hide();
        });

        $('#submitBtn').click(function(e) {
            e.preventDefault();
            var reason = $('#reason').val();
            if (reason == '') {
                $('#rejectError').show();
            } else {
                $('#mou-rejectReasonForm').submit();
            }
        });
    });


    // Remove the closing 
</script>