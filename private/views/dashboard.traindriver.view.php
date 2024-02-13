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

                            <div class="card-dashboard2">
                                <div class="div"><svg xmlns="http://www.w3.org/2000/svg" width="31" height="37"
                                        viewBox="0 0 31 37" fill="none">
                                        <path
                                            d="M30.2465 8.88366L22.3889 15.5693V34.4356C22.3889 35.1378 22.0929 35.7407 21.5009 36.2444C20.9089 36.7481 20.2002 37 19.375 37C18.5498 37 17.8411 36.7481 17.2491 36.2444C16.6571 35.7407 16.3611 35.1378 16.3611 34.4356V25.6436H14.6389V34.4356C14.6389 35.1378 14.3429 35.7407 13.7509 36.2444C13.1589 36.7481 12.4502 37 11.625 37C10.7998 37 10.0911 36.7481 9.49913 36.2444C8.90712 35.7407 8.61111 35.1378 8.61111 34.4356V15.5693L0.753472 8.88366C0.251157 8.45627 0 7.93729 0 7.32673C0 6.71617 0.251157 6.1972 0.753472 5.7698C1.27373 5.34241 1.88817 5.12871 2.59679 5.12871C3.30541 5.12871 3.91088 5.34241 4.41319 5.7698L10.5486 10.9901H20.4514L26.5868 5.7698C27.0891 5.34241 27.6991 5.12871 28.4167 5.12871C29.1343 5.12871 29.7442 5.34241 30.2465 5.7698C30.7488 6.21246 31 6.73525 31 7.33818C31 7.94111 30.7488 8.45627 30.2465 8.88366ZM21.5278 5.12871C21.5278 6.54827 20.9402 7.75794 19.7652 8.75774C18.5901 9.75753 17.1684 10.2574 15.5 10.2574C13.8316 10.2574 12.4099 9.75753 11.2348 8.75774C10.0598 7.75794 9.47222 6.54827 9.47222 5.12871C9.47222 3.70916 10.0598 2.49948 11.2348 1.49969C12.4099 0.499897 13.8316 0 15.5 0C17.1684 0 18.5901 0.499897 19.7652 1.49969C20.9402 2.49948 21.5278 3.70916 21.5278 5.12871Z"
                                            fill="black" />
                                    </svg>

                                    <div class="impressions"><a
                                            href="http://localhost/trackNbook/public/traindriver/updatelocation"
                                            class="">Click here to</a></td>
                                    </div>
                                </div>
                                <div class="number">Update Location</div>
                            </div>
                            <div class="card-dashboard2">
                                <div class="div"><svg xmlns="http://www.w3.org/2000/svg" width="31" height="37"
                                        viewBox="0 0 31 37" fill="none">
                                        <path
                                            d="M30.2465 8.88366L22.3889 15.5693V34.4356C22.3889 35.1378 22.0929 35.7407 21.5009 36.2444C20.9089 36.7481 20.2002 37 19.375 37C18.5498 37 17.8411 36.7481 17.2491 36.2444C16.6571 35.7407 16.3611 35.1378 16.3611 34.4356V25.6436H14.6389V34.4356C14.6389 35.1378 14.3429 35.7407 13.7509 36.2444C13.1589 36.7481 12.4502 37 11.625 37C10.7998 37 10.0911 36.7481 9.49913 36.2444C8.90712 35.7407 8.61111 35.1378 8.61111 34.4356V15.5693L0.753472 8.88366C0.251157 8.45627 0 7.93729 0 7.32673C0 6.71617 0.251157 6.1972 0.753472 5.7698C1.27373 5.34241 1.88817 5.12871 2.59679 5.12871C3.30541 5.12871 3.91088 5.34241 4.41319 5.7698L10.5486 10.9901H20.4514L26.5868 5.7698C27.0891 5.34241 27.6991 5.12871 28.4167 5.12871C29.1343 5.12871 29.7442 5.34241 30.2465 5.7698C30.7488 6.21246 31 6.73525 31 7.33818C31 7.94111 30.7488 8.45627 30.2465 8.88366ZM21.5278 5.12871C21.5278 6.54827 20.9402 7.75794 19.7652 8.75774C18.5901 9.75753 17.1684 10.2574 15.5 10.2574C13.8316 10.2574 12.4099 9.75753 11.2348 8.75774C10.0598 7.75794 9.47222 6.54827 9.47222 5.12871C9.47222 3.70916 10.0598 2.49948 11.2348 1.49969C12.4099 0.499897 13.8316 0 15.5 0C17.1684 0 18.5901 0.499897 19.7652 1.49969C20.9402 2.49948 21.5278 3.70916 21.5278 5.12871Z"
                                            fill="black" />
                                    </svg>

                                    <div class="impressions"><a
                                            href="http://localhost/trackNbook/public/traindriver/traindelay"
                                            class="">Click here to</a></td>
                                    </div>
                                </div>
                                <div class="number">Update Delay</div>
                            </div>



<<<<<<< HEAD


=======
                            </div>
                            <div class="profile-img d-flex flex-column1 align-items-center justify-content-center">
                                <img src="<?= ASSETS ?>images/map.png" alt="profile img" width="500" height="750">
>>>>>>> 6c81745cf8ea3b5c2d4f8d9dfeb033bace3d5e1e

                            </div>
                        </div>

                    </div>
                </div>
<<<<<<< HEAD
            </div>
=======



            </div>

>>>>>>> 6c81745cf8ea3b5c2d4f8d9dfeb033bace3d5e1e



    </div>




    </main>
    </div>


</body>

</html>
<style>
<<<<<<< HEAD
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

    .flex-column1 {
        margin-left: 200px;
        flex-direction: column;

    }

    .card-dashboard2 {
        margin: 5px 5px;
        padding: 10px 20px;
        background-color: #FAFAFA;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        font-family: "Poppins-Medium", Helvetica;
        border-radius: 10px;
        height: 132px;
        width: 381px;


    }
=======
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

.flex-column1 {
    margin-left: 200px;
    flex-direction: column;
}
>>>>>>> 6c81745cf8ea3b5c2d4f8d9dfeb033bace3d5e1e
</style>