<?php $this->view("./includes/header") ?>

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

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main style="background-color:#EFF8FF;">
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
                        <form class="mt-30" action="" method="post">
                            <div class="row mb-30 g-20">
                                <div class="col-3">
                                    <div class="text-inputs">
                                        <div class="input-text-label text lightgray-font">Train Route</div>

                                        <div class="width-fill">
                                            <select class="dropdown" name="reservation_train_id"
                                                placeholder="Please choose">
                                                <!-- print data of $data -->
                                                <option value="0">1006 Badulla → Colombo</option>
                                                <option value="0">1006 Badulla → Colombo</option>
                                                <option value="0">1006 Badulla → Colombo</option>
                                                <option value="0">1006 Badulla → Colombo</option>
                                                <?php foreach ($data['trains'] as $key => $value): ?>
                                                <option value="<?= $value->train_id ?>">
                                                    <?= $value->train_name ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div
                                            class="assistive-text <?php echo (!array_key_exists('errors', $data)) ? 'display-none' : ''; ?>">
                                            <?php echo (isset($data['errors']) && array_key_exists('from_station', $data['errors']['errors'])) ? $data['errors']['errors']['from_station'] : ''; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-inputs">
                                        <div class="input-text-label text lightgray-font">Train Type</div>

                                        <div class="width-fill">
                                            <select class="dropdown" name="reservation_train_id"
                                                placeholder="Please choose">
                                                <!-- print data of $data -->
                                                <option value="0">Express</option>
                                                <option value="0">Mail</option>
                                                <option value="0">Intercity</option>

                                                <?php foreach ($data['trains'] as $key => $value): ?>
                                                <option value="<?= $value->train_id ?>">
                                                    <?= $value->train_name ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div
                                            class="assistive-text <?php echo (!array_key_exists('errors', $data)) ? 'display-none' : ''; ?>">
                                            <?php echo (isset($data['errors']) && array_key_exists('from_station', $data['errors']['errors'])) ? $data['errors']['errors']['from_station'] : ''; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3 d-flex align-self-end">
                                    <button class="button">
                                        <div class="button-base">
                                            <input type="submit" value="Search" name="submit">
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

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
                                        <table class="">
                                            <thead>
                                                <tr class="row p-20">
                                                    <th class="col-3 d-flex align-items-center">Train Name</th>
                                                    <th class="col-1">Train No</th>
                                                    <th class="col-2">Train Type</th>
                                                    <th class="col-3">Start & End Station</th>
                                                    <th class="col-2 d-flex align-items-center">Start & End Time</th>
                                                    <th class="col-1 d-flex align-items-center g-5">
                                                        <div class="badge-base bg-Selected-Blue">
                                                            <div class="text blue">View</div>
                                                        </div>
                                                        OR
                                                        <div class="badge-base bg-Selected-red"></div>
                                                        <div class="text red">Delete</div>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php for ($train = 0; $train < $count; $train++): ?>
                                                <tr class="row p-20">
                                                    <td class="col-3 d-flex align-items-center">
                                                        <?= $data['trains'][$train]->train_name ?>
                                                    </td>
                                                    <td class="col-1">
                                                        <?= $data['trains'][$train]->train_id ?>
                                                    </td>
                                                    <td class="col-2">
                                                        <?= $data['trains'][$train]->train_type ?>
                                                    </td>
                                                    <td class="col-3">
                                                        <?= $data['trains'][$train]->start_station . " " . $data['trains'][$train]->end_station ?>
                                                    </td>
                                                    <td class="col-2 d-flex align-items-center">
                                                        <?= date("H:i", strtotime($data['trains'][$train]->train_start_time)) . " " . date("H:i", strtotime($data['trains'][$train]->train_end_time)) ?>
                                                    </td>

                                                    <td class="col-1 d-flex align-items-center g-5">
                                                        <a class="blue"
                                                            href="<?= ROOT ?>staffgeneral/updateTrain/<?= $data['trains'][$train]->train_id ?>">
                                                            <div class="badge-base bg-Selected-Blue">
                                                                <div class="dot">
                                                                    <div class="dot4"></div>
                                                                </div>
                                                                <div class="text blue">View</div>
                                                            </div>
                                                        </a>
                                                        <a class="blue"
                                                            href="<?= ROOT ?>staffgeneral/deleteTrain/<?= $data['trains'][$train]->train_id ?>"
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
                                                <?php endfor; ?>
                                            </tbody>
                                        </table>
                                        <div class="pagination">
                                            <button class="button">
                                                <div class="button-base">
                                                    <svg class="arrow-left" width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.8334 9.99935H4.16675M4.16675 9.99935L10.0001 15.8327M4.16675 9.99935L10.0001 4.16602"
                                                            stroke="#344054" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                    <div class="text">Previous</div>
                                                </div>
                                            </button>
                                            <div class="pagination-numbers">
                                                <div class="pagination-number-base-active">
                                                    <div class="content">
                                                        <div class="number">1</div>
                                                    </div>
                                                </div>
                                                <div class="pagination-number-base">
                                                    <div class="content">
                                                        <div class="number2">2</div>
                                                    </div>
                                                </div>
                                                <div class="pagination-number-base">
                                                    <div class="content">
                                                        <div class="number2">3</div>
                                                    </div>
                                                </div>
                                                <div class="pagination-number-base">
                                                    <div class="content">
                                                        <div class="number2">...</div>
                                                    </div>
                                                </div>
                                                <div class="pagination-number-base">
                                                    <div class="content">
                                                        <div class="number2">8</div>
                                                    </div>
                                                </div>
                                                <div class="pagination-number-base">
                                                    <div class="content">
                                                        <div class="number2">9</div>
                                                    </div>
                                                </div>
                                                <div class="pagination-number-base">
                                                    <div class="content">
                                                        <div class="number2">10</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="button">
                                                <div class="button-base">
                                                    <div class="text">Next</div>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327"
                                                            stroke="#344054" stroke-width="1.67" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
        </main>
    </div>
    <?php $this->view("./includes/load-js") ?>

</body>

</html>