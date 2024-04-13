<?php $this->view("./includes/header") ?>
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
                                            <tr class="row p-20">
                                                <th class="col-3 d-flex align-items-center">
                                                    <div class="col-4">
                                                        <div class="d-flex .flex-row g-5 mr-5">
                                                        </div>
                                                    </div>
                                                    Name
                                                </th>
                                                <th class="col-1">Type</th>
                                                <th class="col-2">Phone</th>
                                                <th class="col-3">Email</th>
                                                <th class="col-2 d-flex align-items-center">
                                                    <div class="col-4">
                                                        <div class="d-flex .flex-row g-5 mr-5">

                                                        </div>
                                                    </div>
                                                    NIC

                                                </th>
                                                <th class="col-1"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($data['users'])): ?>
                                                <?php foreach ($data['users'] as $key => $user): ?>
                                                    <tr class=" row p-20">
                                                        <td class="col-3 d-flex align-items-center">
                                                            <?= $user->user_first_name ?>
                                                        </td>
                                                        <td class="col-3 d-flex align-items-center">
                                                            <?= $user->user_type ?>
                                                        </td>
                                                        <td class="col-1 d-flex align-items-center">
                                                            <?= $user->user_phone_number ?>
                                                        </td>
                                                        <td class="col-2 d-flex align-items-center">
                                                            <?= $user->user_email ?>
                                                        </td>
                                                        <td class="col-3 d-flex align-items-center">
                                                            <?= $user->user_nic ?>
                                                        </td>
                                                        <td class="col-1"></td>
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