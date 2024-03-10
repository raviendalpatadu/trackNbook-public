<?php

// echo "<pre>";
// print_r($data);
// echo "</pre>";

?>


<?php $this->view("./includes/header"); ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main class="bg">
            <div class="d-flex flex-column align-items-center p-60 ">

                <div class="notificationCard  mt-50 d-flex flex-column align-items-center g-10">

                    <div class="">
                        <p class="notificationHeading ">Enter Ticket ID And NIC</p>
                    </div>



                    <div class="text-inputs d-flex mt-20">
                        <div class="input-text-label text lightgray-font">NIC</div>
                        <div class="input-field">
                            <div class="text">
                                <input type="text" class="type-here" placeholder="NIC" name="" id="trainId">
                            </div>
                        </div>
                    </div>

                    <div class="text-inputs d-flex mt-20">
                        <div class="input-text-label text lightgray-font">Ticket ID</div>
                        <div class="input-field">
                            <div class="text">
                                <input type="text" class="type-here" placeholder="Ticket ID" name="" id="trainId">
                            </div>
                        </div>
                    </div>



                    <button class="button btn mt-20 " id="loginBtn">
                        <a href="<?= ROOT ?>staffticketing/refundDetails">
                            <div class="button-base btn bg-Border-blue ">
                                <div class="text White">Enter</div>
                            </div>
                        </a>
                    </button>
                </div>
            </div>
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>

</html>