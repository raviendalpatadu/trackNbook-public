<?php $this->view("./includes/header") ?>
<?php $this->view("./includes/load-js") ?>
<!DOCTYPE html>
<html>

<body>
    <div class="container">
        <h1>User DataTable</h1>
        <table id="userTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>NIC</th>
                    <th>Actions</th> <!-- Add a new column for actions -->
                </tr>
            </thead>
            <tbody>
                <!-- Loop through the user data and create rows -->
                <?php foreach ($data['users'] as $user): ?>
                    <tr>
                        <td><?= $user->user_first_name ?></td>
                        <td><?= $user->user_type ?></td>
                        <td><?= $user->user_phone_number ?></td>
                        <td><?= $user->user_email ?></td>
                        <td><?= $user->user_nic ?></td>
                        <td>
                            <a class="blue" href="<?= ROOT ?>admin/updateUser/<?= $user->user_id ?>">
                                <div class="badge-base bg-Selected-Blue">
                                    <div class="dot">
                                        <div class="dot4"></div>
                                    </div>
                                    <div class="text blue">View</div>
                                </div>
                            </a>
                            <div class="badge-base bg-Selected-red"
                                onclick="alert('Are you sure you want to delete record')">
                                <a class="blue d-flex flex-row g-2 align-items-center"
                                    href="<?= ROOT ?>admin/deleteUser/<?= $user->user_id ?>">
                                    <div class="dot">
                                        <div class="dot4 bg-Banner-red"></div>
                                    </div>
                                    <div class="text red">Delete</div>
                                </a>
                            </div>
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
                    url: "<?= ROOT ?>ajax/getUsers",
                    dataSrc: ""
                },
                columns: [
                    {
                        title: 'Name',
                        data: 'user_first_name'
                    },
                    {
                        title: 'Type',
                        data: 'user_type'
                    },
                    {
                        title: 'Phone',
                        data: 'user_phone_number'
                    },
                    {
                        title: 'Email',
                        data: 'user_email'
                    },
                    {
                        title: 'NIC',
                        data: 'user_nic'
                    },
                    {
                        title: 'Actions',
                        data: null,
                        render: function (data, type, row) {
                            return `
                                <a class="blue" href="<?= ROOT ?>admin/updateUser/${data.user_id}">
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
                ]
            });
        });
    </script>
</body>

</html>