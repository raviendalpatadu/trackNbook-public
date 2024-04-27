<?php $this->view("./includes/header") ?>
<?php $this->view("./includes/load-js") ?>

<?php

if (isset($data['inquiries']) && $data['inquiries'] != 0) {
    $count = count($data['inquiries']);
} else {
    $count = 0;
}

echo "<pre>";
print_r($data);
echo "</pre>";
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
                        <table class="if-table stripe hover" id="userTable" style:width=100%>
                            <thead>
                                <tr>
                                    <th class="col-3 ">Passenger Name</th>
                                    <th class="col-3 ">Ticket No</th>
                                    <th class="col-2 ">Reason</th>
                                    <th class="col-2 ">Inquiry Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['inquiries'] as $inquiries): ?>
                                    <tr class="p-20">
                                        <td class="col-3 d-flex align-items-center">
                                            <?= $inquiries->inquiry_passenger_id ?>
                                        </td>
                                        <td class="col-3">
                                            <?= $inquiries->inquiry_ticket_id ?>
                                        </td>
                                        <td class='col-3'>
                                            <?= $inquiries->inquiry_reason ?>
                                        </td>
                                        <td class='col-3'>
                                            <?= $inquiries->inquiry_status ?>
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
            let table = new DataTable("#userTable");
        });
    </script>
</body>

</html>