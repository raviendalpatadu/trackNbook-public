
var seats = document.querySelectorAll('[id^="seatNo-"]');

function handleEvent(event) {
    
    event.target.classList.toggle('selected');
}

seats.forEach(function(seat) {
    seat.addEventListener("click", handleEvent);
});
