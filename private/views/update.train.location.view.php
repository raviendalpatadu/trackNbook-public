<?php $this->view("./includes/header"); ?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main style="background-color:#EFF8FF; padding:20px;">
            <div class="form-group">
                <label for="departureTime"><b> Train No</b></label>
                <input class="text-field-box-top" placeholder="Ex : 1050" />
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="main-box center_form1">
                    <div class="top-head-updatetrainarrival">Update train Location</div>
                    <div class="head-box">
                        Train Details
                    </div>
                    <div class="fields">
                        <p class="text">Train ID </p>
                        <p class="text">: 1095</p>
                    </div>
                    <div class="fields">
                        <p class="text">Train Name </p>
                        <p class="text">: YAL NILA</p>

                    </div>
                    <div class="fields">
                        <p class="text">Date </p>
                        <p class="text">: 2023-09-21</p>
                    </div>
                    <div class="fields">
                        <p class="text">From</p>
                        <p class="text">: KKS - 05.30</p>
                    </div>
                    <div class="fields">
                        <p class="text">To</p>
                        <p class="text">: Colombo - 12.30</p>
                    </div>
                    <div class="form-group">
                        <label for="departure">Current Station</label>
                        <select class="text-field" id="departure">
                            <option value="option1">Colombo</option>
                            <option value="option2">Anuradhapura</option>
                            <option value="option3">Jaffna</option>
                            <option value="option3">Vavuniya</option>
                            <option value="option3">Kodikamam</option>
                            <option value="option3">Kankesanthurai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="departureTime">Time</label>
                        <input class="text-field-box" placeholder="Ex : 13.30" />
                    </div>


                    <div class="col-4">

                        <div class="activation-field">
                            <button class="button-blue"> Update</button>
                        </div>



                    </div>
                </div>
            </div>
    </div>


    </main>
    </div>
    <?php $this->view("./includes/load-js") ?>

    <style>
        .text-field-box-top {
            display: flex;
            width: 25%;
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
            width: 95%;
            padding: 16px;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
            border-radius: 8px;
            border: 1px solid #CCC;
            background: var(--W-Background, #FFF);
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

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
            width: 100%;
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

        .activation-field {
            display: flex;
            justify-content: flex-end;
            width: calc(923.5% - 10px);
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
            margin-right: 10px;
            width: 12%;
            cursor: pointer;

        }

        .top-head-updatetrainarrival {
            display: inline-flex;
            padding: 21px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            border-radius: 5px;
            background: rgba(33, 133, 213, 0.77);
            position: absolute;
            top: 0;
            margin-top: -23px;
            margin-left: 222px;
            color: #FFF;
            text-align: center;
            font-feature-settings: 'clig' off, 'liga' off;
            font-family: Inter;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 19.444px;

            /* 121.528% */
        }

        .main-box {
            display: flex;
            width: 691px;
            height: 574px;
            flex-direction: column;
            align-items: flex-start;
            flex-shrink: 0;
            background: #FAFAFA;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            padding: 45px;
            position: relative;
            margin-top: 10%;

        }

        /* Set the main-box to relative positioning */

        .fields {
            display: flex;
            align-items: center;
            width: 100%;
            margin-bottom: 50px;
            gap: 20px;
        }

        .text {
            width: 175px;
            color: var(--sementics-color-fg-default, #18181B);
            font-family: Inter;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: 115%;
            text-align: justify;
        }
    </style>
</body>

</html>