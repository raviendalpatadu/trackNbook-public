<?php $this->view("./includes/header") ?>
<?php $this->view("./includes/load-js") ?>

<?php
// echo "<pre>";
// print_r($data);
// echo "</pre>";
$trainCount = count($data['trains']);
?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-20">
                        <div class="ach-txt-wrapper mb-30">
                            Welcome to <?= ucfirst(Auth::smStation()->station_name) ?> Railway Station!
                        </div>
                        <div class="d-flex flex-row justify-content-center g-50">
                            <div class="col-4">
                                <div
                                    class="dashboard-card-sm  d-flex align-items-center bg-light-blue Primary-Gray g-50">

                                    <div class="d-flex flex-column g-10">
                                        <p1 class="dashboard-card-sm-font1 ">
                                            Number of
                                            Trains <br>by today
                                        </p1>
                                        <p2 class="dashboard-card-sm-font2 "><?= $trainCount ?></p2>
                                    </div>

                                    <div class="d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" height="70" width="70"
                                            version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve"
                                            fill="#000000" stroke="#000000" stroke-width="15.36">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <g id="SVGRepo_iconCarrier">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: rgb(89 169 224);
                                                    }
                                                </style>
                                                <g>
                                                    <path class="st0"
                                                        d="M349.917,432.716v-0.635H162.472v0.635h-10.544L89.982,512h45.644l13.705-20.233h213.334L376.367,512h45.659 l-61.95-79.284H349.917z M162.558,472.248l13.988-20.648h158.912l13.988,20.648H162.558z" />
                                                    <path class="st0"
                                                        d="M256.002,0C112.749,0,71.397,51.982,71.397,91.663v258.601c0,34.895,28.29,63.216,63.224,63.216h242.765 c34.942,0,63.217-28.321,63.217-63.216V91.663C440.603,51.982,399.259,0,256.002,0z M189.091,56.987h133.815 c8.888,0,16.106,7.21,16.106,16.098c0,8.912-7.218,16.114-16.106,16.114H189.091c-8.889,0-16.098-7.202-16.098-16.114 C172.992,64.197,180.201,56.987,189.091,56.987z M160.275,358.439c-11.093,0-20.084-8.991-20.084-20.084 c0-11.094,8.991-20.084,20.084-20.084c11.093,0,20.084,8.99,20.084,20.084C180.358,349.448,171.368,358.439,160.275,358.439z M241.943,239.278H134.731v-98.064h107.212V239.278z M351.737,358.439c-11.094,0-20.084-8.991-20.084-20.084 c0-11.094,8.99-20.084,20.084-20.084c11.092,0,20.084,8.99,20.084,20.084C371.821,349.448,362.829,358.439,351.737,358.439z M382.047,239.278H270.061v-98.064h111.986V239.278z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div
                                    class="dashboard-card-sm d-flex align-items-center bg-light-blue Primary-Gray g-50">

                                    <div class="d-flex flex-column g-10">
                                        <p1 class="dashboard-card-sm-font1">Inquiries</p1>
                                        <p2 class="dashboard-card-sm-font2"><?= $data['inquiryCount'] ?></p2>
                                    </div>

                                    <div class="d-flex  ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                            viewBox="-2 -2 24.00 24.00" fill="#000000"
                                            transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)">

                                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                                stroke="#CCCCCC" stroke-width="0.04" />

                                            <g id="SVGRepo_iconCarrier">
                                                <g id="train-left" transform="translate(-2 -5)">
                                                    <path id="secondary" fill="rgb(89 169 224)"
                                                        d="M11,14a1,1,0,0,0,1-1V10h8a1,1,0,0,1,1,1v6a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1,7,7,0,0,1,.68-3Z" />
                                                    <path id="primary"
                                                        d="M16,14h1M8,6h6m-2,4V6m-2,4H20a1,1,0,0,1,1,1v6a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1,7,7,0,0,1,7-7Zm0,0h2v3a1,1,0,0,1-1,1H3.68A7,7,0,0,1,10,10Z"
                                                        fill="none" stroke="#000000" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="0.6" />
                                                </g>
                                            </g>

                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div
                                    class="dashboard-card-sm d-flex align-items-center bg-light-blue Primary-Gray g-50">

                                    <div class="d-flex flex-column g-10">
                                        <p1 class="dashboard-card-sm-font1">Waiting List</p1>
                                        <p2 class="dashboard-card-sm-font2"><?= $data['waitinglistCount'] ?></p2>
                                    </div>

                                    <div class="d-flex  ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                            viewBox="-2 -2 24.00 24.00" fill="#000000">

                                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                                stroke="#CCCCCC" stroke-width="0.16" />

                                            <g id="SVGRepo_iconCarrier">
                                                <g id="train" transform="translate(-2 -5)">
                                                    <path id="secondary" fill="rgb(89 169 224)"
                                                        d="M13,14a1,1,0,0,1-1-1V10H4a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1H20a1,1,0,0,0,1-1,7,7,0,0,0-.68-3Z" />
                                                    <path id="primary"
                                                        d="M7,14H8m2-8h6M12,6v4m9,7h0a7,7,0,0,0-7-7H4a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1H20A1,1,0,0,0,21,17Zm-7-7H12v3a1,1,0,0,0,1,1h7.32A7,7,0,0,0,14,10Z"
                                                        fill="none" stroke="#000000" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="0.6" />
                                                </g>
                                            </g>

                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-4">
                        <div class="col-10-d-flex-flex-column">
                            <div class="d-flex flex-column  bg-white g-5 p-10 mb-10 align-items-start mt-50">
                                <div class="row mt-10">
                                    <div class="col-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" fill="rgb(89 169 224)"
                                            version="1.1" id="Layer_1" viewBox="0 0 512.00 512.00" xml:space="preserve"
                                            width="100" height="100" stroke="rgb(89 169 224)"
                                            stroke-width="0.00512">

                                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                                stroke="#CCCCCC" stroke-width="1.024" />

                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M477.093,250.184l-232.73-0.002v-81.455l151.275,0.002l-46.548-46.548H0V320h512v-34.909L477.093,250.184z M209.455,250.182H34.909v-81.455h174.545V250.182z" />
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect y="354.909" width="512" height="34.909" />
                                                    </g>
                                                </g>
                                            </g>

                                        </svg>
                                    </div>
                                    <div class="col-3">
                                        <h2> <br>Upcoming Trains</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table class="if-table stripe hover" id="userTable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="col-4">Train Name</th>
                                        <th class="col-2">Train Type</th>
                                        <th class="col-4">Start & End Station</th>
                                        <th class="col-2">Estimated Arival Time</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['trains'] as $train): ?>
                                        <tr class="p-20">
                                            <td class="col-4 d-flex align-items-center">
                                                <?= $train->train_name . " - " . $train->train_id ?>
                                            </td>
                                            <td class="col-2">
                                                <?= $train->train_type ?>
                                            </td>
                                            <td class="col-4">
                                                <?= $train->start_station . " - " . $train->end_station ?>
                                            </td>
                                            <td class="col-2 ">
                                                <?= date("H:i", strtotime($train->estimated_arraival_time)) ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('#userTable').DataTable({
            "columnDefs": [
                { "width": "30%", "targets": 0 }, // Train Name
                { "width": "20%", "targets": 1 }, // Train Type
                { "width": "30%", "targets": 2 }, // Start & End Station
                { "width": "20%", "targets": 3 }  // Estimated Arival Time
            ]
        });
    });

</script>

</html>