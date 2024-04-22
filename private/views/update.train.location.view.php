<?php $this->view("./includes/header"); ?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main style="background-color:#EFF8FF; padding:20px;">
            <div class="form-group-update-location">
                <label for="departureTime"><b> Train No</b></label>
                <input class="text-field-box-top-update-location" placeholder="Ex : 1050" />
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="main-box center_form1">
                    <div class="top-head-update-location">Update train Location</div>
                    <div class="head-box-update-location">
                        Train Details
                    </div>
                    <div class="fields-update-location">
                        <p class="text-update-location">Train ID </p>
                        <p class="text-update-location">: 1095</p>
                    </div>
                    <div class="fields-update-location">
                        <p class="text-update-location">Train Name </p>
                        <p class="text-update-location">: YAL NILA</p>

                    </div>
                    <div class="fields-update-location">
                        <p class="text-update-location">Date </p>
                        <p class="text-update-location">: 2023-09-21</p>
                    </div>
                    <div class="fields-update-location">
                        <p class="text-update-location">From</p>
                        <p class="text-update-location">: KKS - 05.30</p>
                    </div>
                    <div class="fields-update-location">
                        <p class="text-update-location">To</p>
                        <p class="text-update-location">: Colombo - 12.30</p>
                    </div>
                    <div class="form-group-update-location">
                        <label for="departure">Current Station</label>
                        <select class="text-field-update-location" id="departure">
                            <option value="option1">Colombo</option>
                            <option value="option2">Anuradhapura</option>
                            <option value="option3">Jaffna</option>
                            <option value="option3">Vavuniya</option>
                            <option value="option3">Kodikamam</option>
                            <option value="option3">Kankesanthurai</option>
                        </select>
                    </div>
                    <div class="form-group-update-location">
                        <label for="departureTime">Time</label>
                        <input class="text-field-box-update-location" placeholder="Ex : 13.30" />
                    </div>


                    <div class="col-4">

                        <div class="activation-field-update-location">
                            <button class="button-blue-update-location"> Update</button>
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