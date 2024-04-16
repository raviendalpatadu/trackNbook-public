<?php $this->view("./includes/header") ?>
<?php $this->view("./includes/load-js") ?>
<?php
// echo "<pre>";
// print_r($data);
// // print_r($_SESSION);
// // print_r($_POST);
// echo "</pre>";

if (isset($data['users']) && $data['users'] != 0) {
    $count = count($data['users']);
} else {
    $count = 0;
}
// echo $count;
?>

<style>
    .display{
        width: 100% !important;
        font-family: Arial, sans-serif !important;
    }

    .display th{
        background-color: #f2f2f2;
        padding: 14px !important;
        font-size: medium !important;
    }

    .display td{
        padding: 14px !important;
        font-size: 14px !important;
    }
</style>
<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main>
            <div class="container">
                <div class="row ml-20 mr-20 mt-20">


                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="trains-available">
                                        <h3>Available Users</h3>
                                    </div>
                                    <br>


                                    <table id="myTable" class="display">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>NIC</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($data['users'])): ?>
                                                <?php foreach ($data['users'] as $key => $user): ?>
                                                    <tr>
                                                        <td>
                                                            <?= $user->user_first_name ?>
                                                        </td>
                                                        <td>
                                                            <?= $user->user_type ?>
                                                        </td>
                                                        <td>
                                                            <?= $user->user_phone_number ?>
                                                        </td>
                                                        <td>
                                                            <?= $user->user_email ?>
                                                        </td>
                                                        <td>
                                                            <?= $user->user_nic ?>
                                                        </td>     
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <div id="popoupError">

                                                </div>
                                            <?php endif; ?>
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

    <?php $this->view("./includes/load-js") ?>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>