<?php $this->view("./includes/header"); ?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>
        <main style="background-color:#EFF8FF; padding:20px;">
            <div class="row">
                <div class="col-4"></div>
                <div class="main-box center_form1">
                    <div class="top-head-updatetrainarrival">Update train Delay</div>
                    <div class="fields">
                        <p class="text">Train ID </p>
                        <p class="text">: 1095</p>
                    </div>
                    <div class="fields">
                        <p class="text">Train Name </p>
                        <p class="text"> : YAL NILA</p>
                    </div>
                    <div class="fields">
                        <p class="text">Date </p>
                        <p class="text">: 23/09/2023</p>
                    </div>
                    <div class="fields">
                        <p class="text">From </p>
                        <p class="text">: KKS - 05.30</p>
                    </div>
                    <div class="fields">
                        <p class="text">To </p>
                        <p class="text">: Colombo - 12.30</p>
                    </div>
                    <div class="fields">
                        <p class="text">Current Station </p>
                        <p class="text">: Kodikaamam - 06.30</p>
                    </div>
                    <div class="fields">
                        <p class="text-last">Confirm train delay by </p>
                    </div>



                    <div class="col-4">
                        <div class="endline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="3" viewBox="0 0 682 3"
                                fill="none">
                                <path d="M0 1L681.999 2" stroke="black" />
                            </svg>
                        </div>
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
        .main-box {
            width: 100%;
            /* Make it full width */
            max-width: 100%;
            /* Allow it to shrink on smaller screens */
            margin: 10% 5px;
            /* Adjust margin for better spacing on smaller screens */
        }

        .fields {
            flex-wrap: wrap;
            /* Allow fields to wrap on smaller screens */
            margin-bottom: 20px;
            /* Reduce margin for better spacing on smaller screens */
        }

        .text,
        .text-last {
            width: 100%;
            /* Make text fields 100% width for smaller screens */
        }

        .activation-field {
            flex-direction: column;
            /* Stack buttons vertically on smaller screens */
        }

        .activation-field {
            display: flex;
            justify-content: flex-end;
            width: calc(105% - 10px);
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
            padding: 12px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            border-radius: 5px;
            background: rgba(33, 133, 213, 0.77);
            position: absolute;
            top: 0;
            margin-top: -23px;
            margin-left: 263px;
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
            width: 682px;
            height: 450px;
            padding: 50px;
            flex-direction: column;
            align-items: flex-start;
            flex-shrink: 0;
            background: #FAFAFA;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            padding: 34px;
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
            width: 168px;
            color: var(--sementics-color-fg-default, #18181B);
            font-family: Inter;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: 115%;
            text-align: justify;
        }

        .text-last {
            width: 220px;
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