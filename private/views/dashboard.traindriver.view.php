<?php $this->view("./includes/header") ?>

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

                                    <div class="impressions">Train Delay Amount </div>
                                </div>
                                <div class="number">24 min</div>
                            </div>

                            <div class="if-frame">
                                <div class="if-frame-3">

                                    <div class="impressions">Remaining Stations</div>
                                </div>
                                <div class="number"></div>

                            </div>

                        </div>
                    </div>
                </div>



            </div>
            <div class="profile-img d-flex flex-column align-items-center justify-content-center">
                <img src="<?= ASSETS ?>images/trainschedule.jpeg" alt="profile img" width="1000" height="400">

            </div>


        </main>
    </div>


</body>

</html>
<style>
    .if-widgets .if-frame {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        gap: 7.78px;
        padding: 23.33px;
        position: relative;
        flex: 1;
        flex-grow: 0.15;
        background-color: var(--bgwhite-100);
        border-radius: 23.33px;
        box-shadow: 0px 1.94px 13.61px #0063e70f;
        width: 100px;
    }
</style>