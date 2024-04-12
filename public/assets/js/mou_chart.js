const ctx1 = document.getElementById("bookingChart");

const data1 = {
  labels: [
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Staurday",
    "Sunday",
  ],
  datasets: [
    {
      label: "bookings",
      data: [65, 59, 80, 81, 56, 55, 40],
      fill: false,
      borderColor: "rgb(75, 192, 192)",
      tension: 0.1,
    },
  ],
};

new Chart(ctx1, {
  type: "line",
  data: data1,
});

const ctx2 = document.getElementById("bookingpie");
const data2 = {
  datasets: [
    {
      label: "Total reservations",
      data: [300, 50, 100],
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};
const pie = new Chart(ctx2, {
  type: "doughnut",
  data: data2,
});

function resize() {
  pie.resize(200, 200);
}

resize();
