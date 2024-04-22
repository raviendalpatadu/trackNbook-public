<?php $this->view("./includes/header") ?>
<?php
if (!isset($data['errors'])) {
    $data['errors'] = array();
}

$stationCount = isset($_POST['station_count']) ? intval($_POST['station_count']) : 0; // Default value is 5
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
                                    <p class="notificationHeading mt--20 mb-10">Add New Route</p>
                                </div>

                                <?php if (isset($data['errors']['database'])) : ?>
                                    <div class="alert alert-danger">
                                        <?= $data['errors']['database'] ?>
                                    </div>
                                <?php endif; ?>

                                <form action="" method="post" class="profile" id="routeForm">
                                    <div class="row g-20 mb-20 ">
                                        <div class="row  border-bottom-Lightgray">
                                            <div class="col-12">
                                                <h9 class="text">Route Details</h9>
                                            </div>
                                        </div>

                                        <div class="col-5">
                                            <div class="text-inputs ">
                                                <div class="input-text-label">Route Name</div>
                                                <div class="input-field">
                                                    <div class="text">
                                                        <input type="text" name="route_name" class="type-here" placeholder="Type here">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="assistive-text <?php echo (!array_key_exists('route_name', $data['errors'])) ? 'display-none' : ''; ?>">
                                                <?php echo (isset($data['errors']) && array_key_exists('route_name', $data['errors'])) ? $data['errors']['route_name'] : ''; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Input field for station count -->
                                    <div class="col-5">
                                        <div class="text-inputs ">
                                            <div class="input-text-label">Number of Stations</div>
                                            <div class="input-field">
                                                <div class="text">
                                                    <input type="number" name="station_count" class="type-here" placeholder="Type here" id="stationCount" value="<?= $stationCount ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Station dropdowns -->
                                    <div id="stationDropdowns">
                                        <?php for ($i = 1; $i <= $stationCount; $i++) : ?>
                                            <div class="row g-20 mt-20 mb-20 stationRow">
                                                <div class="col-6">
                                                    <div class="text-inputs">
                                                        <div class="input-text-label">Station <?= $i ?></div>
                                                        <div class="width-fill">
                                                            <select class="input-field dropdown" name="station[]" placeholder="Please choose">
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
                                                    <div class="assistive-text <?php echo (!array_key_exists('station' . $i, $data['errors'])) ? 'display-none' : ''; ?>">
                                                        <?php echo (array_key_exists('station' . $i, $data['errors'])) ? $data['errors']['station' . $i] : ''; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>

                                    <div class="row mt-20 mb-20 g-0 d-flex justify-content-center">
                                        <!-- <button class="button mx-10 px-10"> -->
                                        <div class="button-base">
                                            <input type="submit" value="Add" name="submit">
                                        </div>
                                        <!-- </button> -->

                                        <button class="button mx-10">
                                            <div class="button-base">
                                                <input type="reset" value="Reset">
                                            </div>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->view("./includes/footer") ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const stationCountInput = document.getElementById('stationCount');
            const stationDropdowns = document.getElementById('stationDropdowns');

            stationCountInput.addEventListener('input', () => {
                const count = parseInt(stationCountInput.value, 10);
                let html = '';

                for (let i = 1; i <= count; i++) {
                    html += `
                        <div class="row g-20 mt-20 mb-20 stationRow">
                            <div class="col-6">
                                <div class="text-inputs">
                                    <div class="input-text-label">Station ${i}</div>
                                    <div class="width-fill">
                                        <select class="input-field dropdown" name="station[]"
                                            placeholder="Please choose">
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
                                <div class="assistive-text"></div>
                            </div>
                        </div>
                    `;
                }

                stationDropdowns.innerHTML = html;

                // makeSelectBox('.dropdown');
                const outputContainer = $('#stationDropdowns');

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
</body>

</html>