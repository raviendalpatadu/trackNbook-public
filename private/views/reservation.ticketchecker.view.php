<?php $this->view("./includes/header") ?>
<?php

if (isset($data['reservations']) && $data['reservations'] != 0) {
    $count = count($data['reservations']);
} else {
    $count = 0;
}
?>

<body>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main>
            <div class="home-container">
                <div class="row  mr-20 mt-20">
                    <div class="col-12 ">

                        <div class="row">
                            <div class="col-12">
                                <div class="trains-available mt-10 mb-30">
                                    <h3>Reservation List - Udarata Manike</h3>
                                </div>

                            </div>
                        </div>

                        <div class="mt-30 row mb-30">
                            <div class="col-3">
                                <div class="text-inputs">
                                    <div class="input-text-label text lightgray-font">NIC</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" name="">
                                        </div>
                                    </div>
                                </div>
                                <div class="assistive-text display-none">Assistive Text</div>
                            </div>
                            <div class="col-3 d-flex align-self-end">
                                <button class="button">
                                    <div class="button-base">
                                        <input type="submit" value="Search" name="submit">
                                    </div>
                                </button>
                            </div>

                        </div>




                        <div class="row">
                            <div class="col-12">

                                <table class="">
                                    <thead>
                                        <tr class="row p-20">
                                            <th class="col-3 d-flex align-items-center">
                                                <div class="col-4">
                                                    <div class="d-flex .flex-row g-5 mr-5">

                                                    </div>
                                                </div>
                                                NIC

                                            </th>
                                            <th class="col-1">Ticket ID</th>
                                            <th class="col-2">Date</th>
                                            <th class="col-3">Passenger</th>
                                            <th class="col-2 d-flex align-items-center">
                                                <div class="col-4">
                                                    <div class="d-flex .flex-row g-5 mr-5">

                                                    </div>
                                                </div>
                                                Class

                                            </th>
                                            <th class="col-1">

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="row p-20">
                                            <td class="col-3 d-flex align-items-center">
                                                <div class="d-flex .flex-row g-5 mr-5">

                                                </div>
                                                200156234102
                                            </td>
                                            <td class="col-1 d-flex align-items-center lightgray-font ">WD1001</td>
                                            <td class="col-2 d-flex align-items-center">Sep 23,2023</td>
                                            <td class="col-3 d-flex align-items-center">Moushika Kriyanjalee</td>
                                            <td class="col-1 d-flex align-items-center">
                                                <div class="d-flex .flex-row g-5 mr-5">

                                                </div>
                                                First Class
                                            </td>
                                            <td class="col-1 d-flex align-items-center"><a class="blue" href=""></a>
                                                <div class="badge-base bg-light-green">
                                                    <div class="dot">
                                                        <div class="dot2"></div>
                                                    </div>
                                                    <div class="text dark-green">checked</div>
                                                </div>
                                            </td>
                                            <td class="col-1 d-flex align-items-center g-5">
                                                <a class="blue">
                                                    <div class="badge-base bg-Selected-Blue">
                                                        <div class="dot">
                                                            <div class="dot4"></div>
                                                        </div>
                                                        <div class="text blue">View</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="row p-20">
                                            <td class="col-3 d-flex align-items-center">
                                                <div class="d-flex .flex-row g-5 mr-5">

                                                </div>
                                                200156234102
                                            </td>
                                            <td class="col-1 d-flex align-items-center lightgray-font ">WD1001</td>
                                            <td class="col-2 d-flex align-items-center">Sep 23,2023</td>
                                            <td class="col-3 d-flex align-items-center">Moushika Kriyanjalee</td>
                                            <td class="col-1 d-flex align-items-center">
                                                <div class="d-flex .flex-row g-5 mr-5">

                                                </div>
                                                First Class
                                            </td>
                                            <td class="col-1 d-flex align-items-center">
                                                <div class="badge-base bg-Selected-red">
                                                    <div class="dot">
                                                        <div class="dot3"></div>
                                                    </div>
                                                    <div class="text Banner-red">Rejected</div>
                                                </div>
                                            </td>
                                            <td class="col-1 d-flex align-items-center g-5">
                                                <a class="blue">
                                                    <div class="badge-base bg-Selected-Blue">
                                                        <div class="dot">
                                                            <div class="dot4"></div>
                                                        </div>
                                                        <div class="text blue">View</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr class="row p-20">
                                            <td class="col-3 d-flex align-items-center">
                                                <div class="d-flex .flex-row g-5 mr-5">

                                                </div>
                                                200156234190
                                            </td>
                                            <td class="col-1 d-flex align-items-center lightgray-font ">WD1001</td>
                                            <td class="col-2 d-flex align-items-center">Sep 23,2023</td>
                                            <td class="col-3 d-flex align-items-center">Moushika Kriyanjalee</td>
                                            <td class="col-1 d-flex align-items-center">
                                                <div class="d-flex .flex-row g-5 mr-5">

                                                </div>
                                                First Class
                                            </td>
                                            <td class="col-1 d-flex align-items-center"><a class="blue" href=""></a>
                                                <div class="badge-base bg-light-green">
                                                    <div class="dot">
                                                        <div class="dot2"></div>
                                                    </div>
                                                    <div class="text dark-green">checked</div>
                                                </div>
                                            </td>
                                            <td class="col-1 d-flex align-items-center g-5">
                                                <a class="blue">
                                                    <div class="badge-base bg-Selected-Blue">
                                                        <div class="dot">
                                                            <div class="dot4"></div>
                                                        </div>
                                                        <div class="text blue">View</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr class="row p-20">
                                            <td class="col-3 d-flex align-items-center">
                                                <div class="d-flex .flex-row g-5 mr-5">

                                                </div>
                                                200156234102
                                            </td>
                                            <td class="col-1 d-flex align-items-center lightgray-font ">WD1001</td>
                                            <td class="col-2 d-flex align-items-center">Sep 23,2023</td>
                                            <td class="col-3 d-flex align-items-center">Moushika Kriyanjalee</td>
                                            <td class="col-1 d-flex align-items-center">
                                                <div class="d-flex .flex-row g-5 mr-5">

                                                </div>
                                                First Class
                                            </td>
                                            <td class="col-1 d-flex align-items-center">
                                                <div class="badge-base bg-Selected-red">
                                                    <div class="dot">
                                                        <div class="dot3"></div>
                                                    </div>
                                                    <div class="text Banner-red">Rejected</div>
                                                </div>
                                            </td>
                                            <td class="col-1 d-flex align-items-center g-5">
                                                <a class="blue">
                                                    <div class="badge-base bg-Selected-Blue">
                                                        <div class="dot">
                                                            <div class="dot4"></div>
                                                        </div>
                                                        <div class="text blue">View</div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="pagination">
                                    <button class="button">
                                        <div class="button-base">
                                            <svg class="arrow-left" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.8334 9.99935H4.16675M4.16675 9.99935L10.0001 15.8327M4.16675 9.99935L10.0001 4.16602" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
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
                                            <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
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
        <main style="background-color:#EFF8FF; padding:20px;">
            <h1 style="margin-bottom:20px;">User Reservations</h1>
            <div>
                <div class="table" style="background-color:white;max-width:100%;">

                    <table class="">
                        <thead>
                            <tr class="row">
                                <th class="col-3">Train Name</th>
                                <th class="col-3">From</th>
                                <th class="col-3">To</th>
                                <th class="col-1">Date</th>
                                <th class="col-1"></th>
                                <th class="col-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row">
                                <td class="col-3">Yal Devi</td>
                                <td class="col-3">Kankesanthurai </td>
                                <td class="col-3">Mount-Lavinia </td>
                                <td class="col-1">
                                    <!-- <div class="badge-base bg-light-green">
                                        <div class="dot">
                                            <div class="dot2"></div>
                                        </div>
                                        <div class="text dark-green">Arrived</div>
                                    </div> -->
                                    20-11-2023
                                </td>
                                <td class="col-1"></td>
                                <td class="col-1">
                                    <a href="<?= ROOT ?>passenger/viewReservation/<?= 1 ?>" class="blue">Check</a>

                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr class="row">
                                <td class="col-3">Yal Devi</td>
                                <td class="col-3">KKS </td>
                                <td class="col-3">Mount-Lavinia </td>
                                <td class="col-1">


                                    <!-- <div class="badge-base bg-Selected-red">
                                        <div class="dot">
                                            <div class="dot3"></div>
                                        </div>
                                        <div class="text Banner-red">Not Arrived</div>
                                    </div> -->
                                    20-11-2023
                </div>
                </td>
                <td class="col-1"></td>
                <td class="col-1">
                    <a href="<?= ROOT ?>passenger/viewReservation/<?= 1 ?>" class="blue">Check</a>

                </td>
                </tr>
                </tbody>
                <tbody>
                    <tr class="row">
                        <td class="col-3">Yal Devi</td>
                        <td class="col-3">KKS </td>
                        <td class="col-3">Mount-Lavinia </td>
                        <td class="col-1">
                            <!-- <div class="badge-base bg-light-green">
                                <div class="dot">
                                    <div class="dot2"></div>
                                </div>
                                <div class="text dark-green">Arrived</div>
                            </div> -->
                            20-11-2023
                        </td>
                        <td class="col-1"></td>
                        <td class="col-1"><a href="/" class="blue">Check</a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="row">
                        <td class="col-3">Yal Devi</td>
                        <td class="col-3">KKS </td>
                        <td class="col-3">Mount-Lavinia </td>
                        <td class="col-1">
                            <!-- <div class="badge-base bg-light-green">
                                <div class="dot">
                                    <div class="dot2"></div>
                                </div>
                                <div class="text dark-green">Arrived</div>
                            </div> -->
                            20-11-2023
                        </td>
                        <td class="col-1"></td>
                        <td class="col-1"><a href="/" class="blue">Check</a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="row">
                        <td class="col-3">Yal Devi</td>
                        <td class="col-3">KKS </td>
                        <td class="col-3">Mount-Lavinia </td>
                        <td class="col-1">
                            <!-- <div class="badge-base bg-Selected-red">
                                <div class="dot">
                                    <div class="dot3"></div>
                                </div>
                                <div class="text Banner-red">Not Arrived</div>
                            </div> -->
                            20-11-2023
                        </td>
                        <td class="col-1"></td>
                        <td class="col-1"><a href="/" class="blue">Check</a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="row">
                        <td class="col-3">Yal Devi</td>
                        <td class="col-3">KKS </td>
                        <td class="col-3">Mount-Lavinia </td>
                        <td class="col-1">
                            <!-- <div class="badge-base bg-light-green">
                                <div class="dot">
                                    <div class="dot2"></div>
                                </div>
                                <div class="text dark-green">Arrived</div>
                            </div> -->
                            20-11-2023
                        </td>
                        <td class="col-1"></td>
                        <td class="col-1"><a href="/" class="blue">Check</a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="row">
                        <td class="col-3">Yal Devi</td>
                        <td class="col-3">KKS </td>
                        <td class="col-3">Mount-Lavinia </td>
                        <td class="col-1">
                            <!-- <div class="badge-base bg-light-green">
                                <div class="dot">
                                    <div class="dot2"></div>
                                </div>
                                <div class="text dark-green">Arrived</div>
                            </div> -->
                            20-11-2023
                        </td>
                        <td class="col-1"></td>
                        <td class="col-1"><a href="/" class="blue">Check</a>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="row">
                        <td class="col-3">Yal Devi</td>
                        <td class="col-3">KKS </td>
                        <td class="col-3">Mount-Lavinia </td>
                        <td class="col-1">
                            <!-- <div class="badge-base bg-Selected-red">
                                <div class="dot">
                                    <div class="dot3"></div>
                                </div>
                                <div class="text Banner-red">Not Arrived</div>
                            </div> -->
                            20-11-2023
                        </td>
                        <td class="col-1"></td>
                        <td class="col-1"><a href="/" class="blue">Check</a>
                        </td>
                    </tr>
                </tbody>
                </table>
                <div class="pagination">
                    <div class="button">
                        <div class="button-base">
                            <svg class="arrow-left" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8334 9.99935H4.16675M4.16675 9.99935L10.0001 15.8327M4.16675 9.99935L10.0001 4.16602" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="text">Previous</div>
                        </div>
                    </div>
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
                    <div class="button">
                        <div class="button-base">
                            <div class="text">Next</div>
                            <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <?php $this->view("./includes/load-js") ?>

</body>

</html>