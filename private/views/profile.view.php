<?php
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
?>
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
                                    <img src="<?= ASSETS ?>images/shika.jpg" alt="profile img">
                                    <p class="pt-10 blue">Change Photo</p>
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <div class="profile-name">
                                    <h2><?=ucfirst(Auth::getuser_first_name()) . " " . ucfirst(Auth::getuser_last_name())?></h2>
                                </div>
                            </div>
                        </div>

                        <form action="" method="post" class="profile">
                            <div class="row g-20 mb-20">
                                <div class="col-2">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Title</div>
                                        <div class="width-fill">
                                            <select class="dropdown" placeholder="Please choose"  value="<?=Auth::getuser_title()?>" name="user_title">
                                                <option>Mr.</option>
                                                <option>Mrs.</option>
                                                <option>Miss.</option>
                                            </select>
                                        </div>
                                        <div class="assistive-text display-none">Assistive Text</div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="text-inputs">
                                        <div class="input-text-label">First Name</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?=Auth::getuser_first_name()?>" name="user_first_name">
                                            </div>
                                        </div>
                                        <!-- <div class="assistive-text">Assistive Text</div> -->
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Last Name</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?=Auth::getuser_last_name()?> " name="user_last_name">
                                            </div>
                                        </div>
                                        <!-- <div class="assistive-text">Assistive Text</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row g-30 mb-20">
                                <div class="col-6">
                                    <div class="text-inputs">
                                        <div class="input-text-label">NIC</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?=Auth::getuser_nic()?>" name="user_nic" disabled>
                                                <input type="hidden" class="type-here" placeholder="Type here" value="<?=Auth::getuser_nic()?>" name="user_nic">
    
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Mobile</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?=Auth::getuser_phone_number()?>" name="user_phone_number">
    
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            <div class="row g-30 mb-20">
                                <div class="col-4">
                                    <div class="text-inputs">
                                        <div class="input-text-label">Email</div>
                                        <div class="input-field">
                                            <div class="text">
                                                <input type="text" class="type-here" placeholder="Type here" value="<?=Auth::getuser_email()?>" name="user_email" disabled>
                                                <input type="hidden" class="type-here" placeholder="Type here" value="<?=Auth::getuser_email()?>" name="user_email">
    
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
    
                                <div class="col-12 d-flex justify-content-center">
                                    <button class="button mx-10">
                                        <div class="button-base">
                                            <div class="text">Reset</div>
                                        </div>
                                    </button>
    
                                    <button class="button mx-10">
                                        <div class="button-base">
                                            <div class="text">Delete</div>
                                        </div>
                                    </button>
    
                                    <button class="button mx-10">
                                        <div class="button-base">
                                            <input type="hidden" name="user_id" value="<?=Auth::getuser_id()?>">
                                            <input type="submit" value="Update" name="update">
                                        </div>
                                    </button>
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