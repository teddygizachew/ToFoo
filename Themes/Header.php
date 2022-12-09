<?php
//This loads the required bootstrap styles, html header, and required meta tags
// makes the code feel cleaner
require_once("Settings.php");
?>
<!--Header Theme -->
<!-- function to check if user is logged in here-->

<!--logged in user view-->
    <title>Tofoo Food Delivery</title>

    <nav class="navbar navbar-expand-xl" style="background-color:lightcoral">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><h2>ToFoo</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><h1>Account<h1></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><h1>Signout<h1></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <h1>Cart</h1>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">View</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" Style href="#">Check Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--Visitor view-->

<!--
<nav class="navbar navbar-expand-lg" style="background-color:lightcoral">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><h2>ToFoo</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><h3>Login<h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><h3>Signup<h3></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
-->

<!-- Admin view -->
<!--
<nav class="navbar navbar-expand-lg" style="background-color:lightcoral">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><h2>ToFoo</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><h3>Account<h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><h3>Signout<h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><h3>Admin Dashboard<h3></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
-->
  </head>