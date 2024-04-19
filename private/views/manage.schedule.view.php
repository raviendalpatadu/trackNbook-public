

<?php $this->view("./includes/header") ?>
<?php $this->view("./includes/load-js") ?>

<?php

if (isset($data['trains']) && $data['trains'] != 0) {
    $count = count($data['trains']);
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
                                    <h3>Trains Available</h3>
                                    <div class="badge">
                                        <div class="badge-base bg-light-green">
                                            <div class="text dark-green"><?php echo $count; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <table class="if-table stripe hover" id="userTable" style="width:100%">
                    <thead>
                        <tr>
                            <th class="col-2">Name</th>
                            <th class="col-3">Start & End Station</th>
                            <th class="col-2">Time</th>
                            <th class="col-2">Reservation</th>
                            <th class="col-1">Seats</th>
                            <th class="col-2">Ticket Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['trains'] as $train): ?>
                            <tr class="row">
                                <td class="col-2"><?= $train->train_name ?></td>
                                <td class="col-3"><?= $train->start_station . "-" . $train->end_station ?></td>
                                <td class="col-2">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="badge-base bg-light-green">
                                                <div class="dot">
                                                    <div class="dot2"></div>
                                                </div>
                                                <div class="text dark-green">
                                                    <?= date("H:i", strtotime($train->train_start_time)) . " " . date("H:i", strtotime($train->train_end_time)) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-2">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="badge-base bg-selected-blue">
                                                <div class="text">1st Class Reservation</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="badge-base bg-selected-blue">
                                                <div class="text primary-blue">2nd Class Reservation</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="badge-base bg-selected-blue">
                                                <div class="text blue">3rd Class Reservation</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-1">
                                    <div class="row">
                                        <div class="badge-base bg-selected-blue">
                                            <div class="text">20</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="badge-base bg-selected-blue">
                                            <div class="text primary-blue">230</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="badge-base bg-selected-blue">
                                            <div class="text blue">60</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-2">
                                    <div class="row">
                                        <div class="badge-base bg-selected-blue">
                                            <div class="text">LKR.2500.00</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="badge-base bg-selected-blue">
                                            <div class="text primary-blue">LKR.2000.00</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="badge-base bg-selected-blue">
                                            <div class="text blue">LKR.2000.00</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
                <center>
    <button class="button mx-10 px-10">
        <div class="button-base">
            <a href="<?= ROOT ?>train/add" class="blue">Add Train</a>
        </div>
    </button>
</center>


            </div>

            <script>
                $(document).ready(function () {
                    let table = new DataTable("#userTable", {
                        ajax: {
                            url: "<?= ROOT ?>ajax/getTrainList",
                            dataSrc: ""
                        },
                        columns: [
                            {
                                title: 'Name',
                                data: 'train_name'
                            },
                            {
                                title: 'Start & End Station',
                                data: function (row) {
                                    return row.start_station + " - " + row.end_station;
                                }
                            },
                            {
                                title: 'Time',
                                data: function (row) {
                                    return row.train_start_time + " - " + row.train_end_time;
                                }
                            },
                            {
                                title: 'Reservation',
                                data: null,
                                render: function (data, type, row) {
                                    return `
                            <div class="badge-base bg-selected-blue mb-5">
                                <div class="text">1st Class Reservation</div>
                            </div>
                            <div class="badge-base bg-selected-blue mb-5 ">
                                <div class="text primary-blue">2nd Class Reservation</div>
                            </div>
                            <div class="badge-base bg-selected-blue">
                                <div class="text blue">3rd Class Reservation</div>
                            </div>
                        `;
                                }
                            },
                            {
                                title: 'Seats',
                                data: null,
                                render: function (data, type, row) {
                                    return `
                            <div class="badge-base bg-selected-blue mb-5">
                                <div class="text">20</div>
                            </div>
                            <div class="badge-base bg-selected-blue mb-5">
                                <div class="text primary-blue">230</div>
                            </div>
                            <div class="badge-base bg-selected-blue">
                                <div class="text blue">60</div>
                            </div>
                        `;
                                }
                            },
                            {
                                title: 'Ticket Price',
                                data: null,
                                render: function (data, type, row) {
                                    return `
                            <div class="badge-base bg-selected-blue mb-5">
                                <div class="text">LKR.2500.00</div>
                            </div>
                            <div class="badge-base bg-selected-blue mb-5">
                                <div class="text primary-blue">LKR.2000.00</div>
                            </div>
                            <div class="badge-base bg-selected-blue">
                                <div class="text blue">LKR.2000.00</div>
                            </div>
                        `;
                                }
                            }
                        ]
                    });
                });
            </script>

        </main>
    </div>