<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>TrackNBook</title>
  <!-- Font Awesome -->


</head>

<body>

  <?php
  if (Auth::getuser_type() == "ticket_checker") {
    $sidebar_list = [
      [
        "name" => "Dashboard",
        "link" => "ticketchecker/dashboard",
        "icon" => "home.svg"
      ],
      [
        "name" => "QR Scan",
        "link" => "ticketchecker/QR",
        "icon" => "qr.svg"
      ],
      [
        "name" => "Reservation List",
        "link" => "ticketchecker/reservationList",
        "icon" => "reservation.svg"
      ]
    ];
  } elseif (Auth::getuser_type() == "train_driver") {
    $sidebar_list = [
      [
        "name" => "Dashboard",
        "link" => "dashboard/train_driver",
        "icon" => "home.svg"
      ],
      [
        "name" => "Update Location",
        "link" => "traindriver/addlocation",
        "icon" => "qr.svg"
      ],
      [
        "name" => "Update Delay",
        "link" => "traindriver/trainDelay",
        "icon" => "reservation.svg"
      ]
    ];
  }
  ?>
  <div class="col-12 d-flex align-items-center  border-top-mobile-nav-bar bg-Background-colour-nav">

  </div>
  <nav class="nav-dashboard px-20">

    <div class="brand">
      <label class="burger" for="burger">
        <input type="checkbox" id="burger">
        <span></span>
        <span></span>
        <span></span>
      </label>
      <div class="brand-text">TrackNBook</div>

    </div>
    <a href="<?= ROOT ?>notification" class="mobile-navbar-notification-icon">
  <svg xmlns="http://www.w3.org/2000/svg" class="mr--13" width="34" height="34" viewBox="0 0 20 20" fill="none">
    <path d="M15 10.9832V8.33317C14.9988 7.15244 14.5798 6.01023 13.8172 5.10882C13.0546 4.2074 11.9976 3.60496 10.8334 3.40817V2.49984C10.8334 2.27882 10.7456 2.06686 10.5893 1.91058C10.433 1.7543 10.2211 1.6665 10 1.6665C9.77903 1.6665 9.56707 1.7543 9.41079 1.91058C9.2545 2.06686 9.16671 2.27882 9.16671 2.49984V3.40817C8.00249 3.60496 6.94548 4.2074 6.18286 5.10882C5.42025 6.01023 5.00124 7.15244 5.00004 8.33317V10.9832C4.51375 11.1551 4.09254 11.4732 3.79416 11.8939C3.49577 12.3147 3.33482 12.8174 3.33337 13.3332V14.9998C3.33337 15.2209 3.42117 15.4328 3.57745 15.5891C3.73373 15.7454 3.94569 15.8332 4.16671 15.8332H6.78337C6.97528 16.5393 7.39421 17.1627 7.97554 17.6071C8.55687 18.0515 9.26829 18.2923 10 18.2923C10.7318 18.2923 11.4432 18.0515 12.0245 17.6071C12.6059 17.1627 13.0248 16.5393 13.2167 15.8332H15.8334C16.0544 15.8332 16.2663 15.7454 16.4226 15.5891C16.5789 15.4328 16.6667 15.2209 16.6667 14.9998V13.3332C16.6653 12.8174 16.5043 12.3147 16.2059 11.8939C15.9075 11.4732 15.4863 11.1551 15 10.9832ZM6.66671 8.33317C6.66671 7.44912 7.0179 6.60127 7.64302 5.97615C8.26814 5.35103 9.11599 4.99984 10 4.99984C10.8841 4.99984 11.7319 5.35103 12.3571 5.97615C12.9822 6.60127 13.3334 7.44912 13.3334 8.33317V10.8332H6.66671V8.33317ZM10 16.6665C9.70918 16.6647 9.42385 16.5869 9.1724 16.4407C8.92095 16.2945 8.71213 16.0851 8.56671 15.8332H11.4334C11.2879 16.0851 11.0791 16.2945 10.8277 16.4407C10.5762 16.5869 10.2909 16.6647 10 16.6665ZM15 14.1665H5.00004V13.3332C5.00004 13.1122 5.08784 12.9002 5.24412 12.7439C5.4004 12.5876 5.61236 12.4998 5.83337 12.4998H14.1667C14.3877 12.4998 14.5997 12.5876 14.756 12.7439C14.9122 12.9002 15 13.1122 15 13.3332V14.1665Z" fill="#71839B"></path>
  </svg>
  <svg class="dote  mb-30" xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none" mt-10>
              <circle cx="2" cy="2" r="2" fill="#FF472E"></circle>
            </svg>
</a>

      
    <a href="<?= ROOT ?>profile" class="mobile-navbar-profile-img">
      <img src="<?= ASSETS ?>images/avatar1.png" alt="TrackNBook">
    </a>
    <a href="#" class="dropdown-icon">&#9660;</a>
    <div id="profile-dropdown" class="profile-dropdown-mobile-nav-bar">


      <li class="navbar-item"><a href="<?= ROOT ?>home"><i class="fas fa-home"></i> Home</a></li>
      <li class="navbar-item"><a href="<?= ROOT ?>services/contact"><i class="fas fa-envelope"></i> Contact</a></li>
      <li class="navbar-item"><a href="<?= ROOT ?>services/termsAndConditions"><i class="fas fa-file"></i> Terms &
          Conditions</a></li>
      <li class="navbar-item"><a href="<?= ROOT ?>train/track"><i class="fas fa-train"></i> Track Train</a></li>
      <?php if (Auth::is_logged_in()): ?>
        <li class="navbar-item"><a href="<?= ROOT ?>passenger/reservation/<?= Auth::getuser_id() ?>"><i
              class="fas fa-book"></i> Reservations</a></li>
      <?php endif; ?>
      <?php if (Auth::is_logged_in()): ?>
        <li class="navbar-item"><a href="<?= ROOT ?>services/inquires"><i class="fas fa-question"></i> Inquiries</a></li>
      <?php endif; ?>
      <li><a href="<?= ROOT ?>settings"><i class="fas fa-cog"></i> Settings</a></li>
      <li><a href="<?= ROOT ?>logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </div>
  </nav>

  <div class="nav-menu-items px-50" id="menu items">
    <ul>
      <?php foreach ($sidebar_list as $item) { ?>
        <a href="<?= ROOT . $item['link'] ?>">
          <li> <?= $item['name'] ?></li>
        </a>
      <?php } ?>
    </ul>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const burgerIcon = document.querySelector('.burger');
      const dropdownIcon = document.querySelector('.dropdown-icon');
      const profileDropdown = document.getElementById('profile-dropdown');

      burgerIcon.addEventListener('click', function () {
        profileDropdown.classList.remove('show');
      });

      dropdownIcon.addEventListener('click', function (e) {
        e.preventDefault();
        profileDropdown.classList.toggle('show');
      });

      // Close dropdown when clicking outside of it
      window.addEventListener('click', function (event) {
        if (!event.target.matches('.profile-img img') && !event.target.matches('.dropdown-icon')) {
          if (profileDropdown.classList.contains('show')) {
            profileDropdown.classList.remove('show');
          }
        }
      });
    });
  </script>

</body>

</html>