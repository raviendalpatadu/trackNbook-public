<?php $this->view("./includes/header") ?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main class="bg">
            <div class="row">
                <div class="col-12 p-20">

                    <div class="d-flex flex-row justify-content-between g-50">
                        <div class="col-4">
                            <div class="dashboard-card d-flex align-items-center bg-white Primary-Gray g-50">
                                <div class="d-flex flex-column">
                                    <p class="mb-4 text">Refund Requests</p>
                                    <p>23</p>
                                </div>
                                <div class="d-flex  ">
                                    <h4>ho</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="dashboard-card d-flex align-items-center bg-white Primary-Gray g-50">
                                <div class="d-flex flex-column">
                                    <p class="mb-4 text">Refund Requests</p>
                                    <p>23</p>
                                </div>
                                <div class="d-flex  ">
                                    <h4>ho</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="dashboard-card d-flex align-items-center bg-white Primary-Gray g-50">
                                <div class="d-flex flex-column">
                                    <p class="mb-4 text">Refund Requests</p>
                                    <p>23</p>
                                </div>
                                <div class="d-flex  ">
                                    <h4>ho</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="dashboard-card d-flex align-items-center bg-white Primary-Gray g-50">
                                <div class="d-flex flex-column">
                                    <p class="mb-4 text">Refund Requests</p>
                                    <p>23</p>
                                </div>
                                <div class="d-flex  ">
                                    <h4>ho</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- charts -->
                    <div class="row g-20 py-20 graphbox">
                        <!-- graph left -->
                        <div class="col-7 box bg-white p-20">
                            <!-- graph head -->
                            <h4 class="Primary-Gray">Site Analysis</h4>
                            <h5 class="Primary-Gray">Overview of Latest Month</h5>
                            <canvas id="bookingChart" height="180px" width="500px"></canvas>
                        </div>

                        <!-- graph right -->
                        <div class="col-5 box bg-white p-20">
                            <!-- graph head -->
                            <h4 class="Primary-Gray">Site Analysis</h4>
                            <h5 class="Primary-Gray">Overview of Latest Month</h5>
                            <canvas id="bookingpie" height="180px" width="20px"></canvas>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 ">
                            <table class="mou-dashboard-table">
                                <thead>
                                    <tr class="row p-20">
                                        <th class="col-3 d-flex align-items-center">
                                            <div class="col-4">
                                                <div class="d-flex .flex-row g-5 mr-5">

                                                </div>
                                            </div>
                                            NIC
                                        </th>
                                        <th class="col-2">Date</th>
                                        <th class="col-3">Passenger</th>
                                        <th class="col-2 d-flex align-items-center">
                                            <div class="col-4">
                                                <div class="d-flex .flex-row g-5 mr-5">

                                                </div>
                                            </div>
                                            Class

                                        </th>
                                        <th class="col-1"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="row p-20">
                                        <td class="col-3 d-flex align-items-center">
                                            200167801725
                                        </td>
                                        <td class="col-2 d-flex align-items-center">2023.10.24</td>
                                        <td class="col-3 d-flex align-items-center">Moushika Kriyanjalee</td>
                                        <td class="col-2 d-flex align-items-center">
                                            First Class
                                        </td>
                                        <td class="col-1 d-flex align-items-center g-5">
                                            <a class="blue" href="<?= ROOT ?>staffticketing/refundDetails">
                                                <div class="badge-base bg-Selected-Blue">
                                                    <div class="button-base bg-light-blue">
                                                        <div class="text blue">View</div>

                                                    </div>
                                                </div>
                                            </a>

                                        </td>
                                    </tr>

                                </tbody>

                                <tbody>

                                    <tr class="row p-20">
                                        <td class="col-3 d-flex align-items-center">
                                            200167801725
                                        </td>
                                        <td class="col-2 d-flex align-items-center">2023.10.24</td>
                                        <td class="col-3 d-flex align-items-center">Moushika Kriyanjalee</td>
                                        <td class="col-2 d-flex align-items-center">
                                            First Class
                                        </td>
                                        <td class="col-1 d-flex align-items-center g-5">
                                            <a class="blue" href="<?= ROOT ?>">
                                                <div class="badge-base bg-Selected-Blue">
                                                    <div class="button-base bg-light-blue">
                                                        <div class="text blue">View</div>

                                                    </div>
                                                </div>

                        </div>
                        </a>

                        </td>
                        </tr>

                        </tbody>

                        <tbody>

                            <tr class="row p-20">
                                <td class="col-3 d-flex align-items-center">
                                    200167801725
                                </td>
                                <td class="col-2 d-flex align-items-center">2023.10.24</td>
                                <td class="col-3 d-flex align-items-center">Moushika Kriyanjalee</td>
                                <td class="col-2 d-flex align-items-center">
                                    First Class
                                </td>
                                <td class="col-1 d-flex align-items-center g-5">
                                    <a class="blue" href="<?= ROOT ?>">
                                        <div class="badge-base bg-Selected-Blue">
                                            <div class="button-base bg-light-blue">
                                                <div class="text blue">View</div>

                                            </div>
                                        </div>
                    </div>
                    </a>

                    </td>
                    </tr>

                    </tbody>

                    <tbody>

                        <tr class="row p-20">
                            <td class="col-3 d-flex align-items-center">
                                200167801725
                            </td>
                            <td class="col-2 d-flex align-items-center">2023.10.24</td>
                            <td class="col-3 d-flex align-items-center">Moushika Kriyanjalee</td>
                            <td class="col-2 d-flex align-items-center">
                                First Class
                            </td>
                            <td class="col-1 d-flex align-items-center g-5">
                                <a class="blue" href="<?= ROOT ?>">
                                    <div class="badge-base bg-Selected-Blue">
                                        <div class="button-base bg-light-blue">
                                            <div class="text blue">View</div>

                                        </div>
                                    </div>
                </div>
                </a>

                </td>
                </tr>

                </tbody>

                <tbody>

                    <tr class="row p-20">
                        <td class="col-3 d-flex align-items-center">
                            200167801725
                        </td>
                        <td class="col-2 d-flex align-items-center">2023.10.24</td>
                        <td class="col-3 d-flex align-items-center">Moushika Kriyanjalee</td>
                        <td class="col-2 d-flex align-items-center">
                            First Class
                        </td>
                        <td class="col-1 d-flex align-items-center g-5">
                            <a class="blue" href="<?= ROOT ?>">
                                <div class="badge-base bg-Selected-Blue">
                                    <div class="button-base bg-light-blue">
                                        <div class="text blue">View</div>

                                    </div>
                                </div>
            </div>
            </a>

            </td>
            </tr>

            </tbody>

            <tbody>

                <tr class="row p-20">
                    <td class="col-3 d-flex align-items-center">
                        200167801725
                    </td>
                    <td class="col-2 d-flex align-items-center">2023.10.24</td>
                    <td class="col-3 d-flex align-items-center">Moushika Kriyanjalee</td>
                    <td class="col-2 d-flex align-items-center">
                        First Class
                    </td>
                    <td class="col-1 d-flex align-items-center g-5">
                        <a class="blue" href="<?= ROOT ?>">
                            <div class="badge-base bg-Selected-Blue">
                                <div class="button-base bg-light-blue">
                                    <div class="text blue">View</div>

                                </div>
                            </div>
    </div>
    </a>

    </td>
    </tr>

    </tbody>

    <tbody>

        <tr class="row p-20">
            <td class="col-3 d-flex align-items-center">
                200167801725
            </td>
            <td class="col-2 d-flex align-items-center">2023.10.24</td>
            <td class="col-3 d-flex align-items-center">Moushika Kriyanjalee</td>
            <td class="col-2 d-flex align-items-center">
                First Class
            </td>
            <td class="col-1 d-flex align-items-center g-5">
                <a class="blue" href="<?= ROOT ?>">
                    <div class="badge-base bg-Selected-Blue">
                        <div class="button-base bg-light-blue">
                            <div class="text blue">View</div>

                        </div>
                    </div>
                    </div>
                </a>

            </td>
        </tr>

    </tbody>


    <tbody>

        <tr class="row p-20">
            <td class="col-3 d-flex align-items-center">
                200167801725
            </td>
            <td class="col-2 d-flex align-items-center">2023.10.24</td>
            <td class="col-3 d-flex align-items-center">Moushika Kriyanjalee</td>
            <td class="col-2 d-flex align-items-center">
                First Class
            </td>
            <td class="col-1 d-flex align-items-center g-5">
                <a class="blue" href="<?= ROOT ?>">
                    <div class="badge-base bg-Selected-Blue">
                        <div class="button-base bg-light-blue">
                            <div class="text blue">View</div>

                        </div>
                    </div>
                    </div>
                </a>

            </td>
        </tr>

    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>




    </main>




</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?= ASSETS ?>/js/mou_chart.js"></script>

</html>