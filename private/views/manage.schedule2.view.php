<?php $this->view("./includes/header") ?>
<?php

if (!isset($data['errors'])) {
    $data['errors'] = array();
}

// echo "<pre>";

// // print_r($_POST);
// // print_r($data);
// echo "</pre>";
?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main style="background-color:#EFF8FF; padding:20px;">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-4 center_form1">
                    <form class="add-train-new">
                        <div class="top-head-add-train">Add Train</div>
                        <div class="head-box-add-train">
                            Train Details
                        </div>
                        <div class="form-group-add-train">

                            <div class="box-add-train">
                                <label class="departureTime">Train Name</label>
                                <input class="input2-add-train" name="train_name" placeholder="Ex : YAL DEVI" />
                            </div>
                        </div>
                        <div
                            class="assistive-text <?php echo (!array_key_exists('train_name', $data['errors'])) ? 'display-none' : ''; ?>">
                            <?php echo (isset($data['errors']) && array_key_exists('train_name', $data['errors'])) ? $data['errors']['train_name'] : ''; ?>
                        </div>

                        <div class="form-group-add-train">
                            <label for="departure">Train Route</label>
                            <select class="text-field-add-train" name="train_route" id="departure">
                                <option value="0">Please choose</option>
                                <?php foreach ($data['routes'] as $key => $value): ?>
                                    <option value="<?= $value->route_no ?>" id="trainRoute">
                                        <?= $value->route_name ?>
                                    </option>
                                <?php endforeach; ?>
                                < </select>
                                    <div
                                        class="assistive-text <?php echo (!array_key_exists('train_route', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (array_key_exists('train_route', $data['errors'])) ? $data['errors']['train_route'] : ''; ?>
                                    </div>
                        </div>
                        <div class="form-group-add-train">
                            <label for="departure">Start Station</label>
                            <select class="text-field-add-train" id="departure">
                                <option value="option1">Colombo</option>
                                <option value="option2">Anuradhapura</option>
                                <option value="option3">Jaffna</option>
                                <option value="option3">Vavuniya</option>
                                <option value="option3">Kodikamam</option>
                                <option value="option3">Kankesanthurai</option>
                            </select>
                        </div>
                        <div class="form-group-add-train">
                            <label for="departureTime">Start Time</label>
                            <input class="text-field-box-add-train" placeholder="Ex : 13.30" />
                        </div>
                        <div class="form-group-add-train">
                            <label for="departure">End Station</label>
                            <select class="text-field-add-train" id="departure">
                                <option value="option1"> Colombo</option>
                                <option value="option2">Anuradhapura</option>
                                <option value="option3">Jaffna</option>
                                <option value="option3">Vavuniya</option>
                                <option value="option3">Kodikamam</option>
                                <option value="option3">Kankesanthurai</option>
                            </select>
                        </div>
                        <div class="form-group-add-train">
                            <label for="departureTime">End Time</label>
                            <input class="text-field-box-add-train" placeholder="Ex : 13.30" />
                        </div>
                        <div class="form-group-add-train">
                            <label for="departure">Train Type</label>
                            <select class="text-field-add-train" id="departure">
                                <option value="option1"> Express</option>
                                <option value="option2">Mail</option>
                                <option value="option3">Intercity</option>

                            </select>
                        </div>
                        <div class="form-group-add-train">
                            <label for="departureTime">No of Compartments</label>
                            <input class="text-field-box-add-train" placeholder="Ex : 2" />
                        </div>

                        <div class="box-3-add-train">
                            <div class="box-add-train">
                                <label class="lab-small-add-train">Compartment Class</label>
                                <input class="inputs1-add-train" placeholder="Ex : 1st class" />
                            </div>
                            <div class="box-add-train">
                                <label class="lab-small-add-train">Compartment type</label>
                                <input class="inputs1-add-train" placeholder="Ex : Reserved" />
                            </div>
                            <div class="box-4-add-train">
                                <div class="box-add-train">
                                    <label class="lab-small-add-train">Seat layout</label>
                                    <input class="inputs2-add-train" placeholder="Ex : 2*3" />
                                </div>
                                <div class="box-add-train">
                                    <label class="lab-small-add-train">Total Seats</label>
                                    <input class="inputs2-add-train" placeholder="Ex : 48" />
                                </div>
                            </div>

                        </div>

                        <div class="box-add-train">
                            <div class="activation-field-add-train">
                                <a href="http://localhost/trackNbook/public/StaffGeneral/manageSchedule"> <button
                                        class="button-white-add-train"> Reset</button></a>


                                <button class="button-blue-add-train"> Add</button>

                            </div>
                        </div>

                </div>
                </form>
            </div>


            <div class="col-4"></div>

    </div>
    </main>
    </div>


</body>

</html>