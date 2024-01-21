<?php $this->view("./includes/header"); ?>

<body>


    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main>
            <div class="home-container width-fill justify-content-center     ">

                <!-- QR -->
                <div class="justify-content-center section mou-qr-box">
                    <div id="my-qr-reader">
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