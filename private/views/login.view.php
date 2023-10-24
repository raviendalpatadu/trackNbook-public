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
                                            <input type="text" class="type-here" placeholder="Type here" name="username">
                                        </div>
                                    </div>
                                    <?php if (isset($data['errors'])) : ?>
                                        <div class="assistive-text <?php echo (!array_key_exists('errors', $data)) ? 'display-none' : ''; ?>"> <?php echo (array_key_exists('username', $data['errors'])) ? $data['errors']['username'] : ''; ?></div>
                                    <?php endif ?>
                                </div>

                                <!-- password -->
                                <div class="login-text-inputs">
                                    <div class="input-text-label">Password</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="password" class="type-here " placeholder="Type here" name="password">
                                        </div>
                                    </div>
                                    <?php if (isset($data['errors'])) : ?>
                                        <div class="assistive-text <?php echo (!array_key_exists('errors', $data)) ? 'display-none' : ''; ?>"> <?php echo (array_key_exists('password', $data['errors'])) ? $data['errors']['password'] : ''; ?></div>
                                    <?php endif ?>
                                </div>

                                <!-- submit -->
                                <div class="d-flex justify-content-between flex-fill">
                                    <div class="button-base">
                                        <input class="text" type="submit" value="submit" name="submit">
                                    </div>

                                    <!-- create account -->
                                    <div class="button-base p-1 size-10 ">
                                        <a href="<?=ROOT?>passenger/register" >Create Account</a>
                                    </div>
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
    $(document).ready(function() {
        var tag = $('.login-text-inputs:not(.display-none)').children('.assistive-text');
        var counter = 0;

        // access errors array
        var arr = <?php echo json_encode($data); ?>;

        // check errors key exists
        if (arr.hasOwnProperty('errors')) {
            tag.each(() => {
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