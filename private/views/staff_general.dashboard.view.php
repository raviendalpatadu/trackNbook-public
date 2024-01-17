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
                            <div class="card-dashboard">
                                <div class="div"><svg xmlns="http://www.w3.org/2000/svg" width="31" height="37"
                                        viewBox="0 0 31 37" fill="none">
                                        <path
                                            d="M30.2465 8.88366L22.3889 15.5693V34.4356C22.3889 35.1378 22.0929 35.7407 21.5009 36.2444C20.9089 36.7481 20.2002 37 19.375 37C18.5498 37 17.8411 36.7481 17.2491 36.2444C16.6571 35.7407 16.3611 35.1378 16.3611 34.4356V25.6436H14.6389V34.4356C14.6389 35.1378 14.3429 35.7407 13.7509 36.2444C13.1589 36.7481 12.4502 37 11.625 37C10.7998 37 10.0911 36.7481 9.49913 36.2444C8.90712 35.7407 8.61111 35.1378 8.61111 34.4356V15.5693L0.753472 8.88366C0.251157 8.45627 0 7.93729 0 7.32673C0 6.71617 0.251157 6.1972 0.753472 5.7698C1.27373 5.34241 1.88817 5.12871 2.59679 5.12871C3.30541 5.12871 3.91088 5.34241 4.41319 5.7698L10.5486 10.9901H20.4514L26.5868 5.7698C27.0891 5.34241 27.6991 5.12871 28.4167 5.12871C29.1343 5.12871 29.7442 5.34241 30.2465 5.7698C30.7488 6.21246 31 6.73525 31 7.33818C31 7.94111 30.7488 8.45627 30.2465 8.88366ZM21.5278 5.12871C21.5278 6.54827 20.9402 7.75794 19.7652 8.75774C18.5901 9.75753 17.1684 10.2574 15.5 10.2574C13.8316 10.2574 12.4099 9.75753 11.2348 8.75774C10.0598 7.75794 9.47222 6.54827 9.47222 5.12871C9.47222 3.70916 10.0598 2.49948 11.2348 1.49969C12.4099 0.499897 13.8316 0 15.5 0C17.1684 0 18.5901 0.499897 19.7652 1.49969C20.9402 2.49948 21.5278 3.70916 21.5278 5.12871Z"
                                            fill="black" />
                                    </svg>

                                    <div class="impressions">Number of Trains Onboard</div>
                                </div>
                                <div class="number">24</div>
                            </div>

                            <div class="card-dashboard">
                                <div class="div"><svg xmlns="http://www.w3.org/2000/svg" width="31" height="37"
                                        viewBox="0 0 31 37" fill="none">
                                        <path
                                            d="M30.2465 8.88366L22.3889 15.5693V34.4356C22.3889 35.1378 22.0929 35.7407 21.5009 36.2444C20.9089 36.7481 20.2002 37 19.375 37C18.5498 37 17.8411 36.7481 17.2491 36.2444C16.6571 35.7407 16.3611 35.1378 16.3611 34.4356V25.6436H14.6389V34.4356C14.6389 35.1378 14.3429 35.7407 13.7509 36.2444C13.1589 36.7481 12.4502 37 11.625 37C10.7998 37 10.0911 36.7481 9.49913 36.2444C8.90712 35.7407 8.61111 35.1378 8.61111 34.4356V15.5693L0.753472 8.88366C0.251157 8.45627 0 7.93729 0 7.32673C0 6.71617 0.251157 6.1972 0.753472 5.7698C1.27373 5.34241 1.88817 5.12871 2.59679 5.12871C3.30541 5.12871 3.91088 5.34241 4.41319 5.7698L10.5486 10.9901H20.4514L26.5868 5.7698C27.0891 5.34241 27.6991 5.12871 28.4167 5.12871C29.1343 5.12871 29.7442 5.34241 30.2465 5.7698C30.7488 6.21246 31 6.73525 31 7.33818C31 7.94111 30.7488 8.45627 30.2465 8.88366ZM21.5278 5.12871C21.5278 6.54827 20.9402 7.75794 19.7652 8.75774C18.5901 9.75753 17.1684 10.2574 15.5 10.2574C13.8316 10.2574 12.4099 9.75753 11.2348 8.75774C10.0598 7.75794 9.47222 6.54827 9.47222 5.12871C9.47222 3.70916 10.0598 2.49948 11.2348 1.49969C12.4099 0.499897 13.8316 0 15.5 0C17.1684 0 18.5901 0.499897 19.7652 1.49969C20.9402 2.49948 21.5278 3.70916 21.5278 5.12871Z"
                                            fill="black" />
                                    </svg>

                                    <div class="impressions">Waiting List</div>
                                </div>
                                <div class="number">24</div>

                            </div>
                        </div>
                    </div>



                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                        </div>
                    </div>
                    <div class="table" style="background-color:white;max-width:100%;">
                        <div class="row">
                            <div class="col-12">
                                <div class="trains-available">
                                    <h2>Trains available</h2>
                                    <div class="badge">
                                        <div class="badge-base bg-light-green">
                                            <div class="text dark-green">03</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="">
                            <thead>
                                <tr class="row">
                                    <th class="col-4">Name</th>
                                    <th class="col-2">Time</th>
                                    <th class="col-4">Reservations</th>
                                    <th class="col-1"></th>
                                    <th class="col-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="row">
                                    <td class="col-4">Udarata menike Express Train<br>Badulla - Colombo Fort</td>
                                    <td class="col-2">
                                        <div class="badge-base bg-light-green">
                                            <div class="dot">
                                                <div class="dot2"></div>
                                            </div>
                                            <div class="text dark-green">07.00-17.00</div>

                                        </div>
                                    </td>
                                    <td class="col-4">


                                        <div class="availabity">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="badge-base">
                                                        <div class="text">1st Class Reservation</div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="badge-base">
                                                        <div class="text">20</div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="badge-base">
                                                        <div class="text">LKR.2500.00</div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text primary-blue">2nd Class Reservation</div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text primary-blue">230</div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text primary-blue">LKR.2000.00</div>

                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text blue">3rd Class Reservation</div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text blue">60</div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text blue">LKR.1500.00</div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </td>
                                    <td class="col-1"></td>
                                    <td class="col-1"><a
                                            href="http://localhost/trackNbook/public/StaffGeneral/updateSchedule"
                                            class="blue">Edit</a></td>
                                </tr>
                                <tr class="row">
                                    <td class="col-4">Udarata menike Express Train<br>Badulla - Colombo Fort</td>
                                    <td class="col-2">
                                        <div class="badge-base bg-light-green">
                                            <div class="dot">
                                                <div class="dot2"></div>
                                            </div>
                                            <div class="text dark-green">07.00-17.00</div>
                                        </div>
                                    </td>
                                    <td class="col-4">

                                        <div class="availabity">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="badge-base">
                                                        <div class="text">1st Class Reservation</div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="badge-base">
                                                        <div class="text">20</div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="badge-base">
                                                        <div class="text">LKR.2500.00</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text primary-blue">2nd Class Reservation</div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text primary-blue">230</div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text primary-blue">LKR.2000.00</div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text blue">3rd Class Reservation</div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text blue">60</div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text blue">LKR.1500.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="col-1"></td>
                                    <td class="col-1"><a
                                            href="http://localhost/trackNbook/public/StaffGeneral/updateSchedule"
                                            class="blue">Edit</a></td>
                                </tr>
                                <tr class="row">
                                    <td class="col-4">Udarata menike Express Train<br>Badulla - Colombo Fort</td>
                                    <td class="col-2">
                                        <div class="badge-base bg-light-green">
                                            <div class="dot">
                                                <div class="dot2"></div>
                                            </div>
                                            <div class="text dark-green">07.00-17.00</div>
                                        </div>
                                    </td>
                                    <td class="col-4">

                                        <div class="availabity">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="badge-base">
                                                        <div class="text">1st Class Reservation</div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="badge-base">
                                                        <div class="text">20</div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="badge-base">
                                                        <div class="text">LKR.2500.00</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text primary-blue">2nd Class Reservation</div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text primary-blue">230</div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text primary-blue">LKR.2000.00</div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text blue">3rd Class Reservation</div>
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text blue">60</div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="badge-base bg-selected-blue">
                                                        <div class="text blue">LKR.1500.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="col-1"></td>
                                    <td class="col-1"><a
                                            href="http://localhost/trackNbook/public/StaffGeneral/updateSchedule"
                                            class="blue">Edit</a></td>

                                </tr>
                                <tr class="row">
                                    <td class="col-1"><a
                                            href="http://localhost/trackNbook/public/StaffGeneral/addSchedule"
                                            class="blue">
                                            <div class="sidebar-icon plus"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="30" height="30" viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M9.99984 1.66675C8.35166 1.66675 6.7405 2.15549 5.37009 3.07117C3.99968 3.98685 2.93158 5.28834 2.30084 6.81105C1.67011 8.33377 1.50509 10.0093 1.82663 11.6258C2.14817 13.2423 2.94185 14.7272 4.10728 15.8926C5.27272 17.0581 6.75758 17.8518 8.37409 18.1733C9.9906 18.4948 11.6662 18.3298 13.1889 17.6991C14.7116 17.0683 16.0131 16.0002 16.9288 14.6298C17.8444 13.2594 18.3332 11.6483 18.3332 10.0001C18.3332 8.90573 18.1176 7.8221 17.6988 6.81105C17.28 5.80001 16.6662 4.88135 15.8924 4.10752C15.1186 3.3337 14.1999 2.71987 13.1889 2.30109C12.1778 1.8823 11.0942 1.66675 9.99984 1.66675V1.66675ZM9.99984 16.6667C8.6813 16.6667 7.39237 16.2758 6.29604 15.5432C5.19971 14.8107 4.34523 13.7695 3.84064 12.5513C3.33606 11.3331 3.20404 9.99269 3.46127 8.69948C3.71851 7.40627 4.35345 6.21839 5.2858 5.28604C6.21815 4.35369 7.40603 3.71875 8.69924 3.46151C9.99245 3.20428 11.3329 3.3363 12.5511 3.84088C13.7692 4.34547 14.8104 5.19995 15.543 6.29628C16.2755 7.39261 16.6665 8.68154 16.6665 10.0001C16.6665 11.7682 15.9641 13.4639 14.7139 14.7141C13.4636 15.9644 11.768 16.6667 9.99984 16.6667V16.6667ZM13.3332 9.16675H10.8332V6.66675C10.8332 6.44573 10.7454 6.23377 10.5891 6.07749C10.4328 5.92121 10.2209 5.83341 9.99984 5.83341C9.77883 5.83341 9.56687 5.92121 9.41059 6.07749C9.25431 6.23377 9.16651 6.44573 9.16651 6.66675V9.16675H6.66651C6.44549 9.16675 6.23353 9.25455 6.07725 9.41083C5.92097 9.56711 5.83317 9.77907 5.83317 10.0001C5.83317 10.2211 5.92097 10.4331 6.07725 10.5893C6.23353 10.7456 6.44549 10.8334 6.66651 10.8334H9.16651V13.3334C9.16651 13.5544 9.25431 13.7664 9.41059 13.9227C9.56687 14.079 9.77883 14.1667 9.99984 14.1667C10.2209 14.1667 10.4328 14.079 10.5891 13.9227C10.7454 13.7664 10.8332 13.5544 10.8332 13.3334V10.8334H13.3332C13.5542 10.8334 13.7662 10.7456 13.9224 10.5893C14.0787 10.4331 14.1665 10.2211 14.1665 10.0001C14.1665 9.77907 14.0787 9.56711 13.9224 9.41083C13.7662 9.25455 13.5542 9.16675 13.3332 9.16675Z"
                                                        fill="#71839B" />
                                                </svg>
                                            </div>
                                        </a></td>
                                    <td class="col-1"><a
                                            href="http://localhost/trackNbook/public/StaffGeneral/addSchedule"
                                            class="blue">Add Train</a></td>
                                </tr>


                            </tbody>


                        </table>





                        <div class="pagination">
                            <div class="button">
                                <div class="button-base">
                                    <svg class="arrow-left" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.8334 9.99935H4.16675M4.16675 9.99935L10.0001 15.8327M4.16675 9.99935L10.0001 4.16602"
                                            stroke="#344054" stroke-width="1.67" stroke-linecap="round"
                                            stroke-linejoin="round" />
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
                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327"
                                            stroke="#344054" stroke-width="1.67" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>

                        </div>
                    </div>
        </main>
    </div>
</body>

</html>
<style>
    .trains-available {
        padding: 12px 24px;
    }
</style>


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