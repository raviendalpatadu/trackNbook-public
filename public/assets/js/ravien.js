
var seats = document.querySelectorAll('[id^="seatNo-"]');

function handleEvent(event) {
    
    event.target.classList.toggle('selected');
}

seats.forEach(function(seat) {
    seat.addEventListener("click", handleEvent);
});

const checkbox = document.getElementById('return');

const box = document.getElementById('toDate');

checkbox.addEventListener('click', function handleClick() {
  if (checkbox.checked) {
    box.style.display = 'block';
  } else {
    box.style.display = 'none';
  }
});