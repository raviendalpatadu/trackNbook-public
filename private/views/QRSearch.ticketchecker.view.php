<?php $this->view("./includes/header"); ?>

<body>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main class="bg">
            <div class=" container d-flex width-fill justify-content-center  ">

                <div class="p-20 align-items-center">
                    <div class="d-flex flex-row">
                        <div class="d-flex align-items-center flex-column">
                            <!-- QR -->
                            <div class="QR-container">
                                <div class="QR-section">
                                    <div id="my-qr-reader">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button class="button btn mt-20 " id="loginBtn">
                                            <a href="<?= ROOT ?>ticketchecker/dashboard">
                                                <div class="button-base btn bg-Border-blue ">
                                                    <div class="text White">Go Back</div>
                                                </div>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>


            </div>
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>


</html>

<script src="https://unpkg.com/html5-qrcode">
</script>
<script src="script.js"></script>