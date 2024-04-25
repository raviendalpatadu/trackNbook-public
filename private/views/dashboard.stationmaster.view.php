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
                            <div class="dashboard-card-sm  d-flex align-items-center bg-light-blue Primary-Gray g-50">
                                <a class="blue" href="<?= ROOT ?>staffticketing/reservationList">
                                    <div class="d-flex flex-column g-10">
                                        <p1 class="mb-4 align-items-start ">Number of
                                            <br>Trains onboard
                                        </p1> <br>
                                        <p2>230</p2>
                                    </div>
                                </a>
                                <div class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        height="80" width="80" version="1.1" id="_x32_" viewBox="0 0 512 512"
                                        xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="15.36">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
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
                            <div class="dashboard-card d-flex align-items-center bg-light-blue Primary-Gray g-50">
                                <a class="blue" href="<?= ROOT ?>staffticketing/refundList">
                                    <div class="d-flex flex-column g-10">
                                        <p1 class="mb-4">Previous trains</p1> <br>
                                        <p2>23</p2>
                                    </div>
                                </a>
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
                            <div class="dashboard-card d-flex align-items-center bg-light-blue Primary-Gray g-50">
                                <a class="blue" href="<?= ROOT ?>staffticketing/warrant">
                                    <div class="d-flex flex-column g-10">
                                        <p1 class="mb-4">Upcoming trains</p1>
                                        <p2>28</p2>
                                    </div>
                                </a>
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
                        <div class="col-4">
                            <div class="dashboard-card d-flex align-items-center bg-light-blue Primary-Gray g-50">
                                <div class="d-flex flex-column g-10">
                                    <p1 class="mb-4">Next train Details</p1>
                                    <p2 class="blue">10</p2>
                                </div>
                                <div class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                        style="fill: rgba(89, 169, 224, 1);">
                                        <path
                                            d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 19V7h16l.001 12H4z">
                                        </path>
                                        <path
                                            d="m15.707 10.707-1.414-1.414L12 11.586 9.707 9.293l-1.414 1.414L10.586 13l-2.293 2.293 1.414 1.414L12 14.414l2.293 2.293 1.414-1.414L13.414 13z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- charts -->
                    <div class="row g-20 py-20 graphbox">
                        <!-- graph left -->
                        <div class="col-12 box bg-light-blue p-20">
                            <!-- graph head -->
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex  flex-column">
                            <div class="col-12 d-flex  flex-column">

                            <div class="d-flex flex-column width-fill bg-white g-5 p-20 mb-10 align-items-start">
                            <div class="row">

                              <div class="col-3" >
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    height="80" width="80" version="1.1" id="Capa_1" viewBox="0 0 512 512"
                                    xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="0.512">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <g>
                                                    <path style="fill:#FFB980;"
                                                        d="M126.782,306.207c-18.452,0-35.193-7.918-47.545-20.715c-0.009,7.669-0.288,18.74-2.321,26.816 c1.334,0.815,2.369,2.154,2.571,3.819c2.636,21.45,22.967,37.623,47.295,37.623c24.324,0,44.654-16.175,47.295-37.623 c0.205-1.668,1.218-3.004,2.572-3.817c-2.034-8.078-2.313-19.149-2.322-26.819C161.975,298.289,145.233,306.207,126.782,306.207z " />
                                                </g>
                                                <g>
                                                    <path style="fill:#F8AB6B;"
                                                        d="M173.295,286.467c-12.248,12.2-28.554,19.741-46.513,19.741c-18.452,0-35.193-7.918-47.545-20.715 c-0.009,7.669-0.288,18.74-2.321,26.816c1.334,0.815,2.369,2.154,2.571,3.819c1.165,9.481,5.796,17.923,12.693,24.402 C123.986,336.05,160.086,304.643,173.295,286.467z" />
                                                </g>
                                                <g>
                                                    <path style="fill:rgb(89 169 224);"
                                                        d="M223.199,318.013c-0.212-0.059-0.423-0.106-0.64-0.137l-42.168-6.327 c-0.258-0.039-0.81-0.059-1.073-0.059c-2.667,0-4.916,1.989-5.241,4.638c-2.641,21.448-22.972,37.623-47.295,37.623 c-24.329,0-44.659-16.173-47.295-37.623c-0.33-2.726-2.786-4.777-5.375-4.635c-0.31-0.018-0.614,0.008-0.939,0.057l-42.168,6.327 c-0.217,0.031-0.428,0.077-0.64,0.137C10.431,323.595,0,343.209,0,359.699v20.465c0,8.713,7.759,15.801,17.297,15.801h218.969 c9.539,0,17.297-7.088,17.297-15.801v-20.465C253.563,343.209,243.132,323.595,223.199,318.013z" />
                                                </g>
                                                <g>
                                                    <path style="fill:#FDC88E;"
                                                        d="M174.325,174.143H84.521c-14.563,0-26.413,11.85-26.413,26.413v31.695 c0,40.78,30.808,73.956,68.673,73.956s68.673-33.176,68.673-73.956v-36.978C195.455,183.623,185.978,174.143,174.325,174.143z" />
                                                </g>
                                                <g>
                                                    <path style="fill:#5C546A;"
                                                        d="M163.76,116.035H95.086c-9.936,0-18.288,6.892-20.537,16.144 c-18.185,2.311-32.289,17.88-32.289,36.681v26.413c0,13.614,5.779,26.314,15.848,35.34v-30.058 c0-14.563,11.85-26.413,26.413-26.413h89.804c11.654,0,21.13,9.479,21.13,21.13v35.335c10.071-9.024,15.848-21.724,15.848-35.335 v-31.695C211.303,137.364,189.976,116.035,163.76,116.035z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path style="fill:#FFB980;"
                                                        d="M385.218,306.207c-18.452,0-35.193-7.918-47.545-20.715c-0.009,7.669-0.288,18.74-2.321,26.816 c1.334,0.815,2.369,2.154,2.571,3.819c2.636,21.45,22.967,37.623,47.295,37.623c24.324,0,44.654-16.175,47.295-37.623 c0.205-1.668,1.218-3.004,2.572-3.817c-2.034-8.078-2.313-19.149-2.322-26.819C420.411,298.289,403.67,306.207,385.218,306.207z" />
                                                </g>
                                                <g>
                                                    <path style="fill:#F8AB6B;"
                                                        d="M431.731,286.467c-12.248,12.2-28.554,19.741-46.513,19.741c-18.452,0-35.193-7.918-47.545-20.715 c-0.009,7.669-0.288,18.74-2.321,26.816c1.334,0.815,2.369,2.154,2.571,3.819c1.165,9.481,5.796,17.923,12.693,24.402 C382.422,336.05,418.522,304.643,431.731,286.467z" />
                                                </g>
                                                <g>
                                                    <path style="fill:rgb(89 169 224);"
                                                        d="M481.635,318.013c-0.211-0.059-0.423-0.106-0.64-0.137l-42.168-6.327 c-0.258-0.039-0.81-0.059-1.073-0.059c-2.667,0-4.916,1.989-5.241,4.638c-2.641,21.448-22.972,37.623-47.295,37.623 c-24.329,0-44.659-16.173-47.295-37.623c-0.33-2.726-2.786-4.777-5.375-4.635c-0.31-0.018-0.614,0.008-0.939,0.057l-42.168,6.327 c-0.217,0.031-0.428,0.077-0.64,0.137c-19.933,5.582-30.364,25.195-30.364,41.685v20.465c0,8.713,7.759,15.801,17.297,15.801 h218.969c9.539,0,17.297-7.088,17.297-15.801v-20.465C512,343.209,501.569,323.595,481.635,318.013z" />
                                                </g>
                                                <g>
                                                    <path style="fill:#FDC88E;"
                                                        d="M432.761,174.143h-89.804c-14.563,0-26.413,11.85-26.413,26.413v31.695 c0,40.78,30.808,73.956,68.673,73.956s68.673-33.176,68.673-73.956v-36.978C453.892,183.623,444.415,174.143,432.761,174.143z" />
                                                </g>
                                                <g>
                                                    <path style="fill:#7E5C62;"
                                                        d="M422.196,116.035h-68.673c-9.936,0-18.288,6.892-20.537,16.144 c-18.185,2.311-32.289,17.88-32.289,36.681v26.413c0,13.614,5.779,26.314,15.848,35.34v-30.058 c0-14.563,11.85-26.413,26.413-26.413h89.804c11.654,0,21.13,9.479,21.13,21.13v35.335c10.071-9.024,15.848-21.724,15.848-35.335 v-31.695C469.739,137.364,448.413,116.035,422.196,116.035z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path style="fill:#FDC88E;"
                                                        d="M256,332.035c-27.944,0-53.297-11.991-72.003-31.372c-0.014,11.615-0.436,28.379-3.516,40.611 c2.02,1.235,3.588,3.262,3.894,5.784c3.992,32.484,34.781,56.977,71.625,56.977c36.836,0,67.625-24.496,71.625-56.977 c0.31-2.525,1.844-4.549,3.895-5.78c-3.08-12.233-3.503-28.999-3.517-40.615C309.297,320.044,283.944,332.035,256,332.035z" />
                                                </g>
                                                <g>
                                                    <path style="fill:#FFB980;"
                                                        d="M326.44,302.139c-18.549,18.477-43.242,29.896-70.44,29.896 c-27.944,0-53.297-11.991-72.003-31.372c-0.014,11.615-0.436,28.379-3.516,40.611c2.02,1.235,3.588,3.262,3.894,5.784 c1.765,14.359,8.778,27.144,19.223,36.954C251.766,377.229,306.436,329.666,326.44,302.139z" />
                                                </g>
                                                <g>
                                                    <path style="fill:rgb(89 169 224);"
                                                        d="M402.015,349.914c-0.32-0.09-0.641-0.16-0.969-0.207l-63.859-9.582 c-0.391-0.059-1.227-0.09-1.625-0.09c-4.039,0-7.445,3.012-7.938,7.023c-4,32.48-34.789,56.977-71.625,56.977 c-36.844,0-67.633-24.492-71.625-56.977c-0.5-4.129-4.219-7.234-8.141-7.02c-0.469-0.027-0.93,0.012-1.422,0.086l-63.859,9.582 c-0.328,0.047-0.648,0.117-0.969,0.207C79.797,358.367,64,388.07,64,413.043v30.992c0,13.195,11.75,23.93,26.195,23.93h331.609 c14.445,0,26.195-10.734,26.195-23.93v-30.992C448,388.07,432.203,358.367,402.015,349.914z" />
                                                </g>
                                                <g>
                                                    <path style="fill:#FFE1B2;"
                                                        d="M328,132.035H192c-22.055,0-40,17.945-40,40v48c0,61.758,46.656,112,104,112s104-50.242,104-112 v-56C360,146.391,345.648,132.035,328,132.035z" />
                                                </g>
                                                <g>
                                                    <path style="fill:#7E5449;"
                                                        d="M312,44.035H208c-15.047,0-27.695,10.437-31.102,24.449C149.359,71.984,128,95.562,128,124.035v40 c0,20.617,8.752,39.851,24,53.52v-45.52c0-22.055,17.945-40,40-40h136c17.648,0,32,14.355,32,32v53.511 c15.251-13.666,24-32.899,24-53.511v-48C384,76.336,351.703,44.035,312,44.035z" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>

                                </svg>
                                </div>                            <div class="col-3" >
                              <h2> <br>Staff Details</h2>  </div>
                            </div> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7  d-flex  flex-column">
                            <div class="d-flex flex-column align-items-start p-20">

<div class="d-flex align-items-center graphbox bg-light-blue">
                                    <table class="mou-dashboard-table">
                                        <thead>
                                            <tr class="row p-20">
                                                <th class="col-3 d-flex align-items-center">
                                                    <div class="col-4">
                                                        <div class="d-flex .flex-row g-5 mr-5">
                                                        </div>
                                                    </div>
                                                    Name
                                                </th>
                                                <th class="col-3">Type</th>
                                                <th class="col-3">Mobile No</th>
                                                <th class="col-3 d-flex align-items-center">
                                            
                                                    Email
                                                </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="row p-20">
                                                <td class="col-3 d-flex align-items-center">
                                                Moushika Kriyanjalee
                                                </td>
                                                <td class="col-3 d-flex align-items-center">Station Master</td>
                                                <td class="col-3 d-flex align-items-center">0762200087</td>
                                                <td class="col-3 d-flex align-items-center">
                                                    achchu@gmail.com
                                                </td>
                                            
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="row p-20">
                                                <td class="col-3 d-flex align-items-center">
                                                Moushika Kriyanjalee
                                                </td>
                                                <td class="col-3 d-flex align-items-center">Station Master</td>
                                                <td class="col-3 d-flex align-items-center">0762200087</td>
                                                <td class="col-3 d-flex align-items-center">
                                                    achchu@gmail.com
                                                </td>
                                            
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="row p-20">
                                                <td class="col-3 d-flex align-items-center">
                                                Moushika Kriyanjalee
                                                </td>
                                                <td class="col-3 d-flex align-items-center">Station Master</td>
                                                <td class="col-3 d-flex align-items-center">0762200087</td>
                                                <td class="col-3 d-flex align-items-center">
                                                    achchu@gmail.com
                                                </td>
                                            
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr class="row p-20">
                                                <td class="col-3 d-flex align-items-center">
                                                Moushika Kriyanjalee
                                                </td>
                                                <td class="col-3 d-flex align-items-center">Station Master</td>
                                                <td class="col-3 d-flex align-items-center">0762200087</td>
                                                <td class="col-3 d-flex align-items-center">
                                                    achchu@gmail.com
                                                </td>
                                            
                                            </tr>
                                        </tbody> <tbody>
                                            <tr class="row p-20">
                                                <td class="col-3 d-flex align-items-center">
                                                Moushika Kriyanjalee
                                                </td>
                                                <td class="col-3 d-flex align-items-center">Station Master</td>
                                                <td class="col-3 d-flex align-items-center">0762200087</td>
                                                <td class="col-3 d-flex align-items-center">
                                                    achchu@gmail.com
                                                </td>
                                            
                                            </tr>
                                        </tbody> <tbody>
                                            <tr class="row p-20">
                                                <td class="col-3 d-flex align-items-center">
                                                Moushika Kriyanjalee
                                                </td>
                                                <td class="col-3 d-flex align-items-center">Station Master</td>
                                                <td class="col-3 d-flex align-items-center">0762200087</td>
                                                <td class="col-3 d-flex align-items-center">
                                                    achchu@gmail.com
                                                </td>
                                            
                                            </tr>
                                        </tbody> <tbody>
                                            <tr class="row p-20">
                                                <td class="col-3 d-flex align-items-center">
                                                Moushika Kriyanjalee
                                                </td>
                                                <td class="col-3 d-flex align-items-center">Station Master</td>
                                                <td class="col-3 d-flex align-items-center">0762200087</td>
                                                <td class="col-3 d-flex align-items-center">
                                                    achchu@gmail.com
                                                </td>
                                            
                                            </tr>
                                        </tbody> <tbody>
                                            <tr class="row p-20">
                                                <td class="col-3 d-flex align-items-center">
                                                Moushika Kriyanjalee
                                                </td>
                                                <td class="col-3 d-flex align-items-center">Station Master</td>
                                                <td class="col-3 d-flex align-items-center">0762200087</td>
                                                <td class="col-3 d-flex align-items-center">
                                                    achchu@gmail.com
                                                </td>
                                            
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 p-20 ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mychart">
                                            <div>
                                                <canvas id="staffOverviewChart" width="6" height="2"></canvas>
                                            </div>
                                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                            <script>
                                                const ctx = document.getElementById('staffOverviewChart');

                                                new Chart(ctx, {
                                                    type: 'doughnut',
                                                    data: {
                                                        labels: ['Station Master', 'Ticketing Staff'],
                                                        datasets: [{
                                                            label: 'Staff Overview',
                                                            data: [1, 4], // Example data: 1 station master and 4 ticketing staff
                                                            backgroundColor: [
                                                                'rgba(255, 99, 132, 0.2)',
                                                                'rgba(54, 162, 235, 0.2)',
                                                                'rgba(255, 206, 86, 0.2)',
                                                            ],
                                                            borderColor: [
                                                                'rgba(255, 99, 132, 1)',
                                                                'rgba(54, 162, 235, 1)',
                                                                'rgba(255, 206, 86, 1)',
                                                            ],
                                                            borderWidth: 1
                                                        }]
                                                    },
                                                    options: {
                                                        plugins: {
                                                            title: {
                                                                display: true,
                                                                text: 'Staff Overview',
                                                                font: {
                                                                    size: 20,
                                                                    weight: 'bold'
                                                                }
                                                            },
                                                            legend: {
                                                                position: 'right',
                                                                align: 'centre',
                                                                labels: {
                                                                    font: {
                                                                        size: 18,
                                                                        weight: 'normal'
                                                                    }
                                                                }
                                                            }
                                                        },
                                                        layout: {
                                                            padding: {
                                                                right: 5
                                                            }
                                                        }
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- graph right -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?= ASSETS ?>/js/mou_chart.js"></script>

</html>