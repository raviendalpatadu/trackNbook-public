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
                                    <h3>Available Trains</h3>
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

                                            <table class="if-table stripe hover" id="userTable" style:width=100%>
                                                <thead>
                                                    <tr>
                                                        <th class="col-4 ">
                                                            <!-- Add 'text-left' class for left alignment -->
                                                            Train Name
                                                        </th>
                                                        <th class="col-1 ">
                                                            <!-- Add 'text-left' class for left alignment -->
                                                            Train No
                                                        </th>
                                                        <th class="col-1 ">
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
                                                        <th class="col-2">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data['trains'] as $train): ?>
                                                        <tr class="row p-20">
                                                            <td class="col-4 d-flex align-items-center">
                                                                <?= $train->train_name ?>
                                                            </td>
                                                            <td class="col-1">
                                                                <?= $train->train_id ?>
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

                                                            <td class="col-2 d-flex align-items-center g-5">
                                                                <a class="blue"
                                                                    href="<?= ROOT ?>staffgeneral/updateTrain/<?= $train->train_id ?>">
                                                                    <div class="badge-base bg-Selected-Blue">
                                                                        <div class="dot">
                                                                            <div class="dot4"></div>
                                                                        </div>
                                                                        <div class="text blue">View</div>
                                                                    </div>
                                                                </a>
                                                                <a class="blue"
                                                                    href="<?= ROOT ?>staffgeneral/deleteTrain/<?= $train->train_id ?>"
                                                                    onclick="alert('are sure you wat to delete the train?')">
                                                                    <div class="badge-base bg-Selected-red">
                                                                        <div class="dot">
                                                                            <div class="dot4  bg-Banner-red"></div>
                                                                        </div>
                                                                        <div class="text red">Delete</div>
                                                                    </div>
                                                                </a>
                                                            </td>

                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>


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
                        data: 'train_name',
                        width: '20%' // Set the width for the first column
                    },
                    {
                        title: 'Train No',
                        data: 'train_id'
                    },
                    {
                        title: 'Train Type',
                        data: 'train_type'
                    },
                    {
                        title: 'Start & End Station',
                        data: function (row) {
                            return row.start_station + " - " + row.end_station;
                        }
                    },
                    {
                        title: 'Start & End Time',
                        data: function (row) {
                            return row.train_start_time + " - " + row.train_end_time;
                        }
                    },
                    {
                        title: 'Actions',
                        data: null,
                        render: function (data, type, row) {
                            return `
                            <a class="blue" href="<?= ROOT ?>staffgeneral/getTrainList/${data.user_id}">
                                <div class="badge-base bg-Selected-Blue">
                                    <div class="dot">
                                        <div class="dot4"></div>
                                    </div>
                                    <div class="text blue">View</div>
                                </div>
                            </a>
                            <div class="badge-base bg-Selected-red" onclick="alert('Are you sure you want to delete record')">
                                <a class="blue d-flex flex-row g-2 align-items-center" href="<?= ROOT ?>admin/deleteUser/${data.user_id}">
                                    <div class="dot">
                                        <div class="dot4 bg-Banner-red"></div>
                                    </div>
                                    <div class="text red">Delete</div>
                                </a>
                            </div>
                        `;
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