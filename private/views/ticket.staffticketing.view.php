<?php

$total_seats = 60;
$top_seats = 2;
$bottom_seats = 3;

$total_columns = $total_seats / ($top_seats + $bottom_seats);
$seat_no = 1;

$reserved_seats = array(1, 32, 43, 24, 40, 6, 57, 8);
// echo "<pre>";
// print_r($_SESSION);
// print_r($_POST);
// echo "</pre>";

$from_total_amount = $_SESSION['reservation']['from_fare']->fare_price * $_SESSION['reservation']['no_of_passengers'];
// $to_total_amount = $_SESSION['reservation']['to_fare']->fare_price * $_SESSION['reservation']['no_of_passengers'];

?>


<?php $this->view("./includes/header"); ?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main class="bg ">
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex flex-column flex-grow width-fill">
                    <!-- from ticket -->
                    <div class="d-flex width-fill justify-content-center" id="fromTicket">
                        <div class="d-flex flex-column ticket-container flex-grow">
                            <div class="d-flex p-20 flex-column g-20">
                                <div class="d-flex justify-content-center ticket-container-heading-bottom-border">
                                    <h1>From Ticket Details</h1>
                                </div>
                                <div class="d-flex flex-column g-10 px-20">
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="">Train Number</div>
                                        <div class=""><?= str_pad(Auth::reservation()['from_train']->train_id, 4, '0', STR_PAD_LEFT) ?></div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="">Train Name</div>
                                        <div class=""><?= ucfirst(Auth::reservation()['from_train']->train_name) ?></div>
                                    </div>
                                    <!-- start station -->
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="">Start Location</div>
                                        <div class=""><?= ucfirst(Auth::reservation()['from_station']->station_name) ?></div>
                                    </div>

                                    <!-- end station -->
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="">End Location</div>
                                        <div class=""><?= ucfirst(Auth::reservation()['to_station']->station_name) ?></div>
                                    </div>

                                    <!-- class -->
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="">Train Class</div>
                                        <div class=""><?= ucfirst(Auth::reservation()['from_compartment_type']->compartment_class_type) ?></div>
                                    </div>



                                    <!-- time start end -->
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="">Depature Time</div>
                                        <div class=""><?= date("H:i", strtotime(Auth::reservation()['from_train']->train_start_time)) . " to" . date("H:i", strtotime(Auth::reservation()['from_train']->train_end_time)) ?></div>
                                    </div>

                                    <!-- date -->
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="">Date</div>
                                        <div class=""><?= Auth::reservation()['from_date'] ?></div>
                                    </div>

                                    <!-- price for one -->
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="">Price for 1 Person</div>
                                        <div class=""><?= Auth::reservation()['from_fare']->fare_price ?>.00</div>
                                    </div>
                                    <!-- no of passengers -->
                                    <div class="d-flex flex-row align-items-center justify-content-between">
                                        <div class="">No of Passengers</div>
                                        <div class=""><?= str_pad(Auth::reservation()['no_of_passengers'], 2, '0', STR_PAD_LEFT) ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-primary-gray d-flex flex-row justify-content-end row-bottom-round px-20 py-10 white">
                                <div>Total Price : <?= $from_total_amount ?></div>
                            </div>
                        </div>
                    </div>

                    <!-- to ticket -->
                    <?php if (Auth::getReturn() == 'on') : ?>
                        <div class="d-flex width-fill justify-content-center display-none" id="toTicket">
                            <div class="d-flex flex-column ticket-container flex-grow">
                                <div class="d-flex p-20 flex-column g-20">
                                    <div class="d-flex justify-content-center ticket-container-heading-bottom-border">
                                        <h1>To Ticket Details</h1>
                                    </div>
                                    <div class="d-flex flex-column g-10 px-20">
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Train Number</div>
                                            <div class=""><?= Auth::reservation()['to_train']->train_id ?></div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Train Name</div>
                                            <div class=""><?= Auth::reservation()['to_train']->train_name ?></div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Train Type</div>
                                            <div class=""><?= ucfirst(Auth::reservation()['to_train']->train_type) ?></div>
                                        </div>
                                        <!-- start station -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Start Location</div>
                                            <div class=""><?= ucfirst(Auth::reservation()['to_station']->station_name) ?></div>
                                        </div>

                                        <!-- end station -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">End Location</div>
                                            <div class=""><?= ucfirst(Auth::reservation()['from_station']->station_name) ?></div>
                                        </div>

                                        <!-- class -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Train Class</div>
                                            <div class=""><?= ucfirst(Auth::reservation()['to_compartment_type']->compartment_class_type) ?></div>
                                        </div>

                                        <!-- no of passengers -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">No of Passengers</div>
                                            <div class=""><?= ucfirst(Auth::reservation()['no_of_passengers']) ?></div>
                                        </div>

                                        <!-- time start end -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Time Start &#8594 End</div>
                                            <div class=""><?= date("H:i", strtotime(Auth::reservation()['to_train']->train_start_time)) . "->" . date("H:i", strtotime(Auth::reservation()['to_train']->train_end_time)) ?></div>
                                        </div>

                                        <!-- date -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Date</div>
                                            <div class=""><?= Auth::reservation()['to_date'] ?></div>
                                        </div>

                                        <!-- price for one -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Price for 1 Person</div>
                                            <div class=""><?= Auth::reservation()['to_fare']->fare_price ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-primary-gray d-flex flex-row justify-content-end row-bottom-round px-20 py-10 white">
                                    <div>Total Price -> <?= $to_total_amount ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>


                <!-- <div class="row mt-10">
                            <div class="col-12 d-flex align-items-center flex-column">
                                <button class="button" id="payhere-payment">
                                    <div class="button-base">
                                        <div class="text">Pay</div>
                                        <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div> -->

                <div class="d-flex flex-row width-fill justify-content-around mt-20 g-10">
                    Payment Method :

                    <form action="<?= ROOT ?>/staffticketing/pay" method="post">
                        <div class="d-flex g-20">
                            <div class="radio-button">
                                <input name="payment_method" value="cash" id="cashRadio" class="radio-button__input" type="radio">
                                <label for="cashRadio" class="radio-button__label ">
                                    <span class="radio-button__custom"></span>
                                    Cash
                                </label>
                            </div>
                            <div class="radio-button">
                                <input name="payment_method" value="card" id="cardRadio" class="radio-button__input" type="radio">
                                <label for="cardRadio" class="radio-button__label ">
                                    <span class="radio-button__custom"></span>
                                    Card
                                </label>
                            </div>
                        </div>


                    </form>

                </div>

                <?php
                // if (isset($_POST['submit'])) {
                //     // The form was submitted
                //     if (isset($_POST['payment_method'])) {
                //         // The radio button was checked
                //         $radioValue = $_POST['payment_method'];

                //         if ($radioValue == 'cash') {
                // The 'cash' payment method was selected
                ?>
                

                <div class="d-flex display-none flex-column" id="totalPriceID">
                    <div class="text-inputs">
                        <div class="input-text-label ">Total Price:</div>
                        <div class="input-field">
                            <div class="text">
                                <input type="number" name="from_total_amount" class="type-here" placeholder="Type here" value="<?= $from_total_amount ?>">
                            </div>
                        </div>
                        <div class="assistive-text"></div>
                    </div>

                    <div class="text-inputs">
                        <div class="input-text-label ">Enter Price:</div>
                        <div class="input-field">
                            <div class="text">
                                <input type="number" name="user_amount" class="type-here" placeholder="Type here" value="">
                            </div>
                        </div>
                        <div class="assistive-text"></div>
                    </div>

                    <div class="text-inputs">
                        <div class="input-text-label ">Balance:</div>
                        <div class="input-field">
                            <div class="text">
                                <input type="number" name="user_balance_amount" class="type-here" placeholder="Type here" value="">
                            </div>
                        </div>
                        <div class="assistive-text"></div>
                    </div>
                </div>
                <?php
                //         }
                //     } else {
                //         echo "Enter Payment Method before submit";
                //     }
                // }
                ?>
                <div class="d-flex justify-content-end">
                    <div class="button-base">
                        <input type="submit" value="proceed" name="submit">
                        <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>



                <!-- <div class="row">
                    <div class="col-6">
                        <button class="button mt-20"><a href="<?= ROOT ?>passenger/details">
                                <div class="button-base">
                                    <div class="text">Cancel </div>
                                </div>
                            </a>
                        </button>
                    </div>
                    <div class="col-6">
                        
                    </div>
                </div> -->
            </div>
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>

</html>
<script>
    //get the payment method

    $('input[type="radio"]').click(function() {
        var radioValue = $("input[name='payment_method']:checked").val();
        console.log(radioValue);
        if (radioValue == 'cash') {
            if ($('#totalPriceID').hasClass('display-none')) {
                $('#totalPriceID').removeClass('display-none');
            }
        } else {
            $('#totalPriceID').addClass('display-none')
        }
    });
</script>