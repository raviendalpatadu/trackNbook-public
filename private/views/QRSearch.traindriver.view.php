<?php $this->view("./includes/header"); ?>

<body>
    
    <div class="column-left">
    <?php $this->view("./includes/mobile-navbar") ?>
        <main>
            <div class="container d-flex  flex-column justify-content-center ">
                <!-- QR  -->
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
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>

</html>
<script type="text/javascript">
</script>
<script src="https://unpkg.com/html5-qrcode">
</script>
<script src="script.js"></script>