<?php $this->view("./includes/header"); ?>

<body>

    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main>
            <div class="container d-flex flex-column justify-content-center align-items-center">

                <div class="notificationCard modal mt-50 d-flex flex-column justify-content-center align-items-center">
                    <div class="content"></div>
                    <p class="notificationHeading">What's Your Today Work Station</p>

                    <div class="text-inputs d-flex mt-20">
                        <div class="input-text-label text lightgray-font">Train ID</div>
                        <div class="input-field">
                            <div class="text">
                                <input type="text" class="type-here" placeholder="Staff ID" name="" id="trainId">
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
                        <a href="<?= ROOT ?>ticketchecker/dashboard">
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