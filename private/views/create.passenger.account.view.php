<?php $this->view("./includes/header"); ?>

<body>
    <div class="column-left">
        <?php $this->view("./includes/navbar") ?>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <div class="field">

                            <div>
                                <select name="" id="" value="Mr." class="select-field">
                                    <option value="">Mr.</option>
                                    <option value="">Mrs.</option>
                                    <option value="">Miss.</option>
                                </select>
                            </div>
                        </div>
                        <div class="field-select">

                        </div>
                        <div class="field">

                            <div>
                                <select name="" id="" value="Mr." class="select-field">
                                    <option value="">NIC</option>
                                    <option value="">Passport</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="field">
                            <label>First Name</label>
                            <input placeholder="Ex : Achchuthan" class="text-field" type="text" />
                        </div>
                        <div class="field">
                            <label>Last Name</label>
                            <input placeholder="Ex : Kalanithy" class="text-field" type="text" />
                        </div>
                        <div class="field">
                            <label>NIC No</label>
                            <input placeholder="Ex : 992090854V" class="text-field" type="text" />
                        </div>
                        <div class="field">
                            <label>Your email ID</label>
                            <input placeholder="Ex : achchuthan@gmail.com" class="text-field" type="text" />
                        </div>
                        <div class="field">
                            <label>Your Phone No</label>
                            <input placeholder="Ex : 0776712345" class="text-field" type="text" />
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <input placeholder="Ex : ************" class="text-field" type="text" />
                        </div>
                        <div class="field">
                            <label>Confirm Password</label>
                            <input placeholder="Ex : ************" class="text-field" type="text" />
                        </div>
                        <div class="activation-field">
                            <a href="/"> <b>Re - send activation mail?</b></a>
                            <button class="button"> Register</button>
                        </div>
                    </div>

                    <div class="col-4 image-field">
                        <img class="image" src="<?= ASSETS ?>images/Logo on create passenger account page.png">
                    </div>
                </div>
        </main>
        <?php $this->view("./includes/footer") ?>

    </div>


</body>

</html>