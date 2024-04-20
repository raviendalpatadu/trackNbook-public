<?php


?>


<?php $this->view("./includes/header"); ?>

<body>


    <div class="column-left">
        <?php $this->view("./includes/mobile-navbar") ?>
        <main class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="delay-container-box mt-30">
                            <div class="card-update-delay">
                                <div class="row mb-20 ">
                                    <div class="col-12 d-flex align-items-start flex-column line">
                                        <h1>Update Train Delay</h1>
                                    </div>
                                </div>
                                <!--<div class="row mb-10 ml-20">
                                    <div class="text-inputs ">
                                        <div class="input-text-label w-10">Email id</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" name="" class="type-here"
                                                    placeholder="Ex : ach@gmail.com">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                               <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <div class="text-inputs">
                                            <div class="input-text-label text lightgray-font">Current Station</div>
                                            <div class="width-fill">
                                                <select class="dropdown input-text" name="reservation_train_id"
                                                    placeholder="Please choose">
                                                    <?php foreach ($data['train_stop_stations'] as $key => $value): ?>
                                                        <option value="<?= $value->station_id ?>">
                                                            <?= $value->station_name ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="assistive-text <?php echo (!array_key_exists('errors', $data)) ? 'display-none' : ''; ?>">
                                    <?php echo (isset($data['errors']) && array_key_exists('from_station', $data['errors']['errors'])) ? $data['errors']['errors']['from_station'] : ''; ?>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="text-inputs">
                                        <div class="input-text-label text lightgray-font">Reason</div>
                                        <div class="input-field3-update-delay">
                                            <div class="text">
                                                <input type="text" class="type-here-update-delay"
                                                    placeholder="Type here" name="reservation_passenger_nic">
                                            </div>
                                            <div
                                                class="assistive-text <?php echo (!array_key_exists('errors', $data)) ? 'display-none' : ''; ?>">
                                                <?php echo (array_key_exists('errors', $data)) ? $data['errors']['from_date'] : ''; ?>
                                            </div>
                                        </div>
                                    </div> -->
                                <div class="text-inputs mb-10">
                                    <div class="input-text-label">Train ID</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" name="" class="type-here" placeholder="Ex : 1102">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-text-label text lightgray-font mb-10">
                                    <label for="station">Current Station</label>
                                    <select class="dropdown input-text" name="station" placeholder="Please choose">

                                        <?php foreach ($data['train_stop_stations'] as $key => $value): ?>
                                            <option value="<?= $value->station_id ?>">
                                                <?= $value->station_name ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div
                                    class="assistive-text <?php echo (!array_key_exists('errors', $data)) ? 'display-none' : ''; ?>">
                                    <?php echo (isset($data['errors']) && array_key_exists('from_station', $data['errors']['errors'])) ? $data['errors']['errors']['from_station'] : ''; ?>
                                </div>
                                <div class="text-inputs mb-10 ">
                                    <div class="input-text-label">Reason</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" name="" class="type-here" placeholder="Type here">
                                        </div>
                                    </div>
                                </div>

                                <div class="row d-flex delay-g-8 justify-content-center">
                                    <div class="col-4">
                                        <button class="button mt-20 "><a
                                                href="http://localhost/trackNbook/public/dashboard/train_driver">
                                                <div class="button-base bg-Selected-Blue">
                                                    <div class="text Blue">Back</div>
                                                </div>
                                            </a>
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button class="button mt-20 " id="reject">
                                            <div class="button-base bg-Selected-red">
                                                <div class="text Banner-red">Clear</div>
                                            </div>
                                            </a>
                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <button class="button mt-20 ">
                                            <div class="button-base bg-light-green">
                                                <div class="text dark-green">Update</div>
                                            </div>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
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