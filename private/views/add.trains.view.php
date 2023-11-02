<?php $this->view("./includes/header") ?>
<?php

if (!isset($data['errors'])) {
    $data['errors'] = array();
}

echo "<pre>";

// print_r($_POST);
print_r($data);
echo "</pre>";
?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main style="background-color:#EFF8FF;">
            <div class="container">
                <div class="row">

                    <div class="col-8 center-col table profile">
                        <div class="row mb-10">
                            <div class="col-6">
                                <div class="profile-img d-flex flex-column align-items-center justify-content-center ">
                                    <img src="<?= ASSETS ?>images/t-avatar.jpg" alt="train icon">
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <div class="profile-name">
                                    <h2>Add New Train</h2>
                                </div>
                            </div>
                        </div>


                        <form action="" method="post" class="center-col col-12 mt-50">
                            <div class="text-inputs">

                                <div class="text-inputs">
                                    <div class="input-text-label">Train Name</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" name="train_name" class="type-here" placeholder="Type here">
                                        </div>
                                    </div>
                                    <div class="assistive-text <?php echo (!array_key_exists('train_name', $data['errors'])) ? 'display-none' : ''; ?>"><?php echo (isset($data['errors']) && array_key_exists('train_name', $data['errors'])) ? $data['errors']['train_name'] : ''; ?></div>
                                </div>


                                <div class="text-inputs">
                                    <div class="input-text-label mt-20">Train Route</div>
                                    <div class="width-fill">
                                        <!-- show max of 5 items in select tag -->
                                        <select class="input-field dropdown" name="train_route" placeholder="Please choose">
                                            <option value="0">Please choose</option>

                                            <?php foreach ($data['routes'] as $key => $value) : ?>
                                                <option value="<?= $value->route_no ?>">
                                                    <?= $value->route_name ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="assistive-text <?php echo (!array_key_exists('train_route', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (array_key_exists('train_route', $data['errors'])) ? $data['errors']['train_route'] : ''; ?>
                                    </div>
                                </div>



                                <div class="text-inputs mt-20">
                                    <div class="input-text-label">Start Station</div>
                                    <div class="width-fill">
                                        <!-- show max of 5 items in select tag -->
                                        <select class="input-field dropdown" name="start_station" placeholder="Please choose">
                                            <option value="0">Please choose</option>

                                            <?php foreach ($data['stations'] as $key => $value) : ?>
                                                <option value="<?= $value->station_id ?>">
                                                    <?= $value->station_name ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="assistive-text <?php echo (!array_key_exists('start_station', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (array_key_exists('start_station', $data['errors'])) ? $data['errors']['start_station'] : ''; ?>
                                    </div>
                                </div>

                                <div class="text-inputs mt-20">
                                    <div class="input-text-label">Start Time</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="time" name="start_time" class="type-here" placeholder="Type here">
                                        </div>
                                    </div>
                                    <div class="assistive-text <?php echo (!array_key_exists('start_time', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (array_key_exists('start_time', $data['errors'])) ? $data['errors']['start_time'] : ''; ?>
                                    </div>
                                </div>

                                <div class="input-text-label mt-20">End Staion</div>
                                <div class="text-inputs">
                                    <div class="width-fill">
                                        <!-- show max of 5 items in select tag -->
                                        <select class="input-field dropdown" name="end_station" placeholder="Please choose">
                                            <option value="0">Please choose</option>

                                            <?php foreach ($data['stations'] as $key => $value) : ?>
                                                <option value="<?= $value->station_id ?>">
                                                    <?= $value->station_name ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="assistive-text <?php echo (!array_key_exists('end_station', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (array_key_exists('end_station', $data['errors'])) ? $data['errors']['end_station'] : ''; ?>
                                    </div>
                                </div>

                                <div class="text-inputs mt-20">
                                    <div class="input-text-label">End Time</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="time" name="end_time" class="type-here" placeholder="Type here">
                                        </div>
                                    </div>
                                    <div class="assistive-text <?php echo (!array_key_exists('end_time', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (array_key_exists('end_time', $data['errors'])) ? $data['errors']['end_time'] : ''; ?>
                                    </div>
                                </div>

                                <div class="input-text-label mt-20">Train Type</div>
                                <div class="text-inputs">
                                    <div class=width-fill>
                                        <select class="input-field dropdown" name="train_type" placeholder="Please choose">

                                            <option value="Intercity">Intercity</option>
                                            <option value="Slow">Slow</option>
                                            <option value="Special">Special</option>

                                        </select>
                                    </div>
                                    <div class="assistive-text <?php echo (!array_key_exists('train_type', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (array_key_exists('train_type', $data['errors'])) ? $data['errors']['train_type'] : ''; ?>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-50">

                                <div class="col-12 d-flex justify-content-center">
                                    <button class="button mx-15 px-10">
                                        <div class="button-base">
                                            <input type="submit" value="Add" name="submit">
                                        </div>
                                    </button>

                                    <button class="button mx-15 px-10">
                                        <div class="button-base">
                                            <input type="reset" value="reset">
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>


                </div>

        </main>
        <?php $this->view("./includes/footer") ?>
    </div>


</body>

</html>