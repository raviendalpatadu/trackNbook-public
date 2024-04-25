<?php $this->view("./includes/header") ?>
<?php $this->view("./includes/load-js") ?>

<?php

if (isset($data) && !empty($data)) {
    $count = count($data);
} else {
    $count = 0;
}

?>
<html>

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
                            <th class="col-2">Compartment Class Types</th>
                            <th class="col-1">Seats</th>
                            <th class="col-2">Ticket Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $trainData): ?>
                            <tr class="row">
                                <td class="col-2"><?= $trainData['train']->train_name ?></td>
                                <td class="col-3">
                                    <?= $trainData['train']->start_station . "-" . $trainData['train']->end_station ?></td>
                                <td class="col-2">
                                    <?= date("H:i", strtotime($trainData['train']->train_start_time)) . " " . date("H:i", strtotime($trainData['train']->train_end_time)) ?>
                                </td>
                                <td class="col-2">
                                    <?php foreach ($trainData['compartment_class_types'] as $compartment_class_type): ?>
                                        <div class="badge-base bg-selected-blue mb-5">
                                            <div class="text">
                                                <?php echo $compartment_class_type; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </td>
                                <td class="col-1">
                                    <!-- Fill with appropriate seat data -->
                                </td>
                                <td class="col-2">
                                    <!-- Fill with appropriate ticket price data -->
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
                                data: 'train.train_name'
                            },
                            {
                                title: 'Start & End Station',
                                data: function (row) {
                                    return row.train.start_station + " - " + row.train.end_station;
                                }
                            },
                            {
                                title: 'Time',
                                data: function (row) {
                                    return row.train.train_start_time + " - " + row.train.train_end_time;
                                }
                            },
                            {
                                title: 'Compartment Class Types',
                                data: function (row) {
                                    let compartmentClassTypes = row.compartment_class_types.join(", ");
                                    return compartmentClassTypes;
                                }
                            },
                            {
                                title: 'Seats',
                                data: null,
                                render: function (data, type, row) {
                                    return ``; // Fill this with appropriate data
                                }
                            },
                            {
                                title: 'Ticket Price',
                                data: null,
                                render: function (data, type, row) {
                                    return ``; // Fill this with appropriate data
                                }
                            }
                        ]
                    });
                });
            </script>

        </main>
    </div>
</body>

</html>