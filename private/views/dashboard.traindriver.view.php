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


                <!-- cards -->


                <br /><br />
                <div class="row">
                    <div class="col-12 center-col ach-widgets">

                        <!-- card style -->
                        <div class="card-dashboard-td">

                            <div class="title">Update Location</div>

                            <div class="ach-icon">


                                <img src="<?= ASSETS ?>images/UpdateLocation.png" width="80" height="80">
                            </div>
                            <!--/icon-->

                            <a href="<?= ROOT ?>traindriver/addlocation" class="btn-td">Check</a>

                        </div>
                    </div>
                </div>
                <!--/card-->
                <div class="row">
                    <div class="col-12 center-col ach-widgets">

                        <!-- card style -->
                        <div class="card-dashboard-td ">

                            <div class="title">Update Delay</div>

                            <div class="ach-icon">


                                <img src="<?= ASSETS ?>images/UpdateDelay.png" width="80" height="80">
                            </div>
                            <!--/icon-->

                            <a href="<?= ROOT ?>traindriver/trainDelay" class="btn-td">Check</a>

                        </div>
                    </div>
                </div>
            </div>
    </div>

    </div>

    </main>



</body>

</html>