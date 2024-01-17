<?php $this->view("./includes/header"); ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main>
            <div class="container d-flex  flex-column justify-content-center ">

                <!-- QR -->
                <div class="justify-content-center section">
                    <div id="my-qr-reader">
                    </div>
                </div>

            </div>
        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>


</html>
<script type="text/javascript">
    $(function() {

        $('.range input').on('mousemove', function() {
            var getValRange = $(this).val();
            $('.range span').text(getValRange + '%');
        });


    });
</script>

<script src="https://unpkg.com/html5-qrcode">
</script>
<script src="script.js"></script>