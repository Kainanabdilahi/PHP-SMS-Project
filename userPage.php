<?php include("./src/connection.php") ?>
<?php include("./src/userSidebar.php")?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bootstrap 5 Layout</title>
    <!-- Bootstrap Link  -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <!-- Bootstrap icons Link  -->
    <!-- Option 1: Include in HTML -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>

<!-- Header -->

<!-- Content -->

<style>
    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: start;
      margin: 20px;
      justify-content: center;
    }
    .card {
      min-width: 240px;
      transition: transform 0.2s ease-in-out; /* Animation for hover */
      margin: 10px;
    }
    .card:hover {
        transform: scale(1.09);
        background-color: #eee;
        color: blue;
        

    }
    .white-on-hover {
        color: white;
        transition: color 0.2s ease-in-out;
        

    }

  </style>

<body>
    <!-- Start Content  -->

    <div class="content d-flex flex-column">
    <nav class="navbar navbar-expand-lg navbar-light p-2">
        <?php include ("./src/header.php");?>
        <div class="main-content text-center">
        <div class="d-flex flex-row justify-content-between">
          <h3>Avalible Products</h3>
        </div>
        <div class="card-container text-center">
            <?php 
            
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="card mb-3 shadow-sm">
                    <i class="bi bi-cart3 h1 text-danger m-4 white-on-hover"></i>

                        <div class="card-body">
                            <h5 class="card-title">' . $row['name'] . '</h5>
                            <p class="card-text"> Product Price  $' . $row['pries'] . '.</p>
                        </div>
                        <div class="card-footer"><h6>Discount 30%</h6></div>
                    </div>';
                }
            } else {
                echo "No products found";
            }
            
            $conn->close();
            
            
            ?>

        </div>
    </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
