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
    <title>Dashboard</title>
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
      <h4 class="text-center pt-3 ">Admin Panel</h4>
      <hr />
      <ul class="nav flex-column">
        <li class="nav-item mb-3">
          <a class="nav-link" href="./Dashboard.php"><i class="fa-solid fa-house m-1"></i> Dashboard</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link" href="./customer.php"><i class="fa-solid fa-users m-1"></i> Customer</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link" href="./employee.php"><i class="fa-solid fa-users-rectangle m-1"></i> Employee</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link" href="./products.php"><i class="bi bi-inboxes-fill m-1"></i> Product</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link" href="./orders.php"><i class="bi bi-cart-plus-fill m-1"></i> Orders</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link" href="./sales.php"><i class="fa-solid fa-sack-dollar m-1"></i> Sales</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link" href="./users.php"><i class="fa-solid fa-user m-1"></i> Users</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link" href="./finance.php"><i class="bi bi-cash-stack m-1"></i> Finance</a>
        </li>
        <li class="nav-item mb-3">
          <a class="nav-link" href="./logOut.php"><i class="fa-solid fa-power-off m-1"></i> Logout</a>
        </li>
      </ul>
    </div>

    <!-- End sidebar  -->

