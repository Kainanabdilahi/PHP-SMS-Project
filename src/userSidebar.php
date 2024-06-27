<?php

session_start();

if (!isset ($_SESSION['username'])){
  header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Dashboard</title>
    <!-- Bootstrap Link  -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <!-- Bootstrap icons Link  -->
    <!-- Option 1: Include in HTML -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Style sheet  -->
    <link rel="stylesheet" href="./src/style.css" />
    <!-- Fontawesom CDN Link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Javascript file  -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- Start sidebar  -->
    <div class="sidebar d-flex flex-column p-3">
      <h4 class="text-center pt-3 ">User Mode</h4>
      <hr />
      <ul class="nav flex-column">

        <!-- <li class="nav-item mb-3">
          <a class="nav-link" href="./products.php"><i class="bi bi-inboxes-fill m-1"></i> Product</a>
        </li> -->
        <li class="nav-item mb-3">
          <a class="nav-link" href="./userPage.php"><i class="bi bi-inboxes-fill m-1"></i> Product</a>
        </li>


        <li class="nav-item mb-3">
          <a class="nav-link" href="./about.php"><i class="fa-solid fa-book m-1"></i> About Maamus </a>
        </li>

        <li class="nav-item mb-3">
          <a class="nav-link" href="./logOut.php"><i class="fa-solid fa-power-off m-1"></i> Logout</a>
        </li>
      </ul>
    </div>

    <!-- End sidebar  -->

