<?php

$total_seats = 60;
$top_seats = 2;
$bottom_seats = 3;

$total_columns = $total_seats / ($top_seats + $bottom_seats);
$seat_no = 1;

$reserved_seats = array(1, 32, 43, 24, 40, 6, 57, 8);


?>


<?php $this->view("./includes/header"); ?>

<body>
    <div class="column-left">
        <?php $this->view("./includes/navbar") ?>
        <main class="d-flex align-items-center">
            <div class="container d-flex justify-content-center flex-grow">
                <div class="passenger-container">
                    <!-- complete loader -->

                    <div class="row">
                        <div class="col-6 width-fill d-flex">
                            <div class="map flex-grow">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.639037666256!2d79.84747207399552!3d6.933673918262988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25922460c269b%3A0x6acb064d943db619!2sColombo%20Fort%20Station%2C%20Colombo!5e0!3m2!1sen!2slk!4v1696417695820!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <div class="col-6 d-flex flex-column justify-content-center align-items-center p-20">
                            <div class="d-flex justify-content-start flex-column g-20 track-content">
                                <div class="d-flex flex-row align-items-center g-10">
                                    <h2 class="topic black">Current Station</h2>
                                    <p class="track-text d-flex align-self-end flex-grow">Colombo Fort</p>
                                </div>
                                <div class="d-flex flex-row align-items-center g-10">
                                    <h2 class="topic black">Arrived at</h2>
                                    <p class="track-text d-flex align-self-end flex-grow">06.00</p>
                                </div>
                                <div class="d-flex flex-row align-items-center g-10">
                                    <h3 class="topic black">Next Station</h3>
                                    <p class="track-text d-flex align-self-end flex-grow">Maradana</p>
                                </div>
                                <div class="d-flex flex-row align-items-center g-10">
                                    <h4 class="topic black">Train Name</h4>
                                    <p class="track-text d-flex align-self-end flex-grow">Udarata Menike Express Train</p>
                                </div>
                                <div class="d-flex flex-row align-items-center g-10">
                                    <h4 class="topic black">Train No</h4>
                                    <p class="track-text d-flex align-self-end flex-grow">1106</p>
                                </div>
                                <div class="d-flex flex-row align-items-center justify-content-end g-10">
                                    <button class="button"><a href="<?=ROOT?>home">
                                        <div class="button-base">
                                            <div class="text">Back</div>
                                        </div></a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

        </main>
        <?php $this->view('includes/footer'); ?>
    </div>


</body>

</html>