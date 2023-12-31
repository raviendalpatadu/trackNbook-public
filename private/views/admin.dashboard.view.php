<?php $this->view("./includes/header"); ?>


<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main style="background-color:#EFF8FF;">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="if-txt-wrapper">Hello,
                            <?= ucfirst(Auth::user()) ?>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="if-widgets">
                            <div class="if-frame">
                                <div class="div">
                                    <div class="if-frame-2">
                                        <div class="impressions">Number of Train Onboard</div>
                                    </div>
                                    <div class="number">
                                        <?= $data['trainsCount'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="if-frame">
                                <div class="if-frame-3">
                                    <div class="if-frame-4">
                                        <div class="impressions">Inquiries</div>
                                    </div>
                                    <div class="number">35</div>
                                </div>
                            </div>
                            <div class="if-frame">
                                <div class="div">
                                    <div class="if-frame-4">
                                        <div class="impressions">Staffs On Duty</div>
                                    </div>
                                    <div class="number">
                                        <?= $data['usersCount'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="if-frame">
                                <div class="div">
                                    <div class="if-frame-4">
                                        <div class="impressions">Cancelled Trains</div>
                                    </div>
                                    <div class="number">4</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



    </div>

    </main>
    </div>


</body>

</html>