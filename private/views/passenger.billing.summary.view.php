<?php

echo "<pre>";
// print_r($data);
// print_r($_SESSION);
echo "</pre>";
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
                    <div class="d-flex justify-content-center flex-column align-items-center g-10">

                        <div class="d-flex width-fill justify-content-center">

                            <div class="d-flex flex-column ticket-container flex-grow">
                                <div class="d-flex p-20 flex-column g-20">
                                    <div class="d-flex justify-content-center ticket-container-heading-bottom-border">
                                        <h1>Ticket Details</h1>
                                    </div>
                                    <div class="d-flex flex-column g-10 px-20">
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Train Number</div>
                                            <div class="width-40"><?php echo (array_key_exists('train', $data)) ? $data['train']->train_id : ''; ?></div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Train Name</div>
                                            <div class="width-40"><?php echo (array_key_exists('train', $data)) ? $data['train']->train_name : ''; ?></div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Train Type</div>
                                            <div class="width-40"><?php echo (array_key_exists('train', $data)) ? ucfirst($data['train_type']->train_type) : ''; ?></div>
                                        </div>
                                        <!-- start station -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Start Location</div>
                                            <div class="width-40"><?php echo (array_key_exists('start_station', $data)) ? ucfirst($data['start_station']->station_name) : ''; ?></div>
                                        </div>

                                        <!-- end station -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">End Location</div>
                                            <div class="width-40"><?php echo (array_key_exists('end_station', $data)) ? ucfirst($data['end_station']->station_name) : ''; ?></div>
                                        </div>

                                        <!-- class -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Train Class</div>
                                            <div class="width-40"><?php echo (array_key_exists('class', $data)) ? ucfirst($data['class_type']->compartment_class_type) : ''; ?></div>
                                        </div>

                                        <!-- no of passengers -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">No of Passengers</div>
                                            <div class="width-40"><?php echo (array_key_exists('no_of_passengers', $data)) ? ucfirst($data['no_of_passengers']) : ''; ?></div>
                                        </div>

                                        <!-- time start end -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Time Start &#8594 End</div>
                                            <div class="width-40"><?php echo (array_key_exists('train', $data)) ? date("H:i", strtotime($data['train']->train_start_time)) . "->" . date("H:i", strtotime($data['train']->train_end_time)) : ''; ?></div>
                                        </div>

                                        <!-- date -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Date</div>
                                            <div class="width-40"><?php echo (array_key_exists('date', $data)) ? $data['date'] : ''; ?></div>
                                        </div>

                                        <!-- price for one -->
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="">Price for 1 Person</div>
                                            <div class="width-40"><?php echo (array_key_exists('price_for_one', $data)) ? $data['price_for_one'] : ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-primary-gray d-flex flex-row justify-content-end row-bottom-round px-20 py-10 white">
                                    <div>Total Price -> <?php echo (array_key_exists('price', $data)) ? $data['price'] : ''; ?></div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
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
                        </div>
                    </div>
        </main>
        <?php $this->view("./includes/footer") ?>

    </div>


</body>

</html>

<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>



<script>
    $(document).ready(function() {
        // Payment completed. It can be a successful failure.
        payhere.onCompleted = function onCompleted(orderId) {
            console.log("Payment completed. OrderID:" + orderId);
            // Note: validate the payment and show success or failure page to the customer
            window.location.replace("<?= ROOT ?>passenger/addReservation");
        };

        // Payment window closed
        payhere.onDismissed = function onDismissed() {
            // Note: Prompt user to pay again or show an error page
            console.log("Payment dismissed");
            window.location.replace("<?= ROOT ?>passenger/billing");
        };

        // Error occurred
        payhere.onError = function onError(error) {
            // Note: show an error page
            console.log("Error:" + error);

            $.ajax({
                type: "POST",
                url: "<?= ROOT ?>/paymentError",
                data: {
                    'error': error
                },
                success: function(data) {
                    console.log(data);
                }
            });
            // window.location.replace("<?= ROOT ?>passenger/billing");
        };



        $('#payhere-payment').click(function(e) {
            e.preventDefault();
            try {
                $.ajax({
                    type: "POST",
                    url: "<?= ROOT ?>passenger/payment",
                    data: {
                        'payment_data': <?= json_encode($data) ?>
                    },
                    success: function(data) {
                        var paymentData = JSON.parse(data);
                        console.log(paymentData);

                        var payment = {
                            "sandbox": true,
                            "merchant_id": paymentData.merchant_id, // Replace your Merchant ID
                            "return_url": "<?= ROOT ?>/passanger/summary", // Important
                            "cancel_url": "<?= ROOT ?>/passanger/billing", // Important
                            "notify_url": "passenger/summary", // Important
                            "order_id": paymentData.order_id,
                            "items": "Door bell wireles",
                            "amount": paymentData.amount,
                            "currency": "LKR",
                            "hash": paymentData.hash, // *Replace with generated hash retrieved from backend
                            "first_name": "Saman",
                            "last_name": "Perera",
                            "email": "samanp@gmail.com",
                            "phone": "0771234567",
                            "address": "No.1, Galle Road",
                            "city": "Colombo",
                            "country": "Sri Lanka",
                            "delivery_address": "No. 46, Galle road, Kalutara South",
                            "delivery_city": "Kalutara",
                            "delivery_country": "Sri Lanka",
                            "custom_1": "",
                            "custom_2": ""
                        };

                        payhere.startPayment(payment);
                    }
                });
            } catch (error) {
                // console.log(error);
            }
        });
    });
</script>