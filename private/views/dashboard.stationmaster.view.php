<?php $this->view("./includes/header") ?>
<?php

if (isset($data['reservations']) && $data['reservations'] != 0) {
    $count = count($data['reservations']);
} else {
    $count = 0;
}
?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main>
            <div class="container">

                <div class="row mt-20">
                    <div class="col-12">
                        <div class="trains-available mb-10 ">
                            <h2>Check Train Arrivals</h2>

                        </div>
                        <div class="row">
                            <div class="col-12 mt-20">
                                <div class="trains-available">

                                    <!-- <h3>Colombo &#8594 Kandy</h3> -->
                                    <h3>Train</h3>
                                </div>
                                <table class="">
                                    <thead>
                                        <tr class="row p-20">
                                            <th class="col-3 d-flex align-items-center">
                                               
                                                Train Name
                                            </th>
                                            <th class="col-1">From</th>
                                            <th class="col-2">To</th>
                                            <th class="col-1">Status</th>
                                            <th class="col-2"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-3 align-middle">Yal Devi</td>
                                            <td class="col-1 align-middle">Colombo</td>
                                            <td class="col-2 align-middle">Jaffna</td>
                                            <td class="col-1 align-middle">
                                                <a class="blue">
                                                    <div class="badge-base bg-Selected-Blue">
                                                        <div class="dot">
                                                            <div class="dot4"></div>
                                                        </div>
                                                        <div class="text blue">View</div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="col-2 align-middle">
                                                <a class="blue">
                                                    <div class="badge-base bg-Selected-red">
                                                        <div class="dot">
                                                            <div class="dot4 bg-Banner-red"></div>
                                                        </div>
                                                        <div class="text red">Check</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="pagination">
                                    <button class="button">
                                        <div class="button-base">
                                            <svg class="arrow-left" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.8334 9.99935H4.16675M4.16675 9.99935L10.0001 15.8327M4.16675 9.99935L10.0001 4.16602"
                                                    stroke="#344054" stroke-width="1.67" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                            <div class="text">Previous</div>
                                        </div>
                                    </button>
                                    <div class="pagination-numbers">
                                        <div class="pagination-number-base-active">
                                            <div class="content">
                                                <div class="number">1</div>
                                            </div>
                                        </div>
                                        <div class="pagination-number-base">
                                            <div class="content">
                                                <div class="number2">2</div>
                                            </div>
                                        </div>
                                        <div class="pagination-number-base">
                                            <div class="content">
                                                <div class="number2">3</div>
                                            </div>
                                        </div>
                                        <div class="pagination-number-base">
                                            <div class="content">
                                                <div class="number2">...</div>
                                            </div>
                                        </div>
                                        <div class="pagination-number-base">
                                            <div class="content">
                                                <div class="number2">8</div>
                                            </div>
                                        </div>
                                        <div class="pagination-number-base">
                                            <div class="content">
                                                <div class="number2">9</div>
                                            </div>
                                        </div>
                                        <div class="pagination-number-base">
                                            <div class="content">
                                                <div class="number2">10</div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button">
                                        <div class="button-base">
                                            <div class="text">Next</div>
                                            <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327"
                                                    stroke="#344054" stroke-width="1.67" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php $this->view("./includes/load-js") ?>

</body>

</html>