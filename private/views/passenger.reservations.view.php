<?php $this->view("./includes/header"); ?>

<?php

echo "<pre>";
// print_r($data);
echo "</pre>";


$seat_count = array_reduce($data['reservations'], function ($ticket_counts, $item) {
    $ticket = $item->reservation_ticket_id;
    $ticket_counts[$ticket] = (isset($ticket_counts[$ticket]) ? $ticket_counts[$ticket] : 0) + 1;
    return $ticket_counts;
}, []);

?>

<body class="flex-column">
    <div class="d-flex flex-column flex-grow justify-content-between">
        <?php $this->view("./includes/navbar") ?>
        <main class="d-flex flex-column flex-grow">

            <div class="row flex-grow">
                <div class="col-4 d-flex flex-column">

                    <!-- modify search -->
                    <!-- <div class=""> -->
                    <form action="" method="post" class="bg-Lightgray p-10 d-flex flex-column g-5">
                        <div class="d-flex flex-row g-10">
                            <div class="text-inputs max-width-none flex-grow">
                                <div class="input-text-label">Date</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="text" name="from_date" class="type-here" placeholder="Type here">
                                    </div>
                                    <svg class="vector" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.504 13.994C17.107 13.994 16.7262 13.8363 16.4455 13.5555C16.1647 13.2748 16.007 12.894 16.007 12.497C16.007 12.1 16.1647 11.7192 16.4455 11.4385C16.7262 11.1577 17.107 11 17.504 11C17.901 11 18.2818 11.1577 18.5625 11.4385C18.8433 11.7192 19.001 12.1 19.001 12.497C19.001 12.894 18.8433 13.2748 18.5625 13.5555C18.2818 13.8363 17.901 13.994 17.504 13.994ZM16.006 17.498C16.006 17.895 16.1637 18.2758 16.4445 18.5565C16.7252 18.8373 17.106 18.995 17.503 18.995C17.9 18.995 18.2808 18.8373 18.5615 18.5565C18.8423 18.2758 19 17.895 19 17.498C19 17.101 18.8423 16.7202 18.5615 16.4395C18.2808 16.1587 17.9 16.001 17.503 16.001C17.106 16.001 16.7252 16.1587 16.4445 16.4395C16.1637 16.7202 16.006 17.101 16.006 17.498ZM12 13.992C11.6032 13.992 11.2227 13.8344 10.9422 13.5538C10.6616 13.2733 10.504 12.8928 10.504 12.496C10.504 12.0992 10.6616 11.7187 10.9422 11.4382C11.2227 11.1576 11.6032 11 12 11C12.397 11 12.7778 11.1577 13.0585 11.4385C13.3393 11.7192 13.497 12.1 13.497 12.497C13.497 12.894 13.3393 13.2748 13.0585 13.5555C12.7778 13.8363 12.397 13.992 12 13.992ZM10.502 17.496C10.502 17.893 10.6597 18.2738 10.9405 18.5545C11.2212 18.8353 11.602 18.993 11.999 18.993C12.396 18.993 12.7768 18.8353 13.0575 18.5545C13.3383 18.2738 13.496 17.893 13.496 17.496C13.496 17.099 13.3383 16.7182 13.0575 16.4375C12.7768 16.1567 12.396 15.999 11.999 15.999C11.602 15.999 11.2212 16.1567 10.9405 16.4375C10.6597 16.7182 10.502 17.099 10.502 17.496ZM6.502 13.992C6.10497 13.992 5.7242 13.8343 5.44346 13.5535C5.16272 13.2728 5.005 12.892 5.005 12.495C5.005 12.098 5.16272 11.7172 5.44346 11.4365C5.7242 11.1557 6.10497 10.998 6.502 10.998C6.89903 10.998 7.2798 11.1557 7.56054 11.4365C7.84128 11.7172 7.999 12.098 7.999 12.495C7.999 12.892 7.84128 13.2728 7.56054 13.5535C7.2798 13.8343 6.89903 13.992 6.502 13.992ZM0 5C0 3.67392 0.526784 2.40215 1.46447 1.46447C2.40215 0.526784 3.67392 0 5 0H19C20.3261 0 21.5979 0.526784 22.5355 1.46447C23.4732 2.40215 24 3.67392 24 5V19C24 20.3261 23.4732 21.5979 22.5355 22.5355C21.5979 23.4732 20.3261 24 19 24H5C3.67392 24 2.40215 23.4732 1.46447 22.5355C0.526784 21.5979 0 20.3261 0 19V5ZM22 8H2V19C2 19.7956 2.31607 20.5587 2.87868 21.1213C3.44129 21.6839 4.20435 22 5 22H19C19.7956 22 20.5587 21.6839 21.1213 21.1213C21.6839 20.5587 22 19.7956 22 19V8ZM19 2H5C4.20435 2 3.44129 2.31607 2.87868 2.87868C2.31607 3.44129 2 4.20435 2 5V6H22V5C22 4.20435 21.6839 3.44129 21.1213 2.87868C20.5587 2.31607 19.7956 2 19 2Z" fill="#344054"></path>
                                    </svg>
                                </div>
                                <div class="assistive-text display-none"></div>
                            </div>
                            <div class="d-flex flex-column align-self-end">
                                <button type="submit" class="btn btn-primary p-8 bg-blue border-none border-radius-6" id="searchDate">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 512 512" style="width: 15px; height: 15px;">
                                        <title>ionicons-v5-f</title>
                                        <path d="M221.09,64A157.09,157.09,0,1,0,378.18,221.09,157.1,157.1,0,0,0,221.09,64Z" style="fill:none;stroke: #fff;stroke-miterlimit:10;stroke-width:32px"></path>
                                        <line x1="338.29" y1="338.29" x2="448" y2="448" style="fill:none;stroke: #fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></line>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </form>

                    <div class="reservations d-flex flex-column flex-grow g-16 p-5" id="reservations">
                        <?php
                        $count = 1;
                        ?>
                        <?php foreach ($data['reservations'] as $reservation_key => $reservation) : ?>
                            <?php
                            // get previous object
                            if ($reservation_key > 0) {
                                $previous = $data['reservations'][$reservation_key - 1];
                            }
                            // check if previous object exists
                            if (isset($previous)) {
                                // check if previous objects ticket_number is equal to current objects ticket_number
                                if ($previous->reservation_ticket_id == $reservation->reservation_ticket_id) {
                                    // if true then continue to next iteration
                                    continue;
                                }
                            }

                            ?>

                            <div class="d-flex p-5 reservation-card width-fill" data-reservationdate="<?= $reservation->reservation_date ?>">
                                <div class="d-flex flex-column flex-grow g-10 p-10">
                                    <div class="d-flex justify-content-between">
                                        <h1 class="fs-16 fw-400"><?= $reservation->reservation_ticket_id ?> </h1>
                                        <span class="fs-14"><?= $reservation->reservation_date ?></span>
                                    </div>
                                    <!-- from station ,time with a arrow svg and to station and time -->
                                    <div class="d-flex flex-wrap g-20 justify-content-between align-items-center">
                                        <div class="d-flex flex-wrap justify-content-around align-items-center flex-grow">
                                            <div class="d-flex flex-column g-20 align-items-center">
                                                <div>
                                                    <p class="fs-14 fw-500"><?= $reservation->reservation_start_station ?></p>
                                                    <p class="fs-12"><?= $reservation->estimated_departure_time ?></p>
                                                </div>

                                                <div class="d-flex g-5 align-items-end">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32">
                                                        <path fill="none" d="m25.496 10.088l-2.622-2.622V3h2.25v3.534l1.964 1.964z"></path>
                                                        <path fill="currentColor" d="M24 1a6 6 0 1 0 6 6a6.007 6.007 0 0 0-6-6m1.497 9.088l-2.622-2.622V3h2.25v3.534l1.964 1.964Z"></path>
                                                        <path fill="currentColor" d="M6 16v-6h9V8H6.184A2.995 2.995 0 0 1 9 6h6V4H9a5.006 5.006 0 0 0-5 5v12a4.99 4.99 0 0 0 3.582 4.77L5.769 30h2.176l1.714-4h8.682l1.714 4h2.176l-1.813-4.23A4.99 4.99 0 0 0 24 21v-5Zm16 4h-3v2h2.816A2.995 2.995 0 0 1 19 24H9a2.995 2.995 0 0 1-2.816-2H9v-2H6v-2h16Z"></path>
                                                    </svg>

                                                    <!-- time in hours and minutes using php-->
                                                    <p class="fs-12 fw-400"><?php
                                                                            // display time in hours and minutes eg 2h 30m
                                                                            $start = new DateTime($reservation->estimated_arrival_time);
                                                                            $end = new DateTime($reservation->estimated_departure_time);
                                                                            $diff = $start->diff($end);
                                                                            echo $diff->format('%hh %im');
                                                                            ?></p>
                                                </div>
                                            </div>

                                            <div class="align-items-center arrow-svg d-flex flex-column g-20 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20">
                                                    <path fill="currentColor" d="m16.172 9l-6.071-6.071l1.414-1.414L20 10l-.707.707l-7.778 7.778l-1.414-1.414L16.172 11H0V9z"></path>
                                                </svg>

                                                <div class="d-flex g-5 align-items-end">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="M12.615 12V5H17v7zm1-1H16V6h-2.385zM17 17H8.615L6 8.058V5h1v3l2.385 8H17zm-8.596 3v-1h8.577v1zm5.211-14H16z"></path>
                                                    </svg>
                                                    <p class="fs-12 fw-400"><?= $reservation->reservation_compartment_type ?></p>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-column g-20 align-items-center">
                                                <div>
                                                    <p class="fs-14 fw-500"><?= $reservation->reservation_end_station ?></p>
                                                    <p class="fs-12"><?= $reservation->estimated_arrival_time ?></p>
                                                </div>

                                                <div class="d-flex g-5 align-items-end">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32">
                                                        <path fill="currentColor" d="M10.5 9A3.5 3.5 0 1 1 14 5.5A3.504 3.504 0 0 1 10.5 9m0-5A1.5 1.5 0 1 0 12 5.5A1.502 1.502 0 0 0 10.5 4m11.974 27.313L19.34 24h-7.101a4.007 4.007 0 0 1-3.867-2.97l-1.634-6.127a3.899 3.899 0 0 1 7.535-2.009L15.1 16H21v2h-7.436l-1.223-4.59a1.9 1.9 0 0 0-3.67.978l1.633 6.126A2.005 2.005 0 0 0 12.239 22h8.42l3.654 8.525zM30 6h-4V2h-2v4h-4v2h4v4h2V8h4z"></path>
                                                        <path fill="currentColor" d="M18 28H7.768a2.003 2.003 0 0 1-1.933-1.485L2.033 12.258l1.933-.516L7.768 26H18Z"></path>
                                                    </svg>

                                                    <p class="fs-12 fw-400"><?= $seat_count[$reservation->reservation_ticket_id] ?></p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center flex-column g-5">
                                            <!-- more info button -->

                                            <button class="White align-items-end bg-blue border-none border-radius-6 btn btn-primary d-flex fw-200 g-5 p-8" id="more" data-ticketId="<?= $reservation->reservation_ticket_id ?>">
                                                More
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                    <g fill="currentColor">
                                                        <path d="M12 9a2 2 0 1 0 0-4a2 2 0 0 0 0 4m2 3a2 2 0 1 1-4 0a2 2 0 0 1 4 0m-2 7a2 2 0 1 0 0-4a2 2 0 0 0 0 4"></path>
                                                        <path fill-rule="evenodd" d="M24 12c0 6.627-5.373 12-12 12S0 18.627 0 12S5.373 0 12 0s12 5.373 12 12m-2 0c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10" clip-rule="evenodd"></path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- </div> -->
                </div>

                <div class="col-8 d-flex flex-column justify-content-center">
                    <div class="d-flex flex-grow" id="reservations">
                        <div class="align-items-center align-self-center d-flex flex-auto flex-column" id="selectResevation">
                            <img width="80" height="80" src="https://img.icons8.com/dotty/80/ticket.png" alt="ticket">
                            <p>Select reservation </p>
                        </div>

                        <div class="d-flex flex-column flex-grow g-10 p-10 display-none" id="reservationData">
                            <!-- map -->
                            <div id="map" class="d-flex">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6390377948733!2d79.84543356983846!3d6.933673902963031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25922460c269b%3A0x6acb064d943db619!2sColombo%20Fort%20Station%2C%20Colombo!5e0!3m2!1sen!2slk!4v1709633170370!5m2!1sen!2slk" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="flex-fill"></iframe>
                            </div>
                            <!-- data -->
                            <div class="bg-background-colour-nav d-flex flex-grow" id="reaservationData">
                                <div class="d-flex flex-grow" id="ticketSummary">
                                    <div class="d-flex flex-grow flex-column g-10 p-10" id="ticketDataDown">

                                        <div class="border-bottom d-flex g-100 mobile-flex-column-reverse mobile-g-20 width-fill">
                                            <!-- train details and qr code -->
                                            <div class="d-flex flex-column flex-grow g-5 ticket-summary-train-data">
                                                <p class="fs-14 fw-500" id="refNo">Ref No: None</p>
                                                <div class="d-flex flex-column flex-grow fs-12 g-5 ticket-summary-train-data-details">
                                                    <!-- <div class="ticket-summary-train-data-details flex-grow"> -->
                                                    <div class="d-flex">
                                                        <p class="width-fill heading">Price</p>
                                                        <p class="width-fill" id="price">None</p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <p class="width-fill heading">Train No</p>
                                                        <p class="width-fill" id="trainNo">None</p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <p class="width-fill heading">Train Name</p>
                                                        <p class="width-fill" id="trainName">None</p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <p class="width-fill heading">Reservation Date</p>
                                                        <p class="width-fill" id="reservationDate">None</p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <p class="width-fill heading">Start Station</p>
                                                        <p class="width-fill" id="startStation">None</p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <p class="width-fill heading">End Station</p>
                                                        <p class="width-fill" id="endStation">None</p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <p class="width-fill heading">Arrival Time</p>
                                                        <p class="width-fill" id="arraivalTime">None</p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <p class="width-fill heading">No of Passengers</p>
                                                        <p class="width-fill" id="noOfPassengers">None</p>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-center align-items-center">
                                                <div id="qr_code"></div>
                                            </div>
                                        </div>
                                        <div class="align-items-start d-flex flex-column g-10">
                                            <p class="fs-14">Passenger and Compartment Details</p>
                                            <table class="ticket-summary-passenger-compartment-details text-align-center" id="compartmentDetails">



                                            </table>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column g-10 align-items-center justify-content-center px-10">
                                        <!-- download ticket btn -->
                                        <button id="downloadTicket" class=" width-fill btn btn-primary white bg-blue border-none border-radius-6 p-8 fw-300">Download Ticket</button>

                                        <!-- canel reservation btn -->
                                        <button id='cancelReservation' class="btn btn-primary bg-red border-none border-radius-6 p-8 white fw-300">Cancel Reservation</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>


</body>

</html>

<script>
    var loadingDiv = '<div class="d-flex justify-content-center align-items-center flex-grow display-none" id="loader"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>';

    $('#selectResevation').after(loadingDiv);


    $(document).ready(function() {

        // stop default popup in date input
        $('input[name="from_date"]').on('focus', function(e) {
            e.preventDefault();
            $('input[name="from_date"]').daterangepicker({
                "minYear": 2024,
                "autoApply": true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                "alwaysShowCalendars": true,
            }, function(start, end, label) {
                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
            });
        });

        $('input[name="from_date"]').change(function(e) {
            e.preventDefault();

            sortReservations();
        })

        function sortReservations() {
            var date = $('input[name = "from_date"]').val();

            var startDate = moment(date.split(' - ')[0]).format('YYYY-MM-DD');

            var endDate = moment(date.split(' - ')[1]).format('YYYY-MM-DD');

            $('#reservations').find('.reservation-card').each(function(index, element) {
                var reservationDate = $(element).data('reservationdate');
                console.log(reservationDate);

                if (reservationDate < startDate || reservationDate > endDate) {
                    $(element).addClass('display-none');
                } else {
                    $(element).removeClass('display-none');
                }
            });
        }




        $('button#more').click(function(event) {

            var ticketId = $(this).data('ticketid')
            console.log(ticketId);

            $('#selectResevation').addClass('display-none');
            // $('#loader').removeClass('display-none');
            $('#reservationData').removeClass('display-none');
            // $('#reservationData').hide();

            $.ajax({
                url: '<?= ROOT ?>ajax/getReservationData/' + ticketId,
                type: 'GET',

                success: function(data, response) {
                    // console.log(data);
                    var data = JSON.parse(data);
                    console.log(data);

                    var ticketDataDown = $('#ticketDataDown');

                    // add data to the ticket summary
                    ticketDataDown.find('#refNo').text('Ref No: ' + data[0].reservation_ticket_id);
                    ticketDataDown.find('#price').text(data[0].reservation_price);
                    ticketDataDown.find('#trainNo').text(data[0].reservation_train_id);
                    ticketDataDown.find('#trainName').text(data[0].reservation_train_name);
                    ticketDataDown.find('#reservationDate').text(data[0].reservation_date);
                    ticketDataDown.find('#startStation').text(data[0].reservation_start_station);
                    ticketDataDown.find('#endStation').text(data[0].reservation_end_station);
                    ticketDataDown.find('#arraivalTime').text(data[0].estimated_arrival_time);
                    ticketDataDown.find('#noOfPassengers').text(data.length)
                    ticketDataDown.find('#cancelReservation').data('ticketid', data[0].reservation_ticket_id);

                    // add data to the compartment details
                    var compartmentDeatails = $('#compartmentDetails');
                    compartmentDeatails.empty();

                    var thead = ['NIC', 'Gender', 'Seat No']

                    thead.forEach(function(heading) {
                        var tr = $('<tr id="heading" data-heading="' + heading + '"/>');
                        tr.append('<th>' + heading + '</th>');

                        data.forEach(function(passenger) {
                            if (heading == 'NIC') {
                                tr.append('<td>' + passenger.reservation_passenger_nic + '</td>');
                            } else if (heading == 'Gender') {
                                tr.append('<td>' + passenger.reservation_passenger_gender + '</td>');
                            } else if (heading == 'Seat No') {
                                tr.append('<td>' + passenger.reservation_seat + '</td>');
                            }
                        });
                        compartmentDeatails.append(tr);
                    });

                    // add qr code
                    $('#qr_code').empty();
                    var qrcode = new QRCode("qr_code", {
                        text: data[0].reservation_ticket_id,
                        width: 128,
                        height: 128,
                        colorDark: "#324054",
                        colorLight: "#ffffff",
                        correctLevel: QRCode.CorrectLevel.H
                    });

                }

            });
        });




        // poup alert to confirm cancelation
        $('#cancelReservation').click(function() {
            var ticketId = $('#refNo').text().split(' ')[2];
            console.log(ticketId);

            // make a custopm confirm box

            var alertBox = $('<div class="confirm-box"><div class="d-flex flex-column justify-content-center align-items-center p-20 g-10"><p>Are you sure you want to cancel this reservation?</p><div class="d-flex g-10"><button id="confirmCancel" class="btn btn-primary bg-red border-none border-radius-6 p-8 white fw-300">Yes</button><button id="cancelCancel" class="btn btn-primary bg-blue border-none border-radius-6 p-8 white fw-300">No</button></div></div></div>');
            $('#reservations').append(alertBox);

            $('#confirmCancel').click(function() {
                $.ajax({
                    url: '<?= ROOT ?>ajax/cancelReservation/' + ticketId,
                    type: 'GET',

                    success: function(data, response) {
                        console.log(data);
                        var data = JSON.parse(data);
                        console.log(data);
                        if (data.length == 0) {
                            alert('Reservation has been canceled');
                            location.reload();
                        } else {
                            alert('Failed to cancel reservation');
                        }
                    }
                });
            });

            $('#cancelCancel').click(function() {
                alertBox.remove();
            });
        });
    });

    $("#downloadTicket").click(function() {
        var element = $('#reservationData');
        var name = "TKT<?= Auth::getreservation_ticket_id() ?>";
        var pdf = new jsPDF();


        pdf.addHTML(element, function() {
            pdf.save(name + '.pdf');
        })
    });
</script>