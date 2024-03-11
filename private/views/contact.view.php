<?php $this->view("./includes/header"); ?>



<body>
    <div class="column-left">
        <?php $this->view("./includes/navbar") ?>
        <main style="background-color:#EFF8FF; padding:20px;">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 center_form1">
                    <form class="contact">

                        <h1>Contact us</h1><br>
                        <div class="form-group-contact">
                            <label for="tamilNumberName">Email ID</label>
                            <input class="text-field-box-contact" placeholder="Ex : achchuth@gmail.com ">

                            </input>
                        </div>
                        <div class="form-group-contact">
                            <label for="tamilNumberName">Name</label>
                            <input class="text-field-box-contact" placeholder="Ex : Achchuthan ">

                            </input>
                        </div>

                        <div class="form-group-contact">
                            <label for="departureTime">Mobile No</label>
                            <input class="text-field-box-contact" placeholder="Ex : 0771234567" />
                        </div>
                        <div class="form-group-contact">
                            <label for="departure">Subject</label>
                            <select class="text-field-contact" id="departure">
                                <option value="option1">Select Subject</option>
                                <option value="option2">Complaint</option>
                                <option value="option3">Compliment</option>
                                <option value="option3">Other</option>

                            </select>
                        </div>
                        <div class="form-group-contact">
                            <label for="departureTime">Message</label>
                            <input class="text-field-box-message-contact" />
                        </div>
                        <div class="activation-field-contact">
                            <button class="button-white-contact"> Send</button>

                        </div>


                </div>
            </div>
            </form>


    </div>
    <div class="col-4"></div>

    </div>
    </main>
    </div>


</body>

</html>



</body>

</html>