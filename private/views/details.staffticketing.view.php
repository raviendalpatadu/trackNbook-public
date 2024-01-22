<?php

// echo "<pre>";
// print_r($data);
// echo "</pre>";

?>


<?php $this->view("./includes/header"); ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main>
            <div class="container d-flex justify-content-center mt-80">
                <div class="passenger-container justify-content-center">
                    <form action="" method="post" class="profile p-50 shadow">

                        <h3 class="mb-20 Primary-Gray input-text-label">Enter Details of Passenger 1</h3>
                        <div class="row g-20 mb-20">
                            <div class="col-2">
                                <div class="text-inputs">
                                    <div class="input-text-label">Title</div>
                                    <div class="width-fill">
                                        <select class="dropdown" placeholder="Please choose" name="user_title[]">
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
                                            <input type="text" class="type-here" placeholder="Type here" name="user_first_name[]" value="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">Last Name</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" name="user_last_name[]" value="">
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
                                            <input type="text" class="type-here" placeholder="Type here" name="user_nic[]" value="">
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-inputs">
                                    <div class="input-text-label">Mobile</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" name="user_phone_number[]" value="">
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-inputs">
                                    <div class="input-text-label">Email</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" name="user_email[]" value=" ">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 d-flex justify-content-start">
                                <div class="radio-buttons-container">
                                    <?php for ($j = 0; $j < 2; $j++) : ?>
                                        <div class="radio-button">
                                            <input name="user_gender<?= $i ?>" value="male" id="radio<?= $i ?>_<?= $j ?>" class="radio-button__input" type="radio">
                                            <label for="radio<?= $i ?>_<?= $j++ ?>" class="radio-button__label <?php echo (array_key_exists('errors', $data)) ? ((isset($data['errors']['user_gender' . $i])) ? 'red' : '') : ''; ?>">
                                                <span class="radio-button__custom"></span>

                                                Male
                                            </label>
                                        </div>
                                        <div class="radio-button">
                                            <input name="user_gender<?= $i ?>" value="female" id="radio<?= $i ?>_<?= $j ?>" class="radio-button__input" type="radio">
                                            <label for="radio<?= $i ?>_<?= $j ?>" class="radio-button__label <?php echo (array_key_exists('errors', $data)) ? ((isset($data['errors']['user_gender' . $i])) ? 'red' : '') : ''; ?>">
                                                <span class="radio-button__custom"></span>
                                                Female
                                            </label>
                                        </div>
                                    <?php endfor ?>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-12">
                                <div class="text-inputs">
                                    <div class="d-flex align-items-end justify-content-start flex-fill">
                                        <div class="d-flex align-items-center g-20">
                                            <div class="d-flex .flex-row g-5">
                                                <label class="switch">
                                                    <input type="checkbox" id="warrentBooking">
                                                    <span class="slider"></span>
                                                </label>
                                            </div>
                                            <div>Warrent Booking</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-20 border-top-Lightgray display-none" id="chooseImg">
                                <div class="input-text-label mt-5">
                                    Please upload a clear photo of the warrent.
                                </div>
                                <div class="d-flex flex-row align-items-center mt-10">

                                    <div class="file-upload">
                                        <input type="file" class="" name="file-upload-input" id="file-upload-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row mt-20">
                        <div class="col-12 d-flex justify-content-end"><a href="<?= ROOT ?>staffTicketing/pay">
                                <button class="button mx-10">

                                    <div class="button-base">
                                        <div class="text">Proceed</div>
                                    </div>

                                </button></a>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->view('includes/footer'); ?>
        <script>
            $(document).ready(function() {
                var tag = $('.text-inputs').children('.assistive-text:not(.display-none)');
                var counter = 0;

                // access errors array
                var arr = <?php echo json_encode($data); ?>;
                // console.log(tag);

                // check errors key exists
                if (arr.hasOwnProperty('errors')) {
                    tag.each(() => {
                        console.log(tag[counter]);
                        if (tag[counter++].innerHTML != "") {
                            tag.parent().children('.input-field').addClass('border-red');
                            tag.parent().children('.input-field').children('.text').children('.type-here').addClass('red');
                            tag.parent().children('.input-text-label').addClass('red');
                            tag.addClass('red');
                        }
                    });
                }

            });
        </script>
    </div>
</body>

</html>