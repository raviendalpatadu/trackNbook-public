<?php $this->view("./includes/header"); ?>

<body>

    <div class="column-left">
        <?php $this->view("./includes/mobile-navbar") ?>
        <main class="bg">
            <div class="container d-flex flex-column justify-content-center align-items-center">

                <div class="notificationCard  mt-50 d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex flex-row">
                        <div class="d-flex align-items-center">
                            <p class="notificationHeading">In which train <br> you are <br>Working Today</p>
                        </div>

                        <img src="<?= ASSETS ?>images/checker.png" alt="" srcset="" class="checker-img">
                    </div>


                    <div class="text-inputs d-flex mt-20">
                        <div class="input-text-label lightgray-font">Train ID</div>
                        <div class="input-field">
                            <div class="">
                                <input type="text" class="type-here" placeholder="Enter Your Train ID" name="" id="trainId">
                            </div>
                        </div>
                    </div>

                    <!-- <div class="text-inputs">
                            <div class="input-text-label text lightgray-font">Start Location</div>
                            <div class="input-field">
                                <div class="text">
                                    <input type="text" class="type-here" placeholder="Staff ID" name="" >
                                </div>
                            </div>
                        </div> -->

                    <button class="button btn mt-20 " id="loginBtn">
                        <a href="<?= ROOT ?>dashboard/train_driver">
                            <div class="button-base btn bg-Border-blue ">
                                <div class="text White">Start</div>
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

<script>
    $(document).ready(function() {
        $("#popup-box").hide();
        $("#popup-box").fadeIn(1000);
        // // popup box should come from bottom to top 
        $("#popup-box").addClass('mou-popup-box d-flex flex-column justify-content-center align-items-center');


        $("#loginBtn").click(function() {

            var trainId = $('#trainId').val();

            if (trainId == '') {
                alert('Please Enter Train ID');
            } else {
                $("#popup-box").fadeOut(500);
            }
        });
    });
</script>