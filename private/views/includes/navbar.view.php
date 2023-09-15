<style>
  /* nav div.container-fluid ul li a {
    width: 110px;
    text-align: center;
    border-left: 1px solid lightcyan;
    /* border-right: 1px solid lightcyan; */

  /* }
  nav div.container-fluid ul li a:hover {

    background-color: lightskyblue;
    color: white !important;

  }  */
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary mb-1">
  <div class="container-fluid">
    <a class="navbar-brand fs-5" href="#">
    <img src="<?=ASSETS?>/img/logo.png" alt="logo" style="width: 35px;">
    <?=Auth::getschool_name()?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= ROOT ?>dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ROOT ?>schools">Schools</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ROOT ?>users">Staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ROOT ?>students">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ROOT ?>classes">Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ROOT ?>tests">Tests</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user"></i> <?=Auth::getfirst_name()?>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= ROOT ?>profile/<?=Auth::getUser_id();?>"><i class="far fa-user-circle"> </i> &nbsp Profile</a></li>
            <li><a class="dropdown-item" href="<?= ROOT ?>dashboard"><i class="fas fa-tachometer-alt"></i> &nbsp Dashbord</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="<?= ROOT ?>logout"><i class="fas fa-sign-out-alt"></i> &nbsp logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>