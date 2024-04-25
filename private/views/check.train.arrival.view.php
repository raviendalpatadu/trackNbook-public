<?php $this->view("./includes/header") ?>
<?php $this->view("./includes/load-js") ?>

<?php

if (isset($data['trains']) && !empty($data['trains'])) {
    $count = count($data['trains']);
} else {
    $count = 0;
}

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
                                    <h3>Train Arrivals</h3>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-3">
                            <div class="row g-5">
                                <div class="col-4">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <div class="row">
                                <div class="col-12">

                                    <div class="row">
                                        <div class="col-12">

                                            <table class="if-table stripe hover" id="userTable" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="col-4">Train Name</th>
                                                        <th class="col-1">Train Type</th>
                                                        <th class="col-2">Start & End Station</th>
                                                        <th class="col-2">Start & End Time</th>
                                                        <th class="col-2">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data['trains'] as $train): ?>
                                                        <tr class="row p-20">
                                                            <td class="col-3 d-flex align-items-center">
                                                                <?= $train->train_name ?>
                                                            </td>

                                                            <td class="col-1">
                                                                <?= $train->train_type ?>
                                                            </td>
                                                            <td class="col-2">
                                                                <?= $train->start_station . "-" . $train->end_station ?>
                                                            </td>
                                                            <td class="col-2 ">
                                                                <?= date("H:i", strtotime($train->train_start_time)) . " " . date("H:i", strtotime($train->train_end_time)) ?>
                                                            </td>

                                                            <td class="col-3 d-flex align-items-center g-10">

                                                                <a class="blue"
                                                                    href="<?= ROOT ?>stationmaster/updateArrival/<?= $train->train_id ?>">Check</a>
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
        </main>
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
                        title: 'Train Name',
                        data: 'train.train_name'
                    },
                    {
                        title: 'Train Type',
                        data: 'train.train_type'
                    },
                    {
                        title: 'Start & End Station',
                        data: function (row) {
                            return row.train.start_station + " - " + row.train.end_station;
                        }
                    },
                    {
                        title: 'Start & End Time',
                        data: function (row) {
                            return row.train.train_start_time + " - " + row.train.train_end_time;
                        }
                    },
                    {
                        title: 'Action',
                        data: null,
                        render: function (data, type, row) {
                            return '<a class="blue" href="<?= ROOT ?>stationmaster/updateArrival/' + row.train_id + '">Check</a>';
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: 0, // Target the first column
                        className: 'dt-body-left' // Left-align the content in the first column
                    }
                ]
            });
        });
    </script>

</body>

</html>