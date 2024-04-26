<?php
$no_of_passengers = $_SESSION['reservation']['no_of_passengers'];
echo "<pre>";
  print_r($_POST);
print_r($_SESSION);
print_r($data);
echo "</pre>";

?>


<?php $this->view("./includes/header"); ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main class="bg ">
            <div class="container  ">
                <div class="d-flex mt-50 flex-column g-20 justify-content-center">
                    <form action="" method="post" class="bg-white p-30 shadow" enctype="multipart/form-data">
                        <?php for ($i = 0; $i < $no_of_passengers; $i++) { ?>
                            <h3 class="mb-20 Primary-Gray input-text-label border-bottom-Lightgray">Enter Details of Passenger: <?= '0'.$i + 1 ?></h3>
                            <div class="row g-20 mb-20">
                                <div class="col-2">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Title</div>
                                        <div class="width-fill">
                                            <select class="dropdown" placeholder="Please choose" name="reservation_passenger_title[]">
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Miss.">Miss.</option>
                                            </select>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (array_key_exists('errors', $data)) ? ((!isset($data['errors']['reservation_passenger_title'])) ? 'display-none' : '') : ''; ?>"> <?php echo (array_key_exists('errors', $data)) ? ((isset($data['errors']['reservation_passenger_title'][$i])) ? $data['errors']['reservation_passenger_title'][$i] : "") : ''; ?></div>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="text-inputs">
                                        <div class="input-text-label">First Name </div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="reservation_passenger_first_name[]" value="<?php echo (isset($_POST['reservation_passenger_first_name'][$i])) ? $_POST['reservation_passenger_first_name'][$i] : ""; ?>">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (array_key_exists('errors', $data)) ? ((!isset($data['errors']['reservation_passenger_first_name'][$i])) ?  'display-none' : '') : ''; ?>"> <?php echo (array_key_exists('errors', $data)) ? ((isset($data['errors']['reservation_passenger_first_name'][$i])) ? $data['errors']['reservation_passenger_first_name'][$i] : "") : ''; ?></div>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Last Name</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="reservation_passenger_last_name[]" value="<?php echo (isset($_POST['reservation_passenger_last_name'][$i])) ? $_POST['reservation_passenger_last_name'][$i] : ""; ?>">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (array_key_exists('errors', $data)) ? ((!isset($data['errors']['reservation_passenger_last_name'][$i])) ?  'display-none' : '') : '';  ?>"> <?php echo (array_key_exists('errors', $data)) ? ((isset($data['errors']['reservation_passenger_last_name'][$i])) ? $data['errors']['reservation_passenger_last_name'][$i] : "") : ''; ?></div>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-30 mb-20">
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">NIC/passpot</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="reservation_passenger_nic[]" value="<?php echo (isset($_POST['reservation_passenger_nic'][$i])) ? $_POST['reservation_passenger_nic'][$i] : ""; ?>">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (array_key_exists('errors', $data)) ? ((!isset($data['errors']['reservation_passenger_nic'][$i])) ?  'display-none' : '') : ''; ?>"> <?php echo (array_key_exists('errors', $data)) ? ((isset($data['errors']['reservation_passenger_nic'][$i])) ? $data['errors']['reservation_passenger_nic'][$i] : "") : ''; ?></div>
                                        <?php endif ?>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Mobile</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="reservation_passenger_phone_number[]" value="<?php echo (isset($_POST['reservation_passenger_phone_number'][$i])) ? $_POST['reservation_passenger_phone_number'][$i] : ""; ?>">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (array_key_exists('errors', $data)) ? ((!isset($data['errors']['reservation_passenger_phone_number'][$i])) ?  'display-none' : '') : ''; ?>"> <?php echo (array_key_exists('errors', $data)) ? ((isset($data['errors']['reservation_passenger_phone_number'][$i])) ? $data['errors']['reservation_passenger_phone_number'][$i] : "") : ''; ?></div>
                                        <?php endif ?>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Email</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" name="reservation_passenger_email[]" value="<?php echo (isset($_POST['reservation_passenger_email'][$i])) ? $_POST['reservation_passenger_email'][$i] : ""; ?>">
                                            </div>
                                        </div>
                                        <?php if (isset($data['errors'])) : ?>
                                            <div class="assistive-text <?php echo (array_key_exists('errors', $data)) ? ((!isset($data['errors']['reservation_passenger_email'][$i])) ?  'display-none' : '') : ''; ?>"> <?php echo (array_key_exists('errors', $data)) ? ((isset($data['errors']['reservation_passenger_email'][$i])) ? $data['errors']['reservation_passenger_email'][$i] : "") : ''; ?></div>
                                        <?php endif ?>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 d-flex justify-content-start">
                                    <div class="radio-buttons-container">
                                        <?php for ($j = 0; $j < 2; $j++) : ?>
                                            <div class="radio-button">
                                                <input name="reservation_passenger_gender[<?= $i ?>]" value="male" id="radio<?= $i ?>_<?= $j ?>" class="radio-button__input" type="radio" <?= (isset($_POST["reservation_passenger_gender"][$i]) &&  $_POST["reservation_passenger_gender"][$i] == "male") ? "checked" : "" ?>>
                                                <label for="radio<?= $i ?>_<?= $j++ ?>" class="radio-button__label <?php echo (array_key_exists('errors', $data)) ? ((isset($data['errors']['reservation_passenger_gender'][$i])) ? 'red' : '') : ''; ?>">
                                                    <span class="radio-button__custom"></span>
                                                    Male
                                                </label>
                                            </div>
                                            <div class="radio-button">
                                                <input name="reservation_passenger_gender[<?= $i ?>]" value="female" id="radio<?= $i ?>_<?= $j ?>" class="radio-button__input" type="radio" <?= (isset($_POST["reservation_passenger_gender"][$i]) && $_POST["reservation_passenger_gender"][$i] == "female") ? "checked" : "" ?>>
                                                <label for="radio<?= $i ?>_<?= $j ?>" class="radio-button__label <?php echo (array_key_exists('errors', $data)) ? ((isset($data['errors']['reservation_passenger_gender'][$i])) ? 'red' : '') : ''; ?>">
                                                    <span class="radio-button__custom"></span>
                                                    Female
                                                </label>
                                            </div>
                                        <?php endfor ?>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

<!-- check booking type -->
                        <div class="row mt-10">
                            <div class="col-12">
                                <div class="text-inputs">
                                    <div class="d-flex align-items-end justify-content-start flex-fill">
                                        <div class="d-flex align-items-center g-20">
                                            <div class="d-flex .flex-row g-5">
                                                <label class="switch">
                                                    <input type="checkbox" id="warrentBooking" name="warrant_booking" value="on" <?= getCheckBox('on', 'warrant_booking') ?>>
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
                        <div class="col-12 d-flex justify-content-end">
                            <div class="button-base">
                                <input type="submit" value="proceed" name="submit">
                                <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>


            </div>

        </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>

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