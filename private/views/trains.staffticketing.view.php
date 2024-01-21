<?php $this->view("./includes/header"); ?>

<?php

// echo "<pre>";
// print_r($data);
// echo "</pre>";
?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main class=" d-flex align-items-start justify-content-end">

            <div class="home-container justify-contents-center width-fill mt-10">
                <div class="row mb-20">
                    <div class="col-12">
                        <h1><?php echo (isset($data[0])) ? $data[0]->start_station . "->" : "" ?> <?= (isset($data[0])) ? $data[0]->end_station : "No Trains" ?></h1>
                        <p>Select a train to proceed</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="trains-available">
                            <h2>Trains available</h2>
                            <div class="badge">
                                <div class="badge-base bg-light-green">
                                    <div class="text dark-green"><?= count($data) ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="">
                    <thead>
                        <tr class="row">
                            <th class="col-6">Name</th>
                            <th class="col-3">Time</th>
                            <th class="col-3">Reservations</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- print trains -->
                        <?php if ($data) : ?>
                            <?php
                            $_SESSION['reservation'] = $_POST;
                            ?>
                            <?php foreach ($data as $key => $value) : ?>
                                <tr class="row">
                                    <td class="col-6 d-flex align-items-center"><?= ucfirst($value->train_name) ?> - <?= $value->train_id ?></td>
                                    <td class="col-2 d-flex align-items-center mobile-justify-content-end justify-content-center">
                                        <div class="badge-base bg-light-green">
                                            <div class="dot">
                                                <div class="dot2"></div>
                                            </div>
                                            <div class="text dark-green"><?= date("H:i", strtotime($value->train_start_time)) ?>-<?= date("H:i", strtotime($value->train_end_time)) ?></div>
                                        </div>
                                    </td>
                                    <td class="col-4">

                                        <div class="availabity">
                                            <a href="<?= ROOT ?>train/seatsAvailable/1/<?= $value->train_id ?>">
                                                <div class="d-flex justify-content-between">

                                                    <div class="badge-base flex-grow">
                                                        <div class="text">1st Class Reservation</div>
                                                    </div>


                                                    <div class="badge-base flex-grow">
                                                        <div class="text">20</div>
                                                    </div>


                                                    <div class="badge-base flex-grow">
                                                        <div class="text">LKR.2500.00</div>
                                                    </div>

                                                </div>
                                            </a>

                                            <a href="<?= ROOT ?>train/seatsAvailable/2/<?= $value->train_id ?>">
                                                <div class="d-flex justify-content-between">

                                                    <div class="badge-base flex-grow bg-selected-blue">
                                                        <div class="text primary-blue">2nd Class Reservation</div>
                                                    </div>


                                                    <div class="badge-base flex-grow bg-selected-blue">
                                                        <div class="text primary-blue">230</div>
                                                    </div>


                                                    <div class="badge-base flex-grow bg-selected-blue">
                                                        <div class="text primary-blue">LKR.2000.00</div>
                                                    </div>

                                                </div>
                                            </a>

                                            <a href="<?= ROOT ?>train/seatsAvailable/3/<?= $value->train_id ?>">
                                                <div class="d-flex justify-content-between">

                                                    <div class="badge-base flex-grow bg-selected-blue">
                                                        <div class="text blue">3rd Class Reservation</div>
                                                    </div>


                                                    <div class="badge-base flex-grow bg-selected-blue">
                                                        <div class="text blue">60</div>
                                                    </div>


                                                    <div class="badge-base flex-grow bg-selected-blue">
                                                        <div class="text blue">LKR.1500.00</div>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>


                    </tbody>
                </table>
                <div class="pagination">
                    <button class="button">
                        <div class="button-base">
                            <svg class="arrow-left" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8334 9.99935H4.16675M4.16675 9.99935L10.0001 15.8327M4.16675 9.99935L10.0001 4.16602" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
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
                    <button class="button"><a href="<?= ROOT ?>trains/seatsAvailable">
                            <div class="button-base">
                                <div class="text">Next</div>
                                <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </button>
                </div>

                <div class="col-12 d-flex justify-content-end g-10">


                    <div class="button-base">
                        <a href="<?= ROOT ?>home">Back</a>
                    </div>
                </div>
            </div>




        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>

</html>