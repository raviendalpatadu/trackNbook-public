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

            <!-- cards -->
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

            <div class="container">
                <div class="row">
                    <div class="col-12 center-col if-widgets">

                        <!-- card style -->
                        <div class="card">

                            <div class="title">Train Request</div>

                            <div class="if-icon">

                                <svg fill="#000000" width="800px" height="800px" viewBox="0 0 16 16"
                                    id="request-added-16px" xmlns="http://www.w3.org/2000/svg">
                                    <path id="Path_48" data-name="Path 48"
                                        d="M-6.5,0h-11A2.5,2.5,0,0,0-20,2.5v8A2.5,2.5,0,0,0-17.5,13h.5v2.5a.5.5,0,0,0,.309.462A.489.489,0,0,0-16.5,16a.5.5,0,0,0,.354-.146L-13.293,13H-6.5A2.5,2.5,0,0,0-4,10.5v-8A2.5,2.5,0,0,0-6.5,0ZM-5,10.5A1.5,1.5,0,0,1-6.5,12h-7a.5.5,0,0,0-.354.146L-16,14.293V12.5a.5.5,0,0,0-.5-.5h-1A1.5,1.5,0,0,1-19,10.5v-8A1.5,1.5,0,0,1-17.5,1h11A1.5,1.5,0,0,1-5,2.5Zm-3.5-4A.5.5,0,0,1-9,7h-2.5V9.5a.5.5,0,0,1-.5.5.5.5,0,0,1-.5-.5V7H-15a.5.5,0,0,1-.5-.5A.5.5,0,0,1-15,6h2.5V3.5A.5.5,0,0,1-12,3a.5.5,0,0,1,.5.5V6H-9A.5.5,0,0,1-8.5,6.5Z"
                                        transform="translate(20)" />
                                </svg>
                            </div><!--/icon-->

                            <a href="<?= ROOT ?>admin/trainRequest" class="btn">Check</a>

                        </div><!--/card-->

                        <div class="card">

                            <div class="title">Inquiry Alerts</div>

                            <div class="if-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                    viewBox="0 0 24 24" width="512" height="512">
                                    <path
                                        d="M21.998,24h-2.998c-.553,0-1-.448-1-1s.447-1,1-1h2.998l-5.991-10.005-6.011,10.015,3.004-.01c.553,0,1,.448,1,1s-.447,1-1,1h-2.999c-.725,0-1.373-.375-1.734-1.004-.361-.628-.359-1.377,.006-2.004l6.003-10.025c.358-.612,1.004-.982,1.723-.982s1.364,.371,1.728,.992l5.992,10.006c.372,.636,.374,1.385,.013,2.014s-1.01,1.004-1.734,1.004Zm-4.998-4v-3c0-.552-.447-1-1-1s-1,.448-1,1v3c0,.552,.447,1,1,1s1-.448,1-1Zm-11,3c0-.552-.448-1-1-1-1.654,0-3-1.346-3-3V5c0-1.654,1.346-3,3-3h14c1.654,0,3,1.346,3,3V14c0,.552,.447,1,1,1s1-.448,1-1V5c0-2.757-2.243-5-5-5H5C2.243,0,0,2.243,0,5v14c0,2.757,2.243,5,5,5,.552,0,1-.448,1-1ZM5,4c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Zm4,0c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Zm7,18c-.552,0-1,.448-1,1s.448,1,1,1,1-.448,1-1-.448-1-1-1Z" />
                                </svg>

                            </div><!--/icon-->


                            <a href="<?= ROOT ?>admin/inquiry" class="btn">Check</a>

                        </div><!--/card-->

                        <div class="card">

                            <div class="title">Emergency</div>

                            <div class="if-icon1">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                    viewBox="0 0 24 24" width="512" height="512">
                                    <path
                                        d="m21,18v-5c0-4.963-4.037-9-9-9S3,8.037,3,13v5c-1.654,0-3,1.346-3,3v3h24v-3c0-1.654-1.346-3-3-3ZM5,13c0-3.859,3.141-7,7-7s7,3.141,7,7v5H5v-5Zm17,9H2v-1c0-.552.448-1,1-1h18c.552,0,1,.448,1,1v1ZM2.335,6.646L.018,4.426l1.383-1.443,2.317,2.22-1.383,1.443Zm3.419-3.122l-1.212-2.717L6.368-.008l1.212,2.717-1.826.814Zm15.912,3.122l-1.383-1.443,2.317-2.22,1.383,1.443-2.317,2.22Zm-3.42-3.122l-1.826-.814L17.633-.008l1.826.814-1.213,2.717Zm-6.246,5.477v2c-1.103,0-2,.897-2,2h-2c0-2.206,1.794-4,4-4Z" />
                                </svg>

                            </div><!--/icon-->

                            <a href="#" class="btn1">Call SOS</a>

                        </div><!--/card-->

                    </div>
                </div>
            </div>

    </div>

    </main>
    </div>


</body>

</html>