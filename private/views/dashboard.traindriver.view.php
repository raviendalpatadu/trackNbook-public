<?php $this->view("./includes/header"); ?>


<body>

    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main style="background-color:#EFF8FF;">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="ach-txt-wrapper">Hello,
                            <?= ucfirst(Auth::user()) ?>
                        </div>

                    </div>
                </div>
            </div>

            <!-- cards -->



            <div class="row">
                <div class="col-12 center-col ach-widgets">

                    <!-- card style -->
                    <div class="ach-card">

                        <div class="title">Update Location</div>

                        <div class="ach-icon">


                            <img src="<?= ASSETS ?>images/UpdateLocation.png" width="80" height="80">
                        </div>
                        <!--/icon-->

                        <a href="<?= ROOT ?>traindriver/addlocation" class="ach-btn">Check</a>

                    </div>
                </div>
            </div>
            <!--/card-->
            <div class="row">
                <div class="col-12 center-col ach-widgets">
                    <div class="ach-card">

                        <div class="title">Update Delay</div>

                        <div class="ach-icon">

                            <img src="<?= ASSETS ?>images/UpdateDelay.png" width="100" height="100">

                        </div>
                        <!--/icon-->


                        <a href="<?= ROOT ?>trainDriver/trainDelay" class="ach-btn">Check</a>

                    </div>
                    <!--/card-->
                    <!-- need to edit the card -->


                </div>
            </div>
    </div>


    </div>

    </main>



</body>

</html>