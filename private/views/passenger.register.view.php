<?php $this->view("./includes/header"); ?>

<body>
    <div class="column-left">
        <?php $this->view("./includes/navbar") ?>
        <main>
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
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (!array_key_exists('user_title', $data['errors'])) ? 'display-none' : ''; ?>"> <?php echo (array_key_exists('user_title', $data['errors'])) ? $data['errors']['user_title'] : ''; ?></div>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="text-inputs">
                                        <div class="input-text-label">First Name </div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="user_first_name">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (!array_key_exists('user_first_name', $data['errors'])) ? 'display-none' : ''; ?>"> <?php echo (array_key_exists('user_first_name', $data['errors'])) ? $data['errors']['user_first_name'] : ''; ?></div>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Last Name</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="user_last_name">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (!array_key_exists('user_last_name', $data['errors'])) ? 'display-none' : ''; ?>"> <?php echo (array_key_exists('user_last_name', $data['errors'])) ? $data['errors']['user_last_name'] : ''; ?></div>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-30 mb-20">
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">NIC</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="user_nic">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (!array_key_exists('user_nic', $data['errors'])) ? 'display-none' : ''; ?>"> <?php echo (array_key_exists('user_nic', $data['errors'])) ? $data['errors']['user_nic'] : ''; ?></div>
                                        <?php endif ?>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Mobile</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="user_phone_number">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (!array_key_exists('user_phone_number', $data['errors'])) ? 'display-none' : ''; ?>"> <?php echo (array_key_exists('user_phone_number', $data['errors'])) ? $data['errors']['user_phone_number'] : ''; ?></div>
                                        <?php endif ?>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Email</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="user_email">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (!array_key_exists('user_email', $data['errors'])) ? 'display-none' : ''; ?>"> <?php echo (array_key_exists('user_email', $data['errors'])) ? $data['errors']['user_email'] : ''; ?></div>
                                        <?php endif ?>

                                    </div>
                                </div>
                            </div>


                            <div class="row g-30 mb-20">
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Username</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="login_username">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (!array_key_exists('login_username', $data['errors'])) ? 'display-none' : ''; ?>"> <?php echo (array_key_exists('login_username', $data['errors'])) ? $data['errors']['login_username'] : ''; ?></div>
                                        <?php endif ?>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Password</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="login_password">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (!array_key_exists('login_password', $data['errors'])) ? 'display-none' : ''; ?>"> <?php echo (array_key_exists('login_password', $data['errors'])) ? $data['errors']['login_password'] : ''; ?></div>
                                        <?php endif ?>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Confirm Password</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="login_confirm_password">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (!array_key_exists('login_confirm_password', $data['errors'])) ? 'display-none' : ''; ?>"> <?php echo (array_key_exists('login_confirm_password', $data['errors'])) ? $data['errors']['login_confirm_password'] : ''; ?></div>
                                        <?php endif ?>

                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-12 d-flex justify-content-start">
                                    <div class="radio-buttons-container">
                                        <div class="radio-button">
                                            <input name="user_gender" value="male" id="radio2" class="radio-button__input" type="radio">
                                            <label for="radio2" class="radio-button__label <?php echo (array_key_exists('user_gender', $data['errors'])) ? 'red' : ''; ?>">
                                                <span class="radio-button__custom"></span>

                                                Male
                                            </label>
                                        </div>
                                        <div class="radio-button">
                                            <input name="user_gender" value="female" id="radio1" class="radio-button__input" type="radio">
                                            <label for="radio1" class="radio-button__label <?php echo (array_key_exists('user_gender', $data['errors'])) ? 'red' : ''; ?>">
                                                <span class="radio-button__custom"></span>

                                               Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-12 d-flex justify-content-center">

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

<script>
    $(document).ready(function() {
        var tag = $('.text-inputs').children('.assistive-text:not(.display-none)');
        var counter = 0;

        // access errors array
        var arr = <?php echo json_encode($data); ?>;

        // check errors key exists
        if (arr.hasOwnProperty('errors')) {
            tag.each(() => {
                console.log(tag[counter]);
                if (tag[counter++].innerHTML != " ") {
                    tag.parent().children('.input-field').addClass('border-red');
                    tag.parent().children('.input-field').children('.text').children('.type-here').addClass('red');
                    tag.parent().children('.input-text-label').addClass('red');
                    tag.addClass('red');
                }
            });
        }

    });
</script>

</html>