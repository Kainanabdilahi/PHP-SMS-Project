<?php 

include ("./src/connection.php");
include ("./src/sidebar.php");



// SQL queries to select all rows
$row_products = "SELECT * FROM products";
$row_customers = "SELECT * FROM customer";
$row_employees = "SELECT * FROM employee";
$row_users = "SELECT * FROM users";
$row_sales = "SELECT * FROM sales";


// Execute the queries
$result_products = $conn->query($row_products);
$result_customers = $conn->query($row_customers);
$result_employees = $conn->query($row_employees);
$result_users = $conn->query($row_users);
$result_sales = $conn->query($row_sales);


// Get the number of rows
$count_products = $result_products->num_rows;
$count_customers = $result_customers->num_rows;
$count_employees = $result_employees->num_rows;
$count_users = $result_users->num_rows;
$count_sales = $result_sales->num_rows;


// Display the results
// echo "$count_products";
// echo "$count_customers";
// echo "$count_employees";
// echo "$count_users";
// echo "$count_sales";

?>

    <!-- Start Content  -->

    <div class="content d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light">
        <?php include ("./src/header.php");?>
      <div class="main-content">

          <div class="row gap-3 p-1">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-sm border p-5 col">
              <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                  <i class="fa-solid fa-box-open fs-1 text-danger"></i>
                </div>
                <div class="col-md-8 text-center">
                  <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text"><?php echo "$count_products"; ?></p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-sm border p-5 col">
              <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                  <i class="fa-solid fa-users fs-1 text-danger"></i>
                </div>
                <div class="col-md-8 text-center">
                  <div class="card-body">
                    <h5 class="card-title">Customer</h5>
                    <p class="card-text"><?php echo "$count_customers"; ?></p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-sm border p-5 col">
              <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                  <i class="fa-solid fa-users-rectangle fs-1 text-danger"></i>
                </div>
                <div class="col-md-8 text-center">
                  <div class="card-body">
                    <h5 class="card-title">Employee</h5>
                    <p class="card-text"><?php echo "$count_employees"; ?></p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-sm border p-5 col">
              <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                  <i class="fa-solid fa-dollar-sign fs-1 text-danger"></i>
                </div>
                <div class="col-md-8 text-center">
                  <div class="card-body">
                    <h5 class="card-title">Sales</h5>
                    <p class="card-text"><?php echo "$count_sales"; ?></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card 5 -->
            <div class="bg-white rounded-lg shadow-sm border p-5 col">
              <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                  <i class="fa-solid fa-person fs-1 text-danger"></i>
                </div>
                <div class="col-md-8 text-center">
                  <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text"><?php echo "$count_users"; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

    <!-- Start Content  -->

        <div class="my-3">
          <h3>Last Orders</h3>
        </div>

        <table class='table my-3 table-bordered bg-white'>
                <tr class='table-dark p-5'>
                  <th>Order ID</th>
                  <th>Customer Name</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
                </tr>

          <?php

           // SQL query to fetch data

          $sql = "SELECT id, cname, pname, quantity, price, total FROM orders ORDER BY id DESC LIMIT 5";
          $result = $conn->query($sql);

           // check the query 
           if(!$result){
            die("invalid query:" . mysqli_error($conn));
          }

          // Output data of each row
          while ($row = $result->fetch_assoc()) {
            ?>   
                         <tr>
                            <td><?php echo $row["id"]?></td>
                            <td><?php echo $row["cname"]?></td>
                            <td><?php echo $row["pname"]?></td>
                            <td><?php echo $row["quantity"]?></td>
                            <td>$<?php echo $row["price"]?></td>
                            <td>$<?php echo $row["total"]?></td>
                         </tr>
                    <?php }?>
                   </table>
      </div>
    </div>

    <!-- End Content  -->

<?php include("./src/footer.php")?>