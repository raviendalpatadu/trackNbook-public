<?php $this->view("./includes/header"); ?>


<body>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main class=" flex-grow d-flex align-items-end justify-content-center bg-ticket-checker">
            <div class="notificationCard max-width  mt-50 d-flex flex-column flex-grow justify-content-center align-items-center">
                <div class="d-flex flex-row">
                    <!-- <div class="d-flex align-items-center">
                        <img src="<?= ASSETS ?>images/home.jpg" class="bg-staff-home-mobile" alt="" srcset="">
                    </div> -->
                    <div class="d-flex flex-column justify-content-center align-items-center g-20">
                        <button class="mou-staff-card">
                            <a href="<?= ROOT ?>ticketchecker/QR">
                                <div class="mou-staff-card-text">QR Scan</div>
                            </a>
                        </button>
                        <button class="mou-staff-card">
                            <a href="<?= ROOT ?>ticketchecker/reservationList">
                                <div class="mou-staff-card-text">Reservation <br>List</div>
                            </a>
                        </button>
                    </div>

                </div>
            </div>

            <!-- <div class="home-container width-fill justify-content-center">
                            <div class="ticketchecker-container d-flex justify-content-center">
                                <div class="d-flex g-50 flex-column  "> -->







            <!-- <form class=" mou-form" action="">
                            <input placeholder="E-mail" id="email" name="email" type="email" class="input" required="" />
                            <input placeholder="Password" id="password" name="password" type="password" class="input" required="" />
                            <span class="forgot-password"><a href="#">Forgot Password ?</a></span>
                            <input value="Sign In" type="submit" class="login-button" />
                            </form> -->


        </main>
        <?php $this->view("./includes/footer") ?>
    </div>
</body>