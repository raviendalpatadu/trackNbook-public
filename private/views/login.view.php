<?php $this->view("./includes/header"); ?>

<body>
    <div class="column-left">
        <?php $this->view("./includes/navbar") ?>
        <main class=" d-flex align-items-start justify-content-end">
            <div class="bg-login-desktop"></div>
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="login-form d-flex justify-content-center align-items-center p-100 flex-column g-20">
                            <h1 class="d-flex justify-content-center width-fill">Login</h1>
                            <form action="" method="post" class="d-flex flex-column g-20">
                                <!-- username -->
                                <div class="login-text-inputs">
                                    <div class="input-text-label">Username</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here">
                                        </div>
                                    </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                </div>
                                
                                <!-- password -->
                                <div class="login-text-inputs">
                                    <div class="input-text-label">Password</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here">
                                        </div>
                                    </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                </div>


                                <!-- submit -->
                                <div class="d-flex justify-content-start flex-fill">
                                        <a href="<?=ROOT?>home" class="button" id="submit">
                                            <div class="button-base">
                                                <div class="text">Login</div>
                                            </div>
                                        </a>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <?php $this->view("./includes/footer") ?>
    </div>
</body>
</html>

<script>
    var submit = document.getElementById("submit");
    submit.addEventListener("click", function() {
        window.location.href = "http://localhost:3306/trackNbook/public/home";
    });
</script>

