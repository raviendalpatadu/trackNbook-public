<?php $this->view("./includes/header") ?>
<?php

if (isset($data['reservations']) && $data['reservations'] != 0) {
    $count = count($data['reservations']);
} else {
    $count = 0;
}
?>
<?php

if (isset($data['reservations']) && $data['reservations'] != 0) {
    $count = count($data['reservations']);
} else {
    $count = 0;
}


echo "<pre>";
// print_r($_POST);
// print_r($_SESSION);
print_r($data);
echo "</pre>";

?>
<?php


$from_compartment = $data['from_compartment'];

$from_total_seats = $from_compartment->compartment_total_seats;
$from_seat_layout = $from_compartment->compartment_seat_layout;

$from_seat_layout = explode("x", $from_seat_layout);
$from_top_seats = $from_seat_layout[0];
$from_bottom_seats = $from_seat_layout[1];

$from_compartment_total_number = $from_compartment->compartment_total_number;
// $from_compartment_total_number = 2;

$from_total_columns = $from_total_seats / ($from_top_seats + $from_bottom_seats);

$from_total_seats = $from_total_seats * $from_compartment_total_number;

$from_seat_no = 1;

$from_reserved_seats = array();
$from_reserved_seats_obj = array();
if (isset($data['from_reservation_seats']) && $data['from_reservation_seats'] != null) {
    foreach ($data['from_reservation_seats'] as $key => $value) {
        $from_reserved_seats[] = $value->reservation_seat;

        $from_reserved_seat =  new stdClass();
        $from_reserved_seat->seat_no = $value->reservation_seat;
        $from_reserved_seat->ticket_id = $value->reservation_ticket_id;

        array_push($from_reserved_seats_obj, $from_reserved_seat);
    }
}





?>

<body>
    <?php $this->view("./includes/mobile-navbar") ?>
    <div class="column-left">
        <main class="bg">
            <div class="home-container d-flex flex-column ">
                <div class="d-flex m-20 justify-contents-start">
                    <div class="">


                        <div class="d-flex g-10">
                            <div class="trains-available mt-10 mb-30 d-flex g-20">
                                <h3 class="line">Reservation List - Udarata Manike</h3>
                            </div>

                        </div>


                        <div class="mt-30 d-flex g-20 mb-30">
                            <div class="d-flex ">
                                <div class="text-inputs">
                                    <div class="input-text-label text lightgray-font">NIC</div>
                                    <div class="input-field">
                                        <div class="text">
                                            <input type="text" class="type-here" placeholder="Type here" name="">
                                        </div>
                                    </div>
                                </div>
                                <div class="assistive-text display-none">Assistive Text</div>
                            </div>
                            <div class="col-3 d-flex align-self-end">
                                <button class="button">
                                    <div class="button-base">
                                        <input type="submit" value="Search" name="submit">
                                    </div>
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 d-flex align-items-center flex-column bg-white shadow p-20 g-20">
                        <form action="" method="post" class="d-flex align-items-center flex-column g-20" id="formFromSelectedSeats">

                            <!-- from selected seats -->
                            <div class="d-flex flex-column align-items-center g-10" id="fromSeatMap">
                                <h2><?= (isset($data['from_compartment_type'])) ? $data['from_compartment_type']->compartment_class_type : "Class type not found" ?></h2>
                                <?php for ($from_compartment = 0; $from_compartment < $from_compartment_total_number; $from_compartment++) : ?>
                                    <div class="comparment d-flex flex-row g-10 p-30 mobile-p-20">
                                        <?php for ($i = 0; $i < $from_total_columns; $i++) { ?>
                                            <div class="seat-row d-flex flex-column align-items-start">
                                                <div class="seats-top d-flex flex-column align-items-start">
                                                    <?php for ($j = 0; $j < $from_top_seats; $j++) { ?>
                                                        <?php
                                                            // how to check if the seat is in the $from_reserved_seats_obj array
                                                            $from_seat = $from_seat_no;
                                                            // $from_seat_no++;
                                                            $from_reserved = false;
                                                            $from_ticket_no = "";
                                                            foreach ($from_reserved_seats_obj as $key => $value) {
                                                                if ($value->seat_no == $from_seat) {
                                                                    $from_reserved = true;
                                                                    $from_ticket_no = $value->ticket_id;
                                                                    break;
                                                                }
                                                            }
                                                            ?>
                                                        <div id="SeatNo-<?= $from_seat_no ?>" data-ticketno = "<?=$from_ticket_no?>" class="seat d-flex flex-column align-items-center justify-content-center <?php echo (in_array($from_seat_no, $from_reserved_seats)) ? "selected" : "" ?>">
                                                            <?= $from_seat_no++ ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="seats-bottom d-flex flex-column align-items-start">
                                                    <?php for ($j = 0; $j < $from_bottom_seats; $j++) { ?>
                                                        <?php
                                                            // how to check if the seat is in the $from_reserved_seats_obj array
                                                            $from_seat = $from_seat_no;
                                                            // $from_seat_no++;
                                                            $from_reserved = false;
                                                            $from_ticket_no = "";
                                                            foreach ($from_reserved_seats_obj as $key => $value) {
                                                                if ($value->seat_no == $from_seat) {
                                                                    $from_reserved = true;
                                                                    $from_ticket_no = $value->ticket_id;
                                                                    break;
                                                                }
                                                            }
                                                            ?>
                                                        <div id="SeatNo-<?= $from_seat_no ?>" data-ticketno = "<?=$from_ticket_no?>" class="seat d-flex flex-column align-items-center justify-content-center <?php echo in_array($from_seat_no, $from_reserved_seats) ? "selected" : "" ?>">
                                                            <?= $from_seat_no++ ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php endfor; ?>
                                <select name="from_selected_seats[]" class="display-none" id="hiddenSeats" multiple="true">
                                    <?php for ($i = 1; $i <= $from_total_seats; $i++) : ?>
                                        <option id="SeatNoOption-<?= $i ?>" value="<?= $i ?>"></option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                        </form>
                    </div>
        </main>
        <?php $this->view('includes/footer'); ?>

    </div>


    <?php $this->view("./includes/load-js") ?>

</body>

</html>

<script>
    $(document).ready(function() {
       var reservedSeats = <?= json_encode($from_reserved_seats_obj)?>;
       console.log(reservedSeats);

        // if clicked on a reservaed seat redirect to booking summary
        $(".seat").click(function() {
            var seatNo = $(this).text();
            var ticketNo = $(this).data('ticketno');
            console.log(ticketNo);
            if (ticketNo != "") {
                window.location.href = "<?= ROOT ?>/ticketchecker/summary/" + ticketNo;
            }
            
        });

    });

</script>