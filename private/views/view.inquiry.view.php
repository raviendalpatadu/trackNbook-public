<?php $this->view("./includes/header") ?>
<?php $this->view("./includes/load-js") ?>

<?php
if (isset($data['inquiries']) && $data['inquiries'] != 0) {
    $count = count($data['inquiries']);
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
                                    <h3>Passenger Inquiries</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="if-table stripe hover" id="userTable" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th class="col-2">Inquiry ID</th>
                                    <th class="col-2">Passenger Name</th>
                                    <th class="col-2">Ticket No</th>
                                    <th class="col-2">Reason</th>
                                    <th class="col-2">Status</th>
                                    <th class="col-2">Action</th> <!-- New column -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['inquiries'] as $inquiry): ?>
                                    <tr class="p-20">
                                        <td class="col-2"><?= $inquiry->inquiry_id ?></td>
                                        <td class="col-2"><?= $inquiry->inquiry_passenger_id ?></td>
                                        <td class="col-2"><?= $inquiry->inquiry_ticket_id ?></td>
                                        <td class="col-2"><?= $inquiry->inquiry_reason ?></td>
                                        <td class="col-2"><?= $inquiry->inquiry_status ?></td>
                                        <td class="col-2">
                                            <!-- Add action buttons or links here -->
                                            <a class="blue" href="<?= ROOT ?>staffgeneral/updateTrain/<?= $inquiry->inquiry_id ?>">
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
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
       $(document).ready(function () {
            // Initialize DataTable and specify column widths
            let table = new DataTable("#userTable", {
                columnDefs: [
                    { width: '10%', targets: 0 }, // Inquiry ID
                    { width: '20%', targets: 1 }, // Passenger Name
                    { width: '20%', targets: 2 }, // Ticket No
                    { width: '30%', targets: 3 }, // Reason
                    { width: '10%', targets: 4 }, // Status
                    { width: '10%', targets: 5 }  // Action
                ]
            });
        });
    </script>
</body>

</html>
