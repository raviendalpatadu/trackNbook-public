<?php $this->view("./includes/header"); ?>



<body>
    <div class="column-left">
        <?php $this->view("./includes/navbar") ?>
        <main style="background-color:#EFF8FF; padding:20px;">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 center_form1">
                    <form class="update-schedule">

                        <h1>Contact us</h1><br>
                        <div class="form-group">
                            <label for="tamilNumberName">Email ID</label>
                            <input class="text-field-box" placeholder="Ex : achchuth@gmail.com ">

                            </input>
                        </div>
                        <div class="form-group">
                            <label for="tamilNumberName">Name</label>
                            <input class="text-field-box" placeholder="Ex : Achchuthan ">

                            </input>
                        </div>

                        <div class="form-group">
                            <label for="departureTime">Mobile No</label>
                            <input class="text-field-box" placeholder="Ex : 0771234567" />
                        </div>
                        <div class="form-group">
                            <label for="departure">Subject</label>
                            <select class="text-field" id="departure">
                                <option value="option1">Select Subject</option>
                                <option value="option2">Complaint</option>
                                <option value="option3">Compliment</option>
                                <option value="option3">Other</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="departureTime">Message</label>
                            <input class="text-field-box-message" />
                        </div>
                        <div class="activation-field">
                            <button class="button-white"> Send</button>

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
<?php $this->view('includes/load-js');?>

</html>


<style>
.activation-field {
    display: flex;
    justify-content: flex-end;
    width: calc(156% - 10px);
    gap: 20px;
}

.button-blue {
    display: inline-flex;
    padding: 16px;
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
    border-radius: 8px;
    border: 1px solid #FFF;
    background: #2185D5;
    cursor: pointer;
    color: white;
    width: 13%;
    /* Set the text color to white */
    /* You can add additional styling here, such as padding, border, etc. */
}

.button-white {
    display: inline-flex;
    padding: 16px;
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
    border-radius: 8px;
    border: 2px solid #2185D5;
    background: var(--W-Background, #FFF);
    margin-right: 268px;
    width: 9%;
    cursor: pointer;

}


.top-head-updatetrain {
    display: inline-flex;
    padding: 32px;
    justify-content: center;
    align-items: center;
    gap: 10px;
    border-radius: 5px;
    background: rgba(33, 133, 213, 0.77);
    position: absolute;
    top: 0;
    margin-top: 133px;
    margin-left: 145px;
    color: #FFF;
    text-align: center;
    font-feature-settings: 'clig'off, 'liga'off;
    font-family: Inter;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: 0.444px;
    /* 121.528% */
}

.head-box {
    position: relative;
    display: flex;
    width: 83%;
    height: 36px;
    padding: 1px 42px;
    justify-content: center;
    align-items: center;
    gap: 10px;
    flex-shrink: 0;
    border-radius: 2px;
    background: rgba(102, 102, 102, 0.94);
    color: #FFF;
    font-family: Inter;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    margin-bottom: 20px;
}

.update-schedule {
    margin-top: 4%;
    display: flex;
    width: 500px;
    height: 614px;
    padding: 51px;
    flex-direction: column;
    align-items: flex-start;
    background: #FAFAFA;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
}

.form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
    width: 100%;
}

label {
    color: #666;
    font-family: Noto Sans;
    font-size: 16px;
    font-style: normal;
    font-weight: 600;
    line-height: 18px;
    /* 112.5% */
}

.text-field {
    display: flex;
    width: 100%;
    padding: 16px;
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
    border-radius: 8px;
    border: 1px solid #CCC;
    background: var(--W-Background, #FFF);
}

.text-field-box {
    display: flex;
    width: 93%;
    padding: 16px;
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
    border-radius: 8px;
    border: 1px solid #CCC;
    background: var(--W-Background, #FFF);
}

.text-field-box-message {
    display: flex;
    width: 93%;
    height: 160px;
    padding: 16px;
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
    border-radius: 8px;
    border: 1px solid #CCC;
    background: var(--W-Background, #FFF);
}

.box-3 {
    display: flex;
    gap: 50px;
}

.box {
    width: calc(25% - 0px);
}

.inputs {
    width: 90%;
    padding: 16px;
    border-radius: 8px;
    border: 1px solid #CCC;
    background: var(--W-Background, #FFF);
}

.lab-small {
    color: #666;
    font-family: Noto Sans;
    font-size: 13px;
    font-style: normal;
    font-weight: 400;
    line-height: 18px;
    /* 138.462% */
}
</style>
</body>

</html>