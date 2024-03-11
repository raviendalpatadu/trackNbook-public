// Select seats using jQuery
var fromSeats = $('[id^="fromSeatNo-"]:not(.reserved)');
//   var seatsOption = $('[id^="seatNoOption-"]');

// Function to handle the click event
function handleEventFrom() {
  //add seletced attribute to the selected seat option
  var seatOption = $(
    "#fromSeatNoOption-" + parseInt($(this).attr("id").split("-")[1])
  );

  //get the count of elements with class selected
  var selectedSeatCount = $(
    "#fromSeatMap").find(".comparment  .selected , #fromSeatMap .comparment .selected-complete"
  ).length;

  // string to int conversion
  // get no of passengers from PHP session variable
  var noOfPassengers = parseInt($("#noOfPassengers").val());

  if ($(this).hasClass("selected")) {
    $(this).removeClass("selected");
    if ($(this).hasClass("selected-complete")) {
      $(this).removeClass("selected-complete");
    }
    --selectedSeatCount;
    seatOption.removeAttr("selected");
  } else {
    $(this).addClass("selected");
    ++selectedSeatCount;

    seatOption.attr("selected", "selected");
  }

  if (noOfPassengers == selectedSeatCount) {
    $("#fromSeatMap .comparment .selected").addClass("selected-complete");
  }

  if (selectedSeatCount < noOfPassengers) {
    if ($("#fromSeatMap .comparment .selected").hasClass("selected-complete")) {
      $("#fromSeatMap .comparment .selected").removeClass("selected-complete");
      seatOption.removeAttr("selected");
    }
  }

  if (selectedSeatCount > noOfPassengers) {
    seatOption.removeAttr("selected");
    $("#fromSeatMap .comparment .selected").removeClass("selected-complete");
    $("#fromSeatMap .comparment .selected").removeClass("selected");
    $("option[id*=fromSeatNoOption-]").each(function (params) {
      $(this).removeAttr("selected");
    });
    selectedSeatCount = 0;

    console.log("selectd " + selectedSeatCount);
    console.log("noOfPas " + noOfPassengers);

    $(this).addClass("selected");
    seatOption.attr("selected", "selected");
    selectedSeatCount++;
    if (noOfPassengers == selectedSeatCount) {
      $("#fromSeatMap .comparment .selected").addClass("selected-complete");
    }
  }

  $("#fromSeatCountSelected span").text(selectedSeatCount + "/" + noOfPassengers);
}

// Add click event to seats
fromSeats.click(handleEventFrom);

// Select seats using jQuery
var toSeats = $('[id^="toSeatNo-"]:not(.reserved)');

// Function to handle the click event
function handleEventTo() {
  //add seletced attribute to the selected seat option
  var seatOption = $(
    "#toSeatNoOption-" + parseInt($(this).attr("id").split("-")[1])
  );

  //get the count of elements with class selected
  var selectedSeatCount = $("#toSeatMap").find(
    ".comparment  .selected , #toSeatMap .comparment .selected-complete"
  ).length;

  // string to int conversion
  // get no of passengers from PHP session variable
  var noOfPassengers = parseInt($("#noOfPassengers").val());

  if ($(this).hasClass("selected")) {
    $(this).removeClass("selected");
    if ($(this).hasClass("selected-complete")) {
      $(this).removeClass("selected-complete");
    }
    --selectedSeatCount;
    seatOption.removeAttr("selected");
  } else {
    $(this).addClass("selected");
    ++selectedSeatCount;

    seatOption.attr("selected", "selected");
  }

  if (noOfPassengers == selectedSeatCount) {
    $("#toSeatMap .comparment .selected").addClass("selected-complete");
  }

  if (selectedSeatCount < noOfPassengers) {
    if ($("#toSeatMap .comparment .selected").hasClass("selected-complete")) {
      $("#toSeatMap .comparment .selected").removeClass("selected-complete");
      seatOption.removeAttr("selected");
    }
  }

  if (selectedSeatCount > noOfPassengers) {
    seatOption.removeAttr("selected");
    $("#toSeatMap .comparment .selected").removeClass("selected-complete");
    $("#toSeatMap .comparment .selected").removeClass("selected");
    $("option[id*=toSeatNoOption-]").each(function (params) {
      $(this).removeAttr("selected");
    });
    selectedSeatCount = 0;

    console.log("selectd " + selectedSeatCount);
    console.log("noOfPas " + noOfPassengers);

    $(this).addClass("selected");
    seatOption.attr("selected", "selected");
    selectedSeatCount++;
    if (noOfPassengers == selectedSeatCount) {
      $("#toSeatMap .comparment .selected").addClass("selected-complete");
    }
  }

  $("#toSeatCountSelected span").text(
    selectedSeatCount + "/" + noOfPassengers
  );
}

// Add click event to seats
toSeats.click(handleEventTo);

// Select checkbox and box using jQuery
var checkbox = $("#return");
var box = $("#toDate");

// Add click event to checkbox
checkbox.click(function () {
  if (checkbox.is(":checked")) {
    // show the box with an animation
    //box.css("display", "block");
    box.fadeIn(300);
  } else {
    box.css("display", "none");
  }
});

if (checkbox.is(":checked")) {
  box.css("display", "block");
}

// clear the value in the box when the checkbox is unchecked

//warrent booking toggle
var warrent = $("#warrentBooking");
var chooseImg = $("#chooseImg");

// Add click event to warrent
warrent.click(function () {
  if (warrent.is(":checked")) {
    chooseImg.css("display", "block");
  } else {
    chooseImg.css("display", "none");
  }
});
// });

//drop down

$("select.dropdown").each(function () {
  var dropdown = $("<div />").addClass("dropdown selectDropdown");

  $(this).wrap(dropdown);

  var label = $("<span />")
    .text($(this).attr("placeholder"))
    .insertAfter($(this));
  var list = $("<ul />");

  label.attr("class", "input-field");

  $(this)
    .find("option")
    .each(function () {
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

$(document).on("click touch", ".selectDropdown ul li a", function (e) {
  e.preventDefault();
  var dropdown = $(this).parent().parent().parent();
  var active = $(this).parent().hasClass("active");
  var label = active
    ? dropdown.find("select").attr("placeholder")
    : $(this).text();

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

$(".dropdown > span").on("click touch", function (e) {
  var self = $(this).parent();
  self.toggleClass("open");
});

$(document).on("click touch", function (e) {
  var dropdown = $(".dropdown");
  if (dropdown !== e.target && !dropdown.has(e.target).length) {
    dropdown.removeClass("open");
  }
});

// $(document).ready(function () {
$("#popup").hide();

$("#yes").on("click", function () {
  $("#popup").show();
});

$("#no").on("click", function () {
  $("#popup").hide();
});
//});

//QR Code Scanner
function domReady(fn) {
  if (
    document.readyState === "complete" ||
    document.readyState === "interactive"
  ) {
    setTimeout(fn, 1000);
  } else {
    document.addEventListener("DOMContentLoaded", fn);
  }
}

domReady(function () {
  // If found you qr code
  function onScanSuccess(decodeText, decodeResult) {
    // alert("You Qr is : " + decodeText);

    // redirect to decodetext
    window.location.replace(decodeText);
  }

  let htmlscanner = new Html5QrcodeScanner("my-qr-reader", {
    fps: 10,
    qrbos: 250,
  });
  htmlscanner.render(onScanSuccess);
});

//popup

function hello() {
  alert("hello");
}

// get errors from the server

function getErrors(url, data, callback) {
  $.ajax({
    url: url,
    type: "post",
    data: data,
    success: function (data, status) {
      // console.log(data);

      var res = JSON.parse(data);

      // if res has error throw an error
      if (res == true) {
        // console.log(res);
        callback(res);
      }

      if (res.hasOwnProperty("errors")) {
        callback(res.errors);
        // xhr = res.errors;
        printErrors(res);
      }
    }
  });
}

function printErrors(errors) {
  if ($("div.assistive-text").length) {
    $("div.assistive-text").remove();
  }

  var errs = errors.errors;
  // loop through the errors
  for (var key in errs) {
    if (errs.hasOwnProperty(key)) {
      var value = errs[key];

      var tag = $("[name=" + key + "]")
        .parent()
        .parent();

      var errorDiv = $("<div class='assistive-text'></div>").text(value);
      tag.append(errorDiv);
    }
  }
}

var shown = false;
setInterval(function () {
  var ROOTURL = "http://localhost/trackNbook/public/";
  $.ajax({
    url: ROOTURL + "ajax/getSession/reservation",
    type: "post",
    success: function (response) {
      var res = JSON.parse(response);
      var created_time = new Date(res.reservation_created_time);

      var now = new Date();
      var distance = now - created_time;
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var reservation_status = res.reservation_status;
      if (minutes > 10 && reservation_status == "Pending") {
        // create a popup message called reservation expired try again to book
        if (!shown) {
          shown = true;
          var reservationExpMsg = $("<div/>")
            .addClass("reservation-expired")
            .appendTo("body");
          var expBox = $("<div/>")
            .addClass("exp-box")
            .appendTo(reservationExpMsg);

          var expMsg = $("<div/>").appendTo(expBox);
          var errTitle = $("<h2/>").addClass("err-title").appendTo(expMsg);
          var errDesc = $("<p/>").addClass("err-desc").appendTo(expMsg);
          var expBtnBox = $("<div></div>")
            .addClass("d-flex justify-content-end")
            .appendTo(expBox);
          var closeButton = $("<button/>")
            .addClass("button")
            .appendTo(expBtnBox);
          var buttonBase = $("<div/>")
            .addClass("button-base")
            .appendTo(closeButton);
          var buttonText = $("<div/>").addClass("text").appendTo(buttonBase);
          buttonText.text("Close");

          closeButton.on("click", function () {
            reservationExpMsg.remove();
            window.location.replace(ROOTURL);
          });
          errTitle.text("Reservation Expired");
          errDesc.text(
            "Your reservation has expired. Please try again to book."
          );
          // expBtn.text("Ok");
        }
      }
    },
  });
}, 1000);
