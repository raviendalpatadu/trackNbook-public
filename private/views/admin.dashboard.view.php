<?php $this->view("./includes/header"); ?>
<?php $this->view("./includes/load-js"); ?>


<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main style="background-color:#EFF8FF;">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="if-txt-wrapper">Hello,
                            <?= ucfirst(Auth::user()) ?>
                        </div>

                    </div>
                </div>
            </div>

            <!-- cards -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="if-widgets">
                            <div class="if-frame">
                                <div class="div">
                                    <div class="if-frame-2">
                                        <div class="impressions">Number of Train Onboard</div>
                                    </div>
                                    <div class="number">
                                        <?= $data['trainsCount'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="if-frame">
                                <div class="if-frame-3">
                                    <div class="if-frame-4">
                                        <div class="impressions">Inquiries</div>
                                    </div>
                                    <div class="number">35</div>
                                </div>
                            </div>
                            <div class="if-frame">
                                <div class="div">
                                    <div class="if-frame-4">
                                        <div class="impressions">Staffs On Duty</div>
                                    </div>
                                    <div class="number">
                                        <?= $data['usersCount'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="if-frame">
                                <div class="div">
                                    <div class="if-frame-4">
                                        <div class="impressions">Cancelled Trains</div>
                                    </div>
                                    <div class="number">4</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <br><br>

            <div class='container'>
                <div class='row'>
                    <div class='col-6 pr-10'>
                        <div class="chart-card">
                            <canvas id="myChart" width="100%" height="60%"></canvas>
                        </div>
                    </div>
                    <div class='col-6 chart-card'>
                        <p2 class="blue" style="font-weight: bold; font-size: 18px;">Disable Trains</p2>
                        <table class="if-table stripe hover" id="userTable" style:width=80%>
                            <thead>
                                <tr>
                                    <th class=" ">
                                        Train Name
                                    </th>
                                    <th class=" ">
                                        Train No
                                    </th>
                                    <th class=" ">
                                        Train Type
                                    </th>
                                    <th class=" ">
                                        Disable Period
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['trains'] as $train): ?>
                                    <tr class="p-20">
                                        <td class="">
                                            <?= $train->train_name ?>
                                        </td>
                                        <td class="">
                                            <?= $train->train_id?>
                                        </td>
                                        <td class="">
                                            <?= $train->train_type ?>
                                        </td>
                                        <td class="">
                                            <?= $train->disable_period_start_date . " -" . $train->disable_period_end_date ?>
                                        </td>
                                        
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>






    </div>

    </main>
    </div>


</body>

</html>
<script>
      $(document).ready(function() {
            new DataTable('#userTable', {
                // fixedHeight: true
            });
        });
</script>
<script>
    $(document).ready(function () {
        $.ajax({
            url: '<?= ROOT ?>ajax/getAllReservations',
            type: 'GET',
            success: function (dataR, response) {
                console.log(dataR);
                var reservations = JSON.parse(dataR);
                console.log(reservations);

                // Get unique reservation dates
                var uniqueDates = [...new Set(reservations.map(reservation => reservation.reservation_date.split(' ')[0]))];

                // Sort dates in ascending order
                uniqueDates.sort((a, b) => new Date(a) - new Date(b));

                var dataN = [];
                uniqueDates.forEach(dateStr => {
                    var count = reservations.filter(reservation => reservation.reservation_date.split(' ')[0] == dateStr).length;
                    dataN.push(count);
                });

                console.log(dataN);
                //setup Block
                const data = {
                    labels: uniqueDates,
                    datasets: [{
                        label: 'No of Reservations',
                        data: dataN,
                        borderWidth: 2,
                    }]
                };

                const config = {
                    type: 'bar',
                    data,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                };

                const myChart = new Chart(
                    document.getElementById('myChart'),
                    config

                );
            }
        });
    });
</script>