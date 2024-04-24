<?php $this->view("./includes/header") ?>
<?php $this->view("./includes/load-js") ?>

<?php

if (isset($data['waitinglist']) && $data['waitinglist'] != 0) {
    $count = count($data['waitinglist']);
} else {
    $count = 0;
}

// echo "<pre>";
// print_r($data);
// echo "</pre>";
?>

<head>
</head>

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
                                    <h3>Waiting List</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="if-table stripe hover" id="userTable" style:width=100%>
                            <thead>
                                <tr>
                                    <th class="col-3 ">
                                        <!-- Add 'text-left' class for left alignment -->
                                        Passenger Name
                                    </th>
                                    <th class="col-3 ">
                                        <!-- Add 'text-left' class for left alignment -->
                                        Train No
                                    </th>
                                    <th class="col-2 ">
                                        <!-- Add 'text-left' class for left alignment -->
                                        Train Type
                                    </th>
                                    <th class="col-2 ">
                                        <!-- Add 'text-left' class for left alignment -->
                                        Start & End Station
                                    </th>
                                    <th class="col-2 ">
                                        <!-- Add 'text-left' class for left alignment -->
                                        Start & End Time
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['waitinglist'] as $waitinglist) : ?>
                                    <tr class="row p-20">
                                        <td class="col-3 d-flex align-items-center">
                                            <?= $waitinglist->waiting_list_passenger_id ?>
                                        </td>
                                        <td class="col-3">
                                            <?= $waitinglist->waiting_list_train_id ?>
                                        </td>
                                        <td class="col-2">
                                            <?= $waitinglist->waiting_list_reservation_start_station ?>
                                        </td>
                                        <td class="col-2">
                                            <?= $waitinglist->waiting_list_reservation_end_station ?>
                                        </td>
                                        <td class="col-2 ">
                                            <?= $waitinglist->waiting_list_reservation_date ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    </div>
    </main>
    </div>

    <script>
        $(document).ready(function() {
            let table = new DataTable("#userTable", {
                ajax: {
                    url: "<?= ROOT ?>ajax/getWaitingList",
                    dataSrc: ""
                },
                columns: [{
                        title: 'Passenger Name',
                        data: 'waiting_list_passenger_id',
                        width: '20%' // Set the width for the first column
                    },
                    {
                        title: 'Train Name',
                        data: 'waiting_list_train_id',
                        width: '20%' // Set the width for the first column
                    },
                    {
                        title: 'Start Station',
                        data: 'waiting_list_reservation_start_station',
                        width: '20%' // Set the width for the first column
                    },
                    {
                        title: 'End Station',
                        data: 'waiting_list_reservation_end_station',
                        width: '20%' // Set the width for the first column

                    },
                    {
                        title: 'Reservation Date',
                        data: 'waiting_list_reservation_date',
                        width: '20%' // Set the width for the first column
                    },


                ],
                columnDefs: [{
                    targets: 0, // Target the first column
                    className: 'dt-body-left' // Left-align the content in the first column
                }]
            });
        });
    </script>
</body>

</html>