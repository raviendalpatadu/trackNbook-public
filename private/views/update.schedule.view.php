<?php $this->view("./includes/header") ?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main>
            <div class="row" >
                <div class="col-4"></div>
                <div class="col-4 center_form1">
                <form class="update-schedule">
                    <div class="form-group">
                        <label for="tamilNumberName">Tamil Number and Name</label>
                        <select class="text-field" id="tamilNumberName">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="departure">Departure</label>
                        <select class="text-field" id="departure">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="departureTime">Departure Time</label>
                        <select class="text-field" id="departureTime">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="arrival">Arrival</label>
                        <input type="email" class="text-field1" id="arrival" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="arrivalTime">Arrival Time</label>
                        <input type="email" class="text-field1" id="arrivalTime" placeholder="name@example.com">
                    </div>
                </form>
                </div>
                <div class="col-4"></div>
              
            </div>
        </main>
    </div>


</body>

</html>