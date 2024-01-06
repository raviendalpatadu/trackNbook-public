<?php
// Include the header view
$this->view("includes/header");
?>

<?php
if (!isset($data['errors'])) {
    $data['errors'] = array();
}

$stations = array("Select a station", "colombo", "kandy", "ella");
$stations_prices = array(
    array("colombo", "x", "0", "0"),
    array("kandy", "1000", "x", "0"),
    array("ella", "2000", "1500", "x")
);
?>

<body>
    <?php
    // Include the sidebar view
    $this->view("includes/sidebar");
    ?>
    <div class="column-left">
        <?php
        // Include the dashboard navbar view
        $this->view("includes/dashboard-navbar");
        ?>

        <main style="background-color:#EFF8FF;">
            <div class="container">
                <div class="row">
                    <div class="col-8 center-col table profile">
                        <h1>Add Price</h1>
                        <div class="text-inputs">
                            <div class="input-text-label mt-20">Train Route</div>
                            <div class="width-fill" id="">
                                <!-- show max of 5 items in select tag -->
                                <select class=" input-field dropdown" name="train_route" placeholder="Please choose">
                                    <option value="0">Please choose</option>

                                    <?php foreach ($data['routes'] as $key => $value) : ?>
                                        <option value="<?= $value->route_no ?>" id="trainRoute">
                                            <?= $value->route_name ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="assistive-text <?php echo (!array_key_exists('train_route', $data['errors'])) ? 'display-none' : ''; ?>">
                                <?php echo (array_key_exists('train_route', $data['errors'])) ? $data['errors']['train_route'] : ''; ?>
                            </div>
                        </div>

                        <form action="" method="post">
                            <table border="1" class="price-table" id="priceTable">
                                <thead>
                                    <tr>

                                    </tr>

                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php
        // Include the footer view
        $this->view("includes/footer");

        ?>
    </div>
</body>

<script>
    $(document).ready(function() {

        // var table = $(".price-table");
        // var rowHead = table.find("thead > tr");
        // // select all rows except the first one
        // var rows = table.find("tr:not(:first)");
        // console.log(rows);

        // rowHead.children().each(function() {
        //     console.log($(this).text());
        // });

        // rows.each(function() {
        //     var row = $(this);
        //     console.log(row.children());
        //     var firstCell = row.children().first();

        // });

        var selectRoute = $('select[name="train_route"]');
        var table = $("#priceTable");

        // Adding a change event handler
        selectRoute.on('change', function() {
            // This code will be executed when the value of the select element changes
            var routeId = $('select[name="train_route"]').val();
            // var trainTypeId = $('select[name="train_type"]').val();
            var trainTypeId = 1;
            console.log(routeId);
            // get route details
            if (routeId != 0) {
                $.ajax({
                    url: '<?= ROOT ?>/route/getRouteStations/',
                    type: 'POST',
                    data: {
                        route_id: routeId
                    },
                    success: function(data) {
                        // console.log(data);
                        var route = JSON.parse(data);
                        console.log(route);

                        table.find("thead > tr").empty();
                        table.find("tbody").empty();
                        // add route stations to table
                        var rowHead = table.find("thead > tr");

                        // add route stations to table head
                        rowHead.append("<th>Stations</th>");
                        for (var i = 0; i < route.length; i++) {
                            rowHead.append("<th>" + route[i].station_name + "</th>");
                        }

                        // add route stations to table body
                        for (var i = 0; i < route.length; i++) {
                            var row = "<tr>";
                            row += "<td>" + route[i].station_name + "</td>";
                            for (var j = 0; j < route.length; j++) {
                                if (i == j) {
                                    row += "<td><input type='number' data-start-station ='" +  route[i].station_name  + "' data-end-station ='" +  route[j].station_name  + "'  id='priceInput' name='fare[" + routeId + "][" + trainTypeId + "][" + route[i].station_name + "][" + route[j].station_name + "]' value='0' disabled></td>";
                                } else {
                                    row += "<td><input type='number' data-start-station ='" + route[i].station_name  + "' data-end-station ='" + route[j].station_name  + "'  id='priceInput' name='fare[" + routeId + "][" + trainTypeId + "][" + route[i].station_name + "][" + route[j].station_name + "]' value='0'></td>";
                                }
                            }
                            row += "</tr>";
                            table.find("tbody").append(row);
                        }


                        // select priceInput
                        var priceInput = $("input[id*=\"priceInput\"]");

                        // add the same value to the coressponding input field for examlple kandy colombo corresponds to colombo kandy

                        priceInput.change(function() {

                            var price = $(this).val();
                            console.log(price);
                            var changedField = $(this).attr('name');
                            
                            // get the start station and end station
                            var startStation = $(this).attr('data-start-station');
                            var endStation = $(this).attr('data-end-station');
                            
                            // get the input field with the same start and end station
                            var inputField = $("input[name*='" + endStation + "'][name*='" + startStation + "']");
                            inputField.val(price);

                        });

                    }
                });
            }
        });



    });
</script>

</html>