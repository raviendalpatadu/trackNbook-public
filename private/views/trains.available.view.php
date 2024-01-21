<?php $this->view("./includes/header"); ?>

<?php

// echo "<pre>";
// // print_r($data);
// echo "</pre>";
?>

<body>
    <div class="column-left">
        <?php $this->view("./includes/navbar") ?>
        <main>
            <div class="container">

                <div class="row">


                    <div class="col-8 center-col">
                        <div>
                            <!-- complete loader -->
                            <div class="row mb-50">
                                <div class="col-12">
                                    <div class="loader d-flex align-items-center justify-content-center px-20">
                                        <div class="loader-circle complete">
                                            <div class="loader-circle-text white">1</div>
                                        </div>
                                        <div class="divider complete"></div>

                                        <div class="loader-circle active">
                                            <div class="loader-circle-text white">2</div>
                                        </div>

                                        <div class="divider"></div>

                                        <div class="loader-circle ">
                                            <div class="loader-circle-text white">3</div>
                                        </div>

                                        <div class="divider"></div>

                                        <div class="loader-circle ">
                                            <div class="loader-circle-text white">4</div>
                                        </div>

                                        <div class="divider"></div>

                                        <div class="loader-circle ">
                                            <div class="loader-circle-text white">5</div>
                                        </div>

                                        <div class="divider"></div>

                                        <div class="loader-circle ">
                                            <div class="loader-circle-text white">6</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-20">
                                <div class="col-12">
                                    <h1><?php echo (isset($data['trains_available']['trains'][0])) ? ucfirst($data['from_station'] . "->") : "" ?> <?= (isset($data['trains_available']['trains'][0])) ? ucfirst($data['to_station']) : "No Trains" ?></h1>
                                    <p class="fs-12 pt-5 pb-5 Secondary-Gray">Date - <?= $data['from_date'] ?></p>
                                    <p>Select a train to proceed</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="trains-available">
                                        <h2>Trains available</h2>
                                        <div class="badge">
                                            <div class="badge-base bg-light-green">
                                                <div class="text dark-green"><?= count($data['trains_available']['trains']) ?></div>
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
                                        // prints unique trains. meken trains wala classes okkogema reservations print karnawa. eka nawaththanna thama $unique_trains = true; kiyala dala thiyenne 
                                        $unique_trains = true;
                                        foreach ($data['trains_available']['trains'] as $key => $value) :
                                            if ($key > 0) {
                                                if ($value->train_id == $data['trains_available']['trains'][$key - 1]->train_id) {
                                                    $unique_trains = false;
                                                } else {
                                                    $unique_trains = true;
                                                }
                                            }
                                            if ($unique_trains) :
                                        ?>
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
                                                            <?php foreach ($data['trains_available']['trains'] as $key_res => $value_res) : ?>
                                                                <?php if ($value->train_id == $value_res->compartment_train_id) : ?>
                                                                    <a href="<?= ROOT ?>train/seatsAvailable/<?= $data['trains_available']['trains'][$key_res]->compartment_id ?>/<?= $value->train_id ?>">
                                                                        <div class="d-flex justify-content-between">

                                                                            <div class="badge-base flex-grow <?= (($key_res + 1) % 3 == 1) ? "" : ((($key_res + 1) % 3 == 2) ? "bg-selected-blue" : "bg-selected-blue") ?>">
                                                                                <div class="text <?= (($key_res + 1) % 3 == 1) ? "" : ((($key_res + 1) % 3 == 2) ? "primary-blue" : "blue") ?>"><?= ucwords($value_res->compartment_class_type) ?> Reservations</div>
                                                                            </div>

                                                                            <div class="badge-base flex-grow <?= (($key_res + 1) % 3 == 1) ? "" : ((($key_res + 1) % 3 == 2) ? "bg-selected-blue" : "bg-selected-blue") ?>">
                                                                                <div class="text <?= (($key_res + 1) % 3 == 1) ? "" : ((($key_res + 1) % 3 == 2) ? "primary-blue" : "blue") ?>"><?= $value_res->no_of_reservations . "/" . $value_res->compartment_total_seats ?></div>
                                                                            </div>

                                                                            <div class="badge-base flex-grow <?= (($key_res + 1) % 3 == 1) ? "" : ((($key_res + 1) % 3 == 2) ? "bg-selected-blue" : "bg-selected-blue") ?>">
                                                                                <div class="text <?= (($key_res + 1) % 3 == 1) ? "" : ((($key_res + 1) % 3 == 2) ? "primary-blue" : "blue") ?>">LKR.<?= $value_res->fare_price?>.00</div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>

                                                    </td>
                                                </tr>
                                            <?php endif; ?>
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

                                <?php if (count($data) > 0) : ?>
                                    <div class="button-base">
                                        <input class="text" type="submit" value="Proceed" name="submit">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>


</body>

</html>