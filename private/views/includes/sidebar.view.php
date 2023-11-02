<?php
// sidebar list array will be loaded from the role arrayes defiened below
// rolw array is a nested array of the following structure
// array("Sidebar item name", "svg should be given in single quotes", if notifications are there true/false should be given)
$admin = array(
  array("dashboard", '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                  <path d="M8.33333 10.8333H3.33333C3.11232 10.8333 2.90036 10.9211 2.74408 11.0774C2.5878 11.2337 2.5 11.4457 2.5 11.6667V16.6667C2.5 16.8877 2.5878 17.0996 2.74408 17.2559C2.90036 17.4122 3.11232 17.5 3.33333 17.5H8.33333C8.55435 17.5 8.76631 17.4122 8.92259 17.2559C9.07887 17.0996 9.16667 16.8877 9.16667 16.6667V11.6667C9.16667 11.4457 9.07887 11.2337 8.92259 11.0774C8.76631 10.9211 8.55435 10.8333 8.33333 10.8333ZM7.5 15.8333H4.16667V12.5H7.5V15.8333ZM16.6667 2.5H11.6667C11.4457 2.5 11.2337 2.5878 11.0774 2.74408C10.9211 2.90036 10.8333 3.11232 10.8333 3.33333V8.33333C10.8333 8.55435 10.9211 8.76631 11.0774 8.92259C11.2337 9.07887 11.4457 9.16667 11.6667 9.16667H16.6667C16.8877 9.16667 17.0996 9.07887 17.2559 8.92259C17.4122 8.76631 17.5 8.55435 17.5 8.33333V3.33333C17.5 3.11232 17.4122 2.90036 17.2559 2.74408C17.0996 2.5878 16.8877 2.5 16.6667 2.5V2.5ZM15.8333 7.5H12.5V4.16667H15.8333V7.5ZM16.6667 13.3333H15V11.6667C15 11.4457 14.9122 11.2337 14.7559 11.0774C14.5996 10.9211 14.3877 10.8333 14.1667 10.8333C13.9457 10.8333 13.7337 10.9211 13.5774 11.0774C13.4211 11.2337 13.3333 11.4457 13.3333 11.6667V13.3333H11.6667C11.4457 13.3333 11.2337 13.4211 11.0774 13.5774C10.9211 13.7337 10.8333 13.9457 10.8333 14.1667C10.8333 14.3877 10.9211 14.5996 11.0774 14.7559C11.2337 14.9122 11.4457 15 11.6667 15H13.3333V16.6667C13.3333 16.8877 13.4211 17.0996 13.5774 17.2559C13.7337 17.4122 13.9457 17.5 14.1667 17.5C14.3877 17.5 14.5996 17.4122 14.7559 17.2559C14.9122 17.0996 15 16.8877 15 16.6667V15H16.6667C16.8877 15 17.0996 14.9122 17.2559 14.7559C17.4122 14.5996 17.5 14.3877 17.5 14.1667C17.5 13.9457 17.4122 13.7337 17.2559 13.5774C17.0996 13.4211 16.8877 13.3333 16.6667 13.3333ZM8.33333 2.5H3.33333C3.11232 2.5 2.90036 2.5878 2.74408 2.74408C2.5878 2.90036 2.5 3.11232 2.5 3.33333V8.33333C2.5 8.55435 2.5878 8.76631 2.74408 8.92259C2.90036 9.07887 3.11232 9.16667 3.33333 9.16667H8.33333C8.55435 9.16667 8.76631 9.07887 8.92259 8.92259C9.07887 8.76631 9.16667 8.55435 9.16667 8.33333V3.33333C9.16667 3.11232 9.07887 2.90036 8.92259 2.74408C8.76631 2.5878 8.55435 2.5 8.33333 2.5V2.5ZM7.5 7.5H4.16667V4.16667H7.5V7.5Z" fill="#71839B" />
                </svg>', false, "dashboard/admin"),
  array("schedules", '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M15.8332 3.33341H14.1665V2.50008C14.1665 2.27907 14.0787 2.06711 13.9224 1.91083C13.7661 1.75455 13.5542 1.66675 13.3332 1.66675C13.1122 1.66675 12.9002 1.75455 12.7439 1.91083C12.5876 2.06711 12.4998 2.27907 12.4998 2.50008V3.33341H7.49984V2.50008C7.49984 2.27907 7.41204 2.06711 7.25576 1.91083C7.09948 1.75455 6.88752 1.66675 6.6665 1.66675C6.44549 1.66675 6.23353 1.75455 6.07725 1.91083C5.92097 2.06711 5.83317 2.27907 5.83317 2.50008V3.33341H4.1665C3.50346 3.33341 2.86758 3.59681 2.39874 4.06565C1.9299 4.53449 1.6665 5.17037 1.6665 5.83341V15.8334C1.6665 16.4965 1.9299 17.1323 2.39874 17.6012C2.86758 18.07 3.50346 18.3334 4.1665 18.3334H15.8332C16.4962 18.3334 17.1321 18.07 17.6009 17.6012C18.0698 17.1323 18.3332 16.4965 18.3332 15.8334V5.83341C18.3332 5.17037 18.0698 4.53449 17.6009 4.06565C17.1321 3.59681 16.4962 3.33341 15.8332 3.33341V3.33341ZM16.6665 15.8334C16.6665 16.0544 16.5787 16.2664 16.4224 16.4227C16.2661 16.579 16.0542 16.6667 15.8332 16.6667H4.1665C3.94549 16.6667 3.73353 16.579 3.57725 16.4227C3.42097 16.2664 3.33317 16.0544 3.33317 15.8334V10.0001H16.6665V15.8334ZM16.6665 8.33342H3.33317V5.83341C3.33317 5.6124 3.42097 5.40044 3.57725 5.24416C3.73353 5.08788 3.94549 5.00008 4.1665 5.00008H5.83317V5.83341C5.83317 6.05443 5.92097 6.26639 6.07725 6.42267C6.23353 6.57895 6.44549 6.66675 6.6665 6.66675C6.88752 6.66675 7.09948 6.57895 7.25576 6.42267C7.41204 6.26639 7.49984 6.05443 7.49984 5.83341V5.00008H12.4998V5.83341C12.4998 6.05443 12.5876 6.26639 12.7439 6.42267C12.9002 6.57895 13.1122 6.66675 13.3332 6.66675C13.5542 6.66675 13.7661 6.57895 13.9224 6.42267C14.0787 6.26639 14.1665 6.05443 14.1665 5.83341V5.00008H15.8332C16.0542 5.00008 16.2661 5.08788 16.4224 5.24416C16.5787 5.40044 16.6665 5.6124 16.6665 5.83341V8.33342Z" fill="#71839B" />
              </svg>', true, ""),
  array("trains", '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="23" viewBox="0 0 19 23" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M18.25 4.625C18.25 3.46468 17.7891 2.35188 16.9686 1.53141C16.1481 0.710936 15.0353 0.25 13.875 0.25H5.125C3.96468 0.25 2.85188 0.710936 2.03141 1.53141C1.21094 2.35188 0.75 3.46468 0.75 4.625V13.3187C0.749591 14.2534 1.04853 15.1637 1.60301 15.9161C2.1575 16.6685 2.93838 17.2236 3.83125 17.5C5.66597 18.0755 7.57713 18.3705 9.5 18.375C11.4229 18.3701 13.3341 18.0747 15.1687 17.4987C16.0614 17.2224 16.8422 16.6675 17.3966 15.9153C17.9511 15.1632 18.2501 14.2532 18.25 13.3187V4.625ZM2 13.3187V4.625C2 3.7962 2.32924 3.00134 2.91529 2.41529C3.50134 1.82924 4.2962 1.5 5.125 1.5H13.875C14.7038 1.5 15.4987 1.82924 16.0847 2.41529C16.6708 3.00134 17 3.7962 17 4.625V13.3187C17.0003 13.9862 16.7868 14.6362 16.391 15.1736C15.9951 15.7109 15.4375 16.1074 14.8 16.305C13.0848 16.8439 11.2979 17.1203 9.5 17.125C7.7021 17.1203 5.91525 16.8439 4.2 16.305C3.56246 16.1074 3.00493 15.7109 2.60904 15.1736C2.21316 14.6362 1.99973 13.9862 2 13.3187Z" fill="#71839B" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.125 15.25C5.62228 15.25 6.09919 15.0525 6.45083 14.7008C6.80246 14.3492 7 13.8723 7 13.375C7 12.8777 6.80246 12.4008 6.45083 12.0492C6.09919 11.6975 5.62228 11.5 5.125 11.5C4.62772 11.5 4.15081 11.6975 3.79917 12.0492C3.44754 12.4008 3.25 12.8777 3.25 13.375C3.25 13.8723 3.44754 14.3492 3.79917 14.7008C4.15081 15.0525 4.62772 15.25 5.125 15.25ZM5.125 12.75C5.29076 12.75 5.44973 12.8158 5.56694 12.9331C5.68415 13.0503 5.75 13.2092 5.75 13.375C5.75 13.5408 5.68415 13.6997 5.56694 13.8169C5.44973 13.9342 5.29076 14 5.125 14C4.95924 14 4.80027 13.9342 4.68306 13.8169C4.56585 13.6997 4.5 13.5408 4.5 13.375C4.5 13.2092 4.56585 13.0503 4.68306 12.9331C4.80027 12.8158 4.95924 12.75 5.125 12.75ZM13.875 15.25C14.3723 15.25 14.8492 15.0525 15.2008 14.7008C15.5525 14.3492 15.75 13.8723 15.75 13.375C15.75 12.8777 15.5525 12.4008 15.2008 12.0492C14.8492 11.6975 14.3723 11.5 13.875 11.5C13.3777 11.5 12.9008 11.6975 12.5492 12.0492C12.1975 12.4008 12 12.8777 12 13.375C12 13.8723 12.1975 14.3492 12.5492 14.7008C12.9008 15.0525 13.3777 15.25 13.875 15.25ZM13.875 12.75C14.0408 12.75 14.1997 12.8158 14.3169 12.9331C14.4342 13.0503 14.5 13.2092 14.5 13.375C14.5 13.5408 14.4342 13.6997 14.3169 13.8169C14.1997 13.9342 14.0408 14 13.875 14C13.7092 14 13.5503 13.9342 13.4331 13.8169C13.3158 13.6997 13.25 13.5408 13.25 13.375C13.25 13.2092 13.3158 13.0503 13.4331 12.9331C13.5503 12.8158 13.7092 12.75 13.875 12.75Z" fill="#71839B" />
              <path d="M16.4151 22.345C16.4763 22.4959 16.594 22.617 16.7432 22.6824C16.8924 22.7479 17.0612 22.7525 17.2137 22.6953C17.3663 22.6381 17.4904 22.5236 17.5598 22.3762C17.6291 22.2288 17.6382 22.0602 17.5851 21.9062L15.7101 16.9062C15.6478 16.757 15.5301 16.6377 15.3818 16.5734C15.2334 16.5091 15.0659 16.5049 14.9144 16.5615C14.7629 16.6181 14.6393 16.7313 14.5695 16.8771C14.4997 17.023 14.4892 17.1902 14.5401 17.3437L16.4151 22.3437V22.345ZM3.9151 16.9062C3.94157 16.8264 3.98385 16.7528 4.03942 16.6898C4.095 16.6267 4.16271 16.5755 4.23853 16.5392C4.31434 16.503 4.3967 16.4824 4.48066 16.4786C4.56463 16.4749 4.64848 16.4882 4.7272 16.5176C4.80593 16.5471 4.87791 16.5921 4.93883 16.65C4.99976 16.7079 5.04838 16.7774 5.08179 16.8546C5.11521 16.9317 5.13272 17.0148 5.13329 17.0988C5.13385 17.1829 5.11746 17.2661 5.0851 17.3437L3.2101 22.3437C3.14783 22.4929 3.03014 22.6122 2.88176 22.6765C2.73338 22.7408 2.56586 22.7451 2.4144 22.6884C2.26293 22.6318 2.13932 22.5187 2.06952 22.3728C1.99972 22.2269 1.98918 22.0597 2.0401 21.9062L3.9151 16.9062Z" fill="#71839B" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M15.75 5.25C15.75 4.58696 15.4866 3.95107 15.0178 3.48223C14.5489 3.01339 13.913 2.75 13.25 2.75H5.75C5.08696 2.75 4.45107 3.01339 3.98223 3.48223C3.51339 3.95107 3.25 4.58696 3.25 5.25V8.45625C3.25004 8.99803 3.42609 9.52514 3.75162 9.95821C4.07716 10.3913 4.53457 10.7069 5.055 10.8575C6.535 11.2875 8.0175 11.5 9.5 11.5C10.9825 11.5 12.465 11.2863 13.945 10.8575C14.4654 10.7069 14.9228 10.3913 15.2484 9.95821C15.5739 9.52514 15.75 8.99803 15.75 8.45625V5.25ZM4.5 8.45625V5.25C4.5 4.91848 4.6317 4.60054 4.86612 4.36612C5.10054 4.1317 5.41848 4 5.75 4H13.25C13.5815 4 13.8995 4.1317 14.1339 4.36612C14.3683 4.60054 14.5 4.91848 14.5 5.25V8.45625C14.4998 8.72703 14.4118 8.99044 14.249 9.20685C14.0862 9.42326 13.8576 9.58097 13.5975 9.65625C12.2666 10.0467 10.887 10.2466 9.5 10.25C8.13625 10.25 6.77 10.0525 5.4025 9.6575C5.14218 9.58216 4.9134 9.42427 4.75062 9.20761C4.58785 8.99094 4.49989 8.72725 4.5 8.45625Z" fill="#71839B" />
              <path d="M3.5625 20.875C3.39674 20.875 3.23777 20.8092 3.12056 20.6919C3.00335 20.5747 2.9375 20.4158 2.9375 20.25C2.9375 20.0842 3.00335 19.9253 3.12056 19.8081C3.23777 19.6908 3.39674 19.625 3.5625 19.625H16.0625C16.2283 19.625 16.3872 19.6908 16.5044 19.8081C16.6217 19.9253 16.6875 20.0842 16.6875 20.25C16.6875 20.4158 16.6217 20.5747 16.5044 20.6919C16.3872 20.8092 16.2283 20.875 16.0625 20.875H3.5625Z" fill="#71839B" />
            </svg>', false, ""),
  array("track", '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
          <path d="M17.5 2.5L2.5 9.38047H10.3125C10.3954 9.38047 10.4749 9.41339 10.5335 9.472C10.5921 9.5306 10.625 9.61009 10.625 9.69297V17.5L17.5 2.5Z" stroke="#888888" stroke-width="1.5625" stroke-linecap="round" stroke-linejoin="round" />
        </svg>', false, ""),
  array("analytics", '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path d="M18.0915 6.07511C18.014 5.997 17.9218 5.93501 17.8203 5.8927C17.7187 5.8504 17.6098 5.82861 17.4998 5.82861C17.3898 5.82861 17.2809 5.8504 17.1793 5.8927C17.0778 5.93501 16.9856 5.997 16.9081 6.07511L11.6665 11.3251L8.09145 7.74178C8.01398 7.66367 7.92182 7.60168 7.82027 7.55937C7.71872 7.51706 7.6098 7.49528 7.49979 7.49528C7.38978 7.49528 7.28085 7.51706 7.17931 7.55937C7.07776 7.60168 6.98559 7.66367 6.90812 7.74178L1.90812 12.7418C1.83001 12.8192 1.76802 12.9114 1.72571 13.013C1.6834 13.1145 1.66162 13.2234 1.66162 13.3334C1.66162 13.4435 1.6834 13.5524 1.72571 13.6539C1.76802 13.7555 1.83001 13.8476 1.90812 13.9251C1.98559 14.0032 2.07776 14.0652 2.17931 14.1075C2.28086 14.1498 2.38978 14.1716 2.49979 14.1716C2.6098 14.1716 2.71872 14.1498 2.82027 14.1075C2.92182 14.0652 3.01398 14.0032 3.09145 13.9251L7.49979 9.50844L11.0748 13.0918C11.1523 13.1699 11.2444 13.2319 11.346 13.2742C11.4475 13.3165 11.5564 13.3383 11.6665 13.3383C11.7765 13.3383 11.8854 13.3165 11.9869 13.2742C12.0885 13.2319 12.1807 13.1699 12.2581 13.0918L18.0915 7.25845C18.1696 7.18098 18.2316 7.08881 18.2739 6.98726C18.3162 6.88571 18.338 6.77679 18.338 6.66678C18.338 6.55677 18.3162 6.44785 18.2739 6.3463C18.2316 6.24475 18.1696 6.15258 18.0915 6.07511V6.07511Z" fill="#71839B" />
      </svg>',false , "")
);


$sidebar_list = $admin;


?>

<div class="sidebar">
  <div class="sidebar-top">
    <div class="brand">
      <img src="<?= ASSETS ?>images/track-n-book-logo-1.svg" alt="TrackNBook">
      <div class="brand-text">TrackNBook</div>
    </div>
    <div class="sidebar-menu">
      <ul>

        <?php foreach ($sidebar_list as $item) { ?>

          <!-- href shoulbe added -->
          <li class="sidebar-item"><a href="<?= ROOT . strtolower($item[3]); ?>">
              <div class="sidebar-content">
                <div class="sidebar-icon">
                  <?= $item[1] ?>
                </div>
                <div class="sidebar-text"><?= ucfirst($item[0]) ?></div>
                <?php 
                try {
                  if (!isset($item[2])) {
                    throw new Exception;
                  }
                  $notification = $item[2];
                } catch (Exception $e) {
                  $notification = false;
                }
                if ($notification) { ?>
                  <div class="sidebar-icon plus">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M9.99984 1.66675C8.35166 1.66675 6.7405 2.15549 5.37009 3.07117C3.99968 3.98685 2.93158 5.28834 2.30084 6.81105C1.67011 8.33377 1.50509 10.0093 1.82663 11.6258C2.14817 13.2423 2.94185 14.7272 4.10728 15.8926C5.27272 17.0581 6.75758 17.8518 8.37409 18.1733C9.9906 18.4948 11.6662 18.3298 13.1889 17.6991C14.7116 17.0683 16.0131 16.0002 16.9288 14.6298C17.8444 13.2594 18.3332 11.6483 18.3332 10.0001C18.3332 8.90573 18.1176 7.8221 17.6988 6.81105C17.28 5.80001 16.6662 4.88135 15.8924 4.10752C15.1186 3.3337 14.1999 2.71987 13.1889 2.30109C12.1778 1.8823 11.0942 1.66675 9.99984 1.66675V1.66675ZM9.99984 16.6667C8.6813 16.6667 7.39237 16.2758 6.29604 15.5432C5.19971 14.8107 4.34523 13.7695 3.84064 12.5513C3.33606 11.3331 3.20404 9.99269 3.46127 8.69948C3.71851 7.40627 4.35345 6.21839 5.2858 5.28604C6.21815 4.35369 7.40603 3.71875 8.69924 3.46151C9.99245 3.20428 11.3329 3.3363 12.5511 3.84088C13.7692 4.34547 14.8104 5.19995 15.543 6.29628C16.2755 7.39261 16.6665 8.68154 16.6665 10.0001C16.6665 11.7682 15.9641 13.4639 14.7139 14.7141C13.4636 15.9644 11.768 16.6667 9.99984 16.6667V16.6667ZM13.3332 9.16675H10.8332V6.66675C10.8332 6.44573 10.7454 6.23377 10.5891 6.07749C10.4328 5.92121 10.2209 5.83341 9.99984 5.83341C9.77883 5.83341 9.56687 5.92121 9.41059 6.07749C9.25431 6.23377 9.16651 6.44573 9.16651 6.66675V9.16675H6.66651C6.44549 9.16675 6.23353 9.25455 6.07725 9.41083C5.92097 9.56711 5.83317 9.77907 5.83317 10.0001C5.83317 10.2211 5.92097 10.4331 6.07725 10.5893C6.23353 10.7456 6.44549 10.8334 6.66651 10.8334H9.16651V13.3334C9.16651 13.5544 9.25431 13.7664 9.41059 13.9227C9.56687 14.079 9.77883 14.1667 9.99984 14.1667C10.2209 14.1667 10.4328 14.079 10.5891 13.9227C10.7454 13.7664 10.8332 13.5544 10.8332 13.3334V10.8334H13.3332C13.5542 10.8334 13.7662 10.7456 13.9224 10.5893C14.0787 10.4331 14.1665 10.2211 14.1665 10.0001C14.1665 9.77907 14.0787 9.56711 13.9224 9.41083C13.7662 9.25455 13.5542 9.16675 13.3332 9.16675Z" fill="#71839B" />
                    </svg>
                  </div>
                  <div class="badge badge-sidebar bg-red">
                    <div class="badge-text white">2</div>
                  </div>
                  <svg class="sidebar-dote" xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewBox="0 0 4 4" fill="none">
                    <circle cx="2" cy="2" r="2" fill="#FF472E" />
                  </svg>
                <?php } ?>
              </div>
            </a>
          </li>
        <?php } ?>

      </ul>
    </div>
  </div>
  <div class="sidebar-bottom">
    <div class="sidebar-menu">
      <ul>


        <li class="sidebar-item"><a href="<?= ROOT ?>settings">
            <div class="sidebar-content">
              <div class="sidebar-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M16.5836 10.55C16.45 10.3979 16.3763 10.2024 16.3763 9.99999C16.3763 9.79757 16.45 9.60207 16.5836 9.44999L17.6502 8.24999C17.7678 8.11888 17.8408 7.95391 17.8587 7.77875C17.8767 7.60359 17.8387 7.42723 17.7502 7.27499L16.0836 4.39166C15.996 4.2396 15.8626 4.11906 15.7025 4.04723C15.5424 3.97541 15.3637 3.95596 15.1919 3.99166L13.6252 4.30833C13.4259 4.34952 13.2184 4.31632 13.0418 4.21499C12.8653 4.11367 12.7319 3.95123 12.6669 3.75833L12.1586 2.23333C12.1027 2.06781 11.9962 1.92405 11.8541 1.82236C11.712 1.72068 11.5416 1.66621 11.3669 1.66666H8.03357C7.85185 1.65718 7.67202 1.70743 7.52154 1.80976C7.37107 1.91208 7.25822 2.06084 7.20024 2.23333L6.73357 3.75833C6.66857 3.95123 6.53522 4.11367 6.35867 4.21499C6.18212 4.31632 5.97459 4.34952 5.77524 4.30833L4.16691 3.99166C4.00403 3.96864 3.83799 3.99435 3.6897 4.06553C3.5414 4.13671 3.41749 4.25018 3.33357 4.39166L1.66691 7.27499C1.57621 7.42554 1.53542 7.6009 1.55039 7.77601C1.56536 7.95113 1.63531 8.11703 1.75024 8.24999L2.80857 9.44999C2.94217 9.60207 3.01585 9.79757 3.01585 9.99999C3.01585 10.2024 2.94217 10.3979 2.80857 10.55L1.75024 11.75C1.63531 11.883 1.56536 12.0489 1.55039 12.224C1.53542 12.3991 1.57621 12.5745 1.66691 12.725L3.33357 15.6083C3.42115 15.7604 3.5545 15.8809 3.71462 15.9528C3.87473 16.0246 4.05343 16.044 4.22524 16.0083L5.79191 15.6917C5.99125 15.6505 6.19878 15.6837 6.37533 15.785C6.55188 15.8863 6.68524 16.0488 6.75024 16.2417L7.25857 17.7667C7.31655 17.9391 7.4294 18.0879 7.57988 18.1902C7.73035 18.2926 7.91018 18.3428 8.09191 18.3333H11.4252C11.5999 18.3338 11.7704 18.2793 11.9124 18.1776C12.0545 18.0759 12.161 17.9322 12.2169 17.7667L12.7252 16.2417C12.7902 16.0488 12.9236 15.8863 13.1001 15.785C13.2767 15.6837 13.4842 15.6505 13.6836 15.6917L15.2502 16.0083C15.4221 16.044 15.6008 16.0246 15.7609 15.9528C15.921 15.8809 16.0543 15.7604 16.1419 15.6083L17.8086 12.725C17.8971 12.5728 17.935 12.3964 17.9171 12.2212C17.8991 12.0461 17.8261 11.8811 17.7086 11.75L16.5836 10.55ZM15.3419 11.6667L16.0086 12.4167L14.9419 14.2667L13.9586 14.0667C13.3584 13.944 12.734 14.0459 12.2041 14.3532C11.6741 14.6604 11.2754 15.1515 11.0836 15.7333L10.7669 16.6667H8.63357L8.33357 15.7167C8.14178 15.1349 7.74306 14.6437 7.21308 14.3365C6.6831 14.0293 6.05876 13.9273 5.45857 14.05L4.47524 14.25L3.39191 12.4083L4.05857 11.6583C4.46853 11.2 4.69518 10.6066 4.69518 9.99166C4.69518 9.37672 4.46853 8.78335 4.05857 8.32499L3.39191 7.57499L4.45857 5.74166L5.44191 5.94166C6.04209 6.06435 6.66643 5.96239 7.19641 5.65516C7.72639 5.34792 8.12512 4.85679 8.31691 4.27499L8.63357 3.33333H10.7669L11.0836 4.28333C11.2754 4.86513 11.6741 5.35626 12.2041 5.66349C12.734 5.97073 13.3584 6.07268 13.9586 5.94999L14.9419 5.74999L16.0086 7.59999L15.3419 8.34999C14.9365 8.80729 14.7127 9.39723 14.7127 10.0083C14.7127 10.6194 14.9365 11.2094 15.3419 11.6667V11.6667ZM9.70024 6.66666C9.04097 6.66666 8.3965 6.86216 7.84834 7.22843C7.30017 7.5947 6.87293 8.1153 6.62064 8.72438C6.36835 9.33347 6.30234 10.0037 6.43095 10.6503C6.55957 11.2969 6.87704 11.8908 7.34322 12.357C7.80939 12.8232 8.40333 13.1407 9.04994 13.2693C9.69654 13.3979 10.3668 13.3319 10.9758 13.0796C11.5849 12.8273 12.1055 12.4001 12.4718 11.8519C12.8381 11.3037 13.0336 10.6593 13.0336 9.99999C13.0336 9.11594 12.6824 8.26809 12.0573 7.64297C11.4321 7.01785 10.5843 6.66666 9.70024 6.66666V6.66666ZM9.70024 11.6667C9.3706 11.6667 9.04837 11.5689 8.77429 11.3858C8.50021 11.2026 8.28659 10.9423 8.16044 10.6378C8.03429 10.3333 8.00129 9.99815 8.0656 9.67484C8.12991 9.35154 8.28864 9.05457 8.52173 8.82148C8.75481 8.5884 9.05179 8.42966 9.37509 8.36535C9.69839 8.30104 10.0335 8.33405 10.338 8.46019C10.6426 8.58634 10.9029 8.79996 11.086 9.07404C11.2692 9.34813 11.3669 9.67036 11.3669 9.99999C11.3669 10.442 11.1913 10.8659 10.8787 11.1785C10.5662 11.4911 10.1423 11.6667 9.70024 11.6667Z" fill="#71839B" />
                </svg>
              </div>
              <div class="sidebar-text">Settings</div>
            </div>
          </a>
        </li>

        <li class="sidebar-item"><a href="<?= ROOT ?>logout">
            <div class="sidebar-content">
              <div class="sidebar-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M10.4915 10.8334L8.57484 12.7417C8.49673 12.8192 8.43474 12.9113 8.39243 13.0129C8.35012 13.1144 8.32834 13.2234 8.32834 13.3334C8.32834 13.4434 8.35012 13.5523 8.39243 13.6539C8.43474 13.7554 8.49673 13.8476 8.57484 13.925C8.65231 14.0031 8.74447 14.0651 8.84602 14.1075C8.94757 14.1498 9.05649 14.1715 9.1665 14.1715C9.27651 14.1715 9.38544 14.1498 9.48698 14.1075C9.58853 14.0651 9.6807 14.0031 9.75817 13.925L13.0915 10.5917C13.1674 10.5125 13.2268 10.419 13.2665 10.3167C13.3499 10.1138 13.3499 9.88626 13.2665 9.68338C13.2268 9.58108 13.1674 9.48763 13.0915 9.40838L9.75817 6.07504C9.68047 5.99734 9.58823 5.93571 9.48671 5.89366C9.38519 5.85161 9.27639 5.82997 9.1665 5.82997C9.05662 5.82997 8.94781 5.85161 8.8463 5.89366C8.74478 5.93571 8.65254 5.99734 8.57484 6.07504C8.49714 6.15274 8.4355 6.24498 8.39345 6.3465C8.3514 6.44802 8.32976 6.55683 8.32976 6.66671C8.32976 6.77659 8.3514 6.8854 8.39345 6.98692C8.4355 7.08844 8.49714 7.18068 8.57484 7.25838L10.4915 9.16671H2.49984C2.27882 9.16671 2.06686 9.25451 1.91058 9.41079C1.7543 9.56707 1.6665 9.77903 1.6665 10C1.6665 10.2211 1.7543 10.433 1.91058 10.5893C2.06686 10.7456 2.27882 10.8334 2.49984 10.8334H10.4915ZM9.99984 1.66671C8.44241 1.65976 6.91421 2.08939 5.58856 2.90687C4.26291 3.72435 3.19288 4.89697 2.49984 6.29171C2.40038 6.49062 2.38402 6.7209 2.45434 6.93187C2.52467 7.14285 2.67592 7.31725 2.87484 7.41671C3.07375 7.51616 3.30402 7.53253 3.515 7.4622C3.72598 7.39188 3.90038 7.24062 3.99984 7.04171C4.52666 5.97781 5.32803 5.07389 6.32113 4.42337C7.31423 3.77284 8.46302 3.39931 9.6488 3.34137C10.8346 3.28343 12.0143 3.54319 13.0661 4.0938C14.1179 4.64441 15.0036 5.4659 15.6316 6.47337C16.2596 7.48084 16.6072 8.63775 16.6385 9.82453C16.6698 11.0113 16.3836 12.1849 15.8094 13.2241C15.2353 14.2632 14.3941 15.1302 13.3728 15.7354C12.3514 16.3406 11.187 16.6621 9.99984 16.6667C8.75724 16.6721 7.5383 16.327 6.48291 15.6711C5.42753 15.0152 4.57847 14.0749 4.03317 12.9584C3.93371 12.7595 3.75931 12.6082 3.54834 12.5379C3.33736 12.4676 3.10708 12.4839 2.90817 12.5834C2.70926 12.6828 2.558 12.8572 2.48768 13.0682C2.41735 13.2792 2.43371 13.5095 2.53317 13.7084C3.19386 15.038 4.19777 16.1669 5.44106 16.9784C6.68435 17.7899 8.12188 18.2545 9.60494 18.3242C11.088 18.3939 12.5627 18.066 13.8766 17.3746C15.1905 16.6832 16.2958 15.6534 17.0782 14.3916C17.8606 13.1298 18.2917 11.6818 18.3269 10.1975C18.3621 8.71327 18.0001 7.24654 17.2784 5.94907C16.5566 4.6516 15.5014 3.57051 14.2217 2.81763C12.9421 2.06475 11.4845 1.66741 9.99984 1.66671V1.66671Z" fill="#71839B" />
                </svg>
              </div>
              <div class="sidebar-text">Logout</div>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>