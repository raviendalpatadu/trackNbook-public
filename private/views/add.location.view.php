<?php


?>


<?php $this->view("./includes/header"); ?>


<body>


    <div class="column-left">
        <?php $this->view("./includes/mobile-navbar") ?>
        <main style="background-color:#EFF8FF;">
            <div class="container d-flex flex-column justify-content-center align-self-center">
                <div class="row">
                    <div class="col-12">
                        <div class="add-location-container-box mt-30">
                            <div class="card-add-location">
                                <div class="row mb-20 ">
                                    <div class="col-12 d-flex align-items-center flex-column line">
                                        <h1>Update Location</h1>
                                    </div>
                                </div>
                                <div class="row mb-10 mt-50 ml-20 ">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="ad-width-100">Train ID :
                                            <?php echo (array_key_exists('train', $data)) ? $data['train']->train_id : ''; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="ad-width-100">Train Name :
                                            <?php echo (array_key_exists('train', $data)) ? ucfirst($data['train']->train_name) : ''; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="ad-width-100">Start Station :
                                            <?php echo (array_key_exists('train', $data)) ? ucfirst($data['train']->start_station) : ''; ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="ad-width-100">End Station :
                                            <?php echo (array_key_exists('train', $data)) ? ucfirst($data['train']->end_station) : ''; ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="ad-width-100" style="font-weight:bold;">Last Updated Station:
                                            <?php echo (array_key_exists('train', $data)) ? ucfirst($data['train']->end_station) : ''; ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="ad-width-100">Date : <?php echo date('Y-m-d'); ?></p>
                                    </div>
                                    <div class="row mb-10 ml-20">
                                        <div class="col-3">
                                            <div class="text-inputs">
                                                <div class="input-text-label text lightgray-font">Current Station</div>
                                                <form action="<?= ROOT ?>/traindriver/addlocation/<?= $data['train']->train_id ?>">
                                                    <div class="width-fill">
                                                        <select class="dropdown2-add-location" name="station_id"
                                                            placeholder="Please choose">

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
                                                    <div class="row d-flex add-location-g-8 justify-content-center">
                                                        <div class="col-4">
                                                            <button class="button mt-20 "><a
                                                                    href="<?= ROOT ?>dashboard/train_driver">
                                                                    <div class="button-base bg-Selected-Blue">
                                                                        <div class="text Blue">Back</div>
                                                                    </div>
                                                                </a>
                                                            </button>
                                                        </div>

                                                        <div class="col-4">
                                                            <!-- <button class="button mt-20 "> -->
                                                                <div class="button-base bg-light-green">
                                                                    <div class="text dark-green">
                                                                        <input type="submit" name="submit" value="update">
                                                                    </div>
                                                                </div>
                                                                
                                                            <!-- </button> -->
                                                        </div>

                                                    </div>
                                                </form>
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