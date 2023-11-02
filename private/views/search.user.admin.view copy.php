<?php $this->view("./includes/header") ?>
<?php
$data['errors'] = array();
?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main style="background-color:#EFF8FF;">
            <div class="container">
                <div class="row">
                    <div class="col-8 center-col table profile">
                        <div class="row mb-10">
                            <div class="col-6">
                                <div class="profile-img d-flex flex-column align-items-center justify-content-center ">
                                    <img src="<?= ASSETS ?>images/avatar1.png" alt="profile img">
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <div class="profile-name">
                                    <h2>New Passenger Account</h2>
                                </div>
                            </div>
                        </div>

                        <form action="" method="post" class="profile">
                            <div class="row g-20 mb-20">
                                <div class="col-2">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Title</div>
                                        <div class="width-fill">
                                            <select class="dropdown" placeholder="Please choose" name="user_title">
                                                <option>Mr.</option>
                                                <option>Mrs.</option>
                                                <option>Miss.</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="text-inputs">
                                        <div class="input-text-label">First Name </div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here"
                                                    name="user_first_name">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Last Name</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here"
                                                    name="user_last_name">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row g-30 mb-20">
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">NIC</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here"
                                                    name="user_nic">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Mobile</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here"
                                                    name="user_phone_number">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Email</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here"
                                                    name="user_email">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="row g-30 mb-20">
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Username</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here"
                                                    name="login_username">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Password</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here"
                                                    name="login_password">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Confirm Password</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here"
                                                    name="login_confirm_password">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">User Type: </div>
                                    </div><br>
                                </div>

                                <div class="col-12 d-flex justify-content-start">
                                    <div class="radio-buttons-container">
                                        <div class="radio-button">
                                            <input name="user_type" value="staffTicketing" id="radio1"
                                                class="radio-button__input" type="radio">
                                            <label for="radio1" class="radio-button__label ">
                                                <span class="radio-button__custom"></span>

                                                Staff Ticketing
                                            </label>
                                        </div>
                                        <div class="radio-button">
                                            <input name="user_type" value="staffGeneral" id="radio2"
                                                class="radio-button__input" type="radio">
                                            <label for="radio2" class="radio-button__label 
                                                ">
                                                <span class="radio-button__custom"></span>

                                                Staff General
                                            </label>
                                        </div>
                                        <div class="radio-button">
                                            <input name="user_type" value="trainDriver" id="radio3"
                                                class="radio-button__input" type="radio">
                                            <label for="radio3" class="radio-button__label ">
                                                <span class="radio-button__custom"></span>

                                                Train Driver
                                            </label>
                                        </div>
                                        <div class="radio-button">
                                            <input name="user_type" value="ticketChecker" id="radio4"
                                                class="radio-button__input" type="radio">
                                            <label for="radio4" class="radio-button__label ">
                                                <span class="radio-button__custom"></span>

                                                Ticket Checker
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Gender: </div>
                                    </div><br>
                                </div>
                                <div class="col-12 d-flex justify-content-start">
                                    <div class="radio-buttons-container">
                                        <div class="radio-button">
                                            <input name="user_gender" value="male" id="radio5"
                                                class="radio-button__input" type="radio">
                                            <label for="radio5"
                                                class="radio-button__label <?php echo (array_key_exists('user_gender', $data['errors'])) ? 'red' : ''; ?>">
                                                <span class="radio-button__custom"></span>

                                                Male
                                            </label>
                                        </div>
                                        <div class="radio-button">
                                            <input name="user_gender" value="female" id="radio6"
                                                class="radio-button__input" type="radio">
                                            <label for="radio6"
                                                class="radio-button__label <?php echo (array_key_exists('user_gender', $data['errors'])) ? 'red' : ''; ?>">
                                                <span class="radio-button__custom"></span>

                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div><br><br>

                            <div class="row">

                                <div class="col-12 d-flex justify-content-center g-10">

                                    <div class="button-base">
                                        <input class="text" type="reset" value="Reset" name="submit">
                                    </div>

                                    <div class="button-base">
                                        <a href="<?= ROOT ?>login">Back</a>
                                    </div>


                                    <div class="button-base">
                                        <input class="text" type="submit" value="Create account" name="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </main>
        <?php $this->view("./includes/footer") ?>
    </div>


</body>

</html>