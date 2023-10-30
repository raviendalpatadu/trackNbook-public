<?php $this->view("./includes/header") ?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main>
        <div class="dashboard-container">
                <div class="card card-body">
                <div class="row">
                <div class="col-10">
                    <div class="col-2">
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
                            <label for="password">Password</label>
                            <input type="password" id="password" class="text-field" placeholder="Ex : ************">

                        </div>
                        <div class="field">
                            <label for="password">Confirm Password</label>
                            <input type="password" id="password" class="text-field" placeholder="Ex : ************">


                        </div>
                
                    </div>
                </div>
                    
                </div>
            </div>
        </main>
    </div>
</body>

</html>