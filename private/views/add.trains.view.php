<?php $this->view("./includes/header") ?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 center-col mt-50">
                        <div class="text-inputs">

                            <div class="input-text-label">Train ID</div>
                            <div class="input-field">
                                <div class="text">
                                    <input type="text" class="type-here" placeholder="Ex: T102">
                                </div>
                            </div>

                            <div class="input-text-label mt-20">Train Route</div>
                            <div class="input-field">
                                <div class="text">
                                    <input type="text" class="type-here" placeholder="From...">
                                </div>
                                <div class="text">
                                    <input type="text" class="type-here" placeholder="To...">
                                </div>
                            </div>

                            <div class="input-text-label mt-20">Train Type</div>
                            <div class="input">
                                <div class="text">
                                    <div class="select">
                                        <select name="" id="" value="Intercity">
                                            <option value="">Intercity</option>
                                            <option value="">Slow</option>
                                            <option value="">Special</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row mt-50">

                    <div class="col-12 d-flex justify-content-center">
                        <button class="button mx-10">
                            <div class="button-base">
                                <div class="text">Add</div>
                            </div>
                        </button>

                        <button class="button mx-10">
                            <div class="button-base">
                                <div class="text">Reset</div>
                            </div>
                        </button>

                    </div>
                </div>
            </div>

        </main>
    </div>


</body>

</html>