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
                            <th class="col-5">Reservation</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $trainData): ?>
                            <tr class="row">
                                <td class="col-2"><?= $trainData['train']->train_name ?></td>
                                <td class="col-3">
                                    <?= $trainData['train']->start_station . "-" . $trainData['train']->end_station ?>
                                </td>
                                <td class="col-2">
                                    <?= date("H:i", strtotime($trainData['train']->train_start_time)) . " " . date("H:i", strtotime($trainData['train']->train_end_time)) ?>
                                </td>
                                <td class="col-5">
                                    <?php foreach ($trainData['compartment_class_types'] as $compartment_class_type): ?>
                                        <div class="badge-base bg-selected-blue mb-5">
                                            <div class="text">
                                                <?php echo $compartment_class_type; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </td>
                                
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
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
                                title: 'Reservation',
                                data: function (row) {
                                    let compartmentClassTypesHTML = '';
                                    row.compartment_class_types.forEach(function (compartmentType) {
                                        // Append HTML for each compartment class type with the same base color and text color
                                        compartmentClassTypesHTML += `
                <div class="badge-base flex-auto flex-grow bg-selected-blue mb-3">
                    <div class="text primary-blue ">
                        ${compartmentType} 
                    </div>
                </div>
            `;
                                    });
                                    return compartmentClassTypesHTML;
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