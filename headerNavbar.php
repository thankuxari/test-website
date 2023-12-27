<?php

    include('header.php');

?>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src="images/4569.png" alt="SkateLogo" width="120" height="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="skateboards.php">SKATE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="brands.php">BRANDS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="clothing.php">ΡΟΥΧΑ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accessories.php">ΑΞΕΣΟΥΑΡ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">ABOUT US</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Αναζήτηση" aria-label="Search">
        <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
      </form>
        <li class="nav-item d-flex align-items-center mx-3">
          <a class="nav-link mx-2 text-light loginbutton" href="login.php"><i class="bi bi-person" title="Ο Λογαριασμός Μου"></i></a>
        </li>
        <li class="nav-item d-flex align-items-center mx-2 cartbutton">
          <a class="nav-link mx-2 text-light" href="cart.php" title="Καλάθι"><i class="bi bi-cart"></i></a>
          <a class="text-light " href="cart.php" >0</a>
        </li>
    </div>
  </div>
</nav>
</header>



