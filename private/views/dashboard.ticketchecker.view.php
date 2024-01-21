<?php $this->view("./includes/header"); ?>


<body>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main class=" d-flex align-items-end justify-content-center">
            <img src="<?= ASSETS ?>images/home1.jpg" class="bg-staff-home-desktop" alt="" srcset="">
            <img src="<?= ASSETS ?>images/home-mobile.jpg" class="bg-staff-home-mobile" alt="" srcset="">

            <div class="home-container width-fill justify-content-center">
                <div class="ticketchecker-container d-flex justify-content-center">
                    <div class="d-flex g-50 flex-column  ">
                        <button class="mou-staff-card">
                            <a href="<?= ROOT ?>ticketchecker/QR">
                                <div class="text">QR Scan</div>
                            </a>
                        </button>

                        <button class="mou-staff-card">
                            <a href="<?= ROOT ?>ticketchecker/reservationList">
                                <div class="text">Search</div>
                            </a>
                        </button>
                    </div>



                    <!-- <form class=" mou-form" action="">
                            <input placeholder="E-mail" id="email" name="email" type="email" class="input" required="" />
                            <input placeholder="Password" id="password" name="password" type="password" class="input" required="" />
                            <span class="forgot-password"><a href="#">Forgot Password ?</a></span>
                            <input value="Sign In" type="submit" class="login-button" />
                            </form> -->

                </div>
            </div>
        </main>
        <?php $this->view("./includes/footer") ?>
    </div>
</body>