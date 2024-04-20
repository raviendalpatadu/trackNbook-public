<?php $this->view("./includes/header") ?>
<?php

if (!isset($data['errors'])) {
    $data['errors'] = array();
}

// echo "<pre>";

// // print_r($_POST);
// // print_r($data);
// echo "</pre>";
?>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main class="bg">
            <div class="d-flex flex-column align-items-center p-60 ">
                <div class="notificationCard-SG  mt-50 d-flex flex-column align-items-center g-10">

                    <div class="row">

                        <div class="col-8 center-col table profile">
                            <div class="d-flex flex-column align-items-center p-60 ">



                                <div class="">
                                    <p class="notificationHeading mt--20 mb-10">Add New Train</p>
                                </div>



                                <form action="" method="post" class="profile">
                                    <div class="row g-20 mb-20 ">
                                        <div class="row  border-bottom-Lightgray">
                                            <div class="col-12">
                                                <h9 class="text">Train Details</h9>
                                            </div>
                                        </div>

                                        <div class="col-5">
                                            <div class="text-inputs ">
                                                <div class="input-text-label">Train Name</div>
                                                <div class="input-field">
                                                    <div class="text">
                                                        <input type="text" name="train_name" class="type-here" placeholder="Type here">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="assistive-text <?php echo (!array_key_exists('train_name', $data['errors'])) ? 'display-none' : ''; ?>">
                                                <?php echo (isset($data['errors']) && array_key_exists('train_name', $data['errors'])) ? $data['errors']['train_name'] : ''; ?>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="text-inputs">
                                                <div class="input-text-label">Train Route</div>
                                                <div class="width-fill">
                                                    <select class=" input-field dropdown" name="train_route" placeholder="Please choose">
                                                        <option value="0">Please choose</option>

                                                        <?php foreach ($data['routes'] as $key => $value) : ?>
                                                            <option value="<?= $value->route_no ?>" id="trainRoute">
                                                                <?= $value->route_name ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="assistive-text display-none">Assistive Text</div>
                                            </div>

                                        </div>
                                        <div class="assistive-text <?php echo (!array_key_exists('train_route', $data['errors'])) ? 'display-none' : ''; ?>">
                                            <?php echo (array_key_exists('train_route', $data['errors'])) ? $data['errors']['train_route'] : ''; ?>
                                        </div>


                                    </div>

                                    <div class="row g-20 mt-20 mb-20 ">
                                        <div class="col-6">
                                            <div class="text-inputs">
                                                <div class="input-text-label">Start Station</div>
                                                <div class="width-fill">
                                                    <select class="input-field dropdown" name="start_station" placeholder="Please choose" id="startStation">
                                                        <option value="0">Please choose</option>

                                                        <?php foreach ($data['stations'] as $key => $value) : ?>
                                                            <option value="<?= $value->station_id ?>">
                                                                <?= $value->station_name ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="assistive-text display-none">Assistive Text</div>
                                            </div>
                                            <div class="assistive-text <?php echo (!array_key_exists('start_station', $data['errors'])) ? 'display-none' : ''; ?>">
                                                <?php echo (array_key_exists('start_station', $data['errors'])) ? $data['errors']['start_station'] : ''; ?>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="text-inputs">
                                                <div class="input-text-label">Start Time</div>
                                                <div class="input-field">
                                                    <div class="text">
                                                        <input type="time" name="start_time" class="type-here" placeholder="Type here">
                                                    </div>
                                                </div>
                                                <!-- <div class="assistive-text">Assistive Text</div> -->
                                            </div>
                                            <div class="assistive-text <?php echo (!array_key_exists('start_time', $data['errors'])) ? 'display-none' : ''; ?>">
                                                <?php echo (array_key_exists('start_time', $data['errors'])) ? $data['errors']['start_time'] : ''; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-20 mt-20 mb-20 ">
                                        <div class="col-6">
                                            <div class="text-inputs">
                                                <div class="input-text-label">End Station</div>
                                                <div class="width-fill">
                                                    <!-- show max of 5 items in select tag -->
                                                    <select class="input-field dropdown" name="end_station" placeholder="Please choose" id="endStation">
                                                        <option value="0">Please choose</option>

                                                        <?php foreach ($data['stations'] as $key => $value) : ?>
                                                            <option value="<?= $value->station_id ?>">
                                                                <?= $value->station_name ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="assistive-text display-none">Assistive Text</div>
                                            </div>
                                            <div class="assistive-text <?php echo (!array_key_exists('end_station', $data['errors'])) ? 'display-none' : ''; ?>">
                                                <?php echo (array_key_exists('end_station', $data['errors'])) ? $data['errors']['end_station'] : ''; ?>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="text-inputs">
                                                <div class="input-text-label">End Time</div>
                                                <div class="input-field">
                                                    <div class="text">
                                                        <input type="time" name="end_time" class="type-here" placeholder="Type here">
                                                    </div>
                                                </div>
                                                <!-- <div class="assistive-text">Assistive Text</div> -->
                                            </div>
                                        </div>

                                    </div>

                                    <div class="train-stopping-stations mt-20 d-flex flex-row align-items-center g-10 flex-wrap justify-content-left">
                                        <div class="input-text-label">Train Stoping stations</div>
                                    </div>



                                    <div class="row g-30 mb-20">

                                        <div class="row g-20 mt-10 mb-10 ">
                                            <div class="col-6">
                                                <div class="text-inputs">
                                                    <div class="input-text-label">Train Type</div>
                                                    <div class="width-fill">
                                                        <select class=" input-field dropdown" name="train_type" placeholder="Please choose">
                                                            <option value="0">Please choose</option>

                                                            <?php foreach ($data['train_types'] as $key => $value) : ?>
                                                                <option value="<?= $value->train_type_id ?>" id="traintype">
                                                                    <?= $value->train_type ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <div class="assistive-text <?php echo (!array_key_exists('train_type', $data['errors'])) ? 'display-none' : ''; ?>">
                                                        <?php echo (isset($data['errors']) && array_key_exists('train_type', $data['errors'])) ? $data['errors']['train_type'] : ''; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="text-inputs">
                                                    <div class="input-text-label">No of Compartments</div>
                                                    <div class="input-field">
                                                        <div class="text">
                                                            <input type="number" id="noOfCompartments" name="no_of_compartments" class="type-here" placeholder="Type here">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="assistive-text">Assistive Text</div> -->
                                                </div>
                                            </div>

                                        </div>
                                        <div class="assistive-text <?php echo (!array_key_exists('no_of_compartments', $data['errors'])) ? 'display-none' : ''; ?>">
                                            <?php echo (isset($data['errors']) && array_key_exists('no_of_compartments', $data['errors'])) ? $data['errors']['no_of_compartments'] : ''; ?>
                                        </div>
                                    </div>

                                    <div class="row  border-bottom-Lightgray mb-10">
                                        <div class="col-12">
                                            <h7 class="text">Compartment Details</h7>
                                        </div>
                                    </div>
                                    <div class="compartmentDetails mt-20">

                                    </div>


                            </div>


                            <div class="row mt--70 mb-20 g-0 d-flex justify-content-center">


                                <!--    <button class="button mx-10 px-10">
                                        <div class="button-base">
                                            <input type="submit" value="Add" name="submit">
                                        </div>
                                    </button>

                                    <button class="button mx-10 px-10">
                                        <div class="button-base">
                                            <input type="reset" value="reset">
                                        </div>
                                    </button> -->
                                <button class="button mx-10 px-10">
                                    <div class="button-base">
                                        <input type="submit" value="Add" name="submit">
                                    </div>
                                </button>

                                <button class="button mx-10">
                                    <div class="button-base">
                                        <input type="reset" value="Reset">
                                    </div>
                                </button>


                            </div>
                            </form>
                        </div>


                    </div>

        </main>
        <?php $this->view("./includes/footer") ?>
    </div>


</body>

</html>

<script>
    $(document).ready(function() {
        var tag = $('.text-inputs, .login-text-inputs').children('.assistive-text:not(.display-none)');
        var counter = 0;

        // access errors array
        var arr = <?php echo json_encode($data); ?>;
        // console.log(arr);

        // check errors key exists
        if (arr.hasOwnProperty('errors')) {
            tag.each(() => {
                console.log(tag[counter]);
                if (tag[counter++].innerHTML != " ") {
                    tag.parent().children('.input-field').addClass('border-red');
                    tag.parent().children('.input-field').children('.text').children('.type-here').addClass(
                        'red');
                    tag.parent().children('.input-text-label').addClass('red');
                    tag.addClass('red');
                }
            });
        }

        var selectRoute = $('select[name="train_route"]');

        // Adding a change event handler
        selectRoute.on('change', function() {
            // This code will be executed when the value of the select element changes
            var routeId = $('select[name="train_route"]').val();
            // console.log(routeId);
            // get route details
            if (routeId != 0) {
                $.ajax({
                    url: '<?= ROOT ?>/route/getRouteStations/' + routeId,
                    type: 'POST',

                    success: function(data) {
                        // console.log(data);
                        var route = JSON.parse(data);
                        // console.log(route);
                        // add stations names for the select tags in the form
                        var startStation = $('#startStation');
                        var endStation = $('#endStation');
                        startStation.empty();
                        endStation.empty();

                        for (let i = 0; i < route.length; i++) {
                            startStation.append($('<option>', {
                                value: route[i].station_id,
                                text: route[i].station_name
                            }));

                        }

                        for (let i = 0; i < route.length; i++) {
                            endStation.append($('<option>', {
                                value: route[i].station_id,
                                text: route[i].station_name
                            }));
                        }
                        var startList = $('#startStation').parent().find("ul");
                        var endList = $('#endStation').parent().find("ul");
                        startList.empty();
                        endList.empty();
                        $(startStation)
                            .find("option")
                            .each(function() {
                                startList.append($("<li />").append($("<a />").text($(this)
                                    .text())));
                            });
                        $(endStation)
                            .find("option")
                            .each(function() {
                                endList.append($("<li />").append($("<a />").text($(this)
                                    .text())));
                            });
                    }
                });
            }
        });

        // when a user select a route

        var selectElement = $(
            'select[name="train_route"] , select[name="start_station"] , select[name="end_station"]');

        // Adding a change event handler
        selectElement.on('change', function() {
            // This code will be executed when the value of the select element changes
            var routeId = $('select[name="train_route"]').val();
            var startStationId = $('select[name="start_station"]').val();
            var endStationId = $('select[name="end_station"]').val();

            // get route details
            if (routeId != 0 && startStationId != 0 && endStationId != 0) {
                $.ajax({
                    url: '<?= ROOT ?>/route/getRouteStationsWithStartAndEndStaions/',
                    type: 'POST',
                    data: {
                        route_id: routeId,
                        start_station_id: startStationId,
                        end_station_id: endStationId
                    },
                    success: function(data) {
                        // console.log(data);
                        var route = JSON.parse(data);
                        // console.log(route);
                        // add route details to the form
                        var routeDetails = $('.train-stopping-stations');
                        routeDetails.empty();

                        for (let i = 0; i < route.length; i++) {
                            const newRow = `
                                            <div class="d-flex .flex-row g-5">${i + 1}.
                                                <input type="checkbox" class="checkbox" name="stopping_station[id][]" value="${route[i].station_id}" id="">
                                                <label for="">${route[i].station_name}</label>
                                            </div>
                                            `;
                            routeDetails.append(newRow);
                        }
                    }
                });
            }
        });


        // add compartment details
        var noOfCompartments = $('#noOfCompartments').val();

        // update the value of a key when a user press the key
        $('#noOfCompartments').keyup(function() {
            noOfCompartments = $('#noOfCompartments').val();

            // add input fields for no of compartments entered
            // console.log(noOfCompartments)
            const outputContainer = $('.compartmentDetails');

            $('#noOfCompartments').on('input', function() {
                generateTags(outputContainer);
            });



            function generateTags(outputContainer) {
                const inputValue = $('#noOfCompartments').val();

                // Clear previous content
                outputContainer.empty();

                // Generate tags based on the input value
                for (let i = 0; i < inputValue; i++) {
                    // const newTag = $('<p>').text(`Tag ${i + 1}`);
                    // outputContainer.append(newTag);

                    const newRow = `

                    



                    <div class="row g-20 mt-20 mb-20 ">

<div class="col-2">
    <div class="text-inputs">
        <div class="input-text-label">Compartment Class</div>
        <div class="input-field">
            <div class="text">
            <input type="text" name="compartment[class][]" class="type-here" placeholder="eg: 1st class">
            </div>
        </div>
        <div class="assistive-text <?php echo (!array_key_exists('no_of_compartments', $data['errors'])) ? 'display-none' : ''; ?>"><?php echo (isset($data['errors']) && array_key_exists('no_of_compartments', $data['errors'])) ? $data['errors']['no_of_compartments'] : ''; ?></div>
    </div>
</div><div class="col-3">
<div class="text-inputs">
        <div class="input-text-label">Train Route</div>
        <div class="width-fill">
        <select class="input-field dropdown" name="compartment[type][]" placeholder="Please choose">
                                                    <option value="0">Please choose</option>

                                                    <?php foreach ($data['compartment_types'] as $key => $value) : ?>
                                                                                            <option value="<?= $value->compartment_class_type_id ?>" id="trainRoute">
                                                                                                <?= $value->compartment_class_type ?>
                                                                                            </option>
                                                    <?php endforeach; ?>
                                                </select>
                                
        </div>
        <div class="assistive-text <?php echo (!array_key_exists('compartment[type][]', $data['errors'])) ? 'display-none' : ''; ?>">
                                                <?php echo (array_key_exists('compartment[type][]', $data['errors'])) ? $data['errors']['compartment[type][]'] : ''; ?>
                                            </div>
    </div>



</div>
<div class="col-3">
    <div class="text-inputs">
        <div class="input-text-label">Seat layout</div>
        <div class="input-field">
            <div class="text">
            <input type="text" name="compartment[seat_layout][]" class="type-here" placeholder="eg: 2x3">
            </div>
        </div>
        <div class="assistive-text <?php echo (!array_key_exists('no_of_compartments', $data['errors'])) ? 'display-none' : ''; ?>"><?php echo (isset($data['errors']) && array_key_exists('no_of_compartments', $data['errors'])) ? $data['errors']['no_of_compartments'] : ''; ?></div>
    </div>
</div>
<div class="col-2">
    <div class="text-inputs">
        <div class="input-text-label">Total Seats</div>
        <div class="input-field">
            <div class="text">
            <input type="text" name="compartment[total_seats][]" class="type-here" placeholder="eg: 48">
            </div>
        </div>
        <div class="assistive-text <?php echo (!array_key_exists('no_of_compartments', $data['errors'])) ? 'display-none' : ''; ?>"><?php echo (isset($data['errors']) && array_key_exists('no_of_compartments', $data['errors'])) ? $data['errors']['no_of_compartments'] : ''; ?></div>
    </div>
</div>
<div class="col-2">
    <div class="text-inputs">
        <div class="input-text-label">No of Compartments</div>
        <div class="input-field">
            <div class="text">
            <input type="text" name="compartment[total_no][]" class="type-here" placeholder="eg: no of compartments">
            </div>
        </div>
        <div class="assistive-text <?php echo (!array_key_exists('no_of_compartments', $data['errors'])) ? 'display-none' : ''; ?>"><?php echo (isset($data['errors']) && array_key_exists('no_of_compartments', $data['errors'])) ? $data['errors']['no_of_compartments'] : ''; ?></div>
    </div>
</div>
</div>



                                    `;
                    outputContainer.append(newRow);

                }
            }

            // bug when compartment ro is genarates the top select tags are not working
            $(outputContainer).find("select.dropdown").each(function() {
                var dropdown = $("<div />").addClass("dropdown selectDropdown");

                $(this).wrap(dropdown);

                var label = $("<span />")
                    .text($(this).attr("placeholder"))
                    .insertAfter($(this));
                var list = $("<ul />");

                label.attr("class", "input-field");

                $(this)
                    .find("option")
                    .each(function() {
                        list.append($("<li />").append($("<a />").text($(this).text())));
                    });

                list.insertAfter($(this));

                if ($(this).find("option:selected").length) {
                    label.text($(this).find("option:selected").text());
                    list
                        .find("li:contains(" + $(this).find("option:selected").text() + ")")
                        .addClass("active");
                    $(this).parent().addClass("filled");
                }
            });


            $(outputContainer).on("click touch", ".selectDropdown ul li a", function(e) {
                e.stopImmediatePropagation();
                console.log($(this).text());
                var dropdown = $(this).parent().parent().parent();
                // console.log(dropdown);
                var active = $(this).parent().hasClass("active");
                var label = active ?
                    dropdown.find("select").attr("placeholder") :
                    $(this).text();


                console.log($(this));


                dropdown.find("option").prop("selected", false);
                dropdown.find("ul li").removeClass("active");

                dropdown.toggleClass("filled", !active);
                dropdown.children("span").text(label);
                if (!active) {
                    dropdown
                        .find("option:contains(" + $(this).text() + ")")
                        .prop("selected", true);

                    $(this).parent().addClass("active");
                }

                dropdown.removeClass("open");

                //trigger change event
                dropdown.find("select").trigger("change");
            });

            $(".dropdown > span").on("click touch", function(e) {
                var self = $(this).parent();
                self.toggleClass("open");
            });

            $(outputContainer).on("click touch", function(e) {
                var dropdown = $(".dropdown");
                if (dropdown !== e.target && !dropdown.has(e.target).length) {
                    dropdown.removeClass("open");
                }
            });



        });



    });
</script>