
  // Select seats using jQuery
  var seats = $('[id^="seatNo-"]:not(.reserved)');
//   var seatsOption = $('[id^="seatNoOption-"]');


  // Function to handle the click event
  function handleEvent() {
    //add seletced attribute to the selected seat option
    var seatOption = $("#seatNoOption-" + parseInt($(this).attr("id").split("-")[1]));
    
    //get the count of elements with class selected
    var selectedSeatCount = $(".comparment  .selected").length;
    
    // get no of passengers from PHP session variable
    var noOfPassengers = $("#noOfPassengers").val();
    // string to int conversion
    noOfPassengers = parseInt(noOfPassengers);
    
    if (selectedSeatCount < noOfPassengers) {
        $(this).toggleClass("selected");
        //add selected attribute to the selected seat option
        seatOption.attr("selected", "selected");
    }
    if (selectedSeatCount >= noOfPassengers) {
        $(".comparment  .selected").removeClass("selected");
        // remove selected attribute to the selected seat option
        $('#hiddenSeats > option[selected="selected"]').removeAttr("selected");
    }
  }

  // Add click event to seats
  seats.click(handleEvent);

  // Select checkbox and box using jQuery
  var checkbox = $("#return");
  var box = $("#toDate");

  // Add click event to checkbox
  checkbox.click(function () {
    if (checkbox.is(":checked")) {
      box.css("display", "block");
    } else {
      box.css("display", "none");
    }
  });

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
// });

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
 
    let htmlscanner = new Html5QrcodeScanner(
        "my-qr-reader",
        { fps: 10, qrbos: 250 }
    );
    htmlscanner.render(onScanSuccess);
});

//popup
