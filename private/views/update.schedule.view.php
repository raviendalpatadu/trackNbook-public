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
        <main class="bg">
            <div class="d-flex flex-column align-items-center p-60 ">

                <div class="notificationCard-SG  mt-50 d-flex flex-column align-items-center g-10">

                    <div class="">
                        <p class="notificationHeading ">Add New Train</p>
                    </div>


                    <form action="" method="post" class="profile">
                    <div class="row g-20 mb-20   border-bottom-Lightgray">
                            <div class="col-12">
                                <h9 class="text">Compartment Details</h9>
                            </div>
                        </div>
                    

                        <div class="row g-20 mb-20 ">
                            <div class="col-6">
                                <div class="text-inputs ">
                                    <div class="input-text-label">Train Name</div>
                                    <div class="input-field">
                                        <div class="text">
                                        <input type="text" name="train_name" class="type-here"
                                                placeholder="Type here">
                                        </div>
                                    </div>
                                </div><div
                                        class="assistive-text <?php echo (!array_key_exists('train_name', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (isset($data['errors']) && array_key_exists('train_name', $data['errors'])) ? $data['errors']['train_name'] : ''; ?>
                                    </div>
                            </div>

                            <div class="col-6">
                            <div class="text-inputs">
                                    <div class="input-text-label">Train Route</div>
                                    <div class="width-fill" id="">
                                    <select class=" input-field dropdown" name="train_route"
                                            placeholder="Please choose">
                                            <option value="0">Please choose</option>
                                            <?php foreach ($data['routes'] as $key => $value): ?>
                                                <option value="<?= $value->route_no ?>" id="trainRoute">
                                                    <?= $value->route_name ?>
                                                </option>
                                            <?php endforeach; ?>
                                            
                                        </select>
                                    </div>
                                    
                                </div>

                            </div>

                            <div
                                        class="assistive-text <?php echo (!array_key_exists('train_route', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (array_key_exists('train_route', $data['errors'])) ? $data['errors']['train_route'] : ''; ?>
                                    </div>
                        </div>

                        <!-- <script>
                            $(document).ready(function() {
                                        $('#loginBtn').click(function() {
                                                $('mou-canceldetails').css('display', 'flex')

                                            }
                                        }
                                    )
                        </script> -->

                        
                        <div class="row g-20 mt-20 mb-20 ">
                            <div class="col-6">
                                <div class="text-inputs">
                                    <div class="input-text-label">Start Station</div>
                                    <div class="width-fill">
                                    <select class="input-field dropdown" name="start_station"
                                            placeholder="Please choose" id="startStation">
                                            <option value="0">Please choose</option>

                                            <?php foreach ($data['stations'] as $key => $value): ?>
                                                <option value="<?= $value->station_id ?>">
                                                    <?= $value->station_name ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                </div><div
                                        class="assistive-text <?php echo (!array_key_exists('start_station', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (array_key_exists('start_station', $data['errors'])) ? $data['errors']['start_station'] : ''; ?>
                                    </div>
                            </div>
                            <div class="col-6">
                                <div class="text-inputs">
                                    <div class="input-text-label">Start Time</div>
                                    <div class="input-field">
                                        <div class="text">
                                        <input type="time" name="start_time" class="type-here"
                                                placeholder="Type here">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                                <div
                                        class="assistive-text <?php echo (!array_key_exists('start_time', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (array_key_exists('start_time', $data['errors'])) ? $data['errors']['start_time'] : ''; ?>
                                    </div>
                            </div>
                            <div class="row g-20 mt-20 mb-20 ">
                            <div class="col-6">
                                <div class="text-inputs">
                                    <div class="input-text-label">End Station</div>
                                    <div class="width-fill">
                                    <select class="input-field dropdown" name="end_station"
                                            placeholder="Please choose" id="endStation">
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
                                        class="assistive-text <?php echo (!array_key_exists('end_station', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (array_key_exists('end_station', $data['errors'])) ? $data['errors']['end_station'] : ''; ?>
                                    </div>
                            </div>
                            <div class="col-6">
                                <div class="text-inputs">
                                    <div class="input-text-label">End Time</div>
                                    <div class="input-field">
                                        <div class="text">
                                        <input type="time" name="end_time" class="type-here"
                                                placeholder="Type here">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
                            <div
                                        class="assistive-text <?php echo (!array_key_exists('end_time', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (array_key_exists('end_time', $data['errors'])) ? $data['errors']['end_time'] : ''; ?>
                                    </div>
                            
                        </div>
                        </div><div
                                    class="train-stopping-stations mt-20 d-flex flex-row align-items-center g-10 flex-wrap justify-content-between">
                                    <div class="input-text-label">Train Stoping stations</div>
                                </div>

                        <div class="row g-30 mb-20">
                            <!-- <div class="col-6">
                                <div class="text-inputs">
                                    <div class="input-text-label">NIC</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" value="<?= Auth::getuser_nic() ?>" name="user_nic" disabled>
                                            <input type="hidden" class="type-here" placeholder="Type here" value="<?= Auth::getuser_nic() ?>" name="user_nic">

                                        </div>
                                    </div>

                                </div>
                            </div> -->
                            <div class="row g-20 mt-20 mb-20 ">
                               <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">Train Type</div>
                                   <div class="width-fill" id="">
                                   <select class=" input-field dropdown" name="train_type"
                                            placeholder="Please choose">
                                            <option value="0">Please choose</option>

                                            <?php foreach ($data['train_types'] as $key => $value): ?>
                                                <option value="<?= $value->train_type_id ?>" id="traintype">
                                                    <?= $value->train_type ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                    <div
                                        class="assistive-text <?php echo (!array_key_exists('train_type', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (isset($data['errors']) && array_key_exists('train_type', $data['errors'])) ? $data['errors']['train_type'] : ''; ?>
                                    </div>
                                </div>
                             </div>
                             <div class="col-2">
                                <div class="text-inputs">
                                    <div class="input-text-label">No of Compartments</div>
                                    <div class="input-field">
                                        <div class="text">
                                        <input type="number" id="noOfCompartments" name="no_of_compartments"
                                                class="type-here" placeholder="Type here">
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
                            
                        </div>
                        <div
                                        class="assistive-text <?php echo (!array_key_exists('no_of_compartments', $data['errors'])) ? 'display-none' : ''; ?>">
                                        <?php echo (isset($data['errors']) && array_key_exists('no_of_compartments', $data['errors'])) ? $data['errors']['no_of_compartments'] : ''; ?>
                                    </div>
                        </div>
                        
                        

                        

                        
                        


                        
                    </form>




                </div>
            </div>
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>

</html>
