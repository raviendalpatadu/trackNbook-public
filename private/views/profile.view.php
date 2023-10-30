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
                                    <h2>Moushika Kiriyanjalee</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row g-20 mb-20">
                            <div class="col-2">
                                <div class="text-inputs">
                                    <div class="input-text-label">Title</div>
                                    <div class="input">
                                        <div class="text">
                                            <div class="select">
                                                <select name="" id="" value="Mr.">
                                                    <option value="">Mr.</option>
                                                    <option value="">Mrs.</option>
                                                    <option value="">Miss.</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="text-inputs">
                                    <div class="input-text-label">First Name</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here">
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
                                            <input type="text" class="type-here" placeholder="Type here">
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
                                            <input type="text" class="type-here" placeholder="Type here">

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-inputs">
                                    <div class="input-text-label">Mobile</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here">

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
                                            <input type="text" class="type-here" placeholder="Type here">

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
                                        <div class="text">Update</div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->view("./includes/footer") ?>

    </div>


</body>

</html>