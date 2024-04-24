<?php $this->view("./includes/header") ?>
<?php
// echo "<pre>";
// // print_r($data);
// // print_r($_SESSION);


// echo "</pre>";

// echo "<pre>";
// print_r($data);
// print_r($_POST);
// echo "</pre>";



if (isset($data['reservations']) && $data['reservations'] != 0) {
    $count =  count($data['reservations']);
} else {
    $count = 0;
}
// echo $count;
?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main class="bg">
            <div class="container">
                <div class="row ml-20 mr-20 mt-20">
                    <div class="col-12">
                        <div class="row mt-20  ">
                            <div class="col-4 line">
                                <div class="trains-available mt-10 mb-30">
                                    <h3>Inquiry List</h3>
                                </div>
                            </div>
                        </div>
                        <form class="mt-30" action="" method="post">
                            <div class="row mb-30 g-20">
                                <div class="col-3">
                                    <div class="text-inputs">
                                        <div class="input-text-label text lightgray-font">Ticket ID</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?php echo get_var('reservation_ticket_id', '') ?>" name="reservation_ticket_id">
                                            </div>
                                        </div>
                                        <div class="assistive-text <?php echo (!array_key_exists('errors', $data)) ? 'display-none' : ''; ?>"><?php echo (array_key_exists('errors', $data)) ? $data['errors']['from_date'] : ''; ?></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-inputs">
                                        <div class="input-text-label text lightgray-font">NIC</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?php echo get_var('reservation_passenger_nic', '') ?>" name="reservation_passenger_nic">
                                            </div>
                                        </div>
                                        <div class="assistive-text <?php echo (!array_key_exists('errors', $data)) ? 'display-none' : ''; ?>"><?php echo (array_key_exists('errors', $data)) ? $data['errors']['from_date'] : ''; ?></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-inputs">
                                        <div class="input-text-label">To</div>
                                        <div class="width-fill">
                                            <!-- show max of 5 items in select tag -->
                                            <select class="input-field dropdown" name="to_station" placeholder="Please choose">
                                                <option value="0">Please choose</option>
                                                <option value="1"> Reservation</option>
                                                <option value="2"> Refund</option>
                                                <option value="3"> item 3</option>


                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-3 d-flex align-self-end">
                                    <button class="button">
                                        <div class="button-base">
                                            <input type="submit" value="Search" name="submit">
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- create a tab for normal and warrant -->


                    <div class="row">
                        <div class="col-12">

                            <table class="table bg-white">
                                <thead>
                                    <tr class="row p-20 align-items-center justify-content-center">
                                        <th class="col-3">Ticket ID</th>
                                        <th class="col-3 ">NIC</th>
                                        <th class="col-3">Passenger</th>
                                        <th class="col-3">Inquiry Type</th>
                                        <!-- <th class="col-1">Action</th> -->
                                        <!-- <th class="col-2">Date</th> -->
                                        <!-- <th class="col-2">Class</th> -->
                                        <th class="col-1"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($data['reservations'])) : ?>
                                        <?php foreach ($data['reservations'] as $key => $reservation) : ?>
                                            <tr class=" row p-20">
                                                <td data-label="Ticket ID" class="col-3 d-flex align-items-center lightgray-font"><?= $reservation->reservation_ticket_id ?></td>
                                                <td data-label="NIC" class="col-3 d-flex align-items-center"><?= $reservation->reservation_passenger_nic ?></td>
                                                <td data-label="Passenger" class="col-3 d-flex align-items-center"><?= $reservation->reservation_passenger_first_name . ' ' . $reservation->reservation_passenger_last_name ?></td>
                                                <td data-label="Date" class="col-2 d-flex align-items-center"><?= $reservation->reservation_date ?></td>
                                                <!-- <td data-label="Class" class="col-2 d-flex align-items-center"><?= $reservation->reservation_compartment_id ?></td> -->
                                                <td class="col-1 d-flex align-items-center g-20">
                                                    <!-- <div class="badge-base bg-light-green">
                                                    <div class="dot">
                                                        <div class="dot4"></div>
                                                    </div>
                                                    <div class="text dark-green">Pending</div>
                                                </div> -->

                                                    <a class="blue" href="<?= ROOT ?>staffticketing/summary/<?= $reservation->reservation_ticket_id  ?>">
                                                        <div class="badge-base bg-Selected-Blue">
                                                            <div class="dot">
                                                                <div class="dot4"></div>
                                                            </div>
                                                            <div class="text blue">View</div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <div id="popoupError">

                                        </div>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div class="pagination">
                                <button class="button">
                                    <div class="button-base">
                                        <svg class="arrow-left" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.8334 9.99935H4.16675M4.16675 9.99935L10.0001 15.8327M4.16675 9.99935L10.0001 4.16602" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                        <div class="text">Previous</div>
                                    </div>
                                </button>
                                <div class="pagination-numbers">
                                    <div class="pagination-number-base-active">
                                        <div class="content">
                                            <div class="number">1</div>
                                        </div>
                                    </div>
                                    <div class="pagination-number-base">
                                        <div class="content">
                                            <div class="number2">2</div>
                                        </div>
                                    </div>
                                    <div class="pagination-number-base">
                                        <div class="content">
                                            <div class="number2">3</div>
                                        </div>
                                    </div>
                                    <div class="pagination-number-base">
                                        <div class="content">
                                            <div class="number2">...</div>
                                        </div>
                                    </div>
                                    <div class="pagination-number-base">
                                        <div class="content">
                                            <div class="number2">8</div>
                                        </div>
                                    </div>
                                    <div class="pagination-number-base">
                                        <div class="content">
                                            <div class="number2">9</div>
                                        </div>
                                    </div>
                                    <div class="pagination-number-base">
                                        <div class="content">
                                            <div class="number2">10</div>
                                        </div>
                                    </div>
                                </div>
                                <button class="button">
                                    <div class="button-base">
                                        <div class="text">Next</div>
                                        <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </main>
    </div>
    <?php $this->view("./includes/load-js") ?>

</body>

</html>

<script>
    $(document).ready(function() {
        var resCount = <?php echo (!empty($data['reservations'])) ? count($data['reservations']) : "0"; ?>;
        console.log(resCount);

        if (resCount == 0) {
            var div = $('#popoupError');
            var imgURL = '<?= ASSETS . 'images/error.jpg' ?>';
            var description = "Sorry! No Such reservation";
            div.append(makePopupBox('ERROR!!', description, 'OK', imgURL, function(res) {
                // console.log(res);
                if (res) {
                    // ajax
                }
            }))
        }
    });
</script>