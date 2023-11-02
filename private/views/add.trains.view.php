<?php $this->view("./includes/header") ?>

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
                                    <img src="<?= ASSETS ?>images/t-avatar.jpg" alt="train icon">
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <div class="profile-name">
                                    <h2>Add New Train</h2>
                                </div>
                            </div>
                        </div>


                        <form action="post" class="center-col col-12 mt-50">
                            <div class="text-inputs">

                                <!-- <div class="input-text-label">Train No</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="text" class="type-here" placeholder="1105">
                                    </div>
                                </div> -->
                                <div class="input-text-label mt-20">Train Name</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="text" class="type-here" placeholder="Udaya devi">
                                    </div>
                                </div>

                                <div class="input-text-label mt-20">Train Route</div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="text" class="type-here" placeholder="From...">
                                    </div>
                                </div>
                                <div class="input-field">
                                    <div class="text">
                                        <input type="text" class="type-here" placeholder="To...">
                                    </div>
                                </div>

                                <div class="input-text-label mt-20">Train Type</div>
                                <div class="width-fill">
                                    <select class="dropdown" placeholder="Please choose" name="train_type">
                                        <option>Speical</option>
                                        <option>Slow</option>
                                        <option>Intercity</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row mt-50">

                                <div class="col-12 d-flex justify-content-center">
                                    <button class="button mx-15 px-10">
                                        <div class="button-base">
                                            <div class="text">Add</div>
                                        </div>
                                    </button>

                                    <button class="button mx-15 px-10">
                                        <div class="button-base">
                                            <div class="text">Reset</div>
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>


                </div>

        </main>
        <?php $this->view("./includes/footer") ?>
    </div>


</body>

</html>