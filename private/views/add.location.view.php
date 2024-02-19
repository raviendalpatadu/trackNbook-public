<?php


?>


<?php $this->view("./includes/header"); ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main style="background-color:#EFF8FF;">
            <div class="container d-flex flex-column justify-content-center align-self-center">
                <div class="row">
                    <div class="col-4">
                        <div class="warrant-container mt-30">
                            <div class="ticket-details">

                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="warrant-container-box mt-30">
                            <div class="ticket-details">
                                <div class="row mb-20 ">
                                    <div class="col-12 d-flex align-items-center flex-column line">
                                        <h1>Update Location</h1>
                                    </div>
                                </div>
                                <div class="row mb-10 mt-50 ml-20 ">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Train ID : 1059</p>
                                        <p class="width-50">
                                            <?php echo (array_key_exists('train', $data)) ? $data['train']->train_id : ''; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Train Name : Yal Devi</p>
                                        <p class="width-50">
                                            <?php echo (array_key_exists('train', $data)) ? ucfirst($data['train']->train_name) : ''; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Start Station : KKS</p>
                                        <p class="width-50">
                                            <?php echo (array_key_exists('train', $data)) ? ucfirst($data['train']->start_station) . "&#8594" . ucfirst($data['train']->end_station) : ''; ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">End Station : Mount Lavinia</p>
                                        <p class="width-50">
                                            <?php echo (array_key_exists('reservations', $data)) ? ucfirst($data['train']->end_station) : ''; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-12 d-flex align-items-center justify-content-start">
                                        <p class="width-50">Date : 25-Jan-2024</p>
                                        <p class="width-50">
                                            <?php echo (array_key_exists('reservations', $data)) ? ucfirst($data['reservations']->reservation_date) : ''; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-10 ml-20">
                                    <div class="col-3">
                                        <div class="text-inputs">
                                            <div class="input-text-label text lightgray-font">Current Station</div>

                                            <div class="width-fill">
                                                <select class="dropdown2" name="reservation_train_id"
                                                    placeholder="Please choose">
                                                    <!-- print data of $data -->
                                                    <option value="0">Jaffna</option>
                                                    <option value="0">Colombo</option>
                                                    <option value="0">Vavuniya</option>
                                                    <option value="0">Anuradhapura</option>
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
                                </div>



                            </div>
                        </div>
                        <div class="row d-flex g-8 justify-content-center">
                            <div class="col-4">
                                <button class="button mt-20 "><a
                                        href="http://localhost/trackNbook/public/traindriver/updatelocation">
                                        <div class="button-base bg-Selected-Blue">
                                            <div class="text Blue">Back</div>
                                        </div>
                                    </a>
                                </button>
                            </div>
                            <div class="col-4">
                                <button class="button mt-20 " id="reject">
                                    <div class="button-base bg-Selected-red">
                                        <div class="text Banner-red">Pending</div>
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
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>
<style>
    .dropdown2 {
        cursor: pointer;
        padding: 8px;
        border-radius: 6px;
        display: block;
        position: relative;
        color: var(--Secondary-Gray);
        border: 1px solid #ccc;
        background: var(--White);
        transition: all 0.3s ease;
        width: 421px;
    }
</style>

</html>