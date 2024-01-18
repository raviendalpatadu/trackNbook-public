<?php $this->view("./includes/header"); ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main>
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <div id="popup-box">
                    <div class="notificationCard modal mt-50 d-flex flex-column justify-content-center align-items-center">
                        <div class="content"></div>
                        <p class="notificationHeading">What's Your Today Work Station</p>
                        <p class="notificationPara text-align-center">Enter Your Working Train ID and the <br>Start Location</p>

                        <div class="text-inputs">
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
                                <div class="button-base btn bg-Border-blue ">
                                    <div class="text White">Start</div>
                                </div>
                        </button>
                    </div>
                </div>

            </div>

            <div class="col-6 d-flex justify-content-center g-30">
                <button>reservation list</button>
            </div>
            <div class="col-6">
               <button>QR</button>
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