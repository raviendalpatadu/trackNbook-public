<?php $this->view("./includes/header") ?>
<?php

if (!isset($data['errors'])) {
    $data['errors'] = array();
}

$stationCount = isset($_POST['station_count']) ? intval($_POST['station_count']) : 0; // Default value is 5


?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main class="bg">
            <div class="d-flex flex-column align-items-center p-60 ">
                <div class="notificationCard-SG  mt-50 d-flex flex-column align-items-center g-10">

                    <div class="row">

                        <div class="col-8 center-col table profile">
                            <div class="d-flex flex-column align-items-center p-60 ">

                                <div class="">
                                    <p class="notificationHeading mt--20 mb-10">Add New Route</p>
                                </div>

                                <form action="" method="post" class="profile">
                                    <div class="row g-20 mb-20 ">
                                        <div class="row  border-bottom-Lightgray">
                                            <div class="col-12">
                                                <h9 class="text">Route Details</h9>
                                            </div>
                                        </div>

                                        <div class="col-5">
                                            <div class="text-inputs ">
                                                <div class="input-text-label">Route Name</div>
                                                <div class="input-field">
                                                    <div class="text">
                                                        <input type="text" name="route_name" class="type-here"
                                                            placeholder="Type here">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="assistive-text <?php echo (!array_key_exists('route_name', $data['errors'])) ? 'display-none' : ''; ?>">
                                                <?php echo (isset($data['errors']) && array_key_exists('route_name', $data['errors'])) ? $data['errors']['route_name'] : ''; ?>
                                            </div>
                                        </div>

                                        <div
                                            class="assistive-text <?php echo (!array_key_exists('train_type', $data['errors'])) ? 'display-none' : ''; ?>">
                                            <?php echo (array_key_exists('train_type', $data['errors'])) ? $data['errors']['train_type'] : ''; ?>
                                        </div>
                                    </div>

                                    <!-- Input field for station count -->
                                    <div class="col-5">
                                            <div class="text-inputs ">
                                                <div class="input-text-label">Number of Stations</div>
                                                <div class="input-field">
                                                    <div class="text">
                                                        <input type="number" name="station_count" class="type-here"
                                                            placeholder="Type here" value="<?= $stationCount ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    // $stationCount = 5; // Replace with the actual count of stations for this route

                                    for ($i = 1; $i <= $stationCount; $i++) {
                                        ?>
                                        <div class="row g-20 mt-20 mb-20 ">
                                            <div class="col-6">
                                                <div class="text-inputs">
                                                    <div class="input-text-label">Station <?= $i ?></div>
                                                    <div class="width-fill">
                                                        <select class="input-field dropdown" name="station[]"
                                                            placeholder="Please choose">
                                                            <option value="0">Please choose</option>

                                                            <?php foreach ($data['stations'] as $key => $value): ?>
                                                                <option value="<?= $value->station_id ?>">
                                                                    <?= $value->station_name ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="assistive-text display-none">Assistive Text</div>
                                                </div>
                                                <div
                                                    class="assistive-text <?php echo (!array_key_exists('station' . $i, $data['errors'])) ? 'display-none' : ''; ?>">
                                                    <?php echo (array_key_exists('station' . $i, $data['errors'])) ? $data['errors']['station' . $i] : ''; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <div class="row mt--70 mb-20 g-0 d-flex justify-content-center">
                                        <button class="button mx-10 px-10">
                                            <div class="button-base">
                                                <input type="submit" value="Add" name="submit">
                                            </div>
                                        </button>

                                        <button class="button mx-10" >
                                            <div class="button-base">
                                                <input type="reset" value="Reset">
                                            </div>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->view("./includes/footer") ?>
    </div>
</body>

</html>
